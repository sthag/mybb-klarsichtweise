<div style="margin-top: 6px; padding-right: 10px;" class="float_right">
		<script type="text/javascript">
		<!--
			lang.ratings_update_error = "{$lang->ratings_update_error}";
		// -->
		</script>
		<script type="text/javascript" src="{$mybb->asset_url}/jscripts/rating.js?ver=1800"></script>
		<strong class="float_left" style="padding-right: 10px;">{$lang->thread_rating}</strong>
		<div class="inline_rating">
			<ul class="star_rating{$not_rated}" id="rating_thread_{$thread['tid']}">
				<li style="width: {$thread['width']}%" class="current_rating" id="current_rating_{$thread['tid']}">{$ratingvotesav}</li>
				<li><a class="one_star" title="{$lang->one_star}" href="./ratethread.php?tid={$thread['tid']}&amp;rating=1&amp;my_post_key={$mybb->post_code}">1</a></li>
				<li><a class="two_stars" title="{$lang->two_stars}" href="./ratethread.php?tid={$thread['tid']}&amp;rating=2&amp;my_post_key={$mybb->post_code}">2</a></li>
				<li><a class="three_stars" title="{$lang->three_stars}" href="./ratethread.php?tid={$thread['tid']}&amp;rating=3&amp;my_post_key={$mybb->post_code}">3</a></li>
				<li><a class="four_stars" title="{$lang->four_stars}" href="./ratethread.php?tid={$thread['tid']}&amp;rating=4&amp;my_post_key={$mybb->post_code}">4</a></li>
				<li><a class="five_stars" title="{$lang->five_stars}" href="./ratethread.php?tid={$thread['tid']}&amp;rating=5&amp;my_post_key={$mybb->post_code}">5</a></li>
			</ul>
		</div>
</div>