<debugstuff>
	</div>
</div>
<div id="footer">
	<div class="upper">
		<div class="wrapper">
			{$lang_select}
			{$theme_select}
			<ul class="menu bottom_links">
				{$contact_us}
				<li><a href="{$mybb->settings['homeurl']}">{$mybb->settings['homename']}</a></li>
				<li><a href="#top">{$lang->bottomlinks_returntop}</a></li>
				<li><a href="<archive_url>">{$lang->bottomlinks_litemode}</a></li>
				<li><a href="{$mybb->settings['bburl']}/misc.php?action=syndication">{$lang->bottomlinks_syndication}</a></li>
			</ul>
		</div>
	</div>
	<div class="lower">
		<div class="wrapper">
			<span id="current_time">{$lang->welcome_current_time}</span>
			<span id="copyright">
				<!-- MyBB is free software developed and maintained by a volunteer community.
					It would be much appreciated by the MyBB Group if you left the full copyright and "powered by" notice intact,
					to show your support for MyBB.  If you choose to remove or modify the copyright below,
					you may be refused support on the MyBB Community Forums.

					This is free software, support us and we'll support you. -->
				{$lang->powered_by} <a href="http://www.mybb.com" target="_blank">MyBB{$mybbversion}</a>, &copy; 2002-{$copy_year} <a href="http://www.mybb.com" target="_blank">MyBB Group</a>.
				<!-- End powered by -->
			</span>
		</div>
	</div>
</div>
<!-- The following piece of code allows MyBB to run scheduled tasks. DO NOT REMOVE -->{$task_image}<!-- End task image code -->
{$auto_dst_detection}
</div>