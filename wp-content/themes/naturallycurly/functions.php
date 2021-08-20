<?php 
/**
 * Add theme supports.
 */
add_theme_support( 'post-thumbnails' );

/**
 * Register Nav Menus.
 */
if ( ! function_exists( 'nc_register_nav_menu' ) ) {
 
    function nc_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'nc' ),
			'feature_menu' => __( 'Feature Menu', 'nc' ),
            'footer_menu'  => __( 'Footer Menu', 'nc' ),
        ) );
    }
    add_action( 'after_setup_theme', 'nc_register_nav_menu', 0 );
}

/**
 * Proper way to enqueue scripts and styles.
 */
function nc_theme_name_scripts() {
	//Register Styles	
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'app-style', get_template_directory_uri() . '/css/app.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'index-style', get_template_directory_uri() . '/css/index.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'index-one-style', get_template_directory_uri() . '/css/index-one.css', array(), '1.0.0', 'all' );
	/* wp_enqueue_style( 'instagram-grid-style', get_template_directory_uri() . '/css/instagram-grid.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'index-two-style', get_template_directory_uri() . '/css/index-two.css', array(), '1.0.0', 'all' ); */
	wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'all-font-awesome', get_template_directory_uri() . '/css/all.css', array(), '1.0.0', 'all' );

	//Register Scrips
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );
	/* wp_enqueue_script( 'index-min-js', get_template_directory_uri() . '/js/index.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'index-js', get_template_directory_uri() . '/js/index.js', array(), '1.0.0', true );
	wp_enqueue_script( 'index1-js', get_template_directory_uri() . '/js/index1.js', array(), '1.0.0', true ); */
	//wp_enqueue_script( 'all-js', get_template_directory_uri() . '/js/all.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'nc_theme_name_scripts' );

/**
 * Add Salons Post Type with Category.
 */
function nc_salons_setup_post_type() {
	$args = array(
        'label'     		 => __( 'Salons', 'nc' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'salons' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
		'show_admin_column'  => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon' => 'dashicons-admin-home',
    );
    register_post_type( 'salons', $args );
}
add_action( 'init', 'nc_salons_setup_post_type' );

function create_city_tax() {
	
	$args = array(
        "label"        => __( "State/City", "nc" ),
        "public" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'search',"hierarchical" => true, 'with_front' => false ),
        "show_admin_column" => true,
        "show_in_rest" => true,
        "rest_base" => "search",
        "show_in_quick_edit" => false,
    );
	
    register_taxonomy( 'city', 'salons', $args);
}
add_action( 'init', 'create_city_tax', 0 );

function create_country_tax() {
	$args = array(
        "label"        => __( "Country", "nc" ),
        "public" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'country-search',"hierarchical" => true, 'with_front' => false ),
        "show_admin_column" => true,
        "show_in_rest" => true,
        "rest_base" => "search",
        "show_in_quick_edit" => false,
    );
	
    register_taxonomy( 'country', 'salons', $args);
}
add_action( 'init', 'create_country_tax', 0 );


/**
 * Add Videos Post Type with Category.
 */
function nc_videos_setup_post_type() {
	$args = array(
        'label'     		 => __( 'Videos', 'nc' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'nc-videos', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
		'show_admin_column'  => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon' => 'dashicons-video-alt3',
    );
    register_post_type( 'nc-videos', $args );
}
add_action( 'init', 'nc_videos_setup_post_type' );

function create_videos_tax() {
    register_taxonomy( 'videos-cat', 'texture', array(
        'label'        => __( 'Videos Cat', 'nc' ),
        'rewrite'      => array( 'slug' => 'videos-cat', 'with_front' => false ),
        'hierarchical' => true,
    ) );
}
add_action( 'init', 'create_videos_tax', 0 );


function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );
function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'subnav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}


add_filter( 'woocommerce_product_tabs', 'woo_custom_product_tabs' );
function woo_custom_product_tabs( $tabs ) {
    // Adds the other products tab
    $tabs['benefits_tab'] = array(
        'title'     => __( 'Benefits', 'woocommerce' ),
        'priority'  => 120,
        'callback'  => 'woo_benefits_tab_content'
    );
	
	$tabs['videos_tab'] = array(
        'title'     => __( 'Videos', 'woocommerce' ),
        'priority'  => 125,
        'callback'  => 'woo_videos_tab_content'
    );
	
	$tabs['how_to_use_tab'] = array(
        'title'     => __( 'How to use', 'woocommerce' ),
        'priority'  => 130,
        'callback'  => 'woo_how_to_use_tab_content'
    );
	
	$tabs['ingredients_tab'] = array(
        'title'     => __( 'Ingredients', 'woocommerce' ),
        'priority'  => 135,
        'callback'  => 'woo_ingredients_tab_content'
    );
	
	$tabs['reviews_tab'] = array(
        'title'     => __( 'Reviews', 'woocommerce' ),
        'priority'  => 135,
        'callback'  => 'woo_reviews_tab_content'
    );

    return $tabs;

}

