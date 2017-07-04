<?php get_header(); ?>
   
   
   <!-- contenido menu -->
   
<div class="container my-5">
   
   <?php if ( have_posts() ) : ?>
   <?php while ( have_posts() ) : the_post(); ?>
   
   
    <h2><?php the_title(); ?></h2>
    <div class="text-justify">
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    
    
</div>
   
   <!-- fin contenido menu -->
    
<?php get_footer(); ?>