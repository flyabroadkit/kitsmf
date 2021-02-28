<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = '版块管理';
$txt['admin_users'] = '显示/删除会员';
$txt['admin_newsletters'] = '给会员发送新闻简报';
$txt['admin_edit_news'] = '新闻公告';
$txt['admin_groups'] = '会员组';
$txt['admin_members'] = '会员管理';
$txt['admin_members_list'] = '以下是已注册会员.';
$txt['admin_next'] = '继续';
$txt['admin_censored_words'] = '禁用词语';
$txt['admin_censored_where'] = '左边是需要过滤文字，右边是论坛里显示的替换文字。';
$txt['admin_censored_desc'] = '由于每个论坛的属性不同, 在您的论坛里可能有某些词是不允许用户使用的, 请在下面输入.<br /> 如要删除过滤的文字请将该空格的内容清空然后按保存.';
$txt['admin_reserved_names'] = '保留会员名称';
$txt['admin_template_edit'] = '修改论坛版块设定';
$txt['admin_modifications'] = '管理设定';
$txt['admin_security_moderation'] = '安全与管理';
$txt['admin_server_settings'] = '服务器设置';
$txt['admin_reserved_set'] = '保留会员名称';
$txt['admin_reserved_line'] = '一行一个保留字.';
$txt['admin_basic_settings'] = '此处可以让您修改您论坛的基本设定。在设定时请注意， 因为这可能会导致您的论坛暂停服务。';
$txt['admin_maintain'] = '打开维修模式';
$txt['admin_title'] = '论坛名称';
$txt['admin_url'] = '论坛网址';
$txt['cookie_name'] = 'Cookie 名称';
$txt['admin_webmaster_email'] = '管理员电子邮件';
$txt['boarddir'] = 'SMF 文件夹';
$txt['sourcesdir'] = 'Sources 文件夹';
$txt['cachedir'] = '缓存目录';
$txt['admin_news'] = '允许公告';
$txt['admin_guest_post'] = '允许访客发帖?';
$txt['admin_manage_members'] = '用户管理';
$txt['admin_main'] = '论坛管理';
$txt['admin_config'] = '论坛设置';
$txt['admin_version_check'] = 'SMF版本检查';
$txt['admin_smffile'] = 'SMF文件';
$txt['admin_smfpackage'] = 'SMF插件程序';
$txt['admin_maintenance'] = '维护';
$txt['admin_image_text'] = '以图片代替文字按钮';
$txt['admin_credits'] = '制作团队';
$txt['admin_agreement'] = '在注册时显示并且要求同意论坛使用条款';
$txt['admin_agreement_default'] = '默认';
$txt['admin_agreement_select_language'] = '编辑的语言';
$txt['admin_agreement_select_language_change'] = '修改';
$txt['admin_delete_members'] = '删除已选取的用户';
$txt['admin_repair'] = '修复所有的版块以及文章';
$txt['admin_main_welcome'] = '这是您的&quot;%s&quot;.  您可以在此更改设置，维护论坛，查看纪录，安装插件及管理风格等。<div style="margin-top: 1ex;"> 如遇到困难可查询 &quot;Support &amp; Credits&quot;页面。或到<a href="http://community.smf-chinese.com/bbs" target="_blank">SMF中文支持网站</a>和<a href="http://www.simplemachines.org/community/index.php" target="_blank">官方网站支持论坛（英文）</a>。</div>您也可以按下这个<img src="' . $settings['images_url'] . '/helptopics.gif" alt="%s" title="%s" border="0" />图案打开求助窗口.';
$txt['admin_news_desc'] = '请在每一个空格中放入一个公告。您也可以使用像是<span title="粗体">[b]</span>, <span title="斜体!!">[i]</span> 以及 <span title="底线">[u]</span>, HTML语法以及表情图案在公告中，要删除某条公告则将该空格的内容清空就可以。';
$txt['administrators'] = '论坛管理员';
$txt['admin_reserved_desc'] = '在此可以设定保留字, 用户不可以注册内含保留字的帐号. 在送出前请检查画面下面的选项设定.';
$txt['admin_activation_email'] = '用户注册之后是否要发送帐号激活信？';
$txt['admin_match_whole'] = '只有完全相同. 用户名称含有保留字依然可以注册, 只要用户名称不恰好等于保留字就给予注册.';
$txt['admin_match_case'] = '区分大小写. 如果不勾选, 大写与小写会视为相同.';
$txt['admin_check_user'] = '检查用户帐号名称.';
$txt['admin_check_display'] = '检查用户昵称.';
$txt['admin_newsletter_send'] = '您可以在此处发送电子邮件给任何人. 已经显示出您选择的用户群组电子邮件清单了, 当然您也可以任意删除不需要收到的收件者. 请注意每个电子邮件地址要以分号区隔, 例如: \'address1; address2\'.';
$txt['admin_fader_delay'] = '在公告跑马灯中，每个公告中间的间隔时间(单位是千分之ㄧ秒)';
$txt['admin_bbc'] = '在帖子编辑窗口以及短信息编辑窗口中显示语法快速按钮?';

