--
-- Migrate news_fix to news_priority
--
-- @package			news_priority
-- @author			Julian Knorr <git@jknorr.eu>
-- @copytight		Copyright (C) 2017 Julian Knorr
-- @date			  2017
--
-- Execute this statements BEFORE executing the internal updates in Contao

-- Rename tl_news.fix to tl_news.priority
ALTER TABLE `tl_news`
  CHANGE `fix` `priority` INT(10) UNSIGNED NOT NULL DEFAULT '0';