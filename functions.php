<?php
/**
 * WashingtonIslandResponsive functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WashingtonIslandResponsive
 */

if ( ! function_exists( 'washingtonislandresponsive_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function washingtonislandresponsive_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WashingtonIslandResponsive, use a find and replace
		 * to change 'washingtonislandresponsive' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'washingtonislandresponsive', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'Primary' => esc_html__( 'Primary', 'WashingtonIslandResponsive' ),
			'mobileNav' => esc_html__( 'mobileNav', 'WashingtonIslandResponsive' ),
			'footerNav' => esc_html__( 'footerNav', 'WashingtonIslandResponsive' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'washingtonislandresponsive_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'washingtonislandresponsive_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function washingtonislandresponsive_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'washingtonislandresponsive_content_width', 640 );
}
add_action( 'after_setup_theme', 'washingtonislandresponsive_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function washingtonislandresponsive_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'washingtonislandresponsive' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'washingtonislandresponsive' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'washingtonislandresponsive_widgets_init' );
/********************************************
Remove default authentication and require login through password only
*********************************************/
//remove wordpress authentication
remove_filter('authenticate', 'wp_authenticate_username_password', 20);
add_filter('authenticate', function($user, $email, $password){
//Check for empty fields
  if(empty($email) || empty ($password)){
    //create new error object and add errors to it.
    $error = new WP_Error();
    if(empty($email)){ //No email
        $error->add('empty_username', __('<strong>ERROR</strong>: Email field is empty.'));
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Invalid Email
        $error->add('invalid_username', __('<strong>ERROR</strong>: Email is invalid.'));
    }
    if(empty($password)){ //No password
        $error->add('empty_password', __('<strong>ERROR</strong>: Password field is empty.'));
    }
    return $error;
  }
  //Check if user exists in WordPress database
  $user = get_user_by('email', $email);
  //bad email
  if(!$user){
    $error = new WP_Error();
    $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
    return $error;
  }
  else{ //check password
    if(!wp_check_password($password, $user->user_pass, $user->ID)){ //bad password
      $error = new WP_Error();
      $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
      return $error;
    }else{
      return $user; //passed
    }
  }
}, 20, 3);
/*********************************************************
Add custom admin login screen styles
*********************************************************/
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
/**
 * Enqueue scripts and styles.
 */
 function washingtonislandresponsive_scripts() {
 	wp_enqueue_style( 'washingtonislandresponsive-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css');
	wp_enqueue_style( 'open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap', false); 
	wp_enqueue_script( 'washingtonislandresponsive-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
 	wp_enqueue_script( 'washingtonislandresponsive-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
 	wp_enqueue_script('customJS', get_template_directory_uri() . '/assets/js/customJS.js');
	wp_enqueue_script('focus-visible', get_template_directory_uri() . '/assets/js/focus-visible.min.js');
 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
 		wp_enqueue_script( 'comment-reply' );
 	}
 }
 add_action( 'wp_enqueue_scripts', 'washingtonislandresponsive_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
