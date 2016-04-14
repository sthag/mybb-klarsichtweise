<div id="container">
	<a name="top" id="top"></a>
	<div id="header">
		<header>
			<a id="logo" href="{$mybb->settings['bburl']}/index.php"><img src="{$theme['logo']}" alt="{$mybb->settings['bbname']}" title="{$mybb->settings['bbname']}" /></a>
			<ul class="menu top_links">
				{$menu_portal}
				{$menu_search}
				{$menu_memberlist}
				{$menu_calendar}
				<li>
					<a href="stats.php" class="statistics">
						<span class="text-icon" alt="Statistics Icon"></span><br />
						Statistics
					</a>
				</li>
				<li>
					<a href="https://tmkrth.de/forum/images/smilies/smiley-index.htm" target="_blank" class="smiley">
						<span class="text-icon" alt="Smiley Icon"></span><br />
						Smileys
					</a>
				</li>
				<li>
					<a href="{$mybb->settings['bburl']}/misc.php?action=help" class="help">
						<span class="text-icon" alt="Help Icon"></span><br />
						{$lang->toplinks_help}
					</a>
				</li>
			</ul>
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