<?php
//$cdnpath = 'http://130.211.16.112/';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Doubble Description goes here">
        <meta name="author" content="Sterling Bank Plc">
        <meta name="keywords" content="sterling bank, doubble">
        <meta name="application-name" content="Doubble">

        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="msapplication-TileColor" content="#f86464">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#1d5ad0">
        <link rel="manifest" href="assets/manifest.json">

        <title>Doubble</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo $cdnpath; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/vendor/simple-line-icons/css/simple-line-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="assets/device-mockups/device-mockups.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/perfect-scrollbar.css">


        <!-- Custom styles for this template -->
        <link href="assets/css/doubble.min.css" rel="stylesheet">
        <!--<link href="assets/css/custom.css" rel="stylesheet">-->
        <!--<link rel="stylesheet" type="text/css" href="assets/css/util.css">-->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <style>
            .valamt 
            {
                text-align: center;
                border-radius: 5px;
                color: #fff;
                background: #800505;
                padding: 10px;
                margin: 0 auto;
            }

            .valamt input 
            {
                padding: 5px 21px;
                font-size: 21px;
                margin: 15px auto;
                border-radius: 2px;
            }
        </style>

    </head>

    <body id="page-top">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo_xs.png" alt="Doubble"/></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#how">How it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#apply">Get Started</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="header">
            <div class="header-content">
                <div class="container">
                    <h1 class="section-heading" style="font-size: 25px">STERLING DOUBBLE</h1>
                    <h2><span class="blue">Stop waiting.</span><br><span class="black">Start Saving.</span></h2>
                    <p class="col-lg-5">Open a Sterling Doubble Account and make your money multiply up to 200%. Ready?</p>
                    <a href="#how" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
                </div>
            </div>
            <div class="overlay"></div>
        </section>

        <section class="download bg-primary text-center" id="how">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h2 class="section-heading" style="color: #fff;">HOW IT WORKS!</h2>
                        <p style="color: #fff;">Watch your money grow and secure that future cashflow. You can get back up to 200% of your investment when you subscribe to Doubble by Sterling. With the flexible options available, all you do is relax and let us do the magic.</p>
                        <a href="#calculate" class="btn btn-calc btn-xl js-scroll-trigger">Try the Doubble Calculator</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="features bg-feat" id="calculate">
            <div class="container">
                <div class="section-heading text-center">
                    <h2>Calculate your Savings</h2>
                    <p class="text-muted">Check out what you can earn monthly on Doubble!</p>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-4 my-auto valamt">
                        <div>
                            Enter your Monthly<br> Savings Amount:<input aria-label="Enter Savings Amount" class="number" name="savingsamt" type="text" id="valueAmt"/>
                        </div>
                    </div>

                    <div class="container-table100">
                        <div class="wrap-table100">
                            <div class="table100 ver1 m-b-110">
                                <div class="table-responsive">
                                <table data-vertable="ver1" class="table">
                                    <thead>
                                        <tr class="row100 head">
                                            <th class="column100 column1" data-column="column1" style="background:#1d5ad0">Category</th>
                                            <th class="column100 column2" data-column="column2">Savings Period</th>
                                            <th class="column100 column3" data-column="column3">Total Savings</th>
                                            <th class="column100 column4" data-column="column4">Pay-Out Period</th>
                                            <th class="column100 column5" data-column="column5">Pay-Out Amount</th>
                                            <th class="column100 column6" data-column="column6" style="background:#f86363">Pay-Out Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="row100">
                                            <td class="column100 column1" data-column="column1" style="background:#d2d2d2; color: #000;">Doubble 3</td>
                                            <td class="column100 column2" data-column="column2">36 Months</td>
                                            <td class="column100 column3" data-column="column3"><span id="tc3"></span></td>
                                            <td class="column100 column4" data-column="column4">36 Months</td>
                                            <td class="column100 column5" data-column="column5"><span id="pa3"></span> monthly</td>
                                            <td class="column100 column6" data-column="column6"><span id="tp3"></span></td>
                                        </tr>

                                        <tr class="row100">
                                            <td class="column100 column1" data-column="column1" style="background:#d2d2d2; color: #000;">Doubble 5</td>
                                            <td class="column100 column2" data-column="column2">60 Months</td>
                                            <td class="column100 column3" data-column="column3"><span id="tc5"></span></td>
                                            <td class="column100 column4" data-column="column4">60 Months</td>
                                            <td class="column100 column5" data-column="column5"><span id="pa5"></span> monthly</td>
                                            <td class="column100 column6" data-column="column6"><span id="tp5"></span></td>
                                        </tr>

                                        <tr class="row100">
                                            <td class="column100 column1" data-column="column1" style="background:#d2d2d2; color: #000;">Doubble 10</td>
                                            <td class="column100 column2" data-column="column2">60 Months</td>
                                            <td class="column100 column3" data-column="column3"><span id="tc10"></span></td>
                                            <td class="column100 column4" data-column="column4">120 Months</td>
                                            <td class="column100 column5" data-column="column5"><span id="pa10"></span> monthly</td>
                                            <td class="column100 column6" data-column="column6"><span id="tp10"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


