<?php
/**
 * Dashboard Heaven Options.
 *
 * @package Dashboard Heaven
 */

if ( empty($title) ) $title = __('Dashboard Heaven Options');

$widgets = dh_get_dashboard_widgets(); 
?>
	<div class="wrap">
	<?php screen_icon(); ?>
	<h2><?php echo esc_html( $title ); ?></h2>

	<form id="dashboard-heaven-options" method="post" action="options.php">
		<p>Select the minimum access level you want to make a dashboard widget visible to.</p>
		<table class="form-table">
			<tbody>
		<?php foreach($widgets as $widget=>$name) { ?>
				<tr valign="top">
					<th scope="row">
						<label for="<?php echo $widget ?>"><?php echo $name ?></label>
					</th>
					<td><?php echo(dh_get_capabilities(TRUE, $widget)); ?></td>
				</tr>
		<?php } ?> 
			</tbody>
		</table>	
		<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>
		<?php settings_fields( 'dh-options' ); ?>
	</form>
	</div>