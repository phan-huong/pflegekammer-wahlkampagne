<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?><?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <!-- Main theme CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/main.css">
    <!-- Start automatic head of WP -->
    <?php wp_head(); ?>
    <!-- End automatic head of WP -->
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!-- Navigation bar -->
        <?php get_template_part('template-parts/general', 'navigation'); ?>
        <?php get_template_part('template-parts/general', 'hero') ?>
    </header>