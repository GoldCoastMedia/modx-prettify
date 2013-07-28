<?php
/**
 * snippets transport file for Prettify extra
 *
 * Copyright 2013 by Dan Gibbs <dan@goldcoastmedia.co.uk>
 * Created on 07-28-2013
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
/* @var xPDOObject[] $snippets */


$snippets = array();

$snippets[1] = $modx->newObject('modSnippet');
$snippets[1]->fromArray(array (
  'id' => 1,
  'description' => 'Prettify snippet',
  'name' => 'Prettify',
), '', true, true);
$snippets[1]->setContent(file_get_contents($sources['source_core'] . '/elements/snippets/prettify.snippet.php'));

return $snippets;
