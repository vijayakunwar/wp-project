executing: archive.php

<?php get_header(); ?>

<!-- DISPLAY all POST BY CATEGORY -->

<section class="page-wrap">
    <div class="container">

        <?php get_template_part('includes/section-archive'); ?>
        <!-- Pagination with Next and Previous button -->
         <?php previous_posts_link(); ?>
         <?php next_posts_link(); ?>


        <!-- Pagniation with page number -->
        <?php
       /*  global $wp_query;
        $big = 999999999; // need an unlikely integer

        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages
        )); */
        ?>

    </div>
</section>

<?php get_footer(); ?>