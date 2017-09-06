<?php
/**
 * news_priority
 * Extension for Contao Open Source CMS, Copyright (C) Leo Feyer
 *
 * Copyright (C) 2017 Julian Knorr
 *
 * @package			news_priority
 * @author			Julian Knorr <git@jknorr.eu>
 * @copytight		Copyright (C) 2017 Julian Knorr
 * @date			2017
 * @license			MIT
 */

$GLOBALS['TL_DCA']['tl_news']['fields']['priority'] = array(
	'label'     => &$GLOBALS['TL_LANG']['tl_news']['priority'],
	'default'   => 0,
	'exclude'   => true,
	'inputType' => 'text',
	'sql'       => "int(10) unsigned NOT NULL default '0'",
	'eval'      => array('rgxp' => 'natural', 'mandatory' => true, 'tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['tl_news']['fields']['cssClass']['eval']['tl_class'] = "w50";
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('cssClass,noComments,', 'cssClass,priority,noComments,', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);

?>