$txt['admin_backup_fail'] = '无法建立设置.php 的备份 - 请确定设置_bak.php 是否存在, 并且可以读写.';
$txt['modSettings_info'] = '设定或更改控制论坛的选项.';
$txt['database_server'] = '数据库主机地址:';
$txt['database_user'] = '数据库用户帐号:';
$txt['database_password'] = '数据库用户密码:';
$txt['database_name'] = '数据库名称:';
$txt['registration_agreement'] = '编辑论坛注册协议';
$txt['registration_agreement_desc'] = '用户必须接受使用条款才能继续申请加入.';
$txt['database_prefix'] = '数据库表前缀';
$txt['errors_list'] = '显示论坛错误';
$txt['errors_found'] = '我们在论坛中发现以下的错误';
$txt['errors_fix'] = '您想要修正这些错误吗?';
$txt['errors_do_recount'] = '所有错误已经修复 - 已经建立了一个挽救区！请点击下面的按钮重新计算关键数据.';
$txt['errors_recount_now'] = '重新计算数据';
$txt['errors_fixing'] = '论坛错误修正中';
$txt['errors_fixed'] = '错误已经修正完成！请继续检查论坛的分类、版块或主题。';
$txt['attachments_avatars'] = '附件与头像';
$txt['attachments_desc'] = '在此可以管理用户上传的文件, 您可以根据上传时间以及文件大小来删除文件, 文件的详细数据显示于下面.';
$txt['attachment_stats'] = '附件文件统计';
$txt['attachment_integrity_check'] = '附件完整性检查';
$txt['attachment_integrity_check_desc'] = '该功能将检查数据库中的在列附件的完整性和大小，并修复可能发生的错误.';
$txt['attachment_check_now'] = '现在检查';
$txt['attachment_pruning'] = '附件清理';
$txt['attachment_pruning_message'] = '添加到帖子中的消息';
$txt['attachment_pruning_warning'] = '你确认要删除这些附件么?\\n此操作不可逆!';
$txt['attachment_total'] = '总附件数';
$txt['attachmentdir_size'] = '附件文件夹使用空间';
$txt['attachmentdir_size_current'] = '当前附件目录总大小';
$txt['attachment_space'] = '附件文件夹剩余空间';
$txt['attachment_space_current'] = '当前附件目录可用空间';
$txt['attachment_options'] = '附件选项';
$txt['attachment_log'] = '附件上传纪录';
$txt['attachment_remove_old'] = '删除比这个日期更早的附件';
$txt['attachment_remove_size'] = '删除比这个文件大小更大的附件';
$txt['attachment_name'] = '附件名称';
$txt['attachment_file_size'] = '文件大小';
$txt['attachmentdir_size_not_set'] = '目前没有设定附件文件夹最大可用空间';
$txt['attachment_delete_admin'] = '[附件已被管理员删除]';
$txt['live'] = '来自英文官方网站的最新消息...';
$txt['remove_all'] = '全部删除';
$txt['approve_new_members'] = '管理员必须手动审核每位用户的帐号申请';
$txt['agreement_not_writable'] = '警告 - agreement.txt 无法写入，您做的所有更改都无法保存.';

$txt['version_check_desc'] = '此处为您检查您的安装文件是否是最新的, 若有任何文件过期, 请至官方网站<a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>（英文）下载最新安装文件。简体语言包请访问<a href="http://www.smf.cn/" target="_blank">smf.cn</a>';
$txt['version_check_more'] = '(详细内容)';

$txt['lfyi'] = '暂时无法取得来自官方网站的最新消息.';

$txt['manage_calendar'] = '日历';
$txt['manage_search'] = '搜索';

$txt['smileys_manage'] = '表情图案与信息图标';
$txt['smileys_manage_info'] = '安装新的表情图案，加入图案到已有的表情图案，或管理信息图标。';
$txt['package_info'] = '安装或修改功能';
$txt['theme_admin'] = '风格及版块';
$txt['theme_admin_info'] = '设置论坛的风格及其选项';
$txt['registration_center'] = '注册中心';
$txt['member_center_info'] = '查找会员，审核注册会员，管理尚未激活的帐号';

$txt['viewmembers_name'] = '帐号 (昵称)';
$txt['viewmembers_online'] = '最后登录时间';
$txt['viewmembers_today'] = '今天';
$txt['viewmembers_day_ago'] = '天前';
$txt['viewmembers_days_ago'] = '天前';

$txt['display_name'] = '昵称';
$txt['email_address'] = '电子邮件';
$txt['ip_address'] = 'IP地址';
$txt['member_id'] = '编号';

