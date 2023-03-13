<?php get_header();?>

  <section class="page-wrap">



      <div class="container page">


          <h1 class="text-center title"><?php the_title();?></h1>

          <?php get_template_part('includes/section', 'blogcontent');?>


      </div>



  </section>


  
  <footer class="footer">
      
      <?php get_footer();?>
  
  </footer>