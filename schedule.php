<!doctype html>
<html lang="en" class="pink-theme">


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:01:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Maxartkiller">

    <title></title>

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="vendor/materializeicon/material-icons.css">

    <!-- Roboto fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Chosen multiselect CSS -->
    <link href="vendor/chosen_v1.8.7/chosen.min.css" rel="stylesheet">

    <!-- nouislider CSS -->
    <link href="vendor/nouislider/nouislider.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include('inc/header.php'); ?>
        <div class="container">
            <div class="text-center">
                <div class="figure-profile shadow my-4">
                    <figure><img src="doc/d1.jpg" alt=""></figure>
                </div>
                <h3 class="mb-1 ">Dr.M.P.Agarwal</h3>
                <p class="text-secondary">General Physician</p>
            </div>
            <br>
            

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link text-left active" id="nav-delivery-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-delivery" aria-selected="true">
                        <div class="row">
                            <div class="col-auto align-self-center pr-1">
                                <span class="btn btn-success button-rounded-26">
                                    <i class="material-icons md-18 text-mute">card_giftcard</i>
                                </span>
                            </div>
                            <div class="col pl-2">
                                <p class="text-secondary mb-0 small text-truncate"><?php echo date("d-M"); ?></p>
                                
                            </div>
                        </div>
                    </a>
                    <a class="nav-item nav-link text-left" id="nav-booking-tab" data-toggle="tab" href="#nav-booking" role="tab" aria-controls="nav-booking" aria-selected="false">
                        <div class="row">
                            <div class="col-auto align-self-center pr-1">
                                <span class="btn btn-warning button-rounded-26">
                                    <i class="material-icons md-18 text-mute">payment</i>
                                </span>
                            </div>
                            <div class="col pl-2">
                                <p class="text-secondary mb-0 small text-truncate"><?php echo date("d-M", time()+86400); ?></p>
                               
                            </div>
                        </div>
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-delivery" role="tabpanel" aria-labelledby="nav-delivery-tab">
                    <ul class="list-items">
                        <li>
                            <div class="row">
                                <div class="col">10.30-10.45 AM</div>
                                <div class="col-auto"><a href="book.php">Join</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col"><strike>10.45-11.00 AM</strike></div>
                                <div class="col-auto"><strike><a href="#" >Join</strike></a></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col"><strike>11.00-11.15 AM</strike></div>
                                <div class="col-auto"><strike><a href="#">Join</a></strike></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col">11.15-11.30 AM</div>
                                <div class="col-auto"><a href="#">Join</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="nav-booking" role="tabpanel" aria-labelledby="nav-booking-tab">
                    <ul class="list-items">
                        <li>
                            <div class="row">
                                <div class="col"><strike>4.00-4.15 PM</strike></div>
                                <div class="col-auto"><strike><a href="#">Join</a></strike></div>
                            </div>
                        </li>
                        <li>
                             <div class="row">
                                <div class="col">4.15-4.30 PM</div>
                                <div class="col-auto"><a href="#">Join</a></div>
                            </div>
                        </li>
                        <li>
                             <div class="row">
                                <div class="col">4.30-4.45 PM</div>
                                <div class="col-auto"><a href="#">Join</a></div>
                            </div>
                        </li>
                        <li>
                             <div class="row">
                                <div class="col">4.45-5.00 PM</div>
                                <div class="col-auto"><a href="#">Join</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

           
        <?php include('inc/footer.php'); ?>
    <!-- jquery, popper and bootstrap js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

    <!-- swiper js -->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- nouislider js -->
    <script src="vendor/nouislider/nouislider.min.js"></script>

    <!-- chart js -->
    <script src="vendor/chartjs/Chart.min.js"></script>
    <script src="vendor/chartjs/utils.js"></script>

    <!-- chosen multiselect js -->
    <script src="vendor/chosen_v1.8.7/chosen.jquery.min.js"></script>

    <!-- template custom js -->
    <script src="js/main.js"></script>

    <!-- page level script -->
    <script>
        $(window).on('load', function() {
        });

    </script>

</body>


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:01:53 GMT -->
</html>
