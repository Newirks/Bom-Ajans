
<?php 

// font and style start

function stylefont(){

	wp_register_style('fontOne', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap',array(),false,'all');
	wp_enqueue_style('fontOne');

	wp_register_style('fontTwo', 'https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100;200;300;400;500;600;700;800;900&family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap',array(),false,'all');
	wp_enqueue_style('fontTwo');

	wp_register_style('styleOne', get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');
	wp_enqueue_style('styleOne');

	wp_register_style('styleTwo', get_template_directory_uri().'/css/all.min.css',array(),false,'all');
	wp_enqueue_style('styleTwo');	

	wp_register_style('styleThree', get_template_directory_uri().'/css/slick.css',array(),false,'all');
	wp_enqueue_style('styleThree');

	wp_register_style('styleFour', get_template_directory_uri().'/css/simple-line-icons.css',array(),false,'all');
	wp_enqueue_style('styleFour');

	wp_register_style('styleFive', get_template_directory_uri().'/css/style.css',array(),false,'all');
	wp_enqueue_style('styleFive');


}

add_action('wp_enqueue_scripts','stylefont');

// font and style end

// scripts start

function scripts(){

	wp_register_script('myscriptOne', get_template_directory_uri().'/js/jquery.min.js',array(),false,'all');
	wp_enqueue_script('myscriptOne');

	wp_register_script('myscriptTwo', get_template_directory_uri().'/js/popper.min.js',array(),false,'all');
	wp_enqueue_script('myscriptTwo');

	wp_register_script('myscriptThree', get_template_directory_uri().'/js/bootstrap.min.js',array(),false,'all');
	wp_enqueue_script('myscriptThree');

	wp_register_script('myscriptFour', get_template_directory_uri().'/js/slick.min.js',array(),false,'all');
	wp_enqueue_script('myscriptFour');

	wp_register_script('myscriptfive', get_template_directory_uri().'/js/jquery.sticky-sidebar.min.js',array(),false,'all');
	wp_enqueue_script('myscriptfive');

	wp_register_script('myscriptSix', get_template_directory_uri().'/js/custom.js',array(),false,'all');
	wp_enqueue_script('myscriptSix');

}
      
add_action('wp_enqueue_scripts','scripts');

// scripts end

// menu start

add_theme_support('menus');

register_nav_menus(array('up-menu' => __('Üst Menü', 'theme')));

Function add_li_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_li_class', 1, 3);

// menu end

// add thumbnails start

add_theme_support('post-thumbnails');
add_image_size('small',300,300, true);
add_image_size('middle',550,367, true);
add_image_size('large',600,600, true);

// add thumbnails end

