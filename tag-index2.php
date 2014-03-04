	<div id="container">
		<div id="content">
			<div>
				<?php 
			if($lang == 'en'){
				echo '<h2 class="topheader-first">Pickup - '.$tag_index.'</h2>';
				$cat_lang='English';
			}elseif($lang == 'ja'){
				echo '<h2 class="topheader-first">ピックアップ - '.$tag_index.'</h2>';
				$cat_lang='Japanese';
			}
			
					$sticky = get_option( 'sticky_posts' );
					$args = array(
						'posts_per_page' => 3
						,'post__in'  => $sticky
						,'ignore_sticky_posts' => 1
						,'orderby'=>'date'
						,'order'=>'DESC'
						,'category_name'=>$cat_lang
						,'tag'=>$tag_index
					);
					query_posts( $args );
							
					if ( have_posts() ) : 
					while ( have_posts()) :
								the_post();
								echo '<a href="';
								the_permalink();
								if($lang == 'en'){
									echo '&lang=en';
								}elseif ($lang == 'ja'){
									echo '&lang=ja';
								}
								echo '" class="pickuphref">';
								echo '<div class="pickuparticle">';
								  echo '<h3 class="pickupheader">';
									the_title();
								  echo '</h3>';
								the_post_thumbnail(array(120,120),array('align'=>'left','hspace'=>'8'));
								  echo '<p>';
								the_excerpt();  
								echo '</p></div>';
								echo '</a>';
					endwhile; 
					else:
						echo '<p>No pick-up post for ' . $tag_index . '</p>';
					endif;

					wp_reset_query();
				?>
			</div>
			<?php 
			if($lang == 'en'){
				echo '<h2 class="topheader">Latest Posts - '.$tag_index.'</h2>';
				query_posts('posts_per_page=10&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang.'&tag='.$tag_index);
			}elseif($lang == 'ja'){
				echo '<h2 class="topheader">最新の記事 - '.$tag_index.'</h2>';
				query_posts('posts_per_page=10&orderby=date&order=DESC&ignore_sticky_posts=1&category_name='.$cat_lang.'&tag='.$tag_index);
			}

					if ( have_posts() ) : 
					while ( have_posts()) :
								the_post();
								echo '<a href="';
								the_permalink();
								if($lang == 'en'){
									echo '&lang=en';
								}elseif ($lang == 'ja'){
									echo '&lang=ja';
								}
								echo '" class="pickuphref">';
								echo '<div class="pickuparticle">';
								  echo '<h3 class="pickupheader">';
									the_title();
								  echo '</h3>';
								the_post_thumbnail(array(120,120),array('align'=>'left','hspace'=>'8'));
								  echo '<p>';
								the_excerpt();  
								echo '</p></div>';
								echo '</a>';
					endwhile; 
					else:
						echo '<p>No pick-up post for ' . $tag_index . '</p>';
					endif;


/*			if ( have_posts() ) : 
					while ( have_posts()) : the_post();
						echo '<li><a href="';
						the_permalink();
						echo '" title="';
						the_title();
						echo '" rel="bookmark">';
						echo the_title();
						echo '</a> by ';
						the_author();
					endwhile; 
				else:
				endif;*/
				wp_reset_query();
			?>			
			<!-- .post -->

			<?php comments_template() ?>

			</ul>
			
			
			<?php 
			if($lang=='en'){
				echo '<h2 class="topheader">Popular Posts - '.$tag_index.'</h2>';
				$args = array(
					'cat' => $category_English_id
					,'tag'=>$tag_index
				);
				}
			elseif($lang=='ja'){
				echo '<h2 class="topheader">人気の記事 - '.$tag_index.'</h2>';
				$args = array(
					'cat' => $category_Japanese_id
					,'tag'=>$tag_index
				);

				}
			wpp_get_mostpopular($args);

			 ?>
			
		</div><!-- #content -->
	</div><!-- #container -->
