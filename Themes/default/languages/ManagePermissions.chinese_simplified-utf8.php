<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = '管理权限';
$txt['permissions_modify'] = '修改';
$txt['permissions_view'] = '检视';
$txt['permissions_allowed'] = '允许 ';
$txt['permissions_denied'] = '禁用';
$txt['permission_cannot_edit'] = '<strong>注意:</strong> 您不能编辑这项权限档, 因为它是论坛内建的。如果您想变更这项权限档, 您必须先复制它。您可以<a href="%1$s">点击这里复制</a>。';

$txt['permissions_for_profile'] = '设定权限档';
$txt['permissions_boards_desc'] = '下面显示广告牌所使用的权限档。您可以点击广告牌名称或页面下方的&quot;编辑全部&quot;来指定广告牌的权限档。如果要编辑权限档的内容, 请点击权限档名称。';
$txt['permissions_board_all'] = '编辑全部';
$txt['permission_profile'] = '权限档';
$txt['permission_profile_desc'] = '广告牌使用的<a href="%1$s">权限集合</a>。';
$txt['permission_profile_inherit'] = '继承母广告牌';

$txt['permissions_profile'] = '档案';
$txt['permissions_profiles_desc'] = '权限档被指定使用在个别广告牌, 方便您管理安全的设定。这里您可以建立、编辑和删除权限档。';
$txt['permissions_profiles_change_for_board'] = '编辑权限档: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = '标准设定';
$txt['permissions_profile_no_polls'] = '不能投票';
$txt['permissions_profile_reply_only'] = '只能回复';
$txt['permissions_profile_read_only'] = '只能阅读';

$txt['permissions_profile_rename'] = '重新命名';
$txt['permissions_profile_edit'] = '编辑权限档';
$txt['permissions_profile_new'] = '新权限檔';
$txt['permissions_profile_new_create'] = '建立';
$txt['permissions_profile_name'] = '权限档名称';
$txt['permissions_profile_used_by'] = '使用于';
$txt['permissions_profile_used_by_one'] = '1 个广告牌';
$txt['permissions_profile_used_by_many'] = '%1$d 个广告牌';
$txt['permissions_profile_used_by_none'] = '0 个广告牌';
$txt['permissions_profile_do_edit'] = '编辑';
$txt['permissions_profile_do_delete'] = '删除';
$txt['permissions_profile_copy_from'] = '权限复制自';

$txt['permissions_includes_inherited'] = '继承的群组';

$txt['permissions_all'] = '全部';
$txt['permissions_none'] = '无';
$txt['permissions_set_permissions'] = '设定权限';

$txt['permissions_advanced_options'] = '进阶选项';
$txt['permissions_with_selection'] = '选择';
$txt['permissions_apply_pre_defined'] = '套件内建的权限集合';
$txt['permissions_select_pre_defined'] = '选择内建档案';
$txt['permissions_copy_from_board'] = '复制这个广告牌的权限';
$txt['permissions_select_board'] = '选择广告牌';
$txt['permissions_like_group'] = '设定权限像这个群组';
$txt['permissions_select_membergroup'] = '选择群组';
$txt['permissions_add'] = '增加权限';
$txt['permissions_remove'] = '清除权限';
$txt['permissions_deny'] = '禁用权限';
$txt['permissions_select_permission'] = '选择权限';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = '您只能选择一个方法来修改权限';
$txt['permissions_no_action'] = '没有选择任何动作';
$txt['permissions_deny_dangerous'] = '您即将禁用一个以上的权限。\\n如果您还不确定不是\\"偶然地\\"禁用权限, 这可能很危险而且会引起意外的结果。\\n\\n您确定是否要继续？';

