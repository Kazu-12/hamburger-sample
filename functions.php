<?php
    //テーマサポート
    add_theme_support('menus');
    add_theme_support('title-tag');

    //タイトル出力
    function hamburger_title($title){
        if (is_front_page() && is_home() ){ //トップページなら
            $title = get_bloginfo('name','display');
        } elseif (is_singular() ){ //シングルページなら
            $title = single_post_title('',false);
        }
            return $title;
    }
    add_filter('pre_get_document_title','hamburger_title');

    function hamburger_script(){
        wp_enqueue_style('google-roboto-pre','//fonts.gstatic.com');
        wp_enqueue_style('google-roboto-font','//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        wp_enqueue_style('hamburger',get_template_directory_uri() . '/css/hamburger.css' , array() , '1.0.0');
        wp_enqueue_style('style',get_template_directory_uri() . '/style.css' , array() , '1.0.0');
        wp_enqueue_script('jquery' , get_template_directory_uri() . '/js/jquery-3.6.0.min.js' , array() , '3.6.0');
        wp_enqueue_script('script' , get_template_directory_uri() . '/js/script.js' , array() , '1.0.0');
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );