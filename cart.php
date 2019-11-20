<?php include('header.php') ?>
<?php include('navbar.php') ?>

<div class="row cart-container">
    <div class="col-lg-8 ">
        <div class="row">
            <div class="col-lg-12  mt-5">
                <!-- my cart section -->
                <h6 class="font-weight-bold pl-1 pb-lg-3">My Cart</h6>
                <div class="my-3 d-flex flex-lg-row flex-column justify-content-between align-items-lg-center">
                    <img src="./Assets/product-detail.png"  width="90" alt="">
                    <div class="cart-description">
                        <h6 class="font-weight-bold mt-lg-0 mt-3 mbn-3">Wooden Floor Tiles</h6>
                        <span class="smaller less-bold text-muted">Product</span>
                    </div>
                    <div class="cart-price">
                        <h6 class="font-weight-bold mt-lg-0 mt-3 mbn-3"><span class="small font-weight-bold ">KWD </span>999.00</h6>
                        <span class="smaller less-bold text-muted">per unit</span>
                    </div>
                    <div class="cart-quantity">
                        <h6 class="font-weight-bold mt-lg-0 mt-3 mbn-3">1000 pieces</h6>
                        <span class="smaller less-bold text-muted">Total Quantity</span>
                    </div>
                    <div class="cart-total-price">
                        <h6 class="font-weight-bold mt-lg-0 mt-3 mbn-3"><span class="small font-weight-bold ">KWD </span>999.00</h6>
                        <span class="smaller less-bold text-muted">Total Price</span>
                    </div>
                </div>
                <hr>


                <div class="my-3 d-flex flex-lg-row flex-column justify-content-between align-items-lg-center">
                    <img src="./Assets/product-detail.png" width="90" alt="">
                    <div class="cart-description">
                        <h6 class="font-weight-bold mt-lg-0 mt-3 mbn-3 ">Pattern Floor Tiles</h6>
                        <span class="smaller less-bold text-muted">Product</span>
                    </div>
                    <div class="cart-price">
                        <h6 class="font-weight-bold mt-lg-0 mt-3 mbn-3 "><span class="small font-weight-bold ">KWD </span>789.00</h6>
                        <span class="smaller less-bold text-muted">per unit</span>
                    </div>
                    <div class="cart-quantity">
                        <h6 class="font-weight-bold mt-lg-0 mt-3 mbn-3 ">100 pieces</h6>
                        <span class="smaller less-bold text-muted">Total Quantity</span>
                    </div>
                    <div class="cart-total-price">
                        <h6 class="font-weight-bold mt-lg-0 mt-3 mbn-3 "><span class="small font-weight-bold ">KWD </span>999.00</h6>
                        <span class="smaller less-bold text-muted">Total Price</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- available offer -->
            <div class="col-lg-6 ">
                <h6 class="font-weight-bold mt-5 mb-3">Available Offers</h6>
                <div class="available-offer-container bg-light py-3">
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
            
            <!-- payment option -->
            <div class="col-lg-6">
                <h6 class="font-weight-bold mt-5 mb-3">Payment Options</h6>
                <div class="payment-option-container mb-5 bg-light py-3">
                    <div class="pt-3">
                            <label class="contain ml-3">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark mt-1"></span>
                                <p class="ml-3 payment-header font-weight-bold">Credit Card/ Debit Card</p>
                            </label>
                                <p class="ml-4 pl-2 mtn-15 smaller less-bold">Lorem ipsum dolor  dolor sit amet consectetur  elit. Harum, deserunt!</p>
                    </div>
                    <div class="pt-3">
                            <label class="contain ml-3">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark mt-1"></span>
                                <p class="ml-3 payment-header font-weight-bold">Net Banking / NEFT</p>
                            </label>
                                <p class="ml-4 pl-2 mtn-15 smaller less-bold">Lorem ipsum dolor  dolor sit amet consectetur  elit. Harum, deserunt!</p>
                    </div>
                    <div class="pt-3">
                            <label class="contain ml-3">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark mt-1"></span>
                                <p class="ml-3 payment-header font-weight-bold">UPI Payment</p>
                            </label>
                                <p class="ml-4 pl-2 mtn-15 smaller less-bold">Lorem ipsum dolor  dolor sit amet consectetur  elit. Harum, deserunt!</p>
                    </div>
                    <div class="pt-3">
                            <label class="contain ml-3">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark  mt-1"></span>
                                <p class="ml-3 payment-header font-weight-bold">Cash on Delivery</p>
                            </label>
                                <p class="ml-4 pl-2 mtn-15 smaller less-bold">Lorem ipsum dolor  dolor sit amet consectetur  elit. Harum, deserunt!</p>
                    </div>
                    
                </div>
            </div>

            
        </div>

        <div class="row">
            <!-- billing info -->
            <h6 class="font-weight-bold ml-3 py-3">Billing Info</h6>
            <div class="col-lg-12 ">
                <div class="billing-info-container bg-light">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group pt-3">
                                    <input type="text" class="form-control border-0 input-text" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 input-text" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group pt-3">
                                    <input type="text" class="form-control input-text" placeholder="Mobile Number">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- shipping address -->
        <div class="row">
            <h6 class="font-weight-bold ml-3 py-3">Shipping Address</h6>
            <div class="col-lg-12 ">
                <div class="billing-info-container bg-light ">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6 pt-3">
                                <div class="form-group">
                                    <input type="text" class="form-control input-text" placeholder="H.No./Apartment Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-text" placeholder="Address Line 01">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-text" placeholder="Address Line 02">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-text" placeholder="Near Landmark">
                                </div>
                            </div>
                            <div class="col-lg-6 pt-3">
                                <div class="form-group">
                                    <div class="form-group">
                                    <select name="" class="form-control input-text" id="">
                                            <option value="null" selected disabled>Select Country</option>
                                            <option value="ind">India</option>
                                            <option value="us">Us</option>
                                            <option value="sa">Saudi Arab</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <select name="" class="form-control input-text" id="">
                                            <option value="null" selected disabled>Select State</option>
                                            <option value="mp">Madhya Pradesh</option>
                                            <option value="bg">Bangalore</option>
                                            <option value="jh">Jharkhand</option>
                                        </select>
                                    </div>
                                    <select name="" class="form-control input-text" id="">
                                        <option value="null" selected disabled>Select City</option>
                                        <option value="bpl">Bhopal</option>
                                        <option value="ind">Indore</option>
                                        <option value="rnc">Ranchi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-text" placeholder="Pin Code">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-lg-4 mt-5 mb-lg-0 mb-4">
        <!-- bill summary -->
        <h6 class="font-weight-bold ml-4 pl-1 mb-3 pb-3">Bill Summary</h6>
            <div class="bill-summary-container bg-light p-lg-4 p-3">
                <div class="bill-summary-quantity d-flex justify-content-between mb-3">
                    <div class="bill-description">
                        <p class="font-weight-bold small">Wooden Floor Tiles</p>
                        <p class="smaller less-bold mtn-15">Quantity: 1000 pieces</p>
                    </div>
                    <div class="bill-price">
                        <h6 class="font-weight-bold "><span class="small font-weight-bold ">KWD </span>999.00</h6>
                    </div>
                </div>
                <div class="bill-summary-quantity d-flex justify-content-between mb-3">
                    <div class="bill-description">
                        <p class="font-weight-bold small">Wooden Floor Tiles</p>
                        <p class="smaller less-bold mtn-15">Quantity: 1000 pieces</p>
                    </div>
                    <div class="bill-price">
                        <h6 class="font-weight-bold "><span class="small font-weight-bold ">KWD </span>999.00</h6>
                    </div>
                </div>
                <div class="bill-summary-charges d-flex justify-content-between mb-3">
                    <div class="bill-charges">
                        <p class="font-weight-bold small">Other Charges</p>
                        <p class="smaller less-bold mtn-15">Charges Details</p>
                    </div>
                    <div class="bill-other-charges">
                        <h6 class="font-weight-bold "><span class="small font-weight-bold ">KWD </span>9.00</h6>
                    </div>
                </div>
                <div class="bill-summary-offers d-flex justify-content-between mb-3">
                    <div class="bill-offers">
                        <p class="font-weight-bold small">Offers</p>
                        <p class="smaller less-bold mtn-15">Coupon: <span class="text-success font-weight-bold">FLT40</span> <img src="./Assets/minus.png" width="17"  alt=""> </p>
                    </div>
                    <div class="bill-offers">
                        <h6 class="font-weight-bold "><span class="small font-weight-bold ">-KWD </span>129.00</h6>
                    </div>
                </div>
                <div class="bill-total d-flex justify-content-between mt-4">
                    <div class="bill-offers">
                        <p class="font-weight-bold small">Total Amount Payable</p>
                        <p class="smaller less-bold mtn-15">Charges Details</p>
                    </div>
                    <div class="bill-offers">
                        <h6 class="font-weight-bold "><span class="small font-weight-bold ">KWD </span>8899.00</h6>
                    </div>
                </div>
                <a class="btn btn-primary btn-block text-uppercase"> <span class="small text-white   less-bold">Proceed For Payment</span> </a>
            </div>
    </div>
</div>


<?php include('footer.php') ?>