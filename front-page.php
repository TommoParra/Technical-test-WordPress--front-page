<?php get_header(); ?>
<main>
    <section class="hero">
        <div id="flower-animation-container"></div>

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

    <section class="home-sec-2">
        <div class="padding-wrapper">
            <div class="content-wrapper">
                <article class="centered-content">
                    <img class="light-stain"
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/mancha.png' ); ?>" alt="">
                    <h2 class="section-title">
                        <span class="font-thin">Laculis mi</span>
                        <br>
                        <span class="font-bold">hendrerit</span>
                        <br>
                        <span class="font-thin">velit manas</span>
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
                        <h2 class="section-title"><span class="font-medium">Netus ullamc</span> <span
                                class="font-thin">Nature</span>
                            <br>
                            dolor integer <span class="font-bold">volutpat</span>
                        </h2>
                        <p>Consectetur adipiscing elit. Netus ullamc orper sed erat iaculis nisi. Iaculis mi libero in
                            non justo, dui quis amet euismod ac at hendrerit ut elementum dolor Iaculis mi libero in non
                            justo, dui quis amet euismod ac at hendrerit ut.</p>
                        <p class="small-text light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit Netus
                            ullamc orper sed erat iaculis nisi. Iaculis mi libero in non justo, dui quis amet euismod.
                            Ac at hendrerit ut elementum dolor integer eget nisl volutpat.</p>
                        <button class="btn">Netus ullmac</button>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>