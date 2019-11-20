<div class="footer footer-image d-flex flex-lg-row flex-column justify-content-lg-between back-dark text-light">
    <div class="footer-first mt-lg-5 mt-4 pl-lg-0 pl-3">
        <img src="./Assets/white-logo.png"  alt="">
        <p class="small pt-lg-3 pt-1">2019 @copyright Line </p>
    </div>
    <div class="footer-second d-flex justify-content-around py-lg-5 py-2">
        <div class="footer-first-row mx-lg-3 mx-2 smaller font-weight-bold">
            <h6 class="font-weight-bold text-uppercase pb-2">About</h6>
            <p >Contact Us</p>
            <p >About Us</p>
            <p >Our Stories</p>
            <p >Press</p>
        
        </div>
        <div class="footer-second-row mx-lg-3 mx-2 smaller font-weight-bold">
        
        <h6 class="font-weight-bold text-uppercase pb-2">Help</h6>
            <p >Payment</p>
            <p >Shipment</p>
            <p >Cancellation & Return</p>
            <p >FAQ</p>
        
        </div>
        <div class="footer-third-row mx-lg-3 mx-2 smaller font-weight-bold">
        <h6 class="font-weight-bold text-uppercase pb-2">Policies</h6>
            <p >Return Policy</p>
            <p >Trerms of use</p>
            <p >Security</p>
            <p >Privacy</p>
        </div>
        <div class="footer-fourth-row mx-lg-3 mx-2 smaller font-weight-bold">
        
        <h6 class="font-weight-bold text-uppercase pb-2">Social</h6>
            <p >Facebook</p>
            <p >Twitter</p>
            <p >Youtube</p>
        
        </div>
        <div class="footer-fifth-row mx-lg-3 mx-2 smaller font-weight-bold">
        <h6 class="font-weight-bold text-uppercase pb-2">Office</h6>
            <p>No.111, 3rd floor,</p>
            <p>Apartment Street, Near Landmark,</p>
            <p>City, Country -110011</p>
            <p>Call: 123456789</p>
            <p>Email: support@mail.com</p>
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="./js/slick.js"></script>
    <!-- <script src="https://npmcdn.com/flickity@2.2.1/dist/flickity.pkgd.js"></script> -->

<script type="text/javascript">

// navbar responsive
$(document).ready(function () {
  $(".navbar-toggler, .overlay").on("click", function(){
    $(".mobileMenu").toggleClass("open")
    $(".overlay").toggleClass("open-overlay")
  })
});

var fixHeight = function(){
  $(".navbar-nav").css(
    "max-height", document.documentElement.clientHeight - 150
  );
};
fixHeight();

$(window).resize(function(){
  fixHeight();
})

$(".navbar .navbar-toggler").on("click" ,function(){
  fixHeight();
})

// product detail page slider
$('#myCarousel').carousel({
    interval: 10000
})

$('#myCarousel.carousel .item').each(function(){
    var next = $(this).next();

    if (!next.length) {
            next = $(this).siblings(':first');            
    }

    next.children(':first-child').clone().appendTo($(this));

    for (var i=0; i<3; i++) {

        next=next.next();

        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});

$('#myCarouselBig').on('slide.bs.carousel', function (event) {
    if (event.direction == 'left') $('#myCarousel').carousel('next');
    else {
        $('#myCarousel').carousel('prev');
        $('#myCarousel').carousel('pause');
    }
})

$('.my-carousel').slick({
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  infinite:false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



// var slider = document.getElementById("myRange");
// var output = document.getElementById("demo");
// output.innerHTML = slider.value;

// slider.oninput = function() {
//   output.innerHTML = this.value;
// }



</script>

</body>
</html>