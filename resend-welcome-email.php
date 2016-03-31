<?php
/*
Plugin Name: Resend Welcome Email
Plugin URI:  http://www.twitter.com/atwellpub
Description: Adds option to regenerate and resend password to user. Adds this option to user profile edit screen. 
Version:     1.0.3
Author:      adbox
Author URI:  http://www.twitter.com/atwellpub
Text Domain: resend-welcome-email
*/



/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.0.3
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Resend_Welcome_Email
 *
 * @since 1.0.0
 */
if ( !class_exists( 'Resend_Welcome_Email' ) ) {

	class Resend_Welcome_Email {

		/**
		 *  Initiates class
		 */
		public function __construct() {

			global $wpdb;

			/* Check user permission */
			if ( ! current_user_can( 'edit_user' ) )
				return;

			/* Define constants */

			/* Define hooks and filters */

			/* Adds admin listeners for processing actions */			

		}

		/**
		 *  Defines constants
		 */

			define('RESEND_WELCOME_EMAIL_CURRENT_VERSION', '1.0.1' ); 
			define('RESEND_WELCOME_EMAIL_LABEL' , 'Resend Welcome Email' ); 
			define('RESEND_WELCOME_EMAIL_SLUG' , plugin_basename( dirname(__FILE__) ) ); 
			define('RESEND_WELCOME_EMAIL_FILE' ,  __FILE__ ); 
			define('RESEND_WELCOME_EMAIL_URLPATH', plugins_url( ' ', __FILE__ ) ); 
			define('RESEND_WELCOME_EMAIL_PATH', WP_PLUGIN_DIR.'/'.plugin_basename( dirname(__FILE__) ).'/' ); 

		}

		/**
		 *  Loads hooks and filters selectively
		 */


			/* Load plugin translation files */
			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 *  Discovers which tests to run and runs them
		 */

				return $actions;
			}


			return $actions;
		}

		/**
		 *  
		 */

				return $actions;
			}

			?>
			<tr>
			</tr>
			<?php
		}

		/**
		 *  Listens for email send commands and fires them
		 */
				return;
			}

			/* Resend welcome email */
			self::resend_welcome_email();	

			/* Register success notice */

		}

		/** 
		 *  Register admin notice that email has been sent
		 */
			?>
			<div class="updated">
			</div>
			<?php			
		}

		/**
		 * Helper function. Returns the switch to or switch back URL for a given user.
		 *
		 * @param  WP_User $user The user to be switched to.
		 * @return string|bool The required URL, or false if there's no old user or the user doesn't have the required capability.
		 */

			return esc_url(wp_nonce_url( add_query_arg( array(
				'action'  => 'resend_welcome_email',
				'user_id' => $user->ID
			), '') , "send_welcome_email_{$user->ID}" ));

		}

		/**
		 * Resends the welcome email
		 *
		 * @param  int  $user_id      The ID of the user to re-send welcome email to
		 * @return bool|WP_User WP_User object on success, false on failure.
		 */

			$user_id = $_GET['user_id'];

			if ( !$user = get_userdata( $user_id ) ) {
				return false;
			}

			wp_new_user_notification($user_id, null, 'both');

		}

		/**
		 * Load the text domain for translation
		 *
		 * since: 1.0.3
		 */
		public function load_textdomain() {

			load_plugin_textdomain( 'resend-welcome-email' );

		}

	}

	/**
	 *  Load Resend_Welcome_Email class in init
	 */
	function Load_Resend_Welcome_Email() {
		$Resend_Welcome_Email = new Resend_Welcome_Email();
	}
	add_action( 'admin_init' , 'Load_Resend_Welcome_Email' , 99 );
}
			//$this->define_constants();
			//add_filter( 'user_row_actions',  array( $this, 'filter_user_row_actions' ), 10, 2 );
			add_filter( 'personal_options', array( $this, 'personal_options' ), 10, 2 );
			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
			$this->add_admin_listeners();
		public function filter_user_row_actions( array $actions, WP_User $user ) {
			if ( ! ( $link = $this->send_welcome_email_url( $user ) ) ) {
			$actions['send_welcome_email'] = '<a href="' . $link . '">' . esc_html__( 'Resend Welcome Email', 'resend-welcome-email' ) . '</a>';
		public function personal_options( WP_User $user ) {
			if ( ! ( $link = $this->send_welcome_email_url( $user ) ) ) {
				<th scope="row"><?php esc_html_e( 'Resend Welcome Email', 'resend-welcome-email' ); ?></th>
					<a href="<?php echo $link; ?>"><?php esc_html_e( 'Resend Welcome Email', 'resend-welcome-email' ); ?></a>
		public function add_admin_listeners() {
			if ( ! isset( $_GET['action'] ) ||
			     ( 'resend_welcome_email' !== $_GET['action'] )
			) {
			add_action( 'admin_notices', array( $this, 'define_notice' ) );
			add_action( 'network_admin_notices', array( $this, 'define_notice' ) );
		public function define_notice() {
				<p><?php esc_html_e( 'Welcome email sent!', 'resend-welcome-email' ); ?></p>
		public function send_welcome_email_url( WP_User $user ) {
		public function resend_welcome_email() {
