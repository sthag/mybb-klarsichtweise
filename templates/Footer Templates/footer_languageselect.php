<div class="language">
<form method="{$lang_redirect_url['form_method']}" action="{$lang_redirect_url['location']}" id="lang_select">
	{$lang_redirect_url['form_html']}
	<input type="hidden" name="my_post_key" value="{$mybb->post_code}" />
	<select name="language" onchange="MyBB.changeLanguage();">
		<optgroup label="{$lang->select_language}">
			{$lang_options}
		</optgroup>
	</select>
	{$gobutton}
</form>
</div>