<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header style="background:#0073aa; padding:15px; color:#fff; text-align:center;">
    <h1><a href="<?php echo home_url(); ?>" style="color:#fff; text-decoration:none;"><?php bloginfo('name'); ?></a></h1>
</header>
<main class="container">
