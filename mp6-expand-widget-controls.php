<?php
/**
 * Plugin Name: MP6 Expand Widget Controls
 * Plugin URI: https://github.com/justintadlock/mp6-wide-widget-controls
 * Description: Allows plugins with widget controls wider than the sidebar on the widget screen to expand beyond the width of the sidebar when using the MP6 plugin.
 * Version: 0.1.0
 * Author: Justin Tadlock
 * Author URI: http://justintadlock.com
 */

/* Hook to the footer on the widgets screen. */
add_action( 'admin_footer-widgets.php', 'mp6ewc_widgets_footer' );

/**
 * Outputs our JS.
 *
 * @since  0.1.0
 * @access public
 * @return void
 */
function mp6ewc_widgets_footer() { ?>

	<script type="text/javascript">
	jQuery( document ).ready(
		function() {

			jQuery( document.body ).bind( 
				'click.widgets-toggle', 
				function( e ) {

					var target = jQuery( e.target ), widget;

					widget = target.closest('div.widget');

					widget_attr = widget.attr( 
						'style',
						widget.attr( 'style' ).replace( /(width:\s)(\d+px);/g, '$1$2 !important; z-index: 999;' )
					);
				}
			);
		}
	);
	</script>
<?php }