<?php
// Version: 2.0; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = '下列主题等待审核: ';
$txt['scheduled_approval_email_msg'] = '下列帖子等待审核: ';
$txt['scheduled_approval_email_attach'] = '下列附件等待审核: ';
$txt['scheduled_approval_email_event'] = '下列事件等待审核: ';

$txt['emails'] = array(
	'resend_activate_message' => array(
		/*
			@additional_params: resend_activate_message
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONCODE: The code needed to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '感谢您在 {FORUMNAME} 完成注册。您的帐号是 {USERNAME}。如果您忘记密码, 您可以点击这个连结( {FORGOTPASSWORDLINK} )重新设定密码。

您登录之前, 必须点击下面连结启用您的帐号:

{ACTIVATIONLINK}

如果上面的连结有问题, 请点击这个连结( {ACTIVATIONLINKWITHOUTCODE} ) 并输入启用码"{ACTIVATIONCODE}"。

{REGARDS}',
	),

	'resend_pending_message' => array(
		/*
			@additional_params: resend_pending_message
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '{REALNAME}, 您在 {FORUMNAME} 的注册请求已经送出。

您的帐号是 {USERNAME}。

您的帐号必须先审核才能开始使用论坛。如果审核通过, 您会收到另一封通知信。

{REGARDS}',
	),
	'mc_group_approve' => array(
		/*
			@additional_params: mc_group_approve
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was accepted into.
			@description: The request to join a particular membergroup has been accepted.
		*/
		'subject' => '同意加入群组',
		'body' => '{USERNAME},

恭喜您成功加入 {FORUMNAME} 的群组 "{GROUPNAME}"。

{REGARDS}',
	),
	'mc_group_reject' => array(
		/*
			@additional_params: mc_group_reject
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
			@description: The request to join a particular membergroup has been rejected.
		*/
		'subject' => '拒绝加入群组',
		'body' => '{USERNAME},

很抱歉, 您被拒绝加入 {FORUMNAME} 的群组 "{GROUPNAME}"。

{REGARDS}',
	),
	'mc_group_reject_reason' => array(
		/*
			@additional_params: mc_group_reject_reason
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
				REASON: Reason for the rejection.
			@description: The request to join a particular membergroup has been rejected with a reason given.
		*/
		'subject' => '拒绝加入群组',
		'body' => '{USERNAME},

很抱歉, 您被拒绝加入 {FORUMNAME} 的群组 "{GROUPNAME}"。

理由: {REASON}

{REGARDS}',
	),
	'admin_approve_accept' => array(
		/*
			@additional_params: admin_approve_accept
				NAME: The display name of the member.
				USERNAME: The user name for the member receiving the email.
				PROFILELINK: The URL of the profile page.
				FORGOTPASSWORDLINK: The URL of the "forgot password" page.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => 'Welcome, {NAME}!

管理员已经审核通过您的帐号, 您现在可以登录和发表帖子。您的帐号是: {USERNAME}。如果您忘记密码, 您可以点击这个连结( {FORGOTPASSWORDLINK} )重新设定密码。

{REGARDS}',
	),
	'admin_approve_activation' => array(
		/*
			@additional_params: admin_approve_activation
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '{USERNAME}, 欢迎您！

管理员已经审核通过您在 {FORUMNAME} 的帐号。在您登录论坛之前, 您必须点击下面连结来启用您的帐号:

{ACTIVATIONLINK}

如果上面的连结有问题, 请点击这个连结( {ACTIVATIONLINKWITHOUTCODE} ) 并输入启用码"{ACTIVATIONCODE}"。

{REGARDS}',
	),
	'admin_approve_reject' => array(
		/*
			@additional_params: admin_approve_reject
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => '{FORUMNAME}: 注册拒绝',
		'body' => '{USERNAME},

非常遗憾, 您被拒绝注册 {FORUMNAME}。

{REGARDS}',
	),
	'admin_approve_delete' => array(
		/*
			@additional_params: admin_approve_delete
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => '{FORUMNAME}: 帐号删除',
		'body' => '{USERNAME},

您在 {FORUMNAME} 的帐号已经被删除。可能是您没有成功启用帐号, 您可以重新注册一次。

{REGARDS}',
	),
	'admin_approve_remind' => array(
		/*
			@additional_params: admin_approve_remind
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => '{FORUMNAME}: 注册提醒',
		'body' => '{USERNAME},
您还没有启用您在 {FORUMNAME} 帐号.

您点击下面连结启用帐号:
{ACTIVATIONLINK}

如果上面的连结有问题, 请点击这个连结( {ACTIVATIONLINKWITHOUTCODE} ) 并输入启用码"{ACTIVATIONCODE}"。

{REGARDS}',
	),
	'admin_register_activate' => array(
		/*
			@additional_params:
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '感谢您在 {FORUMNAME} 注册。您的帐号是 {USERNAME}, 密码是 {PASSWORD}.

登录之前, 您必须先点击下面的连结来启用帐号:

{ACTIVATIONLINK}

如果上面的连结有问题, 请点击这个连结( {ACTIVATIONLINKWITHOUTCODE} ) 并输入启用码"{ACTIVATIONCODE}"。

{REGARDS}',
	),
	'admin_register_immediate' => array(
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '感谢您在 {FORUMNAME} 注册。您的帐号是 {USERNAME} , 密码是 {PASSWORD}.

{REGARDS}',
	),
	'new_announcement' => array(
		/*
			@additional_params: new_announcement
				TOPICSUBJECT: The subject of the topic being announced.
				MESSAGE: The message body of the first post of the announced topic.
				TOPICLINK: A link to the topic being announced.
			@description:

		*/
		'subject' => '公告: {TOPICSUBJECT}',
		'body' => '{MESSAGE}

如果不想接收公告, 请您登录论坛并在个人资料中取消勾选"以 Email 接收电子报, 论坛公告与重要讯息。"。

您从下面连结阅读完整公告:
{TOPICLINK}

{REGARDS}',
	),
	'notify_boards_once_body' => array(
		/*
			@additional_params: notify_boards_once_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => '订阅通知: {TOPICSUBJECT}',
		'body' => '您订阅的版块有新主题 - \'{TOPICSUBJECT}\'。

帖子连结:
{TOPICLINK}

可能有更多新帖子, 但是在您回到论坛之前不会再收到新通知。

帖子内容:
{MESSAGE}

如果要取消订阅这个版块, 请点击下面的连结:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_once' => array(
		/*
			@additional_params: notify_boards_once
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => '订阅通知: {TOPICSUBJECT}',
		'body' => '您订阅的版块有新主题 - \'{TOPICSUBJECT}\'。

帖子连结:
{TOPICLINK}

可能有更多新帖子, 但是在您回到论坛之前不会再收到新通知。

如果要取消订阅这个版块, 请点击下面的连结:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_body' => array(
		/*
			@additional_params: notify_boards_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => '订阅通知: {TOPICSUBJECT}',
		'body' => '您订阅的版块有新主题 - \'{TOPICSUBJECT}\'。

帖子连结
{TOPICLINK}

帖子内容:
{MESSAGE}

如果要取消订阅这个版块, 请点击下面连结:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards' => array(
		/*
			@additional_params: notify_boards
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => '订阅通知: {TOPICSUBJECT}',
		'body' => '您订阅的版块有新主题 - \'{TOPICSUBJECT}\'。

帖子连结
{TOPICLINK}

如果要取消订阅这个版块, 请点击下面的连结:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'request_membership' => array(
		/*
			@additional_params: request_membership
				RECPNAME: The name of the person recieving the email
				APPYNAME: The name of the person applying for group membership
				GROUPNAME: The name of the group being applied to.
				REASON: The reason given by the applicant for wanting to join the group.
				MODLINK: Link to the group moderation page.
			@description:
		*/
		'subject' => '群组加入申请',
		'body' => '{RECPNAME},

{APPYNAME} 申请加入群组 "{GROUPNAME}"。这位会员申请的理由如下:

{REASON}

您可以点击下面连结, 同意或拒绝他的申请:

{MODLINK}

{REGARDS}',
	),
	'paid_subscription_reminder' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				PROFILE_LINK: Link to profile of member receiving email where can renew.
				SUBSCRIPTION: Name of the subscription.
				END_DATE: Date it expires.
			@description:
		*/
		'subject' => '{FORUMNAME}: 订阅即将到期',
		'body' => '{REALNAME},

你在 {FORUMNAME} 的订阅即将到期。如果你在订阅时选择了自动续期的话你不需要做任何事, 否则你也许会想考虑给订阅续期。以下是订阅详情:

订阅: {SUBSCRIPTION}
到期日: {END_DATE}

如果要修改你的订阅, 请点击下面的连结:
{PROFILE_LINK}

{REGARDS}',
	),
	'activate_reactivate' => array(
		/*
			@additional_params: activate_reactivate
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
			@description:
		*/
		'subject' => '欢迎回到 {FORUMNAME}',
		'body' => '为了覆核你的电邮地址, 你的帐号已经被停用。请点击下面的连结启用它:
{ACTIVATIONLINK}

如果上面的连结有问题, 请点击这个连结( {ACTIVATIONLINKWITHOUTCODE} ) 并输入启用码"{ACTIVATIONCODE}"。

{REGARDS}',
	),
	'forgot_password' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				REMINDLINK: The link to reset the password.
				IP: The IP address of the requester.
				MEMBERNAME:
			@description:
		*/
		'subject' => '{FORUMNAME} 的新密码',
		'body' => 'Dear {REALNAME},
