<?php
/**eyecatch**/
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 680, 680, true );

/**
 * The number of summary
 */

//function
//Reference：http://nelog.jp/get_the_custom_excerpt
function get_the_custom_excerpt($content, $length) {
  $length = ($length ? $length : 70);//Default length
  $content =  preg_replace('/<!--more-->.+/is',"",$content); //remove after more-tag
  $content =  strip_shortcodes($content);//Remove short code
  $content =  strip_tags($content);//Remove tags
  $content =  str_replace("&nbsp;","",$content);//Remove specific letters（only space in this case）
  $content =  mb_substr($content,0,$length);//Cut out with the intended length
  return $content;
}

function new_excerpt_more($more) {
    return 'READ MORE';
}
add_filter('excerpt_more', 'new_excerpt_more');


/* To resize the size of images, use -> _post_thumbnail( array(400,400) ); */
	function arphabet_widgets_init() {

	register_sidebar(
	 array(
		'name' => 'Home left sidebar',
		'id' => 'sidebar_1',
		'before_widget' => '<div id="sidebar-wrapper" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget_title">',
		'after_title' => '</h2>',
	)
	);
}
add_action( 'widgets_init', 'arphabet_widgets_init' );



/*****Pager******/
//Pagenation
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//The number of pages show up at once（5 pages as default）

     global $paged;//Current value
     if(empty($paged)) $paged = 1;//Default page

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//Get all pages
         if(!$pages)//If All Page is empty, it's supposed to be 1
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//If All Page is not 1, then pagenation is supposed to be shown up
     {
		 echo "<div class=\"pagenation\">\n";
		 echo "<ul>\n";
		 //Prev：Do if the current page is greater than 1
         if($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>Prev</a></li>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //Conditions with ternary operation
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
             }
         }
		//Next：Do if the current page number is less than the number of all pages
		if ($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">Next</a></li>\n";
		echo "</ul>\n";
		echo "</div>\n";
     }
}

	/* Custom post type*/
add_action( 'init', 'create_post_type' );
function create_post_type()
{

    register_post_type( 'gallery', /* post-type */
        array(
            'labels' => array(
            'name' => __( 'gallery' ),
            'singular_name' => __( 'gallery' )
        ),
        'public' => true,
        'menu_position' =>5,

           /* Ryr catch image and custom field settings*/
      'supports' => array('title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes')

        )
    );
}






















?>
