<?php
function list_Posts($tags,$cats)
{
//	if($lang='en') $tag_index=strtolower(ereg_replace(' ','-',$tag_index));
	query_posts(array(
					'posts_per_page'=>5
					,'orderby'=>'date'
					,'order'=>'DESC'
					,'ignore_sticky_posts'=>1
					,'tag__and'=>$tags
					,'category__and'=>$cats
					)
				);
		if ( have_posts() ) : 
			while ( have_posts()) : the_post();
				echo '<li><a href="';
				the_permalink();
				echo '" title="';
				the_title();
				echo '" rel="bookmark">';
				echo the_title();
				echo '</a>';
				//echo the_tags();
				//the_author();
			endwhile; 
		else:
		endif;
		wp_reset_query();
    return 0;
}
?>

<div id="container">
	<div id="content">
		<div>
			<?php 
			$tag_index_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  '".$tag_index."'")->term_id;
			$tag_adb_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'adb'")->term_id;
			$tag_approved_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'approved'")->term_id;
			$tag_proposed_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'proposed'")->term_id;
			$tag_report_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'report'")->term_id;
			$tag_pnews_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'pnews'")->term_id;
			$tag_tnews_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'tnews'")->term_id;
			$tag_fnews_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'fnews'")->term_id;
			$tag_docs_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'docs'")->term_id;
			$tag_event_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'event'")->term_id;
			$tag_view_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'view'")->term_id;
			$tag_career_id = $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'career'")->term_id;

			$category_Needs_id =  $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'Needs'")->term_id;
			$category_Solution_id =  $wpdb->get_row("SELECT term_id FROM $wpdb->terms WHERE `name` =  'Solution'")->term_id;
			
			echo '<h2>'.$tag_index.'</h2>';
			echo '<h3>Specific Needs Requested</h3>';
			list_Posts(array($tag_index_id),array($category_Needs_id));
			echo '<h3>Specific Solution Proposed</h3>';
			list_Posts(array($tag_index_id),array($category_Solution_id));
			echo '<h3>ADB Approved Projects</h3>';
			list_Posts(array($tag_index_id,$tag_adb_id,$tag_approved_id),'');
			echo '<h3>ADB Proposed Projects</h3>';
			list_Posts(array($tag_index_id,$tag_adb_id,$tag_proposed_id),'');
			echo '<h3>ADB Report</h3>';
			list_Posts(array($tag_index_id,$tag_adb_id,$tag_report_id),'');
			echo '<h3>Policy Solution</h3>';
			list_Posts(array($tag_index_id,$tag_pnews_id),'');
			echo '<h3>Technology Solution</h3>';
			list_Posts(array($tag_index_id,$tag_tnews_id),'');
			echo '<h3>Finance Solution</h3>';
			list_Posts(array($tag_index_id,$tag_fnews_id),'');
			echo '<h3>Other Documents</h3>';
			list_Posts(array($tag_index_id,$tag_docs_id),'');
			echo '<h3>Event</h3>';
			list_Posts(array($tag_index_id,$tag_event_id),'');
			echo '<h3>View</h3>';
			list_Posts(array($tag_index_id,$tag_view_id),'');
			echo '<h3>Career Development</h3>';
			list_Posts(array($tag_index_id,$tag_career_id),'');
			?>			
		</div>
		
	</div><!-- #content -->
</div><!-- #container -->
