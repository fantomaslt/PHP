<?php
require 'php.php';
require_once 'sessions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Title</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes%7COpen+Sans:400,700%7CRoboto%7CRoboto+Condensed:400,700&amp;display=swap"
          rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <!--    flatpicker-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>


</head>
<body>
<div class="container-fluid">
    <!--    blokas su info issijungia ant telefonu-->
    <div class="karma-header">
        <div class="d-none d-md-block d-lg-blockupper ">
            <div class="row ">
                <div class="col-sm-10">
                    <ul class="nav upItems">
                        <li class="nav-item">
                            <a class=" fas fa-map-marker-alt "> Tiltu g. 26A, Klaipeda 91246 Lithuania</a>
                        </li>
                        <li class="nav-item">
                            <a class="fas fa-mobile-alt "> +370 614 12114</a>
                        </li>
                        <li class="nav-item">
                            <a class="far fa-clock "> 18:00 pm - 03:00 am</a>
                        </li>
                    </ul>
                </div>
                <div class=" col-sm-2  ">
                    <ul class="nav">
                        <li class="nav-item">
                            <i class="fab fa-instagram icon"></i>
                        </li>
                        <li class="nav-item">
                            <i class="fab fa-facebook-f icon"></i>
                        </li>
                        <li class="nav-item">
                            <i class="fab fa-youtube icon"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="hr">
        <!--    Nav baras -->
        <div>
            <nav class="navbar navbar-expand-lg  navbar-dark  ">
                <img src="img/karma_Logo_Big2.png" width="244" height="100" alt="" style="margin-left: 10%">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="btn-nav " href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn-nav " href="#">About us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="btn-nav" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Menu
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Menu-food.php">Our Menu</a>
                                <a class="dropdown-item" href="menu-hokahs.php">Our Hookas</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="btn-nav " href="events.php">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn-nav-contact " href="contact.php">Contact us</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <hr class="hr">
        </div>
        <!--    Pirmas blokas intro meniu -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 karma-info">
                    <h1>
                        <span class="karma-title">Take Your time</span>
                        Our very best meal for you
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!--    ============================================== Events =====================================-->

    <div class="container">
        <div class="card-deck">
            <div class="card card-event card-event-position">
                <img class="card-img-top" src="img/Brusketos.jpg" alt="Card image cap">
                <div class="events-card-info">
                    <div class="event-content">
                        <h4>
                            <span class="">Fresh Summer Cocktails</span>
                        </h4>
                        <ul class="_post_meta">
                            <li>22 May, 2019</li>
                            <li>Party</li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="btn btn-event">Book A Table</button>
            </div>
            <div class="card card-event card-event-position">
                <img class="card-img-top" src="img/Brusketos.jpg" alt="Card image cap">
                <div class="events-card-info">
                    <div class="event-content">
                        <h4>
                            <span class="">Fresh Summer Cocktails</span>
                        </h4>
                        <ul class="_post_meta">
                            <li>22 May, 2019</li>
                            <li>Party</li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="btn btn-event">Book A Table</button>
            </div>
            <div class="card card-event card-event-position">
                <img class="card-img-top" src="img/Brusketos.jpg" alt="Card image cap">
                <div class="events-card-info">
                    <div class="event-content">
                        <h4>
                            <span class="">Fresh Summer Cocktails</span>
                        </h4>
                        <ul class="_post_meta">
                            <li>22 May, 2019</li>
                            <li>Party</li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="btn btn-event">Book A Table</button>
            </div>
        </div>
    </div>


    <!--    ======================  footer ====================-->
    <div class="container-fluid  footer">
        <a href="#" class="back_to_top"><i class="fa fa-chevron-up"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <h1>
                        <span class="title"> About Us</span>
                    </h1>
                    <div>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque commodi consequatur
                            dolore doloremque ducimus facilis fugit, magni maxime modi molestiae numquam perferendis
                            placeat provident quis reprehenderit sit vel veritatis!</p>
                    </div>
                </div>
                <div class="col-md-4 footer-col"><h1>
                        <span> Stay in Touch</span>
                    </h1>
                    <div>
                        <form class="intouch_form" name="intouch">
                            <input class="input-BTN-1" type="email" placeholder=" Enter Your Email">
                            <input class="input-BTN-2" type="submit" value="Subscribe" id="subscribe">
                        </form>
                    </div>
                    <div>
                        <ul class="order-list ">
                            <li><a href="#"><i class="fab fa-instagram icon-footer"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook icon-footer"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube icon-footer"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 footer-col"><h1>
                        <span class="title"> Contacts</span>
                    </h1>
                    <div>
                        <p>Address</p>
                        <p>Working Hours</p>
                        <p>Phone</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    Info isnyksta ant telefono  -->
    <div class="d-none d-md-block">
        <div class="row">
            <div class="col-sm-2 copyright">
                <div >
                    © 2020 karma Bar. All Rights Reserved.
                </div>
            </div>
            <div class="col-sm-10 footer_links_list copyright>">
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Payment Methods</a></li>
                    <li><a href="#">Delivery Information</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>