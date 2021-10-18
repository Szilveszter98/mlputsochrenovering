<?php
/* Template Name: About-page*/

namespace WA\WP;

get_header();

?>
<article class="about-page">
    <section class="about_content">
        <div class="about_text_content">
            <h1>Levente Mag</h1>
            <h2><?= get_field('about_text') ?></h2>
        </div>
        <div class="about_image_container">
            <?php
            $image = get_field('about_image');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
    </section> 
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
