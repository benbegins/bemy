<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="page-facturation">
<?php wp_body_open(); ?>



<?php 
    // Check if user is logged
    if(!is_user_logged_in()){
        wp_redirect( get_site_url());
        exit;
    }
?>