<!--        <section class="features" id="features">
            <div class="container">
                <div class="section-heading text-center">
                    <h2>Unlimited Features, Unlimited Fun</h2>
                    <p class="text-muted">Check out what you can do with this app theme!</p>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-4 my-auto">
                        <div class="device-container">
                            <div class="device-mockup iphone6_plus portrait white">
                                <div class="device">
                                    <div class="screen">
                                         Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! 
                                        <img src="assets/img/demo-screen-1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="button">
                                         You can hook the "home button" to some JavaScript events or just remove it 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 my-auto">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="icon-screen-smartphone text-primary"></i>
                                        <h3>Device Mockups</h3>
                                        <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="icon-camera text-primary"></i>
                                        <h3>Flexible Use</h3>
                                        <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="icon-present text-primary"></i>
                                        <h3>Free to Use</h3>
                                        <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="icon-lock-open text-primary"></i>
                                        <h3>Open Source</h3>
                                        <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <section class="cta" id="apply">
            <div class="cta-content">
                <div class="container">
                    <h2>Stop waiting.<br>Start building.</h2>
                    <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Apply Now!</a>
                </div>
            </div>
            <div class="overlay"></div>
        </section>

        <section class="contact bg-primary" id="faq">
            <div class="container">
                <h2>Read <i class="fa fa-book"></i> our FAQ!</h2>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>&copy; <?php echo date("Y"); ?> Sterling Bank Plc. All Rights Reserved.</p>
                <ul class="list-inline">
<!--                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">FAQ</a></li>-->
                </ul>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="assets/js/doubble.min.js"></script>

        <script src="assets/js/select2.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
            function addCommas(nStr)
            {
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }

            $("#valueAmt").keyup(function () {

                var valin = $('#valueAmt').val().substring(0, 40);
                var valin = parseFloat(valin.replace(/,/g, ''));

                //var pid3 = 36;
                //var pid5 = 60;
                //var pid10 = 60;

                var pod3 = 36;
                var pod5 = 60;
                var pod10 = 120;

                var perd3 = 1.25;
                var perd5 = 1.5;
                var perd10 = 1;

                var tc3 = valin * 36;
                var tc5 = valin * 60;
                var tc10 = valin * 60;

                var pa3 = valin * perd3;
                var pa5 = valin * perd5;
                var pa10 = valin * perd10;

                var tp3 = pa3 * pod3;
                var tp5 = pa5 * pod5;
                var tp10 = pa10 * pod10;

                $("#tc3").text("N" + addCommas(tc3));
                $("#tc5").text("N" + addCommas(tc5));
                $("#tc10").text("N" + addCommas(tc10));

                $("#pa3").text("N" + addCommas(pa3));
                $("#pa5").text("N" + addCommas(pa5));
                $("#pa10").text("N" + addCommas(pa10));

                $("#tp3").text("N" + addCommas(tp3));
                $("#tp5").text("N" + addCommas(tp5));
                $("#tp10").text("N" + addCommas(tp10));

            });

            $('input.number').keyup(function (event) {

                // skip for arrow keys
                if (event.which >= 37 && event.which <= 40)
                    return;

                // format number
                $(this).val(function (index, value) {
                    return value
                            .replace(/\D/g, "")
                            .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                            ;
                });
            });
        </script>

    </body>

</html>
