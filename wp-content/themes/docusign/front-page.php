<?php get_header(); ?>


<?php /* this will display the excerpt field from the About Us page */ ?>
	<?php
		$about = get_page_by_path('about-us', OBJECT, 'page');	
		
		if ($about->post_excerpt!='') : 
	?>
<section id="about">
	<p>
		<?php echo apply_filters('the_content', $about->post_excerpt); ?>
		<a href="<?php echo get_permalink($about->ID); ?>" class="more-link">read more &raquo;</a>
	</p>
</section>
<?php endif; ?>
<!-- end of #about section -->


<!-- main content -->
<div role="main">
	
	<?php /* Display post as Announcements here */ ?>
	<section id="announcements">
		<h2>Announcements</h2>
		
		<div id="announcementBox">
			<div class="wrap">
		
		<?php  
			// query post type
			$args 		= array('post_type' => 'post');
			$the_query 	= new WP_Query( $args );		
			if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
				global $more;    
				$more = 0;
		?>
			<article id="post-<?php the_ID(); ?>" role="article">
	
			<!-- article title -->
			<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					
			<div class="entry-content">
				<?php the_content('read more &raquo;'); ?>
			</div>
			
		</article>
		<?php  endwhile; endif; /* end of post type loop */ ?>
		
			</div>
		</div>
		<!-- end of #announcementBox -->
		
		<div id="homeSlidesPage"></div><!-- pagination placeholder -->
	
	</section>
	<!-- end of #announcements section -->
	
	
	<?php /* A feed of the Blog */ ?>
	<section id="blog">
		<h2><?php echo get_option('ssBlogLabel'); ?></h2>
		<ul>
		<?php		
			// get the feed
			$rss = fetch_feed( get_option('ssBlogURL') );
			
			if (!is_wp_error( $rss ) ) :
				 $maxitems 	= $rss->get_item_quantity(get_option('ssBlogItems'));
				 $rss_items = $rss->get_items(0, $maxitems); 
				 if ($maxitems == 0) :
					echo '<li>No items.</li>';						 
				 else :
					foreach ( $rss_items as $item ) :
		?>
			<li>
				<a href="<?php echo $item->get_permalink(); ?>"><strong><?php echo $item->get_title(); ?></strong></a>
				<p><?php echo str_replace('<img src="', '<img src="http://www.docusign.com', $item->get_description()); ?></p>
			</li>
		<?php
					endforeach;
				endif;
			endif;
		?>
		</ul>		

		<?php if (get_option('ssBlogAll')) : // show only if there is view all url ?>
		<a href="<?php echo get_option('ssBlogAll'); ?>" class="view-all">View All &raquo;</a>
		<?php endif; ?>
	</section>
	<!-- end of #blog section -->

	
</div>
<!-- end of main content -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>