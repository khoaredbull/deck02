$('.banner-wrapper').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
});
document.querySelector('.slick-prev').innerHTML = '<div class="slick-prev-inner"></div>'
document.querySelector('.slick-next').innerHTML = '<div class="slick-next-inner"></div>'
document.querySelector('.slick-prev-inner').innerHTML = '<img src="./assets/images/Arrow1.png" alt="">'
document.querySelector('.slick-next-inner').innerHTML = '<img src="./assets/images/Arrow.png" alt="">'
      