<div id="container">
	<a name="top" id="top"></a>
	<div id="header">
		<header>
			<div class="wrapper">
				<a id="logo" href="{$mybb->settings['bburl']}/index.php"><img src="{$theme['logo']}" alt="{$mybb->settings['bbname']}" title="{$mybb->settings['bbname']}" /></a>
				<ul class="menu top_links">
					{$menu_portal}
					{$menu_search}
					{$menu_memberlist}
					{$menu_calendar}
					<li><a href="{$mybb->settings['bburl']}/misc.php?action=help" class="help">{$lang->toplinks_help}</a></li>
				</ul>
			</div>
		</header>
		<footer id="panel">
			<div class="upper">
				<div class="wrapper">
					{$quicksearch}
					{$welcomeblock}
				<!-- </div> in header_welcomeblock_member and header_welcomeblock_guest -->
			<!-- </div> in header_welcomeblock_member and header_welcomeblock_guest -->
		</footer>
	</div>
	<div id="content">
		<div class="wrapper">
			{$pm_notice}
			{$bannedwarning}
			{$bbclosedwarning}
			{$unreadreports}
			{$pending_joinrequests}
			{$awaitingusers}
			<navigation>
			<br />