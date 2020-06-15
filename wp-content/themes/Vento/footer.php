<footer class="margin-beetwen footer">
    <p>
        <?= date('Y') ?> All right reserved &diams; Vento Michael
    </p>
    <div itemscope itemtype="http://schema.org/Organization">
        <a itemprop="sameAs" href="https://github.com/VentoMichael">
            <img src="<?= mv_get_theme_asset("/src/svg/github.svg"); ?>"
                 alt="Github de Vento Michael">
        </a>
        <a itemprop="sameAs" href="https://www.facebook.com/michael.vento.3158">
            <img src="<?= mv_get_theme_asset("/src/svg/facebook.svg"); ?>"
                 alt="Facebook de Vento Michael">
        </a>
        <a itemprop="sameAs" href="https://www.instagram.com/vento_toto/?hl=fr">
            <img src="<?= mv_get_theme_asset("/src/svg/instagram.svg"); ?>"
                 alt="Instagram de Vento Michael">
        </a>
        <a itemprop="sameAs" href="https://www.linkedin.com/in/michael-vento-96a1b5196/">
            <img src="<?= mv_get_theme_asset("/src/svg/linkedin.svg"); ?>"
                 alt="Linkedin de Vento Michael">
        </a>
    </div>
    <div class="translateDiv">
        <?php echo do_shortcode('[gtranslate]'); ?>
    </div>
</footer>
</div>
<script src="<?= mv_get_theme_asset("dist/app.js"); ?>">
</script>
</body>
</html>