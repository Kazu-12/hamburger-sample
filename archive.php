<?php get_header(); ?>

<main class="l-main">
    <div class="p-main-visual p-main-visual--archive">
        <div class="p-main-visual--archive--black-back">
            <h1>Menu:</h1>
            <p><?php single_cat_title(); ?></p>
        </div>
    </div>
    <article class="p-article">
        <section class="p-main-description">
            <?php echo category_description(); ?>
        </section>
        <div class="p-menu-list">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

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

                <?php endwhile; ?>
            <?php else : ?>
                <p class="c-menu-card__non">Menuが見つかりませんでした</p>
            <?php endif; ?>

        </div>
    </article>
    <div class="p-pagination">
        <?php if(function_exists('wp_pagenavi')){ wp_pagenavi(); } ?>
    </div>
</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>