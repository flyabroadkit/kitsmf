<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = '您无法进入';
$txt['wireless_error_notyet'] = '抱歉, 目前无法在 WAP 模式下浏览这个页面。';

$txt['mods_only'] = '只有版主可以直接删除, 请透过<b>修改</b>功能编辑帖子内容。';
$txt['no_name'] = '您没有输入名字, 请重新输入。';
$txt['no_email'] = '您没有输入 Email, 请重新输入。';
$txt['topic_locked'] = '这篇主题是封锁状态, 不允许您回覆或修改帖子...';
$txt['no_password'] = '您忘记输入密码';
$txt['already_a_user'] = '您所选择的帐号已经被注册。';
$txt['cant_move'] = '您无法移动主题...';
$txt['login_to_post'] = '发表帖子前必须先登录。如果您还没加入会员 <a href="' . $scripturl . '?action=register">请先注册</a>。';
$txt['passwords_dont_match'] = '您的密码不同。';
$txt['register_to_use'] = '抱歉, 必须加入会员才可使用这个功能。';
$txt['password_invalid_character'] = '您输入的密码有误。';
$txt['name_invalid_character'] = '您输入的帐号有问题。';
$txt['email_invalid_character'] = '您输入的 Email 有问题。';
$txt['username_reserved'] = '您输入的帐号含有保留字 \'%1$s\'。请选择另一个帐号。';
$txt['numbers_one_to_nine'] = '只能输入数字 0-9';
$txt['not_a_user'] = '您查询的帐号资料不存在。';
$txt['not_a_topic'] = '这篇主题不存在这个版块。';
$txt['not_approved_topic'] = '这篇主题尚未审核。';
$txt['email_in_use'] = '这个 Email (%1$s)已经有人注册了。可能是您注册的, 请回到登录页面并在密码提示输入Email。';

$txt['didnt_select_vote'] = '您没有选择投票项目。';
$txt['poll_error'] = '这个投票不存在, 可能已经被封锁, 或者您已经投过票了。';
$txt['members_only'] = '只有会员能使用...';
$txt['locked_by_admin'] = '已经被管理员封锁, 您无法解除。';
$txt['not_enough_posts_karma'] = '抱歉, 您不能修改评价, 因为您的帖子数不够 - 至少需要 %1$d。';
$txt['cant_change_own_karma'] = '抱歉, 不能修改自己的评价。';
$txt['karma_wait_time'] = '抱歉, 在 %1$s %2$s 内不能重复评价。';
$txt['feature_disabled'] = '抱歉, 这个功能已经停用。';
$txt['cant_access_upload_path'] = '无法读取附件上传的路径！';
$txt['file_too_big'] = '档案太大。附件最大是 %1$d KB。';
$txt['attach_timeout'] = '发生错误。无法储存您的附件, 有可能因为上传时间过长.<br /><br />请通知管理员或稍后再试。';
$txt['filename_exists'] = '抱歉！您尝试上传的档案档名与已存在的附件档名相同。档案请重新命名后再上传一次。';
$txt['bad_attachment'] = 'Your attachment has failed security checks and cannot be uploaded. Please consult the forum administrator.';
$txt['ran_out_of_space'] = '上传文件夹已满。请上传较小的档案或通知管理员。';
$txt['couldnt_connect'] = '无法连接服务器或无法搜寻档案';
$txt['no_board'] = '您指定的版块不存在';
$txt['cant_split'] = '无法分拆主题';
$txt['cant_merge'] = '无法合并主题';
$txt['no_topic_id'] = '您指定一个错误的主题编号。';
$txt['split_first_post'] = '无法分拆主题的第一篇帖子。';
$txt['topic_one_post'] = '这个主题只有一篇帖子, 所以无法分拆。';
$txt['no_posts_selected'] = '没有选择任何帖子';
$txt['selected_all_posts'] = '无法分折。因为您选择所有的帖子';
$txt['cant_find_messages'] = '找不到帖子';
$txt['cant_find_user_email'] = '找不到使用者的 Email';
$txt['cant_insert_topic'] = '无法插入主题';
$txt['already_a_mod'] = '您选择的帐号是位版主。请选择其他帐号';
$txt['session_timeout'] = '您的工作阶段已过期, 请重试一次。';
$txt['session_verify_fail'] = 'Session 验证失败。请登出后再重新登录。';
$txt['verify_url_fail'] = '无法验证来源网址。请重试一次。';
$txt['guest_vote_disabled'] = '访客不能投票。';

