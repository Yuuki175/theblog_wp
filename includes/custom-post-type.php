<?php

function theblog_custom_post() {

    $blogPost_Label = array(
        'name'                  => __('Blog Post', 'textdomain'),
        'singular_name'         => __('Blog Post', 'textdomain'),
        'add_new'               => __('Add Blog Post', 'textdomain'),
        'add_new_item'         => __('Add New Blog', 'textdomain'),
        'edit_item'            => __('Edit Blog Post', 'textdomain'),
        'all_items'             => __('Blog Post', 'textdomain')
    );

    $blogPost_args = array(
        'labels'                => $blogPost_Label,
        'public'                => true,
        'capabality_type'       => 'post',
        'show_ui'               => true,
        'taxonomies'            => array ('post_tag', 'category'),
        'supports'              => array ('title','editor','thumbnail','excerpt')

    );

    register_post_type('blogPost',$blogPost_args);

    $latestPost_Label = array(
        'name'                  => __('Latest Post', 'textdomain'),
        'singular_name'         => __('Latest Post', 'textdomain'),
        'add_new'               => __('Add Latest Post', 'textdomain'),
        'add_new_item'         => __('Add New Latest', 'textdomain'),
        'edit_item'            => __('Edit Latest Post', 'textdomain'),
        'all_items'             => __('Latest Post', 'textdomain')
    );

    $latestPost_args = array(
        'labels'                => $latestPost_Label,
        'public'                => true,
        'capabality_type'       => 'post',
        'show_ui'               => true,
        'taxonomies'            => array ('post_tag', 'category'),
        'supports'              => array ('title','editor','thumbnail','excerpt')

    );

    register_post_type('latestPost',$latestPost_args);

    $featuresPost_Label = array(
        'name'                  => __('Features Post', 'textdomain'),
        'singular_name'         => __('Features Post', 'textdomain'),
        'add_new'               => __('Add Features Post', 'textdomain'),
        'add_new_item'         => __('Add New Features', 'textdomain'),
        'edit_item'            => __('Edit Features Post', 'textdomain'),
        'all_items'             => __('Features Post', 'textdomain')
    );

    $featuresPost_args = array(
        'labels'                => $featuresPost_Label,
        'public'                => true,
        'capabality_type'       => 'post',
        'show_ui'               => true,
        'taxonomies'            => array ('post_tag', 'category'),
        'supports'              => array ('title','editor','thumbnail','excerpt')

    );

    register_post_type('featuresPost',$featuresPost_args);
}

add_action('init', 'theblog_custom_post');