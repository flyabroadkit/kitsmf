<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = '关闭视窗';

$helptxt['manage_boards'] = '
	<strong>编辑版块</strong><br />
	这个页面可以让你建立/排序/移除版块, 以及版块的类别。
	例如: 您的论坛资讯很广泛, 包含 &quot;运动&quot;, &quot;汽车&quot; 和 &quot;音乐&quot;,
	这些可以建立成最上层的类别, 底下您可以建立 &quot;子类别&quot; 或 &quot;版块&quot;
	而帖子是在版块里面。下面是一个简单的阶层结构: <br />
	<ul class="normallist">
		<li>
			<strong>运动</strong>
			&nbsp;- &quot;类别&quot;
		</li>
		<ul class="normallist">
			<li>
				<strong>棒球</strong>
				&nbsp;- &quot;运动&quot 类别底下的版块;
			</li>
			<ul class="normallist">
				<li>
					<strong>统计</strong>
					&nbsp;- &quot;棒球&quot 底下的子版块;
				</li>
			</ul>
			<li><strong>足球</strong>
			&nbsp;- &quot;运动&quot; 底下的版块</li>
		</ul>
	</ul>
	类别可以让您明显地分类版块的主题 (&quot;汽车, 运动&quot;),
	而底下的 &quot;版块&quot; 可以让会员发表帖子。
	会员如果对于 Pintos 有兴趣, 他可以在 &quot;汽车->Pinto&quot; 发表帖子。
	类别让大家快速寻找自己想要的: 您可以去逛 &quot;硬体&quot; 和 &quot;服饰&quot; 店, 而不是只能去 &quot;商店&quot;。
	这样可以简化您搜寻 &quot;pipe joint compound&quot;, 因为您可以到硬体店 &quot;类别&quot; 而不需要去服饰店(您不可能在服饰店找到 pipe joint compound)。<br />
	如上所述, 版块是类别底下的主要议题。
	如果您要讨论 &quot;Pintos&quot; 您要在 &quot;汽车&quot; 类别底下的 &quot;Pinto&quot; 版块发表您的意见。<br />
	这个选单项目的管理功能是建立版块, 排序版块 (让 &quot;Pinto&quot; 在 &quot;Chevy&quot; 之后), 或删除版块。';

$helptxt['edit_news'] = '
	<ul class="normallist">
		<li>
			<strong>最新消息</strong><br />
			这个让您设定显示在论坛首页的最新消息项目。
			增加您要的项目 (例如: "不要忘记星期二的会议")。每个项目会随机轮播。
		</li>
		<li>
			<strong>电子报</strong><br />
			这个让您透过简讯或 Email 传送电子报给会员。首先, 选择您想传送的群组和您不想传送的群组。您也可以另外增加传送的会员或 Email。最后, 输入电子报的内容并选择用简讯或 Email 传送。
		</li>
		<li>
			<strong>设定</strong><br />
			这里可以选择最新消息和电子报的设定, 包含选择可以编辑或传送电子报的群组。这里也可以设定是否启用 feed, 并且设定 feed 中每篇帖子显示的长度。
		</li>
	</ul>';

$helptxt['view_members'] = '
	<ul class="normallist">
		<li>
			<strong>会员名单</strong><br />
			View all members in the board. You are presented with a hyperlinked list of member names. You may click
			on any of the names to find details of the members (homepage, age, etc.), and as Administrator
			you are able to modify these parameters. You have complete control over members, including the
			ability to delete them from the forum.<br /><br />
		</li>
		<li>
			<strong>等待审核</strong><br />
			This section is only shown if you have enabled admin approval of all new registrations. Anyone who registers to join your
			forum will only become a full member once they have been approved by an admin. The section lists all those members who
			are still awaiting approval, along with their email and IP address. You can choose to either accept or reject (delete)
			any member on the list by checking the box next to the member and choosing the action from the drop-down box at the bottom
			of the screen. When rejecting a member you can choose to delete the member either with or without notifying them of your decision.<br /><br />
		</li>
		<li>
			<strong>等待启用</strong><br />
			This section will only be visible if you have activation of member accounts enabled on the forum. This section will list all
			members who have still not activated their new accounts. From this screen you can choose to either accept, reject or remind
			members with outstanding registrations. As above you can also choose to email the member to inform them of the
			action you have taken.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>阻挡会员</strong><br />
	SMF 可以让你 &quot;禁用&quot; 会员, 如果他们违反了论坛的规定.
	管理员可以禁止他们浏览论坛. 在会员发布的帖子里你可以看到他们的 IP.
	只要把 IP 输入到这里就可以禁止他们发布任何帖子.注意: 有些会员的 IP 会改变.<br />或输入他们的电子邮件阻挡会员.';

$helptxt['featuresettings'] = '<strong>Edit Features and Options</strong><br />
	There are several features in this section that can be changed to your preference.';

$helptxt['securitysettings'] = '<strong>Security and Moderation</strong><br />
	This section contains settings relating to the security and moderation of your forum.';

$helptxt['modsettings'] = '<strong>修改特色及选项</strong><br />
	这里可以任意修改论坛的特色. 外挂的选项通常也会在这里出现.';

$helptxt['number_format'] = '<strong>数字格式</strong><br />
	这里可以让您设定论坛使用的数字格式. 格式为: <br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	您可以使用 \',\' 来显示千的单位, 或用 \'.\' 来显示小数.';

