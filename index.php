<?php get_header(); ?>
    <!-- contenido -->
    <div class="container my-5">
        <div class="row">
            <!-- articulo -->
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
           <div class="card ">
             <!--card-img-top img-fluid-->
              <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid' ) );
            }?></a>
              <div class="card-block">
                <a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
                <p class="card-text"><?php the_excerpt(); ?></p>
              </div>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo get_the_date(); ?> / <?php the_category(', '); ?> / <?php the_author(); ?></small>
          </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>

            <!-- fin del articulo -->
        </div>
    </div>
    
    <!-- fin del contenido -->
    <?php get_footer(); ?>
    