$txt['permissions_modify_group'] = '修改群组';
$txt['permissions_general'] = '一般权限';
$txt['permissions_board'] = '标准广告牌权限';
$txt['permissions_board_desc'] = '<strong>注意</strong>: 这里的权限设定会影响到使用&quot;标准设定&quot;权限档的广告牌。如果广告牌不是使用&quot;标准设定&quot; 权限档, 将不会受到影响。';
$txt['permissions_commit'] = '储存变更';
$txt['permissions_on'] = '群组的权限设定。权限档: ';
$txt['permissions_local_for'] = '';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = '每个权限中您都可以选择: \'允许 \' (A), \'拒绝\' (X), 或是 <span style="color: red;">\'禁用\' (D)</span>。<br /><br />请注意, 群组的任何成员都无法使用禁用的功能, 即使成员在其它群组里允许使用那个功能。<br />因此, 请您只有在<strong>必要</strong>的时候设定禁用。换句话说, 禁用的优先权高于允许, 拒绝的优先权低于允许。';
$txt['permissions_change_view'] = '切换检视';
$txt['permissions_view_simple'] = '简易';
$txt['permissions_view_classic'] = '传统';

$txt['permissiongroup_general'] = '一般设定';
$txt['permissionname_view_stats'] = '检视论坛统计资料';
$txt['permissionhelp_view_stats'] = '论坛的统计数据汇整论坛的数据, 像是会员总数, 每天的文章数及前十名的统计资料。启用这项功能会在论坛首页下方加入 \'[详细统计资料]\'。';
$txt['permissionname_view_mlist'] = '检视会员名单和群组';
$txt['permissionhelp_view_mlist'] = '会员名单显示论坛所有注册的会员。这个名单可以排序和搜寻。首页和统计资料页会有会员名单的连结。它也应用在群组页面的名单。';
$txt['permissionname_who_view'] = '检视线上名单';
$txt['permissionhelp_who_view'] = '在线名单显示目前在线的会员和状态。如果您在\'功能和选项\'启用这个功能, 这项权限将会作用。如果会员没有这项权限，还是能看到谁在在线，但是看不到状态。';
$txt['permissionname_search_posts'] = '搜寻文章';
$txt['permissionhelp_search_posts'] = '搜寻权限允许会员使用搜寻功能。如果有这项权限, 搜寻按钮将会出现在首页。';
$txt['permissionname_karma_edit'] = '变更其它人的评价';
$txt['permissionhelp_karma_edit'] = '评价功能让您了解会员的欢迎度. 使用这项权限您必须同时也允许了评价 (在功能及选项里). 这项权限允许会员增加其它会员的评价值, 除了访客以外..';

$txt['permissiongroup_pm'] = '简讯设定';
$txt['permissionname_pm_read'] = '阅读简讯';
$txt['permissionhelp_pm_read'] = '这项权限允许会员进入简讯页面和阅读简讯。会员没有这项权限会员, 将无法传送简讯。';
$txt['permissionname_pm_send'] = '传送简讯';
$txt['permissionhelp_pm_send'] = '传送简讯给其它会员。必须同时有\'阅读简讯\'权限。';

$txt['permissiongroup_calendar'] = '日历设定';
$txt['permissionname_calendar_view'] = '检视日历';
$txt['permissionhelp_calendar_view'] = '日历显示每个月的生日、活动和节日。这项权限允许会员检视日历。如果有这项权限, 论坛选单里会有日历按钮, 论坛首页最下方会显示最新的活动、生日和节日。请先在\'功能及选项\'里启用日历功能。';
$txt['permissionname_calendar_post'] = '建立活动';
$txt['permissionhelp_calendar_post'] = '活动是连结特定日期的文章。您可以在日历建立活动。只有可以发表文章的会员才可以建立活动。';
$txt['permissionname_calendar_edit'] = '编辑活动';
$txt['permissionhelp_calendar_edit'] = '活动是连结特定日期的文章。点击活动名称旁的红色 (*) 可以编辑它。如果会员要编辑活动他必须是建立活动主题的人。';
$txt['permissionname_calendar_edit_own'] = '自己的活动';
$txt['permissionname_calendar_edit_any'] = '任何活动';

