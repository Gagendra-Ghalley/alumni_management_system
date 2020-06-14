	 <html>  
 <head>
 
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CST Alumni Management System</title>
    <!-- Bootstrap -->

     <link href="<?php echo base_url();?>assets/css1/bootstrap.min.css" rel="stylesheet">  
   <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/style.css">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/animate.css">
  <!-- Font Awesome Css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts1/font-awesome.css">
  <!-- Menu -->
  <link href="<?php echo base_url();?>assets/css1/flexy-menu.css" rel="stylesheet">
  <!-- Testimonial CSS -->
  <link href="<?php echo base_url();?>assets/css/cubeportfolio.min.css" rel="stylesheet">
  
  
  <!-- Font  -->
  <link href='http://fonts1.googleapis.com/css1?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts1.googleapis.com/css1?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  
  
  
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
<!--   <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />  -->
      <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
  <!--    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />  -->

      <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet" /> 
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  

  
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
                                    <li><a href="<?php echo base_url();?>index.php/ATD/faculty/"><i class="icon-th"></i>Faculty</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/register/"><i class="icon-th"></i>Register</a></li>
                                    <li class="active"><a href="<?php echo base_url();?>index.php/ATD/login1/"><i class="icon-th"></i>Login</a></li>

                                    <li><a href="<?php echo base_url()?>index.php/ATD/membersearch1/"><i class="icon-envelope"></i>Members</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


     
 
</nav>
  
</header>
<!--header-->
  

</head>

 
 
 	
  <body class="body-Login-back">
     <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br>
    
  <!-- </body> -->
<div class="container">
     
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <!-- <h1 class="panel-title"  ><font size="6">CST Alumni Management system</font></h1> -->
                </div>
            <div class="col-md-5 col-md-offset-3 ">
                
      <div class="row">
        <div class="col-md-8" style="margin:0 auto; float:center;">
         
          <br />
          <?php

          if($this->session->flashdata("message"))
          {
            echo "
            <div class='alert alert-success'>
              ".$this->session->flashdata("message")."
            </div>
            ";
          }
          ?>
        
        </div>
      </div>
    
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Password Reset</h3>
                    </div>
                    <div class="panel-body login">
                        <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/ATD/send/" class="form-group">
                            
                              <div class="form-group">
                               
                                    <label>Enter Registered cid/Student_no</label>
                        <input type="text" name="cid" class="form-control" placeholder="Enter registered cid" required /><br>
                 

                  
                             </div>

             
              
            
                                      
                                <div class="form-group">
                                     <label>Enter Registered email</label>
                          <input type="email" name="password" class="form-control" placeholder="Enter registered email" required />
                                        </div>
                             
                                 
                                
                            
                              <input type="submit" name="submit" value="Send" class="btn btn-success" />
                         
                               
                              

                           
                        </form>
                        
                    </div>
                    <div id="errors"><?php echo validation_errors();?></div>
                </div>
            </div>
        </div>
    </div>

</html>


