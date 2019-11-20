<?php include('header.php') ?>
<?php include('navbar.php') ?>

<!-- first section | product deatails -->
<section class="main-container product-details mt-5">
    <div class="row">
        <!-- main image of product -->
        <div class="col-lg-10 col-12 mt-4 p-4">
            
            <div class="row">
                <div class="col-lg-6 product-slider ">
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">

        <!-- Indicators -->
        <!-- <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
            <li data-target="#demo" data-slide-to="6"></li>
        </ul> -->

            <!-- The slideshow -->
            <div class="carousel-inner carousel-container">
                <div class="carousel-item active">
                <img src="./Assets/product-detail-1.jpg" class="img-fluid" >
                </div>
                <div class="carousel-item">
                <img src="./Assets/product-detail-2.jpg" class="img-fluid" >
                </div>
                <div class="carousel-item">
                <img src="./Assets/product-detail-3.jpg" class="img-fluid" >
                </div>
                <div class="carousel-item">
                <img src="./Assets/product-detail-4.jpg" class="img-fluid" >
                </div>
                <div class="carousel-item">
                <img src="./Assets/product-detail-1.jpg" class="img-fluid" >
                </div>
                <div class="carousel-item">
                <img src="./Assets/product-detail-2.jpg" class="img-fluid" >
                </div>
                <div class="carousel-item">
                <img src="./Assets/product-detail-3.jpg" class="img-fluid" >
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <img src="./Assets/prev.png" alt="">
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <img src="./Assets/next.png" alt="">
            </a>
            <div class="clearfix">
                <div id="test" class="carousel slide " >
                    <!-- The slideshow -->
                    <div class="carousel-inner carousel-thumb-container px-2 mt-2">
                        <div class="carousel-item active">
                            <img src="./Assets/product-detail-small-1.jpg" class="img-fluid" data-target="#demo" data-slide-to="0"  >
                            <img src="./Assets/product-detail-small-2.jpg" class="img-fluid" data-target="#demo" data-slide-to="1" >
                            <img src="./Assets/product-detail-small-3.jpg" class="img-fluid" data-target="#demo" data-slide-to="2" >
                            <img src="./Assets/product-detail-small-4.jpg" class="img-fluid" data-target="#demo" data-slide-to="3" >
                            <img src="./Assets/product-detail-small-1.jpg" class="img-fluid" data-target="#demo" data-slide-to="4" >
                        </div>
                        <div class="carousel-item">
                            <img src="./Assets/product-detail-small-2.jpg" class="img-fluid " data-target="#demo" data-slide-to="5" >
                            <img src="./Assets/product-detail-small-3.jpg" class="img-fluid" data-target="#demo" data-slide-to="6" >
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#test" data-slide="prev">
                        <img src="./Assets/prev.png" alt="">
                    </a>
                    <a class="carousel-control-next" href="#test" data-slide="next">
                        <img src="./Assets/next.png" alt="">
                    </a>
                </div>
            </div>
        </div>


                </div>
                <div class="col-lg-6 mt-lg-0 mt-4">
                    <!-- Whole description of product -->
                    <div class="description">
                        <div class="description-title">
                            <h6 class="font-weight-bold ">Wooden Floor Tiles</h6>
                            <p class="font-weight-bold text-primary small ">Ceramic Good</p>
                        </div>
                        <div class="description-rating my-4">
                            <img src="./Assets/star.png" >
                            <img src="./Assets/star.png" >
                            <img src="./Assets/star.png" >
                            <img src="./Assets/star.png" >
                            <img src="./Assets/star.png" >
                            <p class="small font-weight-bold mt-1">4.5 Stars (111,253 Users)</p>
                        </div>
                        <div class="description-text">
                            <p class="small font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, sint autem illum eaque doloremque accusamus ipsum neque assumenda! Tempore veniam libero, sed modi dolor aliquid deleniti delectus est corrupti vel.</p>
                        </div>
                        <div class="description-price">
                            <span class="text-success font-weight-bold"><span class="small ">KWD </span>999.00</span><br>
                            <p class="smaller font-weight-bold text-muted">MRP: KWD 1999.00 (50% Off)</p>
                        </div>
                        <div class="description-quantity mb-4">
                            <div class="font-weight-bold small mb-2">Choose Quantity</div>
                            <select type="select" class="form-control w-50" placeholder="Select Quantity">
                                <option value="">1000, pieces</option>
                            </select>
                        </div>
                        <div class="description-button">
                            <a class="btn back-dark text-light px-lg-5 px-4 mr-lg-3"><span class="small less-bold">Add to Cart</span></a>
                            <a class="btn bg-primary text-light px-lg-5 px-4" href="cart.php"><span class="small less-bold">Buy Now</span></a>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="row">
                <div class="col-lg-6">
                <!-- product specification -->
                    <!-- <div class="col-lg-12 mt-4 mln-15"> -->
                    <div class="product-specification-container">
                        <div class="product-specification mt-5">
                            <h6 class="font-weight-bold">Specification</h6>
                            <p class="small less-bold">dolorum qui magni mollitia labore. Eum officia doloremque excepturi, consequuntur quibusdam modi et omnis corporis reiciendis consectetur consequatur a assumenda ducimus minima quia cumque laudantium veniam?</p>
                        </div>
                        <div class="product-detail">
                            <h6 class="font-weight-bold">Detail</h6>
                            <p class="small less-bold">explicabo atque? Fuga, maxime aspernatur facere corrupti necessitatibus vero error eum quae earum vitae ratione consequatur est. Aspernatur, accusamus quam! Aliquam incidunt eaque obcaecati, sit architecto fugit. Doloremque eum commodi laborum harum quasi voluptas nisi porro architecto rerum, earum optio doloribus tempore error minima sit possimus provident?</p>
                            <p class="small less-bold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat reiciendis eum explicabo quia, ipsa nesciunt, beatae voluptatem sunt architecto alias eligendi facilis ipsum asperiores eaque a laboriosam natus consequatur. Iure, voluptas sequi nam, ipsa quam animi amet recusandae quibusdam maiores saepe unde laudantium aut? Voluptatum, tempora iste eius perspiciatis totam alias voluptas temporibus sed laudantium quidem provident iusto praesentium ipsam?</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <!-- avialable offer -->
                    <h6 class="font-weight-bold mt-5 mb-3">Available Offers</h6>
                    <div class="available-offer-container bg-light py-3 ">
                    <div class="py-3">
                            <label class="contain ml-3 ">
                                <input type="checkbox">
                                <span class="checkmark mt-1"></span>
                                <p class="ml-3 smaller font-weight-bold">Orem ipsum dolor  dolor sit amet consectetur  elit. Harum, deserunt!</p>
                            </label>
                        <div class="available-offer-list ml-4 mtn-10">
                            <p class="text-muted less-bold smaller pl-1 mtn-10">*Lorem ipsum dolor sit.</p>
                            <p class="small less-bold pl-2 mtn-10">Code : <span class="text-success">40OFF</span></p>
                        </div>
                    </div>
                    <div class="py-2">
                            <label class="contain ml-3 ">
                                <input type="checkbox">
                                <span class="checkmark mt-1"></span>
                                <p class="ml-3 smaller font-weight-bold">Orem ipsum dolor  dolor sit amet consectetur  elit. Harum, deserunt!</p>
                            </label>
                        <div class="available-offer-list ml-4 mtn-10">
                            <p class="text-muted less-bold smaller pl-1 mtn-10">*Lorem ipsum dolor sit.</p>
                            <p class="small less-bold pl-2 mtn-10">Code : <span class="text-success">40OFF</span></p>
                        </div>
                    </div>
                    <div class="py-2">
                            <label class="contain ml-3">
                                <input type="checkbox">
                                <span class="checkmark mt-1"></span>
                                <p class="ml-3 smaller font-weight-bold">Orem ipsum dolor  dolor sit amet consectetur  elit. Harum, deserunt!</p>
                            </label>
                        <div class="available-offer-list ml-4 mtn-10">
                            <p class="text-muted less-bold smaller pl-1 mtn-10">*Lorem ipsum dolor sit.</p>
                            <p class="small less-bold pl-2 mtn-10">Code : <span class="text-success">40OFF</span></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                

                    <!-- product bought together -->
                    <h6 class="font-weight-bold mt-5">Product bought together</h6>
                    <div class="product-bought-together  d-flex justify-content-between">
                        <div class="my-3" style="width: 7rem;">
                                <img class="card-img-top" src="./Assets/trending-1.png" ge cap">
                                <div class="card-body-top pt-4">
                                    <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                                </div>
                        </div>
                        <img src="./Assets/add.png" class="mt-8" width="20" height="20">
                        <div class="my-3" style="width: 7rem;">
                            <img class="card-img-top" src="./Assets/trending-2.png" alt="Card image cap">
                            <div class="card-body-top pt-4">
                                <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            </div>
                        </div>
                        <img src="./Assets/add.png" class="mt-8" width="20" height="20">
                        <div class="my-3" style="width: 7rem;">
                            <img class="card-img-top" src="./Assets/trending-3.png" alt="Card image cap">
                            <div class="card-body-top pt-4">
                                <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <a class="btn btn-dark  back-dark px-4 btn-small"><span class="small text-white">Add all items to Cart</span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Review section -->
                    <div class="review-section">
                        <div class="review-section-top d-flex justify-content-between">
                            <h6 class="font-weight-bold mt-5">Review (11,999)</h6>
                            <p class="font-weight-bold mt-5 small"><a href="#">Write a review</a></p>
                        </div>
                        <div class="review-container  bg-light px-4 pt-5 pb-3 mb-5">
                            <div class="review mb-5">
                                <img src="./Assets/review-pic.png" alt="">
                                <div class="review-list ml-5 mtn-55 pl-4 ">
                                    <p class="small font-weight-bold">John Doe <br>
                                    <span class="small font-weight-bold">29.08.19</span></p>
                                    <p class=" smaller less-bold">Lorem ipsum dolor sit amet consectetur adipisicing dolor sit amet consectetur  elit. Harum, deserunt!</p>
                                    <div class="review-star mtn-10">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        </div>
                                    </div>
                            </div>
                            <div class="review  mb-5">
                                <img src="./Assets/review-pic.png" alt="">
                                <div class="review-list ml-5 mtn-55 pl-4 ">
                                    <p class="small font-weight-bold">John Doe <br>
                                    <span class="small font-weight-bold">29.08.19</span></p>
                                    <p class=" smaller less-bold">Lorem ipsum dolor sit amet consectetur adipisicing dolor sit amet consectetur  elit. Harum, deserunt!</p>
                                    <div class="review-star mtn-10">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        </div>
                                    </div>
                            </div>
                            <div class="review  mb-5">
                                <img src="./Assets/review-pic.png" alt="">
                                <div class="review-list ml-5 mtn-55 pl-4 ">
                                    <p class="small font-weight-bold">John Doe <br>
                                    <span class="small font-weight-bold">29.08.19</span></p>
                                    <p class=" smaller less-bold">Lorem ipsum dolor sit amet consectetur adipisicing dolor sit amet consectetur  elit. Harum, deserunt!</p>
                                    <div class="review-star mtn-10">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        <img src="./Assets/star.png" alt="">
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>  
            </div>
        </div>


                    


        <div class="col-lg-2 bg-light">
            <h6 class="font-weight-bold py-3">Product You may like</h6>
            <div class="product-may-like-container mx-auto">
                <div class="my-3" style="width: 10rem;">
                                <img class="card-img-top" src="./Assets/top-product-1.png" alt="Card image cap">
                                <div class="card-text rating d-flex justify-content-between">
                                    <div class="rating-price back-dark">
                                        <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                                    </div>
                                    <div class="rating-price back-dark">
                                        <img src="./Assets/white-heart.png" height="18px" alt="">
                                    </div>
                                </div>
                                <div class="card-body-top pt-4">
                                    <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                                    <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                                    <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                                    <a href="product-detail.php" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                                </div>
                </div>
                <div class="my-3" style="width: 10rem;">
                                <img class="card-img-top" src="./Assets/top-product-1.png" alt="Card image cap">
                                <div class="card-text rating d-flex justify-content-between">
                                    <div class="rating-price back-dark">
                                        <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                                    </div>
                                    <div class="rating-price back-dark">
                                        <img src="./Assets/white-heart.png" height="18px" alt="">
                                    </div>
                                </div>
                                <div class="card-body-top pt-4">
                                    <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                                    <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                                    <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                                    <a href="product-detail.php" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                                </div>
                </div>
                <div class="my-3" style="width: 10rem;">
                                <img class="card-img-top" src="./Assets/top-product-1.png" alt="Card image cap">
                                <div class="card-text rating d-flex justify-content-between">
                                    <div class="rating-price back-dark">
                                        <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                                    </div>
                                    <div class="rating-price back-dark">
                                        <img src="./Assets/white-heart.png" height="18px" alt="">
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
        </div>

        

        

    </div>
</section>

<?php include('footer.php') ?>