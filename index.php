	<?php get_header(); //header.php?>

	</header>
	<!--header-->

<!--Articles and Side containers-->
<div id="outline">
	<div id="left_wrapper">
			<!--Wrapeer for articles on the left side of main container---->
			<div id="top">
				<?php if(have_posts())://if any articles exists
					$x=1; // Initialize the value
				    while (have_posts()) : the_post();//iteration

					  if (  $x == 1 ):
					  {
				      //Wrapeer for articles on the right side of the top-left container
				      echo '<div id="top_right_wrapper">';
				       //Wrapper for the fisrt article
				      echo '<span class="scrollme"><div id="index_a_post_1_wrapper" class="animateme" data-when="span"
							data-from="0.0"
							data-to="0.0"
							data-opacity="1.0"
							data-translatey="0"
							data-rotatez="0">';
					  }elseif($x == 2):
				    {
					     //Wrapeer for articles on the left side of the top-left container
					     echo '<div id="top_left_wrapper">';
					     //Wrapper for the second article

					  	echo ' <span class="scrollme"><div id="index_a_post_2_wrapper"  class="animateme" data-when="span"
							data-from="0.0"
							data-to="0.0"
							data-opacity="1.0"
							data-translatey="0"
							data-rotatez="0">';

			      }elseif($x == 3):
			      {
					    //Wrapper for the third article
					     echo '<span class="scrollme"><div id="index_a_post_3_wrapper" class="animateme" data-when="span"
							data-from="0.0"
							data-to="0.0"
							data-opacity="1.0"
							data-translatey="0"
							data-rotatez="0">';
				      }
				      else:
				      {

						  //Class of 4 to 7
						  // echo '<div class="top_right_posts_wrapper">';
						  }
				      endif;
				      ?>

					  	<a href="<?php the_permalink() ?>">
		         <?php if (  $x == 1 ):
			         {
			      	  if (has_post_thumbnail())://If any thumbnail exists
				  			{
								 	echo '<div class="trimming">';
								  the_post_thumbnail('thumbnail', 'class=eyecatchimg' );
							 		echo' </div>';
						  	}else:
						  		{
						  		?>
						  			<!--Default image-->
								  <img class="noimage"src="<?php echo get_template_directory_uri();
									   ?>/images/noimage.PNG" alt=""  width="230" height="230"/>

								<?php
								}
								endif;
							  ?>
						  	<?php
					         echo '<div class="categoryOfthumbnail_top_right_posts"><!---サムネイル領域のカテゴリの表示-->';
					   	   			the_category(',');//Get Category
					   	   	echo '</div>';?>


								<a id="articleTitles_1_link" href="<?php echo get_permalink(); ?>">
								<?php	the_title('<div id="articleTitles_1"> ','',true); //Article title
									echo 	' </a>';
									echo 	' </div>';
							  	echo '<div id="summary_1">';
							  ?>

								<a id="summary_1_link" href="<?php echo get_permalink(); ?>">
								<?php
					  			echo get_the_custom_excerpt( get_the_content(), 70 );//Load summary
					  			echo 	' </a>';
							  ?>

						  	<a id="readmore_1_link" href="<?php echo get_permalink(); ?>">
						  	<?php

						  		echo '<div id="readmore_1">';
						  		echo new_excerpt_more($more);
						  		echo '</div>';
						  		echo 	' </a>';
			           	echo '</div>';

					   	   	echo '<div class="postdateOfthumbnail_top_right_posts">';
					   	   			the_time("F d, Y");
					   	   	echo '</div>';
						   	 ?>


						  <?php
						  }elseif($x == 2):
					    {?>

					      <?php
					      if (has_post_thumbnail())://If any thumbnail exists
							  {

								echo '<div class="top_left_left_eyecatch_wrapper">';
								the_post_thumbnail('thumbnail', 'class=eyecatchimg' );//サムネイル表示
							  echo '</div>';

							  }else:
							 {?>
								  <img src="<?php echo get_template_directory_uri();
									   ?>/images/noimage.PNG" alt=""  width="230" height="230"/>

							<?php
								}
							  endif;
							  ?>

							  <?php

								echo '<div class="categoryOfthumbnail_top_left_left_posts"><!---サムネイル領域のカテゴリの表示-->';
					   	  the_category(',');//Get Category
					   	  echo '</div>';
								?>

								<a id="articleTitles_2_link" href="<?php echo get_permalink(); ?>">
								<?php
								the_title('<div id="articleTitles_2"> ','',true); //Article title
								?>

								<?php
								echo 	' </a>';
								echo 	' </div>';

								?>
								<?php
								echo '<div class="postdateOfthumbnail_top_left_left_posts">';
								the_time("F d, Y");
								echo '</div>';
						    ?>
								<?php
					      }
					      elseif($x == 3):
					      { ?>


								<?php
								if (has_post_thumbnail())://If any thumbnail exists
								{


								echo '<div class="top_left_left_eyecatch_wrapper">';
								the_post_thumbnail('thumbnail', 'class=eyecatchimg' );//Show the thumbnail
								echo '</div>';
							}
							  else:
							  {
							  ?>
								<img src="<?php echo get_template_directory_uri();
								?>/images/noimage.PNG" alt=""  width="230" height="230"/>
							  <?php
							}
							 endif;
							  ?>
							  <?php
								echo '<div class="categoryOfthumbnail_top_left_left_posts"><!---サムネイル領域のカテゴリの表示-->';
								the_category(',');//get Category
								echo '</div>';
								?>

								<a id="articleTitles_2_link" href="<?php echo get_permalink(); ?>">
								<?php
								the_title('<div id="articleTitles_2"> ','',true); //Article title
							?>

							<?php
							echo 	' </a>';
							echo 	' </div>';
							?>

							<?php
							echo '<div class="postdateOfthumbnail_top_left_left_posts">';
							the_time("F d, Y");
							echo '</div>';
							?>

						<?php
						}
						else:
						{
						?>

						<!---Other cases--->
						 <?php
						  }
					   endif;
					   ?>
						</a>

					  <?php
					  if (  $x == 1 ):
				    {
							echo '</div></span>'; //Wrapper for the fisrt article
							echo '</div>';  //Wrapper for the right side of the middle of top-left articles
						}
						elseif($x == 2):
						{
							echo '</div></span>';//Wrapper for the second article
						}
						elseif($x == 3):
						{
							echo '</div></span>';//Wrapper for the third article
							echo '</div>'; //Wrapper for the left side of the middle of top-left articles

						}
						else:
						{
							// n/a
						}
						endif;
						?>

				    <?php $x = $x +1; // counter
					endwhile;//End the loop
				    ?>
				<?php
				else://if any article doesn't exist
				?>

					<div class="noArticle">
				<p><!--No articles found---></p>
				</div>
				<?php
				endif;
				?>


		</div><!--Wrapper for the left side of the top articles--->
		<!---Middle part of the article containers --->
		<div id="middle">
			<div id="middle_wrapper">
				<div class="section_text">Popular</div>
				<!---Create containts for slide show--->
				<?php
				$args = array(/* Add multiple variables to the array */
				     'cat' => 4, /* Specify the showed category */
				     'posts_per_page' => 6, /* the number of display */
				); ?>
				<?php $my_query = new WP_Query( $args ); ?><!-- Query -->
				<?php
					while ( $my_query->have_posts() ) : $my_query->the_post();
					$x=1;?><!-- For $my_query, it needs to be used with arrow operator, The iteration starts from here-->

				 <?php
					echo '<span class="scrollme"><div class="index_a_post_middle_wrapper animateme" data-when="enter"
					data-from="0.9"
					data-to="0.1"
					data-opacity="1.0"
					data-translatey="36"
					data-rotatez="0">';
				?>
					<a href="<?php the_permalink()?>">


					<?php
					if (has_post_thumbnail())://If any thumbnail exists
					?>
					<?php {
					echo '<div class="middle_img_wrapper">';				 the_post_thumbnail('thumbnail', 'class=eyecatchimg' );}//Display thumbnail
					echo '</div>';		 ?>
					<?php
					else:
					?>

					<img  class="middle_img_wrapper" src="<?php echo get_template_directory_uri(); ?>/images/noimage.PNG" alt=""  width="230" height="230"/>

					<?php
					endif;
					?>

					<?php
					the_title('<div class="articleTitles_middle"> ','</div>',true); //投稿記事のタイトル
					?>
					<?php
					echo '<div class="categoryOfthumbnail_middle_posts"><!---For Displaying a category in the thumbnail-->';
					the_category(',');//Get category
					echo '</div>';
					?>
					</a>
				</div>
			</span>

		<?php endwhile; // end of the loop. ?><!--  Sub-loop ends here. If more posts still exist, then it goes back to a line of number x  -->
				<?php wp_reset_postdata(); ?><!-- Reset data -->

			<!-- Sub-loop ends here -->
			<!---Dummy for floating container--->
			<div class="middle_dummy"></div>
			<div class="section_text">Recommended</div>
			<!---Create containts--->
				<?php
				$args = array(/* Add multiple variables to the array */
				     'cat' => 4, /* Specify the displayed category */
				     'posts_per_page' => 6,  /* the number of pages */
				); ?>
				<?php $my_query = new WP_Query( $args ); ?><!-- Query -->
				<?php
					while ( $my_query->have_posts() ) : $my_query->the_post();
					$x=1;?><!-- For $my_query, it needs to be used with arrow operator, The iteration starts from here-->

				<?php
				echo '<span class="scrollme"><div class="index_a_post_middle_wrapper animateme" data-when="enter"
				data-from="0.9"
				data-to="0.1"
				data-opacity="1.0"
				data-translatey="36"
				data-rotatez="0">';
				?>
					<a href="<?php the_permalink()?>">
          <?php
          if (has_post_thumbnail())://If any thumbnail exists
          ?>

					<?php {
					echo '<div class="middle_img_wrapper">';				 the_post_thumbnail('thumbnail', 'class=eyecatchimg' );}//Display the thumbnail
					echo '</div>';		 ?>
					<?php
					else://If no thumb nails exist
					?>

					<img  class="middle_img_wrapper" src="<?php echo get_template_directory_uri(); ?>/images/noimage.PNG" alt=""  width="230" height="230"/>
					<?php
					endif;
					?>


					<?php
					the_title('<div class="articleTitles_middle"> ','</div>',true);
					?>
					<?php
					echo '<div class="categoryOfthumbnail_middle_posts"><!---サムネイル領域のカテゴリの表示-->';
					the_category(',');
					echo '</div>';
					?>
					</a>

				</div>
			</span>

			<?php endwhile; // end of the loop. ?><!-- For $my_query, it needs to be used with arrow operator, The iteration starts from here-->
		<?php wp_reset_postdata(); ?><!-- Reset data -->


			<!-- Sub-loop ends here-->
			<!---Dummy for floating element--->
			<div class="middle_dummy"></div>

			</div><!--middle_wrapper--->
		</div><!--- Middle container --->


		<!-- Bottom part-->
		<div id="bottom">
				<?php if(have_posts())://If any article exists ?>
					<?php	$x=1; // Initialize the counter
				    while (have_posts()) : the_post();//While post exist

					  if (
							$x == 4
							||$x == 5
							||$x == 6
							||$x == 7
							||$x == 8
							||$x == 9
							||$x == 10
							||$x == 11
							||$x == 12
							||$x == 13
							||$x == 14
					     ):
				     {
						  //wrapeer
						  echo '<span class="scrollme" ><div class="bottom_right_posts_wrapper animateme" data-when="enter"
							data-from="0.9"
							data-to="0.1"
							data-opacity="1.0"
							data-translatey="66"
							data-rotatez="0">';
			      }
			     else:
			     {
						 //n/a
				  	}
			     endif; ?>

					  <a href="<?php the_permalink() //Permanent link ?>">

						<?php
						if (
						$x == 4
						||$x == 5
						||$x == 6
						||$x == 7
						||$x == 8
						||$x == 9
						||$x == 10
						||$x == 11
						||$x == 12
						||$x == 13
						||$x == 14
						):
						{ ?>

						<?php /****Category Name******/
						echo '<div class="article_bottom_right_posts_category">';

						/****Get a parent category without the name******/
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
						the_title('<div class="articleTitles_bottom_right_posts"> ','</div>',true); //Article title


						echo '<div class="summary_bottom">';
						echo get_the_custom_excerpt( get_the_content(), 70 );//Load summary
						echo '</div>';
				     ?>

						 <?php
						echo '<div class="categoryOfthumbnail_bottom_right_posts"><!---サムネイル領域のカテゴリの表示-->';
						the_category(',');//Get category
						echo '</div>';
				            ?>

						<?php
						echo '<div class="postdateOfthumbnail_bottom_right_posts">';
						the_time("F d, Y");
						echo '</div>';
						echo '</div>';//article_top_right_posts_wrapper
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
						if (
						$x == 4
						||$x == 5
						||$x == 6
						||$x == 7
						||$x == 8
						||$x == 9
						||$x == 10
						||$x == 11
						||$x == 12
						||$x == 13
						||$x == 14
						):
						{

							/****Dummy element****/
  						echo '<div class="bottom_dummy"></div>';
				  		echo '</div></span>';
			      }
			      else:
			      {
					     //nothing
					  }
				    endif;
						?>

   			<?php $x = $x +1; //Counter?>

				<?php
				endwhile;//Iteration ends here
				?>

				<?php
				else://if there is no article
				?>

					<div class="noArticle">
						<p><!--No articles found---></p>
					</div>

				<?php
				endif;
				?>
		</div><!-- Bottom part--->

		<!--- Pager settings written in function.php ---->
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



<!--
	<?php
	if ( $wp_query->max_num_pages >1):
	 ?>

	<div class="pageSegueContainer">
		<div class="i_alignleft">
		<?php next_posts_link('←PREV'); //Previous articles ('The number of displayed articles','The number of pages being get back')?>
		</div>

		<div class="i_article_footer_toppage_link">
			<a href="<?php echo home_url('/'); //Home URL?>">
			TOP2ww2
			</a>
		 </div>
		<div class="i_alignright">
		<?php previous_posts_link('NEXT→');//Newer articles('The number of displayed articles','The number of pages being get back')?>
		</div>

	</div>
	<?php
	endif;
	?>
--->

<?php get_footer(); //footer.php?>
