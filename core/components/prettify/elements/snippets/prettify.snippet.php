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

require_once $modx->getOption('core_path') . 'components/prettify/model/prettify/prettify.class.php';
$prettify = new Prettify($modx, $scriptProperties);

$result = $prettify->run();
unset($prettify);

return $result;