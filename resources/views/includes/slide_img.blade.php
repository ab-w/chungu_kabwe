<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slideshow</title>
  <style>
    body {
      margin: 0;
    }

    .img-container {
      height: 100vh;
      overflow: hidden;
      position: relative;
      width: 100vw;
    }

    boby, .img-container img {
      height: 100%;
      left: 0;
      object-fit: contain;
      object-position: center;
      opacity: 0;
      position: absolute;
      top: 0px;
      margin: 0;
      width: 100vw;
      z-index: -1;
      padding: 0;
    }

    .img-container img.next {
      opacity: 1;
      z-index: 1;
    }

    .img-container img.prev {
      opacity: 1;
      z-index: 2;
    }

    .img-container img.fade-out {
      opacity: 0;
      transition: visibility 0s .5s, opacity .5s linear;
      visibility: hidden;
    }
  </style>
</head>
<body>

<div class="img-container " data-slideshow>
  <img src="../assets/img/banner/wenfile-6.png">
  <img src="../assets/img/banner/wenfile-5.png">
  <img src="../assets/img/banner/wenfile.png">
  <img src="../assets/img/banner/wenfile-4.png">
  <img src="../assets/img/banner/wenfile-1.png">
  <img src="../assets/img/banner/wenfile-7.png">
  <img src="../assets/img/banner/wenfile-8.png">
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  class Slideshow {

    constructor() {
      this.initSlides();
      this.initSlideshow();
    }

    initSlides() {
      this.container = $('[data-slideshow]');
      this.slides = this.container.find('img');
      this.slides.each((idx, slide) => $(slide).attr('data-slide', idx));
    }

    initSlideshow() {
      this.imagesLoaded = 0;
      this.currentIndex = 0;
      this.setNextSlide();
      this.slides.each((idx, slide) => {
        $('<img>').on('load', $.proxy(this.loadImage, this)).attr('src', $(slide).attr('src'));
      });
    }

    loadImage() {
      this.imagesLoaded++;
      if (this.imagesLoaded >= this.slides.length) { this.playSlideshow() }
    }

    playSlideshow() {
      this.slideshow = window.setInterval(() => { this.performSlide() }, 3500);
    }

    performSlide() {
      if (this.prevSlide) { this.prevSlide.removeClass('prev fade-out') }

      this.nextSlide.removeClass('next');
      this.prevSlide = this.nextSlide;
      this.prevSlide.addClass('prev');

      this.currentIndex++;
      if (this.currentIndex >= this.slides.length) { this.currentIndex = 0 }

      this.setNextSlide();

      this.prevSlide.addClass('fade-out');
    }

    setNextSlide() {
      this.nextSlide = this.container.find(`[data-slide="${this.currentIndex}"]`).first();
      this.nextSlide.addClass('next');
    }

  }

  $(document).ready(function() {
    new Slideshow;
  });
</script>

</body>
</html>
