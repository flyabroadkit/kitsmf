<?php
// Version: 2.0; ModerationCenter

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['moderation_center'] = '板务中心';
$txt['mc_main'] = '主页';
$txt['mc_posts'] = '文章';
$txt['mc_groups'] = '群组';

$txt['mc_view_groups'] = '检视群组';

$txt['mc_description'] = '这是您的&quot;板务中心&quot;。在这里您可以执行管理员指派给您的管理动作。这个主页显示论坛最新的情况。您可以<a href="' . $scripturl . '?action=moderate;sa=personalize">点这里</a>个人化这个外观。';
$txt['mc_group_requests'] = '群组加入请求';
$txt['mc_unapproved_posts'] = '未审核的文章';
$txt['mc_watched_users'] = '近期观察对象';
$txt['mc_watched_topics'] = '观察文章';
$txt['mc_scratch_board'] = 'Moderator Scratch Board';
$txt['mc_latest_news'] = 'Simple Machines 近期新闻';
$txt['mc_recent_reports'] = '近期文章检举';
$txt['mc_warnings'] = '预警系统';
$txt['mc_notes'] = '板主批注';

$txt['mc_cannot_connect_sm'] = '无法取得 simplemachines.org 的最新消息。';

$txt['mc_recent_reports_none'] = '目前没有未处理的检举';
$txt['mc_watched_users_none'] = '目前没有观察对象';
$txt['mc_group_requests_none'] = '没有加入群组的请求';

$txt['mc_seen'] = '上次登入';
$txt['mc_seen_never'] = '%1$s never seen';
$txt['mc_groupr_by'] = 'by';

$txt['mc_reported_posts_desc'] = '这里您可以检视会员检举的文章。';
$txt['mc_reportedp_active'] = '开启中的检举记录';
$txt['mc_reportedp_closed'] = '已关闭的检举记录';
$txt['mc_reportedp_by'] = 'by';
$txt['mc_reportedp_reported_by'] = '检举人';
$txt['mc_reportedp_last_reported'] = '时间';
$txt['mc_reportedp_none_found'] = '没有任何检举';

$txt['mc_reportedp_details'] = '详细';
$txt['mc_reportedp_close'] = '关闭';
$txt['mc_reportedp_open'] = '开启';
$txt['mc_reportedp_ignore'] = '忽视';
$txt['mc_reportedp_unignore'] = '正视';
// Do not use numeric entries in the below string.
$txt['mc_reportedp_ignore_confirm'] = 'Are you sure you wish to ignore further reports about this message?\\n\\nThis will turn off further reports for all moderators of the forum.';
$txt['mc_reportedp_close_selected'] = '关闭选择';

$txt['mc_groupr_group'] = '群组';
$txt['mc_groupr_member'] = '会员';
$txt['mc_groupr_reason'] = '理由';
$txt['mc_groupr_none_found'] = '目前没有加入会员群组的请求。';
$txt['mc_groupr_submit'] = '送出';
$txt['mc_groupr_reason_desc'] = '拒绝 %1$s 加入 &quot;%2$s&quot; 的理由';
$txt['mc_groups_reason_title'] = '拒绝理由';
$txt['with_selected'] = '选择';
$txt['mc_groupr_approve'] = '同意请求';
$txt['mc_groupr_reject'] = '拒绝 (无理由)';
$txt['mc_groupr_reject_w_reason'] = '拒绝并附带理由';
// Do not use numeric entries in the below string.
$txt['mc_groupr_warning'] = '您确定要执行这个动作吗？';

$txt['mc_unapproved_attachments_none_found'] = '没有未审核的附件。';
$txt['mc_unapproved_replies_none_found'] = '没有未审核的回复。';
$txt['mc_unapproved_topics_none_found'] = '没有未审核的主题。';
$txt['mc_unapproved_posts_desc'] = '您可以在这里审核或删除任何等待处理的文章。';
$txt['mc_unapproved_replies'] = '回复';
$txt['mc_unapproved_topics'] = '主题';
$txt['mc_unapproved_by'] = 'by';
$txt['mc_unapproved_sure'] = '您确定要这么做吗？';
$txt['mc_unapproved_attach_name'] = '附件名称';
$txt['mc_unapproved_attach_size'] = '档案大小';
$txt['mc_unapproved_attach_poster'] = '作者';
$txt['mc_viewmodreport'] = '板务报告 for %1$s by %2$s' . "\n";
$txt['mc_modreport_summary'] = '这篇文章被检举 %1$d 次。最后一次是 %2$s。';
$txt['mc_modreport_whoreported_title'] = '检举这些文章的会员';
$txt['mc_modreport_whoreported_data'] = '检举人 %1$s 在 %2$s 留下讯息: ';
$txt['mc_modreport_modactions'] = '其它板主的处理';
$txt['mc_modreport_mod_comments'] = '板主回应';
$txt['mc_modreport_no_mod_comment'] = '目前没有任何板主回应';
$txt['mc_modreport_add_mod_comment'] = '增加回应';