$txt['cannot_access_mod_center'] = '你没有权限进入版务中心';
$txt['cannot_admin_forum'] = '没有权限管理这个论坛。';
$txt['cannot_announce_topic'] = '没有权限在这个版块发表公告。';
$txt['cannot_approve_posts'] = '没有权限审核这些项目。';
$txt['cannot_post_unapproved_attachments'] = '没有权限上传未审核附件。';
$txt['cannot_post_unapproved_topics'] = '没有权限发表未审核的主题。';
$txt['cannot_post_unapproved_replies_own'] = '没有权限在自己的主题回覆未审核的帖子。';
$txt['cannot_post_unapproved_replies_any'] = '没有权限回覆未审核的帖子。';
$txt['cannot_calendar_edit_any'] = '无法编辑日历活动。';
$txt['cannot_calendar_edit_own'] = '您没有权限编辑自己的活动。';
$txt['cannot_calendar_post'] = '抱歉 - 无法建立活动。';
$txt['cannot_calendar_view'] = '抱歉, 您无法检视日历。';
$txt['cannot_remove_any'] = '抱歉, 您无法移除任何主题。检查并确定这个主题没有被移动到其他版块。';
$txt['cannot_remove_own'] = '抱歉, 在这个版块您无法删除自己的主题, 检查并确定这个主题没有被移动到其他版块。';
$txt['cannot_edit_news'] = '无法编辑论坛的最新消息。';
$txt['cannot_pm_read'] = '抱歉, 您无法阅读自己的简讯。';
$txt['cannot_pm_send'] = '无法传送简讯。';
$txt['cannot_karma_edit'] = '没有权限修改别人的评价。';
$txt['cannot_lock_any'] = '您没有权限封锁任何主题。';
$txt['cannot_lock_own'] = '抱歉, 您没有权限封锁自己的主题。';
$txt['cannot_make_sticky'] = '您没有权限顶置这篇主题。';
$txt['cannot_manage_attachments'] = '您没有权限管理附件或头像。';
$txt['cannot_manage_bans'] = '您没有权限修改黑名单';
$txt['cannot_manage_boards'] = '您没有权限管理版块和类别。';
$txt['cannot_manage_membergroups'] = '您没有权限管理群组。';
$txt['cannot_manage_permissions'] = '您没有权限管理权限';
$txt['cannot_manage_smileys'] = '您没有权限管理表情符号';
$txt['cannot_mark_any_notify'] = '您没有权限订阅这篇主题。';
$txt['cannot_mark_notify'] = '抱歉, 您没有权限订阅这个版块。';
$txt['cannot_merge_any'] = '在这些版块, 您没有权限合并主题。';
$txt['cannot_moderate_forum'] = '没有权限管理论坛。';
$txt['cannot_moderate_board'] = 'You are not allowed to moderate this board.';
$txt['cannot_modify_any'] = '您没有权限修改任何帖子。';
$txt['cannot_modify_own'] = '抱歉, 您没有权限修改自己的帖子。';
$txt['cannot_modify_replies'] = '您没有权限修改回覆自己主题的帖子。';
$txt['cannot_move_own'] = '在这个版块, 您没有权限移动自己的帖子。';
$txt['cannot_move_any'] = '您在这个版块没有权限移动帖子。';
$txt['cannot_poll_add_own'] = '抱歉, 您在这个版块没有权限在自己的主题举办投票。';
$txt['cannot_poll_add_any'] = '您没有权限在这篇主题举办投票。';
$txt['cannot_poll_edit_own'] = '您没有权限编辑自己的投票。';
$txt['cannot_poll_edit_any'] = '您在这个版块没有权限编辑投票。';
$txt['cannot_poll_lock_own'] = '您在这个版块没有权限封锁自己的投票。';
$txt['cannot_poll_lock_any'] = '抱歉, 您没有权限封锁投票。';
$txt['cannot_poll_post'] = '您在这个版块没有权限发表举办投票的帖子。';
$txt['cannot_poll_remove_own'] = '您没有权限移除自己主题的投票。';
$txt['cannot_poll_remove_any'] = '您在这个版块没有权限移除投票。';
$txt['cannot_poll_view'] = '您在这个版块无法检视任何投票。';
$txt['cannot_poll_vote'] = '抱歉, 您在这个版块没有权限投票。';
$txt['cannot_post_attachment'] = '您没有权限上传附件。';
$txt['cannot_post_new'] = '抱歉, 您在这个版块没有权限发表新主题。';
$txt['cannot_post_reply_any'] = '您在这个版块没有权限回覆帖子。';
$txt['cannot_post_reply_own'] = '您在这个版块没有权限回覆自己的主题。';
$txt['cannot_profile_remove_own'] = '抱歉, 您没有权限删除自己的帐号。';
$txt['cannot_profile_remove_any'] = '您没有权限删除任何人的帐号！';
$txt['cannot_profile_extra_any'] = '您没有权限修改任何人的个人资料。';
$txt['cannot_profile_identity_any'] = '您没有权限编辑任何人的帐号设定。';
$txt['cannot_profile_title_any'] = '您无法编辑别人自订头衔。';
$txt['cannot_profile_extra_own'] = '抱歉, 您无法编辑自己的个人资料。';
$txt['cannot_profile_identity_own'] = '您没有权限编辑自己的帐号设定。';
$txt['cannot_profile_title_own'] = '您没有权限编辑自己的自订头衔。';
$txt['cannot_profile_server_avatar'] = '您没有权限使用默认的头像。';
$txt['cannot_profile_upload_avatar'] = '您没有权限上传头像。';
$txt['cannot_profile_remote_avatar'] = '您没有权限使用外部网址的头像。';
$txt['cannot_profile_view_own'] = '抱歉, 您没有权限浏览自己的个人资料。';
$txt['cannot_profile_view_any'] = '抱歉, 您没有权限浏览任何人的个人资料。';
$txt['cannot_delete_own'] = '您在这个版块没有权限删除自己的帖子。';
$txt['cannot_delete_replies'] = '抱歉, 您没有权限删除回覆自己主题的帖子。';
$txt['cannot_delete_any'] = '您在这个版块没有权限删除帖子。';
$txt['cannot_report_any'] = '您在这个版块没有权限检举帖子。';
$txt['cannot_search_posts'] = '您没有权限搜寻帖子。';
$txt['cannot_send_mail'] = '您没有权限 Email 给任何人。';
$txt['cannot_issue_warning'] = '抱歉, 您没有权限对会员发出警告。';
$txt['cannot_send_topic'] = '抱歉, 管理员禁止转寄这个版块的帖子。';
$txt['cannot_split_any'] = '这个版块的主题无法分拆。';
$txt['cannot_view_attachments'] = '您在这个版块没有权限下载或检视附件。';
$txt['cannot_view_mlist'] = '您没有权限检视会员名单。';
$txt['cannot_view_stats'] = '您没有权限检视论坛的统计资料。';
$txt['cannot_who_view'] = '抱歉 - 您没有权限检视线上名单。';

