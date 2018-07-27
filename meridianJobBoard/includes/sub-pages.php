<?php

    function add_meridian_sub_pages(){

        add_submenu_page(
            'meridian-jobs',
            'Jobs',
            'Jobs',
            'manage_options',
            'edit.php?post_type=meridian_job'
        );

        add_submenu_page(
            'meridian-jobs',
            'Applications',
            'Applications',
            'manage_options',
            'edit.php?post_type=meridian_apps'
        );

        add_submenu_page(
            'meridian-jobs',
            'Settings',
            'Settings',
            'manage_options',
            'settings'
        );

    }

    add_action('init' , 'add_meridian_sub_pages');

?>