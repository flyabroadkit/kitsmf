<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = '站内短信首页';
$txt['send_message'] = '发送短信';
$txt['pm_add'] = 'Add';
$txt['make_bcc'] = 'Add BCC';
$txt['pm_to'] = '收件者';
$txt['pm_bcc'] = '副本';
$txt['inbox'] = '收件箱';
$txt['conversation'] = '会话';
$txt['messages'] = '信息';
$txt['sent_items'] = '已发送';
$txt['new_message'] = '新短信';
$txt['delete_message'] = '删除短信';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = '删除站内短信信箱里的全部短信';
$txt['delete_all_confirm'] = '确定要删除全部的短信吗？';
$txt['recipient'] = '收件者';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = '新站内短信：SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = '您收到 SENDER 在 ' . $context['forum_name'] . ' 论坛发给您的站内短信。\\n\\n注意：这只是通知信件，请不要回复到这个邮件信箱。\\n\\n您收到的短信是：\\n\\nMESSAGE';
$txt['pm_multiple'] = '(多位收件者：\'帐号1, 帐号2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = '在这里回复站内短信：';

$txt['delete_selected_confirm'] = '确定要删除全部选择的站内短信吗？';

$txt['sent_to'] = '发给';
$txt['reply_to_all'] = '回复所有人';
$txt['delete_conversation'] = '删除会话n';

$txt['pm_capacity'] = '容量';
$txt['pm_currently_using'] = '%s 篇短信，最多可容纳%s%% 篇。';
$txt['pm_sent'] = 'Your message has been sent successfully.';

$txt['pm_error_user_not_found'] = '找不到会员 \'%s\'。';
$txt['pm_error_ignored_by_user'] = '会员 \'%s\' 禁止您发的站内短信。';
$txt['pm_error_data_limit_reached'] = '短信无法发给 \'%s\' 因为对方的短信信箱容量已满！';
$txt['pm_error_user_cannot_read'] = '用户 \'%1$s\' 无法接收您的消息.';
$txt['pm_successfully_sent'] = '短信成功发给 \'%s\'.';
$txt['pm_send_report'] = '发传检举信件';
$txt['pm_save_outbox'] = '保存草稿到发件箱';
$txt['pm_undisclosed_recipients'] = '秘密收件人';
$txt['pm_too_many_recipients'] = '您无法一次给超过 %1$d 个人发送消息.';

$txt['pm_read'] = '阅读';
$txt['pm_replied'] = '回复给';

// Message Pruning.
$txt['pm_prune'] = '删除短信';
$txt['pm_prune_desc1'] = '删除超过日期的短信';
$txt['pm_prune_desc2'] = '天。';
$txt['pm_prune_warning'] = '确定要删除您的站内短信吗？';

// Actions Drop Down.
$txt['pm_actions_title'] = '额外动作';
$txt['pm_actions_delete_selected'] = '删除选项';
$txt['pm_actions_filter_by_label'] = '过滤标签';
$txt['pm_actions_go'] = '继续';

// Manage Labels Screen.
$txt['pm_apply'] = '套用';
$txt['pm_manage_labels'] = '管理标签';
$txt['pm_labels_delete'] = '确定要删除选择的标签吗？';
$txt['pm_labels_desc'] = '这里可以让您新增，编辑和删除站内短信的标签。';
$txt['pm_label_add_new'] = '新增标签';
$txt['pm_label_name'] = '标签名称';
$txt['pm_labels_no_exist'] = '您目前没有任何标签！';

// Labeling Drop Down.
$txt['pm_current_label'] = '标签';
$txt['pm_msg_label_title'] = '标签名称';
$txt['pm_msg_label_apply'] = '新增标签';
$txt['pm_msg_label_remove'] = '移除标签';
$txt['pm_msg_label_inbox'] = '收件箱';
$txt['pm_sel_label_title'] = '选择的标签';

// Sidebar Headings.
$txt['pm_labels'] = '标签';
$txt['pm_messages'] = '短信';
$txt['pm_actions'] = 'Actions';
$txt['pm_preferences'] = '偏好设定';

$txt['pm_is_replied_to'] = '您已经回复或转发了这篇短信。';

// Reporting messages.
$txt['pm_report_to_admin'] = '向管理员检举';
$txt['pm_report_title'] = '检举短信';
$txt['pm_report_desc'] = '这里可以让您向管理员检举不当的站内短信。请提供检举的理由，它会连带短信一起发给管理员。';
$txt['pm_report_admins'] = '接收检举信件的管理员';
$txt['pm_report_all_admins'] = '发给全部的管理员';
$txt['pm_report_reason'] = '检举的理由';
$txt['pm_report_message'] = '检举短信';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[检举] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} 检举了下面的站内短信，发件人是 {SENDER}，理由是：';
$txt['pm_report_pm_other_recipients'] = '其它收件人包括：';
$txt['pm_report_pm_hidden'] = '%d 秘密收件人';
$txt['pm_report_pm_unedited_below'] = '下面是被检举的原来短信：';
$txt['pm_report_pm_sent'] = '发给：';