$txt['no_theme'] = '这个布景不存在。';
$txt['theme_dir_wrong'] = '默认的布景文件夹有问题, 请点击此连结并修正。';
$txt['registration_disabled'] = '抱歉, 已经停止注册。';
$txt['registration_no_secret_question'] = '会员没有设定密码提示问题。';
$txt['poll_range_error'] = '抱歉, 投票天数至少 1天';
$txt['delFirstPost'] = '您没有权限删除主题的第一篇帖子。<p>如果您要删除这篇主题, 请点击移除主题, 或请版主/管理员帮您删除。</p>';
$txt['parent_error'] = '无法新增版块！';
$txt['login_cookie_error'] = '您无法登录。请检查 cookie 的设定。';
$txt['incorrect_answer'] = '抱歉, 您的答案是错误的。请重试一次, 或者按后退两次用默认的方法取得您的密码。';
$txt['no_mods'] = '找不到版主！';
$txt['parent_not_found'] = '版块结构已经毁损: 找不到母版块';
$txt['modify_post_time_passed'] = '已经超过修改帖子的时间, 您无法编辑这篇帖子。';

$txt['calendar_off'] = '日历功能已经停用, 您无法进入。';
$txt['invalid_month'] = '月份错误。';
$txt['invalid_year'] = '年份错误。';
$txt['invalid_day'] = '日子错误';
$txt['event_month_missing'] = '找不到活动的月份。';
$txt['event_year_missing'] = '找不到活动的年份。';
$txt['event_day_missing'] = '找不到活动日子。';
$txt['event_title_missing'] = '找不到活动标题。';
$txt['invalid_date'] = '日期错误。';
$txt['no_event_title'] = '未输入活动标题。';
$txt['missing_event_id'] = '找不到活动编号。';
$txt['cant_edit_event'] = '您没有权限编辑这个活动。';
$txt['missing_board_id'] = '找不到版块编号。';
$txt['missing_topic_id'] = '找不到主题编号。';
$txt['topic_doesnt_exist'] = '主题不存在。';
$txt['not_your_topic'] = '您不是这篇主题的作者。';
$txt['board_doesnt_exist'] = '这个版块不存在。';
$txt['no_span'] = '活动持续的功能已经停用。';
$txt['invalid_days_numb'] = '持续天数错误。';

