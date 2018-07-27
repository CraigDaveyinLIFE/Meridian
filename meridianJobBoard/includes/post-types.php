<?php

    function register_meridian_jobs_post_types(){

        $jobs_args = array(
            'label' => 'Jobs',
            'public' => true,
            'show_in_menu' => false,
            'rewrite' => array(
                'slug' => 'job'
            )
        );

        register_post_type(
            'meridian_job',
            $jobs_args
        );

        $application_args = array(
            'label' => 'Applications',
            'public' => false,
            'show_in_menu' => false
        );

        register_post_type(
            'meridian_apps',
            $application_args
        );

    }

    add_action('init' , 'register_meridian_jobs_post_types');

?>