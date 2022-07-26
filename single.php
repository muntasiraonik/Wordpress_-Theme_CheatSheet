<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

?>

# Loop for Pulling the Category

<?php
    $categories = get_the_category();
    foreach ($categories as $category) : endforeach;
?>

# Pull the Slug of Category
<?php echo $category->slug; ?>

# Pull the Name of Category
<?php echo $category->name; ?>

# Current Post Slug
<?php echo get_permalink() ?>


# Post content

<?php
    the_content();
?>

<!-- * WRITER BOX * -->
<?php while (have_posts()) : the_post(); // standard WordPress loop. ?>
    <?php get_template_part('template-parts/content', 'authorbox'); ?>
<?php endwhile; // end of the loop. 
?>
<!-- * WRITER BOX END * -->


<!-- * DISQUS THREAD * -->
<?php
    comments_template();
?>
<!-- * DISQUS THREAD END * -->

