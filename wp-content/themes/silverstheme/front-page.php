<?php

namespace WA\WP;

get_header();
$url = home_url();

?>

st

<article class="frontpage">
    <section class="landing-section">
        <div class="bg-image">
            <img src="https://images3.alphacoders.com/106/1069102.jpg" alt="" srcset="">
        </div>
        <div class="landing-section-content">
            <h1>Behöver du hjälp med renovering eller puts?<br> Funderar du på att bygga någonting?</h1>
            <h2>Jag driver enskild företag i Åkersberga, Stockholm<br> med över många års erfarenhet av både stora<br> byggprojekt och mindre renoveringar, både inom- och utomhus.<br><br>
                Badrumsrenovering? Plattsättning, mattläggning?<br>Behöver du hjälp av murare?<br>Funderar du på att renovera köket eller fräscha upp huset?<br><br>
                Kontakta mig för kostnadsfri offert!</h2>
            <div class="contact-button">
                <a href="https://bennettfeely.com/clippy/">Kontakta mig</a>
            </div>
        </div>
    </section>
    <section class="frontpage-content">
        <div class="puff_galleries" id="referens_arbete" data-aos="fade-right">
            <h1>Referens arbete</h1>
            <h2>Jag har många års erfarenhet av både stora byggprojekt och mindre renoveringar, både inom- och utomhus. Jag <br>har även erfarenhet inom allt från murning, snickra, rivning till plattsättning, mattläggning. Jag har även utfört<nr> många badrumsrenoveringar samtidigt köksrenoveringar och har fått väldigt många positiva rekommendationer <br>från kunderna.</h2>
            <?php if (get_field('startpage_puff_gallery')) : ?>
                <?php $galleries = get_field('startpage_puff_gallery');
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
            <div class="sm_button_container">
                <a href="<?= $url ?>/referens-arbete"><i class="fas fa-plus-circle fa-2x"></i></a>
            </div>
        </div>
        <div class="referenceContainer" data-aos="slide-up" id="referenser">
            <h1 class="referenceContainerTitle">Referencer och kommentarer<br> från tidigare kunder</h1>
            <div class="references">
                <?php $post = get_post();
                $postID = $post->ID; ?>
                <?php
                $args = array(
                    'post_id' => $postID,   // Use post_id, not post_ID
                    'per_page' => '5',
                );
                $comments = get_comments($args);
                foreach ($comments as $comment) : ?>
                    <h2 class="referenceAuthor"><?= $comment->comment_author; ?></h2>
                    <div class="referenceComment">
                        <h3>" <?= $comment->comment_content; ?> "</h3>
                    </div>
                    <h5 class="referenceDate"><?= $comment->comment_date; ?></h5>
                    <hr>
                <?php endforeach; ?>
            </div>
        </div>
        <?php // If comments are open or we have at least one comment, load up the comment template.

        if (comments_open() || get_comments_number()) :
            comments_template();
        endif; ?>
        <?php wp_reset_postdata() ?>
        
    </section>
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

</article>

<?php

get_footer();
