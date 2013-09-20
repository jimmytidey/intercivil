<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
  
  <header>
  
    
      <h2> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    
    
  
  </header> <!-- end article header -->

  <section class=" clearfix">
    <?php the_content( __("Read more &raquo;","bonestheme") ); ?>
  </section> <!-- end article section -->
  
  <footer>

    <p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', ''); ?></p>
    
  </footer> <!-- end article footer -->

</article> <!-- end article -->