$txt['unknown'] = '未知';
$txt['security_wrong'] = '尝试登录控制台!\\n' .
	'来源: ' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '未知') . '\\n' .
	'浏览器: %s\\n' .
	'IP: ' . $GLOBALS['user_info']['ip'];

$txt['email_as_html'] = '使用HTML格式发送 (您可以在电子邮件内使用一般的HTML语法.)';
$txt['email_parsed_html'] = '加入 &lt;br /&gt;s 以及 &amp;nbsp;s 到内容中.';
$txt['email_variables'] = '在内容里您可以加入 &quot;一些语法&quot;.   详细情形 <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">请点选此处</a>.';
$txt['email_force'] = '强制发送给所有用户（包括拒绝订阅的用户）.';
$txt['email_as_pms'] = '使用短信息发送.';
$txt['email_continue'] = '继续';
$txt['email_done'] = '完成';

$txt['ban_title'] = '用户限制管理';
$txt['ban_ip'] = 'IP原则限制: (例如 192.168.12.213 or 128.0.*.*) - 每行为一笔设定';
$txt['ban_email'] = 'Email原则限制: (例如 badguy@somewhere.com) - 每行为一笔设定';
$txt['ban_username'] = '用户名称限制: (例如 l33tuser) - 每行为一笔设定';

$txt['ban_description'] = '在这个选项里, 您可以通过IP, EMAIL或是用户帐号名称来限制某位用户进入论坛.';
$txt['ban_add_new'] = '增加新的限制';
$txt['ban_banned_entity'] = '设定限制的数据';
$txt['ban_on_ip'] = '限制IP (例如 192.168.10-20.*)';
$txt['ban_on_hostname'] = '限制网域 (例如 *.mil)';
$txt['ban_on_email'] = '限制Email (例如 *@badsite.com)';
$txt['ban_on_username'] = '限制用户帐号';
$txt['ban_notes'] = '注解';
$txt['ban_restriction'] = '限制';
$txt['ban_full_ban'] = '完全禁止';
$txt['ban_partial_ban'] = '部分禁止';
$txt['ban_cannot_post'] = '不能发帖';
$txt['ban_cannot_register'] = '不能注册';
$txt['ban_cannot_login'] = '不能登录';
$txt['ban_add'] = '加入';
$txt['ban_edit_list'] = '限制清单';
$txt['ban_type'] = '限制类型';
$txt['ban_days'] = '天';
$txt['ban_will_expire_within'] = '限制解除时间';
$txt['ban_added'] = '已被添加';
$txt['ban_expires'] = '过期';
$txt['ban_hits'] = '触发次数';
$txt['ban_actions'] = '动作';
$txt['ban_expiration'] = '限制期限';
$txt['ban_reason_desc'] = '限制理由（将告知被限制的会员）.';
$txt['ban_notes_desc'] = '给管理员的批注记录.';
$txt['ban_remove_selected'] = '删除所选';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = '确定要删除选择的限制吗?';
$txt['ban_modify'] = '修改';
$txt['ban_name'] = '限制名称';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = '修改限制';
$txt['ban_add_notes'] = '<b>注意</b>：创建上述限制之后，你还可以通过IP地址、主机名或Email地址来作为触发限制的条件。';
$txt['ban_expired'] = '已过期/已失效';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = '未选择限制';

$txt['ban_triggers'] = '触发器';
$txt['ban_add_trigger'] = '增加限制的触发器';
$txt['ban_add_trigger_submit'] = '增加';
$txt['ban_edit_trigger'] = '修改';
$txt['ban_edit_trigger_title'] = '编辑限制触发器';
$txt['ban_edit_trigger_submit'] = '修改';
$txt['ban_remove_selected_triggers'] = '删除限制触发器';
$txt['ban_no_entries'] = '当前没有有效的禁止.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = '你真的要删除限制触发器吗？';
$txt['ban_trigger_browse'] = '浏览限制触发器';
$txt['ban_trigger_browse_description'] = '将按IP地址、主机名、email地址、用户名来分组显示限制情况';

$txt['ban_log'] = '限制纪录';
$txt['ban_log_description'] = '限制纪录会纪录限制会员的动作 (仅有 \'完全限制\' 及 \'无法注册\').';
$txt['ban_log_no_entries'] = '无限制纪录';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = '电子邮件';
$txt['ban_log_member'] = '会员';
$txt['ban_log_date'] = '日期';
$txt['ban_log_remove_all'] = '全部删除';
$txt['ban_log_remove_all_confirm'] = '确定要删除全部的限制纪录吗?';
$txt['ban_log_remove_selected'] = '删除所选';
$txt['ban_log_remove_selected_confirm'] = '确定要删除选取的限制纪录吗?';
$txt['ban_no_triggers'] = '没有限制触发器';

$txt['settings_not_writable'] = '由于Settings.php无法写入，因此无法保存您的设定值.';