$txt['pm_report_done'] = '谢谢您检举这封短信。管理员也许会就此事与您联络';
$txt['pm_report_return'] = '回到收件箱';

$txt['pm_search_title'] = '搜索站内短信';
$txt['pm_search_bar_title'] = '搜寻短信';
$txt['pm_search_text'] = '搜索';
$txt['pm_search_go'] = '搜索';
$txt['pm_search_advanced'] = '高级搜索';
$txt['pm_search_user'] = '按会员';
$txt['pm_search_match_all'] = '包含完整字词';
$txt['pm_search_match_any'] = '包含任何字词';
$txt['pm_search_options'] = '选项';
$txt['pm_search_post_age'] = '年龄';
$txt['pm_search_show_complete'] = '显示完整短信。';
$txt['pm_search_subject_only'] = '搜索标题和作者。';
$txt['pm_search_between'] = '这段时间之内';
$txt['pm_search_between_and'] = '和';
$txt['pm_search_between_days'] = '天';
$txt['pm_search_order'] = '搜索顺序';
$txt['pm_search_choose_label'] = '选择要搜寻的标签，或搜寻全部';

$txt['pm_search_results'] = '搜寻结果';
$txt['pm_search_none_found'] = '没有结果';

$txt['pm_search_orderby_relevant_first'] = '最相关的结果最先';
$txt['pm_search_orderby_recent_first'] = '最新的结果最先';
$txt['pm_search_orderby_old_first'] = '最旧的结果最先';

$txt['pm_visual_verification_label'] = '验证码';
$txt['pm_visual_verification_desc'] = '请输入上面的验证码来确认发送';

$txt['pm_settings'] = '修改设置';
$txt['pm_change_view'] = '修改浏览';

$txt['pm_manage_rules'] = '规则管理';
$txt['pm_manage_rules_desc'] = '你可以在这里设定标准以便分选消息.下面是你已经设定的规则.点击规则名称开始编辑.';
$txt['pm_rules_none'] = '你还没有设置任何消息规则.';
$txt['pm_rule_title'] = '规则';
$txt['pm_add_rule'] = '添加新规则';
$txt['pm_apply_rules'] = '应用新规则';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = '你确定应用当前规则到所有个人消息吗?';
$txt['pm_edit_rule'] = '编辑规则';
$txt['pm_rule_save'] = '保存规则';
$txt['pm_delete_selected_rule'] = '删除选定的规则';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = '你确定删除选定的规则吗?';
$txt['pm_rule_name'] = '名称';
$txt['pm_rule_name_desc'] = '保存这条规则名为';
$txt['pm_rule_name_default'] = '[名称]';
$txt['pm_rule_description'] = '描述';
$txt['pm_rule_not_defined'] = '为开始建立这条规则添加一些标准.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>注意:</strong> 你已经禁止了Javascript. 我们强烈建议你启用javascript.</span>';
$txt['pm_rule_criteria'] = '标准';
$txt['pm_rule_criteria_add'] = '添加标准';
$txt['pm_rule_criteria_pick'] = '选择标准';
$txt['pm_rule_mid'] = '发送者';
$txt['pm_rule_gid'] = '发送者组别';
$txt['pm_rule_sub'] = '消息主题包含';
$txt['pm_rule_msg'] = '消息主体包含';
$txt['pm_rule_bud'] = '发送者为好友';
$txt['pm_rule_sel_group'] = '选择组';
$txt['pm_rule_logic'] = '在检查标准时';
$txt['pm_rule_logic_and'] = '必须符合所有标准';
$txt['pm_rule_logic_or'] = '能符合任一标准';
$txt['pm_rule_actions'] = '动作';
$txt['pm_rule_sel_action'] = '选择一个动作';
$txt['pm_rule_add_action'] = '添加动作';
$txt['pm_rule_label'] = '分类信息按';
$txt['pm_rule_sel_label'] = '选择标签';
$txt['pm_rule_delete'] = '删除信息';
$txt['pm_rule_no_name'] = '你忘记了输入规则名称.';
$txt['pm_rule_no_criteria'] = '一个规则至少有一个标准和一个动作设定.';
$txt['pm_rule_too_complex'] = '你的规则过长，无法存储。请尽量简化为最短.';

$txt['pm_readable_and'] = '<em>和</em>';
$txt['pm_readable_or'] = '<em>或</em>';
$txt['pm_readable_start'] = '如果 ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = '消息来自 &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = '发送人来自 the &quot;{GROUP}&quot; group';
$txt['pm_readable_subject'] = '消息主题包含 &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = '消息内容包含 &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = '发送人是好友';
$txt['pm_readable_label'] = '应用标签 &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = '删除消息';
$txt['pm_readable_then'] = '<strong>然后</strong>';

?>