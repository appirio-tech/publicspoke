<?php get_header(); ?>

<!-- main content -->
<div role="main">
	
	<!-- start of the loop -->
	<?php  if (have_posts()) : while (have_posts()) :  the_post(); ?>
	<article id="post-<?php the_ID(); ?>" role="article">

		<!-- article title -->
		<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				
		<!-- article metas -->
		<span class="meta">
			<time datetime="<?php echo get_the_date('c'); ?>" pubdate><?php echo get_the_date('F d, Y'); ?></time> | 
			<span class="byline vcard"><span class="fn author"><?php the_author();?></span>			
		</span>

		<div class="entry-content">
			<?php the_content(); ?>
			 <p class="postmetadata">Posted in <?php the_category(', '); ?> | Tags: <?php the_tags(); ?></p>
		</div>
		
	</article>
	<?php  endwhile; endif; ?>
	<!-- end of the loop -->
	 
</div>
<!-- end of main content -->
			
<?php get_sidebar(); ?>

<?php get_footer(); ?>