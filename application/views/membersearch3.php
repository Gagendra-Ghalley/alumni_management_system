<!DOCTYPE html>
<html lang="en">
  <head>
   <!--header-->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CST Alumni Management System</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <!--  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" /> -->
      <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
      <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
       <link href="css/bootstrap.min.css" rel="stylesheet">  
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
  
     <link href="<?php echo base_url();?>assets/footer2css" rel="stylesheet">
     <link href="<?php echo base_url();?>assets/footer3.css" rel="stylesheet">
  
  
  <!-- Font  -->
  <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  


  


<!--header-->
<header class="clearfix">
   <nav class="navbar-fixed-top" role="navigation">
          
  <div class="bg-primary" class="box" > 
    <div class="container">
    
      <div class="header-element clearfix">
                        <div class="row">
                            <div class="col-md-3">
                                <h1 class="navbar-brand navbar-brand_">
                                    <a href="<?php echo base_url();?>index.php/ATD/Login/"><img class="img-responsive" src="<?php echo base_url();?>assets/img/cstlogo2.png" ></a></h1>

                            </div>
                            <div class="col-md-9" >
                                <ul class="flexy-menu orange" >
                                    <li><a href="<?php echo base_url();?>index.php/ATD/Login/"><i class="icon-heart"></i>Home</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/aboutUs/"><i class="icon-cogs"></i>About us</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/event1/"><i class="icon-th"></i>Events</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/faculty/"><i class="icon-th"></i>Faculty</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/register/"><i class="icon-th"></i>Register</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/login1/"><i class="icon-th"></i>Login</a></li>

                                    <!-- <li><a href="<?php echo base_url();?>index.php/ATD/login1/"><i class="icon-envelope"></i>Profile</a></li> -->

                                    <li class="active"><a href="<?php echo base_url()?>index.php/ATD/membersearch1/"><i class="icon-envelope"></i>Members</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
        </div>
      </div>
 
</nav>
  
</header>
</head>
<body>
  
<div id="page-wrapper"  style="width: 900px; " > 
  
           


    <form class="form-horizontal" id="f" action="<?php echo base_url();?>index.php/ATD/viewmember2" method="post">
    </form>

      
        <div class="col-md-10 img-thumbnail" style=" margin-top: 150px;height: 300px">
              <div class="login-panel panel panel-default">   
                <div class="panel-heading">
                 
                  <h4 class="panel-title" >Member Search</h4>

              </div>

              <br>
                <div class="form-group" >
                    <label class="col-sm-3 col-md-4 col-lg-2 control-label" style="color: black;font-size: 20px"> Name</label>

                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                         
                            <input name="name" id="cidNum" style="height: 30px; width: 250px" placeholder=" Enter Name" form="f" type="text" required />
                        </div>
                    </div>
                </div>
                <br>
                <br>
            

                <div class="form-group" style="width: 660px" >
                    <label class="col-sm-3 col-md-4 col-lg-2 control-label" style="color: black;font-size: 20px"> Department</label>

                    <div class="col-sm-7 col-md-6 col-lg-4 selectContainer">

                        <div class="input-group col-md-10">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-fas fa-sitemap"></i></span>
                            
                            

                            <select name="f1" form="f" style="height: 30px; width: 250px">
                                <option value="" form="f">Select Department</option>
                                <option value="Civil">Civil</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Electronics and Communication">Electronics and Communication</option>
                            </select>

                        </div>
                    </div>
                </div>

                <br>
                <br>
              

               
                    <label class="col-sm-3 col-md-4 col-lg-2 control-label"></label>
                    <div class="col-sm-5 col-md-6 col-lg-4">
                       
                        <input type="submit" class="btn btn-success" form="f" value="Get Details" id="getbtn"><span class="glyphicon glyphicon"></span>

                         <button type="reset" class="btn btn-danger">Reset <span class="glyphicon glyphicon-refresh"></span></button>
                    </div>
              

           

        </div>
      </div>

    </div>
   




        <div class="bg-primary" class="du-newsletter">
            <div class="bg-primary" class="du-newsletter">
            <div class="container">

               

                <div class="col-md-6">

                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>

        </div>

    



       
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.equalheights.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/sForm.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/wow.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/device.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/flexy-menu.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.simple-text-rotator.min.js"></script>
    <script type="text/javascript" src="j<?php echo base_url();?>assets/js1/library/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/testimonials.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/slider.js"></script>
     <script>
  </body>
  </html>