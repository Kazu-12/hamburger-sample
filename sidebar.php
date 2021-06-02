<div class="l-contents__right">
    
    <article class="l-contents__sidebar p-sidebar">
        <div class="c-button__menu-close">
            <span class="c-button__menu-close__1"></span>
            <span class="c-button__menu-close__2"></span>
        </div>
        <ul class="p-sidebar__menu--main">
            <?php
                if ( is_active_sidebar( 'category_widget' ) ) :
                dynamic_sidebar( 'category_widget' );
                else:
            ?>
            <div class="widget">
                <h2>No Widget</h2>
                <p>ウィジットは設定されていません。</p>
            </div>
            <?php endif; ?>

                    <li><a href="#">バーガー</a>
                        <ul class="p-sidebar__menu--sub">
                            <li><a href="#">ハンバーガー</a></li>
                            <li><a href="#">チーズバーガー</a></li>
                            <li><a href="#">テリヤキバーガー</a></li>
                            <li><a href="#">アボカドバーガー</a></li>
                            <li><a href="#">フィッシュバーガー</a></li>
                            <li><a href="#">ベーコンバーガー</a></li>
                            <li><a href="#">チキンバーガー</a></li>
                        </ul>
                    </li>

                    <li><a href="#">サイド</a>
                        <ul class="p-sidebar__menu--sub">
                            <li><a href="#">ポテト</a></li>
                            <li><a href="#">サラダ</a></li>
                            <li><a href="#">ナゲット</a></li>
                            <li><a href="#">コーン</a></li>
                        </ul>
                    </li> 

                    <li><a href="#">ドリンク</a>
                        <ul class="p-sidebar__menu--sub">
                            <li><a href="#">コーラ</a></li>
                            <li><a href="#">ファンタ</a></li>
                            <li><a href="#">オレンジ</a></li>
                            <li><a href="#">アップル</a></li>
                            <li><a href="#">紅茶（Ice/Hot）</a></li>
                            <li><a href="#">コーヒー（Ice/Hot）</a></li>
                        </ul>
                    </li>
                </ul>
            </article>
        </div>
    </div>