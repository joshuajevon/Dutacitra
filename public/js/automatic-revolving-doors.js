var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    cardsEffect: {
        perSlideOffset: 6, // Space between cards in px
        perSlideRotate: 2, // Rotation of cards in degrees
    },
});