$txt['moveto_noboards'] = '主题移动的目标版块不存在！';

$txt['already_activated'] = '您的帐号已经启用。';
$txt['still_awaiting_approval'] = '您的帐号正在等待管理员审核。';

$txt['invalid_email'] = '错误的 Email / Email 范围。<br />例如, Email: bill.gates@microsoft.com。<br />Email 范围: *@*.microsoft.com';
$txt['invalid_expiration_date'] = '错误的截止日期';
$txt['invalid_hostname'] = '错误的网域 / 网域范围。<br />例如, 网域: proxy4.microsoft.com<br />网域范围: *.microsoft.com';
$txt['invalid_ip'] = '错误的 IP / IP 范围。<br />例如, IP: 127.0.0.1<br />IP 范围: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = '错误 IP / IP 范围。<br />例如, IP: 127.0.0.1<br />IP 范围: 127.0.0.*';
$txt['invalid_username'] = '找不到会员帐号';
$txt['no_ban_admin'] = '您无法封锁版主 - 他们必须先被降级!';
$txt['no_bantype_selected'] = '未选择黑名单类型';
$txt['ban_not_found'] = '找不到黑名单';
$txt['ban_unknown_restriction_type'] = '未知的限制类型';
$txt['ban_name_empty'] = '黑名单的名称是空白的';
$txt['ban_name_exists'] = '黑名单的名称重复。请选择不同的名称。';
$txt['ban_trigger_already_exists'] = 'This ban trigger (%1$s) already exists in %2$s.';

$txt['recycle_no_valid_board'] = '还没选择正确的版块存放被删除的帖子';

$txt['login_threshold_fail'] = '抱歉, 您尝试登录的次数已经超过门槛。请稍后再试。';
$txt['login_threshold_brute_fail'] = '抱歉, 您尝试登录的次数已经超过门槛。请30秒后再尝试。';

$txt['who_off'] = '您无法浏览线上会员, 因为这个功能已经停用';

$txt['merge_create_topic_failed'] = '建立主题时发生错误。';
$txt['merge_need_more_topics'] = '合并主题至少要选择二篇主题以上。';

