<form class="p-search" method="get" action="<?PHP echo home_url('/'); ?>">
    <div class="p-search__box">
        <input class="p-search__txt" type="text" name="s" id="s" value="<?php the_search_query(); ?>">
    </div>
    <input class="p-search__button" type="submit" value="検索">
</form>