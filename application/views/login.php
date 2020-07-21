 <!DOCTYPE html>
<html>


<head>
 
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CST Alumni Management System</title>
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <!--   <link href="<?php echo base_url();?>assets/footer2css" rel="stylesheet"> -->
    <link href="<?php echo base_url();?>assets/footer3.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet" /> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts1/font-awesome.css">
    <link href="<?php echo base_url();?>assets/css1/flexy-menu.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css1/cubeportfolio.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css1/slider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/pop.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/main-style1.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css1/flexy-menu.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css1/effect.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
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
    <!-- <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" /> -->
    <!-- <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <!--  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
 -->      <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
     <!--  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" /> -->
      <!--  <link href="css/bootstrap.min.css" rel="stylesheet">  -->
       <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet" /> 

 
  

  
<!--header-->
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
                                    <li><a href="<?php echo base_url();?>index.php/ATD/faculty/"><i class="icon-th"></i>Organogram</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/register/"><i class="icon-th"></i>Register</a></li>
                                    <li class="active"><a href="<?php echo base_url();?>index.php/ATD/login1/"><i class="icon-th"></i>Login</a></li>

                                   <!--  <li><a href="<?php echo base_url()?>index.php/ATD/membersearch1/"><i class="icon-envelope"></i>Members</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>


     
 
</nav>
  
</header>
<!--header-->
  

</head>


<body class="body-Login-back" >

    <div class="container" style="margin-left: 56px;">
       
        <div class="row">
           
            <div class="col-md-7 col-md-offset-3 text-center">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h5 class="panel-title">Please Log In</h5>
                    </div>
                    <div class="panel-body login">
                        <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/ATD/login_validate" class="form-group">
                            
                            	<div class="form-group">
                               
                                    <input class="form-control" placeholder="CID" name="cid" type="text" autofocus required/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" class="pass" type="password" required/>
                                </div>
                               <!--  <a href="<?php echo base_url();?>index.php/ATD/Forgetpassword">Forget password?</a> -->
                                 
                                <input type="submit" value="Login" class="btn btn-lg btn-success btn-block"/>
                               
                              

                           
                        </form>
                        <form accept-charset="utf-8" action="<?php echo base_url();?>index.php/ATD/Forgetpasswordemail">
                        <input type="submit" value="Forgot password?" class="btn btn-lg btn-warning btn-block"/>
                        <br>
                       </form>
                    </div>
                    <div id="errors"><?php echo validation_errors();?></div>
                </div>
            </div>
        </div>
    </div>

	
	
	
  <div class="container col-md-12  bg-primary">
                        <div class="col-md-4 col-sm-12 ">

                       <h3 class="title" style="color:#fff;">Contact Us</h3>
                       <hr>
                        <ul>
                            <li><i class="fa fa-envelope" ></i>&nbsp;&nbsp;<a href="0216506.cst@rub.edu.bt"><strong style="color:#fff;font-size: 15px">Alumni management system</strong></a></li>
                            <hr>
                            <li><i class="fa fa-phone" ></i>&nbsp;&nbsp;<strong style="color:#fff;font-size: 15px">+77777777</strong></li>
                            <hr>
                            <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<strong style="color:#fff;font-size: 15px" >college of science and technology</strong> </li>
                            <hr>
                        </ul>
                                        
                        </div>

                          <div class="col-md-4 col-sm-12 ">

                       <h3 class="title" style="color:#fff">Visit</h3>
                       <hr>
                        <ul class="du-choose-list">
                            <li><a href="https://cst.edu.bt/index.php/en/"><strong style="color:#fff;font-size: 15px">College Of science And Technology</strong></a></li>
                            <li><a href="https://www.rub.edu.bt/index.php/en/"><strong style="color:#fff;font-size: 15px">Royal Univerisity of Bhutan</strong></a></li>
                            <li><a href="https://vle.cst.edu.bt/"><strong style="color:#fff;font-size: 15px">VLE cst</strong></a></li>
                            <li><a href="https://lib.cst.edu.bt/"><strong style="color:#fff;font-size: 15px">Libary cst</strong></a></li>
                        
                           
                        </ul>

                                        
                        </div>
                        <div class="col-md-4 col-sm-12">

                        <h3 class="title" style="color:#fff;">Cst Address </h3>
                        <hr>
                        

                            <ul class="du-choose-list">

                            <li class="list-group"><a href="#"><strong style="color:#fff;font-size: 15px">College Of science And Technology</strong></a></li>
                            <li><a href="#"><strong style="color:#fff;font-size: 15px">Rinchending,Phuntsholing</strong></a></li>
                    
                            
                             <li><a href="#"><strong style="color:#fff;font-size: 15px">Email:cst@edu.bt</strong></a></li>
                        
                           
                        </ul>
                                        
                        </div>
                        
                    </div>
    
    


<!--footer-->
 <div class="bg-primary" class="du-newsletter">
            <div class="bg-primary" class="du-newsletter">
            <div class="container">

               

                <div class="col-md-12">

                    <p>@Alumni Management System</p>

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

