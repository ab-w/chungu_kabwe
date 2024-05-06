<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="carousel w-full">
        <div id="slide1" class="carousel-item relative w-full">
          <img src="{{asset('assets/img/banner/banner-1.png')}}" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide4" class="btn btn-circle">❮</a> 
            <a href="#slide2" class="btn btn-circle">❯</a>
          </div>
        </div>

        <div id="slide2" class="carousel-item relative w-full">
          <img src="{{asset('assets/img/banner/banner-2.png')}}" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1" class="btn btn-circle">❮</a> 
            <a href="#slide3" class="btn btn-circle">❯</a>
          </div>

        </div> 
        <div id="slide3" class="carousel-item relative w-full">
          <img src="{{asset('assets/img/banner/banner-3.png')}}" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle">❮</a> 
            <a href="#slide4" class="btn btn-circle">❯</a>
          </div>

        </div> 
        <div id="slide4" class="carousel-item relative w-full">
          <img src="{{asset('assets/img/banner/banner-4.png')}}" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide3" class="btn btn-circle">❮</a> 
            <a href="#slide1" class="btn btn-circle">❯</a>
          </div>
          
        </div>
      </div>
</body>
</html>