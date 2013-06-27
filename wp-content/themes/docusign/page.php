<?php get_header(); ?>

<!-- main content -->
<div role="main">
	
	<!-- start of the loop -->
	<?php  if (have_posts()) : while (have_posts()) :  the_post(); ?>
	<article id="post-<?php the_ID(); ?>" role="article">

		<!-- article title -->
		<h1 class="entry-title"><?php the_title(); ?></h1>
				
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		
	</article>
	<?php  endwhile; endif; ?>
	<!-- end of the loop -->
	 
</div>
<!-- end of main content -->
			
<?php get_sidebar(); ?>

<?php get_footer(); ?>