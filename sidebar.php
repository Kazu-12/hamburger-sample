    <div class="l-contents__right">

        <article class="l-contents__sidebar p-sidebar">
            <div class="c-button__menu-close">
                <span class="c-button__menu-close__1"></span>
                <span class="c-button__menu-close__2"></span>
            </div>
            <ul class="p-sidebar__menu--main">
                <?php
                if (is_active_sidebar('menu_widget')) :
                    dynamic_sidebar('menu_widget');
                else :
                ?>
                    <div class="widget">
                        <h2>No Widget</h2>
                        <p>ウィジットは設定されていません。</p>
                    </div>
                <?php endif; ?>
            </ul>
        </article>
    </div> <!-- l-contents -->
    </div>