document.addEventListener('DOMContentLoaded', function () {
    var animationContainer = document.getElementById('flower-animation-container');
    var animationData = {
        container: animationContainer,
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '<?php echo get_template_directory_uri(); ?>/assets/flor.json' // Corrected path to flor.json
    };
    lottie.loadAnimation(animationData);
});