这封信是因为您点击\'忘记密码\'功能。请点击下面连结重新设定密码:
{REMINDLINK}

IP: {IP}
帐号: {MEMBERNAME}

{REGARDS}',
	),
	'forgot_openid' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				IP: The IP address of the requester.
				OPENID: The members OpenID identity.
			@description:
		*/
		'subject' => '{FORUMNAME}: OpenID 提醒',
		'body' => 'Dear {REALNAME},
这封信是因为您点击\'忘记 OpenID\'功能。下面是与您帐号连结的 OpenID:
{OPENID}

IP: {IP}
帐号: {MEMBERNAME}

{REGARDS}',
	),
	'scheduled_approval' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				BODY: The generated body of the mail.
			@description:
		*/
		'subject' => '{FORUMNAME}: 等待审核的帖子整理',
		'body' => '{REALNAME},

这封信是 {FORUMNAME} 里所有等待审核的项目清单。

{BODY}

请登录论坛并审核它们。
{SCRIPTURL}

{REGARDS}',
	),
	'send_topic' => array(
		/*
			@additional_params: send_topic
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
			@description:
		*/
		'subject' => '主题: {TOPICSUBJECT} (From: {SENDERNAME})',
		'body' => 'Dear {RECPNAME},
我想分享您一篇在 {FORUMNAME} 的帖子 - "{TOPICSUBJECT}"。请点击下面连结阅读:

{TOPICLINK}

Thanks,

{SENDERNAME}',
	),
	'send_topic_comment' => array(
		/*
			@additional_params: send_topic_comment
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
				COMMENT: A comment left by the sender.
			@description:
		*/
		'subject' => '帖子: {TOPICSUBJECT} (From: {SENDERNAME})',
		'body' => 'Dear {RECPNAME},
我想分享您一篇在 {FORUMNAME} 的帖子 - "{TOPICSUBJECT}"。 请点击下面连结阅读:

{TOPICLINK}

有一个关于这篇帖子的回应:
{COMMENT}

Thanks,

{SENDERNAME}',
	),
	'send_email' => array(
		/*
			@additional_params: send_email
				EMAILSUBJECT: The subject the user wants to email.
				EMAILBODY: The body the user wants to email.
				SENDERNAME: The name of the member sending the email.
				RECPNAME: The name of the person receiving the email.
			@description:
		*/
		'subject' => '{EMAILSUBJECT}',
		'body' => '{EMAILBODY}',
	),
	'report_to_moderator' => array(
		/*
			@additional_params: report_to_moderator
				TOPICSUBJECT: The subject of the reported post.
				POSTERNAME: The report post's author's name.
				REPORTERNAME: The name of the person reporting the post.
				TOPICLINK: The url of the post that is being reported.
				REPORTLINK: The url of the moderation center report.
				COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
			@description: When a user reports a post this email is sent out to moderators and admins of that board.
		*/
		'subject' => '检举: {TOPICSUBJECT} by {POSTERNAME}',
		'body' => '{REPORTERNAME} 检举 {POSTERNAME} 发表的 "{TOPICSUBJECT}":

帖子连结: {TOPICLINK}
版务中心: {REPORTLINK}

检举人留下意见:
{COMMENT}

{REGARDS}',
	),
	'change_password' => array(
		/*
			@additional_params: change_password
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
			@description:
		*/
		'subject' => '新密码通知',
		'body' => 'Hey, {USERNAME}!

您在 {FORUMNAME} 的登录资料有更动, 而且您的密码也被重设。下面是您的新登录资料。

您的帐号是 "{USERNAME}", 密码是"{PASSWORD}"。

您可以登录之后到个人资料页面修改。或是您登录之后点击下面连结:
{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '感谢您在 {FORUMNAME} 注册。您的帐号是 {USERNAME}。如果您忘记密码, 您可以点击这个连结( {FORGOTPASSWORDLINK} )重新设定密码。

登录之前, 您必须先点击下面的连结来启用帐号:

{ACTIVATIONLINK}

如果上面的连结有问题, 请点击这个连结( {ACTIVATIONLINKWITHOUTCODE} ) 并输入启用码"{ACTIVATIONCODE}"。

{REGARDS}',
	),
	'register_openid_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '感谢您在 {FORUMNAME} 注册。您的帐号是 {USERNAME}. 您选择使用下面 OpenID identity 验证:
{OPENID}

登录之前, 您必须先点击下面的连结来启用帐号:

{ACTIVATIONLINK}

如果上面的连结有问题, 请点击这个连结( {ACTIVATIONLINKWITHOUTCODE} ) 并输入启用码"{ACTIVATIONCODE}"。

{REGARDS}',
	),
	'register_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				COPPALINK: The url link to the coppa form.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '感谢您在 {FORUMNAME} 注册。您的帐号是 {USERNAME}。如果您忘记密码, 您可以点击这个连结 {FORGOTPASSWORDLINK} 重新设定密码

