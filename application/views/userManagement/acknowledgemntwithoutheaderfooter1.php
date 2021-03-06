<!DOCTYPE html>
<html>

<head>
  <!--header-->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CST Alumni Management System</title>

     <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/style.css">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/animate.css">
  <!-- Font Awesome Css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts1/font-awesome.css">
  <!-- Menu -->
  <link href="<?php echo base_url();?>assets/css1/flexy-menu.css" rel="stylesheet">
  <!-- Testimonial CSS -->
  <link href="<?php echo base_url();?>assets/css1/cubeportfolio.min.css" rel="stylesheet">
  
  
  <!-- Font  -->
  <link href='http://fonts1.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts1.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url();?>assets/css/cst.css" rel="stylesheet" />
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <!--  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
 -->      <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
     <!--  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" /> -->
       <link href="css/bootstrap.min.css" rel="stylesheet"> 
       <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet" /> 
  
  


<header class="clearfix">
   <nav class="navbar-fixed-top" role="navigation">
          
  <div class="bg-primary" class="box" > 
    <div class="container">
    

      <div class="header-element clearfix">
                        <div class="row">
                            <div class="col-md-4">
                                <h1 class="navbar-brand navbar-brand_">
                                    <a href="<?php echo base_url();?>index.php/ATD/Login/"><img class="img-responsive" src="<?php echo base_url();?>assets/img/cstlogo2.png" ></a></h1>

                            </div>
                            <div class="col-md-8" >
                                <ul class="flexy-menu orange" >
                                    <li><a href="<?php echo base_url();?>index.php/ATD/Login/"><i class="icon-heart"></i>Home</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/aboutUs/"><i class="icon-cogs"></i>About us</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/event1/"><i class="icon-th"></i>Events</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/faculty/"><i class="icon-th"></i>Oragnogram</a></li>
                                    <li class="active"><a href="<?php echo base_url();?>index.php/ATD/register/"><i class="icon-th"></i>Register</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/login1/"><i class="icon-th"></i>Login</a></li>

                                  
                                </ul>
                            </div>
                        </div>
                    </div>


      
 
</nav>
  
</header>

</head>


<body  >

    <div class="container">
       
        <div class="row">
            <div class="col-md-3 col-md-offset-2 text-center logo-margin ">
             <!--  <h1 class="panel-title" ><font size="6">CST Alumni Management system</font></h1> -->
                </div>
            <div class="col-lg-8 col-md-offset-2">
                <div class="login-panel panel panel-default">                  
                    <div >
                       <!--  <h3 class="panel-title">Please Sign Up</h3> -->
                    </div>

           
                  
                   

 <div >
                                            <div id="page-wrapper">

          <div class="row profile">
            
        
        
        <div class="col-lg-8">
                 <?php echo $message;?>
                 <!--if ($message=='file successfully inserted') then do you want to continue adding-->
             </div>
         </div>
     </div>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
  
  
  
  
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


     <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
       <!-- Main jQuery & other 3rd party Library -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.easing.1.3.js"></script>
  
  <!-- Feature box equal height JS -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.equalheights.js"></script>  
  <!-- UI bottom to top JS -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.ui.totop.js"></script>
  <!-- Subscription JS -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/sForm.js"></script>  
  <!-- Animation JS -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/wow.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/device.min.js"></script>
  <!-- Menu JS -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/flexy-menu.js"></script>
  <!-- Text rotator JS -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.simple-text-rotator.min.js"></script>
  <!-- Smooth Scroll JS -->
  <script type="text/javascript" src="j<?php echo base_url();?>assets/js1/library/smoothscroll.js"></script>
  
  <!-- Testimonila JS -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.cubeportfolio.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/testimonials.js"></script>
  <!-- Custom script -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js1/main.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/slider.js"></script>          
           

                   
                


                   
 
</body>

</html>
