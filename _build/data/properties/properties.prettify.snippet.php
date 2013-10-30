<?php
/**
 * Properties file for Prettify snippet
 *
 * Copyright 2013 by Dan Gibbs <dan@goldcoastmedia.co.uk>
 * Created on 10-30-2013
 *
 * @package prettify
 * @subpackage build
 */




$properties = array (
  'autoloader' => 
  array (
    'name' => 'autoloader',
    'desc' => 'prop_prettify.autoloader_desc',
    'type' => 'combo-boolean',
    'options' => 
    array (
    ),
    'value' => false,
    'lexicon' => 'prettify:properties',
    'area' => 'prop_prettify.area_desc',
    'desc_trans' => 'Enable to load the necessary CSS and JavaScript files
automatically on page load. <strong>Disable this if you wish to use a 
custom non-hosted skin</strong>.',
    'area_trans' => 'Syntax Highlighting',
  ),
  'code' => 
  array (
    'name' => 'code',
    'desc' => 'prop_prettify.code_desc',
    'type' => 'textarea',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'prettify:properties',
    'area' => 'prop_prettify.area_desc',
    'desc_trans' => 'The code to highlight.',
    'area_trans' => 'Syntax Highlighting',
  ),
  'css' => 
  array (
    'name' => 'css',
    'desc' => 'prop_prettify.css_desc',
    'type' => 'textarea',
    'options' => 
    array (
    ),
    'value' => '/assets/components/prettify/css/bootstrap.css',
    'lexicon' => 'prettify:properties',
    'area' => 'prop_prettify.area_desc',
    'desc_trans' => 'A comma separated list of CSS files to include.',
    'area_trans' => 'Syntax Highlighting',
  ),
  'entities' => 
  array (
    'name' => 'entities',
    'desc' => 'prop_prettify.entities_desc',
    'type' => 'combo-boolean',
    'options' => 
    array (
    ),
    'value' => true,
    'lexicon' => 'prettify:properties',
    'area' => 'prop_prettify.area_desc',
    'desc_trans' => 'When enabled converts the code\'s special characters to HTML entities.',
    'area_trans' => 'Syntax Highlighting',
  ),
  'hosted' => 
  array (
    'name' => 'hosted',
    'desc' => 'prop_prettify.hosted_desc',
    'type' => 'combo-boolean',
    'options' => 
    array (
    ),
    'value' => false,
    'lexicon' => 'prettify:properties',
    'area' => 'prop_prettify.area_desc',
    'desc_trans' => 'Enable to serve JavaScript and CSS from
your web servers assets directory instead of googlecode.com',
    'area_trans' => 'Syntax Highlighting',
  ),
  'lang' => 
  array (
    'name' => 'lang',
    'desc' => 'prop_prettify.lang_desc',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'prettify:properties"',
    'area' => 'prop_prettify.area_desc',
    'desc_trans' => 'Loads the language handler for the given language 
which is usually the file extension for source files for that language. See the 
<a href="http://code.google.com/p/google-code-prettify/source/browse/trunk/src" target="_blank">index of language</a> 
handlers. If specified multiple times (?lang=css&lang=ml) then all are loaded.',
    'area_trans' => 'Syntax Highlighting',
  ),
  'linenums' => 
  array (
    'name' => 'linenums',
    'desc' => 'prop_prettify.linenums_desc',
    'type' => 'numberfield',
    'options' => 
    array (
    ),
    'value' => '1',
    'lexicon' => 'prettify:properties',
    'area' => 'prop_prettify.area_desc',
    'desc_trans' => 'Tells the prettyprinter to insert an ol element and li elements 
around each line so that you get line numbers. Setting this to 40 makes line numbering start at line 
40 if you\'re excerpting a larger chunk of code',
    'area_trans' => 'Syntax Highlighting',
  ),
  'skin' => 
  array (
    'name' => 'skin',
    'desc' => 'prop_prettify.skin_desc',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'prettify:properties',
    'area' => 'prop_prettify.area_desc',
    'desc_trans' => 'See the 
<a href="http://code.google.com/p/google-code-prettify/source/browse/trunk/src" target="_blank">skin gallery</a>. 
If specified multiple times, the first one to successfully load is used.',
    'area_trans' => 'Syntax Highlighting',
  ),
  'wrap' => 
  array (
    'name' => 'wrap',
    'desc' => 'prop_prettify.wrap_desc',
    'type' => 'combo-boolean',
    'options' => 
    array (
    ),
    'value' => true,
    'lexicon' => 'prettify:properties',
    'area' => 'prop_prettify.area_desc',
    'desc_trans' => 'When enabled will wrap the source in 
preformatted text (pre tags) automatically for Prettify.',
    'area_trans' => 'Syntax Highlighting',
  ),
);

return $properties;

