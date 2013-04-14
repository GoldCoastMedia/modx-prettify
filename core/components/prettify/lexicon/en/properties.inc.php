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

$_lang['prop_prettify.area_desc'] = 'Syntax Highlighting';

$_lang['prop_prettify.autoloader_desc'] = 'Enable to load the necessary CSS and 
JavaScript files automatically on page load. <strong>Disable this if you wish 
to use a custom non-hosted skin</strong>.';

$_lang['prop_prettify.code_desc'] = 'The code to highlight.';

$_lang['prop_prettify.css_desc'] = 'A comma separated list of CSS files to include.';

$_lang['prop_prettify.entities_desc'] = 'When enabled converts the code\'s 
special characters to HTML entities.';

$_lang['prop_prettify.escape_desc'] = 'When enabled escapes MODx [[tags]] 
allowing them to be displayed without being processed.';

$_lang['prop_prettify.hosted_desc'] = 'Enable to serve JavaScript and CSS from
your web servers assets directory instead of googlecode.com';

$_lang['prop_prettify.lang_desc'] = 'Loads the language handler for the given 
language which is usually the file extension for source files for that language. 
See the  <a href="http://code.google.com/p/google-code-prettify/source/browse/trunk/src" target="_blank">index of language</a> 
handlers. If specified multiple times (?lang=css&lang=ml) then all are loaded.';

$_lang['prop_prettify.linenums_desc'] = 'Tells the prettyprinter to insert an 
ol element and li elements around each line so that you get line numbers. 
Setting this to 40 makes line numbering start at line 40 if you\'re excerpting 
a larger chunk of code';

$_lang['prop_prettify.skin_desc'] = 'See the 
<a href="http://code.google.com/p/google-code-prettify/source/browse/trunk/src" target="_blank">skin gallery</a>. 
If specified multiple times, the first one to successfully load is used.';

$_lang['prop_prettify.wrap_desc'] = 'When enabled will wrap the source in 
preformatted text (pre tags) automatically for Prettify.';
