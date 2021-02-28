<?php

/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2011 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.0
 */

########## Maintenance ##########
# Note: If $maintenance is set to 2, the forum will be unusable!  Change it to 0 to fix it.
$maintenance = 0;		# Set to 1 to enable Maintenance Mode, 2 to make the forum untouchable. (you'll have to make it 0 again manually!)
$mtitle = '维护模式';		# Title for the Maintenance Mode message.
$mmessage = 'FLYabroad 签证工作室论坛维护中，请访问 FLYabroad 网站： https://www.FLYaboadVisa.com  ...news will be posted once we\'re back!';			# Description of why the forum is in maintenance mode.

########## Forum Info ##########
$mbname = 'FLYabroad 移民论坛';		# The name of your forum.
$language = 'chinese_simplified-utf8';		# The default language file set for the forum.
$boardurl = 'https://bbs.flyabroadvisa.com';		# URL to your forum's folder. (without the trailing /!)
$webmaster_email = 'board@bbs.flyabroadvisa.com';		# Email address to send emails from. (like noreply@yourdomain.com.)
$cookiename = 'SMFCookie186'; #'SMFCookie721';	# Name of the cookie to set for authentication.  'SMFCookie956';

########## Database Info ##########
$db_type = 'mysql';
$db_server = 'localhost';
$db_name = 'visasand_smf878';
$db_user = 'visasand_smf878';
$db_passwd = '6!S]j.gg6(32]87p';
$ssi_db_user = '';
$ssi_db_passwd = '';
$db_prefix = 'smf_'; # 'smfxn_';
$db_persist = 0;
$db_error_send = 1;

########## Directories/Files ##########
# Note: These directories do not have to be changed unless you move things.
$boarddir = '/home/visasand/bbs.flyabroadvisa.com';		# The absolute path to the forum's folder. (not just '.'!)
$sourcedir = '/home/visasand/bbs.flyabroadvisa.com/Sources';		# Path to the Sources directory.
$cachedir = '/home/visasand/bbs.flyabroadvisa.com/cache';		# Path to the cache directory.

########## Error-Catching ##########
# Note: You shouldn't touch these settings.
$db_last_error = 0;


# Make sure the paths are correct... at least try to fix them.
if (!file_exists($boarddir) && file_exists(dirname(__FILE__) . '/agreement.txt'))
	$boarddir = dirname(__FILE__);
if (!file_exists($sourcedir) && file_exists($boarddir . '/Sources'))
	$sourcedir = $boarddir . '/Sources';
if (!file_exists($cachedir) && file_exists($boarddir . '/cache'))
	$cachedir = $boarddir . '/cache';

$image_proxy_secret = 'a8520fc241b17b67790a';
$image_proxy_maxsize = '5190';
$image_proxy_enabled = '0';
$auth_secret = '6e385a2d943a84253c257ee0b868a402726ea0703df73212094ecdee9dc79fae';
$db_character_set = 'utf8';
?>