$txt['permissiongroup_maintenance'] = '论坛管理';
$txt['permissionname_admin_forum'] = '管理论坛及数据库';
$txt['permissionhelp_admin_forum'] = '这项权限允许会员:<ul class="normallist"><li>变更论坛, 数据库和布景设定</li><li>管理套件</li><li>使用数据库和论坛的维护工具</li><li>检视错误和管理纪录</li></ul> 请小心注意这项权限, 它非常强大。';
$txt['permissionname_manage_boards'] = '管理广告牌和类别';
$txt['permissionhelp_manage_boards'] = '这项权限允许新增, 修改和删除版面及类别';
$txt['permissionname_manage_attachments'] = '管理附加档案及头像';
$txt['permissionhelp_manage_attachments'] = '这项权限允许会员进入附件中心。里面列出所有的论坛附件和头像, 而且可以删除它。';
$txt['permissionname_manage_smileys'] = '管理表情符号和文章图标';
$txt['permissionhelp_manage_smileys'] = '这项权限允许会员进入表情符号中心。在表情符号中心可以新增, 编辑, 和移除表情图案和表情图案集。如果您有启用自订的文章图示, 这项权限也允许您新增和编辑文章图示。';
$txt['permissionname_edit_news'] = '编辑最新消息';
$txt['permissionhelp_edit_news'] = '最新消息功能会在论坛首页显示轮播的最新消息。如果要启用这项功能, 请在论坛设定启用。';
$txt['permissionname_access_mod_center'] = '进入板务中心';
$txt['permissionhelp_access_mod_center'] = '有这项权限的会员可以进入板务中心, 进而方便监督。请注意，这项权限本身没有任何管理权限。';

$txt['permissiongroup_member_admin'] = '会员管理';
$txt['permissionname_moderate_forum'] = '管理论坛的会员';
$txt['permissionhelp_moderate_forum'] = '这项权限包含重要的会员管理功能: <ul class="normallist"><li>进入注册管理</li><li>检视/删除会员数据</li><li>详细的个人数据, 包含追踪IP/会员和(隐藏)的在线状态</li><li>启用账号</li><li>取得审核通知和审核账号</li><li>传送简讯</li><li>还有其它的功能</li></ul>';
$txt['permissionname_manage_membergroups'] = '群组管理';
$txt['permissionhelp_manage_membergroups'] = '这项权限允许会员编辑群组, 和指定会员加入群组。';
$txt['permissionname_manage_permissions'] = '权限管理';
$txt['permissionhelp_manage_permissions'] = '这项权限允许会员编辑群组, 广告牌及特定广告牌的权限。';
$txt['permissionname_manage_bans'] = '黑名单管理';
$txt['permissionhelp_manage_bans'] = '这项权限允许会员编辑黑名单的会员账号, IP地址, 主机名称和 Email。它也允许会员检视和移除黑名单会员的登入记录。';
$txt['permissionname_send_mail'] = '传送论坛 Email 给会员';
$txt['permissionhelp_send_mail'] = '传送 Email 或简讯给全部会员或某个群组。(传简讯需要\'传送简讯\'权限)';
$txt['permissionname_issue_warning'] = '向会员发出预警';
$txt['permissionhelp_issue_warning'] = '向会员发出预警和变更会员的预警等级。必须先启用预警系统。';

