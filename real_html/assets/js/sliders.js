document.addEventListener("DOMContentLoaded", () => {
  // Инициализация портфолио слайдеров
  //   initialportfolioSwiper();

  initializationGallery();

  //   Initialization Galerry section slider
  initializationGalleryTwo();
});

function initialportfolioSwiper() {
  const sliders = document.querySelectorAll(".cases_swiper");
  if (!sliders) return;

  sliders.forEach((slider) => {
    const contentBlock = slider
      .closest(".case_section")
      ?.querySelector(".wrap_content");
    const offsetPxMob = 20;
    const offsetPx = (window.innerWidth - contentBlock.offsetWidth) / 2;
    const offset = offsetPx == 0 ? offsetPxMob : offsetPx;
    const swiper = new Swiper(slider, {
      loop: false,
      slidesPerView: 1.3,
      spaceBetween: 19,
      // Navigation arrows
      slidesOffsetBefore: offsetPxMob,
      slidesOffsetAfter: offsetPxMob,
      breakpoints: {
        1000: {
          spaceBetween: 10,
          slidesPerView: 3,
          slidesOffsetBefore: offset,
          slidesOffsetAfter: offset,
          spaceBetween: 30,
        },
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
}

function initializationGallery() {
  var swiper = new Swiper(".thumb_slider", {
    spaceBetween: 4,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
      1000: {
        spaceBetween: 10,
      },
    },
  });
  var swiper2 = new Swiper(".gallery", {
    spaceBetween: 6,
    slidesPerView: 1,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
}

function initializationGalleryTwo() {
  function getOffset() {
    const standartOffset = 50;
    const standartViewport = 1920;
    const viewportWidth = window.innerWidth;
    return (viewportWidth / standartViewport) * standartOffset;
  }
  var gallery = new Swiper(".gallery_section_slider", {
    spaceBetween: 19,
    slidesPerView: 1,
    breakpoints: {
      1000: {
        slidesPerView: 1.06,
        slidesOffsetBefore: 50,
        slidesOffsetAfter: 50,
      },
    },
    navigation: {
      nextEl: ".swiper-button-gallery-next",
      prevEl: ".swiper-button-gallery-prev",
    },
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth < 1000) return;
    const offset = getOffset();
    gallery.params.slidesOffsetBefore = offset;
    gallery.params.slidesOffsetAfter = offset;
    gallery.update();
  });
}
