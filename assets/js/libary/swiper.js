
export const createSlider = ({elementWrap,...props}) => {
     return new Swiper(`.${elementWrap}`, {
         // Optional parameters
         direction: "horizontal",
         loop: false,
         speed: 400,
         spaceBetween: 30,
         slidesPerView: 1,
         // Navigation arrows
         navigation: {
             nextEl: ".button-next",
             prevEl: ".button-prev",
         },
         breakpoints: {
             // when window width is >= 320px
             320: {
                 slidesPerView: 2,
                 spaceBetween: 20,
             },
             // when window width is >= 480px
             480: {
                 slidesPerView: 3,
                 spaceBetween: 20,
             },
             // when window width is >= 640px
             640: {
                 slidesPerView: 6,
                 spaceBetween: 20,
             },
         },
         ...props,
     });
}