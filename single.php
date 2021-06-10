<?php get_header(); ?>

<main class="l-main--single">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
                <div class="p-main-visual p-main-visual--single">
                    <h1><?php the_title(); ?></h1>
                </div>
                <article class="p-article--single">
                    <?php the_content(); ?>
                </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Menuが見つかりませんでした</p>
    <?php endif; ?>
</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>