<?php
add_action('admin_menu', 'wppv_setup_menu');

function wppv_setup_menu() {
	add_submenu_page('options-general.php','WP PostVoting','WP PostVoting','manage_options', __FILE__,'wppv_settings_page');
}

function wppv_settings_page() {
	$wppv_onoff	= get_option('wppv_onoff');
	$wppv_label	= get_option('wppv_label');
	$wppv_mouse_over = get_option('wppv_mouse_over');
	$wppv_voted	= get_option('wppv_voted');
	$wppv_thanks = get_option('wppv_thanks');
	$wppv_refusal = get_option('wppv_refusal');
	$wppv_top = get_option('wppv_top');
	$wppv_bottom = get_option('wppv_bottom');
	$wppv_postonly = get_option('wppv_postonly');
	$wppv_login = get_option('wppv_login');
	$wppv_postnum = get_option('wppv_postnum');
?>
	<div class="wrap">
		<h2 style="font-size:20px;font-weight:700; padding:5px;">WP PostVoting settings</h2>
		<?php if($_POST['wppv_process'] == "process") { ?>
			<div class="updated below-h2" id="message" style="width:62%;float:left;margin:5px;"><p>WP PostVoting settings updated successfully</p></div>
		<?php } ?>
		<div id="settingsform" style="width:65%; float:left">
			<form id='wppv_form' method="post" action="">
			<input type="hidden" name="wppv_process" value="process" />
			<div style="background:none;display:block;float:left;margin:5px;clear:left;width:99%;">
			<h3>PostVoting settings</h3>
			<div class="inside">
				<div>
					<table class="form-table">
						<tr valign="top">
   							<th scope="row">PostVoting Active / Inactive</th>
							<td width="2%">:</td>
							<td colspan="2" width="48%">
								<Input type = 'Radio' Name ='wppv_onoff' value= 'yes' <?php if( get_option('wppv_onoff') == 'yes' ) echo 'checked';?> />Active
								<Input type = 'Radio' Name ='wppv_onoff' value= 'no' <?php if( get_option('wppv_onoff') != 'yes' ) echo 'checked';?> />Inactive
							</td>
						</tr>
						<tr valign="top">
   							<th scope="row">PostVoting default text</th>
							<td width="2%">:</td>
							<td><input type="text" value="<?php if($wppv_label) { echo $wppv_label; } else { echo 'Vote this post'; } ?>" name="wppv_label" /></td>
   						</tr>
						<tr valign="top">
   							<th scope="row">PostVoting mouse over text</th>
							<td width="2%">:</td>
							<td><input type="text" value="<?php if($wppv_mouse_over) { echo $wppv_mouse_over; } else { echo 'Vote'; } ?>" name="wppv_mouse_over" /></td>
   						</tr>
						<tr valign="top">
   							<th scope="row">Post votted text</th>
							<td width="2%">:</td>
							<td><input type="text" value="<?php if($wppv_voted) { echo $wppv_voted; } else { echo 'Voted'; } ?>" name="wppv_voted" /></td>
   						</tr>
						<tr valign="top">
   							<th scope="row">PostVoting thanks text</th>
							<td width="2%">:</td>
							<td><input type="text" value="<?php if($wppv_thanks) { echo $wppv_thanks; } else { echo 'Thank you'; } ?>" name="wppv_thanks" /></td>
   						</tr>
						<tr valign="top">
   							<th scope="row">PostVoting refusal text</th>
							<td width="2%">:</td>
							<td><input type="text" value="<?php if($wppv_refusal) { echo $wppv_refusal; } else { echo 'Only for registered user'; } ?>" name="wppv_refusal" /></td>
   						</tr>
						<tr valign="top">
   							<th scope="row">Add Button in Posts/Pages Top</th>
							<td width="2%">:</td>
							<td><input type="checkbox" name="wppv_top" value="1" <?php if($wppv_top) { ?> checked="checked"  <?php } ?> /></td>
   						</tr>
						<tr valign="top">
   							<th scope="row">Add Button in Posts/Pages Bottom</th>
							<td width="2%">:</td>
							<td><input type="checkbox" name="wppv_bottom" value="1" <?php if($wppv_bottom) { ?> checked="checked"  <?php } ?>  /></td>
   						</tr>
						<tr valign="top">
   							<th scope="row">Add Button only in Posts:</th>
							<td width="2%">:</td>
							<td><input type="checkbox" name="wppv_postonly" value="1" <?php if($wppv_postonly) { ?> checked="checked"  <?php } ?>  /></td>
   						</tr>
						<tr valign="top">
   							<th scope="row">User Must be logged in for voting:</th>
							<td width="2%">:</td>
							<td colspan="2">
								<Input type='radio' name='wppv_login' value='yes' <?php if( get_option('wppv_login') == 'yes' ) echo 'checked';?> />Yes
								<Input type='radio' Name='wppv_login' value='no' <?php if( get_option('wppv_login') != 'yes' ) echo 'checked';?> />No
							</td>
   						</tr>
						<tr valign="top">
   							<th scope="row">Number of posts to show in PostVoting statistics</th>
							<td width="2%">:</td>
							<td><input type="text" value="<?php if($wppv_postnum) { echo $wppv_postnum; } else { echo 20; } ?>" name="wppv_postnum" size="5" /></td>
   						</tr>
					</table>
				</div>
				<input type="submit" id="wppv_submit" name="wppv_submit" class="button-primary" value="<?php echo 'Save'; ?>" />
			</div>
			</div>
			</form>
		</div>

		<div style="background:none;width:30%;float:right;margin-right:1%">
			<div style="display:block;float:right;margin:5px;clear:right;width: 97%;">
				<h3>Credits</h3>
				<div class="inside">
					<p>Developer: <a href="http://facebook.com/IKIAlam">Iftekhar</a><br/>
					Website: <a href="http://www.tips4blog.com/" target="_blank">www.tips4blog.com</a></p>
				</div>
			</div>

			<div style="background:none;display:block;float:right;margin:5px;clear:right;width: 97%;">
				<h3>Plugin Info</h3>
				<div class="inside">
					<p>Price: Free!<br/>
					Version: 1.0<br/>
					Scripts: PHP + CSS + JS.<br/>
					Requires: Wordpress 3.0+<br/>
					First release: 21-Feb-2014<br/>
					Published under: <a href="http://www.gnu.org/licenses/gpl.txt">GNU General Public License</a><br/>
					<a href="http://wordpress.org/plugins/wp-postvoting/changelog/">Changelog</a><br/></p>
				</div>
			</div>
		</div>

		<div style="display:block;float:left;margin:5px;padding-top:20px;clear:left;width:75%;">
			<h2>PostVoting Statistics</h2>
			<div style="display:block;float:left;margin:5px 0 5px 0;padding-right:10px;clear:left;">
				<h3>
					<table class="form-table" width="100%" border="1" bordercolor="#007193">
       					<tr valign="top">
							<td>Total voted posts: <?php echo getPagingQuery()->found_posts; ?></td>
						</tr>
       					<tr valign="top">
							<td>Total votes count: <?php echo wppv_total_voted_posts(); ?></td>
						</tr>
					</table>
				</h3>
			</div>
			<?php
				$sn = 1;
				$the_query = getPagingQuery();
				if($the_query->have_posts()) :
			?>
					<table class="form-table" border="1" width="100%" bordercolor="#007193">
       					<thead><tr valign="top">
							<td><strong>SN</strong></td>
							<td><strong>Post ID</strong></td>
							<td><strong>Post Title</strong></td>
							<td><strong>Vote Count</strong></td>
						</tr></thead>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<tbody><tr valign="top">
							<td width="5%"><?php echo $sn; ?></td>
							<td width="10%"><?php echo get_the_ID(); ?></td>
							<td width="65%"><?php echo '<a href="'.get_permalink().'" rel="bookmark">'.wp_trim_words( get_the_title(), 12, ' ...' ).'</a>'; ?></td>
							<td width="15%"><?php echo get_post_meta(get_the_ID(), '_wppvcount', true); ?></td>
						</tr></tbody>
						<?php $sn++; endwhile; wp_reset_postdata(); ?>
   					</table>
			<?php endif; getPagingLink(); ?>
		</div>
	</div>
<?php
}
if($_POST['wppv_process'] == "process") {
	global $blog_id;
	if( isset( $_POST['wppv_onoff'] ) ) {
		update_option( 'wppv_onoff' , $_POST[ 'wppv_onoff' ] );
	}
	if( isset( $_POST['wppv_label'] ) ) {
		update_option( 'wppv_label' , $_POST[ 'wppv_label' ] );
	}
	if( isset( $_POST['wppv_mouse_over'] ) ) {
		update_option( 'wppv_mouse_over' , $_POST[ 'wppv_mouse_over' ] );
	}
	if( isset( $_POST['wppv_voted'] ) ) {
		update_option( 'wppv_voted' , $_POST[ 'wppv_voted' ] );
	}
	if( isset( $_POST['wppv_thanks'] ) ) {
		update_option( 'wppv_thanks' , $_POST[ 'wppv_thanks' ] );
	}
	if( isset( $_POST['wppv_refusal'] ) ) {
		update_option( 'wppv_refusal' , $_POST[ 'wppv_refusal' ] );
	}
	if( isset( $_POST['wppv_top'] ) ) {
		update_option( 'wppv_top' , $_POST[ 'wppv_top' ] );
	} else {
		update_option( 'wppv_top' , 0 );
	}
	if( isset( $_POST['wppv_bottom'] ) ) {
		update_option( 'wppv_bottom' , $_POST[ 'wppv_bottom' ] );
	} else {
		update_option( 'wppv_bottom' , 0 );
	}
	if( isset( $_POST['wppv_postonly'] ) ) {
		update_option( 'wppv_postonly' , $_POST[ 'wppv_postonly' ] );
		$ok=true;
	} else {
		update_option( 'wppv_postonly' , 0 );
		$ok=true;
	}
	if( isset( $_POST['wppv_submit'] ) ) {
		update_option( 'wppv_login' , $_POST[ 'wppv_login' ] );
	}
	if( isset( $_POST['wppv_postnum'] ) ) {
		update_option( 'wppv_postnum' , $_POST[ 'wppv_postnum' ] );
	}
}
?>