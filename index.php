<?php
require_once ('feedback.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaHelper</title>

    <!--Including styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
<!--Preloader area-->
<div id="preloader" class="loader-wrapper">
    <div id="loader"></div>
</div>
<div class="main">
    <!--Header area-->
    <header id="header">
        <div class="container">
            <div class="d-flex flex-row justify-content-between align-items-center" id="headerm">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/logo2.png" alt="InstaHelper" width="170px" height="30px">
                    </a>
                </div>
                <div id="menutog" onclick="callmenu()">
                    <i class="fas fa-bars" style="color: white;">
                    </i>
                </div>
                <div class="links" id="links">
                    <ul id="list" class="list-inline">
                        <li class="list-inline-item">
                            <a class="scroll" href="#features">Features</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="scroll" href="#faq">FAQ</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="blog.html">Blog</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="scroll" href="#buy">Buy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="scroll" href="#download">Download</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="scroll" href="#contact">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <?php
                            if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
                                echo '<a href="dashboard/index.php">Profile</a>';
                            } else{
                                echo '<a href="login/index.php">Login</a>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>
    <!--Slider area-->
    <section>
        <div class="container">
            <div class="slider">
                <div class="information" style="width: 50%;">
                    <h1>
                        InstaHelper
                    </h1>
                    <h3>
                        Your helper in the Instragram world!
                    </h3>
                    <p style="margin-bottom: 10px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium illum reprehenderit tempore
                        blanditiis quo laborum aliquam, ducimus repellat harum, eum dolores sequi expedita voluptatibus
                        corrupti
                        provident accusamus ullam dignissimos. Saepe?
                    </p>
                    <button
                            style="border : 1px solid white;border-radius: 5px;height: 50px; width: 150px; color: black; background-color: white;">
                        Read more.
                    </button>
                    <div class="downicon" style="display: none;">
                        <a href="#"><img src="assets/img/download/app-store.png" alt="" style="padding-right: 5px;"></a>
                        <a href="#"><img src="assets/img/download/google-play.png" alt=""></a>
                    </div>
                </div>
                <div class="img">
                    <img src="assets/img/welcome-mockup-2.png" alt="Image">
                </div>
            </div>
        </div>
    </section>
</div>
<!--Service area-->
<div class="service-area" style="margin-bottom : 50px;">
    <div class="container">
        <div class="rows">
            <div class="block">
                <img src="assets/img/service/service-img.png" alt="" style="margin-bottom: 10px; width: 200px;">
                <h3>Incredible features</h3>
                <p>Lorem ipsum dolor</p>
            </div>
            <div class="block">
                <img src="assets/img/service/service-img2.png" alt="" style="margin-bottom: 10px;width: 200px;">
                <h3>Great Ecosystem</h3>
                <p>Lorem ipsum dolor</p>
            </div>
            <div class="block">
                <img src="assets/img/service/service-img3.png" alt="" style="margin-bottom: 10px;width: 200px">
                <h3>Best price</h3>
                <p>Lorem ipsum dolor</p>
            </div>
        </div>
    </div>
</div>
<!--Features area-->
<div class="features" id="features">
    <div class="container">
        <div class="text" style="margin-bottom: 15px;">
            <div class="head-text">
                <h2 style="text-align: center;">Why InstaHelper is the best?</h2>
                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum
                    obcaecati
                    dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit. </p>
            </div>
        </div>
        <div class="infograph">
            <div class="img">
                <img src="assets/img/mobile-slider.png" alt="">
            </div>
            <div class="table">
                <ul>
                    <li class="featured">
                        <div class="ficon">
                            <img src="assets/img/featured-img/code.png" alt="" width="66px">
                        </div>
                        <div class="ftext">
                            <h4>Single features</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Veritatis culpa expedita
                                dignissimos.</p>
                        </div>
                    </li>
                    <li class="featured">
                        <div class="ficon">
                            <img src="assets/img/featured-img/layers.png" alt="" width="66px">
                        </div>
                        <div class="ftext">
                            <h4>Great Ecosystem</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Veritatis culpa expedita
                                dignissimos.</p>
                        </div>
                    </li>
                    <li class="featured">
                        <div class="ficon">
                            <img src="assets/img/featured-img/lock.png" alt="" width="66px">
                        </div>
                        <div class="ftext">
                            <h4>3D Security</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Veritatis culpa expedita
                                dignissimos.</p>
                        </div>
                    </li>
                    <li class="featured">
                        <div class="ficon">
                            <img src="assets/img/featured-img/support.png" alt="" width="66px">
                        </div>
                        <div class="ftext">
                            <h4>24/7 Support</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Veritatis culpa expedita
                                dignissimos.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--FAQ area-->
<div class="faq" id="faq">
    <div class="container">
        <h2 style="text-align: center;">FAQ</h2>
        <div class="faq-text">
            <div class="ansque">
                <div class="accordion" id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    What is the return policy?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf
                                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea
                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                    What are the shipping options?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf
                                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea
                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    What are the international taxes, duties, etc. that I have to pay?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf
                                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea
                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                VHS.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                When will I receive my order?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf
                            moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                            eiusmod.
                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda
                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea
                            proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                            raw denim
                            aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                            VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                What do I do if I never received my order?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf
                            moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                            eiusmod.
                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda
                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea
                            proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                            raw denim
                            aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                            VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Buying area-->
<div class="buy" id="buy">
    <div class="container">
        <h2 style="text-align: center;padding-top: 2rem;">Get InstaHelper Now!</h2>
        <div class="blocks">
            <div class="block-buy">
                <img src="assets/img/pricing/basic.png" alt="" style="margin-top: 1rem;">
                <h3 style="padding-bottom: 1rem;padding-top: 1rem;">BASIC</h3>
                <h1 style="padding-bottom: 1rem;"><small>$</small>19</h1>
                <ul>
                    <li>Subscriber comparison</li>
                    <li>1 accounts available to link</li>
                    <li>24/7 Tech Support</li>
                    <li>Daily Backups</li>
                </ul>
                <?php
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
                    echo '<a href="dashboard.php">';
                } else{
                    echo '<a href="login/index.php">';
                }
                ?>
                <button>
                    <h5 style="color: #ffffff;">Buy</h5>
                </button> </a>
            </div>
            <div class="block-buy">
                <img src="assets/img/pricing/basic.png" alt="" style="margin-top: 1rem;">
                <h3 style="padding-bottom: 1rem;padding-top: 1rem;">PRO</h3>
                <h1 style="padding-bottom: 1rem;"><small>$</small>29</h1>
                <ul>
                    <li>Basic</li>
                    <li>3 accounts available to link</li>
                    <li>Unlimited threads</li>
                    <li>Data encryption</li>
                </ul>
                <?php
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
                    echo '<a href="dashboard.php">';
                } else{
                    echo '<a href="login/index.php">';
                }
                ?>
                <button>
                    <h5 style="color: white;">Buy</h5>
                </button>
            </div>
        </div>
    </div>
