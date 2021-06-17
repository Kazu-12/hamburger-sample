<?php get_header(); ?>

<main class="l-main--single">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="p-main-visual p-main-visual--page">
                    <h1><?php the_title(); ?></h1>
                </div>
                <article class="p-article--page">
                    <?php the_content(); ?>
                </article>
            </section>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Pageが見つかりませんでした</p>
    <?php endif; ?>
</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>