$txt['maintain_title'] = '论坛维护';
$txt['maintain_info'] = '这些工具可数据表优化, 备份, 检查错误, 及删除版块.';
$txt['maintain_sub_database'] = '数据库';
$txt['maintain_sub_routine'] = 'Routine';
$txt['maintain_sub_members'] = '会员';
$txt['maintain_sub_topics'] = '主题';
$txt['maintain_done'] = '论坛维护任务 \'%1$s\' 顺利完成。';
$txt['maintain_no_errors'] = '恭喜恭喜，没有发现任何错误！谢谢你的检查。';

$txt['maintain_tasks'] = '计划任务';
$txt['maintain_tasks_desc'] = '管理所有SMF计划的任务';

$txt['scheduled_log'] = '任务日志';
$txt['scheduled_log_desc'] = '列出已执行任务日志.';
$txt['admin_log'] = '管理员日志';
$txt['admin_log_desc'] = '列出论坛管理员操作的任务日志.';
$txt['moderation_log'] = '版主日志';
$txt['moderation_log_desc'] = '列出论坛版主操作的任务日志..';
$txt['spider_log_desc'] = '查看论坛活动的搜索引擎蜘蛛.';
$txt['pruning_log_desc'] = '使用工具清理各种日志.';

$txt['mailqueue_title'] = '邮件';

$txt['db_error_send'] = '当 MySQL 数据库连接错误时发送电子邮件';
$txt['db_persist'] = '使用持续连接';
$txt['ssi_db_user'] = 'SSI模式的数据库用户名';
$txt['ssi_db_passwd'] = 'SSI模式的数据库密码';

$txt['default_language'] = '论坛默认语言';

$txt['maintenance_subject'] = '维修时显示的标题:';
$txt['maintenance_message'] = '维修时显示的内容:';

$txt['errlog_desc'] = '这里纪录了您的论坛里发生的每次错误, 要删除任何一笔错误纪录, 请将复选框打勾, 并且按下画面底部的 %s 按钮.';
$txt['errlog_no_entries'] = '当前没有错误日志.';

$txt['theme_settings'] = '风格设定';
$txt['theme_current_settings'] = '当前风格设定';

$txt['dvc_your'] = '使用版本';
$txt['dvc_current'] = '目前版本';
$txt['dvc_sources'] = '程序文件';
$txt['dvc_default'] = '默认的模板';
$txt['dvc_templates'] = '正在使用的模板';
$txt['dvc_languages'] = '语言文件';

$txt['smileys_default_set_for_theme'] = '请选择这个风格默认的表情图案';
$txt['smileys_no_default'] = '(使用论坛默认的表情图案)';

$txt['censor_test'] = '测试锁定的字符';
$txt['censor_test_save'] = '测试';
$txt['censor_case'] = '锁定时忽略大小写.';
$txt['censor_whole_words'] = '只检查完整句子.';

$txt['admin_confirm_password'] = '(确认)';
$txt['admin_incorrect_password'] = '密码不正确';

$txt['date_format'] = '(YYYY-MM-DD)';
$txt['undefined_gender'] = '未定义';
$txt['age'] = '会员年龄';
$txt['activation_status'] = '激活状态';
$txt['activated'] = '已激活';
$txt['not_activated'] = '未激活';
$txt['primary'] = '主要的';
$txt['additional'] = '附加的';
$txt['messenger_address'] = 'MSN帐号';
$txt['wild_cards_allowed'] = '可以使用通用字符 * 以及 ?';
$txt['search_for'] = '搜索:';
$txt['member_part_of_these_membergroups'] = '会员是这些群组的成员';
$txt['membergroups'] = '会员组';
$txt['confirm_delete_members'] = '您确定要删除这些会员?';

$txt['support_credits_title'] = '支持及制作团队';
$txt['support_credits_info'] = '如果有问题可在这找到常见的错误及解决办法.';
$txt['support_title'] = '支持信息';
$txt['support_versions_current'] = '目前的官方版本';
$txt['support_versions_forum'] = '论坛版本';
$txt['support_versions_php'] = 'PHP版本';
$txt['support_versions_db'] = '%s 版本';
$txt['support_versions_server'] = '服务器版本';
$txt['support_versions_gd'] = 'GD版本';
$txt['support_versions'] = '版本信息';
$txt['support_resources'] = '支持资源';
$txt['support_resources_p1'] = 'Our <a href="%1$s">Online Manual</a> provides the main documentation for SMF. The SMF Online Manual has many documents to help answer support questions and explain <a href="%2$s">Features</a>, <a href="%3$s">Settings</a>, <a href="%4$s">Themes</a>, <a href="%5$s">Packages</a>, etc. The Online Manual documents each area of SMF thoroughly and should answer most questions quickly.';
$txt['support_resources_p2'] = 'If you can\'t find the answers to your questions in the Online Manual, you may want to search our <a href="%1$s">Support Community</a> or ask for assistance in either our <a href="%2$s">English</a> or one of our many <a href="%3$s">international support boards</a>. The SMF Support Community can be used for <a href="%4$s">support</a>, <a href="%5$s">customization</a>, and many other things such as discussing SMF, finding a host, and discussing administrative issues with other forum administrators.';

