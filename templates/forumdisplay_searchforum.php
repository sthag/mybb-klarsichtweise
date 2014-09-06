<div class="search-forum-box">
	<form action="search.php" method="post">
		<span class="smalltext">{$lang->search_forum}</span>
		<input type="text" class="textbox" name="keywords" /> {$gobutton}
		<input type="hidden" name="action" value="do_search" />
		<input type="hidden" name="forums" value="{$fid}" />
		<input type="hidden" name="postthread" value="1" />
	</form>
</div>