<?php

/**
 * Plugin Name: PHP Info Page
 * Description: Adds PHP Info to Tools Admin Menu which shows the phpinfo() information.
 */

function php_info_page()
{
    if (!current_user_can('manage_options')) {
        return;
    }

    // This is loaded in a frame to prevent CSS Styling issues

    ?>
    <div class="wrap">
        <iframe class="php_info_frame" src="<?= plugin_dir_url(__FILE__) ?>php-info-content.php"></iframe>
    </div>
<?php

}

function php_info_options_page()
{
    add_submenu_page(
        'tools.php',
        'PHP Info',
        'PHP Info',
        'manage_options',
        'php_info',
        'php_info_page'
    );
}
add_action('admin_menu', 'php_info_options_page');

function php_info_style( $hook )
{ 
    if ($hook == 'tools_page_php_info') {
        wp_enqueue_style('php_info_style', plugin_dir_url( __FILE__ ) . "php-info.css");
    }
}
add_action('admin_enqueue_scripts', 'php_info_style');