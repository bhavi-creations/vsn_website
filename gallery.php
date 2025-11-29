<?php include 'header.php';?>


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .carousel-item img {
        /* width: 100%; */
        /* height: 100vh;  */
        /* object-fit: cover;  */
    }

    /* @media (max-width: 768px) {
        .carousel-item img {
            height: 350px; 
        }
    } */
</style>


<div class="video-container mt-5">
    <video autoplay muted loop  controls  playsinline>
        <source src="./assets/images/v1.mp4" type="video/mp4">
    </video>
</div>


<div class="video-container mt-5">
    <video autoplay muted loop  controls playsinline>
        <source src="./assets/images/v2.mp4" type="video/mp4">
    </video>
</div>



<div class="video-container mt-5">
    <video autoplay muted loop   controls  playsinline>
        <source src="./assets/images/v3.mp4" type="video/mp4">
    </video>
</div>






<div id="heroSlider" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="assets/images/galley_slider_1.png" alt="Slide 1">
        </div>

        <div class="carousel-item">
            <img src="assets/images/galley_slider_1.png" alt="Slide 2">
        </div>

        <div class="carousel-item">
            <img src="assets/images/galley_slider_3.png" alt="Slide 3">
        </div>

        <div class="carousel-item">
            <img src="assets/images/galley_slider_4.png" alt="Slide 4">
        </div>

        <div class="carousel-item">
            <img src="assets/images/galley_slider_5.png" alt="Slide 5">
        </div>

        <div class="carousel-item">
            <img src="assets/images/galley_slider_6.png" alt="Slide 6">
        </div>

        <div class="carousel-item">
            <img src="assets/images/gslider1.jpeg" alt="Slide 7">
        </div>

        <div class="carousel-item">
            <img src="assets/images/gslider2.jpeg" alt="Slide 8">
        </div>

        <div class="carousel-item">
            <img src="assets/images/gslider3.jpeg" alt="Slide 9">
        </div>

        <div class="carousel-item">
            <img src="assets/images/gslider6.jpeg" alt="Slide 10">
        </div>

    </div>

    <!-- Previous / Next Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>


<!-- 
<div class="slider">
    <div class="slides">
        <img src="./assets/images/galley_slider_1.png" alt="" class="img-fluid">
        <img src="./assets/images/galley_slider2.png" alt="" class="img-fluid">
        <img src="./assets/images/galley_slider_3.png" alt="" class="img-fluid">
        <img src="./assets/images/galley_slider_4.png" alt="" class="img-fluid">
        <img src="./assets/images/galley_slider_5.png" alt="" class="img-fluid">
        <img src="./assets/images/galley_slider_6.png" alt="" class="img-fluid">
        <img src="./assets/images/gallert_1.png" alt="" class="img-fluid">
        <img src="./assets/images/gallert_2.png" alt="" class="img-fluid">
        <img src="./assets/images/gallert_3.png" alt="" class="img-fluid">
        <img src="./assets/images/gallert_6.png" alt="" class="img-fluid">
    </div>
</div> -->

<!-- <script>
    let index = 0;

function autoSlide() {
    const slides = document.querySelector('.slides');
    const total = slides.children.length;

    index = (index + 1) % total;
    slides.style.transform = `translateX(-${index * 100}%)`;
}

setInterval(autoSlide, 3000);  // 3 seconds

</script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>








<?php include 'footer.php'; ?>