<?php
/**
 * propertySets transport file for Prettify extra
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
/* @var xPDOObject[] $propertySets */


$propertySets = array();

$propertySets[1] = $modx->newObject('modPropertySet');
$propertySets[1]->fromArray(array (
  'id' => 1,
  'name' => 'Prettify',
  'description' => 'Prettify snippet property set',
), '', true, true);

$properties = include $sources['data'].'properties/properties.prettify.propertyset.php';
$propertySets[1]->setProperties($properties);
unset($properties);

return $propertySets;