$txt['permissiongroup_profile'] = '会员资料';
$txt['permissionname_profile_view'] = '显示个人数据的统计及简介';
$txt['permissionhelp_profile_view'] = '这项权限允许会员检视其它会员的个人数据, 统计数据和文章等等。';
$txt['permissionname_profile_view_own'] = '自己的';
$txt['permissionname_profile_view_any'] = '别人的';
$txt['permissionname_profile_identity'] = '编辑账号设定';
$txt['permissionhelp_profile_identity'] = '账号设定包括基本的设定, 像是密码, Email, 群组和语系设定。';
$txt['permissionname_profile_identity_own'] = '自己的';
$txt['permissionname_profile_identity_any'] = '别人的';
$txt['permissionname_profile_extra'] = '编辑附加的个人数据';
$txt['permissionhelp_profile_extra'] = '附加的个人资料包含头像, 布景, 通知和简讯设定。';
$txt['permissionname_profile_extra_own'] = '自己的';
$txt['permissionname_profile_extra_any'] = '别人的';
$txt['permissionname_profile_title'] = '编辑自订头衔';
$txt['permissionhelp_profile_title'] = '自订头衔显示在文章的作者区块中。';
$txt['permissionname_profile_title_own'] = '自己的';
$txt['permissionname_profile_title_any'] = '别人的';
$txt['permissionname_profile_remove'] = '删除账号';
$txt['permissionhelp_profile_remove'] = '这项权限允许会员删除账号。';
$txt['permissionname_profile_remove_own'] = '自己的';
$txt['permissionname_profile_remove_any'] = '别人的';
$txt['permissionname_profile_server_avatar'] = '选择主机的头像';
$txt['permissionhelp_profile_server_avatar'] = '这项功能可以让会员选择主机的头像。';
$txt['permissionname_profile_upload_avatar'] = '上传头像到主机';
$txt['permissionhelp_profile_upload_avatar'] = '这项功能可以让会员上传头像到主机。';
$txt['permissionname_profile_remote_avatar'] = '选择远方主机上的图像';
$txt['permissionhelp_profile_remote_avatar'] = '您可以允许会员使用远方主机里的图案，但是有可能会使您的论坛变慢。';

$txt['permissiongroup_general_board'] = '一般设定';
$txt['permissionname_moderate_board'] = '管理广告牌';
$txt['permissionhelp_moderate_board'] = '管理广告牌权限增加其它一些小的权限让板主变成真正的板主。小的权限包含回复封锁的文章, 变更投票截止时间和检视投票结果。';

$txt['permissiongroup_topic'] = '主题设定';
$txt['permissionname_post_new'] = '发表文章';
$txt['permissionhelp_post_new'] = '这项权限允许会员发表文章。但是它不允许回复文章。';
$txt['permissionname_merge_any'] = '合并主题';
$txt['permissionhelp_merge_any'] = '合并两个或以上的主题, 文章是以发表的时间排序。会员只能合并有这项权限的广告牌文章。如果要一次合并多个主题, 必须在个人数据设定启用快速管理功能。';
$txt['permissionname_split_any'] = '分拆主题';
$txt['permissionhelp_split_any'] = '把一篇主题分拆为两篇。';
$txt['permissionname_send_topic'] = '转寄主题给朋友';
$txt['permissionhelp_send_topic'] = '这项权限允许会员使用 Email 转寄主题给朋友。';
$txt['permissionname_make_sticky'] = '顶置主题';
$txt['permissionhelp_make_sticky'] = '顶置主题会保持在广告牌的最上面。通常是公告和重要的文章需要顶置。';
$txt['permissionname_move'] = '移动主题';
$txt['permissionhelp_move'] = '移动文章到其它广告牌。会员只能移动文章到允许进入的广告牌。';
$txt['permissionname_move_own'] = '自己的';
$txt['permissionname_move_any'] = '别人的';
$txt['permissionname_lock'] = '封锁主题';
$txt['permissionhelp_lock'] = '这项权限允许会员封锁主题。封锁是确定这篇主题无法回复, 只有会员有\'管理广告牌\'权限才能回复。';
$txt['permissionname_lock_own'] = '自己的';
$txt['permissionname_lock_any'] = '别人的';
$txt['permissionname_remove'] = '删除主题';
$txt['permissionhelp_remove'] = '删除主题。请注意这项权限不允许删除文章回复！';
$txt['permissionname_remove_own'] = '自己的';
$txt['permissionname_remove_any'] = '别人的';
$txt['permissionname_post_reply'] = '回复文章';
$txt['permissionhelp_post_reply'] = '这项权限允许回复文章。';
$txt['permissionname_post_reply_own'] = '自己的';
$txt['permissionname_post_reply_any'] = '别人的';
$txt['permissionname_modify_replies'] = '编辑自己主题里的文章回复';
$txt['permissionhelp_modify_replies'] = '这项权限允许会员编辑自己主题里的文章回复。';
$txt['permissionname_delete_replies'] = '删除自己主题里的回复文章';
$txt['permissionhelp_delete_replies'] = '这项权限允许会员删除自己主题里的文章回复。';
$txt['permissionname_announce_topic'] = '公告文';
$txt['permissionhelp_announce_topic'] = '这项权限允许会员传送公告 Email 给全部会员或某些群组。';

