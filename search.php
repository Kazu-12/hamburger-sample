<?php get_header(); ?>

<main class="l-main">
    <div class="p-main-visual p-main-visual--archive">
        <div class="p-main-visual--archive--black-back">
            <h1>Search:</h1>
            <p><?php the_search_query(); ?></p>
        </div>
    </div>
    <article class="p-article">
        <section class="p-main-description">
            <h2>小見出しが入ります</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </section>
        <div class="p-menu-list">
            <p class="c-menu-card__comment"><?php echo $wp_query->found_posts; ?>件の記事がヒットしました。</p>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <section class="c-menu-card">
                            <?php the_post_thumbnail(); ?>
                            <div class="c-menu-card__description">
                                <h1><?php the_title(); ?></h1>
                                <div class="c-menu-card__txt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <p class="c-menu-card__detail-btn">
                                    <a href="<?php the_permalink(); ?>">詳しく見る</a>
                                </p>
                            </div>
                        </section>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </article>

    <div class="p-pagination">
        <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
        } ?>
    </div>

</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>