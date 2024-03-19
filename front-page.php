<?php get_header(); ?>
<main>
    <section class="hero">
        <img class="bg" src="<?php echo esc_url( get_template_directory_uri() . '/assets/flor.png' ); ?>"
            alt="background">
        <div class="padding-wrapper">
            <div class="content-wrapper">
                <h1 class="title">
                    <span class="font-medium">Netus ullmac</span>
                    <br>
                    <span class="font-thin-italic">elementum dolor</span>
                    <br>
                    <span class="font-medium">Adipiscing aenean</span>
                    <br>
                    <span class="font-extraBold">egestas</span>
                </h1>
                <div class="hero-video">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/featured_fp.jpg' ); ?>"
                        alt="Video thumbnail">
                    <button>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/play.png' ); ?>"
                            alt="Play icon">
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="full-height-section">
        <div class="padding-wrapper">
            <div class="content-wrapper">
                <article class="centered-content home-sec-2">
                    <img class="light-stain"
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/mancha.png' ); ?>" alt="">
                    <h2 class="section-title">
                        <span class="font-thin">Laculis mi</span>
                        <br>
                        <span class="font-bold">hendrerit</span>
                        <br>
                        <span class="font-medium">velit manas</span>
                        <br>
                        <span class="font-bold">volutpat</span>
                    </h2>

                    <div class="section-text">
                        <p class="big-text">Consectetur adipiscing elit. Netus ullamc orper sed erat iaculis nisi.
                            Iaculis
                            mi libero in non
                            justo, dui quis amet euismod ac at hendrerit ut elementum dolor.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit netus ac at hendrerit ut elementum
                            dolor integer eget nisl volutpa.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>