<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = '这个页面允许您变更论坛的功能设定和基本选项。更多选项请看<a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">布景设定</a>。点击说明图标可以得到有关设定的信息。';
$txt['security_settings_desc'] = 'This page allows you to set options specifically related to the security and moderation of your forum, including anti-spam options.';
$txt['modification_settings_desc'] = '这个页面显示所有套件的设定。';

$txt['modification_no_misc_settings'] = '目前没有安装任何套件与设定。';

$txt['pollMode'] = '投票模式';
$txt['disable_polls'] = '停用投票';
$txt['enable_polls'] = '启用投票';
$txt['polls_as_topics'] = '停用投票(原本的投票只显示文章)';
$txt['allow_guestAccess'] = '允许访客浏览论坛';
$txt['userLanguage'] = '允许会员选择语系';
$txt['allow_editDisplayName'] = '允许会员编辑昵称';
$txt['allow_hideOnline'] = '允许会员隐藏在线状态';
$txt['guest_hideContacts'] = '对访客隐藏会员的联络信息';
$txt['titlesEnable'] = '启用会员头衔';
$txt['enable_buddylist'] = '启用好友/坏人名单';
$txt['default_personal_text'] = '预设的个人文字';
$txt['number_format'] = '预设的数字格式';
$txt['time_format'] = '预设的时间格式';
$txt['setting_time_offset'] = '时区差值<div class="smalltext">(套用到所有会员)</div>';
$txt['setting_default_timezone'] = '主机时区';
$txt['failed_login_threshold'] = '登入失败限制';
$txt['lastActive'] = 'User online time threshold';
$txt['trackStats'] = '追踪每日统计';
$txt['hitStats'] = '追踪每日页面浏览次数 (必须先启动统计)';
$txt['enableCompressedOutput'] = '启用压缩输出';
$txt['disableTemplateEval'] = '停用布景样版的 eval()';
$txt['databaseSession_enable'] = 'Use database driven sessions';
$txt['databaseSession_loose'] = 'Allow browsers to go back to cached pages';
$txt['databaseSession_lifetime'] = 'Seconds before an unused session timeout';
$txt['enableErrorLogging'] = '启用错误记录';
$txt['enableErrorQueryLogging'] = 'Include database query in the error log';
$txt['pruningOptions'] = 'Enable pruning of log entries';
$txt['pruneErrorLog'] = 'Remove error log entries older than<div class="smalltext">(0=停用)</div>';
$txt['pruneModLog'] = 'Remove moderation log entries older than<div class="smalltext">(0=停用)</div>';
$txt['pruneBanLog'] = 'Remove ban hit log entries older than<div class="smalltext">(0=停用)</div>';
$txt['pruneReportLog'] = 'Remove report to moderator log entries older than<div class="smalltext">(0=停用)</div>';
$txt['pruneScheduledTaskLog'] = 'Remove scheduled task log entries older than<div class="smalltext">(0=停用)</div>';
$txt['pruneSpiderHitLog'] = 'Remove search engine hit logs older than<div class="smalltext">(0=停用)</div>';
$txt['cookieTime'] = 'Default login cookies length (in minutes)';
$txt['localCookies'] = 'Enable local storage of cookies<div class="smalltext">(SSI won\'t work well with this on.)</div>';
$txt['globalCookies'] = 'Use subdomain independent cookies<div class="smalltext">(turn off local cookies first!)</div>';
$txt['secureCookies'] = 'Force cookies to be secure<div class="smalltext">(This only applies if you are using HTTPS - don\'t use otherwise!)</div>';
$txt['securityDisable'] = 'Disable administration security';
$txt['send_validation_onChange'] = '要求 Email 变更后必须重新启用';
$txt['approveAccountDeletion'] = '管理员必须审核自杀的账号';
$txt['autoOptMaxOnline'] = 'Maximum users online when optimizing<div class="smalltext">(0 for no max.)</div>';
$txt['autoFixDatabase'] = 'Automatically fix broken tables';
$txt['allow_disableAnnounce'] = 'Allow users to disable announcements';
$txt['disallow_sendBody'] = 'Don\'t allow post text in notifications';
$txt['queryless_urls'] = '搜寻引撆的友善网址(SEF URLs)<div class="smalltext"><strong>限 Apache/Lighttpd!</strong></div>';
$txt['max_image_width'] = 'Max width of posted pictures (0 = disable)';
$txt['max_image_height'] = 'Max height of posted pictures (0 = disable)';
$txt['enableReportPM'] = '启用检举不当简讯功能';
$txt['max_pm_recipients'] = 'Maximum number of recipients allowed in a personal message<div class="smalltext">(0=不限制, admins are exempt)</div>';
$txt['pm_posts_verification'] = '文章数太少的话, 传送简讯时必须输入验证码<div class="smalltext">(0=不限制, 管理员豁免)</div>';
$txt['pm_posts_per_hour'] = 'Number of personal messages a user may send in an hour<div class="smalltext">(0=不限制, moderators are exempt)</div>';
$txt['compactTopicPagesEnable'] = 'Limit number of displayed page links';
$txt['contiguous_page_display'] = 'Contiguous pages to display';
$txt['to_display'] = 'to display';
$txt['todayMod'] = 'Enable shorthand date display';
$txt['today_disabled'] = '停用';
$txt['today_only'] = '只有今天';
$txt['yesterday_today'] = '今天 &amp; 昨天';
$txt['topbottomEnable'] = '启用 向上/向下 按钮';
$txt['onlineEnable'] = '在文章和简讯显示 在线/离线';
$txt['enableVBStyleLogin'] = '在每页显示快速登入';
$txt['defaultMaxMembers'] = '会员名单一页的显示数量';
$txt['timeLoadPageEnable'] = '显示读取页面花费的时间';
$txt['disableHostnameLookup'] = 'Disable hostname lookups';
$txt['who_enabled'] = '启用在线名单';
$txt['make_email_viewable'] = '显示不隐藏的 Email';
$txt['meta_keywords'] = '符合论坛内容的关键词<div class="smalltext">能够让搜寻引擎容易找到。(空白=不设定。)</div>';

