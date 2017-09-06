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

/**
 * Register the namespace
 */
ClassLoader::addNamespace('NewsPriority');

/**
 * Register the class
 */
ClassLoader::addClasses(array
(
	// Models
	'NewsPriority\NewsModel' => 'system/modules/news_priority/models/NewsModel.php',
));

?>