$txt['support_latest'] = '常见问题';
$txt['support_latest_fetch'] = '取得支持信息中...';

$txt['edit_permissions_info'] = '为全局或者特定板块更改限制或者启用权限。';
$txt['membergroups_members'] = '正式会员';
$txt['membergroups_guests'] = '访客';
$txt['membergroups_guests_na'] = 'n/a';
$txt['membergroups_add_group'] = '增加群组';
$txt['membergroups_permissions'] = '权限';

$txt['permitgroups_restrict'] = '受限制的';
$txt['permitgroups_standard'] = '一般';
$txt['permitgroups_moderator'] = '版主';
$txt['permitgroups_maintenance'] = '维护';
$txt['permitgroups_inherit'] = '继承';

$txt['confirm_delete_attachments_all'] = '您确定要删除所有的附件吗?';
$txt['confirm_delete_attachments'] = '您确定要删除已选择的附件吗?';
$txt['attachment_manager_browse_files'] = '寻找文件';
$txt['attachment_manager_repair'] = '修复';
$txt['attachment_manager_avatars'] = '个人头像';
$txt['attachment_manager_attachments'] = '附件';
$txt['attachment_manager_thumbs'] = '缩略图';
$txt['attachment_manager_last_active'] = '最后登录';
$txt['attachment_manager_member'] = '会员';
$txt['attachment_manager_avatars_older'] = '这个时间内没有登录的会员删除个人头像';
$txt['attachment_manager_total_avatars'] = '总个人头像';

$txt['attachment_manager_avatars_no_entries'] = '当前没有头像.';
$txt['attachment_manager_attachments_no_entries'] = '当前没有附件.';
$txt['attachment_manager_thumbs_no_entries'] = '当前没有缩略图.';

$txt['attachment_manager_settings'] = '附件设置';
$txt['attachment_manager_avatar_settings'] = '头像设置';
$txt['attachment_manager_browse'] = '浏览文件';
$txt['attachment_manager_maintenance'] = '文件维护';
$txt['attachment_manager_save'] = '保存';

$txt['attachmentEnable'] = '附件模式';
$txt['attachmentEnable_deactivate'] = '禁止附件';
$txt['attachmentEnable_enable_all'] = '允许所有附件';
$txt['attachmentEnable_disable_new'] = '禁止新附件';
$txt['attachmentCheckExtensions'] = '检查附件的扩展名';
$txt['attachmentExtensions'] = '允许的附件扩展名';
$txt['attachmentRecodeLineEndings'] = '重置文本附件行尾结束符';
$txt['attachmentShowImages'] = '将图片附件直接作为图片显示在帖子里';
$txt['attachmentEncryptFilenames'] = '加密所保存的文件名';
$txt['attachmentUploadDir'] = '附件目录';
$txt['attachmentUploadDir_multiple'] = '附件目录';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[设置多个附件目录]</a>';
$txt['attachmentDirSizeLimit'] = '附件目录空间的最大值';
$txt['attachmentPostLimit'] = '帖子允许的附件最大值';
$txt['attachmentSizeLimit'] = '附件允许的最大值';
$txt['attachmentNumPerPostLimit'] = '帖子允许携带的附件的最大数量';
$txt['attachment_gd_warning'] = 'The GD module is currently not installed. Image re-encoding is not possible.';
$txt['attachment_image_reencode'] = 'Re-encode potentially dangerous image attachments';
$txt['attachment_image_reencode_note'] = '(requires GD module)';
$txt['attachment_image_paranoid_warning'] = 'The extensive security checks can result in a large number of rejected attachments.';
$txt['attachment_image_paranoid'] = 'Perform extensive security checks on uploaded image attachments';
$txt['attachmentThumbnails'] = '自动调整帖子中图片的大小';
$txt['attachment_thumb_png'] = 'Save thumbnails as PNG';
$txt['attachmentThumbWidth'] = '缩略图的最大宽度';
$txt['attachmentThumbHeight'] = '缩略图的最大高度';

$txt['attach_dir_does_not_exist'] = '不存在';
$txt['attach_dir_not_writable'] = '不可写';
$txt['attach_dir_files_missing'] = '文件丢失 (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Repair</a>)';
$txt['attach_dir_unused'] = '未使用';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = '管理附件路径';
$txt['attach_paths'] = '附件路径';
$txt['attach_current_dir'] = '当前目录';
$txt['attach_path'] = '路径';
$txt['attach_current_size'] = '当前大小 (KB)';
$txt['attach_num_files'] = '文件';
$txt['attach_dir_status'] = '状态';
$txt['attach_add_path'] = '添加路径';
$txt['attach_path_current_bad'] = '当前附件路径无效.';