$txt['postWaitTime_broken'] = '您(同IP)连续发表帖子的间隔时间少于 %1$d 秒。请稍后再试。';
$txt['registerWaitTime_broken'] = '您在 %1$d 秒前已经注册了！';
$txt['loginWaitTime_broken'] = '抱歉, 请等待 %1$d 秒再登录。';
$txt['pmWaitTime_broken'] = '您(同IP)连续传送简讯的间隔时间少于 %1$d 秒。请稍后再试。';
$txt['reporttmWaitTime_broken'] = '您(同IP)连续检举帖子的间隔时间少于 %1$d 秒。请稍后再试。';
$txt['sendtopcWaitTime_broken'] = '您(同IP)连续转寄帖子的间隔时间少于 %1$d 秒。请稍后再试。';
$txt['sendmailWaitTime_broken'] = '您(同IP)连续 Email 的间隔时间少于 %1$d 秒。请稍后再试。';
$txt['searchWaitTime_broken'] = '您(同IP)连续搜寻的间隔时间少于 %1$d 秒。请稍后再试。';

$txt['email_missing_data'] = '您必须在标题和内容栏位都输入文字。';

$txt['topic_gone'] = '这个主题或版块不存在, 或是没有权限浏览。';
$txt['theme_edit_missing'] = '您要编辑的档案不存在！';

$txt['attachments_no_write'] = '附件文件夹无法写入。你的档案或头像无法储存。';
$txt['attachments_limit_per_post'] = '每篇帖子不能上传超过 %1$d 个附件';

$txt['no_dump_database'] = '只有管理员可以备份资料库！';
$txt['pm_not_yours'] = '这封简讯不是您自己的或者不存在, 请返回再试一次。';
$txt['mangled_post'] = '毁损的资料 - 请返回再试一次。';
$txt['quoted_post_deleted'] = '您想要引用的帖子已经不存在, 可能被删除或无法检视。';
$txt['pm_too_many_per_hour'] = '您已经超出每小时 %1$d 封简讯数的限制';
$txt['labels_too_many'] = '抱歉, %1$s 简讯标签的数量达到限制！';

$txt['register_only_once'] = '抱歉, 您无法在同一台电脑同时注册多个帐号。';
$txt['admin_setting_coppa_require_contact'] = '您必须输入传真号码, 需要父母/监护人的同意';

$txt['error_long_name'] = '您要的名称字数过多。';
$txt['error_no_name'] = '没有输入名称。';
$txt['error_bad_name'] = '您不能使用这个名称, 因为那是保留名称。';
$txt['error_no_email'] = '没有 Email。';
$txt['error_bad_email'] = '您的 Email 是错误的.';
$txt['error_no_event'] = '没有活动名称。';
$txt['error_no_subject'] = '没有输入标题。';
$txt['error_no_question'] = '没有输入投票选项。';
$txt['error_no_message'] = '帖子内容是空的。';
$txt['error_long_message'] = '您的帖子内容超过字数限制 (%1$d 字)。';
$txt['error_no_comment'] = 'The comment field was left empty.';
$txt['error_session_timeout'] = '您的工作阶段已过期, 请试着重新传送。';
$txt['error_no_to'] = '没有指定收件人。';
$txt['error_bad_to'] = '找不到收件人。';
$txt['error_bad_bcc'] = '找不到密件收件人。';
$txt['error_form_already_submitted'] = '您已经传送这篇帖子！您可能重复送出或是重新整理。';
$txt['error_poll_few'] = '您必须输入二个以上的投票选项！';
$txt['error_need_qr_verification'] = '请输入验证码才能送出帖子。';
$txt['error_wrong_verification_code'] = '您输入的验证码与图片显示的不同。';
$txt['error_wrong_verification_answer'] = '您的回答不正确。';
$txt['error_need_verification_code'] = '请输入验证码才能继续。';
$txt['error_bad_file'] = '抱歉, 指定的档案无法开启: %1$s';
$txt['error_bad_line'] = '您指定的那行无效。';

