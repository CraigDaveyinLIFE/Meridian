<?php

    function add_meridian_job_meta_boxes(){

        add_meta_box(
            'meridian_job_details' ,
            'Job Details' ,
            'job_details_html' ,
            'meridian_job' ,
            'normal' ,
            'default'
        );

        add_meta_box(
            'meridian_job_descriptions' ,
            'Job Description' ,
            'meridian_job_descriptions_html' ,
            'meridian_job' ,
            'normal' ,
            'high'
        );

        add_meta_box(
            'meridian_job_small_desc' ,
            'Small Description' ,
            'meridian_job_small_desc_html' ,
            'meridian_job' ,
            'normal' ,
            'default'
        );

        add_meta_box(
            'meridian_job_expiry_date' ,
            'Expiry date' ,
            'meridian_job_expiry_date_html' ,
            'meridian_job' ,
            'side' ,
            'default'
        );

        add_meta_box(
            'meridian_job_featured' ,
            'Featured' ,
            'meridian_job_featured_html' ,
            'meridian_job' ,
            'side' ,
            'default'
        );

    }

    add_action('add_meta_boxes' , 'add_meridian_job_meta_boxes');

    function job_details_html($id){

        ob_start();
        include 'metabox-templates/metabox-job-details.php';
        $html = ob_get_clean();

        echo $html;

    }

    function meridian_job_small_desc_html($id){
        $content = get_post_meta($id , '_meridian-small-description' , true);
        echo wp_editor($content , '_meridian-small-description' , array("media_buttons" => true));
    }

    function meridian_job_descriptions_html($id){
        $content = get_post_meta($id , '_meridian-description' , true);
        echo wp_editor($content , '_meridian-description' , array("media_buttons" => true));
    }

    function meridian_job_expiry_date_html($id){

        echo '<input type="date" class="widefat" name="_meridian-expiry-date">';
    }

    function meridian_job_featured_html($id){

        echo '<div style="background: #eaff005e; padding: 10px; margin-bottom: 10px;">Please note that only one job can be featured at any one time.</div>';
        echo '<input type="checkbox">';
    }

?>