$txt['permissiongroup_post'] = '文章设定';
$txt['permissionname_delete'] = '删除文章';
$txt['permissionhelp_delete'] = '删除文章。这项权限不允许会员删除主题的第一篇文章。';
$txt['permissionname_delete_own'] = '自己的';
$txt['permissionname_delete_any'] = '别人的';
$txt['permissionname_modify'] = '修改文章';
$txt['permissionhelp_modify'] = '编辑文章';
$txt['permissionname_modify_own'] = '自己的';
$txt['permissionname_modify_any'] = '别人的';
$txt['permissionname_report_any'] = '检举文章';
$txt['permissionhelp_report_any'] = '这项权限会在每篇文章加上检举连结, 让会员可以向板主检举文章, 板主会收到 Email 检举信包含文章连结和检举理由。';

$txt['permissiongroup_poll'] = '投票设定';
$txt['permissionname_poll_view'] = '检视投票';
$txt['permissionhelp_poll_view'] = '这项权限允许会员检视投票。没有这项权限, 会员只能看到文章内容。';
$txt['permissionname_poll_vote'] = '参与投票';
$txt['permissionhelp_poll_vote'] = '这项权限允许(注册)会员投票。访客无法投票。';
$txt['permissionname_poll_post'] = '发布投票';
$txt['permissionhelp_poll_post'] = '这项权限允许会员发表文章并举办投票。会员必须也具备\'发表文章\'的权限。';
$txt['permissionname_poll_add'] = '举办投票';
$txt['permissionhelp_poll_add'] = '举办投票允许会员在已经存在的文章举办投票。这项权限还需要编辑主题第一篇文章的权限。';
$txt['permissionname_poll_add_own'] = '自己的';
$txt['permissionname_poll_add_any'] = '所有的';
$txt['permissionname_poll_edit'] = '编辑投票';
$txt['permissionhelp_poll_edit'] = '这项权限允许会员编辑投票项目和重设票数。为了编辑投票数和截止时间, 会员必须有\'管理广告牌\'权限。';
$txt['permissionname_poll_edit_own'] = '自己的';
$txt['permissionname_poll_edit_any'] = '所有的';
$txt['permissionname_poll_lock'] = '封锁投票';
$txt['permissionhelp_poll_lock'] = '封锁投票防止会员继续投票。';
$txt['permissionname_poll_lock_own'] = '自己的';
$txt['permissionname_poll_lock_any'] = '所有的';
$txt['permissionname_poll_remove'] = '移除投票';
$txt['permissionhelp_poll_remove'] = '这项权限允许移除投票。';
$txt['permissionname_poll_remove_own'] = '自己的';
$txt['permissionname_poll_remove_any'] = '所有的';

