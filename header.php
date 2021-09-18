<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('encoding'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="nav">
    <a class="navbar-brand" href="#">
        <img class="logo" src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="logo"></a>
    <div class="navigation">
        <div class="ham-btn" onclick="showNav()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="links">
            <div class="link">
            <?php wp_nav_menu(array("theme-location" => "main-menu")) ?>
            </div>
        </div>
    </div>
</div>
