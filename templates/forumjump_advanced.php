<div class="jump-box">
	<form action="forumdisplay.php" method="get">
	<span class="smalltext">{$lang->forumjump}</span>
	<select name="{$name}" class="forumjump">
	<option value="-4">{$lang->forumjump_pms}</option>
	<option value="-3">{$lang->forumjump_usercp}</option>
	<option value="-5">{$lang->forumjump_wol}</option>
	<option value="-2">{$lang->forumjump_search}</option>
	<option value="-1">{$lang->forumjump_home}</option>
	{$forumjumpbits}
	</select>
	{$gobutton}
	</form>
	<script type="text/javascript">
	$(".forumjump").change(function() {
		var option = $(this).val();

		if(option < 0)
		{
			window.location = 'forumdisplay.php?fid='+option;
		}
		else
		{
			window.location = {$forum_link};
		}
	});
	</script>
</div>