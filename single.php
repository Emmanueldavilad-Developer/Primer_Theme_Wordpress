<?php get_header(); ?>
   
   
   <!-- contenido articulo -->
   
     <div class="container">
            <div class="row">
               <!--articulo-->
               <div class="col-12 col-md-9 my-5">
                  
                   <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?> 
                    <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('post-thumbnails', array( 'class' => 'img-fluid' ) );
            }?>
                   <h2 class="my-3"><?php the_title(); ?></h2>
                   <p class="lead"><?php echo get_the_date(); ?></p>
                   <div class="text-justify">
                   <?php the_excerpt(); ?>
                    <?php the_content(); ?>
               </div>
               
               <?php endwhile; ?>
            <?php endif; ?>
               
               
               
                <!--fin articulo--> 
                <!-- aside -->
                <div class="col-12 col-md-3">
                    <?php get_sidebar(); ?>
                    
                </div>
                <!--fin aside -->
            </div>
        </div>
       
   <!-- fin contenido articulo -->
    
    <?php get_footer(); ?>