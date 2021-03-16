<!doctype html>
<html lang="en" class="pink-theme">


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/profile-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:02:44 GMT -->
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
    <div class="wrapper">
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <a href="home.php" onClick="javascript:history.go(-1)" class="btn  btn-link text-dark"><i class="material-icons">navigate_before</i></a>
                </div>
                <div class="col text-center"><img src="img/logo1.png" alt="" class="header-logo"></div>
                <div class="col-auto">
                    <a href="profile.php" class="btn  btn-link text-dark"><i class="material-icons">account_circle</i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-center">
                <div class="figure-profile shadow my-4">
                    <figure><img src="img/user1.png" alt=""></figure>
                    <div class="btn btn-dark text-white floating-btn">
                        <i class="material-icons">camera_alt</i>
                        <input type="file" class="float-file">
                    </div>
                </div>
            </div>

            <h6 class="subtitle">Basic Information</h6>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="text" class="form-control" required="" value="Ammy Johnson">
                        <label class="form-control-label">Name</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="email" class="form-control" required="" value="ammy@hotmail.com">
                        <label class="form-control-label">Email address</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="tel" class="form-control" required="" value="6355542523">
                        <label class="form-control-label">Phone Number</label>
                    </div>
                </div>
            </div>

            


            <a href="profile-edit.html" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Submit</span><i class="material-icons">arrow_forward</i></a>
            <br>
        </div>

           <?php include('inc/footer.php');?>

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
        $(window).on('load', function() {});

    </script>

</body>


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/profile-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:02:44 GMT -->
</html>
