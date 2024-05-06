<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    
</head>
<body>

<div class="w-full h-64 relative items-center mt-4">
    <div class="slide-container mt-1">
        <div class="slides" style="display: flex;">
            <div class="slide" style="flex: 0 0 auto;"><img src="../assets/img/banner/banner.jpg" alt="Slide 1"></div>
            <div class="slide" style="flex: 0 0 auto;"><img src="../assets/img/banner/banner-1.png" alt="Slide 2"></div>
            <div class="slide" style="flex: 0 0 auto;"><img src="../assets/img/banner/banner-2.png" alt="Slide 3"></div>
            <div class="slide" style="flex: 0 0 auto;"><img src="../assets/img/banner/banner-3.png" alt="Slide 4"></div>
            <!-- Add more slides here -->
        </div>
    </div>
</div>

<script>
    const slides = document.querySelector('.slides');
    const slideWidth = slides.firstElementChild.clientWidth;
    let counter = 0;

    setInterval(() => {
        counter++;
        slides.style.transition = 'transform 0.5s ease';
        slides.style.transform = `translateX(-${slideWidth * counter}px)`;

        if (counter === slides.children.length - 1) {
            setTimeout(() => {
                slides.style.transition = 'none';
                slides.style.transform = 'translateX(0)';
                counter = 0;
            }, 500);
        }
    }, 3000);
</script>

</body>
</html>
