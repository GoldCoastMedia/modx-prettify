<?php
/**
 * Prettify
 *
 * Copyright (c) 2013 Gold Coast Media Ltd
 *
 * This file is part of Prettify for MODx.
 *
 * Prettify is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Prettify is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Prettify; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package prettify
 * @author  Dan Gibbs <dan@goldcoastmedia.co.uk>
 */

class Prettify {

	public $modx;

	public $config = array(
		'autoloader'  => TRUE,
		'code'        => NULL,
		'css'         => NULL,
		'entities'    => TRUE,
		'escape'      => TRUE,
		'hosted'      => FALSE,
		'lang'        => NULL,
		'linenums'    => 1,
		'skin'        => NULL,
		'wrap'        => TRUE,
	);
	
	private $code = NULL;
	private $remote_url = 'https://google-code-prettify.googlecode.com/svn/loader/';
	
	public function __construct(modX &$modx, array &$properties)
	{
		$this->modx =& $modx;

		// Merge script properties and force to lowercase
		$this->config = array_change_key_case( array_merge($this->config, $properties), CASE_LOWER );
	}
	
	public function run()
	{
		// Maintain original code
		$this->code = $this->config['code'];
		
		// Replace MODx brackets
		if($this->config['escape']) {
			$this->code = str_replace(
				array('[[', ']]'),
				array('__LEFTBRACKET:', ':RIGHTBRACKET__'),
				$this->code
			);
		}

		// Convert special chars
		if($this->config['entities']) {
			$this->code = htmlspecialchars($this->code);
		}
		
		// Wrap
		if($this->config['wrap']) {
			$this->code = $this->wrap_html($this->code, $this->config['lang'], $this->config['linenums']);
		}
		
		// Add CSS
		if( $css = $this->prepare_array($this->config['css']) ) {
			$this->insert_css($css);
		}

		$this->setup_files($this->config['autoloader'], $this->config['hosted']);

		return $this->code;
	}
	
	/**
	 * Insert resources from assets directory
	 */
	private function setup_files($autoloader = TRUE, $hosted = FALSE)
	{
		$host = $hosted ? MODX_ASSETS_URL . 'components/prettify/js/' : $this->remote_url;
		$file = $this->build_uri($autoloader);
		
		$this->modx->regClientStartupScript($host . $file);

		// Manually activate
		if(!$autoloader) {
			$this->modx->regClientHTMLBlock('<script type="text/javascript">prettyPrint();</script>');
		}

		// Add default stylesheet if no CSS provided
		if( $this->config['css'] === NULL ) {
			$host = $hosted ? MODX_ASSETS_URL . 'components/prettify/css/' : $this->remote_url;
			$this->modx->regClientCSS($host . 'prettify.css');
		}

		return;
	}
	
	/**
	 * Create script URL
	 *
	 * @param   boolean  $autoload  Wether to autoload
	 * @return  string
	 */
	private function build_uri($autoload)
	{
		if($autoload) {
			$url_params = array_filter(array(
				'lang' => $this->config['lang'],
				'skin' => $this->config['skin'],
			));
			
			$url = 'run_prettify.js?' . htmlentities(http_build_query($url_params));
		}
		else {
			$url = 'prettify.js';
		}

		return $url;
	}
	
	/**
	 * Preformatted text HTML wrap
	 *
	 * @param   string  $code      source code
	 * @param   string  $lang      code language config
	 * @param   int     $linenums  line number config
	 * @return  string
	 */
	private function wrap_html($code = NULL, $lang = NULL, $linenums = 1)
	{
		$class = NULL;
		$class .= $lang ? ' lang-' . $lang : NULL;
		$class .= ' linenums:' . intval($linenums);

		return '<pre class="prettyprint' . $class . '">' . $this->code . '</pre>';
	}
	
	/**
	 * Insert CSS into the a documents head
	 *
	 * @param   array  $arr  css filesd
	 */
	protected function insert_css($stylesheets = array())
	{
		if( !is_array($stylesheets)) {
			$stylesheet = str_split($stylesheet, strlen($stylesheet) );
		}

		foreach ($stylesheets as $css) {
			$this->modx->regClientCSS($css);
		}

		return;
	}
	
	/**
	 * Return array from comma separated arguments
	 *
	 * @param   string       $string  comma separated string
	 * @return  array|FALSE
	 */	
	protected function prepare_array($string)
	{
		$csv = array_map('trim', explode(',', $string) );
		$csv = ( is_array($csv) ) ? $csv : FALSE;

		return $csv;
	}
}
