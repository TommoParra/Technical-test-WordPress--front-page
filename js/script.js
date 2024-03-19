
/* Modal video */
document.addEventListener('DOMContentLoaded', function () {
    var playButton = document.getElementById('playVideo');
    var videoContainer = document.getElementById('videoContainer');
    var modal = document.getElementById('videoModal');
    var closeButton = document.getElementById('closeModal');

    playButton.addEventListener('click', function () {
        modal.style.display = 'flex'; 

        // Video
        var video = document.createElement('video');
        video.controls = true;
        video.autoplay = true;
        video.style.width = '100%';
        video.style.height = 'auto';

        // Source
        var source = document.createElement('source');
        source.src = 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4';
        source.type = 'video/mp4';

        
        video.appendChild(source);
        videoContainer.appendChild(video);
    });

    /* Close modal window */
    closeButton.addEventListener('click', function () {
        modal.style.display = 'none';
        videoContainer.innerHTML = ''; 
    });

    
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            videoContainer.innerHTML = ''; 
        }
    });
});


/* Header animation */
document.addEventListener("DOMContentLoaded", function() {
    var header = document.querySelector('.header');

    function handleScroll() {
        var scrollPos = window.scrollY || window.pageYOffset;

        if (scrollPos > 80) {
            header.classList.add('small-header');
        } else {
            header.classList.remove('small-header');
        }
    }

    window.addEventListener('scroll', handleScroll);

    
    handleScroll();
});

/* Plants parallax animation */
document.addEventListener("DOMContentLoaded", function() {
    var images = document.querySelectorAll('.sec-image-showcase img');
    var section = document.querySelector('.home-sec-3');
    var windowHeight = window.innerHeight;

    function moveImagesOnScroll() {
        var scrollPos = window.scrollY || window.pageYOffset;
        var sectionPos = section.offsetTop;
        var distanceFromTop = scrollPos - sectionPos;

        if (scrollPos >= sectionPos - windowHeight && scrollPos <= sectionPos + section.offsetHeight) {
            images.forEach(function(image) {
                var yPos = -(distanceFromTop * 0.3); // Adjust movement here
                image.style.transform = 'translateY(' + yPos + 'px)';
            });
        }
    }

    window.addEventListener('scroll', moveImagesOnScroll);
    window.addEventListener('resize', function() {
        windowHeight = window.innerHeight;
    });

    moveImagesOnScroll();
});