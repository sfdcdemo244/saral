<!doctype html>
<html lang="en" class="pink-theme">


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:02:47 GMT -->
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

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Loader -->
    <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
            <img src="img/logo1.png" alt="logo">
            <h1><span class="font-weight-light"></span>Saral</h1>
            <div class="laoderhorizontal">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Loader ends -->


    <div class="wrapper">

        <!-- header -->
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <a href="home.php" class="btn  btn-link text-dark"><i class="material-icons">navigate_before</i></a>
                </div>
                <div class="col text-center"><img src="img/logo1.png" alt="" class="header-logo"></div>
                <div class="col-auto">
                    <a href="profile.php" class="btn  btn-link text-dark"><i class="material-icons">account_circle</i></a>
                </div>
            </div>
        </div>
        <!-- header ends -->

        <div class="container">
            <!-- page content here -->
            <div class="row ">
                <div class="col-12 mt-3">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Token 21</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <p class="mb-0 text-secondary f-sm">Appointment Details :-<?php echo date("d-M"); ?>, 11.35 AM<br>Dr. M.P.Agarwal | Arihant Hospital </p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm" onclick="live()">Go Live</button>
                        </div>
                    </div>
                </div>
                
                           <div class="col-12 mt-3">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Token 33</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <p class="mb-0 text-secondary f-sm">Appointment Details :-<?php echo date("d-M"); ?>, 1.35 PM<br>Dr.Vyas | RamSnehi  Hospital </p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm" onclick="live()">Go Live</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Token 41</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <p class="mb-0 text-secondary f-sm">Appointment Details :-<?php echo date("d-M"); ?>, 3.00 PM<br>Dr. Singh | Arihant Hospital </p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm" onclick="live()">Go Live</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Token 12</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <p class="mb-0 text-secondary f-sm">Appointment Details :-<?php echo date("d-M", time()+86400); ?>, 9.15 AM<br>Dr. M.P.Agarwal | Arihant Hospital </p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm" onclick="live()">Go Live</button>
                        </div>
                    </div>
                </div>   

                    </div>
                </div>
            </div>
            <!-- page content ends -->
        </div>

        <!-- footer -->
           <?php include('inc/footer.php');?>

    <!-- jquery, popper and bootstrap js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

    <!-- swiper js -->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- template custom js -->
    <script src="js/main.js"></script>

    <!-- page level script -->
    <script>
        $(window).on('load', function() {

        });

    </script>
     <script type="text/javascript">
    function live(){
        window.location.assign("live.php");
    }
</script>
</body>


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:02:47 GMT -->
</html>