$txt['karmaMode'] = 'Karma mode';
$txt['karma_options'] = 'Disable karma|Enable karma total|Enable karma positive/negative';
$txt['karmaMinPosts'] = 'Set the minimum posts needed to modify karma';
$txt['karmaWaitTime'] = 'Set wait time in hours';
$txt['karmaTimeRestrictAdmins'] = 'Restrict administrators to wait time';
$txt['karmaLabel'] = 'Karma label';
$txt['karmaApplaudLabel'] = 'Karma applaud label';
$txt['karmaSmiteLabel'] = 'Karma smite label';

$txt['caching_information'] = '<div class="aligncenter underline"><strong>
	重要！启用这个功能前请先阅读。</strong></div><br />
	SMF 快取功能支持常见的加速器。目前支持的加速器包含:<br />
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (不是Zend Optimizer)</li>
		<li>XCache</li>
	</ul>
	Caching will work best if you have PHP compiled with one of the above optimizers, or have memcache available.
	If you do not have any optimizer installed SMF will do file based caching.<br /><br />
	SMF performs caching at a variety of levels.
	The higher the level of caching enabled the more CPU time will be spent retrieving cached information.
	If caching is available on your machine it is recommended that you try caching at level 1 first.<br /><br />
	Note that if you use memcached you need to provide the server details in the setting below.
	This should be entered as a comma separated list as shown in the example below:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Note that if no port is specified SMF will use port 11211.
	SMF will attempt to perform rough/random load balancing across the servers.<br /><br />
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF 没有侦测出您的主机有兼容的加速器。</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF 侦测出你的主机有安装 APC.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF 侦测出你的主机有安装 eAccelerator。</strong>
';
$txt['detected_MMCache'] = '<strong style="color: green">SMF 侦测出你的主机有安装 MMCache。</strong>
';
$txt['detected_Zend'] = '<strong style="color: green">SMF 侦测出你的主机有安装 Zend。</strong>
';
$txt['detected_Memcached'] = '<strong style="color: green">SMF 侦测出你的主机有安装 Memcached。</strong>';
$txt['detected_XCache'] = '<strong style="color: green">SMF 侦测出你的主机有安装 XCache。</strong>';

$txt['cache_enable'] = '快取等级';
$txt['cache_off'] = '停用快取';
$txt['cache_level1'] = 'Level 1 快取 (建议)';
$txt['cache_level2'] = 'Level 2 快取';
$txt['cache_level3'] = 'Level 3 快取 (不建议)';
$txt['cache_memcached'] = 'Memcache 设定';

