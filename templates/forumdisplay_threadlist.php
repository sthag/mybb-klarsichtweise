{$multipage}
{$newthread}
<table border="0" cellspacing="{$theme['borderwidth']}" cellpadding="{$theme['tablespace']}" class="tborder clear">
	<tr>
		<td class="thead" colspan="{$colspan}">
			<div class="float_right">
				<span class="smalltext"><strong><a href="misc.php?action=markread&amp;fid={$fid}{$post_code_string}">{$lang->markforum_read}</a> | <a href="usercp2.php?action={$add_remove_subscription}subscription&amp;type=forum&amp;fid={$fid}&amp;my_post_key={$mybb->post_code}">{$add_remove_subscription_text}</a>{$clearstoredpass}</strong></span>
			</div>
			<div>
				<strong>{$foruminfo['name']}</strong>
			</div>
		</td>
	</tr>
	<tr>
		<td class="tcat" colspan="3" width="66%"><span class="smalltext"><strong><a href="{$sorturl}&amp;sortby=subject&amp;order=asc">{$lang->thread}</a> {$orderarrow['subject']} / <a href="{$sorturl}&amp;sortby=starter&amp;order=asc">{$lang->author}</a> {$orderarrow['starter']}</strong></span></td>
		<td class="tcat" align="center" width="7%"><span class="smalltext"><strong><a href="{$sorturl}&amp;sortby=replies&amp;order=desc">{$lang->replies}</a> {$orderarrow['replies']}</strong></span></td>
		<td class="tcat" align="center" width="7%"><span class="smalltext"><strong><a href="{$sorturl}&amp;sortby=views&amp;order=desc">{$lang->views}</a> {$orderarrow['views']}</strong></span></td>
		{$ratingcol}
		<td class="tcat" align="right" width="20%"><span class="smalltext"><strong><a href="{$sorturl}&amp;sortby=lastpost&amp;order=desc">{$lang->lastpost}</a> {$orderarrow['lastpost']}</strong></span></td>
		{$inlinemodcol}
	</tr>
	{$selectall}
	{$announcementlist}
	{$threads}
	<tr>
		<td class="tfoot" align="right" colspan="{$colspan}">
			<form action="forumdisplay.php" method="get">
				<input type="hidden" name="selectall" value="" />
				<input type="hidden" name="fid" value="{$fid}" />
				<select name="sortby">
					<option value="subject" {$sortsel['subject']}>{$lang->sort_by_subject}</option>
					<option value="lastpost" {$sortsel['lastpost']}>{$lang->sort_by_lastpost}</option>
					<option value="starter" {$sortsel['starter']}>{$lang->sort_by_starter}</option>
					<option value="started" {$sortsel['started']}>{$lang->sort_by_started}</option>
					{$ratingsort}
					<option value="replies" {$sortsel['replies']}>{$lang->sort_by_replies}</option>
					<option value="views" {$sortsel['views']}>{$lang->sort_by_views}</option>
				</select>
				<select name="order">
					<option value="asc" {$ordersel['asc']}>{$lang->sort_order_asc}</option>
					<option value="desc" {$ordersel['desc']}>{$lang->sort_order_desc}</option>
				</select>
				<select name="datecut">
					<option value="1" {$datecutsel['1']}>{$lang->datelimit_1day}</option>
					<option value="5" {$datecutsel['5']}>{$lang->datelimit_5days}</option>
					<option value="10" {$datecutsel['10']}>{$lang->datelimit_10days}</option>
					<option value="20" {$datecutsel['20']}>{$lang->datelimit_20days}</option>
					<option value="50" {$datecutsel['50']}>{$lang->datelimit_50days}</option>
					<option value="75" {$datecutsel['75']}>{$lang->datelimit_75days}</option>
					<option value="100" {$datecutsel['100']}>{$lang->datelimit_100days}</option>
					<option value="365" {$datecutsel['365']}>{$lang->datelimit_lastyear}</option>
					<option value="9999" {$datecutsel['9999']}>{$lang->datelimit_beginning}</option>
				</select>
				{$prefixselect}
				{$gobutton}
			</form>
		</td>
	</tr>
</table>
{$newthread}
{$multipage}
<div class="right-box action-box stopper">
	{$inlinemod}
	{$searchforum}
	{$forumjump}
</div>
{$inline_edit_js}
<div class="left-box legend-box smalltext">
	<dl class="thread_legend float_left">
		<dd><span class="thread_status newfolder" title="{$lang->new_thread}">&nbsp;</span> {$lang->new_thread}</dd>
		<dd><span class="thread_status newhotfolder" title="{$lang->new_hot_thread}">&nbsp;</span> {$lang->new_hot_thread}</dd>
	</dl>
	<dl class="thread_legend float_left">
		<dd><span class="thread_status hotfolder" title="{$lang->hot_thread}">&nbsp;</span> {$lang->hot_thread}</dd>
		<dd><span class="thread_status folder" title="{$lang->no_new_thread}">&nbsp;</span> {$lang->no_new_thread}</dd>
	</dl>
	<dl class="thread_legend float_left">
		<dd><span class="thread_status dot_folder" title="{$lang->posts_by_you}">&nbsp;</span> {$lang->posts_by_you}</dd>
		<dd><span class="thread_status lockfolder" title="{$lang->locked_thread}">&nbsp;</span> {$lang->locked_thread}</dd>
	</dl>
</div>