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
            <h2>小見出しが入ります</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </section>
        <div class="p-menu-list">

            <?php if (have_posts()): ?>
                <?php while (have_posts()): ?>
                    
                    <?php the_post(); ?>
                    <section class="c-menu-card">
                        <img src="<?php the_post_thumbnail(); ?>">
                        <div class="c-menu-card__description">
                            <h3><?php the_title(); ?></h3>
                            <h4><?php the_content(); ?></h4>
                            <p class="c-menu-card__detail-btn">
                                <a href="<?php the_permalink(); ?>">詳しく見る</a>
                            </p>
                        </div>
                    </section>

                <?php endwhile; ?>
            <?php else :?>
                <p>Menuが見つかりませんでした</p>
            <?php endif; ?>
        </div>
    </article>
    <div class="p-pagination">
        <?php echo paginate_links(); ?>
        <ul>
            <li class="p-pagination__nav">Page 1/10</li>
            <li class="p-pagination__arrow"><a><img src="<?php echo get_template_directory_uri() ?>/img/pre.svg" alt="前へ"><span>&nbsp;前へ</span></a></li>
            <li class="p-pagination__num current-page"><a>1</a></li>
            <li class="p-pagination__num"><a>2</a></li>
            <li class="p-pagination__num"><a>3</a></li>
            <li class="p-pagination__num"><a>4</a></li>
            <li class="p-pagination__num"><a>5</a></li>
            <li class="p-pagination__num"><a>6</a></li>
            <li class="p-pagination__num"><a>7</a></li>
            <li class="p-pagination__num"><a>8</a></li>
            <li class="p-pagination__num"><a>9</a></li>
            <li class="p-pagination__arrow"><a><span>次へ&nbsp;</span><img src="<?php echo get_template_directory_uri() ?>/img/post.svg" alt="次へ"></a></li>
        </ul>
    </div>
</main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>