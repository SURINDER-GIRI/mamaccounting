<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
    include('header.php');
?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active prop" >
            <div class="fill" style="background-image:url('img/reader.png');"></div>
               
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/account.png');"></div>
               
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/vat.png');"></div>
                
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome To MAM Accounting Services 
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Book Keeping</h4>
                    </div>
                    <div class="panel-body">
                        <p>The preparation of your annual accounts and other business reports depends on accurate and timely bookkeeping.we can visit your premises to process your work or if it is preferable simply send your paperwork to us and we will process it and return it to you within an agreed timeframe.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-usd" aria-hidden="true"></i>Account Management</h4>
                    </div>
                    <div class="panel-body">
                        <p>The preparation of management accounts are necessary to assist in making business decisions and will be requested <body></body> your accountants, auditors, bankers, Inland Revenue and other third parties. We can prepare management reports on a monthly or quarterly basis</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Vat/PayRoll</h4>
                    </div>
                    <div class="panel-body">
                        <p>Many businesses are required to register for VAT and lodge regular returns and We can assist with all payroll matters including Employer PAYE registration,running of weekly or monthly payroll including tax and national insurancecalculations and production of payslips together with all year end filingrequirements.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>  
            </div>
        </div>
        <!-- /.row -->

        
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">mamacounting Features</h2>
            </div>
            <div class="col-md-6">
                <p>What can we do for you?</p>
                <ul>
                    <li>Support your business with the provision of professional and cost effective management and bookkeeping services;
                    </li>
                    <li>Relieve you of bookkeeping and accounting functions to allow you to concentrate on your core business;</li>
                    <li>Save you money by reducing accounting fees</li>
                </ul>
                <p>mamacounting offer accountancy services including payroll services, VAT returns and account management services aimed to help relieve you of these demands by providing professional and efficient services at competitive rates whilst at the same time helping you to avoid paying the high costs involved when engaging accountancy firms.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/point.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        
        <!-- Footer -->
     <?php
        require_once('footer.php');
        ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
