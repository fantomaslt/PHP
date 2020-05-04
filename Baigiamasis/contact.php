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
                                <a class="dropdown-item" href="menu-hokahs.php">Our Hookahs</a>
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
                        <span class="karma-title">How to find</span>
                        Our contacts
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================================================================================-->

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-4 pad">
                    <div class="contact_info">
                        <h2>
                            <p class="title-contacts">Working Hours</p>
                        </h2>
                        <div>
                            <h6 class="contact-h6">Weekdays</h6>
                            From 10:00 to 23:00
                        </div>
                        <div>
                            <h6 class="contact-h6">Weekend</h6>
                            From 10:00 to 23:00
                            <br>
                            or to the last client
                        </div>
                    </div>
                </div><!-- =================== -->
                <div class="col-4">
                    <div class="contact_info">
                        <h2>
                            <p class="title-contacts">Contact Info</p>
                        </h2>
                        <div>
                            <h6 class="contact-h6">Our Phone</h6>
                            +1 (234) 555 - 67 - 89
                        </div>
                        <div>
                            <h6 class="contact-h6">Our Location</h6>
                            817 N California Ave,
                            <br>
                            Chicago, IL 60622
                        </div>
                    </div>
                </div><!-- ================ -->
                <div class="col-4">
                    <div class="contact_info">
                        <h2>
                            <p class="title-contacts">Stay in Touch</p>
                        </h2>
                        <div>
                            <h6 class="contact-h6">Social Links</h6>
                            <ul>
                                <li><a href="#"><i class="fab fa-instagram contact-icon "></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f contact-icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube contact-icon"></i></a></li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="contact-h6">Email</h6>
                            <strong>General:</strong> <a class="contact_info" href="mailto:info@karmabar.lt">info@karmabar.lt</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Kontatu rezervacijos forma -->
    <div class="container-fluid  contact">
        <div id="contact">
            <p>If you plan your leisure in advance and do not want to get into a situation when the planned dinner is
                canceled due to the lack of free seats, reserve a table in advance. You can reserve a table by filling
                out the form below.
            </p>
        </div>
        <div class="contact-form">
            <h1><span>Got Questions?</span> <br> Get in tuoch with us</h1>
            <form action="contact.php#contact1" id="contact1" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="error"><?php echo $errdate; ?></div>
                        <input class="form-inputs" type="text" id="date-input" placeholder="Select date" name="date">
                    </div>
                    <div class="col-lg-4">
                        <div class="error"><?php echo $errtime; ?></div>
                        <input class="form-inputs" type="text" id="time-input" placeholder="Choose time" name="time">
                    </div>
                    <div class="col-lg-4">
                        <div class="error"><?php echo $errguests; ?></div>
                        <select class="select-inputs form-inputs"  name="guest">
                            <option disabled selected value> -- select an option -- </option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <div class="error"><?php echo $nameErr; ?></div>
                        <input class="form-inputs" type="text" name="name" placeholder="Enter your name">
                    </div>
                    <div class="col-lg-4">
                        <div class="error"><?php echo $emailErr; ?></div>
                        <input class="form-inputs" type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="col-lg-4">
                        <div class="error"><?php echo $errphone; ?></div>
                        <input class="form-inputs" type="text" name="phone" placeholder="Enter your name" value="+370">
                    </div>
                    <div class="col-lg-12">
                        <div class="error"><?php echo $message; ?></div>
                        <textarea class="form-control" id="message" placeholder=" Type your message : " name="message"></textarea>
                    </div>
                    <div class="col-lg-12 ">
                        <button class="btn btn-front2  btn-block btn-full" type="submit">Send your message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="iconbox_block">
            <h2>
                <span class="up_title">Why We</span>
                Our Benefits
            </h2>
            <div>
                <div class="row">
                    <div class="col-md-4">
                        <div >
                            <i class="fas fa-utensils icon-contact"></i>
                            <h4>Freshly Cooked</h4>
                            <p class="iconbox">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus fuga </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div >
                            <i class="fas fa-users icon-contact"></i>
                            <h4>Professional Team</h4>
                            <p class="iconbox">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus fuga</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <i class="fa fa-truck icon-contact"></i>
                            <h4>Quick Delivery</h4>
                            <p class="iconbox">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus fuga</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div >
                            <i class="fas fa-cocktail icon-contact"></i>
                            <h4>Wide range drinks</h4>
                            <p class="iconbox">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus fuga</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <i class="fas fa-clock icon-contact"></i>
                            <h4>Save your time</h4>
                            <p class="iconbox">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus fuga</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div >
                            <i class="fa fa-music icon-contact"></i>
                            <h4>Live Music</h4>
                            <p class="iconbox">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus fuga</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 id="find">
            <p>You can find us: </p>
        </h2>
    </div>
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2061.4413493069806!2d21.13535380635644!3d55.706063539508406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc696f166b54c0207!2sKarma%20bar%20Klaipeda!5e0!3m2!1slt!2slt!4v1588089584564!5m2!1slt!2slt"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
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