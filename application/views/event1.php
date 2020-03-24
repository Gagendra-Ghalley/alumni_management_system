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
  
<!--header-->

<body>
  


<div class="dream-university-subpage">

	<!-- Begin breadcrumbs-->
	<div class="du-page-header du-breadcrumbs">		
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-xs-12 text-left du-title">
					<div class="du-breadcrumb-title"><h3>Event</h3></div>				
				</div>
						
			</div>
		</div>		
	</div>
	<!-- End breadcrumbs-->
	
	
	<!-- Begin Event -->
	<div class="du-subpage-content">
		<div class="du-event">

			<!-- Begin choose us -->
			<section class="event ptb-50">

				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 text-center">
							<h2>All Event</h2>
							
								
						</div>
					</div>
					
					<section class="du-all-event">
					
						<div class="row">
			                <div class="col-lg-4 col-md-12 col-sm-12 du-news-date-box wow fadeInRight" data-wow-delay="0.2s">
			                    <div>
			                        <div class="badge">
			                            <span> <button style="height:70px;width:75px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Now</font> </a></button></span>
                                    <br>

			                          
                            <table>
      <tbody>
                                               <?php $count1=0; foreach($request1 as $row):?>
                                               
                                                <tr>
                                                  <?php  $count1++;?>
                                                </tr>
                                                  

                                                   
                                                  
                                                    

                                                   
                                                   
                                               
                                                <?php endforeach;?>
                                            </tbody>
                                        </table> 
                                        <p><font size="4" color="white"><?php
                                        // $a="+";
                                        echo ($count1);
                                        echo (" Members are interested");?></font></p>
			                        </div>
			                        <div class="du-date-short-des">
			                        	<h3><font color="white">College Rimdro</font></h3>
			                           <!--  <p>Lorem ipsum dolor sit amedgit, consectetur adipscing elitsf tell. Mauris feugiat vari dghus elit</p> -->
			                        </div>
			                    </div>
			                </div>
			                <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
			                    <a href="#"><img src="<?php echo base_url();?>assets/img1/slider1.png" style="height:240px" alt=""></a>
			                </div>
			            </div>

			            <div class="row">
			                <div class="col-lg-4 col-md-12 col-sm-12 du-news-date-box wow fadeInRight" data-wow-delay="0.2s">
			                    <div>
			                        <div class="badge">
			                            24 <span>jun</span>
			                            <strong>6 <img src="assets/img1/page1_icon4.png" alt=""></strong>
			                        </div>
			                        <div class="du-date-short-des">
			                            <p>Collage Foundation Day</p>
			                        </div>
			                    </div>
			                </div>
			                <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
			                    <a href="#"><img src="<?php echo base_url();?>assets/img1/slider2.png" style="height:240px" alt=""></a>
			                </div>
			            </div>

			            <div class="row">
			                <div class="col-lg-4 col-md-12 col-sm-12 du-news-date-box wow fadeInRight" data-wow-delay="0.2s">
			                    <div>
			                        <div class="badge">
			                            14 <span>jun</span>
			                            <strong>6 <img src="<?php echo base_url();?>assets/img1/page1_icon4.png" alt=""></strong>
			                        </div>
			                        <div class="du-date-short-des">
			                            <p>Annual Programming Contest</p>
			                        </div>
			                    </div>
			                </div>
			                <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
			                    <a href="#"><img src="<?php echo base_url();?>assets/img1/slider4.png" style="height:240px" alt=""></a>
			                </div>
			                </div>

			                <div class="col-md-12">
								<div class="blog-page-pagination">
				                	<!-- Pagination Small -->
									  <ul class="pagination pagination-sm">
										<li><a href="#">«</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li class="disabled"><a href="#">»</a></li>
									  </ul>
				                </div>
							</div>
			     
					</section>				
					
				</div>
			</section>
			<!-- End event -->


			
			
		</div><!-- /.du-event -->
	</div><!-- /.du-subpage content -->
	<!-- End Evnet -->
	  <div class="bg-primary" class="du-newsletter">
            <div class="container">

               

                <div class="col-md-6">

                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>




<!--footer-->

  <!--PRELOAD-->
<div id="preloader">
  <div id="status"></div>
</div>
<!--end PRELOAD--> 





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
  </body>
</html>