$txt['mods_cat_avatars'] = '头像';
$txt['avatar_directory'] = '头像目录';
$txt['avatar_url'] = '头像地址（URL）';
$txt['avatar_dimension_note'] = '（0 = 没有限制）';
$txt['avatar_max_width_external'] = '外部头像的最大宽度';
$txt['avatar_max_height_external'] = '外部头像的最大高度';
$txt['avatar_action_too_large'] = '如果头像太大，则：';
$txt['option_refuse'] = '拒绝';
$txt['option_html_resize'] = '利用HTML自动调整其大小';
$txt['option_js_resize'] = '利用JavaScript自动调整其大小';
$txt['option_download_and_resize'] = '下载且自动调整其大小（需要GD module）';
$txt['avatar_max_width_upload'] = '上传头像的最大宽度';
$txt['avatar_max_height_upload'] = '上传头像的最大高度';
$txt['avatar_resize_upload'] = '自动调整太大的头像';
$txt['avatar_resize_upload_note'] = '（需要GD module）';
$txt['avatar_download_png'] = '利用PNG来调整头像?';
$txt['avatar_gd_warning'] = '服务器未安装GD module功能。这将使一些头像功能失效。';
$txt['avatar_external'] = '外部头像';
$txt['avatar_upload'] = '可上传的头像';
$txt['avatar_server_stored'] = '来自其它服务器的头像';
$txt['avatar_server_stored_groups'] = '可选择主机内保存的头像的群组';
$txt['avatar_upload_groups'] = '可选择上传头像到主机内的群组';
$txt['avatar_external_url_groups'] = '允许链接外部地址（URL）的会员组';
$txt['avatar_select_permission'] = '请选择每个会员组的权限';
$txt['avatar_download_external'] = '通过指定的地址（ URL）下载头像';
$txt['custom_avatar_enabled'] = '上传头像到...';
$txt['option_attachment_dir'] = '附件目录';
$txt['option_specified_dir'] = '指定的目录...';
$txt['custom_avatar_dir'] = '上传目录';
$txt['custom_avatar_dir_desc'] = '这个不应该和服务器的存储路径一样';
$txt['custom_avatar_url'] = '上传URL';
$txt['custom_avatar_check_empty'] = '你设定的用户头像目录为空或者无效。请确认设定是否正确.';
$txt['avatar_reencode'] = 'Re-encode potentially dangerous avatars';
$txt['avatar_reencode_note'] = '(requires GD module)';
$txt['avatar_paranoid_warning'] = 'The extensive security checks can result in a large number of rejected avatars.';
$txt['avatar_paranoid'] = 'Perform extensive security checks on uploaded avatars';

$txt['repair_attachments'] = '维护附件';
$txt['repair_attachments_complete'] = '维护完成！';
$txt['repair_attachments_complete_desc'] = '所有选择的错误都已经被修复！';
$txt['repair_attachments_no_errors'] = '未找到任何错误！';
$txt['repair_attachments_error_desc'] = '在维护过程中，检测到一下的错误，如果你想修复，请选择错误然后点继续。';
$txt['repair_attachments_continue'] = '继续';
$txt['repair_attachments_cancel'] = '取消';
$txt['attach_repair_missing_thumbnail_parent'] = '%d 缩略图丢失了主附件图片';
$txt['attach_repair_parent_missing_thumbnail'] = '%d 主附件图片标记为有缩略图但是并未找到对应的缩略图';
$txt['attach_repair_file_missing_on_disk'] = '%d 附件/头像有一个标记存在但是在服务器空间上已经不存在';
$txt['attach_repair_file_wrong_size'] = '%d 附件/头像的文件大小错误';
$txt['attach_repair_file_size_of_zero'] = '%d 服务器上的附件/头像文件为0字节（将删除该文件）';
$txt['attach_repair_attachment_no_msg'] = '%d 附件没有和任何主题关联（多余的文件）';
$txt['attach_repair_avatar_no_member'] = '%d 头像文件已经没有会员与其关联';
$txt['attach_repair_wrong_folder'] = '%1$d 附件文件夹错误';

$txt['news_title'] = '新闻公告和简报';
$txt['news_settings_desc'] = '你可在此修改新闻公告和简报的设置和相关权限';
$txt['news_settings_submit'] = '保存';
$txt['news_mailing_desc'] = '通过该菜单你可给所有注册有Email的会员发送站内短信。你也可以编辑分发名单。这一功能可用于发布论坛重大事件（如大升级）或新闻。';
$txt['groups_edit_news'] = '允许编辑新闻的会员组';
$txt['groups_send_mail'] = '允许发送新闻简报的用户组';
$txt['xmlnews_enable'] = '启用 XML/RSS 新闻';
$txt['xmlnews_maxlen'] = '帖子的字数最多限制在：<div class="smalltext">（0表示不限制，通常不限制是不明智的）</div>';
$txt['editnews_clickadd'] = '增加公告.';
$txt['editnews_remove_selected'] = '删除所选';
$txt['editnews_remove_confirm'] = '确定要删除勾选的公告吗?';
$txt['censor_clickadd'] = '增加文字.';

