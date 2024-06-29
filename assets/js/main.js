// loader
window.addEventListener('load', function() {
    const loader = document.querySelector('#loader');
    loader.classList.add('fade-out');
});

// menu
document.querySelector('.header-menu__button').addEventListener('click', () => {
    document.querySelector('.header-menu__button').classList.toggle('opened');
    document.querySelector('.header').classList.toggle('opened');
});

// gallery
Fancybox.bind('[data-fancybox="gallery"]');

// video modal
const modalVideo = document.querySelector('#modalVideo');
const buttonsVideo = document.querySelectorAll('.video-item');
const video = document.querySelector('#video');
const modalContent = document.querySelector('.modal-video__content');

buttonsVideo.forEach((item) => {
    item.addEventListener('click', () => {
        modalVideo.classList.add('modal-show');
        modalContent.classList.add('modal-content-show');
        video.src = item.dataset.src;
        document.body.style.overflow = 'hidden';
    });
});

modalVideo.addEventListener('click', (event) => {
    if (event.target === modalVideo || event.target.closest('.modal-close')) {
        modalVideo.classList.remove('modal-show');
        modalContent.classList.remove('modal-content-show');
        video.src = '';
        document.body.style.overflow = '';
    }
});

// reviews slide
new Swiper(".reviewSlider", {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 10000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        700: {
            slidesPerView: 2
        },
    }
});

// promotion modal
const buttonPromotionModal = document.querySelector('#btnPromotion');
const promotionModal = document.querySelector('#modalPromotion');
const promotionModalContent = document.querySelector('.modal-promotion__content');

buttonPromotionModal.addEventListener('click', () => {
    promotionModal.classList.add('modal-show');
    promotionModalContent.classList.add('modal-content-show');
    document.body.style.overflow = 'hidden';
});

promotionModal.addEventListener('click', (event) => {
    if (event.target === promotionModal || event.target.closest('.modal-close')) {
        promotionModal.classList.remove('modal-show');
        promotionModalContent.classList.remove('modal-content-show');
        document.body.style.overflow = '';
    }
});