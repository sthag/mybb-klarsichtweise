<html>
<head>
<title>{$mybb->settings['bbname']}</title>
{$headerinclude}
<script type="text/javascript">
<!--
	lang.no_new_posts = "{$lang->no_new_posts}";
	lang.click_mark_read = "{$lang->click_mark_read}";
// -->
</script>
</head>
<body>
{$header}
{$forums}
{$boardstats}

<dl class="forum_legend smalltext">
	<dt><span class="forum_status forum_on" title="{$lang->new_posts}"></span></dt>
	<dd>{$lang->new_posts}</dd>

	<dt><span class="forum_status forum_off" title="{$lang->no_new_posts}"></span></dt>
	<dd>{$lang->no_new_posts}</dd>

	<dt><span class="forum_status forum_offlock" title="{$lang->forum_locked}"></span></dt>
	<dd>{$lang->forum_locked}</dd>

	<dt><span class="forum_status forum_offlink" title="{$lang->forum_redirect}"></span></dt>
	<dd>{$lang->forum_redirect}</dd>
</dl>
<br class="clear" />
{$footer}
</body>
</html>