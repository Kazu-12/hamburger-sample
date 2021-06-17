<?php
    //テーマサポート
    register_nav_menus();
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-header' );
    add_theme_support( "custom-background");
    add_theme_support( "wp-block-styles" ) ;
    add_theme_support( "responsive-embeds" ) ;
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( "custom-logo" ) ;
    add_theme_support( "align-wide" ) ;

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

    //CSS,JS読み込み
    function hamburger_script(){
        wp_enqueue_style('google-roboto-pre','//fonts.gstatic.com');
        wp_enqueue_style('google-roboto-font','//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        wp_enqueue_style('hamburger',get_template_directory_uri() . '/css/hamburger.css' , array() , '1.0.0');
        wp_enqueue_style('style',get_template_directory_uri() . '/style.css' , array() , '1.0.0');
        wp_enqueue_script('jquery' , get_template_directory_uri() . '/js/jquery-3.6.0.min.js' , array() , '3.6.0');
        wp_enqueue_script('script' , get_template_directory_uri() . '/js/script.js' , array() , '1.0.0');
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    //editor_style読み込み
    function hamburger_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
    }
    add_action( 'admin_init', 'hamburger_theme_add_editor_styles' );

    //Widget設定
    function hamburger_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'メニューウィジェット',
                'id'            => 'menu_widget',
                'description'   => 'メニュー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="sidebar %2$s">',
                'after_widget'  => '</div>',
            )
        );
    }
    add_action( 'widgets_init', 'hamburger_widgets_init' );

    //menu位置設定
    register_nav_menus(
        array(
            'sidebar' => 'サイドバー',
            'footer' => 'フッター',
        )
    );

    //説明でHTML使用可能に
    remove_filter( 'pre_term_description', 'wp_filter_kses' );

    //search.phpの投稿表示を5に変更
    function change_posts_per_page($query) {
        if ( is_admin() || ! $query->is_main_query() )
            return;
     
        if ( $query->is_search() ) {
            $query->set( 'posts_per_page', '5' );
        }
    }
    add_action( 'pre_get_posts', 'change_posts_per_page' );


    if ( ! isset( $content_width ) ) {
        $content_width = 1920;
    }