$txt['permissiongroup_approval'] = '发表管理';
$txt['permissionname_approve_posts'] = '审核文章';
$txt['permissionhelp_approve_posts'] = '这项权限允许会员审核广告牌的文章。';
$txt['permissionname_post_unapproved_replies'] = '回复文章, 但未审核前是隐藏的';
$txt['permissionhelp_post_unapproved_replies'] = '这项权限允许会员回复文章。但是直到板主审核前, 文章是隐藏的。';
$txt['permissionname_post_unapproved_replies_own'] = '自己的';
$txt['permissionname_post_unapproved_replies_any'] = '所有的';
$txt['permissionname_post_unapproved_topics'] = '发表文章, 但未审核前是隐藏的';
$txt['permissionhelp_post_unapproved_topics'] = '这项权限允许会员发表文章。但是直到板主审核前, 文章是隐藏的。';
$txt['permissionname_post_unapproved_attachments'] = '上传附件, 但未审核前是隐藏的';
$txt['permissionhelp_post_unapproved_attachments'] = '这项权限允许会员上传附件。但是直到板主审核前, 文章是隐藏的。';

$txt['permissiongroup_notification'] = '通知设定';
$txt['permissionname_mark_any_notify'] = '文章通知';
$txt['permissionhelp_mark_any_notify'] = '这项功能会通知会员订阅的文章有新回复。';
$txt['permissionname_mark_notify'] = '广告牌通知';
$txt['permissionhelp_mark_notify'] = '这项功能会通知会员订阅的广告牌有新主题。';

$txt['permissiongroup_attachment'] = '附件设定';
$txt['permissionname_view_attachments'] = '检视附件';
$txt['permissionhelp_view_attachments'] = '附件是附加在文章里的档案。这项功能可在\'编辑功能和选项\'中启用和设定。如果没有这项权限的会员无法下载附件。';
$txt['permissionname_post_attachment'] = '上传附件';
$txt['permissionhelp_post_attachment'] = '附件是附加在文章里的档案。一篇文章里可以有多个附件。';

$txt['permissiongroup_simple_view_basic_info'] = '使用基本的论坛功能';
$txt['permissiongroup_simple_use_pm_system'] = '使用简讯系统联络会员';
$txt['permissiongroup_simple_post_calendar'] = '在月历建立活动';
$txt['permissiongroup_simple_edit_profile'] = '个人化会员资料';
$txt['permissiongroup_simple_delete_account'] = '删除账号';
$txt['permissiongroup_simple_use_avatar'] = '选择或上传头像';
$txt['permissiongroup_simple_moderate_general'] = '管理整个论坛';
$txt['permissiongroup_simple_administrate'] = '实行管理员的职务';

$txt['permissionname_simple_calendar_edit_own'] = '编辑自己的活动';
$txt['permissionname_simple_calendar_edit_any'] = '编辑别人的活动';
$txt['permissionname_simple_profile_view_own'] = '检视自己的个人资料';
$txt['permissionname_simple_profile_view_any'] = '检视别人的个人资料';
$txt['permissionname_simple_profile_identity_own'] = '编辑自己的账号设定';
$txt['permissionname_simple_profile_identity_any'] = '编辑别人的账号设定';
$txt['permissionname_simple_profile_extra_own'] = '编辑自己的进阶个人选项';
$txt['permissionname_simple_profile_extra_any'] = '编辑别人的进阶个人选项';
$txt['permissionname_simple_profile_title_own'] = '编辑自己的自订头衔';
$txt['permissionname_simple_profile_title_any'] = '编辑别人的自订头衔';
$txt['permissionname_simple_profile_remove_own'] = '删除自己的账号';
$txt['permissionname_simple_profile_remove_any'] = '删除别人的账号';

$txt['permissiongroup_simple_make_unapproved_posts'] = '发表和回复文章<span style="text-decoration: underline">必须</span>审核';
$txt['permissiongroup_simple_make_posts'] = '发表和回复文章';
$txt['permissiongroup_simple_post_polls'] = '产生新的投票';
$txt['permissiongroup_simple_participate'] = '检视进阶的广告牌内容';
$txt['permissiongroup_simple_modify'] = '修改文章';
$txt['permissiongroup_simple_notification'] = '订阅通知';
$txt['permissiongroup_simple_attach'] = '文章附件';
$txt['permissiongroup_simple_moderate'] = '管理广告牌';

