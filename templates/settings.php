<?php if (!defined('WPINC')) die("No outside script access allowed."); 

/*
	Copyright (c) 2008 - 2009 Jonathan Wilde

	This file is part of the Feed Stats Plugin for WordPress.

    The Feed Stats Plugin for WordPress is free software: you can redistribute 
    it and/or modify it under the terms of the GNU General Public License as 
    published by the Free Software Foundation, either version 2 of the License, 
    or (at your option) any later version.

    The Feed Stats Plugin for WordPress is distributed in the hope that it will 
    be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with the Feed Stats Plugin for WordPress.  If not, see 
    <http://www.gnu.org/licenses/>.
*/?>

<h2><?php _e('Feed Stats Settings'); ?></h2>
<form action="" method="post" id="feed-stats">
	<?php wp_nonce_field('feed-stats-edit_options') ?>			
	<table class="form-table optiontable">
		<tr>
			<th scope="row" valign="top"><?php _e('FeedBurner Feed URL'); ?></th>
			<td>
				<script type="text/javascript">
					var help = "<?php _e('What does this mean?') ?>";
				</script>
				<input type="text" name="feed-stats-feed" id="feed-stats-feed" class="fs-text" value="<?php echo get_option('feedburner_feed_stats_name'); ?>" />
				<input type="button" class="button" name="feed-stats-tester" id="feed-stats-tester" value="Test" onclick="testURL('<?php ajax_test_url(); ?>')" style="display: none" />
				
				<span id="feed-stats-waiting">Testing...</span>
				<span id="feed-stats-result-good"></span>
				<span id="feed-stats-result-bad"></span>
				
				<br /><?php _e('The entire URL of your feed (eg. <code>http://feeds.feedburner.com/speedbreeze</code>).') ?>						
			</td>
		</tr>
		<tr>
			<th scope="row" valign="top"><?php _e('Number of Days to Show') ?></th>
			<td>
				<input type="text" name="feed-stats-entries" id="feed-stats-entries" class="fs-text" value="<?php $q = get_option('feedburner_feed_stats_entries'); echo ($q !== '') ? $q : 10; ?>" />
			</td>
		</tr>
	</table>
	<p class="fs-icons-credit">
		<?php _e('Icons by') ?> <a href="http://www.famfamfam.com/">FamFamFam</a>.
	</p>
	<p class="submit">
		<input type="submit" name="submit" id="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
	</p>
	<p class="feed-stats-clear"></p>
</form>
	
<script type="text/javascript" src="<?php plugin_folder() ?>js/test.js"></script>
