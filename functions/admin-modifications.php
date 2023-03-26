<?php
// UPDATE FOOTER
function remove_footer_admin () {
  echo 'Designed and Developed by <a href="https://designs4theweb.com/" target="_blank">Designs 4 The Web</a>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// UPDATE VERSION
function change_footer_version() {
  return 'Powered by WordPress';
}
add_filter( 'update_footer', 'change_footer_version', 9999 );

// REPLACE HOWDY TEXT
function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy,', 'Logged in as', $my_account->title );            
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );

// REPLACE LOGIN LINK
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

// UPDATE TITLE OF LINK
function my_login_logo_url_title() {
    return 'Powered by D4TW';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// LOGIN STYLESHEET
function my_login_stylesheet() { ?>
    <link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/css/login.css'; ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

//Remove the WordPress version number.
remove_action('wp_head', 'wp_generator');

//Disable autosave
function disable_autosave() {
    wp_deregister_script('autosave');
}
add_action('wp_print_scripts','disable_autosave');

//Remove the admin bar
add_filter('show_admin_bar', '__return_false');

//Remove unnecessary page templates
function psc_remove_page_templates( $templates ) {
    unset( $templates['page-templates/blank.php'] );
    unset( $templates['page-templates/empty.php'] );
    unset( $templates['page-templates/fullwidthpage.php'] );
    unset( $templates['page-templates/left-sidebarpage.php'] );
    unset( $templates['page-templates/right-sidebarpage.php'] );
    unset( $templates['page-templates/both-sidebarspage.php'] );
    return $templates;
}
add_filter( 'theme_page_templates', 'psc_remove_page_templates' );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'General Content',
        'menu_title'    => 'Salon Info',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

//Disable auto p in the content editor and excerpts
remove_filter ('the_content', 'wpautop');
remove_filter ('the_excerpt', 'wpautop');

function env_footer_menu() {
    register_nav_menu( 'footer', __( 'Footer Menu', 'understrap' ) );
}
add_action('init', 'env_footer_menu');

?>