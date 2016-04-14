<!-- Continuation of div(class="upper") as opened in the header template -->
	<span class="welcome">{$lang->welcome_back} <a href="{$mybb->settings['bburl']}/member.php?action=logout&amp;logoutkey={$mybb->user['logoutkey']}" class="logout">{$lang->welcome_logout}</a></span>
	</div>
</div>
<div class="lower">
	<div class="wrapper">
		<ul class="menu panel_links">
			<li><a href="{$mybb->settings['bburl']}/usercp.php" class="usercp"><span class="text-icon"></span>{$lang->welcome_usercp}</a></li>
			{$modcplink}
			{$admincplink}
		</ul>
		<ul class="menu user_links">
			<li><a href="#" onclick="MyBB.popupWindow('{$mybb->settings['bburl']}/misc.php?action=buddypopup&modal=1', null, true); return false;">{$lang->welcome_open_buddy_list}</a></li>
			<li><a href="{$mybb->settings['bburl']}/search.php?action=getnew">{$lang->welcome_newposts}</a></li>
			<li><a href="{$mybb->settings['bburl']}/search.php?action=getdaily">{$lang->welcome_todaysposts}</a></li>
			<li><a href="{$mybb->settings['bburl']}/private.php">{$lang->welcome_pms}</a> {$lang->welcome_pms_usage}</li>
		</ul>
	</div>
<!--	<br class="clear" />-->
</div>