$helptxt['time_format'] = '<strong>时间格式</strong><br />
	你可以修改时间格式给你自己. 这里用了很多简写, 但是非常简单. PHP 的strftime函数用法如下
	(详细的用法可到 <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	时间格式可用以下简写: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - 周日简称<br />
	&nbsp;&nbsp;%A - 周日名称<br />
	&nbsp;&nbsp;%b - 月份简称<br />
	&nbsp;&nbsp;%B - 月份名称<br />
	&nbsp;&nbsp;%d - 日子 (01 to 31) <br />
	&nbsp;&nbsp;%D<strong>*</strong> - 如同 %m/%d/%y <br />
	&nbsp;&nbsp;%e<strong>*</strong> - 日子 (1 to 31) <br />
	&nbsp;&nbsp;%H - 24-hour 格式 (range 00 to 23) <br />
	&nbsp;&nbsp;%I - 12-hour 格式 (range 01 to 12) <br />
	&nbsp;&nbsp;%m - 数字月份 (01 to 12) <br />
	&nbsp;&nbsp;%M - 分钟 <br />
	&nbsp;&nbsp;%p - 可用 &quot;am&quot; 或 &quot;pm&quot; 上午或下午<br />
	&nbsp;&nbsp;%R<strong>*</strong> - 时间以24小时标记 <br />
	&nbsp;&nbsp;%S - 秒数以小数计算 <br />
	&nbsp;&nbsp;%T<strong>*</strong> - 目前时间, 等于 %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2 位数年份 (00 to 99) <br />
	&nbsp;&nbsp;%Y - 4 位数年份<br />
	&nbsp;&nbsp;%Z - 时区 <br />
	&nbsp;&nbsp;%% - \'%\' 符号 <br />
	<br />
	<i>* 无法用在 Windows-based 伺服器.</i></span>';

$helptxt['live_news'] = '<strong>Live 公告</strong><br />
	这里会出现 <a href="http://www.simplemachines.org/">www.simplemachines.org 的最新注意事项</a>
	这里会常出现更新档, 新论坛下载, 或 Simple Machines Team 的重要事件.';

$helptxt['registrations'] = '<strong>注册管理</strong><br />
	这里可以让你用各种功能管理会员注册. 依据你论坛的设定, 你会看到不同的区块及功能. 这些是:<br /><br />
	<ul>
		<li>
			<strong>注册新会员</strong><br />
			这里你可以注册新的会员. 当你的论坛已不开放注册或你需要新增测试会员时可以用这个功能. . 如果你要求新会员启用帐号,
			启用邮件会寄到他们的信箱里, 他们必须依照邮件的指示启动帐号. 你也可以选择寄密码给会员.
		</li>
		<li>
			<strong>修改注册同意条款</strong><br />
			当新会员注册时会看到论坛的同意条款. 你可以完全改变, 移除, 或修改 SMF 原有的同意条款内容.<br /><br />
		</li>
		<li>
			<strong>保留帐号</strong><br />
			这里你可以禁止会员使用某些帐号.<br /><br />
		</li>
		<li>
			<strong>设定</strong><br />
			这个页面只有在可管理论坛的权限下出现。这里个让您改变注册的设定，和其他相关的设定。
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>管理纪录</strong><br />
	任何版主的管理纪录都会在这出现, 譬如说删除帖子及删除会员. 任何纪录一定会在这出现, 如果版主要删除必须等24小时过后.
	版主的动作变数都会出现在 \'物件\' 栏里.';
$helptxt['adminlog'] = '<strong>Administration Log</strong><br />
	This section allows members of the admin team to track some of the administrative actions that have occurred on the forum. To ensure that
	admins cannot remove references to the actions they have performed, entries may not be deleted until 24 hours after the action was taken.';
$helptxt['warning_enable'] = '<strong>User Warning System</strong><br />
	This feature enables members of the admin and moderation team to issue warnings to users - and to use a users warning level to determine the
	actions available to them on the forum. Upon enabling this feature a permission will be available within the permissions section to define
	which groups may assign warnings to users. Warning levels can be adjusted from a users profile. The following additional options are available:
	<ul>
		<li>
			<strong>Warning Level for User Watch</strong><br />
			This setting defines the percentage warning level a user must reach to automatically assign a &quot;watch&quot; to the user.
			Any user who is being &quot;watched&quot; will appear in the relevant area of the moderation center.
		</li>
		<li>
			<strong>Warning Level for Post Moderation</strong><br />
			Any user passing the value of this setting will find all their posts require moderator approval before they appear to the forum
			community. This will override any local board permissions which may exist related to post moderation.
		</li>
		<li>
			<strong>Warning Level for User Muting</strong><br />
			If this warning level is passed by a user they will find themselves under a post ban. The user will lose all posting rights.
		</li>
		<li>
			<strong>Maximum User Warning Point per Day</strong><br />
			This setting limits the amount of points a moderator may add/remove to any particular user in a twenty four hour period. This will
			can be used to limit what a moderator can do in a small period of time. This setting can be disabled by setting to a value of zero. Note that
			any users with administrator permissions are not affected by this value.
		</li>
	</ul>';
$helptxt['error_log'] = '<strong>错误纪录</strong><br />
	错误纪录会纪录所有会用使用论坛时而发生错误的纪录. 所有错误是依照发生日期出现, 你也可以按日期旁边的箭头来进行类别.
	此外你可以按错误旁的图片来进行过滤. 譬如说过滤会员只会陈列你所过滤的会员.';
$helptxt['theme_settings'] = '<strong>布景设定</strong><br />
	这里可以让你改变布景的设定. 设定包括布景的文件夹及 URL 的资料. 其他的选项可以让你对布景进行规划.
	有些布景提供不同的选项任你规划你所喜欢的论坛.';
$helptxt['smileys'] = '<strong>表情图案中心</strong><br />
	在这里您可以新增或移除表情图案和表情套图. 注意如果一个表情图案在一个表情套图里面, 他必须也出现在每个图案集.
	要不然会无法显示.<br /><br />

	您也可以在这里编辑帖子的图示，如果有开启这个功能。';
$helptxt['calendar'] = '<strong>管理日历</strong><br />
	这里可以让您修改目前的日历设定，也可以新增或移除假期。';

$helptxt['serversettings'] = '<strong>服务器设定</strong><br />
	这里可以让您改变论坛内主要的设定。这里包含了资料库和 URL 的设定，还有一些
	重要的功能像邮件设定和快取。请小心改变这里的设定，任何错误可能会让您的
	论坛无法使用';
$helptxt['manage_files'] = '
	<ul>
		<li>
			<strong>Browse Files</strong><br />
			Browse through all the attachments, avatars and thumbnails stored by SMF.<br /><br />
		</li><li>
			<strong>Attachment Settings</strong><br />
			Configure where attachments are stored and set restrictions on the types of attachments.<br /><br />
		</li><li>
			<strong>Avatar Settings</strong><br />
			Configure where avarars are stored and manage resizing of avatars.<br /><br />
		</li><li>
			<strong>File Maintenance</strong><br />
			Check and repair any error in the attachment directory and delete selected attachments.<br /><br />
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = '这里可以让你选择出现在主题回覆时该出现的帖子数.';
$helptxt['enableAllMessages'] = '这里可以让您设定显示 全部 连结的 <em>最多</em> 帖子数量。如果这个设定是小于 &quot;主题页面显示的帖子数&quot; 表示永远不会显示 全部 的连结，如果设定太高可能会让您的论坛变慢。';
$helptxt['enableStickyTopics'] = '顶置的主题会出现在版块的最上头. 顶置可用在重要的主题. 原本的默认值只让版主顶置主题.';
$helptxt['allow_guestAccess'] = '不勾选这个栏位会让访客无法进行任何动作，除了使用登录，忘记密码功能等等。这个跟禁止访客进入版块的权限不同。';
$helptxt['userLanguage'] = '使用这个选项可以让会员改变论坛语言, 但是不会改变默认值.';
$helptxt['trackStats'] = '统计:<br />这个可以让会员浏览最新的帖子或最受欢迎的帖子. 其他的统计像最高线上人数, 最新注册会员, 及最新帖子也会出现.<hr />
		点阅数:<br />添加新的统计栏显示论坛的点阅数.';
$helptxt['titlesEnable'] = '变更自订头衔是让允许管理员为会员建立特殊的头衔。自订头衔会显示在昵称下面。<br /><em>例如:</em><br />Jeff<br />Cool Guy';
$helptxt['topbottomEnable'] = '这个选项会增加往上及往下, 会员可以点往上到最顶端及往下到最下端.';
$helptxt['onlineEnable'] = '这个选项会显示会员在线或不在线的图示';
$helptxt['todayMod'] = '显示 &quot;今天&quot; 或 &quot;昨天&quot; 取代日期。<br /><br />
		<strong>例如:</strong><br /><br />
		<dt>
			<dt>停用</dt>
			<dd>十月 3, 2009 12:59:18 am</dd>
			<dt>只有今天</dt>
			<dd>今天 12:59:18 am</dd>
			<dt>今天 &amp; 昨天</dt>
			<dd>今天 09:36:55 pm</dd>
		</dt>';
$helptxt['disableCustomPerPage'] = 'Check this option to stop users from customizing the amount of messages and topics to display per page on the Message Index and Topic Display page respectively.';
$helptxt['enablePreviousNext'] = '显示连结到下篇其上篇的帖子.';
$helptxt['pollMode'] = '你可以选择使用会禁止使用投票. 如果禁止使用投票, 任何现有的投票将会被隐藏. 你可以继续显示现有的主题如果你准许
		&quot;显示现有投票为主题&quot;.<br /><br />权限选单可让你选择谁可以发表投票. 请记住这个选项如果投票功能出现问题.';
$helptxt['enableVBStyleLogin'] = '显示登录区到论坛的最下端.';
$helptxt['enableCompressedOutput'] = '这个选项可以让你使用 zlib 来压缩带宽. 一定要安装 zlib 才可使用.';
$helptxt['disableTemplateEval'] = 'By default, templates are evaluated instead of just included. This helps with showing more useful debug information in case a template contains an error.<br /><br />
		On large forums however, this customised inclusion process may be significantly slower. Therefore, advanced users may wish to disable it.';
$helptxt['databaseSession_enable'] = '此项功能将使用资料库来管理工作阶段。最好使用在有负载平衡功能的服务器，也可能让您的论坛更快。';
$helptxt['databaseSession_loose'] = '启用此项功能会减少您论坛使用的宽频, 但是如果您按回上页不过更新您的页面.';
$helptxt['databaseSession_lifetime'] = '您可以选择工作阶段的时间 (已秒计算), 最好是高于2400.';
$helptxt['enableErrorLogging'] = '这个会纪录任何错误, 譬如说无法登录等等.';
$helptxt['enableErrorQueryLogging'] = 'This will include the full query sent to the database in with any database error.  Requires error logging to be turned on.<br /><br /><strong>Note:  This will affect the ability to filter the error log by the error message.</strong>';
$helptxt['allow_disableAnnounce'] = '这个可以让会员反勾选公告主题的选项来退出公告帖子的邮件通知。';
$helptxt['disallow_sendBody'] = '这个选项会在回覆的通知信件内移除帖子内容。<br /><br />通常会员会直接回复通知信件，表示只有管理员才会收到回覆的讯息。';
$helptxt['compactTopicPagesEnable'] = '页码显示的数量。<br /><em>例如:</em>
		&quot;3&quot; 显示为: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; 显示为: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = '在论坛的最下方显示 SMF 开启主页所花的时间.';
$helptxt['removeNestedQuotes'] = '引用帖子的时候, 这个功能会移除原文中的巢状引言。';
$helptxt['simpleSearch'] = '只显示简单的搜寻及进阶搜寻的连结.';
$helptxt['max_image_width'] = '设定帖子贴图的最大值. 不会影响小于最大值的图片.';
$helptxt['mail_type'] = '让你选择使用默认的 PHP 邮件软体或你自己的邮件伺服器. 除了 sendmail 之外请输入发出邮件的伺服器.';
$helptxt['attachment_manager_settings'] = 'Attachments are files that members can upload, and attach to a post.<br /><br />
		<strong>Check attachment extension</strong>:<br /> Do you want to check the extension of the files?<br />
		<strong>Allowed attachment extensions</strong>:<br /> You can set the allowed extensions of attached files.<br />
		<strong>Attachments directory</strong>:<br /> The path to your attachment folder<br />(example: /home/sites/yoursite/www/forum/attachments)<br />
		<strong>Max attachment folder space</strong> (in KB):<br /> Select how large the attachment folder can be, including all files within it.<br />
		<strong>Max attachment size per post</strong> (in KB):<br /> Select the maximum filesize of all attachments made per post.  If this is lower than the per-attachment limit, this will be the limit.<br />
		<strong>Max size per attachment</strong> (in KB):<br /> Select the maximum filesize of each separate attachment.<br />
		<strong>Max number of attachments per post</strong>:<br /> Select the number of attachments a person can make, per post.<br />
		<strong>Display attachment as picture in posts</strong>:<br /> If the uploaded file is a picture, this will show it underneath the post.<br />
		<strong>Resize images when showing under posts</strong>:<br /> If the above option is selected, this will save a separate (smaller) attachment for the thumbnail to decrease bandwidth.<br />
		<strong>Maximum width and height of thumbnails</strong>:<br /> Only used with the &quot;Resize images when showing under posts&quot; option, the maximum width and height to resize attachments down from.  They will be resized proportionally.';
$helptxt['attachment_image_paranoid'] = 'Selecting this option will enable very strict security checks on image attachments. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with image re-encoding, in order to have SMF try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if image re-encoding is not enabled, all attachments failing checks will be rejected.';
$helptxt['attachment_image_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded image attachments. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static. <br /> This feature is only possible if the GD module is installed on your server.';
$helptxt['avatar_paranoid'] = 'Selecting this option will enable very strict security checks on avatars. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with avatars re-encoding, in order to have SMF try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if re-encoding of avatars is not enabled, all avatars failing checks will be rejected.';
$helptxt['avatar_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded avatars. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static. <br /> This feature is only possible if the GD module is installed on your server.';
$helptxt['karmaMode'] = '评价代表会员的欢迎度. 如果允许的话, 会员可以增加或减少其他会员的欢迎度. 你可以改变要多少帖子数才可以有一个 &quot;评价&quot;.
		<br /><br />您可以在权限选单里面允许减少其他会员的欢迎度.';
$helptxt['cal_enabled'] = '日历可以显示会员的生日及重要的公告.<br /><br />
		<strong>显示连结日期到 \'发表事件\'</strong>:<br />当会员点选日期时可以让他们发布事件.<br />
		<strong>显示周数</strong>:<br />显示第几个礼拜.<br />
		<strong>论坛首页显示的天数</strong>:<br />如果您设定的是7, 那一周内的事件都会出现在论坛首页.<br />
		<strong>主页里显示假期</strong>:<br />主页里会显示今天是什么假期.<br />
		<strong>主页里显示生日</strong>:<br />主页里会显示今天是谁的生日.<br />
		<strong>主页里显示事件</strong>:<br />主页里会显示今天的事件.<br />
		<strong>事件将出现到的版块</strong>:<br />您想要发表的事件出现在哪个版块内?<br />
		<strong>允许事件不连到帖子</strong>:<br />可以直接让会员发布事件，不需选择出现在哪个帖子内。<br />
		<strong>年份的最小值</strong>:<br />设定日历的 &quot;第一年&quot;.<br />
		<strong>年份的最大值</strong>:<br />设定日历的 &quot;最后一年&quot;.<br />
		<strong>生日颜色</strong>:<br />输入生日的颜色<br />
		<strong>事件颜色</strong>:<br />输入事件的颜色<br />
		<strong>假期颜色</strong>:<br />输入假期的颜色<br />
		<strong>允许事件维持数日</strong>:<br />勾选如果你允许同样的事件维持多天.<br />
		<strong>事件可维持日数</strong>:<br />选择事件可以维持的日数.<br /><br />
		记得会员使用日历的功能 (发布事件, 浏览事件等等) 可以在权限选单里面开启.';
$helptxt['localCookies'] = 'SMF 使用 cookies 来保存登录资料到会员的电脑里.
	Cookies 可以用全区性的方式保存 (myserver.com) 或以区域性的方式来保存 (myserver.com/path/to/forum).<br />
	使用这个选项如果会员无法永久登录, 或自动登出.<hr />
	普遍式保存比较不安全如果你使用分享的伺服器 (譬如 Kimo 的免费网址).<hr />
	地区式保存无法到论坛的文件夹外使用, 如果你的论坛安装在 www.myserver.com/forum, 网页像 www.myserver.com/index.php 将无法使用帐户的资料.
	如果使用 SSI.php, 建议您使用全区性来保存.';
$helptxt['enableBBC'] = '使用这个选项可让会员使用 Bulletin Board Code (BBCode 代码). BBCode 代码可让会员改变帖子内容的形式.';
$helptxt['time_offset'] = '如果管理员不想使用跟伺服器一样的时区, 可以输入时差 (小时) 来改变时区, 时差是以伺服器的时区来计算. 可以输入负数及小数.';
$helptxt['default_timezone'] = 'The server timezone tells PHP where your server is located. You should ensure this is set correctly, preferably to the country/city in which the city is located. You can find out more information on the <a href="http://www.php.net/manual/en/timezones.php" target="_blank">PHP Site</a>.';
$helptxt['spamWaitTime'] = '你可以在这选择会员发布帖子时该等的时间. 这个功能可以禁止会员灌水.';

$helptxt['enablePostHTML'] = '允许使用基本的 HTML:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = '这里你可以允许会员使用哪些布景, 及访客使用的默认布景. 你也可以点选布景改变他的设定.';
$helptxt['theme_install'] = '这里可以让你安装新的布景. 你可以用已建的文件夹, 然后上传你要的布景, 或者复制默认的布景.<br /><br />
	注意: 在布景的文件夹里必须要有 <tt>theme_info.xml</tt> 定义档.';
$helptxt['enableEmbeddedFlash'] = '这个选项可让会员在帖子里使用 Flash 档,像图档一样. 虽然安全问题必不严重, 使用 Flash 还是有一定的危险.';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = '允许会员连结 <a href="%1$s?action=.xml;sa=news">最新消息</a>
	及相关的资料。建议你限制最近公告及帖子的使用值, 因为有些使用 RSS 数据的软体会缩短公告的资料 (例如 Trillian)。';
$helptxt['hotTopicPosts'] = '改变&quot;热门主题&quot; 的帖子数或 &quot;超热门主题&quot; 的帖子数.';
$helptxt['globalCookies'] = '允许使用次级域名的 Cookies. 例如, 如果...<br />
	您的网址是 http://www.simplemachines.org/,<br />
	您的论坛在 http://forum.simplemachines.org/,<br />
	使用此项可以让你使用论坛的 cookie 在您的网址里。请勿使用这项功能如果次网域 (像 hacker.simplemachines.org 不是您所拥有)。';
$helptxt['secureCookies'] = 'Enabling this option will force the cookies created for users on your forum to be marked as secure. Only enable this option if you are using HTTPS throughout your site as it will break cookie handling otherwise!';
$helptxt['securityDisable'] = '<em>停用</em>进入后台的密码确认。非常不建议！';
$helptxt['securityDisable_why'] = '这是您目前的密码。(与登录的密码相同)<br /><br />必须输入以确保是您要做的管理, 而且是您<strong>本人</strong>所做的。';
$helptxt['emailmembers'] = '邮件内容可让你使用少许的 &quot;变数&quot;. 这些是:<br />
	{\\$board_url} - 论坛的地址.<br />
	{\\$current_time} - 目前时间.<br />
	{\\$member.email} - 会员邮件地址.<br />
	{\\$member.link} - 会员网址.<br />
	{\\$member.id} - 会员编号.<br />
	{\\$member.name} - 会员名称.<br />
	{\\$latest_member.link} - 最新注册会员网址.<br />
	{\\$latest_member.id} - 最新注册会员编号.<br />
	{\\$latest_member.name} - 最新注册会员名称.';
$helptxt['attachmentEncryptFilenames'] = '加密附加档案可让你安全的重复使用同样的档案名及 .php 档. 但是资料库如果发生错误会较难修复.';

$helptxt['failed_login_threshold'] = '设定错误登录的数量, 之后转向到忘记密码页面.';
$helptxt['oldTopicDays'] = '如果使用这个功能，会员在回覆帖子时会检查主题的日期，如果主题已很久没有回复，会员会收到警告的讯息。设为 0 表示关闭此功能。';
$helptxt['edit_wait_time'] = '如果会员在设定的时间内编辑帖子，帖子将不会显示最后编辑时间的讯息。';
$helptxt['edit_disable_time'] = '设定会员在帖子发表之后, 超过多少时间(分钟)不能再修改帖子。0=停用。<br /><br /><em>注意: 这不会影响有权限编辑别人帖子的人。</em>';
$helptxt['posts_require_captcha'] = 'This setting will force users to enter a code shown on a verification image each time they make a post to the board. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['enableSpellChecking'] = '允许拼字检查. 必须要安装 pspell 程式库到您的伺服器里及 PHP 设定使用 pspell. 您的伺服器 ' . (function_exists('pspell_new') == 1 ? '有' : '没有') . ' 安装 pspell.';
$helptxt['disable_wysiwyg'] = 'This setting disallows all users from using the WYSIWYG (&quot;What You See Is What You Get&quot;) editor on the post page.';
$helptxt['lastActive'] = '显示时间已内的在线会员. 默认值是15分钟.';

$helptxt['customoptions'] = 'This section defines the options that a user may choose from a drop down list. There are a few key points to note in this section:
	<ul>
		<li><strong>Default Option:</strong> Whichever option box has the &quot;radio button&quot; next to it selected will be the default selection for the user when they enter their profile.</li>
		<li><strong>Removing Options:</strong> To remove an option simply empty the text box for that option - all users with that selected will have their option cleared.</li>
		<li><strong>Reordering Options:</strong> You can reorder the options by moving text around between the boxes. However - an important note - you must make sure you do <strong>not</strong> change the text when reordering options as otherwise user data will be lost.</li>
	</ul>';

$helptxt['autoOptDatabase'] = '定时优化资料库. 设定为一天可让您定时每天进行优化. 你可以输入在线会员的最大值, 以免伺服器负荷过重.';
$helptxt['autoFixDatabase'] = '自动修复资料库的表格. 通成这是修复资料库的唯一办法. 当修复时会自动邮件通知您.';

$helptxt['enableParticipation'] = '这个会显示会员发表的主题图示。';

$helptxt['db_persist'] = '延续线路使伺服器永远在线. 通常会增加论坛速度但是有些服务器会产生问题.';
$helptxt['ssi_db_user'] = 'Optional setting to use a different database user and password when you are using SSI.php.';

$helptxt['queryless_urls'] = '这会变更您的网址格式, 更符合搜寻引擎的偏好。看起来会像是 index.php/topic,1.0.html。<br /><br />您的服务器' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '可以' : '无法') . '使用这个功能。';
$helptxt['countChildPosts'] = '勾选这个功能表示子版块内的帖子也会计算在论坛首页显示的帖子数。<br /><br />这会让论坛变慢，同时也表示没有帖子的母版块不会显示 0 篇帖子。';
$helptxt['fixLongWords'] = '这个功能会分拆长于特定长度的文字, 使它们不会影响论坛的外观。(as much...)  这个数值不应该设定低于 40。这个功能无法在使用 UTF-8 和 PHP 版本低于 4.4.0 的论坛。您的服务器' . (empty($GLOBALS['context']['utf8']) || version_compare(PHP_VERSION, '4.4.0') != -1 ? '可以' : '无法') . '使用这个功能。';
$helptxt['allow_ignore_boards'] = '勾选这个功能会允许会员选择他们想忽视的版块。';

$helptxt['who_enabled'] = '这项功能可让你允许或禁止观看同区浏览的会员.';

$helptxt['recycle_enable'] = ' 将 &quot;回收帖子&quot; 移到到选择的版块.';

$helptxt['enableReportPM'] = '这可以让您的会员检举不当的私人讯息。';
$helptxt['max_pm_recipients'] = '这个选项可以让您设定每个会员最多一次能够寄件给多少会员。这是为了避免私人讯息的系统被滥用。记得如果会员能够寄送新闻信件，他们不会被这个设定限制。设定 0 如果不限制收件者的上限。';
$helptxt['pm_posts_verification'] = '这个设定会强制会员在传送私人讯息时输入验证码。只有帖子少于某数量的会员需要输入验证码 - 这可以用来防止自动的垃圾攻击。';
$helptxt['pm_posts_per_hour'] = '这个设定会限制会员在一个小时内传送的私人讯息数量，但不限于管理员和版主。';

$helptxt['default_personal_text'] = '设定新会员默认的 &quot;个人讯息&quot;。';

$helptxt['modlog_enabled'] = '纪录所有管理动作.';

$helptxt['guest_hideContacts'] = '如果使用这项功能, 会员的电子邮件和即时通讯帐号将不会对访客显示.';

$helptxt['registration_method'] = '您可以设定哪种会员注册的方法, 您可以选择:<br /><br />
	<ul>
		<li>
			<strong>禁止注册:</strong><br />
				禁止新会员注册.<br />
		</li><li>
			<strong>马上注册</strong><br />
				新注册会员可马上发布帖子.<br />
		</li><li>
			<strong>启用帐号</strong><br />
				新注册用户会收到论坛的启用邮件, 用户必须启用帐号才可成为会员.<br />
		</li><li>
			<strong>核准帐号</strong><br />
				新注册用户必须等管理员核准才可成为会员.
		</li>
	</ul>';
$helptxt['register_openid'] = '<strong>Authenticate with OpenID</strong><br />
	OpenID is a means of using one username across different websites, to simplify the online experience. To use OpenID you first need to create an OpenID account - a list of providers can be found on the <a href="http://openid.net/" target="_blank">OpenID Official Site</a><br /><br />
	Once you have an OpenID account simply enter your unique identification URL into the OpenID input box and submit. You will then be taken to your providers site to verify your identity before being passed back to this site.<br /><br />
	On your first visit to this site you will be asked to confirm a couple of details before you will be recognized, after which you can login to this site and change your profile settings using just your OpenID.<br /><br />
	For more information please visit the <a href="http://openid.net/" target="_blank">OpenID Official Site</a>';

$helptxt['send_validation_onChange'] = '当使用这项功能时, 改变电子邮件的会员必须重新启用帐号';
$helptxt['send_welcomeEmail'] = '当使用这项功能时, 新注册会员会收到欢迎信件';
$helptxt['password_strength'] = '这个设定可以让您使用不同的密码困难度。越困难的密码表示越难被骇。
	可用的设定是：
	<ul>
		<li><strong>低：</strong> 密码必须多于 4 个字元。</li>
		<li><strong>中：</strong> 密码必须多于 8 个字元，不能包括会员名称和电子邮件。</li>
		<li><strong>高：</strong> 跟中相同，但是密码必须有大小写的字母和至少一个数字。</li>
	</ul>';

$helptxt['coppaAge'] = '这个数值可以让您限制会员的年龄，如果年龄多于设定的年龄，会员可马上登录。
	在注册时会员必须提供年龄，如果年龄太小，您可以选择马上拒绝注册，或等待审核。
	如果输入 0 表示不限制年龄。';
$helptxt['coppaType'] = '如果使用年龄限制的功能，这里的设定可以让您选择对年龄过小的会员所进行的动作，有两个选择：
	<ul>
		<li>
			<strong>马上拒绝注册：</strong><br />
				年龄太小会马上被拒绝注册。<br />
		</li><li>
			<strong>需要监护人认可</strong><br />
				任何年龄太小的会员需要监护人的认可才能注册，注册会标示为等待认可。之后论坛会显示认可的表单。
				会员必须请监护人认可后将表单寄回或传真给管理员。
		</li>
	</ul>';
$helptxt['coppaPost'] = '这里的栏位必须填写如果论坛有限制会员的年龄。资料会显示给年龄过小的会员，会员必须要监护人的认可才能注册完成。至少需要提供地址或传真号码的资料。';

$helptxt['allow_hideOnline'] = '允许使用此项功能可让会员隐藏自己, 只有管理员才能看到他们. 如果不允许, 只有版主才能隐藏上线资料.';
$helptxt['make_email_viewable'] = 'If this option is enabled instead of users email addresses being hidden to normal members and guests they will be publicly viewable on the forum. Enabling this will put your users at greater risk of being victims of spam as a result of email harvesters visiting your forum. Note this setting does not override the user setting for hiding their email address from users. Enabling this setting is <strong>not</strong> recommended.';
$helptxt['meta_keywords'] = 'These keywords are sent in the output of every page to indicate to search engines (etc) the key content of your site. They should be a comma seperated list of words, and should not use HTML. If this is left blank the default set is sent. As means of an example the default set is:<br /><div class="smalltext">&quot;PHP, MySQL, bulletin, board, free, open, source, smf, simple, machines, forum&quot;</div>';

$helptxt['latest_support'] = '这里会显示您伺服器常发生问题及错误, 但是不会被纪录下来.<br /><br />如果显示 &quot;撷取维护资料...&quot;, 表示你无法连接到 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = '这里会显示最评价高的外挂及软件, 还有安装方法.<br /><br />如果未显示任何东西表示你无法连接到 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = '这里会显示 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> 的最新及最受欢迎的布景. 如果未显示任何东西表示您无法连接到 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = '因为安全问题, 您问题的答案 (以及密码) 都是用 SMF 的方法来加密. SMF 有办法确认您的身分如果您提供正确的答案, 但是从不会显示您的答案或密码.';
$helptxt['moderator_why_missing'] = '您必须在 <a href="javascript:window.open(\'%1$s?action=manageboards\'); self.close();">版块管理介面</a> 选择版主。';

$helptxt['permissions'] = '权限页面允许你设定组群所能做的事.<br /><br />你可以从选单来更改权限, 然后套用到版块.';
$helptxt['permissions_board'] = '如果版块的设定值是 \'全区性,\' 表示这个版块无特别的权限.  \'区域性\' 表示版块有自己的权限 - 跟全区性不同. 如果有些版块的权限跟别区不同, 您可以用区域性设定, 这样您就不用一个版块一个版块设定.';
$helptxt['permissions_quickgroups'] = '您可以用 &quot;默认&quot; 权限 - 普通表示 \'无特别权限\', 限制表示 \'访客的权限\', 版主表示 \'版主的权限\', 及 \'维修权限\' 表示跟版主接近的权限.';
$helptxt['permissions_deny'] = '停用的权限会让会员无法使用某种功能。您可以新增一个群组，给它停用的权限，然后把将会员加入到那个群组。<br /><br />记住，停用的权限会完全禁止会员使用某种功能，不管会员是不是属于其它的群组。';
$helptxt['permissions_postgroups'] = '开启依帖子数的群组可以让您依照会员的帖子数来改变会员的权限。帖子数的权限会 <em>加在</em> 特殊群组的权限内。';
$helptxt['membergroup_guests'] = '访客的群组是任何未登录的使用者。';
$helptxt['membergroup_regular_members'] = '普通会员是已登录的会员，但是不属于任何特殊群组。';
$helptxt['membergroup_administrator'] = '管理员可以管理任何版块和任何设定。您不能改变管理员的权限。';
$helptxt['membergroup_moderator'] = '版主的群组是特殊群组。它的权限只有在<em>版主可管理的版块才有效</em>。在其他版块就跟其他会员相同。';
$helptxt['membergroups'] = 'SMF的论坛使用两种的会员群组, 他们是:
	<ul>
		<li><strong>特殊群组:</strong>特殊群组是版主必须指定的会员群组. 如要加入某位会员进入特殊群组, 请到会员的个人资料里的 &quot;帐号设定&quot; 里面.
		<li><strong>帖子群组:</strong>帖子群组是以会员的帖子数来类别的群组.
	</ul>';

$helptxt['calendar_how_edit'] = '您可以点名称旁的红色 (*) 来修改事件.';

$helptxt['maintenance_backup'] = '这里您可以备份帖子, 设定, 会员资料, 及其他消息.<br /><br />建议您作好防御措施, 要时常备份以免无法修复论坛的错误.';
$helptxt['maintenance_rot'] = '这个功能会<strong>完全地</strong>并且<strong>无法回复地</strong>移除旧的主题。强烈建议您执行之前先备份, 以防止您移除您想保留的帖子。<br /><br />使用这个功能必须谨慎小心。';
$helptxt['maintenance_members'] = 'This allows you to <strong>completely</strong> and <strong>irrevocably</strong> remove member accounts from your forum.  It is <strong>highly</strong> recommended that you try to make a backup first, just in case you remove something you didn\'t mean to.<br /><br />Use this option with care.';

$helptxt['avatar_server_stored'] = 'This allows your members to pick from avatars stored on your server itself.  They are, generally, in the same place as SMF under the avatars folder.<br />As a tip, if you create directories in that folder, you can make &quot;categories&quot; of avatars.';
$helptxt['avatar_external'] = 'With this enabled, your members can type in a URL to their own avatar.  The downside of this is that, in some cases, they may use avatars that are overly large or portray images you don\'t want on your forum.';
$helptxt['avatar_download_external'] = '当勾选这个选项，会员可以提供头像的网址。如果图片可正常显示，它会以上传头想表示。';
$helptxt['avatar_upload'] = 'This option is much like &quot;Allow members to select an external avatar&quot;, except that you have better control over the avatars, a better time resizing them, and your members do not have to have somewhere to put avatars.<br /><br />However, the downside is that it can take a lot of space on your server.';
$helptxt['avatar_download_png'] = 'PNGs 档通常较大, 但是压缩品质较好. 如果您不允许 PNG 档, 图档会使用 JPEG. JPEG 档较小但是品质较差.';

$helptxt['disableHostnameLookup'] = '这项禁止使用搜索服务器名称, 但是有些伺服器会变慢. 可能会让您禁止用户的方法较无作用.';

$helptxt['search_weight_frequency'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会计算符合的帖子的数量，然后除于主题内的帖子数。';
$helptxt['search_weight_age'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会找主题内最后一篇帖子的日期。越新的日期，分数越高。';
$helptxt['search_weight_length'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会计算主题的帖子数量。越多帖子的主题，分数越高。';
$helptxt['search_weight_subject'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会在主题的标题内找搜寻字。';
$helptxt['search_weight_first_message'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会在主题内的第一篇帖子内找搜寻字。';
$helptxt['search_weight_sticky'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会看主题是不是顶置主题，如果是，它的分数越高。';
$helptxt['search'] = '这里可以改变搜寻功能的设定。';
$helptxt['search_why_use_index'] = '搜寻索引会改善论坛的搜寻速度。特别是当帖子数越来越多，不用索引会让您的搜寻和资料库速度变慢。如果您的论坛多于 50.000 篇帖子，建议您建立搜寻索引。<br /><br />注意搜寻索引会占较大空间。Fulltext 索引是 MySQL 内建的索引功能。它占的空间比较小 (大概跟帖子的资料表相同)，但是很多字不包括在索引内，速度也比较慢。自设的索引通常比较大 (依设定而定可能会大于帖子的资料表的三倍)，但是它比 Fulltext 还快，也较稳定。';

$helptxt['see_admin_ip'] = 'IP位址可让版主追踪会员的动作, 但是有些IP经常改变. 会员也可以看到自己的IP.';
$helptxt['see_member_ip'] = '只有会员自己和版主可以看到IP. 其他的会员无法看到您的IP, 您也不能看到其他会员的IP, 除非您是管理员.';
$helptxt['whytwoip'] = 'SMF uses various methods to detect user IP addresses. Usually these two methods result in the same address but in some cases more than one address may be detected. In this case SMF logs both addresses, and uses them both for ban checks (etc). You can click on either address to track that IP and ban if necessary.';

$helptxt['ban_cannot_post'] = '\'不能发布\' 的限制会禁止被阻挡的会员进行发言。他们将不能发布主题，回覆帖子，寄送私人讯息或参与投票。不过他们还是可以阅读私人讯息和帖子。<br /><br />论坛会显示警告讯息给这些会员。';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<strong>帖子设定</strong><br />
			改变发布帖子和显示帖子的设定。这里也可以让您开启拼字功能。
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			开启 BBC 的功能。也可以选择允许和不允许的 BBC。
		</li><li>
			<strong>封锁的字元</strong>
			为了避免论坛出现不正当的发言，您可以将某些字封锁不让会员使用。这个功能可以让您将封锁的字改成其它的显示方法。
		</li><li>
			<strong>主题设定</strong>
			改变主题的设定。您可以改变每页显示的主题数，使用顶至主题，或是热门主题的数量等等。
		</li>
	</ul>';
$helptxt['spider_group'] = 'By selecting a restrictive group, when a guest is detected as a search crawler it will automatically be assigned any &quot;deny&quot; deny permissions of this group in addition to the normal permissions of a guest. You can use this to provide lesser access to a search engine than you would a normal guest. You might for example wish to create a new group called &quot;Spiders&quot; and select that here. You could then deny permission for that group to view profiles to stop spiders indexing your members profiles.<br />Note: Spider detection is not perfect and can be simulated by users so this feature is not guaranteed to restrict content only to those search engines you have added.';
$helptxt['show_spider_online'] = 'This setting allows you to select whether spiders should be listed in the who\'s online list on the board index and &quot;Who\'s Online&quot; page. Options are:
	<ul class="normallist">
		<li>
			<strong>Not at All</strong><br />
			Spiders will simply appear as guests to all users.
		</li><li>
			<strong>Show Spider Quantity</strong><br />
			The Board Index will display the number of spiders currently visiting the forum.
		</li><li>
			<strong>Show Spider Names</strong><br />
			Each spider name will be revealed, so users can see how many of each spider is currently visiting the forum - this takes effect in both the Board Index and Who\'s Online page.
		</li><li>
			<strong>Show Spider Names - Admin Only</strong><br />
			As above except only Administrators can see spider status - to all other users spiders appear as guests.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Choose the index of the birthday email message to use.  A preview will be shown in the Email Subject and Email Body fields.<br /><strong>Note:</strong> Setting this option does not automatically enable birthday emails.  To enable birthday emails use the <a href="%1$s?action=admin;area=maintain;sa=tasks;%3$s=%2$s" target="_blank" class="new_win">Scheduled Tasks</a> page and enable the birthday email task.';
$helptxt['pm_bcc'] = 'When sending a personal message you can choose to add a recipient as BCC or &quot;Blind Carbon Copy&quot;. BCC recipients do not have their identities revealed to other recipients of the message.';

$helptxt['move_topics_maintenance'] = 'This will allow you to move all the posts from one board to another board.';
$helptxt['maintain_reattribute_posts'] = 'You can use this function to attribute guest posts on your board to a registered member. This is useful if, for example, a user deleted their account and changed their mind and wished to have their old posts associated with their account.';
$helptxt['chmod_flags'] = 'You can manually set the permissions you wish to set the selected files to. To do this enter the chmod value as a numeric (octet) value. Note - these flags will have no effect on Microsoft Windows operating systems.';

$helptxt['postmod'] = 'This section allows members of the moderation team (with sufficient permissions) to approve any posts and topics before they are shown.';

$helptxt['field_show_enclosed'] = 'Encloses the user input between some text or html.  This will allow you to add more instant message providers, images or an embed etc. For example:<br /><br />
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />
		Note that you can use the following variables:<br />
		<ul class="normallist">
			<li>{INPUT} - The input specified by the user.</li>
			<li>{SCRIPTURL} - Web address of forum.</li>
			<li>{IMAGES_URL} - Url to images folder in the users current theme.</li>
			<li>{DEFAULT_IMAGES_URL} - Url to the images folder in the default theme.</li>
		</ul>';

$helptxt['custom_mask'] = '输入遮罩对于论坛的安全性很重要。验证会员输入的内容, 以确保是合法字串。下面是正规表式的简单说明。<br /><br />
	<div class="smalltext" style="margin: 0 2em">
		&quot;[A-Za-z]+&quot; - Match all upper and lower case alphabet characters.<br />
		&quot;[0-9]+&quot; - Match all numeric characters.<br />
		&quot;[A-Za-z0-9]{7}&quot; - Match all upper and lower case alphabet and numeric characters seven times.<br />
		&quot;[^0-9]?&quot; - Forbid any number from being matched.<br />
		&quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - Only allow 3 or 6 character hexcodes.<br />
	</div><br /><br />
	Additionally, special metacharacters ?+*^$ and {xx} can be defined.
	<div class="smalltext" style="margin: 0 2em">
		? - None or one match of previous expression.<br />
		+ - One or more of previous expression.<br />
		* - None or more of previous expression.<br />
		{xx} - An exact number from previous expression.<br />
		{xx,} - An exact number or more from previous expression.<br />
		{,xx} - An exact number or less from previous expression.<br />
		{xx,yy} - An exact match between the two numbers from previous expression.<br />
		^ - Start of string.<br />
		$ - End of string.<br />
		\\\\ - Escapes the next character.<br />
	</div><br /><br />
	更多资讯和技巧可以在网路上找得到。';

?>