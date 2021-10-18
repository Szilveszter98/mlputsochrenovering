<?php
/* Template Name: Referens-arbete*/

namespace WA\WP;

get_header();

?>
<article class="reference-page">
        <div class="galleryContainer" data-aos="fade-left">
            <?php if (get_field('gallery')) : ?>
                <div class="gallery" id='gallery'>
                    <div class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php if (have_rows('gallery')) :
                                    while (have_rows('gallery')) : the_row();
                                        if (get_row_layout() == 'video') :
                                            $videos = get_sub_field('video');
                                            print_r($videos)?>
                                            <li class="splide__slide">
                                                <div class="embed-container"><?php echo $videos; ?></div>
                                            </li>
                                        <?php
                                        endif;
                                        if (get_row_layout() == 'image') :
                                            $images = get_sub_field('image'); ?>
                                            <li class="splide__slide">
                                                <?php $imageUrl = $images['url']; ?>
                                                <img src="<?= $imageUrl; ?>">
                                            </li>
                                <?php endif;
                                    endwhile;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
   
    <!--REFERENS ARBETE-->

    <div class="puff_galleries" id="referens_arbete" data-aos="fade-right" >
        <h1 class="puffTitle">Referens arbete</h1>
        <?php if (get_field('puff_gallery')) : ?>
            <?php $galleries = get_field('puff_gallery');
            foreach ($galleries as $post) : setup_postdata($post); ?>
                <div class="puff_gallery">
                    <?php if ($post['puff_gallery_title']) : ?>
                        <h1 class="puff_galleries_title"><?= $post['puff_gallery_title'] ?></h1>
                    <?php endif; ?>
                    <?php if ($post['puff_gallery_content']) : ?>
                        <?php $contents = $post['puff_gallery_content'] ?>
                        <div class="puff_gallery_content">
                            <?php foreach ($contents as $content) : setup_postdata($content); ?>

                                <?php $image = $content['puff_gallery_image']; ?>
                                <?php if ($content['puff_gallery_image']) : ?>
                                    <div class="puff_galleries_img_container" id="puff_image">

                                        <div class="puff_data" id="puff_data">
                                            <div class="puff_data_container">
                                                <?php $address = $content['puff_gallery_address'];
                                                if ($address) : ?>

                                                    <p><?= $address ?></p>

                                                <?php endif; ?>
                                                <?php $date = $content['puff_gallery_date'];
                                                if ($date) : ?>

                                                    <p><?= $date ?></p>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <img class="" src="<?= $image['url'] ?>">
                                    </div>
                                <?php endif; ?>


                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div><br>
            <?php endforeach; ?>
            <?php wp_reset_postdata() ?>
        <?php endif; ?>
    </div>
</article>
<div class="offer" id="kontakt">
        <div class="whatwedo" data-aos="fade-right">
            <h3 id="tjänster">Vad behöver du hjälp med?</h3>
            <ul>
                <li>Murning / Snickare</li>
                <li>Kakelugnsenovering</li>
                <li>Rivning / Reparationer </li>
                <li>Puts / Finputs / Grovputs</li>
                <li>Plattsättning / Mattläggning</li>
                <li>Måleri / In- & utvändigt</li>
                <li>Badrumsrenovering / Köksrenovering</li>
                <li>Nybyggnationer / Ombyggnader / Tillbyggnader</li>

            </ul>
        </div>
        <hr>
        <div class="offertContainer" data-aos="fade-left"  >
                <div class="offer-title">
                    <h3>Kontakta mig för  kostnadsfri offert!</h3>
                </div>
                <div class="offer-description">
                    <h3>Välkommen att kontakta mig för  kostnadsfri offert!</h3>
                </div>
            <div class="bttnContainer">
                <button id="contactFromButton">Klicka här!</button>
            </div>

            <!--OFFERT CONTACT FORM-->
            <div class="contactFormContainer" id="contactFormContainer" style="display: none;">

                <div class="contactForm">
                    <?php echo do_shortcode('[contact-form-7 id="8" title="Kontaktformulär 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
<?php

get_footer();