$txt['smiley_not_found'] = '找不到表情符号。';
$txt['smiley_has_no_code'] = '未提供表情代码。';
$txt['smiley_has_no_filename'] = '未提供表情档名。';
$txt['smiley_not_unique'] = '您提供的表情代码原本就存在。';
$txt['smiley_set_already_exists'] = '表情套图和网址原本就存在';
$txt['smiley_set_not_found'] = '找不到表情套图';
$txt['smiley_set_path_already_used'] = '您提供的网址已经被其他的表情套图使用。';
$txt['smiley_set_unable_to_import'] = '无法汇入表情套图。文件夹可能是错的或是无法读取。';

$txt['smileys_upload_error'] = '上传档案失败。';
$txt['smileys_upload_error_blank'] = '所有的表情套图必须至少一张图片！';
$txt['smileys_upload_error_name'] = '所有的表情符号必须有相同的档名！';
$txt['smileys_upload_error_illegal'] = '档案类型错误。';

$txt['search_invalid_weights'] = '搜寻的加权值设定错误, 必须至少一个的搜寻加权值不为 0。请回报管理员这个问题。';
$txt['unable_to_create_temporary'] = '搜寻功能无法建立暂存的资料表, 请稍候再试。';

$txt['package_no_file'] = '找不到扩展档案！';
$txt['packageget_unable'] = '无法连接服务器。请试着使用<a href="%1$s" target="_blank" class="new_win">这个网址</a>代替。';
$txt['not_on_simplemachines'] = '抱歉, 扩展必须从 simplemachines.org 官网下载。';
$txt['package_cant_uninstall'] = '这个扩展可能没有安装或是已经反安装 - 您现在无法反安装。';
$txt['package_cant_download'] = '您无法下载或安装这个扩展, 因为扩展的文件夹或里面的档案无法读取！';
$txt['package_upload_error_nofile'] = '您没有选择上传的扩展。';
$txt['package_upload_error_failed'] = '无法上传扩展, 请检查文件夹权限！';
$txt['package_upload_error_exists'] = '您上传的档案已经存在, 请删除它之后再上传。';
$txt['package_upload_error_supports'] = '扩展管理只允许下列档案类型: %1$s。';
$txt['package_upload_error_broken'] = '扩展上传失败因为下列错误:<br />&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = '找不到您尝试安装的扩展。您可能要手动上传到扩展文件夹.';
$txt['package_get_error_missing_xml'] = '您尝试安装的扩展缺少 package-info.xml, 这个档案必须放在扩展文件夹的根目录';
$txt['package_get_error_is_zero'] = '下载到服务器的扩展档案是空的。请检查扩展文件夹和其子文件夹&quot;temp&quot;是否可写入。假如您持续遇到这个问题, 你可以把扩展解压缩后再上传档案到扩展文件夹的子目录, 然后重试一次。<br />例如: 假如扩展的压缩档叫做 shout.tar.gz, 您应该:<br />1) 下载 shout.tar.gz 到您自己的电脑上, 并解开它.<br />2) 使用 FTP 软体在服务器上的扩展文件夹&quot;Packages&quot;中, 建立一个新文件夹叫 &quot;shout&quot;。<br />3) 上传 shout.tar.gz 解开后的档案到 &quot;shout&quot; 文件夹。<br />4) 返回扩展管理页面, 扩展会自动被 SMF 发现。';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF 无法在找到 package-info.xml 和扩展里找到有效的资讯。这个扩展有问题, 或是损坏。';

$txt['no_membergroup_selected'] = '没有选择群组';
$txt['membergroup_does_not_exist'] = '这个群组不存在。';

$txt['at_least_one_admin'] = '论坛至少要有一个管理员！';

$txt['error_functionality_not_windows'] = '抱歉, 这个功能目前无法运行在 Windows 服务器上。';

// Don't use entities in the below string.
$txt['attachment_not_found'] = '找不到附件';

