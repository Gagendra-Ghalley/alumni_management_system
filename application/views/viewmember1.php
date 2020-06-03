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
  
  
  <!-- Font  -->
  <!-- <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> -->
  

</head>
  


<!--header-->
<header class="clearfix">
   <nav class="navbar-fixed-top" role="navigation">
          
  <div class="bg-primary" class="box" > 
    <div class="container">
    
      <div class="header-element clearfix">
                        <div class="row">
                            <div class="col-md-4">
                                <h1 class="navbar-brand navbar-brand_">
              <a href="index.html"><img class="img-responsive" src="<?php echo base_url();?>assets/img/cstlogo2.png" ></a></h1>

                            </div>
                            <div class="col-md-8" >
                                <ul class="flexy-menu orange" >
                                    <li><a href="<?php echo base_url();?>index.php/ATD/Login/"><i class="icon-heart"></i>Home</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/aboutUs/"><i class="icon-cogs"></i>About us</a></li>
                                    <li  class="active"><a href="<?php echo base_url();?>index.php/ATD/event1/"><i class="icon-th"></i>Events</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/faculty/"><i class="icon-th"></i>Faculty</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/register/"><i class="icon-th"></i>Register</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/login1/"><i class="icon-th"></i>Login</a></li>

                                    <li><a href="<?php echo base_url()?>index.php/ATD/membersearch1/"><i class="icon-envelope"></i>Members</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
        </div>
      </div>
 
</nav>
  
</header>

<!--  page-wrapper -->
<div  style="width: 900px;height: 1200px" >

    <div class="row" style="height: 900px">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Profile</h1>
        </div>


        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
               
            </div>

          
            

            <div class="row profile"  style=" margin-left: 100px;width: 800px">
                <div  class="col-md-12" style="margin-top: 70px;margin-left: 100px;height: 900px">


                 <?php $count=1; foreach($checkissue as $row): ?>

            <tr>
                <br>
                <td><?php echo $count++;?></td><br>
                
               <b>Name:</b> <td><?php echo $row['FirstName'];?>
              
                 
               </td><br>
                <b>Department:</b>
<td> <?php 
                                                    $ids=explode(", ", $row['AgencyParentID']);//bpas_user_profiles
                                                    foreach ($ids as $key => $AgencyParentID) { //id
                                                      echo $this->db->get_where('bpas_master_agencyparent',array('AgencyParentID' =>trim($AgencyParentID)))->row()->name ;//tablename,id,name
                                                    }
                                                    

                                                   ?>
                                                    
                                                   
                                                   </td> 
              <br>
               <b>Email:</b> <td><?php echo $row['email'];?></td>
                    <?php endforeach; ?></tr> 
                </div>
                   
              

            </div>

          

        </div>
      
        <!--End Page Header -->
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