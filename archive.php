<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>


# Pulling Template Part
# Theme/template-parts/content-trendingbox.php
<?php
        get_template_part('template-parts/content', 'trendingbox');
?>

# Pulling Archive Title 
<?php echo str_replace('Category: ', '', get_the_archive_title()); ?>

# Pulling Archive Description (Set By Seo Tool)
# We are wrapping it with a P tag
<?php the_archive_description('<p>', '</p>'); ?>

# Pulling Posts from the Category
# First we will check if there is Post available or not 

<?php while (have_posts()) : the_post(); // standard WordPress loop. ?>

# A basic Html Format
# the_post_thumbnail_url will pull the Feature Image set for the Post 
# the_title will pull the Post Title 
# the_permalink will pull the Post Url
# Excerpt function will pull the first 140 Char of the Post

<?php $post_id = get_the_ID(); ?>
<div class="blog">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    <div class="blog-text">
        <a href="<?php the_permalink(); ?>" class="blogLinks">
            <h2>
                <?php the_title(); ?>
            </h2>
            <p>
                <?php $excerpt = get_the_excerpt();

                $excerpt = substr($excerpt, 0, 140); // Only display first 140 characters of excerpt
                $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                echo $result;
                ?>...
            </p>
        </a>
    </div>
</div>

<?php endwhile; // end of the loop. ?>

<!-- Pagination Section -->
# First If statement checks if we have Pagination or not
# You can set how many posts will be shown in the Archive page from Setting, I suggest to keep it to 6
<?php if (paginate_links()) { ?>
        <div class="pagination-container">
            <div class="pagination-wrapper">
                <div class="pag-btn" id="pag-prev">
                    <?php previous_posts_link(); ?>
                </div>

                <div class="pag-btn" id="pag-next">
                    <?php next_posts_link(); ?>
                </div>
            </div>
        </div>
    <?php } ?>