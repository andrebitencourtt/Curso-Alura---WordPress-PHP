<!doctype html>
<html>
<head>
    <?php $home = get_template_directory_uri(); ?>
    <meta charset="utf-8">

    <title>
		<?php get_titulo(); ?>
    </title>
    
    <link rel="stylesheet" href="<?= $home; ?>/css/reset.css">
	<link rel="stylesheet" href="<?= $home; ?>/css/comum.css">
    <link rel="stylesheet" href="<?= $home; ?>/css/header.css">
    
    <link rel="stylesheet" href="<?= $home; ?>/css/<?= $css_escolhido; ?>.css">

    <?php wp_head(); ?>
</head>

<body>

<header>
    <div class="container">
        <?php
        
        $args = array(
        
            'theme_location' => 'header-menu'

        );
        wp_nav_menu( $args );
        ?>
    </div>
</header>