$txt['loadavg_warning'] = '<span class="error">请注意: the settings below are to be edited with care. Setting any of them too low may render your forum <strong>unusable</strong>!</span>';
$txt['loadavg_enable'] = 'Enable load balancing by load averages';
$txt['loadavg_auto_opt'] = 'Threshold to disabling automatic database optimization';
$txt['loadavg_search'] = 'Threshold to disabling search';
$txt['loadavg_allunread'] = 'Threshold to disabling all unread topics';
$txt['loadavg_unreadreplies'] = 'Threshold to disabling unread replies';
$txt['loadavg_show_posts'] = 'Threshold to disabling showing user posts';
$txt['loadavg_forum'] = 'Threshold to disabling the forum <strong>completely</strong>';
$txt['loadavg_disabled_windows'] = '<span class="error">Load balancing support is not available on Windows.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Load balancing support is disabled by your host configuration.</span>';

$txt['setting_password_strength'] = '会员密码强度要求';
$txt['setting_password_strength_low'] = '低 - 最少 4 个字符';
$txt['setting_password_strength_medium'] = '中 - 不能包含账号';
$txt['setting_password_strength_high'] = '高 - 混合字符';

$txt['antispam_Settings'] = '反垃圾信验证';
$txt['antispam_Settings_desc'] = '这里让您设定验证方式以确定会员是真人(而不是机器人)。';
$txt['setting_reg_verification'] = '注册账号时必须输入验证码';
$txt['posts_require_captcha'] = '文章数太少的话, 发表文章时必须输入验证码';
$txt['posts_require_captcha_desc'] = '(0=不限制, 板主不限制)';
$txt['search_enable_captcha'] = '访客搜寻时必须输入验证码';
$txt['setting_guests_require_captcha'] = '访客发表文章时必须输入验证码';
$txt['setting_guests_require_captcha_desc'] = '(如果您有设定下面的文章数, 这个功能自动启用)';
$txt['guests_report_require_captcha'] = 'Guests must pass verification when reporting a post';

$txt['configure_verification_means'] = '配置验证方式';
$txt['setting_qa_verification_number'] = '必须回答的题目验证数量';
$txt['setting_qa_verification_number_desc'] = '(0=停用; 在下面设定题目)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Below you can set which anti-spam features you wish to have enabled whenever a user needs to verify they are a human. Note that the user will have to pass <em>all</em> verification so if you enable both a verification image and a question/answer test they need to complete both to proceed.</span>';
$txt['setting_visual_verification_type'] = '图片验证显示';
$txt['setting_visual_verification_type_desc'] = '愈复杂的图片, 机器人愈来破解';
$txt['setting_image_verification_off'] = '停用';
$txt['setting_image_verification_vsimple'] = '非常简单 - 纯文字';
$txt['setting_image_verification_simple'] = '简单 - 彩色文字, 没有噪声';
$txt['setting_image_verification_medium'] = '一般 - 彩色文字, 包含噪声和线条';
$txt['setting_image_verification_high'] = '复杂 - 变形文字, 包含大量噪声和线条';
$txt['setting_image_verification_extreme'] = '非常复杂 - 变形文字, 噪声, 线条和色块';
$txt['setting_image_verification_sample'] = '范例';
$txt['setting_image_verification_nogd'] = '<strong>注意:</strong> 如果这个主机没有安装 GD 函式库, 各种复杂的设定不会作用。';
$txt['setup_verification_questions'] = '题目验证';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">如果您想要会员回答题目去验证是否为机器人, 您必须在下面设定题目。您应该选择简单的题目; 答案是不分大小写。您的题目可以使用 BB码。如果想移除题目的话, 请把题目那栏的内容删除。</span>';
$txt['setup_verification_question'] = '题目';
$txt['setup_verification_answer'] = '答案';
$txt['setup_verification_add_more'] = '新增其它问题';

$txt['moderation_settings'] = 'Moderation Settings';
$txt['setting_warning_enable'] = 'Enable User Warning System';
$txt['setting_warning_watch'] = 'Warning level for user watch<div class="smalltext">The user warning level after which a user watch is put in place - 0=停用.</div>';
$txt['setting_warning_moderate'] = 'Warning level for post moderation<div class="smalltext">The user warning level after which a user has all posts moderated - 0=停用.</div>';
$txt['setting_warning_mute'] = 'Warning level for user muting<div class="smalltext">The user warning level after which a user cannot post any further - 0=停用.</div>';
$txt['setting_user_limit'] = 'Maximum user warning points per day<div class="smalltext">This value is the maximum amount of warning points a single moderator can assign to a user in a 24 hour period - 0=不限制.</div>';
$txt['setting_warning_decrement'] = 'Warning points to decrement from users every 24 hours<div class="smalltext">Only applies to users not warned within last 24 hours - set to 0=停用.</div>';
$txt['setting_warning_show'] = 'Users who can see warning status<div class="smalltext">Determines who can see the warning level of users on the forum.</div>';
$txt['setting_warning_show_mods'] = 'Moderators Only';
$txt['setting_warning_show_user'] = 'Moderators and Warned Users';
$txt['setting_warning_show_all'] = 'All Users';

