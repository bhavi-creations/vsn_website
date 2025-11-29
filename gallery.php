<?php include 'header.php' ; ?>
<style>
    .mySlider { width: 100%; margin: auto; border-radius: 10px; overflow:hidden; }
    .mySlidesWrap { display:flex; gap:25px; } /* GAP BETWEEN SLIDES */
    .mySlide { flex:0 0 100%; } /* Full Slide Width */
    .mySlide img { width:100%;  height: auto; object-fit:cover; border-radius:12px; }
</style>


<div id="mainSlider" class="mySlider slide" data-bs-ride="carousel" data-bs-interval="2500">
    <div class="mySlidesWrap">

        <div class="mySlide active">
            <img src="./assets/images/gslider1.jpeg" alt="Slide 1" class="img-fluid" style="height:650px !important;">
        </div>

        <div class="mySlide">
        <img src="./assets/images/gslider2.jpeg" alt="Slide 1" class="img-fluid"  style="height:650px !important;">
        </div>

        <div class="mySlide">
        <img src="./assets/images/gslider3.jpeg" alt="Slide 1" class="img-fluid"  style="height:650px !important;">
        </div>

        <div class="mySlide">
        <img src="./assets/images/gslider4.jpeg" alt="Slide 1" class="img-fluid"  style="height:650px !important;">
        </div>


        <div class="mySlide">
        <img src="./assets/images/gslider5.jpeg" alt="Slide 1" class="img-fluid"  style="height:650px !important;">
        </div>

        <div class="mySlide">
        <img src="./assets/images/gslider6.jpeg" alt="Slide 1" class="img-fluid" >
        </div>

    </div>

    <!-- Controls -->
 
</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.querySelector('.mySlidesWrap').classList.add('carousel-inner');
    document.querySelectorAll('.mySlide').forEach(e => e.classList.add('carousel-item'));
    document.querySelector('.myPrev').classList.add('carousel-control-prev');
    document.querySelector('.myNext').classList.add('carousel-control-next');
</script>
<?php include 'footer.php' ; ?>
