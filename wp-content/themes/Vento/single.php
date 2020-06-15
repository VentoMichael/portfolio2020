<?php
require("header.php");
?>
    <main style="flex: 1 0 auto;">
        <section class="section-presentation-home margin-space_top_bottom margin-beetwen project-computer">
            <div>
                <h2>
                    <?php the_field('titleproject'); ?>
                </h2>
                <div class="margin-text">
                    <p>
                        <?php the_field('textproject'); ?>
                    </p>
                </div>
                <div class="container">
                    <?php
                    $link = get_field('linkcontact');
                    if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a itemprop="url" class="btn-push btn-chat purple" href="<?php echo esc_url($link_url); ?>"
                           target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php
            $image = get_field('gifproject');
            if (!empty($image)): ?>
                <img itemprop="image"
                     class="first-svg first-svg-other-page project_page" src="<?php echo esc_url($image['url']); ?>"
                     alt="<?php echo esc_attr($image['alt']); ?>"/>
            <?php endif; ?>
        </section>

        <section class="section-picto margin-beetwen section_card_aboutMe">
            <h2>
                <?php the_field('titleinformationproject'); ?>
            </h2>
            <div class="section-div-picto picto_personnal_project margin-space_top_bottom" itemscope
                 itemtype="https://schema.org/Thing">
                <section class="module_first first-picto-home section-picto_text">
                    <div class="section-home-followingpoints">
                        <?php
                        $image = get_field('historyimage');
                        if (!empty($image)): ?>
                            <img itemprop="image"
                                 class="picto" src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>"/>
                        <?php endif; ?>

                        <h3 itemprop="name">
                            <?php the_field('titlehistory'); ?>
                        </h3>
                    </div>
                    <p itemprop="description">
                        <?php the_field('texthistory'); ?>
                    </p>
                </section>
                <section class="section-picto_text">
                    <div class="section-home-followingpoints">
                        <?php
                        $image = get_field('imageaim');
                        if (!empty($image)): ?>
                            <img itemprop="image"
                                 class="picto" src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>"/>
                        <?php endif; ?>
                        <h3 itemprop="name">
                            <?php the_field('titleaim'); ?>
                        </h3>
                    </div>
                    <p itemprop="description">
                        <?php the_field('textaim'); ?>
                    </p>
                </section>
            </div>
        </section>
        <section itemscope itemtype="https://schema.org/Thing"
                 class="section-brand section-project section-presentation-home margin-space_top_bottom margin-beetwen project-computer">
            <div class="text_title_project" itemscope itemtype="https://schema.org/Product">
                <h2 itemprop="name">
                    <?php the_field('titlebrand'); ?>
                </h2>
                <div class="margin-text">
                    <p itemprop="description">
                        <?php the_field('textbrand'); ?>
                    </p>
                </div>
            </div>
            <?php
            $image = get_field('representationbranding');
            if (!empty($image)): ?>
                <img itemprop="image"
                     class="section-project-svg first-svg-other-page project_page"
                     src="<?php echo esc_url($image['url']); ?>"
                     alt="<?php echo esc_attr($image['alt']); ?>"/>
            <?php endif; ?>
        </section>
        <section class="section_share">
            <h2 class="hidden">
                Social media
            </h2>
            <div class="div_share_project margin-beetwen" itemscope itemtype="https://schema.org/Thing">
                <div style="display: flex; justify-content: center;" itemscope
                     itemtype="https://schema.org/CreativeWork">
                    <div class="containerShare">
                        <a class="linkShare" itemprop="url"
                           href="https://www.addtoany.com/add_to/facebook?linkurl=http%3A%2F%2Fventomichael.site%2F&amp;linkname=<?= $post->post_title ?>"
                           target="_blank"><img itemprop="sharedContent"
                                                alt="Facebook's icon"
                                                src="http://ventomichael.site/portfolio/wp-content/themes/Vento/src/svg/facebook-black.svg">
                            Share on Facebook</a>
                    </div>
                    <div class="containerShare div_share_project_even">
                        <div>
                            <a class="linkShare" itemprop="url"
                               href="https://www.addtoany.com/add_to/twitter?linkurl=http%3A%2F%2Fventomichael.site%2F&amp;linkname=<?= $post->post_title ?>"
                               target="_blank">
                                <img itemprop="sharedContent"
                                     alt="Twitter's icon"
                                     src="http://ventomichael.site/portfolio/wp-content/themes/Vento/src/svg/twitter.svg">
                                Share on Twitter</a>
                        </div>
                    </div>
                    <div class="containerShare div_share_project_even">
                        <a class="linkShare" itemprop="url"
                           href="https://www.addtoany.com/add_to/linkedin?linkurl=http%3A%2F%2Fventomichael.site%2F&amp;linkname=<?= $post->post_title ?>"
                           target="_blank">
                            <img itemprop="sharedContent"
                                 alt="Linkedin's icon"
                                 src="http://ventomichael.site/portfolio/wp-content/themes/Vento/src/svg/linkedin-black.svg">
                            Share on Linkedin</a>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <p class="margin-beetwen">
                    If you like this project, please share it with the world !
                </p>
            </div>
        </section>
    </main>
<?php
require("second-footer.php");
?>