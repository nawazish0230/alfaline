<?php include('header.php') ?>
<body>
    <!-- navigation -->
<?php include('navbar.php') ?>

    <!-- first section -->
    <section class="hero-section">
        <div class="row">
                <div class="col-lg-5 col-12 hero">
                    <div class="hero-section-first">
                        <div class="head-background"></div>
                        <h2 class="hero-section-tagline color-dark">Premium Products at your fingertips</h2>
                        <p class="hero-section-tagline-2">Get 50% Off on all Home Products. Valid upto 31 Dec*</p>
                        <button class="btn btn-primary mt-4 text-white"><a href="product-detail.php" class="btn btn-primary mt-4 px-5 d-lg-inline text-white">Buy Now</a></button>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">
        
                            <!-- Indicators -->
                            <ul class="carousel-indicators carousel-indicator">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                            
                            <!-- The slideshow -->
                            <div class="carousel-inner carousel-image">
                                <div class="carousel-item active">
                                <img src="./Assets/carousel-image-2.jpeg" class="img-fluid" alt="Los Angeles">
                                </div>
                                <div class="carousel-item">
                                <img src="./Assets/carousel-img-2.jpg" class="img-fluid"  alt="Chicago">
                                </div>
                                <div class="carousel-item">
                                <img src="./Assets/carousel-image-2.jpeg" class="img-fluid"  alt="New York">
                                </div>
                            </div>
                            
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev " href="#demo" data-slide="prev">
                                <span><img src="./Assets/prev.png" class="prev" alt=""></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span><img src="./Assets/next.png" class="prev" alt=""></span>
                            </a>
                            
                    </div>
                </div>
            </div>
    </section>

    <!-- second section -->
    <div class="first-carousel my-5">
            <div class="my-carousel my-5 ">
                <div><img class="px-2 img-fluid" src="./Assets/carousel-1.png" alt=""></div>
                <div><img class="px-2 img-fluid" src="./Assets/carousel-2.png" alt=""></div>
                <div><img class="px-2 img-fluid" src="./Assets/carousel-3.png" alt=""></div>
                <div><img class="px-2 img-fluid" src="./Assets/carousel-3.png" alt=""></div>
                <div><img class="px-2 img-fluid" src="./Assets/carousel-3.png" alt=""></div>
        </div>
    </div>


<!-- third section  | product of the day -->  
    <section class=" product-day">
        <h1 class="product-heading font-weight-bold mt-5 text-lg-left text-center">Product Of The Day</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <div class="item-card my-5">
                    <div class="item-card-img">
                        <div class="item-img">
                            <img src="./Assets/product-1.png" class="img-fluid" alt="">
                        </div>
                        <div class="item-card-footer">
                            <div class="d-flex justify-content-between">
                                <div class="title">
                                    <p class="font-weight-bold pt-2">Wooden floor tiles<br>
                                        <span class="text-primary small font-weight-bold">Ceramic Good</span>
                                    </p>
                                    
                                </div>
                                <div class="price text-success mt-2">
                                    <p class="font-weight-bold"><span class="small">KWD </span>999.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <div class="item-card my-5">
                        <div class="item-card-img">
                            <div class="item-img">
                                <img src="./Assets/product-2.png"  class="img-fluid" alt="">
                            </div>
                            <div class="item-card-footer">
                                <div class="d-flex justify-content-between">
                                    <div class="title">
                                        <p class="font-weight-bold pt-2">Wooden floor tiles<br>
                                            <span class="text-primary small font-weight-bold">Ceramic Good</span>
                                        </p>
                                        
                                    </div>
                                    <div class="price text-success mt-2">
                                        <p class="font-weight-bold"><span class="small">KWD </span>999.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <div class="item-card my-5">
                        <div class="item-card-img">
                            <div class="item-img">
                                <img src="./Assets/product-3.png"  class="img-fluid" alt="">
                            </div>
                            <div class="item-card-footer">
                                <div class="d-flex justify-content-between">
                                    <div class="title">
                                        <p class="font-weight-bold pt-2">Wooden floor tiles<br>
                                            <span class="text-primary small font-weight-bold">Ceramic Good</span>
                                        </p>
                                        
                                    </div>
                                    <div class="price text-success mt-2">
                                        <p class="font-weight-bold"><span class="small">KWD </span>999.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        
        </div>

    </section>


    <!-- <fourth section-- | top-product--  -->
    <section class="top-product product-conatiner">
            <h1 class="product-heading font-weight-bold mt-2 ml-4 text-lg-left text-center">Top Product</h1>
        <div class="row">
            <div class="col-lg-3 col-12">
                    <div class="my-5 mx-4">
                        <img class="card-img-top" src="./Assets/top-product-1.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark small">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark small">
                                <img src="./Assets/heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                            <a href="product-detail.php" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3 col-12">
                    <div class="my-5 mx-4" >
                        <img class="card-img-top" src="./Assets/top-product-2.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/white-heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Marbel Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>899.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 2999.00(50% Off) </p>
                            <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3 col-12">
                    <div class="my-5 mx-4">
                        <img class="card-img-top" src="./Assets/top-product-4.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/white-heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Digital design <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                            <a href="product-detail.php" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3 col-12">
                    <div class="my-5 mx-4" >
                        <img class="card-img-top" src="./Assets/top-product-1.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                            <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- <fifth section ---| trending product--  -->
    <section class="trending-product product-conatiner">
            <h1 class="product-heading font-weight-bold ml-3 mt-2 text-lg-left text-center">Trending Product</h1>
        <div class="row">
            <div class="col-lg-3">
                    <div class="my-5 mx-4">
                        <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                            <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3">
                    <div class="my-5 mx-4">
                        <img class="card-img-top" src="./Assets/trending-2.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/white-heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Marbel Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>899.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 2999.00(50% Off) </p>
                            <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3">
                    <div class="my-5 mx-4">
                        <img class="card-img-top" src="./Assets/trending-3.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/white-heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Digital design <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                            <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3">
                    <div class="my-5 mx-4">
                        <img class="card-img-top" src="./Assets/trending-4.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                            <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- sixth section | All product -->
    
    <section class="product-day">
        <img src="./Assets/mother-love-2.png" class="img-fluid product-day-img" alt="">
        <div class="row">
        <div class="all-product col-lg-12 col-12">
            <img class="card-img-top image-fluid" src="./Assets/trending-1.png" alt="Card image cap">
            <div class="card-text rating d-flex justify-content-between">
                <div class="rating-price back-dark">
                    <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                </div>
                <div class="rating-price back-dark">
                    <img src="./Assets/heart.png" height="18px" alt="">
                </div>
            </div>          
        </div>
        <div class="all-product product-2  col-lg-12 col-12">
            <img class="card-img-top image-fluid " src="./Assets/trending-2.png" alt="Card image cap">
            <div class="card-text rating d-flex justify-content-between">
                <div class="rating-price back-dark">
                    <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                </div>
                <div class="rating-price back-dark">
                    <img src="./Assets/heart.png" height="18px" alt="">
                </div>
            </div>
                        
        </div>
        <a href="#" class="btn btn-dark back-dark mt-lg-5 view-all-btn px-5"><span class="small">View All</span></a>
</div>
    </section>
    </div>


    <!-- <seventh section ---| best architechtural product product--  -->
    <section class="architechtural-product-container">
            <h1 class="product-heading font-weight-bold mt-2 ml-4 text-lg-left text-center">Best Architechtural Product</h1>
        <div class="row">
            <div class="col-lg-3">
                    <div class="my-5 mx-4">
                        <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                            <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3">
                    <div class="my-5 mx-4">
                        <img class="card-img-top" src="./Assets/trending-2.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/white-heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Marbel Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>899.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 2999.00(50% Off) </p>
                            <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3">
                    <div class="my-5 mx-4">
                        <img class="card-img-top" src="./Assets/trending-3.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/white-heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Digital design <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                            <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3">
                    <div class="my-5 mx-4">
                        <img class="card-img-top" src="./Assets/trending-4.png" alt="Card image cap">
                        <div class="card-text rating d-flex justify-content-between">
                            <div class="rating-price back-dark">
                                <span class="text-light">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                            </div>
                            <div class="rating-price back-dark">
                                <img src="./Assets/heart.png" height="18px" alt="">
                            </div>
                        </div>
                        <div class="card-body-top pt-4">
                            <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                            <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                            <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- eight section | customer-gallery-->
        <div class="first-carousel">
        <h1 class="product-heading font-weight-bold mt-2 text-lg-left text-center">Customer Gallery</h1>
            <div class="my-carousel my-5 ">
                <div><img class="px-2 img-fluid" src="./Assets/carousel-1.png" alt=""></div>
                <div><img class="px-2 img-fluid" src="./Assets/carousel-2.png" alt=""></div>
                <div><img class="px-2 img-fluid" src="./Assets/carousel-3.png" alt=""></div>
                <div><img class="px-2 img-fluid" src="./Assets/carousel-3.png" alt=""></div>
                <div><img class="px-2 img-fluid" src="./Assets/carousel-3.png" alt=""></div>
    </div>
            
        </div>
        
    
<?php include('footer.php') ?>