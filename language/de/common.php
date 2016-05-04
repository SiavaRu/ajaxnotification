<?php
/**
 *
 * @package phpBB Extension - tas2580 AJAX Notifications
 * @copyright (c) 2016 tas2580 (https://tas2580.net)
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_AJAXNOTIFICATION_TIMEOUT'				=> 'Timeout für Ajax Benachrichtigungen',
	'ACP_AJAXNOTIFICATION_TIMEOUT_EXPLAIN'		=> 'Gib in Sekunden an wie oft nach neuen Benachrichtigungen geschaut werden soll. Beachte das eine zu niedrige Zahl den Server sehr stark belasten kann.',
));
