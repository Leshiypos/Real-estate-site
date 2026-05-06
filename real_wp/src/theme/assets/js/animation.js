// Инициализация блока шаг-за-шагом - подсветка пунктов

document.addEventListener("DOMContentLoaded", () => {
  //   Анимация
  fadeInAnimation(".fade_in");
});

// Анимация появления

function fadeInAnimation(selector, position = 90) {
  const banerSections = document.querySelectorAll(selector);
  if (banerSections) {
    banerSections.forEach((section) => {
      gsap.from(section, {
        opacity: 0,
        y: 24,
        duration: 1,
        //   delay: 1,

        scrollTrigger: {
          trigger: section,
          start: `top ${position}%`,
          once: true,
          markers: false,
        },
      });
    });
  }
}
