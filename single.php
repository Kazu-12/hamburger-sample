<?php get_header(); ?>

<main class="l-main--single">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="p-main-visual p-main-visual--single">
                    <h1><?php the_title(); ?></h1>
                    <?php the_post_thumbnail(); ?>
                </div>
                <article class="p-article--single">
                    <p class="c-tag">
                        <?php the_tags('<span>タグ</span>'); ?>
                    </p>
                    <?php the_content(); ?>
                    <div class="p-page-link">
                        <?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink= %'); ?>
                    </div>
                </article>
            </section>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Menuが見つかりませんでした</p>
    <?php endif; ?>
</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>