function woo_benefits_tab_content() {
    echo '<h2 class="tab_head">Benefits</h2>';
    echo '<div class="tab_content">'.get_field("benefits").'</div>';
}

function woo_videos_tab_content() {
	echo '<h2 class="tab_head">Videos</h2>';
    echo '<div class="tab_content">'.get_field("videos").'</div>';
}

function woo_how_to_use_tab_content() {
    echo '<h2 class="tab_head">How to use</h2>';
    echo '<div class="tab_content">'.get_field("how_to_use").'</div>';
}

function woo_ingredients_tab_content(){
	echo '<h2 class="tab_head">Ingrediants</h2>';
    echo '<div class="tab_content">'.get_field("ingredients").'</div>';
}

function woo_reviews_tab_content(){
	echo '<h2 class="tab_head">Reviews</h2>';
	echo do_shortcode('[cusrev_reviews comment_file="/comments.php"]');
	
}





/* actions */
add_action( 'created_category', 'remove_category_url_refresh_rules' );
add_action( 'delete_category', 'remove_category_url_refresh_rules' );
add_action( 'edited_category', 'remove_category_url_refresh_rules' );
add_action( 'init', 'remove_category_url_permastruct' );

/* filters */
add_filter( 'category_rewrite_rules', 'remove_category_url_rewrite_rules' );
add_filter( 'query_vars', 'remove_category_url_query_vars' );    // Adds 'category_redirect' query variable
add_filter( 'request', 'remove_category_url_request' );       // Redirects if 'category_redirect' is set
add_filter( 'plugin_row_meta', 'remove_category_url_plugin_row_meta', 10, 4 );

function remove_category_url_refresh_rules() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}

function remove_category_url_deactivate() {
	remove_filter( 'category_rewrite_rules', 'remove_category_url_rewrite_rules' ); // We don't want to insert our custom rules again
	remove_category_url_refresh_rules();
}

/**
 * Removes category base.
 *
 * @return void
 */
function remove_category_url_permastruct() {
	global $wp_rewrite, $wp_version;

	if ( 3.4 <= $wp_version ) {
		$wp_rewrite->extra_permastructs['category']['struct'] = '%category%';
	} else {
		$wp_rewrite->extra_permastructs['category'][0] = '%category%';
	}
}

/**
 * Adds our custom category rewrite rules.
 *
 * @param array $category_rewrite Category rewrite rules.
 *
 * @return array
 */
function remove_category_url_rewrite_rules( $category_rewrite ) {
	global $wp_rewrite;

	$category_rewrite = array();

	/* WPML is present: temporary disable terms_clauses filter to get all categories for rewrite */
	if ( class_exists( 'Sitepress' ) ) {
		global $sitepress;

		remove_filter( 'terms_clauses', array( $sitepress, 'terms_clauses' ), 10 );
		$categories = get_categories( array( 'hide_empty' => false, '_icl_show_all_langs' => true ) );
		add_filter( 'terms_clauses', array( $sitepress, 'terms_clauses' ), 10, 4 );
	} else {
		$categories = get_categories( array( 'hide_empty' => false ) );
	}

	foreach ( $categories as $category ) {
		$category_nicename = $category->slug;
		if ( $category->parent == $category->cat_ID ) {
			$category->parent = 0;
		} elseif ( 0 != $category->parent ) {
			$category_nicename = get_category_parents( $category->parent, false, '/', true ) . $category_nicename;
		}
		$category_rewrite[ '(' . $category_nicename . ')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$' ] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
		$category_rewrite[ '(' . $category_nicename . ')/page/?([0-9]{1,})/?$' ]                  = 'index.php?category_name=$matches[1]&paged=$matches[2]';
		$category_rewrite[ '(' . $category_nicename . ')/?$' ]                                    = 'index.php?category_name=$matches[1]';
	}

	// Redirect support from Old Category Base
	$old_category_base                                 = get_option( 'category_base' ) ? get_option( 'category_base' ) : 'category';
	$old_category_base                                 = trim( $old_category_base, '/' );
	$category_rewrite[ $old_category_base . '/(.*)$' ] = 'index.php?category_redirect=$matches[1]';

	return $category_rewrite;
}

function remove_category_url_query_vars( $public_query_vars ) {
	$public_query_vars[] = 'category_redirect';

	return $public_query_vars;
}

/**
 * Handles category redirects.
 *
 * @param $query_vars Current query vars.
 *
 * @return array $query_vars, or void if category_redirect is present.
 */
function remove_category_url_request( $query_vars ) {
	if ( isset( $query_vars['category_redirect'] ) ) {
		$catlink = trailingslashit( get_option( 'home' ) ) . user_trailingslashit( $query_vars['category_redirect'], 'category' );
		status_header( 301 );
		header( "Location: $catlink" );
		exit;
	}

	return $query_vars;
}


/* Custom Post Type Salons Permalink Structure*/
