<?php get_header(); ?>

<main class="l-main">
    <div class="p-main-visual p-main-visual--front-page">
        <h1><?php bloginfo( 'description' ) ?></h1>
    </div>
    <article class="p-article">
        <div class="p-branch-menu">
            <ul>
                <li class="p-branch-menu__take-out">
                <a href="<?php echo esc_url(get_category_link(26)); ?>"><h2>Take Out</h2></a>
                    <div class="p-branch-menu__txt">
                        <dl class="p-branch-menu__txt-box">
                            <dt>
                                <h3>小見出しが入ります</h3>
                            </dt>
                            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                        </dl>
                        <dl class="p-branch-menu__txt-box">
                            <dt>
                                <h3>小見出しが入ります</h3>
                            </dt>
                            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                        </dl>
                    </div>
                </li>
                <li class="p-branch-menu__eat-in">
                <a href="<?php echo esc_url(get_category_link(25)); ?>"><h2>Eat In</h2></a>
                    <div class="p-branch-menu__txt">
                        <dl class="p-branch-menu__txt-box">
                            <dt>
                                <h3>小見出しが入ります</h3>
                            </dt>
                            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                        </dl>
                        <dl class="p-branch-menu__txt-box">
                            <dt>
                                <h3>小見出しが入ります</h3>
                            </dt>
                            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                        </dl>
                    </div>
                </li>
            </ul>
        </div>

        <section class="p-map">
            <div class="p-map__back">
                <div class="p-map__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.8085325534116!2d139.7438779655504!3d35.6570886889025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1620598205785!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="p-map__txt">
                    <h3>見出しが入ります</h3>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
            </div>
        </section>
    </article>
</main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>