<?php include 'header.php'; ?>


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

<div class="container mt-5 pt-5 ">
    <!-- First row with two videos -->
    <div class="row justify-content-center">
        <div class="col-md-4 d-flex justify-content-center mb-4">
            <div class="video-container" style=" width: 100%; overflow: hidden;">
                <video autoplay muted loop controls playsinline style="height: 100%; width: 100%; object-fit: contain; border-radius: 4px;">
                    <!-- <source src="./assets/images/v3.mp4" type="video/mp4"> -->
                    <source src="./assets/images/v1.mp4" type="video/mp4">

                </video>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center mb-4">
            <div class="video-container" style=" width: 100%; overflow: hidden;">
                <video autoplay muted loop controls playsinline style="height: 100%; width: 100%; object-fit: contain; border-radius: 4px;">
                    <source src="./assets/images/v2.mp4" type="video/mp4">
                </video>
            </div>
        </div>


        <div class="col-md-4 d-flex justify-content-center mb-4">
            <div class="video-container" style=" width: 100%; overflow: hidden;">
                <video autoplay muted loop controls playsinline style="height: 100%; width: 100%; object-fit: contain; border-radius: 4px;">
                    <source src="./assets/images/v3.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <!-- <div class="col-md-4 d-flex justify-content-center">
            <div class="video-container" style=" width: 100%; overflow: hidden;">
                <video autoplay muted loop controls playsinline style="height: 100%; width: 100%; object-fit: contain; border-radius: 4px;">
                    <source src="./assets/images/v3.mp4" type="video/mp4">
                </video>
            </div>
        </div> -->
    </div>





</div>

<!-- <section>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6 col-lg-3">
                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal1">
                    <img src="./assets/images/unit_1.png" alt="Unit 1" class="img-fluid">
                </a>
            </div>
           
            <div class="col-md-6 col-lg-3">
                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2">
                    <img src="./assets/images/unit_2.png" alt="Unit 2" class="img-fluid">
                </a>
            </div>
           
            <div class="col-md-6 col-lg-3">
                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal3">
                    <img src="./assets/images/unit_3.png" alt="Unit 3" class="img-fluid">
                </a>
            </div>
            <
            <div class="col-md-6 col-lg-3">
                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal4">
                    <img src="./assets/images/unit_4.png" alt="Unit 4" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section> -->

<section class="image_hover_effect d-flex flex-wrap gap-3 justify-content-center">

<div class="row mx-3">
    <div class="col-lg-3 col-md-6 mt-3">
   <!-- Normal Display Image 1 -->
   <img src="./assets/images/unit_1.png" alt="Unit 1" class="img-fluid normal-border" data-bs-toggle="modal" data-bs-target="#imageModal1">

    </div>
    <div class="col-lg-3 col-md-6 mt-3">
   <!-- Normal Display Image 2 -->
   <img src="./assets/images/unit_2.png" alt="Unit 2" class="img-fluid normal-border" data-bs-toggle="modal" data-bs-target="#imageModal2">

    </div>
    <div class="col-lg-3 col-md-6 mt-3">
<!-- Normal Display Image 3 -->
<img src="./assets/images/unit_3.png" alt="Unit 3" class="img-fluid normal-border" data-bs-toggle="modal" data-bs-target="#imageModal3">

    </div>
    <div class="col-lg-3 col-md-6 mt-3">
   <!-- Normal Display Image 4 -->
   <img src="./assets/images/unit_4.png" alt="Unit 4" class="img-fluid normal-border" data-bs-toggle="modal" data-bs-target="#imageModal4">

    </div>
</div>

 
 
    
 
    <!-- Modals (Already Existing) -->
    <!-- Modal 1 -->
    <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-image-container">
                        <img src="./assets/images/unit_1.png" alt="Unit 1" class="img-fluid highlight-image" id="modalImage1">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-image-container">
                        <img src="./assets/images/unit_2.png" alt="Unit 2" class="img-fluid highlight-image" id="modalImage2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="imageModal3" tabindex="-1" aria-labelledby="imageModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-image-container">
                        <img src="./assets/images/unit_3.png" alt="Unit 3" class="img-fluid highlight-image" id="modalImage3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade" id="imageModal4" tabindex="-1" aria-labelledby="imageModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-image-container">
                        <img src="./assets/images/unit_4.png" alt="Unit 4" class="img-fluid highlight-image" id="modalImage4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="video-container mt-5">
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
</div> -->








<div id="heroSlider" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="assets/images/bg-1.png" alt="Slide 1" class="img-fluid">
            <!-- <img src="assets/images/galley_slider_1.png" alt="Slide 1" class="img-fluid d-block d-xl-none"> -->

        </div>

        <!-- <div class="carousel-item">
            <img src="assets/images/galley_slider_1.png" alt="Slide 2">
        </div> -->

        <div class="carousel-item">
            <img src="assets/images/bg_2.png" alt="Slide 3" class="img-fluid" class="img-fluid ">
            <!-- <img src="assets/images/galley_slider_3.png" alt="Slide 1" class="img-fluid d-block d-xl-none"> -->

        </div>



        <div class="carousel-item">
            <img src="assets/images/bg-4.png" alt="Slide 5" class="img-fluid" class="img-fluid ">
            <!-- <img src="assets/images/galley_slider_5.png" alt="Slide 1" class="img-fluid d-block d-xl-none"> -->

        </div>



        <div class="carousel-item">
            <img src="assets/images/bg-6.png" alt="Slide 7" class="img-fluid" class="img-fluid ">
            <!-- <img src="assets/images/galley_slider_7.png" alt="Slide 1" class="img-fluid d-block d-xl-none"> -->

        </div>



        <div class="carousel-item">
            <img src="assets/images/bio_gas_2.png" alt="Slide 9" class="img-fluid">
            <!-- <img src="assets/images/galley_slider_1.png" alt="Slide 1" class="img-fluid d-block d-xl-none"> -->

        </div>

        <div class="carousel-item">

            <img src="assets/images/bio gas.png" alt="Slide 10" class="img-fluid">
            <!-- <img src="assets/images/galley_slider_1.png" alt="Slide 1" class="img-fluid d-block d-xl-none"> -->

        </div>

        <div class="carousel-item">
            <img src="assets/images/bg-7.png" alt="Slide 8" class="img-fluid" class="img-fluid ">
            <!-- <img src="assets/images/galley_slider_8.png" alt="Slide 1" class="img-fluid d-block d-xl-none"> -->

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



<!-- <script>
    // Bootstrap modal events
    var modalElements = document.querySelectorAll('.modal');

    modalElements.forEach(modal => {
        modal.addEventListener('hidden.bs.modal', function() {
            // Remove highlight class when modal is closed
            let modalImage = modal.querySelector('.highlight-image');
            if (modalImage) {
                modalImage.classList.remove('highlight-image');
            }
        });
    });

    // Bootstrap modal events to add the highlight class when modal is shown
    var modalOpenElements = document.querySelectorAll('[data-bs-toggle="modal"]');

    modalOpenElements.forEach(trigger => {
        trigger.addEventListener('click', function() {
            var targetModalId = this.getAttribute('data-bs-target');
            var modalImage = document.querySelector(targetModalId).querySelector('.modal-body img');

            // Add highlight class to the image when modal is shown
            if (modalImage) {
                modalImage.classList.add('highlight-image');
            }
        });
    });
</script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>








<?php include 'footer.php'; ?>