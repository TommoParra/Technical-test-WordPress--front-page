document.addEventListener('DOMContentLoaded', function () {
    var animationContainer = document.getElementById('flower-animation-container');
    var animationData = {
        container: animationContainer,
        renderer: 'svg',
        autoplay: false, // Set autoplay to false to prevent automatic animation
        path: 'wp-content/themes/byteberry/js/flor.json'
    };
    
    var anim = lottie.loadAnimation(animationData); // Load animation
    
    // Play only the initial segment
    anim.playSegments([0, 20], true);

    // Listen for animation complete event
    anim.addEventListener('complete', function() {
        // Animation has completed drawing, do something if needed
    });
});