<html>
<head>
<title>{$thread['subject']}</title>
{$headerinclude}
<script type="text/javascript">
<!--
	var quickdelete_confirm = "{$lang->quickdelete_confirm}";
	var quickrestore_confirm = "{$lang->quickrestore_confirm}";
	var allowEditReason = "{$mybb->settings['alloweditreason']}";
	lang.save_changes = "{$lang->save_changes}";
	lang.cancel_edit = "{$lang->cancel_edit}";
	lang.quick_edit_update_error = "{$lang->quick_edit_update_error}";
	lang.quick_reply_post_error = "{$lang->quick_reply_post_error}";
	lang.quick_delete_error = "{$lang->quick_delete_error}";
	lang.quick_delete_success = "{$lang->quick_delete_success}";
	lang.quick_delete_thread_success = "{$lang->quick_delete_thread_success}";
	lang.quick_restore_error = "{$lang->quick_restore_error}";
	lang.quick_restore_success = "{$lang->quick_restore_success}";
	lang.editreason = "{$lang->postbit_editreason}";
// -->
</script>
<!-- jeditable (jquery) -->
<script type="text/javascript" src="{$mybb->asset_url}/jscripts/report.js?ver=1800"></script>
<script src="{$mybb->asset_url}/jscripts/jeditable/jeditable.min.js"></script>
<script type="text/javascript" src="{$mybb->asset_url}/jscripts/thread.js?ver=1800"></script>
</head>
<body>
	{$header}
	{$threadnotesbox}
	{$pollbox}
	{$multipage}
	<div class="float_right">
		{$newreply}
	</div>
	{$ratethread}
	<table border="0" cellspacing="{$theme['borderwidth']}" cellpadding="{$theme['tablespace']}" class="tborder tfixed clear">
		<tr>
			<td class="thead">
				<div class="float_right">
					<span class="smalltext"><strong><a href="javascript:;" id="thread_modes">{$lang->thread_modes}</a>{$threadnoteslink}</strong></span>
				</div>
				<div>
					<strong>{$thread['threadprefix']}{$thread['subject']}</strong>
				</div>
			</td>
		</tr>
<tr><td id="posts_container">
	<div id="posts">
		{$posts}
	</div>
</td></tr>
		<tr>
			<td class="tfoot">
				{$search_thread}
				<div>
					<strong>&laquo; <a href="{$next_oldest_link}">{$lang->next_oldest}</a> | <a href="{$next_newest_link}">{$lang->next_newest}</a> &raquo;</strong>
				</div>
			</td>
		</tr>
	</table>
	{$multipage}
	<div style="padding-top: 4px;" class="float_right">
		{$newreply}
	</div>
	<br class="clear" />
	{$quickreply}
	{$threadexbox}
	{$similarthreads}
	<br />
	<div class="float_left">
		<ul class="thread_tools">
			<li class="printable"><a href="printthread.php?tid={$tid}">{$lang->view_printable}</a></li>
			{$sendthread}
			<li class="subscription_{$add_remove_subscription}"><a href="usercp2.php?action={$add_remove_subscription}subscription&amp;tid={$tid}&amp;my_post_key={$mybb->post_code}">{$add_remove_subscription_text}</a></li>
			{$addpoll}
		</ul>
	</div>

	<div class="float_right" style="text-align: right;">
		{$moderationoptions}
		{$forumjump}
	</div>
	<br class="clear" />
	{$usersbrowsing}
	{$footer}
	<div id="thread_modes_popup" class="popup_menu" style="display: none;"><div class="popup_item_container"><a href="showthread.php?mode=linear&amp;tid={$tid}&amp;pid={$pid}#pid{$pid}" class="popup_item">{$lang->linear}</a></div><div class="popup_item_container"><a href="showthread.php?mode=threaded&amp;tid={$tid}&amp;pid={$pid}#pid{$pid}" class="popup_item">{$lang->threaded}</a></div></div>
	<script type="text/javascript">
	// <!--
		if(use_xmlhttprequest == "1")
		{
			$("#thread_modes").popupMenu();
		}
	// -->
	</script>
	<script type="text/javascript">
		$(".author_avatar img").error(function () {
			$(this).unbind("error").closest('.author_avatar').remove();
		});
	</script>
</body>
</html>