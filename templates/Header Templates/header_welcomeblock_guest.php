						<!-- Continuation of div(class="upper") as opened in the header template -->
						<span class="welcome">{$lang->welcome_guest} <a href="{$mybb->settings['bburl']}/member.php?action=login" onclick="$('#quick_login').modal({ fadeDuration: 250, keepelement: true, zIndex: (typeof modal_zindex !== 'undefined' ? modal_zindex : 9999) }); return false;" class="login">{$lang->welcome_login}</a> <a href="{$mybb->settings['bburl']}/member.php?action=register" class="register">{$lang->welcome_register}</a></span>
					</div>
				</div>
				<div class="modal" id="quick_login" style="display: none;">
					<form method="post" action="{$mybb->settings['bburl']}/member.php">
						<input name="action" type="hidden" value="do_login" />
						<input name="url" type="hidden" value="" />
						<input name="quick_login" type="hidden" value="1" />
						<table width="100%" cellspacing="{$theme['borderwidth']}" cellpadding="{$theme['tablespace']}" border="0" class="tborder">
							<tr>
								<td class="thead" colspan="2"><strong>{$lang->login}</strong></td>
							</tr>
							<tr>
								<td class="trow1" width="25%"><strong>{$login_username}</strong></td>
								<td class="trow1"><input name="quick_username" id="quick_login_username" type="text" value="" class="textbox initial_focus" /></td>
							</tr>
							<tr>
								<td class="trow2"><strong>{$lang->password}</strong></td>
								<td class="trow2">
									<input name="quick_password" id="quick_login_password" type="password" value="" class="textbox" /> <a href="{$mybb->settings['bburl']}/member.php?action=lostpw" class="lost_password">{$lang->lost_password}</a>
								</td>
							</tr>
							<tr>
								<td class="trow1">&nbsp;</td>
								<td class="trow1 remember_me">
									<input name="quick_remember" id="quick_login_remember" type="checkbox" value="yes" class="checkbox" checked="checked" />
									<label for="quick_login_remember">{$lang->remember_me}</label>
								</td>
							</tr>
							<tr>
								<td class="trow2" colspan="2">
									<div align="center"><input name="submit" type="submit" class="button" value="{$lang->login}" /></div>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<script type="text/javascript">
					$("#quick_login input[name='url']").val($(location).attr('href'));
				</script>