</div>
<!--Download area-->
<div class="download" id="download" style="text-align: center;padding-top: 70px; padding-bottom: 70px;">
    <div class="container">
        <div class="download-head">
            <div class="down-text">
                <h2 style="color: white;">Download InstaHelper</h2>
                <p style="color: white;">InstaHelper is available for all devices, consectetur adipisicing elit. Itaque
                    at
                    harum quam explicabo. Aliquam optio, delectus, dolorem quod neque eos totam. Delectus quae animi
                    tenetur
                    voluptates doloribus commodi dicta modi aliquid deserunt, quis maiores nesciunt autem, aperiam
                    natus.</p>
            </div>
            <div class="down-img">
                <a href="#"><img src="assets/img/download/app-store.png" alt=""></a>
                <a href="#"><img src="assets/img/download/google-play.png" alt=""></a>
            </div>
            <span
                    style="color:white;display : inline-block; font-weight : 300;font-style: italic!important; margin-top: 1rem!important;">*
          Available on iPhone, iPad and all Android devices</span>
        </div>
    </div>
</div>
<!--Contact area-->
<div class="contact" id="contact" style="padding-top: 1rem;">
    <div class="container">
        <h2 style="text-align: center;">Contact us</h2>
        <div class="contflex">
            <div class="cont-items">
                <ul style="padding : 0px;">
                    <li>
                        <i class="fab fa-telegram-plane"></i>
                        <span>Telegram : @galammshar</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope-open-text"></i>
                        <span>Email : galamshar@ihelper.com</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>Phone : +77055028220</span>
                    </li>
                </ul>
                <!--Social icons-->
                <div class="social-icons d-flex">
                    <a class="facebook" href="#">
                        <svg class="svg-inline--fa fa-facebook-f fa-w-10" aria-hidden="true" focusable="false"
                             data-prefix="fab"
                             data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                             data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                            </path>
                        </svg><!-- <i class="fab fa-facebook-f"></i> -->
                        <svg class="svg-inline--fa fa-facebook-f fa-w-10" aria-hidden="true" focusable="false"
                             data-prefix="fab"
                             data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                             data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                            </path>
                        </svg><!-- <i class="fab fa-facebook-f"></i> -->
                    </a>
                    <a class="twitter" href="#">
                        <svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" focusable="false"
                             data-prefix="fab"
                             data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                             data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                            </path>
                        </svg><!-- <i class="fab fa-twitter"></i> -->
                        <svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" focusable="false"
                             data-prefix="fab"
                             data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                             data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                            </path>
                        </svg><!-- <i class="fab fa-twitter"></i> -->
                    </a>
                    <a class="google-plus" href="#">
                        <svg class="svg-inline--fa fa-google-plus-g fa-w-20" aria-hidden="true" focusable="false"
                             data-prefix="fab" data-icon="google-plus-g" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 640 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z">
                            </path>
                        </svg><!-- <i class="fab fa-google-plus-g"></i> -->
                        <svg class="svg-inline--fa fa-google-plus-g fa-w-20" aria-hidden="true" focusable="false"
                             data-prefix="fab" data-icon="google-plus-g" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 640 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z">
                            </path>
                        </svg><!-- <i class="fab fa-google-plus-g"></i> -->
                    </a>
                    <a class="vine" href="#">
                        <svg class="svg-inline--fa fa-vine fa-w-12" aria-hidden="true" focusable="false"
                             data-prefix="fab"
                             data-icon="vine" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                             data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M384 254.7v52.1c-18.4 4.2-36.9 6.1-52.1 6.1-36.9 77.4-103 143.8-125.1 156.2-14 7.9-27.1 8.4-42.7-.8C137 452 34.2 367.7 0 102.7h74.5C93.2 261.8 139 343.4 189.3 404.5c27.9-27.9 54.8-65.1 75.6-106.9-49.8-25.3-80.1-80.9-80.1-145.6 0-65.6 37.7-115.1 102.2-115.1 114.9 0 106.2 127.9 81.6 181.5 0 0-46.4 9.2-63.5-20.5 3.4-11.3 8.2-30.8 8.2-48.5 0-31.3-11.3-46.6-28.4-46.6-18.2 0-30.8 17.1-30.8 50 .1 79.2 59.4 118.7 129.9 101.9z">
                            </path>
                        </svg><!-- <i class="fab fa-vine"></i> -->
                        <svg class="svg-inline--fa fa-vine fa-w-12" aria-hidden="true" focusable="false"
                             data-prefix="fab"
                             data-icon="vine" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                             data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M384 254.7v52.1c-18.4 4.2-36.9 6.1-52.1 6.1-36.9 77.4-103 143.8-125.1 156.2-14 7.9-27.1 8.4-42.7-.8C137 452 34.2 367.7 0 102.7h74.5C93.2 261.8 139 343.4 189.3 404.5c27.9-27.9 54.8-65.1 75.6-106.9-49.8-25.3-80.1-80.9-80.1-145.6 0-65.6 37.7-115.1 102.2-115.1 114.9 0 106.2 127.9 81.6 181.5 0 0-46.4 9.2-63.5-20.5 3.4-11.3 8.2-30.8 8.2-48.5 0-31.3-11.3-46.6-28.4-46.6-18.2 0-30.8 17.1-30.8 50 .1 79.2 59.4 118.7 129.9 101.9z">
                            </path>
                        </svg><!-- <i class="fab fa-vine"></i> -->
                    </a>
                </div>
            </div>
            <div class="cont-items">
                <form action="#" method="post">
                    <input type="text" name="name" placeholder="Enter Your Name">
                    <input type="email" name="email" placeholder="Enter Your Email">
                    <textarea name="msg" id="msg" placeholder="Your Message "></textarea>
                    <input type="submit" value="Send" id="send" name="send">
                    <?php
                    if (isset($_POST['send'])) {
                        $NAME = $_POST['name'];
                        $EMAIL = $_POST['email'];
                        $TEXT = $_POST['msg'];
                        sendFeedback($NAME,$EMAIL,$TEXT);
                    }
                    ?>
                </form>
            </div>
        </div>

    </div>
</div>
<!--Footer area-->
<div class="container">
    <div class="footer">
        <div class="left">
            <p style="padding: 1rem;font-weight: 500;">© Copyrights 2020 InstaHelper All rights reserved.</p>
        </div>
        <div class="right">
            <a href="#"><img src="assets/img/logo.png" style="padding: 1rem;" alt="" width="150px"></a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/home/script.js"></script>

</body>

</html>