<?php
// Version: 2.0.8; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'zh_CN.utf8';
$txt['lang_dictionary'] = 'zh-hans';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$txt['days_short'] = array('周日', '周一', '周二', '周三', '周四', '周五', '周六');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
$txt['months_titles'] = array(1 => '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
$txt['months_short'] = array(1 => '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['newmessages0'] = '条新短信';
$txt['newmessages1'] = '条新短信';
$txt['newmessages3'] = '新短信';
$txt['newmessages4'] = ',';

$txt['admin'] = '管理';
$txt['moderate'] = '监控中心';

$txt['save'] = '保存';

$txt['modify'] = '修改';
$txt['forum_index'] = $context['forum_name'] . ' - 首页';
$txt['members'] = '会员';
$txt['board_name'] = '版块名称';
$txt['posts'] = '帖子';

$txt['member_postcount'] = '帖子';
$txt['no_subject'] = '(无标题)';
$txt['view_profile'] = '查看个人资料';
$txt['guest_title'] = '访客';
$txt['author'] = '作者';
$txt['on'] = '于';
$txt['remove'] = '删除';
$txt['start_new_topic'] = '发表新主题';

$txt['login'] = '登录';
// Use numeric entities in the below string.
$txt['username'] = '会员帐号';
$txt['password'] = '密码';

$txt['username_no_exist'] = '请输入正确的帐号。';
$txt['no_user_with_email'] = '没有帐号绑定本信箱。';

$txt['board_moderator'] = '版主';
$txt['remove_topic'] = '删除主题';
$txt['topics'] = '主题';
$txt['modify_msg'] = '修改信息';
$txt['name'] = '会员名称';
$txt['email'] = '电子邮件';
$txt['subject'] = '标题';
$txt['message'] = '内容';
$txt['redirects'] = '重定向';
$txt['quick_modify'] = '快速编辑';

$txt['choose_pass'] = '输入密码';
$txt['verify_pass'] = '确认密码';
$txt['position'] = '会员组';

$txt['profile_of'] = '观看会员资料 会员:';
$txt['total'] = '总';
$txt['posts_made'] = '帖子';
$txt['website'] = '个人网站';
$txt['register'] = '注册';
$txt['warning_status'] = '警告状态';
$txt['user_warn_watch'] = '版主监控的用户';
$txt['user_warn_moderate'] = '帖子审批列表';
$txt['user_warn_mute'] = '用户被禁止发贴';
$txt['warn_watch'] = '监控';
$txt['warn_moderate'] = '管理';
$txt['warn_mute'] = '不理';

$txt['message_index'] = '返回版块首页';
$txt['news'] = '公告';
$txt['home'] = '首页';

$txt['lock_unlock'] = '锁定/解锁主题';
$txt['post'] = '发帖';
$txt['error_occured'] = '发生错误!';
$txt['at'] = '在';
$txt['logout'] = '注销';
$txt['started_by'] = '作者';
$txt['replies'] = '回复';
$txt['last_post'] = '最后发表';
$txt['admin_login'] = '管理员登录';
// Use numeric entities in the below string.
$txt['topic'] = '主题';
$txt['help'] = '帮助';
$txt['notify'] = '订阅';
$txt['unnotify'] = '未提醒';
$txt['notify_request'] = '订阅本帖: 当有人回帖时, 您想要收到一封电子邮件提醒您吗?';
// Use numeric entities in the below string.
$txt['regards_team'] = "敬祝,\n" . $context['forum_name'] . " 论坛管理小组.\n";
$txt['notify_replies'] = '加入订阅';
$txt['move_topic'] = '移动帖子';
$txt['move_to'] = '移动到';
$txt['pages'] = '页';
$txt['users_active'] = '过去 %s 分钟内出现的会员';
$txt['personal_messages'] = '站内短信';
$txt['reply_quote'] = '引用原文回复';
$txt['reply'] = '回复';
$txt['reply_noun'] = '回复';
$txt['approve'] = '审核';
$txt['approve_all'] = '审核';
$txt['awaiting_approval'] = '等待审核';
$txt['attach_awaiting_approve'] = '等待审核附件';
$txt['post_awaiting_approval'] = '注意:该信息仍在等待版主审核。';
$txt['there_are_unapproved_topics'] = '当前有 %1$s 篇主题和 %2$s 个帖子需要审批，点<a href="%3$s">这里</a>查看。';

$txt['msg_alert_none'] = '没有任何信息';
$txt['msg_alert_you_have'] = '您有';
$txt['msg_alert_messages'] = '短信';
$txt['remove_message'] = '删帖';

$txt['online_users'] = '在线会员';
$txt['personal_message'] = '站内短信';
$txt['jump_to'] = '跳到';
$txt['go'] = 'Go';
$txt['are_sure_remove_topic'] = '您确定要删除这篇主题吗?';
$txt['yes'] = '确认';
$txt['no'] = '取消';

$txt['search_end_results'] = '搜索结果最末端';
$txt['search_on'] = '于';

$txt['search'] = '搜索';
$txt['all'] = '全部';

$txt['back'] = '回上一页';
$txt['password_reminder'] = '密码提醒';
$txt['topic_started'] = '主题发帖人为';
$txt['title'] = '标题';
$txt['post_by'] = '作者';
$txt['memberlist_searchable'] = '在此可以浏览所有已注册的会员..';
$txt['welcome_member'] = '你好！';
$txt['admin_center'] = '管理中心';
$txt['last_edit'] = '最后编辑时间';
$txt['notify_deactivate'] = '您想要关闭对于这篇帖子的订阅吗?';

$txt['recent_posts'] = '最新帖子';

$txt['location'] = '来自';
$txt['gender'] = '性别';
$txt['date_registered'] = '注册日期';

$txt['recent_view'] = '观看最新发表的帖子.';
$txt['recent_updated'] = '是最近更新的主题';

$txt['male'] = '男';
$txt['female'] = '女';

$txt['error_invalid_characters_username'] = '帐号名称内含不可使用的字符.';

$txt['welcome_guest'] = '你好！ <b>%s</b>. 请先 <a href="' . $scripturl . '?action=login">登录</a> 或 <a href="' . $scripturl . '?action=register">注册一个帐号</a>.';
$txt['login_or_register'] = '请 <a href="' . $scripturl . '?action=login">登录</a> 或 <a href="' . $scripturl . '?action=register">注册</a>.';
$txt['welcome_guest_activate'] = '<br />您忘了 <a href="' . $scripturl . '?action=activate">激活您的帐号吗?';
$txt['hello_member'] = '你好！';
// Use numeric entities in the below string.
$txt['hello_guest'] = '你好！';
$txt['welmsg_hey'] = '哈喽，';
$txt['welmsg_welcome'] = '你好！';
$txt['welmsg_please'] = '请';
$txt['select_destination'] = '请选择一个目的地';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = '作者';

$txt['icon_smiley'] = '微笑';
$txt['icon_angry'] = '生气';
$txt['icon_cheesy'] = '偷笑';
$txt['icon_laugh'] = '哈哈哈';
$txt['icon_sad'] = '难过';
$txt['icon_wink'] = '眨眼';
$txt['icon_grin'] = '奸笑';
$txt['icon_shocked'] = '惊讶';
$txt['icon_cool'] = '酷';
$txt['icon_huh'] = '???';
$txt['icon_rolleyes'] = '转眼';
$txt['icon_tongue'] = '伸舌头';
$txt['icon_embarrassed'] = '害羞';
$txt['icon_lips'] = '无话可说';
$txt['icon_undecided'] = '很难决定啊';
$txt['icon_kiss'] = '飞吻';
$txt['icon_cry'] = '哭泣';

$txt['moderator'] = '版主';
$txt['moderators'] = '版主';

$txt['mark_board_read'] = '标记所有主题为已阅读';
$txt['views'] = '浏览';
$txt['new'] = '新';

$txt['view_all_members'] = '会员名单';
$txt['view'] = '浏览';

$txt['viewing_members'] = '查看从 %1$s 到 %2$s 的会员';
$txt['of_total_members'] = '自总共 %1$s 会员';

$txt['forgot_your_password'] = '忘了您的密码吗?';

$txt['date'] = '日期';
// Use numeric entities in the below string.
$txt['from'] = '发件人';
$txt['check_new_messages'] = '检查新信息';
$txt['to'] = '收件人';

$txt['board_topics'] = '主题';
$txt['members_title'] = '会员';
$txt['members_list'] = '会员名单';
$txt['new_posts'] = '新帖';
$txt['old_posts'] = '没有新帖';
$txt['redirect_board'] = '重定向板块';

$txt['sendtopic_send'] = '发送';
$txt['report_sent'] = '你的举报已经成功发出';

$txt['time_offset'] = '时区设定';
$txt['or'] = '或';

$txt['no_matches'] = '很抱歉, 没有找到任何符合的数据';

$txt['notification'] = '订阅';

$txt['your_ban'] = '很抱歉 %s, 本论坛禁止您进入!';
$txt['your_ban_expires'] = '你的限制将在 %s 天后过期';
$txt['your_ban_expires_never'] = '你已经设置为永远不允许访问';
$txt['ban_continue_browse'] = '你可以继续以游客权限访问论坛.';

$txt['mark_as_read'] = '标记所有帖子为已阅读';

$txt['hot_topics'] = '热门主题(超过%s 篇回帖)';
$txt['very_hot_topics'] = '超热门主题(超过%s篇回帖)';
$txt['locked_topic'] = '锁定的主题';
$txt['normal_topic'] = '一般的主题';
$txt['participation_caption'] = '您曾经参与过的主题';

$txt['go_caps'] = 'GO';

$txt['print'] = '打印';
$txt['profile'] = '个人资料';
$txt['topic_summary'] = '帖子总览';
$txt['not_applicable'] = 'N/A';
$txt['message_lowercase'] = '封短信息';
$txt['name_in_use'] = '这个会员名称已经有人使用了，或者因为你重复提交了申请，请尝试用你刚才的信息登录。谢谢。';

$txt['total_members'] = '总会员人数';
$txt['total_posts'] = '总帖数';
$txt['total_topics'] = '总主题数';

$txt['mins_logged_in'] = '登录时间 (分钟)';

$txt['preview'] = '预览';
$txt['always_logged_in'] = '永远自动登录';

$txt['logged'] = '已记录';
// Use numeric entities in the below string.
$txt['ip'] = 'IP 地址';

$txt['www'] = '个人网站';

$txt['by'] = '作者';

$txt['hours'] = '小时';
$txt['days_word'] = '天';

$txt['newest_member'] = ', 最新加入的会员.';

$txt['search_for'] = '搜索';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hi.你好啊！';
$txt['aim_title'] = 'AOL 信息';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ 信息';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN 信息';
$txt['yim'] = 'Yahoo!';
$txt['yim_title'] = 'Yahoo 信息';

$txt['maintain_mode_on'] = '提醒, 目前论坛是设定为维护状态.';

$txt['read'] = '阅读';
$txt['times'] = '次';

$txt['forum_stats'] = '论坛统计资料';
$txt['latest_member'] = '最新注册会员';
$txt['total_cats'] = '总分类数量';
$txt['latest_post'] = '最新帖子';

$txt['you_have'] = '您有';
$txt['click'] = '按';
$txt['here'] = '此';
$txt['to_view'] = '进入.';

$txt['total_boards'] = '版块总计';

$txt['print_page'] = '打印本页';

$txt['valid_email'] = '必须是有效的电子邮件信箱.';

$txt['geek'] = '我是神经病!!';
$txt['info_center_title'] = $context['forum_name'] . ' - 信息中心';

$txt['send_topic'] = '发送此主题';

$txt['sendtopic_title'] = '将这篇文章 &quot;%s&quot; 发给朋友.';
$txt['sendtopic_sender_name'] = '您的大名';
$txt['sendtopic_sender_email'] = '您的电子邮件';
$txt['sendtopic_receiver_name'] = '收件者大名';
$txt['sendtopic_receiver_email'] = '收件者电子邮件';
$txt['sendtopic_comment'] = '输入备注';

$txt['allow_user_email'] = '允许会员发送Email给你？';

$txt['check_all'] = '选取全部';

// Use numeric entities in the below string.
$txt['database_error'] = '数据库错误';
$txt['try_again'] = '请重新操作一次. 如果这个问题持续发生, 请联络系统管理员.';
$txt['file'] = '文件';
$txt['line'] = '行';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF论坛系统已在数据库中发现错误, 并且修正完毕. 如果这个问题持续发生, 请联络您的主机系统管理员.';
$txt['database_error_versions'] = '<b>注意:</b> 您<em>可能</em>需要更新您的数据库. 您的论坛版本是 %s, 您的SMF数据库版本是 %s. 执行最新的upgrade.php升级可能会解决上述错误。';
$txt['template_parse_error'] = '主题模板执行错误!';
$txt['template_parse_error_message'] = '论坛的主题模板出现错误, 这可能是暂时性的, 请稍后再进入论坛. 如果错误继续发生, 请通知管理员.<br /><br />你也可以 <a href="javascript:location.reload();">刷新此页</a>.';
$txt['template_parse_error_details'] = '无法安装 <tt><b>%1$s</b></tt> 主题或语言文件. 请注意 (<tt>\'</tt>) 通常需要使用 (<tt>\\</tt>) 才能. 请按 <a href="' . $boardurl . '%1$s">这里看全部的错误信息</a>.<br /><br />您也可以 <a href="javascript:location.reload();">刷新此页</a> 或 <a href="' . $scripturl . '?theme=1">使用默认的风格</a>.';

$txt['today'] = '<b>今天</b> ';
$txt['yesterday'] = '<b>昨天</b> ';
$txt['new_poll'] = '新投票';
$txt['poll_question'] = '问题';
$txt['poll_vote'] = '发起投票';
$txt['poll_total_voters'] = '总票数';
$txt['shortcuts'] = '快捷键: 按下ALT-S可以发帖/按下ALT-P可以预览帖子';
$txt['shortcuts_firefox'] = '快捷键：敲 shift+alt+s 来提交或 shift+alt+p 来预览';
$txt['poll_results'] = '查看结果.';
$txt['poll_lock'] = '锁定投票';
$txt['poll_unlock'] = '解锁投票';
$txt['poll_edit'] = '更改投票';
$txt['poll'] = '投票';
$txt['one_day'] = '一天';
$txt['one_week'] = '一周';
$txt['one_month'] = '一个月';
$txt['forever'] = '永远';
$txt['quick_login_dec'] = '请输入帐号, 密码以及预计登录时间';
$txt['one_hour'] = '一小时';
$txt['moved'] = '移动';
$txt['moved_why'] = '请输入为何您移动这篇主题的原因.';
$txt['board'] = '版块';
$txt['in'] = '在';
$txt['sticky_topic'] = '置顶主题';

$txt['delete'] = '删除';

$txt['your_pms'] = '您的短信息';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[详细统计资料]';

// Use numeric entities in the below three strings.
$txt['code'] = '程序代码';
$txt['code_select'] = '[选择]';
$txt['quote_from'] = '引用自';
$txt['quote'] = '引用';

$txt['merge_to_topic_id'] = '目标主题的ID';
$txt['split'] = '拆分主题';
$txt['merge'] = '合并主题';
$txt['subject_new_topic'] = '新主题的标题';
$txt['split_this_post'] = '只拆分此篇文章.';
$txt['split_after_and_this_post'] = '回复这篇文章之后拆分此篇主题.';
$txt['select_split_posts'] = '请选择您要拆分的文章.';
$txt['new_topic'] = '新主题';
$txt['split_successful'] = '主题已经拆分成功为两篇主题.';
$txt['origin_topic'] = '原主题';
$txt['please_select_split'] = '请选择您要拆分的文章.';
$txt['merge_successful'] = '主题已经合并成功.';
$txt['new_merged_topic'] = '新合并的主题';
$txt['topic_to_merge'] = '您要合并的主题';
$txt['target_board'] = '目标版块';
$txt['target_topic'] = '目标主题';
$txt['merge_confirm'] = '确定要合并';
$txt['with'] = '和';
$txt['merge_desc'] = '这个功能会将两篇帖子合并为一篇帖子. 所有的回帖都会根据回复时间重新排列顺序, 因此最早发表的帖子会成为这个主题的第一篇内容.';

$txt['set_sticky'] = '置顶主题';
$txt['set_nonsticky'] = '取消置顶主题';
$txt['set_lock'] = '锁定主题';
$txt['set_unlock'] = '解锁主题';

$txt['search_advanced'] = '高级搜索';

$txt['security_risk'] = '重大安全警告:';
$txt['not_removed'] = '您并没有删除 ';
$txt['not_removed_extra'] = '%1$s 是 %2$s 的非SMF自动生成的备份文件. 该文件可以直接被访问到并来获得非授权的访问论坛数据，你应该立刻删除。';

$txt['cache_writable_head'] = '性能警告';
$txt['cache_writable'] = '缓存目录无法写入??这会极大的影响你的论坛的性能。';

$txt['page_created'] = '本页花了 ';
$txt['seconds_with'] = ' 秒, 以及 ';
$txt['queries'] = ' 次的数据库查询.';

$txt['report_to_mod_func'] = '使用这个功能通知版主以及管理员有问题的帖子.<br /><i>请注意: 使用这个功能会将您的电子邮件信箱地址告诉版主以及管理员.</i>';

$txt['online'] = '在线';
$txt['offline'] = '离线';
$txt['pm_online'] = '短信息 (在线)';
$txt['pm_offline'] = '短信息 (离线)';
$txt['status'] = '状态';

$txt['go_up'] = '向上';
$txt['go_down'] = '向下';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
<a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2014</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = '寿星:';
$txt['events'] = '事件:';
$txt['birthdays_upcoming'] = '即将生日:';
$txt['events_upcoming'] = '近日事件:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = '月:';
$txt['calendar_year'] = '年:';
$txt['calendar_day'] = '日:';
$txt['calendar_event_title'] = '事件名称:';
$txt['calendar_event_options'] = '事件选项';
$txt['calendar_post_in'] = '相关帖子:';
$txt['calendar_edit'] = '修改事件内容';
$txt['event_delete_confirm'] = '删除这个事件?';
$txt['event_delete'] = '删除事件';
$txt['calendar_post_event'] = '发表事件';
$txt['calendar'] = '日历';
$txt['calendar_link'] = '链接到日历';
$txt['calendar_upcoming'] = '近日事件';
$txt['calendar_today'] = '今日事件';
$txt['calendar_week'] = '周';
$txt['calendar_week_title'] = '%1$d / %2$d 周';
$txt['calendar_numb_days'] = '维持的天数:';
$txt['calendar_how_edit'] = '如何修改事件内容?';
$txt['calendar_link_event'] = '链接事件';
$txt['calendar_confirm_delete'] = '你确定你说要删除该事件吗？';
$txt['calendar_linked_events'] = '已链接的事件';
$txt['calendar_click_all'] = '点击来查看所有 %1$s';

$txt['moveTopic1'] = '发表一篇自动转址主题';
$txt['moveTopic2'] = '修改这篇主题的标题';
$txt['moveTopic3'] = '新的标题';
$txt['moveTopic4'] = '修改每篇帖子的标题';
$txt['move_topic_unapproved_js'] = '警告！该主题还没有被审批。\\n\\n除非你在转移后立刻审批该主题，否则不推荐你创建重定向。';

$txt['theme_template_error'] = '无法加载风格文件 \'%s\'.';
$txt['theme_language_error'] = '无法载入语言文件: \'%s\'.';

$txt['parent_boards'] = '子版块';

$txt['smtp_no_connect'] = '无法链接到邮件发信服务器 (SMTP)';
$txt['smtp_port_ssl'] = 'SMTP 连接端口的设定错误；给 SSL 的主机它必须是 465。';
$txt['smtp_bad_response'] = '邮件服务器没有回应';
$txt['smtp_error'] = '发送邮件时发生错误: ';
$txt['mail_send_unable'] = '不能发送邮件到以下地址： \'%s\'';

$txt['mlist_search'] = '寻找会员';
$txt['mlist_search_again'] = '重新搜索';
$txt['mlist_search_email'] = '根据电子邮件搜索';
$txt['mlist_search_messenger'] = '根据通讯软件昵称搜索';
$txt['mlist_search_group'] = '根据群组或阶级搜索';
$txt['mlist_search_name'] = '根据昵称搜索';
$txt['mlist_search_website'] = '根据个人网站搜索';
$txt['mlist_search_results'] = '搜索结果';
$txt['mlist_search_by'] = '通过 %1$s 来搜索';
$txt['mlist_menu_view'] = '查看会员清单';

$txt['attach_downloaded'] = '已被下载';
$txt['attach_viewed'] = '已被阅读';
$txt['attach_times'] = '次';

$txt['settings'] = '设置';
$txt['never'] = '永不';
$txt['more'] = '更多……';

$txt['hostname'] = '主机地址';
$txt['you_are_post_banned'] = '对不起 %s, 您被禁止发送短信息.';
$txt['ban_reason'] = '原因';

$txt['tables_optimized'] = '数据库已优化';

$txt['add_poll'] = '投票';
$txt['poll_options6'] = '您只能选择%s个选项.';
$txt['poll_remove'] = '删除投票';
$txt['poll_remove_warn'] = '您确定要删除这个投票吗?';
$txt['poll_results_expire'] = '投票结果将会在投票结束后公告';
$txt['poll_expires_on'] = '投票截止日期';
$txt['poll_expired_on'] = '投票已截止';
$txt['poll_change_vote'] = '删除投票';
$txt['poll_return_vote'] = '投票选项';
$txt['poll_cannot_see'] = '您现在还不能查看投票结果。';

$txt['quick_mod_approve'] = '审核所选';
$txt['quick_mod_remove'] = '删除所选';
$txt['quick_mod_lock'] = '锁定选项';
$txt['quick_mod_sticky'] = '置顶选项';
$txt['quick_mod_move'] = '移动选项到';
$txt['quick_mod_merge'] = '合并选项';
$txt['quick_mod_markread'] = '将所选帖子标记为“已读”';
$txt['quick_mod_go'] = '执行!';
$txt['quickmod_confirm'] = '您是否确定要继续?';

$txt['spell_check'] = '拼字检查（英文）';

$txt['quick_reply'] = '快速回复';
$txt['quick_reply_desc'] = '通过 <i>快速回复</i> 功能, 您可以快速的回复帖子, 您也可以使用BBCODE或是HTML (如果这个版块允许的话).';
$txt['quick_reply_warning'] = '注意: 此篇主题已经被锁定了!<br />只有版主可以回复.';
$txt['quick_reply_verification'] = '当你提交贴子的时候，你会被带往一个正常发帖页去验证你的贴子 %1$s.';
$txt['quick_reply_verification_guests'] = '(所有游客都必须验证)';
$txt['quick_reply_verification_posts'] = '(所有少于 %1$d 贴的用户都必须验证)';
$txt['wait_for_approval'] = '注意: 该帖子在版主未审核以前将不会显示。';

$txt['notification_enable_board'] = '您确定要订阅这个版块的新帖子吗?';
$txt['notification_disable_board'] = '您确定不再订阅这个版块的新帖子吗?';
$txt['notification_enable_topic'] = '您确定要订阅这个帖子吗?';
$txt['notification_disable_topic'] = '您确定不再订阅这个帖子吗?';

$txt['report_to_mod'] = '向版主举报';
$txt['issue_warning_post'] = '就当前信息发出警告';

$txt['unread_topics_visit'] = '未阅读的主题';
$txt['unread_topics_visit_none'] = '您上次光临之后未有新的主题. <a href="' . $scripturl . '?action=unread;all">所有未阅读的主题</a>.';
$txt['unread_topics_all'] = '所有未阅读的主题';
$txt['unread_replies'] = '更新的主题';

$txt['who_title'] = '在线会员';
$txt['who_and'] = ' 以及 ';
$txt['who_viewing_topic'] = ' 正在阅读本主题.';
$txt['who_viewing_board'] = ' 正在浏览本版块.';
$txt['who_member'] = '会员';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'PHP 支持';
$txt['powered_by_mysql'] = 'MySQL 支持';
$txt['valid_css'] = '验证 CSS!';

// Current footer strings
$txt['valid_html'] = '验证 HTML 4.01!';
$txt['valid_xhtml'] = '验证 XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = '访客';
$txt['guests'] = '访客';
$txt['user'] = '会员';
$txt['users'] = '会员';
$txt['hidden'] = '隐身';
$txt['buddy'] = '好友';
$txt['buddies'] = '好友';
$txt['most_online_ever'] = '历史最高在线';
$txt['most_online_today'] = '今天最高在线';

$txt['merge_select_target_board'] = '选择合并主题要放置的目标版块';
$txt['merge_select_poll'] = '选择在合并后要保存的投票';
$txt['merge_topic_list'] = '选择要合并的主题';
$txt['merge_select_subject'] = '选择合并后主题的标题';
$txt['merge_custom_subject'] = '自订标题';
$txt['merge_enforce_subject'] = '修改所有回帖的标题';
$txt['merge_include_notifications'] = '包含订阅?';
$txt['merge_check'] = '合并?';
$txt['merge_no_poll'] = '没有投票';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = '目前使用的图示';
$txt['message_icon'] = '信息图标';

$txt['smileys_current'] = '目前的表情图案集';
$txt['smileys_none'] = '不使用表情图案';
$txt['smileys_forum_board_default'] = '论坛/版块的默认设置';

$txt['search_results'] = '搜索结果';
$txt['search_no_results'] = '很抱歉, 没有找到任何相符的数据';

$txt['totalTimeLogged1'] = '总登录时间: ';
$txt['totalTimeLogged2'] = ' 天, ';
$txt['totalTimeLogged3'] = ' 小时和 ';
$txt['totalTimeLogged4'] = ' 分钟.';
$txt['totalTimeLogged5'] = '天 ';
$txt['totalTimeLogged6'] = '时 ';
$txt['totalTimeLogged7'] = '分';

$txt['approve_thereis'] = '共有';
$txt['approve_thereare'] = '共有';
$txt['approve_member'] = '一位会员';
$txt['approve_members'] = '位会员';
$txt['approve_members_waiting'] = '等待审核.';

$txt['notifyboard_turnon'] = '当有会员在这个版块内发表新主题时, 是否要通过电子邮件通知您?';
$txt['notifyboard_turnoff'] = '您确定您不想收到来自这个版块的新主题通知吗?';

$txt['activate_code'] = '您的激活码是';

$txt['find_members'] = '寻找会员';
$txt['find_username'] = '帐号, 昵称或电子邮件';
$txt['find_buddies'] = '只查找好友？';
$txt['find_wildcards'] = '您可以使用的万用字符: *, ?';
$txt['find_no_results'] = '没有找到任何结果';
$txt['find_results'] = '搜索结果';
$txt['find_close'] = '关闭';

$txt['unread_since_visit'] = '显示上次光临之后的新主题.';
$txt['show_unread_replies'] = '显示您有参与讨论的所有新回复.';

$txt['change_color'] = '更改颜色';

$txt['quickmod_delete_selected'] = '删除选取的项目';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = '您收到了新的短信息.\\n要打开新窗口阅读吗?';

$txt['previous_next_back'] = '&laquo; 上一篇主题';
$txt['previous_next_forward'] = '下一篇主题 &raquo;';

$txt['movetopic_auto_board'] = '[版块]';
$txt['movetopic_auto_topic'] = '[主题链接]';
$txt['movetopic_default'] = '此篇主题已经被移动到 ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = '折叠或展开.';

$txt['mark_unread'] = '标记未读';

$txt['ssi_not_direct'] = '请不要直接读写 SSI.php; 您可以用路径 (%s) 或加入 ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php 未能装载一个session！这可能会使得用户注销（退出）和其它一些功能出现问题——请检查确认 SSI.php 包含语句在你的脚本中的任何代码之前！';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = '预览帖子';
$txt['preview_fetch'] = '准备预览……';
$txt['preview_new'] = '新站内短信';
$txt['error_while_submitting'] = '发送站内短信时发生以下错误：';
$txt['error_old_topic'] = '警告: 该贴已经至少 %d 天没有更改。<br />除非你一定要回复，否则也许考虑发一个新贴会更好。';

$txt['split_selected_posts'] = '已选帖子';
$txt['split_selected_posts_desc'] = '分离帖子将产生一个新主题';
$txt['split_reset_selection'] = '重新选择';

$txt['modify_cancel'] = '取消';
$txt['mark_read_short'] = '标记已读';

$txt['pm_short'] = '我的消息';
$txt['pm_menu_read'] = '阅读短信';
$txt['pm_menu_send'] = '发送短信';

$txt['hello_member_ndt'] = '您好';

$txt['unapproved_posts'] = '未审核帖子 (主题: %d, 帖子: %d)';

$txt['ajax_in_progress'] = '加载中...';

$txt['mod_reports_waiting'] = '当前有 %1$d 个版主报告打开。';

$txt['view_unread_category'] = '未读帖子';
$txt['verification'] = '验证码';
$txt['visual_verification_description'] = '请输入上面图片上的文字';
$txt['visual_verification_sound'] = '收听图片上的字母';
$txt['visual_verification_request_new'] = '换一个验证码';

// Sub menu labels
$txt['summary'] = '常规信息';
$txt['account'] = '帐号相关设定';
$txt['forumprofile'] = '论坛相关设定';

$txt['modSettings_title'] = '功能及选项';
$txt['package'] = '插件程序';
$txt['errlog'] = '错误日志';
$txt['edit_permissions'] = '权限';
$txt['mc_unapproved_attachments'] = '未审核附件';
$txt['mc_unapproved_poststopics'] = '未审核主题和帖子';
$txt['mc_reported_posts'] = '被举报帖子';
$txt['modlog_view'] = '管理日志';
$txt['calendar_menu'] = '查看日历';

//!!! Send email strings - should move?
$txt['send_email'] = '发送Email';
$txt['send_email_disclosed'] = '注意这个收件人将可以看到。';
$txt['send_email_subject'] = 'Email主题';

$txt['ignoring_user'] = '你正忽略该用户。';
$txt['show_ignore_user_post'] = '显示帖子。';

$txt['spider'] = '蜘蛛';
$txt['spiders'] = '蜘蛛';
$txt['openid'] = 'ID号';

$txt['downloads'] = '下载';
$txt['filesize'] = '文件大小';
$txt['subscribe_webslice'] = '订阅到 Webslice';

// Restore topic
$txt['restore_topic'] = '恢复主题';
$txt['restore_message'] = '恢复信息';
$txt['quick_mod_restore'] = '恢复选择';

// Editor prompt.
$txt['prompt_text_email'] = '请输入Email地址。';
$txt['prompt_text_ftp'] = '请输入 ftp 地址。';
$txt['prompt_text_url'] = '请输入希望连接的 URL 地址。';
$txt['prompt_text_img'] = '请输入图片地址';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = '删除项目';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = '模板: ';
$txt['debug_subtemplates'] = '子模板: ';
$txt['debug_language_files'] = '语言文件: ';
$txt['debug_stylesheets'] = '样式表: ';
$txt['debug_files_included'] = '文件包括: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = '显示';
$txt['debug_cache_hits'] = '缓存命中: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s 字节';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss for %2$s 字节';
$txt['debug_queries_used'] = '查询使用: %1$d.';
$txt['debug_queries_used_and_warnings'] = '查询使用: %1$d, %2$d 警告.';
$txt['debug_query_in_line'] = '在 <em>%1$s</em> 行 <em>%2$s</em>, ';
$txt['debug_query_which_took'] = '使用了 %1$s 秒.';
$txt['debug_query_which_took_at'] = '使用了 %1$s 秒在 %2$s 的请求里.';
$txt['debug_show_queries'] = '[显示查询]';
$txt['debug_hide_queries'] = '[隐藏查询]';

?>