$txt['show_notice'] = '简讯通知';
$txt['show_notice_subject'] = '标题';
$txt['show_notice_text'] = '内容';

$txt['mc_watched_users_title'] = '观察对象';
$txt['mc_watched_users_desc'] = '您可以在这里追踪所有 &quot;观察&quot; 会员。';
$txt['mc_watched_users_post'] = '以文章检视';
$txt['mc_watched_users_warning'] = '预警等级';
$txt['mc_watched_users_last_login'] = '上次登入';
$txt['mc_watched_users_last_post'] = '最新文章';
$txt['mc_watched_users_no_posts'] = '观察对象没有任何文章。';
// Don't use entities in the two strings below.
$txt['mc_watched_users_delete_post'] = '您确定要删除这篇文章吗?';
$txt['mc_watched_users_delete_posts'] = '您确定要删除这些文章吗?';
$txt['mc_watched_users_posted'] = '于';
$txt['mc_watched_users_member'] = '以会员检视';

$txt['mc_warnings_description'] = '在这个页面您可以看到发给会员的预警。您也可以增加和修改会员的预警通知的样版。';
$txt['mc_warning_log'] = '预警记录';
$txt['mc_warning_templates'] = '自订样版';
$txt['mc_warning_log_title'] = '检视预警记录';
$txt['mc_warning_templates_title'] = '自订预警样版';

$txt['mc_warnings_none'] = '还没有发出任何预警！';
$txt['mc_warnings_recipient'] = '对象';

$txt['mc_warning_templates_none'] = '没有建立任何预警样版';
$txt['mc_warning_templates_time'] = '建立时间';
$txt['mc_warning_templates_name'] = '样版';
$txt['mc_warning_templates_creator'] = '建立者';
$txt['mc_warning_template_add'] = '增加样版';
$txt['mc_warning_template_modify'] = '编辑样版';
$txt['mc_warning_template_delete'] = '删除选择';
$txt['mc_warning_template_delete_confirm'] = '您确定要删除选择的样版吗？';

$txt['mc_warning_template_desc'] = '这个页面帮助您建立様版。请注意, 样版不会包含 Email 主旨。请注意, 如果以简讯传送通知的话, 可以在様版里使用 BB码。请注意, 如果您在发出与文章无关的预警时, 无法使用 {MESSAGE} 变量。';
$txt['mc_warning_template_title'] = '样版标题';
$txt['mc_warning_template_body_desc'] = '通知讯息的内容。您可以在这个样版使用下面变量。<ul style="margin-top: 0px;"><li>{MEMBER} - 会员名称。</li><li>{MESSAGE} - 连结预警文章。(如果可以)</li><li>{FORUMNAME} - 论坛名称。</li><li>{SCRIPTURL} - 论坛网址。</li><li>{REGARDS} - 标准的 Email 结尾。</li></ul>';
$txt['mc_warning_template_body_default'] = '{MEMBER},' . "\n\n" . '这是站方发出的通知, 因为您可能违反论坛秩序, 请停止不适当的行为, 并遵守论坛的规则, 否则我们将采取进一步的处理.' . "\n\n" . '如果有任何疑虑请传简讯给管理员.' . "\n\n" . '{REGARDS}';
$txt['mc_warning_template_personal'] = '私人样版';
$txt['mc_warning_template_personal_desc'] = '如果勾选这个项目, 这个样版只有您可以编辑和使用。如果不勾选，所有板主都可以使用这个样版';
$txt['mc_warning_template_error_empty'] = '您必须设定标题和预警内容。';

$txt['mc_prefs'] = '偏好设定';
$txt['mc_settings'] = '更改设定';
$txt['mc_prefs_title'] = '板务中心偏好设定';
$txt['mc_prefs_desc'] = '这里让您设定板务管理的相关偏好, 像是 Email 通知。';
$txt['mc_prefs_homepage'] = '板务中心主页显示的项目';
$txt['mc_prefs_latest_news'] = 'Simple Machines 新闻';
$txt['mc_prefs_show_reports'] = '显示开启中的检举在论坛标题';
$txt['mc_prefs_notify_report'] = '检举通知';
$txt['mc_prefs_notify_report_never'] = '不要';
$txt['mc_prefs_notify_report_moderator'] = '只有我管理的广告牌';
$txt['mc_prefs_notify_report_always'] = '总是';
$txt['mc_prefs_notify_approval'] = '等待审核的通知';

// Use entities in the below string.
$txt['mc_click_add_note'] = '新增批注';
$txt['mc_add_note'] = '增加';

?>