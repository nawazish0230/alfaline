<?php include('header.php') ?>
<?php include('navbar.php') ?>

<div class="row cart-container mt-3">
    <div class="col-lg-3 ">
            <h6 class="font-weight-bold pl-2 py-1 text-dark">Filters </h6>
            <div id="accordion">
    <div class="mb-3">
        <!-- categories contatainer -->
    <div class="categories-container bg-light">

        <div class="" id="headingOne">
            <h5 class="mb-0">
            <a class="btn btn-link d-flex position-relative" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h6 class=" font-weight-bold small pl-2 pt-3 text-dark">Categories </h6>
                <img class="accordion-dropdown" src="./Assets/down-arrow.png" alt="">
            </a>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body pl-5">
                <label class="contain">
                    <input type="checkbox" class="mr-5">
                    <span class="checkmark"></span>
                    <span class="less-bold txt-small ml-2">Ceramic Products</s> <br>
                </label>
                <label class="contain">
                    <input type="checkbox" class="mr-5">
                    <span class="checkmark"></span>
                    <span class="less-bold txt-small ml-2">Architechtural</s> <br>
                </label>
                <label class="contain">
                    <input type="checkbox" class="mr-5">
                    <span class="checkmark"></span>
                    <span class="less-bold txt-small ml-2">Electrical</span> <br>
                </label>
                
            </div>
        </div>
    </div>


<!-- brand -->
    <div class="brands-container bg-light mt-2">
        <div class="" id="headingOne">
            <h5 class="mb-0">
            <a class="btn btn-link d-flex position-relative" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                <h6 class="font-weight-bold small pl-2 pt-3 text-dark">Brands </h6>
                <img class="accordion-dropdown" src="./Assets/down-arrow.png" alt="">
            </a>
            </h5>
        </div>

        <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body pl-5">
                <label class="contain">
                    <input type="checkbox" class="mr-5">
                    <span class="checkmark"></span>
                    <span class="less-bold txt-small ml-2">Ceramic Products</span> <br>
                </label>
                <label class="contain">
                    <input type="checkbox" class="mr-5">
                    <span class="checkmark"></span>
                    <span class="less-bold txt-small ml-2">Ceramic Products</span> <br>
                </label>
                <label class="contain">
                    <input type="checkbox" class="mr-5">
                    <span class="checkmark"></span>
                    <span class="less-bold txt-small ml-2">Ceramic Products</span> <br>
                </label>
            </div>
        </div>
    </div>
    <!-- user rating -->
    <div class="rating-container bg-light mt-2">
        <div class="" id="headingOne">
            <h5 class="mb-0">
            <a class="btn btn-link d-flex position-relative" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                <h6 class="font-weight-bold small pl-2 pt-3 text-dark">User Ratings </h6>
                <img class="accordion-dropdown" src="./Assets/down-arrow.png" alt="">
            </a>
            </h5>
        </div>

        <div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body pl-5">
                <label class="contain">
                    <input type="checkbox" class="mr-5">
                    <span class="checkmark"></span>
                    <span class="less-bold txt-small ml-2">Ceramic Products</span> <br>
                </label>
                <label class="contain">
                    <input type="checkbox" class="mr-5">
                    <span class="checkmark"></span>
                    <span class="less-bold txt-small ml-2">Ceramic Products</span> <br>
                </label>
                <label class="contain">
                    <input type="checkbox" class="mr-5">
                    <span class="checkmark"></span>
                    <span class="less-bold txt-small ml-2">Ceramic Products</span> <br>
                </label>
            </div>
        </div>
    </div>

    <!-- price container    -->
    <div class="price-container bg-light mt-2">
        <div class="" id="headingOne">
            <h5 class="mb-0">
            <a class="btn btn-link d-flex position-relative" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                <h6 class="font-weight-bold small pl-2 pt-3 text-dark">Price Range </h6>
                <img class="accordion-dropdown" src="./Assets/down-arrow.png" alt="">
            </a>
            </h5>
        </div>

        <div id="collapseFour" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="slidercontainer ">
                <input type="range" min="0" max="500" value="0" class="slider" id="myRange">
                <!-- <span>Value: <span id="demo"></span></p> -->
                <div class="slide-number-container d-flex justify-content-between mt-3">
                <p><span class="text-muted">KWD </span>0</p>
                <p>to</p>
                <p><span class="text-muted">KWD</span> <span class="font-weight-less-bold" id="demo">0</span></p>
                </div>
            </div>
        </div>
    </div>

    </div>

    



</div>
    </div>
    <div class="col-lg-9 mx-auto">
    <h6 class="font-weight-bold mt-3 ">Search Results</h6>
    <p class="font-weight-bold text-muted small mb-4 ">649 product in search for "Floor Tiles"</p>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2">
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
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
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2" >
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
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
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2">
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                        </div>
                        <div class="rating-price back-dark">
                            <img src="./Assets/heart.png" height="18px" alt="">
                        </div>
                    </div>
                    <div class="card-body-top pt-4">
                        <h5 class="card-title small font-weight-bold color-dark">Woodens Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                        <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                        <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                        <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2" >
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                        </div>
                        <div class="rating-price back-dark">
                            <img src="./Assets/heart.png" height="18px" alt="">
                        </div>
                    </div>
                    <div class="card-body-top pt-4">
                        <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tile <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                        <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                        <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                        <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2">
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
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
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2" >
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
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
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2">
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                        </div>
                        <div class="rating-price back-dark">
                            <img src="./Assets/heart.png" height="18px" alt="">
                        </div>
                    </div>
                    <div class="card-body-top pt-4">
                        <h5 class="card-title small font-weight-bold color-dark">Woodens Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                        <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                        <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                        <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2" >
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                        </div>
                        <div class="rating-price back-dark">
                            <img src="./Assets/heart.png" height="18px" alt="">
                        </div>
                    </div>
                    <div class="card-body-top pt-4">
                        <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tile <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                        <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                        <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                        <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2">
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
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
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2" >
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
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
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2">
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                        </div>
                        <div class="rating-price back-dark">
                            <img src="./Assets/heart.png" height="18px" alt="">
                        </div>
                    </div>
                    <div class="card-body-top pt-4">
                        <h5 class="card-title small font-weight-bold color-dark">Woodens Floor Tiles <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                        <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                        <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                        <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="mx-3 my-2" >
                    <img class="card-img-top" src="./Assets/trending-1.png" alt="Card image cap">
                    <div class="card-text rating d-flex justify-content-between">
                        <div class="rating-price back-dark">
                            <span class="text-light small">4.5</span> <img src="./Assets/star.png" height="18px" alt="">
                        </div>
                        <div class="rating-price back-dark">
                            <img src="./Assets/heart.png" height="18px" alt="">
                        </div>
                    </div>
                    <div class="card-body-top pt-4">
                        <h5 class="card-title small font-weight-bold color-dark">Wooden Floor Tile <br><span class="text-primary small font-weight-bold">Ceramic Good</span></h5>
                        <p class="card-text text-success font-weight-bold"><span class="small">KWD </span>999.00</p>
                        <p class="font-weight-bold text-muted card-price">MRP: KWD 1999.00(50% Off) </p>
                        <a href="#" class="btn btn-dark back-dark btn-block"><span class="small">Add to Cart</span></a>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>




<?php include('footer.php') ?>