您登录之前, 管理员要求取得您的父母/监护人的同意, 您才可以加入论坛。您可以点击下面的连结获得更多资讯:

{COPPALINK}

{REGARDS}',
	),
	'register_openid_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				COPPALINK: The url link to the coppa form.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '感谢您在 {FORUMNAME} 注册。您的帐号是 {USERNAME}。

您选择下面的 OpenID identity 验证:
{OPENID}

在您登录之前, 管理员要取得您的父母/监护人的同意才可以让您加入论坛。您可以点击下面的连结获得更多资讯:

{COPPALINK}

{REGARDS}',
	),
	'register_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '感谢您在 {FORUMNAME} 注册。您的帐号是 {USERNAME}。如果您忘记密码, 您可以点击 {FORGOTPASSWORDLINK} 重新设定密码。

{REGARDS}',
	),
	'register_openid_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '感谢您在 {FORUMNAME} 注册。您的帐号是 {USERNAME}.

您选择使用下面的 OpenID identity 验证:
{OPENID}

登录之后点击下面的连结, 可以更新您的个人资料:

{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '{REALNAME}, 我们收到您注册 {FORUMNAME} 的请求。

您注册的帐号是 {USERNAME}。如果您忘记密码, 您可以点击这个连结( {FORGOTPASSWORDLINK} )重新设定密码。

在您登录并使用论坛之前, 您的注册请求必须通过审核。如果审核通过, 您会收到一封核淮通知信。

{REGARDS}',
	),
	'register_openid_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => '欢迎来到 {FORUMNAME}',
		'body' => '{REALNAME}, 我们收到您注册 {FORUMNAME} 的请求。