$txt['error_no_boards_selected'] = '没有选择正确的版块！';
$txt['error_invalid_search_string'] = '您忘记输入搜寻的关键字吗？';
$txt['error_invalid_search_string_blacklist'] = '您的搜寻字词包含太多常见字词。请重新用不同的字词搜寻。';
$txt['error_search_string_small_words'] = '每个词必须最少二个字元长。';
$txt['error_query_not_specific_enough'] = '搜寻不到符合的相关结果。';
$txt['error_no_messages_in_time_frame'] = '在指定的日期内搜寻不到您要的资料。';
$txt['error_no_labels_selected'] = '没有选择标签！';
$txt['error_no_search_daemon'] = '无法读取搜寻常驻程式';

$txt['profile_errors_occurred'] = '保存您的个人资料时发生下面错误';
$txt['profile_error_bad_offset'] = '时区设定有错误';
$txt['profile_error_no_name'] = '名称栏位空白';
$txt['profile_error_name_taken'] = '这个会员名称已经有人使用';
$txt['profile_error_name_too_long'] = '选择的名称太长。不能超过 60 个字元长';
$txt['profile_error_no_email'] = 'Email 栏位空白';
$txt['profile_error_bad_email'] = '您没有输入正确的 Email';
$txt['profile_error_email_taken'] = '输入的 Email 已经有人使用';
$txt['profile_error_no_password'] = '您没有输入密码';
$txt['profile_error_bad_new_password'] = '输入的新密码不相同';
$txt['profile_error_bad_password'] = '输入的密码错误';
$txt['profile_error_bad_avatar'] = '您选择的头像太大, 或是有其他错误';
$txt['profile_error_password_short'] = '您的密码必须是 ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' 个字元长。';
$txt['profile_error_password_restricted_words'] = '您的密码不能包含名称, Email, 或是常见的单字。';
$txt['profile_error_password_chars'] = '您的密码必须包括大小写和数字。';
$txt['profile_error_already_requested_group'] = '您已经发出加入这个群组的请求！';
$txt['profile_error_openid_in_use'] = '已经有其他会员使用这个 OpenID authentication URL';

$txt['mysql_error_space'] = ' - 检查资料库的可用空间或是通知管理员。';

$txt['icon_not_found'] = '图示不在默认的布景内 - 请确定图示已经正确的上传完成, 然后重试一次。';
$txt['icon_after_itself'] = '图示不能放置在它自己的后面！';
$txt['icon_name_too_long'] = '图示的名称不能超过 16 个字元';

$txt['name_censored'] = '抱歉, 您要使用的名称 %1$s 含有禁止的文字。请使用其它名称。';

$txt['poll_already_exists'] = '主题只能够有一个投票！';
$txt['poll_not_found'] = '这篇主题没有投票！';

$txt['error_while_adding_poll'] = '新增投票时, 发生下列错误';
$txt['error_while_editing_poll'] = '编辑投票时, 发生下列错误';

$txt['loadavg_search_disabled'] = '因为服务器负荷过重, 搜寻功能暂时关闭, 请稍后再试。';
$txt['loadavg_generic_disabled'] = '抱歉, 因为服务器负荷过重, 此功能目前无法使用.。';
$txt['loadavg_allunread_disabled'] = '服务器负荷过重, 所以无法找到您未阅读的帖子。';
$txt['loadavg_unreadreplies_disabled'] = '目前服务器负荷过重, 请稍候再试。';
$txt['loadavg_show_posts_disabled'] = '因为服务器的负荷过重, 这位会员的帖子无法浏览。请稍后再试。';
$txt['loadavg_unread_disabled'] = '服务器的资源暂时处于过高的需求, 以致于无法列出您未读的帖子。';

$txt['cannot_edit_permissions_inherited'] = '您不能直接编辑继承的权限, 您必须编辑母群组或是会员群组的继承关系。';

$txt['mc_no_modreport_specified'] = '您必须指定要检视的报告。';
$txt['mc_no_modreport_found'] = '这报告不存在, 或是禁止您检视。';