$txt['layout_controls'] = '论坛';
$txt['logs'] = 'Logs';
$txt['generate_reports'] = '生成报告';

$txt['update_available'] = '可升级啦！';
$txt['update_message'] = '你正在使用旧版本的SMF，可能有一些bug。建议你马上<a href="" id="update-link">升级</a>为最新版本。';

$txt['manageposts'] = '回帖与主题';
$txt['manageposts_title'] = '管理回帖与主题';
$txt['manageposts_description'] = '在此你可管理主题及回帖相关的设置';

$txt['manageposts_seconds'] = '秒';
$txt['manageposts_minutes'] = '分';
$txt['manageposts_characters'] = '字符数';
$txt['manageposts_days'] = '天';
$txt['manageposts_posts'] = '回帖';
$txt['manageposts_topics'] = '主题';

$txt['manageposts_settings'] = '回帖设置';
$txt['manageposts_settings_description'] = '与回帖及回复相关的一切设置均请在此设定';
$txt['manageposts_settings_submit'] = '保存';

$txt['manageposts_bbc_settings'] = '论坛专用代码标签（BBCode）';
$txt['manageposts_bbc_settings_description'] = '论坛专用代码标签（BBCode）可用于标记论坛信息，如想突出 \'house\'这个词，你可以输入[b]house[/b]使之成为粗体。所有的论坛专用代码标签（BBCode）都是被方括号(\'[\' 和 \']\')包裹在内的。';
$txt['manageposts_bbc_settings_title'] = '论坛专用代码标签（BBCode）设置';
$txt['manageposts_bbc_settings_submit'] = '保存';

$txt['manageposts_topic_settings'] = '主题设置';
$txt['manageposts_topic_settings_description'] = '在此你可设定所有相关主题.';
$txt['manageposts_topic_settings_submit'] = '保存';

$txt['removeNestedQuotes'] = '发帖时删除嵌套的“引用”';
$txt['enableEmbeddedFlash'] = '将flash嵌套到帖子中';
$txt['enableEmbeddedFlash_warning'] = '可能存在安全隐患！';
$txt['enableSpellChecking'] = '打开英文拼写检查功能';
$txt['enableSpellChecking_warning'] = '不是在所有的服务器上这一设置都有效！';
$txt['disable_wysiwyg'] = '禁止 WYSIWYG 可视化编辑器';
$txt['max_messageLength'] = '帖子的最大限制';
$txt['max_messageLength_zero'] = '0表示没有限制';
$txt['fixLongWords'] = '将字母数超过某限度的单词分解掉';
$txt['fixLongWords_zero'] = '0表示没有限制';
$txt['fixLongWords_warning'] = '这将不会在所有服务器有效!';
$txt['topicSummaryPosts'] = '主题摘要中显示回帖数';
$txt['spamWaitTime'] = '同一IP地址的电脑回帖时的时间间隔';
$txt['edit_wait_time'] = '两次回帖间须间隔的时间';
$txt['edit_disable_time'] = '允许对自己的帖子进行编辑的最短时间';
$txt['edit_disable_time_zero'] = '0表示没有限制';

$txt['enableBBC'] = '允许使用论坛专用代码标签 (BBC)';
$txt['enablePostHTML'] = '允许在帖子中使用<i>基本的</i> HTML';
$txt['autoLinkUrls'] = '自动链接发布的URL';
$txt['disabledBBC'] = '允许 BBC 标签';
$txt['bbcTagsToUse'] = '允许使用BBC标签';
$txt['bbcTagsToUse_select'] = '选择允许使用的标签';
$txt['bbcTagsToUse_select_all'] = '选择所有标签';

$txt['enableStickyTopics'] = '允许主题置顶';
$txt['enableParticipation'] = '允许分享图标';
$txt['oldTopicDays'] = '多长时间没有回帖即提示后续回复者？';
$txt['oldTopicDays_zero'] = '0表示没有限制';
$txt['defaultMaxTopics'] = '每页显示多少主题';
$txt['defaultMaxMessages'] = '每个主题打开后显示多少回帖';
$txt['hotTopicPosts'] = '成为热帖须达到多少回帖数';
$txt['hotTopicVeryPosts'] = '成为超热门主题须达到多少回帖数';
$txt['enableAllMessages'] = '当查看&quot;所有&quot;帖子时显示的主题的最大数';
$txt['enableAllMessages_zero'] = '0表示不显示&quot;所有&quot;';
$txt['disableCustomPerPage'] = '禁止自定义每页主题帖子统计';
$txt['enablePreviousNext'] = '打开允许“前一主题/下一主题”链接';

$txt['not_done_title'] = '尚未完成！';
$txt['not_done_reason'] = '为避免你的服务器超负荷，操作暂时被中断，系统很快将自动继续。如果它迟迟没有恢复，请点击以下的“继续”。';
$txt['not_done_continue'] = '继续';

