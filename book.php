<!doctype html>
<html lang="en" class="pink-theme">


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:02:46 GMT -->
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

           

            
            <h6 class="subtitle">Patient Information</h6>
            <div class="form-group float-label active">
                <input type="text" class="form-control" required="" value="" placeholder="Patient Name">
                <label class="form-control-label">Patient Name</label>
            </div>
            <div class="form-group float-label active">
                <input type="text" class="form-control card-type" required="" placeholder="father/husband Name">
                <label class="form-control-label">S/O Name</label>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group float-label active">
                        <input type="tel" class="form-control" required="" >
                        <label class="form-control-label">MobileNo.</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group float-label active">
                        <div class="row">
                            <div class="col">
                                <input type="tel" class="form-control" required="" maxlength="3">
                                <label class="form-control-label">Age</label>
                            </div>
                            <div class="col">
                                <select class="form-control">
                                    <option></option>
                    <option>Male</option>
                    <option>Female</option>
                    
                </select>
                <label class="form-control-label">Gender</label>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
            <div class="form-group float-label active">
                <input type="text" class="form-control" required="" value="" placeholder="Address">
                <label class="form-control-label">City/Village</label>
            </div>

            <a href="confirm.php" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow" onclick="myFunction()"><span >Confirm</span><i class="material-icons">arrow_forward</i></a>
            <br>
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


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:02:47 GMT -->
</html>
