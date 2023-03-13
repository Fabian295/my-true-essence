        <!-- <div>
        <?php  previous_posts_link();?>
        <?php next_posts_link();?> 
    </div> -->


<?php get_header();?>

  <section class="page-wrap">



    This is the CATEGORY BLOG Template
      <div class="container page">



          <?php get_template_part('includes/section', 'archive');?>



      </div>

      <div class="page-btn">

        <?php
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    echo paginate_links(array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
    ) );
    ?>
      </div>


  </section>


  
  <footer class="footer">
      
      <?php get_footer();?>
  
  </footer>