<footer class="l-footer p-footer">
    <?php wp_nav_menu(array(
        'theme_location' => 'footer',
    )); ?>
    <div class="p-footer__copy">
        <p>Copyright: <?php bloginfo( 'name' ) ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>