您注册的帐号是 {USERNAME}。

您选择使用下面 OpenID identity 验证:
{OPENID}

在您登录并使用论坛之前, 您的注册请求必须通过审核。如果审核通过, 您会收到一封核淮通知信。

{REGARDS}',
	),
	'notification_reply' => array(
		/*
			@additional_params: notification_reply
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => '回覆通知: {TOPICSUBJECT}',
		'body' => '您订阅的主题 {POSTERNAME} 有新回覆。

帖子连结: {TOPICLINK}

取消订阅这篇帖子, 请点击连结: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_reply_body' => array(
		/*
			@additional_params: notification_reply_body
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => '回覆通知: {TOPICSUBJECT}',
		'body' => '您订阅的主题 {POSTERNAME} 有新回覆。

帖子连结: {TOPICLINK}

取消订阅这篇帖子, 请点击连结: {UNSUBSCRIBELINK}

帖子的回覆内容:
{MESSAGE}

{REGARDS}',
	),
	'notification_reply_once' => array(
		/*
			@additional_params: notification_reply_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => '回覆通知: {TOPICSUBJECT}',
		'body' => '您订阅的主题 {POSTERNAME} 有新回覆。

帖子连结: {TOPICLINK}

取消订阅这篇帖子, 请点击连结: {UNSUBSCRIBELINK}

可能有更多新回覆, 但是在您阅读帖子之前不会再收到新通知。

{REGARDS}',
	),
	'notification_reply_body_once' => array(
		/*
			@additional_params: notification_reply_body_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => '回覆通知: {TOPICSUBJECT}',
		'body' => '您订阅的主题 {POSTERNAME} 有新回覆。

帖子连结: {TOPICLINK}

取消订阅这篇帖子, 请点击连结: {UNSUBSCRIBELINK}

帖子的回覆内容:
{MESSAGE}

可能有更多新回覆, 但是在您阅读帖子之前不会再收到新通知。

{REGARDS}',
	),
	'notification_sticky' => array(
		/*
			@additional_params: notification_sticky
			@description:
		*/
		'subject' => '置顶: {TOPICSUBJECT}',
		'body' => '您观察的帖子被 {POSTERNAME} 置顶。

阅读帖子: {TOPICLINK}

取消订阅这篇帖子, 请点击连结: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_lock' => array(
		/*
			@additional_params: notification_lock
			@description:
		*/
		'subject' => '封锁: {TOPICSUBJECT}',
		'body' => '您观察的帖子被 {POSTERNAME} 封锁。

阅读帖子: {TOPICLINK}

取消订阅这篇帖子, 请点击连结: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_unlock' => array(
		/*
			@additional_params: notification_unlock
			@description:
		*/
		'subject' => '解锁: {TOPICSUBJECT}',
		'body' => '您观察的帖子被 {POSTERNAME} 解锁。

阅读帖子: {TOPICLINK}

取消订阅这篇帖子, 请点击连结: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_remove' => array(
		/*
			@additional_params: notification_remove
			@description:
		*/
		'subject' => '移除: {TOPICSUBJECT}',
		'body' => '您观察的帖子被 {POSTERNAME} 移除。

{REGARDS}',
	),
	'notification_move' => array(
		/*
			@additional_params: notification_move
			@description:
		*/
		'subject' => '移动: {TOPICSUBJECT}',
		'body' => '您观察的帖子被 {POSTERNAME} 移动到其他版块。

阅读帖子: {TOPICLINK}

取消订阅这篇帖子, 请点击连结: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_merge' => array(
		/*
			@additional_params: notification_merged
			@description:
		*/
		'subject' => '合并: {TOPICSUBJECT}',
		'body' => '您观察的帖子被 {POSTERNAME} 与其他帖子合并。

阅读合并后的帖子: {TOPICLINK}

取消订阅这篇帖子, 请点击连结: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_split' => array(
		/*
			@additional_params: notification_split
			@description:
		*/
		'subject' => '分拆: {TOPICSUBJECT}',
		'body' => '您观察的帖子被 {POSTERNAME} 分折。

阅读剩下的帖子: {TOPICLINK}

取消订阅这篇帖子, 请点击连结: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'admin_notify' => array(
		/*
			@additional_params: admin_notify
				USERNAME:
				PROFILELINK:
			@description:
		*/
		'subject' => '新会员加入',
		'body' => '注册论坛的新会员 - {USERNAME}。点击下面连结检视他的个人资料。
{PROFILELINK}

{REGARDS}',
	),
	'admin_notify_approval' => array(
		/*
			@additional_params: admin_notify_approval
				USERNAME:
				PROFILELINK:
				APPROVALLINK:
			@description:
		*/
		'subject' => '新会员加入',
		'body' => '注册论坛的新会员 - {USERNAME}。点击下面连结检视他的个人资料。
{PROFILELINK}

您必须核淮这位会员的帐号, 他才可以发表帖子。点击下面连结前往审核页面。
{APPROVALLINK}

{REGARDS}',
	),
	'admin_attachments_full' => array(
		/*
			@additional_params: admin_attachments_full
				REALNAME:
			@description:
		*/
		'subject' => '紧急！附件文件夹快要满了',
		'body' => '{REALNAME},

{FORUMNAME} 的附件文件夹快满了。请回到论坛解决这个问题。

一旦附件文件夹满了, 会员就无法上传附件或头像 (如果启用的话)。

{REGARDS}',
	),
	'paid_subscription_refund' => array(
		/*
			@additional_params: paid_subscription_refund
				NAME: Subscription title.
				REALNAME: Recipients name
				REFUNDUSER: Username who took out the subscription.
				REFUNDNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => '付费订阅退款',
		'body' => '{REALNAME},

一名会员收到了付费订阅的退款。以下是付费订阅详情:

	订阅: {NAME}
	会员名称: {REFUNDNAME} ({REFUNDUSER})
	日期: {DATE}

这位会员的个人资料:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_new' => array(
		/*
			@additional_params: paid_subscription_new
				NAME: Subscription title.
				REALNAME: Recipients name
				SUBEMAIL: Email address of the user who took out the subscription
				SUBUSER: Username who took out the subscription.
				SUBNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => '新付费订阅',
		'body' => '{REALNAME},

一名会员购入了新的付费订阅。以下是订阅详情:

	订阅: {NAME}
	会员名称: {SUBNAME} ({SUBUSER})
	会员电邮: {SUBEMAIL}
	价格: {PRICE}
	日期: {DATE}

这位会员的个人资料:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_error' => array(
		/*
			@additional_params: paid_subscription_error
				ERROR: Error message.
				REALNAME: Recipients name
			@description:
		*/
		'subject' => '无法处理付费订阅',
		'body' => '{REALNAME},

在处理付费订阅时发生以下错误
---------------------------------------------------------------
{ERROR}

{REGARDS}',
	),
);

