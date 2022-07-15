<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

?>

# Pulling the Page Title
<?php the_title('<h1 class="post-title">', '</h1>'); ?>

# Pulling the content
# Check i am wrapping the Php code with a Div
# It will pull the content From Wordpress CMS

<div class="article-content">
    <?php
    the_content();
    ?>
</div>

# I already Mentioned how to Use Template Parts inside archive.php
# I am going to Pull 4 Recent Posts Excluding the Current Post


<div class="sideBar">
<!-- * Recent Posts * -->
<?php while (have_posts()) : the_post(); // standard WordPress loop. 
?>
    <?php
    get_template_part('template-parts/content', 'recent');
    ?>
<?php endwhile; // end of the loop. 
?>
<!-- *End Recent Posts * -->

</div>