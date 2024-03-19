<?php get_header(); ?>
<main>
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span id="closeModal" class="close-modal">&times;</span>
            <div id="videoContainer"></div>
        </div>
    </div>
    <section class="hero">

        <div id="flower-animation-container"></div>
        <div class="padding-wrapper">
            <div class="content-wrapper">
                <h1 class="title">
                    <?php the_field('hero_title'); ?>
                </h1>
                <div class="hero-video">
                    <?php
                    $hero_video_preview = get_field('hero_video_preview');
                    ?>
                    <img src="<?php echo $hero_video_preview['url']; ?>"
                        alt="<?php echo $hero_video_preview['alt']; ?>">
                    <button id="playVideo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/play.png' ); ?>"
                            alt="Play icon">
                    </button>

                </div>
            </div>
        </div>
    </section>

    <section class="home-sec-2">
        <div class="padding-wrapper">
            <div class="content-wrapper">
                <article class="centered-content">
                    <img class="light-stain"
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/mancha.png' ); ?>" alt="">
                    <h2 class="section-title">
                        <?php the_field('section_2_title'); ?>
                    </h2>

                    <div class="section-text">
                        <p class="big-text">
                            <?php the_field('section_2_big_text'); ?>
                        </p>
                        <p>
                            <?php the_field('section_2_small_text'); ?>
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="grey-section home-sec-3">
        <div class="padding-wrapper">
            <div class="content-wrapper">
                <article class="centered-content">
                    <div class="sec-image-showcase">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/cardamomo.png' ); ?>"
                            alt="Cardamomo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/bamboo_1.png' ); ?>"
                            alt="Bamboo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/cranberry_2.png' ); ?>"
                            alt="Cranberry">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/hoja_grande_5.png' ); ?>"
                            alt="Leaves">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/flor_roja_1.png' ); ?>"
                            alt="flower">
                        <div class="circle"></div>
                    </div>
                    <div class="section-text">
                        <h2 class="section-title">
                            <?php the_field('section_3_title'); ?>
                        </h2>
                        <p>
                            <?php the_field('section_3_big_text'); ?>
                        </p>
                        <p class="small-text light-text">
                            <?php the_field('section_3_small_text'); ?>
                        </p>
                        <button class="btn">
                            <?php the_field('section_3_button_text'); ?>
                        </button>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>