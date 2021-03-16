<!doctype html>
<html lang="en" class="pink-theme">


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:02:38 GMT -->
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
   <style type="text/css">
       .circ{
    height: 50px;
    width: 50px;
    background: grey;
    border-radius: 50px;
    color: white;
  padding-left: 250px;
  margin-top: -50px;
  }

#snackbar {
  visibility: hidden;
  min-width: 100px;
  margin-left: -125px;
  background-color: green;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 60%;
  
   bottom: 80px;
  font-size: 12px;
  border-radius:50px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 80px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 80px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 80px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
 
</head>

<body>
     <?php include('inc/header.php'); ?>
        <div class="container">
            <div class="subtitle h6">
                <div class="d-inline-block">
                    Confirmed<br>
                    
                </div>
            </div>

            

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="row">
                         <div class="col-4 text-center" >
                            <img src="img/confirm1.png" style="height: 100px; width: 200px; border-radius: 50px; padding-left: 100px;">
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-4">
                            <p class="text-secondary mb-1 small">Patient Name</p>
                            <h5 class="ext-secondary mb-1 small">Shruti</h5>
                        </div>
                        <div class="col-4 text-center" style="margin-left: -25px;">
                            <p class="text-secondary mb-1 small">Age,Gender</p>
                            <h5 class="mext-secondary mb-1 small">42,Male</h5>
                        </div>
                        <div class="col-4 text-right">
                            <p class="text-secondary mb-1 small">MobileNo.</p>
                            <h5 class="text-secondary mb-1 small" style="bold">8949495454</h5>
                        </div>
                        
                    </div>
                </div>

                <div class="card-body border-top-dashed">
                    <div class="row ">
                        <p class="text-secondary mb-1 small">Booking Date:- 3-Dec2019 </p>
                       
                           
                            <p class="text-secondary mb-1 small" style="padding-left: 40px;">Booking Time:- 12.30 PM </p>
                      
                            <p class="" style="padding-left: 100px; font-size: 14px; font-weight: bold;">Appointment for </p>
                            </div>
                   <p class="" style="padding-left: 5px; font-size: 12px; font-weight: bold;">Dr. M.P.Agarwal
<br>
                 <font style="font-size: 11px; color:skyblue; font-weight: bold; padding-left: 10px;" >Physician </font>
<br>
                 <font style="font-size: 12px; font-weight: bold; padding-left: 5px;" >Arihant Hospital </font>





             </p>
             
                <div style="padding-left: 240px; margin-top: -50px;"><img src="img/paid.png" style="height: 60px; width: 60px; border-radius: 50px;"></div>

                        
                    

                </div>
            </div>
            <div class="card mb-4 border-0 shadow-sm border-top-dashed">
                 <p class="" style="padding-left: 20px; font-size: 14px;margin-top: 10px; font-weight: bold;">Token 55</p>
                <p class="text-secondary mb-1 small" style="padding-left: 60px; padding-top: 5px;"><i class="fa fa-calendar"></i> Appointment Date &nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o" style="padding-left: 5px;"> Appointment Time</i>
  </p>
   <p class="text-secondary mb-1 small" style="padding-left: 70px;">10-Dec2019 <font class="text-secondary mb-1 small" style="padding-left: 70px; font-size: 12px;">12.45 PM</font> </p>

                <div class="card-body text-center">
                   



                    <a href="total-book.php" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>My Booking</span><i class="material-icons">arrow_forward</i></a>
                </div>
            </div>



        </div>
        <div id="snackbar">Payment Successfull</div>

<script>
window.onload=function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
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


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:02:38 GMT -->
</html>
