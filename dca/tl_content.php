<?php
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Custom Elements DCA
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('MadeYourDay\Contao\CustomElements', 'onloadCallback');
$GLOBALS['TL_DCA']['tl_content']['fields']['rsce_data'] = array(
	'inputType' => 'rsce_list_hidden',
	'sql' => "mediumblob NULL",
	'save_callback' => array(
		array('MadeYourDay\\Contao\\CustomElements', 'saveDataCallback'),
	),
);