$txt['signature_settings'] = '签名档设定';
$txt['signature_settings_desc'] = 'Use the settings on this page to decide how member signatures should be treated in SMF.';
$txt['signature_settings_warning'] = 'Note that settings are not applied to existing signatures by default. Click <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">here</a> to apply rules to all existing signatures.';
$txt['signature_enable'] = 'Enable signatures';
$txt['signature_max_length'] = 'Maximum allowed characters<div class="smalltext">(0 for no max.)</div>';
$txt['signature_max_lines'] = 'Maximum amount of lines<div class="smalltext">(0 for no max)</div>';
$txt['signature_max_images'] = 'Maximum image count<div class="smalltext">(0 for no max - excludes smileys)</div>';
$txt['signature_allow_smileys'] = 'Allow smileys in signatures';
$txt['signature_max_smileys'] = 'Maximum smiley count<div class="smalltext">(0 for no max)</div>';
$txt['signature_max_image_width'] = 'Maximum width of signature images (pixels)<div class="smalltext">(0 for no max)</div>';
$txt['signature_max_image_height'] = 'Maximum height of signature images (pixels)<div class="smalltext">(0 for no max)</div>';
$txt['signature_max_font_size'] = 'Maximum font size allowed in signatures<div class="smalltext">(0 for no max)</div>';
$txt['signature_bbc'] = 'Enabled BBC tags';

$txt['custom_profile_title'] = 'Custom Profile Fields';
$txt['custom_profile_desc'] = 'From this page you can create your own custom profile fields that fit in with your own forums requirements';
$txt['custom_profile_active'] = 'Active';
$txt['custom_profile_fieldname'] = 'Field Name';
$txt['custom_profile_fieldtype'] = 'Field Type';
$txt['custom_profile_make_new'] = 'New Field';
$txt['custom_profile_none'] = 'You have not created any custom profile fields yet!';
$txt['custom_profile_icon'] = 'Icon';

$txt['custom_profile_type_text'] = 'Text';
$txt['custom_profile_type_textarea'] = 'Large Text';
$txt['custom_profile_type_select'] = 'Select Box';
$txt['custom_profile_type_radio'] = 'Radio Button';
$txt['custom_profile_type_check'] = 'Checkbox';

$txt['custom_add_title'] = 'Add Profile Field';
$txt['custom_edit_title'] = 'Edit Profile Field';
$txt['custom_edit_general'] = 'Display Settings';
$txt['custom_edit_input'] = 'Input Settings';
$txt['custom_edit_advanced'] = 'Advanced Settings';
$txt['custom_edit_name'] = 'Name';
$txt['custom_edit_desc'] = 'Description';
$txt['custom_edit_profile'] = 'Profile Section';
$txt['custom_edit_profile_desc'] = 'Section of profile this is edited in.';
$txt['custom_edit_profile_none'] = 'None';
$txt['custom_edit_registration'] = 'Show on Registration';
$txt['custom_edit_registration_disable'] = 'No';
$txt['custom_edit_registration_allow'] = 'Yes';
$txt['custom_edit_registration_require'] = 'Yes, and require entry';
$txt['custom_edit_display'] = 'Show on Topic View';
$txt['custom_edit_picktype'] = 'Field Type';

