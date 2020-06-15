<?php
$loop = new WP_Query([
    'post_type' => 'projects',
    'posts_per_page' => -1
]);
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="Portfolio de Vento Michael, jeune Webdesigner, lancé depuis 2019 je crée toutes identitées visuelles quel que sois les difficultés.">
    <meta name="keywords"
          content="Portfolio,description, webdesigner, freelance, HTML, CSS, JS, Javascript, PHP">
    <meta name="author"
          content="Michael Vento">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta name="fb:page_id"
          content="3158"/>
    <meta name="og:email"
          content="vento.michael0705@hotmail.com"/>
    <meta name="og:locality"
          content="JUPRELLE"/>
    <meta name="og:region"
          content="WALLONE"/>
    <meta name="og:postal-code"
          content="4450"/>
    <meta name="og:country-name"
          content="BELGIUM"/>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet"
          href="<?= mv_get_theme_asset("/src/css/style-dist.css"); ?>">
    <title>
        <?php if (is_404()) {
            echo "404";
        } else {
            the_title();
        } ?>
        &ndash; Portfolio &verbar; &Vopf;&Mopf;
    </title>
</head>
<body style="border: none;
padding: inherit;
margin: inherit;
display: flex;
    flex-direction: column;
    height: 100%;
" id="top">
<!--[if IE]>
<p class="browserupgrade" style="max-width: inherit">You are using a browser <strong> obsolete </strong>. Please <a
        href="https://browsehappy.com/"> upgrade
    your browser </a> to improve your experience and your safety.
</p>
<![endif]-->
<p class="no-js__message" style="max-width: inherit">
    To access all the functionality of this site, you must activate JavaScript.<a
            href="https://www.enable-javascript.com/fr/">
        Here are the instructions to enable JavaScript in your web browser</a>
</p>
<div style="display: flex;
  flex-direction: column;
flex: 1 0 auto;">
    <header class="margin-beetwen">
        <div itemscope itemtype="https://schema.org/URL" class="logo"
             id="brand">
            <a itemprop="url"
               href="http://ventomichael.site/portfolio/"
               class="logo">
                <h1 itemscope itemtype="https://schema.org/ImageObject">
                    <img itemprop="logo"
                         src="<?= mv_get_theme_asset("src/svg/logo.svg"); ?>"
                         alt="Logo de Vento michael">
                </h1>
            </a>
        </div>
        <nav itemscope itemtype="http://schema.org/SiteNavigationElement">
            <h2 class="hidden">
                Navigation
            </h2>
            <div class="menu-icon">
                <span class="menu-icon__line menu-icon__line-left"></span>
                <span class="menu-icon__line"></span>
                <span class="menu-icon__line menu-icon__line-right"></span>
            </div>
            <div class="nav div__navigation">
                <div class="nav__content div__navigation_list">
                    <ul class="nav__list nav__content"
                        id="menu">
                        <?php foreach (mv_get_menu('main', 'nav-not_active') as $i => $link): ?>
                            <li class="nav__list-item">

                                <a itemprop="url"
                                   href="<?= $link->url; ?>"
                                   <?php if ($link->target): ?>target="<?= $link->target; ?>"<?php endif; ?>
                                   <?php if ($link->current): ?>aria-current="page"<?php endif; ?>
                                   class="<?= implode(' ', $link->classes); ?>"><span
                                            itemprop="name"><?= $link->label; ?></span></a>
                            </li>

                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <a      id="cBack"
                class="cBack scroll js-cd-top cInvisible"
                href="#"
                title="Back to the top">
            <span class="hidden">Back to the top</span>
        </a>
    </header>