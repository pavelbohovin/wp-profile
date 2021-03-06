<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WP_Profile
 * @subpackage WP_Profile/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the wp profile, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WP_Profile
 * @subpackage WP_Profile/admin
 * @author     Pavel Bohovin <pavel.bohovin@gmail.com>
 */
class WP_Profile_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $wp_profile The ID of this plugin.
	 */
	private $wp_profile;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @param      string $wp_profile The name of this plugin.
	 * @param      string $version The version of this plugin.
	 */
	public function __construct( $wp_profile, $version ) {

		$this->wp_profile = $wp_profile;
		$this->version    = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WP_Profile_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WP_Profile_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wp_profile, plugin_dir_url( __FILE__ ) . 'css/wp-profile-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WP_Profile_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WP_Profile_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wp_profile, plugin_dir_url( __FILE__ ) . 'js/wp-profile-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register a custom menu page.
	 *
	 * @since    1.0.0
	 */
	public function register_menu_page() {
		add_menu_page(
			__( 'WP Profile', 'wp-profile' ),
			__( 'WP Profile', 'wp-profile' ),
			'manage_options',
			'wp-profile/admin/partials/wp-profile-admin-display.php',
			'',
			'dashicons-businessman',
			109
		);
	}

	/**
	 * Register settings.
	 *
	 * @since    1.0.0
	 */
	public function register_settings() {
		register_setting( 'wp-profile-main-options', 'wp_profile_slug', 'strval' );
	}

}
