<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="l-contents">
        <div class="l-contents__left">
            <header class="l-header">
                <div class="c-button"><a class="c-button__menu">Menu</a></div>
                <div class="p-header-title">
                    <h1>
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo( 'name' ) ?></a>
                    </h1>
                    <?php get_search_form(); ?>
                </div>
            </header>