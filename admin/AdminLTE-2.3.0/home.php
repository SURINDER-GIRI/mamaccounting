<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


          <style type="text/css">

          #about_home_service
          {
            display: none;

          }
          #about_inst
          {
            display: none;
            background:#fff;
            padding: 40px 20px 40px 20px;
          }
          #about_update
          {
            padding: 40px 20px 40px 20px;
            display: none;
            background: #fff;
          }

          </style>



          <style type="text/css">

          #home_service
          {
            display: none;

          }
          #inst
          {
            display: none;
            background:#fff;
            padding: 40px 20px 40px 20px;
          }
          #update
          {
            padding: 40px 20px 40px 20px;
            display: none;
            background: #fff;
          }

          </style>


        <!-- REQUIRED JS SCRIPTS -->



    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">

    function display_select()
    {

     $.post("home_service/select.php",{},
      function(val){

        $("#home_service").html(val).fadeIn();
        

      });
    }

    function insert()
    {
      
       title=$("#title").val();
      des=$("#des").val();
      alert(des);
      $.post("home_service/insert.php",{
        title:title,
        des:des
      },function(data){

        $("#inst").html(data);

      });
    }
    function inst()
    {
      $("#inst").fadeIn(2000);
    }
    function updat(id)
    {
      $("#update").fadeIn(2000);
      $("#id").val(id);
    }
    function edit()
    {
     c_title=$("#c_title").val();
      c_des=$("#c_des").val();
      id=$("#id").val();
      
      $.post("home_service/update.php",{
        id:id,
        c_title:c_title,
        c_des:c_des
      },function(data){

        $("#update").html(data);

      }); 
    }
    function delet(id)
    {
      id=id;

      alert(id);
      $.post("home_service/delete.php",{
        id:id
      },function(value)
      {
      $("#inst").html(value).fadeIn(2000);
      })
    }

    </script>




    <script type="text/javascript">

    function about_display_select()
    {

     $.post("about_panel/select.php",{},
      function(val){

        $("#home_service").html(val).fadeIn();
        

      });
    }

    function about_insert()
    {
       about_title=$("#about_title").val();
      about_des=$("#about_des").val();
      $.post("about_panel/insert.php",{
        about_title:about_title,
        about_des:about_des
      },function(data){

        $("#about_inst").html(data);

      });
    }
    function about_inst()
    {
      $("#about_inst").fadeIn(2000);
    }
    function about_updat(id)
    {
      $("#about_update").fadeIn(2000);
      $("#about_id").val(id);
    }
    function about_edit()
    {
     about_c_title=$("#about_c_title").val();
      about_c_des=$("#about_c_des").val();
      about_id=$("#about_id").val();
      
      $.post("about_panel/update.php",{
        about_id:about_id,
        about_c_title:about_c_title,
        about_c_des:about_c_des
      },function(ata){

        $("#about_update").html(ata);

      }); 
    }
    function about_delet(id)
    {
      id=id;

      $.post("about_panel/delete.php",{
        id:id
      },function(value)
      {
      $("#about_inst").html(value).fadeIn(2000);
      })
    }

    </script>




    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         ffixed layout. -->


  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="#"  class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>P</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin Panel</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
         
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>MAM ACOUNTING
              <br> SERVICES</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

        
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview"><a href="#" ><i class="fa fa-link"></i> <span>SERVICES OF HOME PAGE</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>SERVICES OF HOME PAGE</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" onclick='inst()'>Insert</a></li>
                <li><a href="#"  onclick="display_select()">Update / Delete</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>ABOUT US PAGE</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" onclick='about_inst()'>Insert</a></li>
                <li><a href="#"  onclick="about_display_select()">Update / Delete</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="overflow-y:scroll;height:500px;">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <div class="col-lg-12" >

          <!-- Your Page Content Here -->

          <div class="col-lg-8" id="home_service">
            
          </div>
          <div class="col-lg-4" id="inst">
             <form >
             INSERT HERE
             <hr> 
  <div class="form-group">
    <label for="email">Enter Title:</label>
    <input type="text" id="title" class="form-control" id="email">
  </div>
  <script src="ck/ckeditor.js"></script>
  <div class="form-group">
    <label for="pwd">Enter Description</label>
<input type="textarea" name='des'  id="des" rows="10" cols="80">

                </div>
                  <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace( 'des' );
                </script>
  
  <button type="submit" class="btn btn-success" onclick="insert()">Insert</button>
</form>
          </div>

          <div class="col-lg-4" id="update">
          UPDATE YOUR INFORMATION
          <hr>
             <form >
             <div class="form-group">
    
    <input type="hidden" id="id" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">Enter Title:</label>
    <input type="text" id="c_title" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Enter Description</label>
    <input type="text" id="c_des" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-default" onclick="edit()">Update</button>
</form>
          </div>
          


        </div><!-- /.content -->


        <!-- Main content -->
        <div class="col-lg-12" >

          <!-- Your Page Content Here -->

          <div class="col-lg-8" id="about_home_service">
            
          </div>
          <div class="col-lg-4" id="about_inst">
             <form >
             INSERT HERE
             <hr> 
  <div class="form-group">
    <label for="email">Enter Title:</label>
    <input type="text" id="about_title" class="form-control" id="about_email">
  </div>
  <div class="form-group">
    <label for="pwd">Enter Description</label>
    <input type="text" id="about_des" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-success" onclick="about_insert()">Insert</button>
</form>
          </div>

          <div class="col-lg-4" id="about_update">
          UPDATE YOUR INFORMATION
          <hr>
             <form >
             <div class="form-group">
    
    <input type="hidden" id="about_id" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Enter Title:</label>
    <input type="text" id="about_c_title" class="form-control">
  </div>
  <div class="form-group">
    <label for="pwd">Enter Description</label>
    <input type="text" id="about_c_des" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-default" onclick="about_edit()">Update</button>
</form>
          </div>
          


        </div><!-- /.content -->

      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer text-center">
    
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016-17 <a href="http://www.nugeninfo.com/">NUGEN INFO.COM</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
  </body>
</html>
