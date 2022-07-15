# Please Ignore Html Markup
# It's used to Understand how it works

<div class="related_post_wrapper">
<div class="related_post_title">
    <h2 class="related_post_heading">Recent Posts</h2>
</div>

<div class="recent_blog_post">

    <?php
    $args = array('posts_per_page' => '4', 'post_status'    => 'publish', 'post__not_in' => array($post->ID));
    $recent_posts = new WP_Query($args);
    while ($recent_posts->have_posts()) :
        $recent_posts->the_post()
    ?>
        <?php
        $category_id = get_cat_ID(get_the_category(get_the_ID())[0]->name);
        $category_link = get_category_link($category_id);
        ?>


        <!-- Start ----------------- -->
        <div class="blog_post">
            <div class="blog_card">
                <div class="blog_card_wrapper">
                    <article class="blog_article">
                        <div class="blog_article_content">
                            <div class="blog_catagory">
                                <a class="blog_catagory_link" href="<?php echo $category_link ?>"><?php print get_the_category(get_the_ID())[0]->name; ?></a>
                            </div>
                            <a class="article_title" href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
                            <div class="article_footer">
                                <div class="article_author">
                                    <a class="author_name" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <strong><?php the_author(); ?></strong>
                                    </a>
                                </div>
                                <div class="articel_date">
                                    <div class="date-posted"><?php echo get_the_date('M d, Y'); ?></div>
                                    <div class="date-posted">
                                        <i class="fa-solid fa-stopwatch"></i>
                                        1 min
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<!-- End ----------------- -->

</div>

</div>