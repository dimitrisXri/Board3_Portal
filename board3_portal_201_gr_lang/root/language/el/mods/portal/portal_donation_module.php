<?php
/**
*
* @package Board3 Portal v2 - Donation
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
	'DONATION' 		=> 'Δωρεές PayPal',
	'DONATION_TEXT'	=> 'είναι μια ομάδα που παρέχει υπηρεσίες χωρίς πρόθεση για οποιασδήποτε χρηματικό κέρδος. Οι δωρεές σας είναι ευπρόσδεκτες, έτσι ώστε το κόστος των server μας, όνομα domain, κλπ να μπορούν να καλυφθούν.',
	'PAY_MSG'       => 'Παρακαλώ χρησιμοποιήστε ένα δεκαδικό σημείο (όχι κόμμα) ως διαχωριστή, π.χ. 3.50',
	'PAY_ITEM' 		=> 'Δωρεά!', // paypal item

	'AUD'						=> 'Australian Dollars (AUD)',
	'CAD'						=> 'Canadian Dollars (CAD)',
	'CZK'						=> 'Czech Koruna (CZK)',
	'DKK'						=> 'Danish Kroner (DKK)',
	'HKD'						=> 'Hong Kong Dollars (HKD)',
	'HUF'						=> 'Hungarian Forint (HUF)',
	'NZD'						=> 'New Zealand Dollars (NZD)',
	'NOK'						=> 'Norwegian Kroner (NOK)',
	'PLN'						=> 'Polish Zlotych (PLN)',
	'GBP'						=> 'British Pounds (GBP)',
	'SGD'						=> 'Singapore Dollars (SGD)',
	'SEK'						=> 'Swedish Kronor (SEK)',
	'CHF'						=> 'Swiss Francs (CHF)',
	'JPY'						=> 'Japanese Yen (JPY)',
	'USD'						=> 'U.S. Dollars (USD)',
	'EUR'						=> 'Euros (EUR)',
	'MXN'						=> 'Mexican Pesos (MXN)',
	'ILS'						=> 'Israeli New Shekels (ILS)',
	
	// ACP
	'ACP_PORTAL_PAYPAL_SETTINGS'			=> 'Ρυθμίσεις Paypal',
	'ACP_PORTAL_PAYPAL_SETTINGS_EXP'		=> 'Εδώ ρυθμίζετε το μπλοκ Paypal.',
	'PORTAL_PAY_ACC'						=> 'Λογαριασμός Paypal που θα χρησιμοποιείται',
	'PORTAL_PAY_ACC_EXP'					=> 'Εισάγετε την διεύθυνση που δηλώσατε στο Paypal π.χ. xxx@xxx.com',
));
