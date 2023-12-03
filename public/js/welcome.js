var swiper = new Swiper(".mySwiper", {
    slidesPerView: "auto",
    centeredSlides: true,
    spaceBetween: 0,

    initialSlide: 4,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});

// This code loads the IFrame Player API code asynchronously.
var tag = document.createElement("script");

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// This function creates an <iframe> (and YouTube player) after the API code downloads.
var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player("player", {
        videoId: "b6gbxnT_S2w",
        playerVars: {
            playsinline: 1,
        },
        events: {
            onStateChange: onPlayerStateChange,
        },
    });
}

// YouTube player state change callback
function onPlayerStateChange(event) {
    if (event.data === YT.PlayerState.PLAYING) {
        // console.log("playing...");
        // Pause Swiper autoplay when the video is playing
        swiper.autoplay.stop();
    } else if (event.data === YT.PlayerState.PAUSED) {
        // console.log("paused...")
        // Resume Swiper autoplay when the video is paused
        swiper.autoplay.start();
    } else if (event.data === YT.PlayerState.ENDED) {
        // console.log("ended...")
        // Resume Swiper autoplay when the video is ended
        swiper.autoplay.start();
    }
}