$txt['st_cannot_retrieve_file'] = '无法取回档案 %1$s。';
$txt['admin_file_not_found'] = '不能读取要求的档案: %1$s。';

$txt['themes_none_selectable'] = '至少选择一个布景。';
$txt['themes_default_selectable'] = '必须选择目前论坛默认的布景。';
$txt['ignoreboards_disallowed'] = '未启用忽视版块的选项。';

$txt['mboards_delete_error'] = '没有选择类别！';
$txt['mboards_delete_board_error'] = '没有选择版块！';

$txt['mboards_parent_own_child_error'] = 'Unable to make a parent its own child!';
$txt['mboards_board_own_child_error'] = 'Unable to make a board its own child!';

$txt['smileys_upload_error_notwritable'] = '下列的表情符号文件夹唯读: %1$s';
$txt['smileys_upload_error_types'] = '图片档案只允许下列副档名: %1$s.';

$txt['change_email_success'] = '您的 Email 变更完成, 新的认证信已经寄出。';
$txt['resend_email_success'] = '新的认证信已经成功寄出。';

$txt['custom_option_need_name'] = '自订的个人资料栏位必须要有名称！';
$txt['custom_option_not_unique'] = '栏位名称重复！';

$txt['warning_no_reason'] = '改变会员的警告等级, 您必须输入理由。';
$txt['warning_notify_blank'] = '您通知这个会员, 但是没有填写标题/讯息';

$txt['cannot_connect_doc_site'] = '无法取得 Simple Machines 线上手册。请检查对外连线, 然后重试一次。';

$txt['movetopic_no_reason'] = '您必须输入移动帖子的理由, 如果不输入理由请把\'发表转址主题。\'选项取消。';

// OpenID error strings
$txt['openid_server_bad_response'] = 'OpenID identity 没有传回正确的讯息。';
$txt['openid_return_no_mode'] = 'OpenID provider 没有回应 OpenID 模式。';
$txt['openid_not_resolved'] = 'OpenID provider 没有同意您的请求。';
$txt['openid_no_assoc'] = 'OpenID provider 找不到请求的联系。';
$txt['openid_sig_invalid'] = '来自 OpenID provider 的签章是无效的。';
$txt['openid_load_data'] = '无法从您的登录读取资料. 请再试一次.';
$txt['openid_not_verified'] = '提供的 OpenID 地址并未认证。请登录进行认证。';

$txt['error_custom_field_too_long'] = '&quot;%1$s&quot; 栏位不能超过 %2$d 个字元。';
$txt['error_custom_field_invalid_email'] = '&quot;%1$s&quot; 栏位必须是合法的 email。';
$txt['error_custom_field_not_number'] = '&quot;%1$s&quot; 栏位必须是数字。';
$txt['error_custom_field_inproper_format'] = '&quot;%1$s&quot; 栏位是不合法的格式。';
$txt['error_custom_field_empty'] = '&quot;%1$s&quot; 栏位不能是空白。';

$txt['email_no_template'] = '找不到 Email 样版 &quot;%1$s&quot;。';

$txt['search_api_missing'] = '找不到搜寻 API。请通知管理员检查是否上传正确的档案。';
$txt['search_api_not_compatible'] = '选择的搜寻 API 是过期的 - 返回标准搜寻。请检查档案 %1$s。';

// Restore topic/posts
$txt['cannot_restore_first_post'] = '您不能回复主题的第一篇帖子。';
$txt['parent_topic_missing'] = '您试着回复这篇帖子的母主题已经被删除了。';
$txt['restored_disabled'] = '回复主题的功能已停用。';
$txt['restore_not_found'] = '下列帖子无法回复; 原主题可能被移除: <ul style="margin-top: 0px;">%1$s</ul> 您需要手动移动它。';

$txt['error_invalid_dir'] = '您输入的文件夹是无效的。';

$txt['error_sqlite_optimizing'] = 'Sqlite 正在最佳化资料库, 论坛无法读取直到它完成前。请试着重新整理网页。';

?>