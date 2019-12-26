<!---Sidebar-->
<div id="sidebarContainer">

 <?php
  if( is_active_sidebar( 'Home left sidebar') ):
		dynamic_sidebar('Home left sidebar');
//Confirm the settings of dynamic sidebar is being turned on (valid). If at keast one of the settings is turned on, then this function works. If it's valid, then the dynamic sidebar will be displayed.
 endif;
 ?>

<div id="sidebar_articles_wrapper">
	<?php
	$args = array(/* Add multiple variables to the array *//
	     'cat' => 4, /* Specify the displayed category */
	     'posts_per_page' => 7, /* the number of pages */
	);
	 $my_query = new WP_Query( $args ); //クエリの指定
	 while ( $my_query->have_posts() ) : $my_query->the_post();
	 ?>
<!-- For $my_query, it needs to be used with arrow operator, The iteration starts from here-->


	<span class="scrollme"><div class=" sidebar_one_article_wrapper animateme" data-when="span"
	data-from="0.0"
	data-to="0.0"
	data-opacity="1.0"
	data-translatey="0"
	data-rotatez="0">


			<?php
			echo '<div class="siedebar_article_category"><!---サムネイル領域のカテゴリの表示-->';
			the_category(',');
			echo '</div>';
			?>

			<div class="sidebar_img_title_wrapper">
			<a href="<?php the_permalink() ?>">

				<?php
				if (has_post_thumbnail()):
				?>

				<?php {
				the_post_thumbnail('thumbnail', 'class=siedebar_article_eyecatchimg' );}?>
				<?php
				else:
				?>

				<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.PNG" alt=""  width="230" height="230"/>
				<?php
				endif;
				?>

				<?php
				the_title('<div class="siedebar_article_title"> ','</div>',true); //投稿記事のタイトル
				?>

			</a>
			</div>

			<?php
			echo '<div class="siedebar_article_date">';
			the_time("F d, Y");
			echo '</div>';
			?>

			</div>
		</span>



	<?php endwhile; // end of the loop. ?><!-- For $my_query, it needs to be used with arrow operator, The iteration starts from here-->
	<?php wp_reset_postdata(); ?><!-- Reset data -->

	<!---List of category--->
	<div class="widget" id="categoryContainer">
		<div id="sidebar_categories_title">
			Categories
		</div>

		<Ul id="sidebar_categories">
		<?php wp_list_categories('orderby=count&order=desc&show_count=1&title_li='); ?>
		</Ul>

		<div id="sidebar_archives_title">
			Archives
		</div>


	<ul id="sidebar_archives">
			   <?php
        $string = wp_get_archives(array(
						'show_post_count' => 1,
						'echo' => 0
					));
        echo preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</spn></a>', $string);
?>
</ul>

	</div>


	<div id="searchformContainer">
		<?php get_search_form(); ?>
	</div>


</div><!---The end of sidebar-->
