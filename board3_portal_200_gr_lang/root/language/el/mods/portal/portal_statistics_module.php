<?php
/**
*
* @package Board3 Portal v2 - Statistics
* @copyright (c) Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com (dimitris):
* (http://phpbbgr.com/team/)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'ST_TOP'		=> 'Σύνολο',
	'ST_TOP_ANNS'	=> 'Συνολικές ανακοινώσεις:',
	'ST_TOP_STICKYS'=> 'Συνολικές Σημειώσεις:',
	'ST_TOT_ATTACH'	=> 'Συνολικά συνημμένα:',
	'TOPICS_PER_DAY_OTHER'	=> 'Θέματα ανά ημέρα: <strong>%d</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Θέματα ανά ημέρα: <strong>0</strong>',
	'POSTS_PER_DAY_OTHER'	=> 'Δημοσιεύσεις ανά ημέρα: <strong>%d</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Δημοσιεύσεις ανά ημέρα: <strong>0</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Μέλη ανά ημέρα: <strong>%d</strong>',
	'USERS_PER_DAY_ZERO'	=> 'Μέλη ανά ημέρα: <strong>0</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Θέματα ανά μέλος: <strong>%d</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Θέματα ανά μέλος: <strong>0</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Δημοσιεύσεις ανά μέλος: <strong>%d</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Δημοσιεύσεις ανά μέλος: <strong>0</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Δημοσιεύσεις ανά θέμα: <strong>%d</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Δημοσιεύσεις ανά θέμα: <strong>0</strong>',
));
