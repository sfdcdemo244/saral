<!doctype html>
<html lang="en" class="pink-theme">


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/all-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:02:44 GMT -->
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Swiper CSS -->
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Chosen multiselect CSS -->
    <link href="vendor/chosen_v1.8.7/chosen.min.css" rel="stylesheet">

    <!-- nouislider CSS -->
    <link href="vendor/nouislider/nouislider.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        
.circ{
    height: 80px;
    width: 80px;
    background: grey;
    border-radius: 50px;
    color: white;
    font-weight: bold;
    padding-top: 10px;
}


    </style>
</head>

<body>
   
    <?php include('inc/header.php'); ?>
       


        <div class="container">
           




            <div class="subtitle h6">
                <div class="d-inline-block">
                    Appointment Detail<br>
                    
                </div>
                
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 col-md-2 col-lg-2 align-self-center">
                                    <figure class="product-image"><div class="circ">Token<br>55</div></figure>
                                </div>
                                <div class="col">
                                    
                                    <a href="doctor.php" class="text-dark mb-1 h6 d-block" style="margin-top: 20px;">Dr.M.P.Agarwal</a>
                                    <p class="text-secondary small mb-2"> 2-Dec, 12.30 AM</p>
                                    <h5 class="text-success font-weight-normal mb-0"> </sup>
                                        
                                    </h5>

                                    <p class="text-secondary small text-mute mb-0">Thanks For Visiting</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
               <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col align-self-center">
                                   
                                    <div class="text-dark mb-1 h6 d-block"><img src="doc/d1.jpg" style="height: 50px; width: 50px; border-radius: 50px;">
                                        <a href="doctor.php" class="text-dark mb-1 h6 d-block" style="margin-top: 20px;">Dr.M.P.Agarwal</a><div class="float-right"><img src="img/confirm.png" style="height: 80px; width: 80px; border-radius: 50px;"></div>
                                    <p class="text-secondary small mb-2">Physician</p>
                                    <h5 class="text-success font-weight-normal mb-0"> </sup>
                                        
                                    </h5>

                                    <p class="text-secondary small text-mute mb-0">Arihant Hospital</p>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
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
            var swiper = new Swiper('.small-slide', {
                slidesPerView: 'auto',
                spaceBetween: 0,
            });

            var swiper = new Swiper('.news-slide', {
                slidesPerView: 5,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination',
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    }
                }
            });

            /* range picker for filter */
            var html5Slider = document.getElementById('rangeslider');
            noUiSlider.create(html5Slider, {
                start: [0, 100],
                connect: true,
                range: {
                    'min': 0,
                    'max': 500
                }
            });

            var inputNumber = document.getElementById('input-number');
            var select = document.getElementById('input-select');

            html5Slider.noUiSlider.on('update', function(values, handle) {
                var value = values[handle];

                if (handle) {
                    inputNumber.value = value;
                } else {
                    select.value = Math.round(value);
                }
            });
            select.addEventListener('change', function() {
                html5Slider.noUiSlider.set([this.value, null]);
            });
            inputNumber.addEventListener('change', function() {
                html5Slider.noUiSlider.set([null, this.value]);
            });

            /* chosen select*/
            $(".chosen").chosen()
        });

    </script>
    <script type="text/javascript">
    function doc(){
        window.location.assign("doctor.php");
    }
</script>
</body>


<!-- Mirrored from maxartkiller.com/website/GoMobileUX/gofruit/all-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2019 03:02:44 GMT -->
</html>
