<?php
//define for <scripts> in iindex
// define('TOTAMTO_THEME_DIR', ABSPATH.'wp-content/themes/'.get_theme_root().'/'get_template().'/');
if(!defined('TOTAMTO_THEME_DIR')) {
define('TOTAMTO_THEME_DIR', get_theme_root().'/'.get_template().'/');
}

if(!defined('TOTAMTO_THEME_URL')) {
define('TOTAMTO_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

//add libs folder
require_once TOTAMTO_THEME_DIR.'libs/posttypes.php';
require_once TOTAMTO_THEME_DIR.'libs/utils.php';

//add image post support
add_theme_support( 'post-thumbnails' ); 


//Menu Register
if(function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'main_nav' => 'Główne Menu',
    ));
}

//OPTION PAGE for acf
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();

}
if( function_exists('acf_set_options_page_title') ) {
    acf_set_options_page_title( __('Theme Editor') );
}

// allow svg in media
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


//hide admin bar
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

//Search
function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('books'));
    }

return $query;
}
add_filter('pre_get_posts','searchfilter');
//if search input is empty show all recipes https://wordpress.stackexchange.com/questions/29516/
if(!is_admin()){
    add_action('init', 'search_query_fix');
}
function search_query_fix(){
    if(isset($_GET['s']) && $_GET['s']==''){
        $_GET['s']='Wpisz porządaną frazę';
    }
}

function getQueryParams(){
    global $query_string;
    $parts = explode('&', $query_string);
    
    $return = array();
    foreach($parts as $part){
        $tmp = explode('=', $part);
        $return[$tmp[0]] = trim(urldecode($tmp[1]));
    }
    
    return $return;
}  

function getQuerySingleParam($name){
    $qparams = getQueryParams();
    
    if(isset($qparams[$name])){
        return $qparams[$name];
    }
    
    return NULL;
}
//Search The End
?>