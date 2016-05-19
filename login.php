<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MAM Accounting Services</title>

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
    require_once('header.php');
    ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
                Login / SignUp
                  
                </h2>
                <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    Login / SignUp</li>
                </ol>

            </div>

        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="col-lg-6">
                 <div class="form-group">
              <label for="usr">Name:</label>
              <input type="text" class="form-control" id="usr">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd">
            </div>
            <button type="button" class="btn btn-primary btn-block">LOGIN</button>
                </div>
            </div>

        </div>
        <hr>
        <div class="col-sm-8 ">
                       <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>E-mail</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                          <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone No.</label>
                                <input type="text" class="form-control" placeholder="+44" id="email" required data-validation-required-message="Please enter your Phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                       
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Address</label>
                                <textarea rows="5" class="form-control" placeholder="Address" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-4 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary btn-lg send" >SignUp</button>
                            </div>
                        </div>
                    </form>
            
        </div>
        <hr>

        

    </div>
    <div class="col-lg-12">
         <?php
        require_once('footer.php');
        ?>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
