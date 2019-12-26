<?php get_header();?>

	</header>

<div id="outline">
	<div id="left_wrapper">

			<?php
			if(have_posts())://If any article exists
			 ?>
			<?php
			while (have_posts()) : the_post();//While post exist
		   ?>

			 	<!-- Container for entire displying field of an article body（necessary along with sidebar）
				 singleArticleContainer : only for the single page
				 articleContainer : mutual settings for index and single -->
					<div class="singleArticleContainer" id="post-<?php the_ID(); ?>" >
						<!-- article body-->

						<!---Title-->
						<div class="single_article_title_wrapper"　 >
								<a  href="<?php the_permalink() ?>">
							<?php the_title(); ?>
								</a>
						</div>

						<div class="singleAnArticleStatusContainer">
							<!---日付の表示-->
							<div class="single_post_date">
								<?php  echo get_the_date(); ?>
							</div>
							<!---カテゴリ名の表示-->
							<div class="single_category_name">
								<?php the_category(', ') ?>
							</div>
							<div class="clearfix">
							</div>
						</div>

						<!---Article body-->
						<div id="single_article">
							<?php the_content();?>
						</div>

						<!--Author, Tags-->
						<div class="footer-post-meta">
							<?php the_tags('Tag : ',', '); ?>
						</div>
					</div>

				<?php
			endwhile;//Thee end of iteration
			 	?>

			<?php
			else
			 :?>

			 <!--Show an error message-->
				<div class="post no_post" >
					<h2>Sorry.</h2>
					<p>No posts found</p>
				</div>

			<?php
			endif;
			 ?>


		<!--- Middle part --->
		<div id="middle">
			<div id="middle_wrapper">

				<?php
				$args = array(/* Add multiple variables to the array */
				     'cat' => 4,  /* Specify the showed category */
				     'posts_per_page' => 4,  /* the number of posts */
				); ?>
				<?php $my_query = new WP_Query( $args ); ?>
				<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

				 <?php
					echo '<div class="index_a_post_middle_wrapper">';
					echo '<a href="<?php the_permalink() //記事のパーマリンク ?>">';
				  ?>

        <?php
        if (has_post_thumbnail()):
        ?>
				  <?php {
				  the_post_thumbnail('thumbnail', 'class=eyecatchimg' );}?>
			  <?php
			  else:
			  ?>

			  <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.PNG" alt=""  width="230" height="230"/>

			  <?php
			  endif;
			  ?>


				<?php
				the_title('<div class="articleTitles_middle"> ','</div>',true); //投稿記事のタイトル
				?>


				<?php
				echo '<div class="categoryOfthumbnail_middle_posts"><!---サムネイル領域のカテゴリの表示-->';
				the_category(',');//カテゴリを取得
				echo '</div>';
				?>
			</a>
		</div>



	<?php endwhile; // end of the loop. ?>
	<?php wp_reset_postdata(); ?>

		</div>
	</div>


	<!-- Bottom Part -->
	<div id="bottom">
	<?php if(have_posts()):?>

	<?php	$x=1;
    while (have_posts()) : the_post();

			if (
			$x == 4
			|| $x == 5
			|| $x == 6
			||$x == 7
			||$x == 8
			|| $x == 9
			||$x == 10
			||$x == 11

			):
		{
			//wrapeer
			echo '<div class="bottom_right_posts_wrapper">';
		}
		else:
		{


	  }
    endif; ?>

			<a href="<?php the_permalink()  ?>">

			<?php if (
				$x == 4
				||$x == 5
				||$x == 6
				||$x == 7
				||$x == 8
				||$x == 9
				||$x == 10
				||$x == 11
			):
			{ ?>

				<?php
				echo '<div class="article_bottom_right_posts_category">';
				$cats = get_the_category();
				$cat = $cats[0];
				if($cat->parent){
				$parent = get_category($cat->parent);
				echo $parent->cat_name;
				}else{
				echo $cat->cat_name;
				}
				echo '</div>';


				echo '<div class="article_bottom_right_posts_wrapper">';
				the_title('<div class="articleTitles_bottom_right_posts"> ','</div>',true);
				?>
				<?php
				echo '<div class="categoryOfthumbnail_bottom_right_posts"><!---サムネイル領域のカテゴリの表示-->';
				the_category(',');
				echo '</div>';
				?>

				<?php
				echo '<div class="postdateOfthumbnail_bottom_right_posts">';
				the_time("F d, Y");
				echo '</div>';
				echo '</div>';
				?>


						<?php
						if (has_post_thumbnail()):
						{
							the_post_thumbnail('thumbnail', 'class=eyecatchimg' );
						}
						else:
						?>
							<img src="<?php
							echo get_template_directory_uri();
							?>/images/noimage.jpg" alt=""  width="230" height="230"/>
						<?php
						endif;
						?>


					<?php
					}
					else:
					{
					//nothing
					}
					endif;
					?>
				</a>

				<?php
					if ($x == 4
					||$x == 5
					||$x == 6
					||$x == 7
					||$x == 8
					||$x == 9
					||$x == 10
					||$x == 11
				):
				{
					echo '</div>';  //Wrapper for the right side of the left-middle container
				}
				else:
				{
					//nothing
				}
				endif;
				?>

			  <?php $x = $x +1;  ?>
				<?php
			  endwhile;
			  ?>

				<?php
				else:
				?>

				<div class="noArticle">
					<p>No articles found</p>
				</div>

				<?php
				endif;
				?>

		</div><!-- Bottom Part --->

		<?php
		if (function_exists("pagination")) {
			pagination();
		}
		?>

	</div><!--left_wrapper--->

	<!-- sidebar -->
	<div id="right_wrapper">
		<?php get_sidebar(); ?>
	</div>


</div><!--outline---->


<?php get_footer();?>
