						<form action="{$mybb->settings['bburl']}/search.php" method="post">
						<fieldset id="search">
							<input name="keywords" type="text" class="textbox" />
							<input value="{$lang->search_button}" type="submit" class="button" />
							<input type="hidden" name="action" value="do_search" />
							<input type="hidden" name="postthread" value="1" />
						</fieldset>
						</form>