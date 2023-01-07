<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>


# Calling the header.php

<?php
get_header();
?>


# Basic format which pulls 9 latest posts
# If you want specific posts from a specific category just pass 'category_name' => "Category Name" inside the WP_Query
# If you want to show a separate section for each category posts, leave a comment, I will add it for you. I am just keeping it simple.

<div class="blogs-content">
                <div class="blogs">


                    <?php
                    // wp-query to get all published posts without pagination
                    $allPostsWPQuery = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 9)); ?>

                    <?php if ($allPostsWPQuery->have_posts()) : ?>


                        <?php while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post(); ?>

                            <?php
                            $post_id        = $recent['ID'];
                            $post_url       = get_permalink($recent['ID']);
                            $post_title     = $recent['post_title'];
                            $post_thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post_id));
                            $category_id = get_cat_ID(get_the_category($post_id)[0]->name);
                            $category_link = get_category_link($category_id);


                            ?>

                            <div class="blog">
                                <img src="<?php echo $post_thumbnail ?>" alt="<?php the_title(); ?>">
                                <div class="blog-text">
                                    <div class="pag-btn" id="pag-prev">
                                        <a href="<?php echo $category_link ?>"><?php echo get_the_category($post_id)[0]->name ?></a>
                                    </div>
                                    <a href="<?php echo $post_url ?>" class="blogLinks">
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


                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p style="text-align: center;"><?php _e('There are no posts to display.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>


# Calling the footer.php

<?php
get_footer();
?>