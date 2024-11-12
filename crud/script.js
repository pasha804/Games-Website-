document.addEventListener('DOMContentLoaded', () => {
    const video = document.querySelector('.video-background video');

    function resizeVideo() {
        // Adjust the video dimensions to ensure it covers the viewport
        video.style.width = '100vw';
        video.style.height = '100vh';
    }

    // Run resize function initially and on window resize
    resizeVideo();
    window.addEventListener('resize', resizeVideo);
});
