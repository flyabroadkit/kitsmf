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
$mmessage = 'FLYabroad 签证工作室论坛维护中，请访问 FLYabroad 网站： http://www.FLYaboadVisa.com  ...news will be posted once we\'re back!';		# Description of why the forum is in maintenance mode.

########## Forum Info ##########
$mbname = 'FLYabroad 移民论坛';		# The name of your forum.
$language = 'chinese_simplified-utf8';		# The default language file set for the forum.
$boardurl = 'https://bbs.flyabroadvisa.com';		# URL to your forum's folder. (without the trailing /!)
$webmaster_email = 'support@cgvisa.com';		# Email address to send emails from. (like noreply@yourdomain.com.)
$cookiename = 'SMFCookie186'; #'SMFCookie721';		# Name of the cookie to set for authentication.

########## Database Info ##########
$db_type = 'mysql';
$db_server = 'localhost';
$db_name = 'flyabroa_smf984';
$db_user = 'flyabroa_smf984';
$db_passwd = 'K@k(0aSp24';
$ssi_db_user = '';
$ssi_db_passwd = '';
$db_prefix = 'smf_';
$db_persist = 0;
$db_error_send = 1;

########## Directories/Files ##########
# Note: These directories do not have to be changed unless you move things.
$boarddir = '/home/flyabroa/public_html/bbs.flyabroadvisa.com';		# The absolute path to the forum's folder. (not just '.'!)
$sourcedir = '/home/flyabroa/public_html/bbs.flyabroadvisa.com/Sources';		# Path to the Sources directory.
$cachedir = '/home/flyabroa/public_html/bbs.flyabroadvisa.com/cache';		# Path to the cache directory.

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

$image_proxy_secret = '16417ca4c9bc32914caa';
$image_proxy_maxsize = '5190';
$image_proxy_enabled = '0';
$auth_secret = 'b1ad4f274db6908ba5a0fd0ab71848e508f8f4c16a00b1ce55d3be4323ff94dc';
$db_character_set = 'utf8';
?>