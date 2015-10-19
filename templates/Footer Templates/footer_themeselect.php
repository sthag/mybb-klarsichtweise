<div class="theme">
<form method="{$theme_redirect_url['form_method']}" action="{$theme_redirect_url['location']}" id="theme_select">
	{$theme_redirect_url['form_html']}
	<input type="hidden" name="my_post_key" value="{$mybb->post_code}" />
	{$theme_options}
	{$gobutton}
</form>
</div>