executing: page.php


<?php
$current_url = $_SERVER['REQUEST_URI'];
echo $current_url;
if ($current_url === '/wptestsite.com/home/') {
    //header('Location: /');
    wp_redirect(home_url());
    exit;
}
?>






<?php get_header(); ?>

<?php the_title(); ?>
<?php the_content(); ?>


<?php get_footer(); ?>