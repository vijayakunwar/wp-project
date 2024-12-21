<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="card mb-3">
            <div class="card-body">

                <h1> <?php the_title(); ?> </h1>
                <p> <?php the_excerpt(); ?> </p>
                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>

            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p> <?php echo ('Sorry, no posts matched your criteria.'); ?> </p> <!-- // it will redirect to 404 page if no post were found -->
<?php endif; ?>