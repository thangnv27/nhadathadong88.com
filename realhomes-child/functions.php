<?php

if (is_admin()) {
    $basename_excludes = array('plugins.php', 'plugin-install.php', 'plugin-editor.php', 'theme-install.php', 'theme-editor.php', 'import.php', 'export.php');
    if (in_array(basename($_SERVER['PHP_SELF']), $basename_excludes)) {
        wp_redirect(admin_url());
    }

    add_action('admin_menu', 'ppo_remove_menu_pages');
    add_action('admin_menu', 'ppo_remove_menu_editor', 102);
}

/**
 * Remove admin menu
 */
function ppo_remove_menu_pages() {
    // remove_menu_page('edit-comments.php');
    remove_menu_page('plugins.php');
    remove_menu_page('tools.php');
}

function ppo_remove_menu_editor() {
    remove_submenu_page('themes.php', 'theme-editor.php');
    remove_submenu_page('plugins.php', 'plugin-editor.php');
    remove_submenu_page('options-general.php', 'options-writing.php');
//    remove_submenu_page('options-general.php', 'options-discussion.php');
    remove_submenu_page('options-general.php', 'options-media.php');
}
