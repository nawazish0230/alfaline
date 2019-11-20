<nav class="navbar navbar-expand-lg bg-light justify-content-sm-start fixed-top">
    <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2" href="index.php"><img src="./Assets/logo.png" class="navbar-logo" alt=""></a>

    <button class="navbar-toggler align-self-start"><span><i class="fa fa-bars"></i></span></button>

    <div class="collapse navbar-collapse mt-lg-0 mt-3 d-flex flex-column flex-lg-row justify-content-lg-end mobileMenu bg-light p-3 p-lg-0 mt-5 mt-lg-0" id="collapse_target">
    <ul class="navbar-nav align-self-stretch">
        <li class="nav-item"><a href="index.php" class="nav-link c-item-lg px-lg-1.5">Home</a></li>
        <!-- web view category -->
        <li class="nav-item dropdown lg-show">
            <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" class="nav-link c-item-lg dropdown-toggle px-lg-1.5">Category</a>
            <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <h6 class="dropdown-item small font-weight-bold " href="#">Architechtural</h6>
                        <a class="dropdown-item small less-bold" href="#">type 1</a>
                        <a class="dropdown-item small less-bold" href="#">type 2 </a>
                        <a class="dropdown-item small less-bold" href="#">type 3 </a>
                    </div>
                    <div class="col-lg-3 col-6">
                        <h6 class="dropdown-item small font-weight-bold " href="#">Marble</h6>
                        <a class="dropdown-item small less-bold" href="#">type 1</a>
                        <a class="dropdown-item small less-bold" href="#">type 2 </a>
                        <a class="dropdown-item small less-bold" href="#">type 3 </a>
                    </div>
                    <div class="col-lg-3 col-6">
                        <h6 class="dropdown-item small font-weight-bold " href="#">Tiles</h6>
                        <a class="dropdown-item small less-bold" href="#">type 1</a>
                        <a class="dropdown-item small less-bold" href="#">type 2 </a>
                        <a class="dropdown-item small less-bold" href="#">type 3 </a>
                    </div>
                    <div class="col-lg-3 col-6">
                        <h6 class="dropdown-item small font-weight-bold " href="#">Ceramic</h6>
                        <a class="dropdown-item small less-bold" href="#">type 1</a>
                        <a class="dropdown-item small less-bold" href="#">type 2 </a>
                        <a class="dropdown-item small less-bold" href="#">type 3 </a>
                    </div>
                </div>
            </div>
        </li>


        <!-- mobile view category -->
        <li class="nav-link dropdown c-item px-lg-1.5 sm-show">
        <a href="#menu1" class="collapsed dropdown-toggle text-dark " data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">Categories</></a></li>
            <div class="collapse" id="menu1">
                <a href="#menu1sub1" class="nav-item dropdown-toggle cat-item-head" data-toggle="collapse" aria-expanded="false">Architechtural</a>
                <div class="collapse" id="menu1sub1">
                    <a href="#" class="nav-item cat-item" data-parent="#menu1sub1">Subitem 1.1 </a>
                    <a href="#" class="nav-item cat-item" data-parent="#menu1sub1">Subitem 1.2 </a>
                    <a href="#" class="nav-item cat-item" data-parent="#menu1sub1">Subitem 1.3 </a>
                    <!-- <a href="#menu1sub1sub1" class="list-group-item color-dark dropdown-toggle less-bold" data-toggle="collapse" aria-expanded="false">Item 2 </a>
                    <div class="collapse" id="menu1sub1sub1">
                        <a href="#" class="list-group-item text-dark" data-parent="#menu1sub1sub1">Subitem 2.1</a>
                        <a href="#" class="list-group-item text-dark" data-parent="#menu1sub1sub1">Subitem 2.2</a>
                    </div> -->
                </div>

                <!-- second dropdown -->
                <a href="#marbles" class="nav-item cat-item-head dropdown-toggle " data-toggle="collapse" aria-expanded="false">Marble </a>
                <div class="collapse" id="marbles">
                    <a href="#" class="nav-item cat-item" data-parent="#marbles">wooden marble</a>
                    <a href="#" class="nav-item cat-item" data-parent="#marbles">style marble</a>
                    <a href="#" class="nav-item cat-item" data-parent="#marbles">deign marble</a>
                </div>
                <!-- third dropdown -->
                <a href="#tiles" class="nav-item cat-item-head dropdown-toggle" data-toggle="collapse" aria-expanded="false">Tiles </a>
                <div class="collapse" id="tiles">
                    <a href="#" class="nav-item cat-item" data-parent="#tiles">kithcen Tiles</a>
                    <a href="#" class="nav-item cat-item" data-parent="#tiles">room tiles</a>
                    <a href="#" class="nav-item cat-item" data-parent="#tiles">office tiles</a>
                </div>
                <!-- fourth dropdown -->
                <a href="#ceramic" class="nav-item cat-item-head dropdown-toggle " data-toggle="collapse" aria-expanded="false">Ceramic </a>
                <div class="collapse" id="ceramic">
                    <a href="#" class="nav-item cat-item" data-parent="#ceramic">ceramic other</a>
                    <a href="#" class="nav-item cat-item" data-parent="#ceramic">ceramic yes</a>
                    <a href="#" class="nav-item cat-item" data-parent="#ceramic">ceramic tiles</a>
                </div>
            </div>


        <!-- offers -->
        <li class="nav-item"><a href="#" class="nav-link c-item-lg small px-lg-1.5">Offers</a></li>

        <!-- contact us -->
        <li class="nav-item"><a href="#" class="nav-link c-item-lg px-lg-1.5">Contact Us</a></li>

        <!-- search box -->
        <li class="nav-item"><form class="form-inline search" action="search">
            <input class="form-control small mr-sm-2 ml-lg-0  search-sm-form search-form" type="search" placeholder="Search here"  ><a class="nav-search" href="search.php"><img width="17" src="./Assets/search.png" alt="img"></a> </form>
        </li>

        <!-- web view laguage  option-->
        <li class="nav-item dropdown px-lg-3 border-right border-left lg-show">
            <a class="nav-link brdr-bottom text-dark dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><img src="./Assets/language.png" width="17" height="17" alt=""></a>
        </li>

        <!-- mobile view laguage  option-->
        <li class="nav-item dropdown c-item sm-show">
            <a class="nav-link brdr-bottom text-dark dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Language</a>
        </li>


        <!-- web-view account section -->
        <li class="nav-item dropdown lg-show">
            <a class="dropdown-toggle nav-link c-item-lg" data-target="dropdown_target" id="navbardrop" data-toggle="dropdown">My Account<!-- <img src="./Assets/down-arrow.png" class="account-arrow account-sm-arrow mr-lg-5" alt=""> --></a>
            <div class="dropdown-menu menu-sm p-3" aria-labelledby="dropdown_target">
                <a class="dropdown-item small text-right font-weight-less-bold my-1" href="#">Md Nawazish <img class="ml-2" src="./Assets/review-pic.png" > </a>
                <a class="dropdown-item small text-right font-weight-less-bold my-1" href="#">My Favourites <img class="ml-2" src="./Assets/a-favourite.png" width="15"> </a>
                <a class="dropdown-item small text-right font-weight-less-bold my-1" href="#">My Orders <img class="ml-2" src="./Assets/a-order.png" width="15"> </a>
                <a class="dropdown-item small text-right font-weight-less-bold my-1" href="#">My Transaction <img class="ml-2" src="./Assets/a-transaction.png" width="15"> </a>
                <a class="dropdown-item small text-right font-weight-less-bold my-1" href="#">My Profile <img class="ml-2" src="./Assets/a-profile.png" width="15"> </a>
                <a class="dropdown-item small text-right font-weight-less-bold my-1" href="#">Helps & Support <img class="ml-2" src="./Assets/a-help.png" width="15"> </a>
                <a class="dropdown-item small text-right font-weight-less-bold my-1" href="#">Logout <img class="ml-2" src="./Assets/a-logout.png" width="15"> </a>
            </div>
        </li>

        <!-- mobile view account section -->
        <li class="nav-link dropdown c-item px-lg-1.5 sm-show">
        <a href="#account" class="collapsed dropdown-toggle text-dark " data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">Account</></a></li>
            <div class="collapse" data-toggle="account" id="account">
                <a href="" class="nav-item cat-item-head"><b>Md Nawazish</b></a>
                <a href="" class="nav-item cat-item">My Favourites</a>
                <a href="" class="nav-item cat-item">My Orders</a>
                <a href="" class="nav-item cat-item">My Transaction</a>
                <a href="" class="nav-item cat-item">My Profile </a>
                <a href="" class="nav-item cat-item">Helps & Support</a>
                <a href="" class="nav-item cat-item">Logout</a>
                
            </div>

        <!-- notification web view -->
        <li class="nav-item notification-icon lg-show"><a href="#" class="nav-link ml-lg-2 pl-lg-1"><img src="./Assets/notification.png" width="20px" height="20px" alt=""></a><span class="badge bg-primary smaller text-white notification-badge">05</span></li>
        <!-- notification mobile view -->
        <li class="nav-item sm-show"><a href="#" class="nav-link ml-lg-2 pl-lg-1 c-item">Notification <span class="badge bg-primary smaller text-white">05</span></a></li>

        <!-- cart web view -->
        <li class="nav-item cart-icon lg-show"><a href="cart.php" class="nav-link "><img src="./Assets/cart.png" width="20px" height="20px" alt=""></a><span class="badge bg-primary smaller text-white cart-badge">05</span></li>
        <!-- cart mobile view -->
        <li class="nav-item sm-show"><a href="#" class="nav-link ml-lg-2 pl-lg-1 c-item">Cart <span class="badge bg-primary smaller text-white ">05</span></a></li>
    </ul>
</div>
</nav>
<div class="overlay"></div>
