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

        <section class="download bg-primary text-center" id="how">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h2 class="section-heading" style="color: #fff;">Retirement Calculator</h2>
                        <p style="color: #fff;">Watch your money grow and secure that future cashflow. You can get back up to 200% of your investment when you subscribe to Doubble by Sterling. With the flexible options available, all you do is relax and let us do the magic.</p>
                        <!--<a href="#calculate" class="btn btn-calc btn-xl js-scroll-trigger">Try the Doubble Calculator</a>-->
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>&copy; <?php echo date("Y"); ?> Sterling Bank Plc. All Rights Reserved.</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">FAQ</a></li>
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
