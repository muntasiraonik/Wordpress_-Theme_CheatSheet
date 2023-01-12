<?php
function theme_option_page()
{
?>
    <div class="wrap">
        <h1>Theme Options</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("theme-options-grp");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
<?php } ?>
<?php
function add_theme_menu_item()
{
    add_theme_page("Theme Options", "Theme Options", "manage_options", "theme-options", "theme_option_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");
function theme_section_description()
{
    echo '';
}
function test_theme_settings()
{
    add_option('first_field_option', 1);
    add_settings_section(
        'first_section',
        '',
        'theme_section_description',
        'theme-options'
    );
    add_settings_field('ig_url', 'Disqus Short Code', 'display_disqus', 'theme-options', 'first_section');
    register_setting('theme-options-grp', 'test_d_c');
    add_settings_field('twitter_url', 'Twitter Profile Url', 'display_test_twitter_element', 'theme-options', 'first_section');
    register_setting('theme-options-grp', 'test_twitter_url');
    add_settings_field('facebook_url', 'Facebook Profile Url', 'display_test_facebook_element', 'theme-options', 'first_section');
    register_setting('theme-options-grp', 'test_facebook_url');
    add_settings_field('header_image_url', 'Logo', 'display_header_image_element', 'theme-options', 'first_section');
    register_setting('theme-options-grp', 'test_header_image_url');
    add_settings_field('sidebar_aff_notice', 'Sidebar Affiliate Notice', 'display_sidebar_aff_notice', 'theme-options', 'first_section');
    register_setting('theme-options-grp', 'post_sidebar_aff_notice');
}
function display_disqus()
{
?>
    <input type="text" name="test_d_c" id="test_d_c" value="<?php echo get_option('test_d_c'); ?>" />
<?php
}
function display_test_twitter_element()
{
?>
    <input type="text" name="test_twitter_url" id="test_twitter_url" value="<?php echo get_option('test_twitter_url'); ?>" />
<?php
}
function display_test_facebook_element()
{
?>
    <input type="text" name="test_facebook_url" id="test_facebook_url" value="<?php echo get_option('test_facebook_url'); ?>" />
<?php
}
function display_header_image_element()
{
?>
    <input type="text" name="test_header_image_url" id="test_header_image_url" value="<?php echo get_option('test_header_image_url'); ?>" />
<?php
}
function display_sidebar_aff_notice()
{
?>
    <input type="text" name="post_sidebar_aff_notice" id="post_sidebar_aff_notice" value="<?php echo get_option('post_sidebar_aff_notice'); ?>" />
<?php
}
add_action('admin_init', 'test_theme_settings');
?>