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
                                    <li><a href="<?php echo base_url();?>index.php/ATD/faculty/"><i class="icon-th"></i>Faculty</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/register/"><i class="icon-th"></i>Register</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/login1/"><i class="icon-th"></i>Login</a></li>

                                    <li class="active"><a href="<?php echo base_url()?>index.php/ATD/membersearch1/"><i class="icon-envelope"></i>Members</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


     
 
</nav>
  
</header>
<!--header-->
  

</head>


<body class="body-Login-back" >


            <form class="form-horizontal" id="f" action="<?php echo base_url();?>index.php/ATD/viewmember2" method="post">
    </form>

      <div id="page-wrapper" style="margin-right: 48px;">
        <div class="col-md-8 col-md-offset-1 text-center" >
               <div class="login-panel panel panel-default center" style="height: 100%">
                <div class="panel-heading">
                        <h5 class="panel-title">Member search</h5>
                    </div>

               <div class="panel-body login" style="height: 100%">
                <div class="form-group" >
                    <label class="col-sm-12 col-md-3 col-lg-2 control-label" style="font-family:georgia;font-size: 17px"> Name</label>

                    
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                         
                            <input class="form-control" name="name" id="cidNum" style="height: 30px; width: 100%" placeholder=" Enter Name" form="f" type="text" required />
                        </div>
                    </div>
              
                
            

               <div class="form-group"  >
                    <!-- <label class="col-sm-3 col-md-4 col-lg-3 control-label" style="color: black;font-size: 17px"> Department</label> -->

                   
<!-- 
                        <div class="input-group col-md-9">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-fas fa-sitemap"></i></span>
                            
                            

                            <select class="form-control" name="f1" form="f" style="height: 30px; width: 100%;color: #111">
                                <option value="" form="f">Select Department</option>
                       <?php foreach($item as $key):?>
                        <option value="<?php echo $key['AgencyParentID'];?>"> <?php echo $key['name']; ?></option>
                      <?php endforeach; ?>
                               <!  <option value="" >Select Department</option>
                                <option value="Civil">Civil</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Electronics and Communication">Electronics and Communication</option> -->
                          <!--   </select>

                        </div> -->
                     
                


               
                
              

                    <div class="col-sm-12 col-md-12 col-lg-12">
                       
                        <input type="submit" class="btn btn-lg btn-success btn-block"class="btn btn-success " form="f" value="Get Details" id="getbtn"><span class="glyphicon glyphicon"></span><br>

                         <button type="reset" form="f" class="btn btn-lg btn-warning btn-block">Reset <span class="glyphicon glyphicon-refresh"></span></button>
                    </div>
            
                    </div>
           </div>
         </div>
            </div>
        </div>
  

  
  
  
 <div class="container col-md-12 img-thumbnail bg-primary">
                        <div class="col-md-4 col-sm-12 left-contact  ">

                       <h3 class="title" style="color:#fff;">Contact Us</h3>
                       <hr>
                        <ul>
                            <li><i class="fa fa-envelope" ></i>&nbsp;&nbsp;<a href="0216506.cst@rub.edu.bt"><strong style="color:#fff">Alumni management system</strong></a></li>
                            <hr>
                            <li><i class="fa fa-phone" ></i>&nbsp;&nbsp;<strong style="color:#fff">+77777777</strong></li>
                            <hr>
                            <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<strong style="color:#fff" >college of science and technology</strong> </li>
                            <hr>
                        </ul>
                                        
                        </div>

                          <div class="col-md-4 col-sm-12 left-contact">

                       <h3 class="title" style="color:#fff">Visit</h3>
                       <hr>
                        <ul class="du-choose-list">
                            <li><a href="#"><strong style="color:#fff">College Of science And Technology</strong></a></li>
                            <li><a href="#"><strong style="color:#fff">Royal Univerisity of Bhutan</strong></a></li>
                            <li><a href="#"><strong style="color:#fff">VLE cst</strong></a></li>
                            <li><a href="#"><strong style="color:#fff">Libary cst</strong></a></li>
                        
                           
                        </ul>

                                        
                        </div>
                        <div class="col-md-4 col-sm-12 left-contact ">

                        <h3 class="title" style="color:#fff;">Cst Address </h3>
                        <hr>
                        

                            <ul class="du-choose-list">

                            <li class="list-group"><a href="#"><strong style="color:#fff">College Of science And Technology</strong></a></li>
                            <li><a href="#"><strong style="color:#fff">Rinchending,Phuntsholing</strong></a></li>
                            <li><a href="#"><strong style="color:#fff">POST Box:1122</strong></a></li>
                            <li><a href="#"><strong style="color:#fff">Website:www.cst.edu.bt</strong></a></li>
                             <li><a href="#"><strong style="color:#fff">Email:cst@edu.bt</strong></a></li>
                        
                           
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