$txt['custom_edit_max_length'] = 'Maximum Length';
$txt['custom_edit_max_length_desc'] = '(0=不限制)';
$txt['custom_edit_dimension'] = 'Dimensions';
$txt['custom_edit_dimension_row'] = 'Rows';
$txt['custom_edit_dimension_col'] = 'Columns';
$txt['custom_edit_bbc'] = 'Allow BBC';
$txt['custom_edit_options'] = 'Options';
$txt['custom_edit_options_desc'] = 'Leave option box blank to remove. Radio button selects default option.';
$txt['custom_edit_options_more'] = 'More';
$txt['custom_edit_default'] = 'Default State';
$txt['custom_edit_active'] = 'Active';
$txt['custom_edit_active_desc'] = 'If not selected this field will not be shown to anyone.';
$txt['custom_edit_privacy'] = 'Privacy';
$txt['custom_edit_privacy_desc'] = 'Who can see and edit this field.';
$txt['custom_edit_privacy_all'] = 'Users can see this field; owner can edit it';
$txt['custom_edit_privacy_see'] = 'Users can see this field; only admins can edit it';
$txt['custom_edit_privacy_owner'] = 'Users cannot see this field; owner and admins can edit it.';
$txt['custom_edit_privacy_none'] = 'This field is only visible to admins';
$txt['custom_edit_can_search'] = 'Searchable';
$txt['custom_edit_can_search_desc'] = 'Can this field be searched from the members list.';
$txt['custom_edit_mask'] = 'Input Mask';
$txt['custom_edit_mask_desc'] = 'For text fields an input mask can be selected to validate the data.';
$txt['custom_edit_mask_email'] = 'Valid Email';
$txt['custom_edit_mask_number'] = 'Numeric';
$txt['custom_edit_mask_nohtml'] = 'No HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Advanced)';
$txt['custom_edit_enclose'] = 'Show Enclosed Within Text (Optional)';
$txt['custom_edit_enclose_desc'] = 'We <strong>strongly</strong> recommend to use an input mask to validate the input supplied by the user.';

$txt['custom_edit_placement'] = 'Choose Placement';
$txt['custom_edit_placement_standard'] = 'Standard (with title)';
$txt['custom_edit_placement_withicons'] = 'With Icons';
$txt['custom_edit_placement_abovesignature'] = 'Above Signature';
$txt['custom_profile_placement'] = 'Placement';
$txt['custom_profile_placement_standard'] = 'Standard';
$txt['custom_profile_placement_withicons'] = 'With Icons';
$txt['custom_profile_placement_abovesignature'] = 'Above Signature';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Are you sure you wish to delete this field - all related user data will be lost!';

$txt['standard_profile_title'] = 'Standard Profile Fields';
$txt['standard_profile_field'] = 'Field';

$txt['core_settings_welcome_msg'] = 'Welcome to Your New Forum';
$txt['core_settings_welcome_msg_desc'] = 'To get you started we suggest you select which of SMF\'s core features you want to enable. We\'d recommend only enabling with those features you need!';
$txt['core_settings_item_cd'] = 'Calendar';
$txt['core_settings_item_cd_desc'] = 'Enabling this feature will open up a selection of options to enable your users to view the calendar, add and review events, see users birthdates on a calendar and much, much more.';
$txt['core_settings_item_cp'] = 'Advanced Profile Fields';
$txt['core_settings_item_cp_desc'] = 'This enables you to hide standard profile fields, add profile fields to registration, and create new profile fields for your forum.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Karma is a feature that shows the popularity of a member. Members, if allowed, can \'applaud\' or \'smite\' other members, which is how their popularity is calculated.';
$txt['core_settings_item_ml'] = 'Moderation Log';
$txt['core_settings_item_ml_desc'] = 'Enable the moderation log to keep an audit trail of all actions taken by your moderators on the forum.';
$txt['core_settings_item_pm'] = 'Post Moderation';
$txt['core_settings_item_pm_desc'] = 'Post moderation enables you to select groups and boards within which posts must be approved before they become public. Upon enabling this feature be sure to visit the permission section to set up the relevant permissions.';
$txt['core_settings_item_ps'] = 'Paid Subscriptions';
$txt['core_settings_item_ps_desc'] = 'Paid subscriptions allow users to pay for subscriptions to change membergroup within the forum and thus change their access rights.';
$txt['core_settings_item_rg'] = 'Report Generation';
$txt['core_settings_item_rg_desc'] = 'This administration feature allows the generation of reports (Which can be printed) to present your current forum setup in an easy to view manner - particularly useful for large forums.';
$txt['core_settings_item_sp'] = 'Search Engine Tracking';
$txt['core_settings_item_sp_desc'] = 'Enabling this feature will allow administrators to track search engines as they index your forum.';
$txt['core_settings_item_w'] = 'Warning System';
$txt['core_settings_item_w_desc'] = 'This functionality allows administrators and moderators to issue warnings to users; it also includes advanced functionality for automatically removing user rights as their warning level increases. Note to take full advantage of this function &quot;Post Moderation&quot; should be enabled.';
$txt['core_settings_switch_on'] = 'Click to Enable';
$txt['core_settings_switch_off'] = 'Click to Disable';
$txt['core_settings_enabled'] = 'Enabled';
$txt['core_settings_disabled'] = 'Disabled';

