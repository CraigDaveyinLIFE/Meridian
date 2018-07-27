<?php

    function add_meridian_job_meta_boxes(){

        add_meta_box(
            'job_details',
            'Job Details',
            'job_details_html',
            'meridian_apps',
            'side',
            'normal'
        );

    }

    function job_details_html(){

    }

    add_action('add_meta_boxes' , 'add_meridian_job_meta_boxes');

?>