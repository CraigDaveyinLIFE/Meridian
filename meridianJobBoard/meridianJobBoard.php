<?php

    /**
     *
     * Plugin Name: Meridian Job Board
     * Plugin URI: https://www.inlife.co.uk/
     * Version: 1.0
     * Description: This is the official plugin for the Meridian Website job system
     * Author: inLIFE Design LTD
     * Author URI: https://www.inlife.co.uk/
     *
     */

    function add_meridian_job_board_main_page(){

        add_menu_page(
            'Meridian Jobs',
            'Meridian Jobs',
            'manage_options',
            'meridian-jobs',
            'add_meridian_job_board_main_page_html',
            '',
            5
        );

    }

    function add_meridian_job_board_main_page_html(){


    }

    add_action('init' , 'add_meridian_job_board_main_page');

    include 'includes/sub-pages.php';
    include 'includes/post-types.php';
    include "includes/meta-boxes.php";

?>