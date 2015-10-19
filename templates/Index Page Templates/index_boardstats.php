<table border="0" cellspacing="{$theme['borderwidth']}" cellpadding="{$theme['tablespace']}" class="tborder">
<thead>
<tr>
<td class="thead{$collapsedthead['boardstats']}">
<div class="expcolimage"><img src="{$theme['imgdir']}/collapse{$collapsedimg['boardstats']}.png" id="boardstats_img" class="expander" alt="[-]" title="[-]" /></div>
<div><strong>{$lang->boardstats}</strong></div>
</td>
</tr>
</thead>
<tbody style="{$collapsed['boardstats_e']}" id="boardstats_e">
{$whosonline}
{$birthdays}
{$forumstats}
<tr>
	<td class="tfoot" style="text-align: right">
		<span class="smalltext">
			{$logoutlink}
			<a href="misc.php?action=markread{$post_code_string}">{$lang->markread}</a> |
			<a href="showteam.php">{$lang->forumteam}</a>
			{$statspage}
		</span>
	</td>
</tr>
</tbody>
</table>
<br />