$txt['general_settings'] = '常规';
$txt['database_paths_settings'] = '数据库和路径';
$txt['cookies_sessions_settings'] = 'Cookies and Sessions';
$txt['caching_settings'] = '缓存';
$txt['load_balancing_settings'] = 'Load Balancing';

$txt['language_configuration'] = '语言';
$txt['language_description'] = '这里允许你编辑或者安装语言到论坛，或者下载新的语言。你也可以在这里进行相关语言的设定.';
$txt['language_edit'] = '编辑语言';
$txt['language_add'] = '添加语言';
$txt['language_settings'] = '设定';

$txt['advanced'] = '高级';
$txt['simple'] = '简单';

$txt['admin_news_select_recipients'] = '请选择谁应该接收新闻副本';
$txt['admin_news_select_group'] = '会员组';
$txt['admin_news_select_group_desc'] = '选择一个组来接收新闻。';
$txt['admin_news_select_members'] = '会员';
$txt['admin_news_select_members_desc'] = '额外增加接收的会员';
$txt['admin_news_select_excluded_members'] = '排除会员';
$txt['admin_news_select_excluded_members_desc'] = '不该接收新闻的会员。';
$txt['admin_news_select_excluded_groups'] = '排除会员组';
$txt['admin_news_select_excluded_groups_desc'] = '选择一个确定不需要接收新闻的组。';
$txt['admin_news_select_email'] = 'Email 地址';
$txt['admin_news_select_email_desc'] = '可使用英文冒号（:）来分开新闻接收邮件地址 (如： 地址1; 地址2)';
$txt['admin_news_select_override_notify'] = '忽略/覆盖（Override）提醒设置';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = '你不能发送短信给Email地址。如果你继续，所有的Email地址将会被忽略。\\n\\n你确定要做次操作吗？';

$txt['mailqueue_browse'] = '浏览队列';
$txt['mailqueue_settings'] = '邮件设定';

$txt['admin_search'] = '快速搜索';
$txt['admin_search_type_internal'] = '任务/设置';
$txt['admin_search_type_member'] = '会员';
$txt['admin_search_type_online'] = '在线手册';
$txt['admin_search_go'] = '继续（GO）';
$txt['admin_search_results'] = '搜索结果';
$txt['admin_search_results_desc'] = '搜索结果: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = '重新搜索';
$txt['admin_search_results_none'] = '找不到纪录！';

$txt['admin_search_section_sections'] = '部分';
$txt['admin_search_section_settings'] = '设置';

$txt['core_settings_title'] = '核心功能';
$txt['mods_cat_features'] = '常规选项';
$txt['mods_cat_security_general'] = '常规';
$txt['antispam_title'] = '防垃圾';
$txt['mods_cat_modifications_misc'] = '插件';
$txt['mods_cat_layout'] = '版面';
$txt['karma'] = '评价';
$txt['moderation_settings_short'] = '管理(版主）';
$txt['signature_settings_short'] = '签名';
$txt['custom_profile_shorttitle'] = '自定义字段';
$txt['pruning_title'] = '清理记录';

$txt['boardsEdit'] = '修改板块';
$txt['mboards_new_cat'] = '创建新分类';
$txt['manage_holidays'] = '管理节日';
$txt['calendar_settings'] = '日历设置';
$txt['search_weights'] = '权重';
$txt['search_method'] = '搜索方式';

$txt['smiley_sets'] = '表情集';
$txt['smileys_add'] = '增加表情';
$txt['smileys_edit'] = '修改表情';
$txt['smileys_set_order'] = '表情排序';
$txt['icons_edit_message_icons'] = '修改帖子 Icon';

$txt['membergroups_new_group'] = '增加会员组';
$txt['membergroups_edit_groups'] = '修改会员组';
$txt['permissions_groups'] = '会员组权限';
$txt['permissions_boards'] = '板块权限';
$txt['permissions_profiles'] = '修改资料';
$txt['permissions_post_moderation'] = '帖子操作';

$txt['browse_packages'] = '浏览插件';
$txt['download_packages'] = '下载插件';
$txt['installed_packages'] = '安装插件';
$txt['package_file_perms'] = '文件权限';
$txt['package_settings'] = '选项';
$txt['themeadmin_admin_title'] = '管理和安装';
$txt['themeadmin_list_title'] = '风格设置';
$txt['themeadmin_reset_title'] = '会员选项';
$txt['themeadmin_edit_title'] = '修改风格';
$txt['admin_browse_register_new'] = '注册新会员';

$txt['search_engines'] = '搜索引擎';
$txt['spiders'] = '蜘蛛';
$txt['spider_logs'] = '日志';
$txt['spider_stats'] = '状态';

$txt['paid_subscriptions'] = '支付订阅';
$txt['paid_subs_view'] = '查看订阅';

?>