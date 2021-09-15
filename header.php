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
        <img class="logo" src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="logo" width="100" height="100"></a>
    <div class="navigation">
        <div class="ham-btn" onclick="showNav()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="links">
            <div class="link">
            <a href="#">Home</a>
            </div>
            <div class="link">
            <a href="#">Poland</a>
            </div>
            <div class="link">
            <a href="#">Texas</a>
            </div>
            <div class="link">
            <a href="#">Afghanistan</a>
            </div>
            <div class="link">
            <a href="#">Japan</a>
            </div>
            <div class="link">
            <a href="#">Global</a>
            </div>
        </div>
    </div>
</div>
