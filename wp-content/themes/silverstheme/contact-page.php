<?php
/* Template Name: Contact-page*/

namespace WA\WP;

get_header();

?>



<article class="contact-page">
    <div class="contact-page-container">
        <div class="contact-page-text-container">
            <h1>Kontakta mig!</h1>
            <h2>Har du frågor eller funderingar? Tveka inte om att</br> kontakta mig för kostnadsfri offert eller rådgivning!</h2>
            <div class="contact-page-link-container">
                <div class="link-container">
                    <a href="tel:+4733378901"><i class="fas fa-phone-alt fa-2x"></i></br>+46(0)767803609</a>
                </div>
                <div class="link-container">
                    <a href="mailto:someone@example.com"><i class="far fa-envelope fa-2x"></i></br>info@mlputsochrenovering.se</a>
                </div>
            </div>
        </div>
        <div class="contact-page-profile-container">
            <?php
            $image = get_field('profile_image');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h1>Levente Mag</h1>
        </div>
    </div>
     <!--OFFERT CONTACT FORM-->
     <div class="contact-form-container">
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="23" title="Kontaktformulär 1"]'); ?>
            </div>
        </div>
</article>


<?php

get_footer();
