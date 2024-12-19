executing:  single-post.php 

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1> <?php the_title(); ?> </h1>
        <p> <?php the_content(); ?> </p>
    <?php endwhile; ?>
<?php else : ?>
    <p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p> <!-- // it will redirect to 404 page if no post were found -->
   
    
<?php endif; ?>
 

<?php get_footer(); ?>