$txt['permissionname_simple_post_unapproved_replies_own'] = '回复自己的主题 - 需要审核';
$txt['permissionname_simple_post_unapproved_replies_any'] = '回复别人的主题 - 需要审核';
$txt['permissionname_simple_post_reply_own'] = '回复自己的主题';
$txt['permissionname_simple_post_reply_any'] = '回复别人的主题';
$txt['permissionname_simple_move_own'] = '移动自己的主题';
$txt['permissionname_simple_move_any'] = '移动别人的主题';
$txt['permissionname_simple_lock_own'] = '封锁自己的主题';
$txt['permissionname_simple_lock_any'] = '封锁别人的主题';
$txt['permissionname_simple_remove_own'] = '移除自己的主题';
$txt['permissionname_simple_remove_any'] = '移除别人的主题';
$txt['permissionname_simple_delete_own'] = '删除自己的文章';
$txt['permissionname_simple_delete_any'] = '删除别人的文章';
$txt['permissionname_simple_modify_own'] = '修改自己的文章';
$txt['permissionname_simple_modify_any'] = '修改别人的文章';
$txt['permissionname_simple_poll_add_own'] = '在自己的主题举办投票';
$txt['permissionname_simple_poll_add_any'] = '在别人的主题举办投票';
$txt['permissionname_simple_poll_edit_own'] = '编辑自己举办的投票';
$txt['permissionname_simple_poll_edit_any'] = '编辑别人举办的投票';
$txt['permissionname_simple_poll_lock_own'] = '封锁自己举办的投票';
$txt['permissionname_simple_poll_lock_any'] = '封锁别人举办的投票';
$txt['permissionname_simple_poll_remove_own'] = '移除自己举办的投票';
$txt['permissionname_simple_poll_remove_any'] = '移除别人举办的投票';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = '权限设定';
$txt['groups_manage_permissions'] = '可以管理权限的群组';
$txt['permission_settings_submit'] = '储存';
$txt['permission_settings_enable_deny'] = '启用选单的禁用权限';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = '关闭这个选项会把 \\\'停用\\\' 权限改为 \\\'拒绝\\\'。';
$txt['permission_by_board_desc'] = '这里您可以设定广告牌使用的权限档。点击选单&quot;编辑权限档&quot;, 您可以建立新的权限档。';
$txt['permission_settings_desc'] = '这里您可以设定谁能够变更权限。';
$txt['permission_settings_enable_postgroups'] = '启用文章群组的权限';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = '停用这项设定会移除目前设定文章群组的权限。';

$txt['permissions_post_moderation_desc'] = '在这个页面您可以容易地变更群组文章管理的权限档。';
$txt['permissions_post_moderation_deny_note'] = '请注意当您启用进阶权限, 您不能从这个页面套用&quot;禁用&quot;权限。如果您想套用一个禁用权限, 请直接编辑权限。';
$txt['permissions_post_moderation_select'] = '选择权限档';
$txt['permissions_post_moderation_new_topics'] = '新主题';
$txt['permissions_post_moderation_replies_own'] = '自己的回复';
$txt['permissions_post_moderation_replies_any'] = '别人的回复';
$txt['permissions_post_moderation_attachments'] = '附件';
$txt['permissions_post_moderation_legend'] = 'Legend';
$txt['permissions_post_moderation_allow'] = '可以建立';
$txt['permissions_post_moderation_moderate'] = '可以建立但需要审核';
$txt['permissions_post_moderation_disallow'] = '不能建立';
$txt['permissions_post_moderation_group'] = '群组';

$txt['auto_approve_topics'] = '发表文章, 不需要审核';
$txt['auto_approve_replies'] = '回复文章, 不需要审核';
$txt['auto_approve_attachments'] = '上传附件, 不需要审核';

?>