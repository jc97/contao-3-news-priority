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

namespace NewsPriority;

/**
 * Reads and writes news
 */
class NewsModel extends \Contao\NewsModel
{
	
	/**
	 * Find records by various criteria
	 *
	 * @param mixed $strColumn  The property name
	 * @param mixed $varValue   The property value
	 * @param array $arrOptions An optional options array
	 *
	 * @return static|\Model\Collection|null A model, model collection or null if the result is empty
	 */
	public static function findBy($strColumn, $varValue, array $arrOptions = array())
	{
		$t = static::$strTable;
		
		$order = "$t.priority DESC";
		if (!isset($arrOptions['order']) || strlen($arrOptions['order']) == 0) {
			$arrOptions['order'] = $order;
		} else {
			$arrOptions['order'] = $order.", ".$arrOptions['order'];
		}
		
		return parent::findBy($strColumn, $varValue, $arrOptions);
	}
}

?>