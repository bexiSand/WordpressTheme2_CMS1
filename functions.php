

<?php
/* Läser in style- och scriptfiler */

function get_my_scripts(){
    wp_enqueue_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.css");
    wp_enqueue_style("font-awesome", get_template_directory_uri() . "/css/font-awesome.css");
    wp_enqueue_style("style", get_stylesheet_uri() );
    wp_enqueue_style("owl", get_stylesheet_directory_uri() . "/assets/css/owl.carousel.min.css");
    wp_enqueue_style("owlTheme", get_stylesheet_directory_uri() . "/assets/css/owl.theme.default.min.css");
    wp_enqueue_style("jquery", get_template_directory_uri() . "/assets/js/jquery.js");
    wp_enqueue_script("owlScript", get_template_directory_uri(). "/assets/js/owl.carousel.min.js",
    array("jquery"),
    false,
    true);
    wp_enqueue_script("script", get_template_directory_uri(). "/assets/js/script.js");
}
add_action( 'wp_enqueue_scripts', 'get_my_scripts' );

/* registrerar menyer */
function register_all_my_menus(){
	register_nav_menus([
		"primary-menu" => "Primary Menu",
	]);
}
add_action("init","register_all_my_menus");


/* för att kunna lägga till utvald bild i temat */
add_theme_support("post-thumbnails");


/* registrerar sidebar-, header, och footer-widgetar*/
function register_my_sidebar(){
    
    register_sidebar( array(
		"name" => "Sidebar widget",
        "id" => "sidebar1",   
    ));

}
add_action("widgets_init","register_my_sidebar");

/***************************Breadcrumbs************************/
function breadcrumbs(){
    global $post;
    $seperator = " / ";
    $home = "Hem";
   
    echo "<ul class='breadcrumbs'>";
    echo "<li>Du är här:</li>";

    if(is_front_page()){
        echo "<li>" . $home . "</li>";
    } else {
        echo "<li><a href=" . get_site_url() . ">" . $home . "</a></li>";
    }

	if(is_home() || is_single()){
        echo "<li>" . $seperator . "</li>";
		if(is_home()){
			echo "<li>" . "Blogg" . "</li>";
		}else {
			echo "<li><a href=" . $post->post_permalink . ">Blogg</a></li>";
			echo "<li>" . $seperator . "</li>";
			echo "<li>" . $post->post_title . "</li>";
		}
	}

	if(is_page() && !is_front_page()){
        echo "<li>" . $seperator . "</li>";
		if(!empty($post->post_parent)){
			echo "<li>";
			echo "<a href=" . get_permalink($post->post_parent) . ">";
			echo get_the_title( $post->post_parent );
            echo "</a>";
            echo "</li>";
			echo "<li>" . $seperator . "</li>";
		}
		echo "<li>" . $post->post_title . "</li>";
    }
    
    if(is_author()){
        echo "<li>" . $seperator . "</li>";
        echo "<li>Författare</li>";
        echo "<li>" . $seperator . "</li>";
        echo "<li>" . get_the_author("display_name") . "</li>";
    }

    if(is_category()){
        echo "<li>" . $seperator . "</li>";
        echo "<li>Kategori</li>";
        echo "<li>" . $seperator . "</li>";
        echo "<li>";
        single_cat_title();
        "</li>";
    }

    if(is_archive() && !is_author() && !is_category()){
        echo "<li>" . $seperator . "</li>";
        echo "<li>Arkiv</li>";
        echo "<li>" . $seperator . "</li>";
        single_month_title( " " );
        
    }

    if(is_search()){
        echo "<li>" . $seperator . "</li>";
        echo "<li>Sökresultat</li>";
    }

    echo "</ul>";
}

/************************OPTIONS AFC************************ */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}


?>