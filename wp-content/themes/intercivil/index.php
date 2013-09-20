<?php get_header(); ?>
			
			<?php
				$blog_hero = of_get_option('blog_hero');
				if ($blog_hero){
			?>
			<div class="clearfix row-fluid">
			    <img src='<?php bloginfo('template_directory'); ?>/images/front.png' class='front_page_image' id='front_page_image'>
			</div>
            <script>
                
                var image_changer_images = new Array()
                
                image_changer_images[0] = "<?php bloginfo('template_directory'); ?>/images/YMI.jpg";
                image_changer_images[1] = "<?php bloginfo('template_directory'); ?>/images/kids.jpg";
                image_changer_images[2] = "<?php bloginfo('template_directory'); ?>/images/pros.jpg";
                image_changer_images[3] = "<?php bloginfo('template_directory'); ?>/images/food.jpg";
                
                jQuery('.menu-item-object-page:eq(0)').addClass('selected');
                
                setInterval("changeImage()", 3000);
                
                var image_changer_position=1;

                function changeImage() {
                    
                    document.getElementById("front_page_image").src=image_changer_images[image_changer_position];
                    
                    jQuery('#menu-main .menu-item-object-page').removeClass('selected');
                    jQuery('#menu-main .menu-item-object-page:eq('+image_changer_position+')').addClass('selected');
                    
                    image_changer_position++;
                    if (image_changer_position == 4){ 
                        image_changer_position = 0;
                    }
                    
      
                }
            </script>
	
			<?php
			    }
			?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">
                    
                    <h2>Latest News</h2>    
                    
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				
				
				<br class='clearfix' />
    
			</div> <!-- end #content -->

<?php get_footer(); ?>