<?php
// FIXME: A better way of achieving this (without a plugin)??
if($modx->event->name == 'OnWebPagePrerender')
{
	$modx->resource->_output  = str_replace( 
		array('__LEFTBRACKET:', ':RIGHTBRACKET__'),
		array('[[', ']]'),
		$modx->resource->_output 
	);
}
