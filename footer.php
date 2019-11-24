<?php
/**
 ************************************************************************************************************************
 ************************************************************************************************************************
 * @package     Cast
 ************************************************************************************************************************
 */
?>
    </div>
    <footer id="footer" class="site-footer">
        <div class="site-info">
            <?php printf( esc_html__( 'Copyright &#169; %1$s. %2$s', 'white-spektrum' ), date_i18n( 'Y' ), Benlumia007\Backdrop\Site\output_site_link()); ?><br />
            <?php printf( esc_html__( 'Powered By %1$s and %2$s', 'white-spektrum' ), Benlumia007\Backdrop\Site\output_wp_link(), Benlumia007\Backdrop\Site\output_theme_link()); ?>
        </div>
    </footer>
</section>
</body>
<?php wp_footer(); ?>
</head>
</html>
