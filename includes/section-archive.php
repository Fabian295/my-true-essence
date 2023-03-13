<?php if( have_posts() ) : while( have_posts() ) : the_post();?>

  <div class="card">

    <div class="card-body">
      <h3 class="text-center title"><?php the_title();?></h3>

      <div class="card__content">
        <?php the_excerpt();?>
        
        <a href="<?php the_permalink();?>">Read more...</a>
      </div>
      
    </div>  
    
  </div> 



<?php endwhile; else: endif;?>