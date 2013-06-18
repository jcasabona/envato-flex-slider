<?php
define('EFS_CPT_NAME', "Slider Images");
define('EFS_SINGLE', "Slider Image");
define('EFS_TYPE', "slider-image");
define('EFS_THUMB_SIZE', 500);

add_theme_support('post-thumbnails', array('slider-image'));  
  
function efs_register() {  
    $args = array(  
        'label' => __(EFS_CPT_NAME),  
        'singular_label' => __(EFS_SINGLE),  
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => true,  
        'supports' => array('title', 'editor', 'thumbnail')  
       );  
  
    register_post_type(EFS_TYPE , $args );  
    set_post_thumbnail_size(EFS_THUMB_SIZE);
}  


add_action('init', 'efs_register');

?>