/*
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$birthdayEmails = array(
	'happy_birthday' => array(
		'subject' => '来自 {FORUMNAME} 的生日祝贺.',
		'body' => '致 {REALNAME},

{FORUMNAME} 仝人恭祝您生日快乐。希望今天和接下来的一年都充满喜乐。

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>',
	),
	'karlbenson1' => array(
		'subject' => '在你的生日...',
		'body' => '我们可以给您寄生日咭。我们也可以给您寄花或寄蛋榚。

但我们没有那样做。

我们可以给您寄那些连"填入名字"都不需要填的自动生日祝福。

但我们也没有那样做。

这生日祝福是特别为您而写的。

希望您有一个特别的生日。

{REGARDS}

//:: 这是自动生成的讯息 :://',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
	'nite0859' => array(
		'subject' => '生日快乐！',
		'body' => '您在 {FORUMNAME} 的朋友想借用你的一点时间来祝您生日快乐, {REALNAME}. 如果您最近没来, 请回来看看让大家有机会对您说贺词。

借着您的生日, 我们想让您知道您加入成为我们的会员是目前为止对我们最好的礼物。

敬祝安康

{FORUMNAME} 员工',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>',
	),
	'zwaldowski' => array(
		'subject' => '给 {REALNAME} 的生日快乐',
		'body' => '{REALNAME}:

又一年过去。{FORUMNAME} 的大家希望这过去一年满了快乐，并祝你来年万事如意。

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>',
	),
	'geezmo' => array(
		'subject' => '生日快乐, {REALNAME}!',
		'body' => '知不知道今天是谁的生日呢, {REALNAME}?

我们知道.... 就是您!

生日快乐!

您又年长一岁了, 但我们希望您比上年更加快乐.

享受属于您的一天吧, {REALNAME}!

- 您的 {FORUMNAME} 家庭',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>',
	),
	'karlbenson2' => array(
		'subject' => '祝你生日快乐',
		'body' => '祝您年年有今日, 岁岁有今朝。
希望您尽情享受你的生日, 并与我们分享您的经历。

愿这封祝贺令您开颜, 持续到明年同日同地。

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
);

?>