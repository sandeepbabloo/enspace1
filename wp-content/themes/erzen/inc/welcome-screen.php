<?php
/**
 * Welcome Screen Class
 */
class erzen_screen {

	/**
	 * Constructor for the welcome screen
	 */
	public function __construct() {

		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'erzen_activation_admin_notice' ) );

	}
	
	public function erzen_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
			add_action( 'admin_notices', array( $this, 'erzen_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 * @sfunctionse 1.8.2.4
	 */
	public function erzen_admin_notice() {
		?>			
		<div class="updated notice is-dismissible erzen-notice">
			<h1><?php
			$theme_info = wp_get_theme();
			printf( esc_html__('Welcome to %1$s - Version %2$s', 'erzen'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) ); ?>
			</h1>
			<p><?php echo sprintf( esc_html__("Welcome! Thank you for choosing erzen WordPress theme. To take full advantage of the features this theme has to offer visit our %1\$s welcome page %2\$s.", "erzen"), '<a href="' . esc_url( admin_url( 'themes.php?page=erzen_upgrade' ) ) . '">', '</a>' ); ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=erzen_upgrade' ) ); ?>" class="button button-blue-secondary button_erzen" style="text-decoration: none;"><?php echo esc_html__('Get started with erzen','erzen'); ?></a></p>
		</div>
		<?php
	}
	
}

$GLOBALS['erzen_screen'] = new erzen_screen();