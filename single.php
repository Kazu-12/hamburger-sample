<?php get_header(); ?>

<main class="l-main--single">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
                <div class="p-main-visual p-main-visual--single">
                    <h1><?php the_title(); ?></h1>
                </div>
                <article class="p-article">
                    <?php the_content(); ?>
                </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Menuが見つかりませんでした</p>
    <?php endif; ?>
        
        <section class="p-menu-detail">
            <img src="./img/cooked-foods_L.jpg" alt="メニュー" class="p-menu-detail__top-visual">
            <div class="p-menu-detail__description1">
                <img src="./img/cooked-food_S.png" alt="メニュー">
                <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
            </div>
            <div class="p-menu-detail__description2">
                <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                <img src="./img/cooked-food_S.png" alt="メニュー">
            </div>
            <div class="p-menu-detail__mid-visual">
                <img src="./img/cooked-food_S.png" alt="メニュー">
            </div>
            <div class="p-menu-detail__img-list">
                <img src="./img/cooked-food_S.png" alt="メニュー">
                <img src="./img/cooked-food_S.png" alt="メニュー">
                <img src="./img/cooked-food_S.png" alt="メニュー">
                <img src="./img/cooked-food_S.png" alt="メニュー">
                <img src="./img/cooked-food_S.png" alt="メニュー">
                <img src="./img/cooked-food_S.png" alt="メニュー">
                <img src="./img/cooked-food_S.png" alt="メニュー">
                <img src="./img/cooked-food_S.png" alt="メニュー">
                <img src="./img/cooked-food_S.png" alt="メニュー">
            </div>
        </section>
        <section class="p-single-list">
            <div class="p-single-list__num-list">
                <ul class="p-single-list__num-list--1">
                    <li>1.リストリストリスト</li>
                    <li>2.リストリストリスト</li>
                </ul>
                <ul class="p-single-list__num-list--2">
                    <li>1.リスト2リスト2リスト2</li>
                    <li>2.リスト2リスト2リスト2</li>
                </ul>
                <ul class="p-single-list__num-list--1">
                    <li>1.リストリストリスト</li>
                    <li>2.リストリストリスト</li>
                </ul>
            </div>
            <div class="p-single-list__normal-list">
                <ul class="p-single-list__normal-list--1">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
                <ul class="p-single-list__normal-list--2">
                    <li>リスト2リスト2リスト2</li>
                    <li>リスト2リスト2リスト2</li>
                </ul>
                <ul class="p-single-list__normal-list--1">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
            </div>
        </section>
        <div class="p-single-html-code">
            <p>&lt;html><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;head><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;/head><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;body><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;/body><br>
                &lt;/html>
            </p>
        </div>
        <div class="p-single-page-contents">
            <table class="c-table">
                <tr>
                    <td class="c-table__left">テーブル</td>
                    <td class="c-table__right">テーブル</td>
                </tr>
                <tr>
                    <td class="c-table__left">テーブル</td>
                    <td class="c-table__right">テーブル</td>
                </tr>
                <tr>
                    <td class="c-table__left">テーブル</td>
                    <td class="c-table__right">テーブル</td>
                </tr>
                <tr>
                    <td class="c-table__left">テーブル</td>
                    <td class="c-table__right">テーブル</td>
                </tr>
            </table>
            <button class="c-single-button" type="button">ボタン</button>
            <p class="p-single-page-contents__txt">boldboldboldboldboldboldbold</p>
        </div>
</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>