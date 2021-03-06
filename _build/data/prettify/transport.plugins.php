<?php
/**
 * plugins transport file for Prettify extra
 *
 * Copyright 2013 by Dan Gibbs <dan@goldcoastmedia.co.uk>
 * Created on 10-30-2013
 *
 * @package prettify
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $plugins */


$plugins = array();

$plugins[1] = $modx->newObject('modPlugin');
$plugins[1]->fromArray(array (
  'id' => 1,
  'description' => 'Prettify snippet for parsing MODX [[ ]] tags',
  'name' => 'Prettify',
), '', true, true);
$plugins[1]->setContent(file_get_contents($sources['source_core'] . '/elements/plugins/prettify.plugin.php'));

return $plugins;
