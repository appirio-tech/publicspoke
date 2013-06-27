<aside role="complementary">

	<?php /* A feed of the current and past CloudSpokes challenges */ ?>
	<section id="challenges">
		<h2><?php echo get_option('ssChallengeLabel'); ?></h2>				
		
		<div class="wrap">
			<ul>
			<?php		
				// get the challenge feed
				$rss = fetch_feed( get_option('ssChallengeURL') );
				
				if (!is_wp_error( $rss ) ) :
					 $maxitems 	= $rss->get_item_quantity(get_option('ssChallengeItems'));
					 $rss_items = $rss->get_items(0, $maxitems); 
					 if ($maxitems == 0) :
						echo '<li>No items.</li>';						 
					 else :
						foreach ( $rss_items as $item ) :
			?>
				<li>
					<strong><?php echo $item->get_title(); ?></strong>
					<a href="<?php echo $item->get_link(); ?>">View Details &raquo;</a>	
				</li>
			<?php
						endforeach;
					endif;
				endif;
			?>
			</ul>		
			
			<?php if (get_option('ssChallengeAll')) : // show only if there is view all url ?>
			<a href="<?php echo get_option('ssChallengeAll'); ?>" class="view-all">View All</a>
			<?php endif; ?>
		</div><!-- end of .wrap -->
	</section>
	<!-- end of #challenges section -->
	
	
	
	<?php /* Show only when not in front-page */ ?>
	<?php if ( ! is_front_page() ) : ?>
	<?php /* A feed of the Blog */ ?>
	<section id="blog">
		<h2><?php echo get_option('ssBlogLabel'); ?></h2>
		
		<div class="wrap">
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
			<a href="<?php echo get_option('ssBlogAll'); ?>" class="view-all">View All</a>
			<?php endif; ?>
		</div><!-- end of .wrap -->
	</section>
	<!-- end of #blog section -->
	<?php endif; ?>


	<?php /* A feed of the Twitter */ ?>
	<a class="twitter-timeline" href="https://twitter.com/DocuSign" data-widget-id="349845664181657601">Tweets by @DocuSign</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<!-- end of #twitter section -->
	
	
</aside>