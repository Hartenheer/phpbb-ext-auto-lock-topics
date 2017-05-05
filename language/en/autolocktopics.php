<?php

/**
 * Auto-lock Topics Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-3.0+
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB')) {
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang)) {
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_FORUM_AUTO_LOCK_SETTINGS'	=> 'Auto-Lock settings',
	'ACP_ENABLE_AUTO_LOCK'			=> 'Enable auto-lock',
	'ACP_AUTO_LOCK_ANNOUNCEMENTS'	=> 'Auto-lock announcements',
	'ACP_AUTO_LOCK_STICKIES'		=> 'Auto-lock stickies',
	'ACP_AUTO_LOCK_POLLS'			=> 'Auto-lock polls',
	'ACP_AUTO_LOCK_DAYS'			=> 'Auto-lock post age',
	'ACP_AUTO_LOCK_DAYS_EXPLAIN'	=> 'Number of days since the last post.',
	'ACP_AUTO_LOCK_FREQUENCY'		=> 'Auto-lock frequency',
	'ACP_AUTO_LOCK_FREQUENCY_EXPLAIN' => 'Time in days between auto-lock events.',
	'LOG_AUTO_LOCK_TOPIC'	=> '<strong>Topics auto-locked</strong><br />» [%d] %s'
]);
