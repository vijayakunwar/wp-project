executing: category-tutorial.php



<?php get_header(); ?>


<!-- DISPLAY all POST BY CATEGORY -->

<section class="page-wrap">
    <div class="container">

        <?php get_template_part('includes/section-archive'); ?>
        <!-- Pagination with Next and Previous button -->
         <?php previous_posts_link(); ?>
         <?php next_posts_link(); ?>

    </div>
</section>



<?php get_footer(); ?>