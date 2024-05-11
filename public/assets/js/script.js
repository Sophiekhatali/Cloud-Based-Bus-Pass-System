var swiper = new Swiper(".swiper-olx", {
    slidesPerView: 3,
    spaceBetween: 5,
    initialSlide: 0,
    autoplay: true,
    loop: false,
    loopFillGroupWithBlank: false,
    centerSlide: true,
    fade: true,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 0,
        },
        200: {
            slidesPerView: 1,
        },
        284: {
            slidesPerView: 1,
        },
        314: {
            slidesPerView: 2,
        },
        520: {
            slidesPerView: 2,
        },
        576: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 2,
        },
        810: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },


});


var swiper = new Swiper(".swiper-login", {
    slidesPerView: 1,
    spaceBetween: 5,
    initialSlide: 0,
    autoplay: true,
    loop: false,
    loopFillGroupWithBlank: false,
    centerSlide: true,
    fade: true,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },



});