$txt['languages_lang_name'] = 'Language Name';
$txt['languages_locale'] = 'Locale';
$txt['languages_default'] = 'Default';
$txt['languages_character_set'] = 'Character Set';
$txt['languages_users'] = 'Users';
$txt['language_settings_writable'] = 'Warning: Settings.php is not writable so the default language setting cannot be saved.';
$txt['edit_languages'] = 'Edit Languages';
$txt['lang_file_not_writable'] = '<strong>Warning:</strong> The primary language file (%1$s) is not writable. You must make this writable before you can make any changes.';
$txt['lang_entries_not_writable'] = '<strong>Warning:</strong> The language file you wish to edit (%1$s) is not writable. You must make this writable before you can make any changes.';
$txt['languages_ltr'] = 'Right to Left';

$txt['add_language'] = 'Add Language';
$txt['add_language_smf'] = 'Download from Simple Machines';
$txt['add_language_smf_browse'] = 'Type name of language to search for or leave blank to search for all.';
$txt['add_language_smf_install'] = 'Install';
$txt['add_language_smf_found'] = 'The following languages were found. Click the install link next to the language you wish to install, you will then be taken to the package manager to install.';
$txt['add_language_error_no_response'] = 'The Simple Machines site is not responding. Please try again later.';
$txt['add_language_error_no_files'] = 'No files could be found.';
$txt['add_language_smf_desc'] = 'Description';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Version';

$txt['edit_language_entries_primary'] = 'Below are the primary language settings for this language pack.';
$txt['edit_language_entries'] = 'Edit Language Entries';
$txt['edit_language_entries_file'] = 'Select entries to edit';
$txt['languages_dictionary'] = 'Dictionary';
$txt['languages_spelling'] = 'Spelling';
$txt['languages_for_pspell'] = 'This is for <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - if installed';
$txt['languages_rtl'] = 'Enable &quot;Right to Left&quot; Mode';

$txt['lang_file_desc_index'] = 'General Strings';
$txt['lang_file_desc_EmailTemplates'] = 'Email Templates';

$txt['languages_download'] = 'Download Language Pack';
$txt['languages_download_note'] = 'This page lists all the files that are contained within the language pack and some useful information about each one. All files that have their associated check box marked will be copied.';
$txt['languages_download_info'] = '<strong>Note:</strong>
	<ul class="normallist">
		<li>Files which have the status &quot;Not Writable&quot; means SMF will not be able to copy this file to the directory at the present and you must make the destination writable either using an FTP client or by filling in your details at the bottom of the page.</li>
		<li>The Version information for a file displays the last SMF version which it was updated for. If it is indicated in green then this is a newer version than you have at current. If amber this indicates it\'s the same version number as at current, red indicates you have a newer version installed than contained in the pack.</li>
		<li>Where a file already exists on your forum the &quot;Already Exists&quot; column will have one of two values. &quot;Identical&quot; indicates that the file already exists in an identical form and need not be overwritten. &quot;Different&quot; means that the contents vary in some way and overwriting is probably the optimum solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Primary Files';
$txt['languages_download_theme_files'] = '布景相关档案';
$txt['languages_download_filename'] = 'File Name';
$txt['languages_download_dest'] = 'Destination';
$txt['languages_download_writable'] = 'Writable';
$txt['languages_download_version'] = 'Version';
$txt['languages_download_older'] = 'You have a newer version of this file installed, overwriting is not recommended.';
$txt['languages_download_exists'] = 'Already Exists';
$txt['languages_download_exists_same'] = 'Identical';
$txt['languages_download_exists_different'] = 'Different';
$txt['languages_download_copy'] = 'Copy';
$txt['languages_download_not_chmod'] = 'You cannot proceed with the installation until all files selected to be copied are writable.';
$txt['languages_download_illegal_paths'] = 'Package contains illegal paths - please contact Simple Machines';
$txt['languages_download_complete'] = 'Installation Complete';
$txt['languages_download_complete_desc'] = 'Language pack installed successfully. Please click <a href="%1$s">here</a> to return to the languages page';
$txt['languages_delete_confirm'] = 'Are you sure you want to delete this language?';

?>