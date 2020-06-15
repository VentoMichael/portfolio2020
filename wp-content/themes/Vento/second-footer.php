<section class="section-footer_second"
         itemscope
         itemtype="https://schema.org/Project">
    <div class="second-footer margin-beetwen secondfooter-title">
        <h2>
            Projects you may like
        </h2>
    </div>
    <div class="margin-beetwen myWorkContent" style="position: relative;">
        <?php if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post(); ?>
                <a href="<?= get_the_permalink() ?>" class="link__project">
                    <div class="mySlides div-project-footerHome div-project-firstOne space-project-B margin-space_top_bottom space-project translate">
                        <section itemscope
                                 itemtype="https://schema.org/Thing"
                                 class="section-project-footerHome module first-picto-home project-back">
                            <div class="section-home-followingpoints">
                                <?php
                                if (class_exists('Dynamic_Featured_Image')):
                                    global $dynamic_featured_image;
                                    global $post;
                                    $featured_images = $dynamic_featured_image->get_featured_images($post->ID);

                                    if ($featured_images):
                                        ?>
                                        <?php foreach ($featured_images as $images): ?>
                                        <img src="<?php echo $images['full'] ?>" itemprop="logo"
                                             class="picto"
                                             style="width: 20%;" alt="<?php the_title() ?>'s logo'">
                                    <?php endforeach; ?>
                                    <?php
                                    endif;
                                endif;
                                ?>
                                <h3 itemprop="name">
                                    <?php the_title(); ?>
                                </h3>
                            </div>
                            <div>
                                <p itemprop="description">
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </section>
                        <div class="image-project right-project image-not-display home-image div-image_project">
                            <?php the_post_thumbnail('post-cover', ['class' => 'gif_project']); ?>
                        </div>
                    </div>
                </a>
        <?php endwhile;endif;
        wp_reset_query(); ?>
    </div>
</section>
<?php
require 'footer.php';
?>