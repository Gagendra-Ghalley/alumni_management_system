<!DOCTYPE html>
<html lang="en">

<head>
    <!--header-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CST Alumni Management System</title>
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" /> -->
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts1/font-awesome.css">
    <link href="<?php echo base_url();?>assets/css1/flexy-menu.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css1/cubeportfolio.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css1/slider.css" rel="stylesheet">
     <link href="<?php echo base_url();?>css/pop.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assets/css/main-style1.css" rel="stylesheet" />
     <link href="<?php echo base_url();?>assets/css1/flexy-menu.css" rel="stylesheet">


    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <header class="clearfix">
        <nav class="navbar-fixed-top" role="navigation">
        	

            <div class="bg-primary" class="box">
                <div class="container">

                    <div class="header-element clearfix">
                        <div class="row">
                            <div class="col-md-4">
                                <h1 class="navbar-brand navbar-brand_">
          		<a href="index.html"><img class="img-responsive" src="<?php echo base_url();?>assets/img/cstlogo2.png" ></a></h1>

                            </div>
                            <div class="col-md-8" >
                                <ul class="flexy-menu orange" >
                                    <li class="active" ><a href="<?php echo base_url();?>index.php/ATD/Login/"><i class="icon-heart"></i>Home</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/aboutUs/"><i class="icon-cogs"></i>About us</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/event1/"><i class="icon-th"></i>Events</a>
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
</head>
<br>
<br>

<body>
    <div class="du-banner-area">

        <div class="du-featured-photo">

            <div class="container main-container">

                <div id="carousel-example-generic" class="carousel slide" data-interval="7000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <!-- First slide -->
                        <div class="item active deepskyblue">
                            <figure><img src="<?php echo base_url();?>assets/img1/slider1.png" style="height: 350px" alt=""></figure>
                            <div class="carousel-caption">

                                <h1 style="text-transform: uppercase; font-style:bold">Working diligently for the benefit of all alumni</h1>


                               

                                <table>
                                    <tbody>
                                        <?php $count=0; foreach($request as $row):?>

                                            <tr>
                                                <?php  $count++;?>
                                            </tr>

                                            <?php endforeach;?>
                                    </tbody>
                                </table>
                                <button style="height:70px;width:95px;font-size:15px">
                                    <?php
                                        $a="+";
                                        echo ($count.=$a);
                                        echo ("\nMembers");?>
                                </button>

                                <button style="height:70px;width:95px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/" ><font color="white" >Join Us</font> </a>

                                </button>

                                

							
                            </div>




                        </div>

                        <!-- Second slide -->
                        <div class="item skyblue">
                            <figure><img src="<?php echo base_url();?>assets/img1/slider2.png" style="height: 350px" alt=""></figure>
                            <div class="carousel-caption">

                                <h1 style="text-transform: uppercase; font-style: bold">Working diligently for the benefit of all alumni</h1>

                                <table>
                                    <tbody>
                                        <?php $count=0; foreach($request as $row):?>

                                            <tr>
                                                <?php  $count++;?>
                                            </tr>

                                            <?php endforeach;?>
                                    </tbody>
                                </table>
                                <button style="height:70px;width:95px;font-size:15px">
                                    <?php
                                        $a="+";
                                        echo ($count.=$a);
                                        echo ("\nMembers");?>
                                </button>

                                <button style="height:70px;width:95px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Us</font> </a>

                                </button>

                              
                            </div>
                        </div>

                        <!-- Third slide -->
                        <div class="item darkerskyblue">
                            <figure><img src="<?php echo base_url();?>assets/img1/slider3.png" style="height: 350px" alt=""></figure>
                            <div class="carousel-caption">

                                <h1 style="text-transform: uppercase;">Working diligently for the benefit of all alumni</h1>

                                <table>
                                    <tbody>
                                        <?php $count=0; foreach($request as $row):?>

                                            <tr>
                                                <?php  $count++;?>
                                            </tr>

                                            <?php endforeach;?>
                                    </tbody>
                                </table>
                                <button style="height:70px;width:95px;font-size:15px">
                                    <?php
                                        $a="+";
                                        echo ($count.=$a);
                                        echo ("\nMembers");?>
                                </button>

                                <button style="height:70px;width:95px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Us</font> </a>

                                </button>

                                <div>
                               
									</div>
                            </div>
                        </div>

                        <div class="item darkerskyblue">
                            <figure><img src="<?php echo base_url();?>assets/img1/slider4.png" style="height: 350px" alt=""></figure>
                            <div class="carousel-caption">

                                <h1 style="text-transform: uppercase;">Working diligently for the benefit of all alumni</h1>

                                <table>
                                    <tbody>
                                        <?php $count=0; foreach($request as $row):?>

                                            <tr>
                                                <?php  $count++;?>
                                            </tr>

                                            <?php endforeach;?>
                                    </tbody>
                                </table>
                                <button style="height:70px;width:95px;font-size:15px">
                                    <?php
                                        $a="+";
                                        echo ($count.=$a);
                                        echo ("\nMembers");?>
                                </button>

                                <button style="height:70px;width:95px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Us</font> </a>

                                </button>
								

                            </div>
                        </div>
                        <!-- /.item -->

                    </div>
                    <!-- /.carousel-inner -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- /.carousel -->

            </div>

        </div>

    </div>

    <div class="du-current-news center">
        <div class="container">
            <h2 class="center">Events </h2>

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 du-news-date-box wow fadeInRight" data-wow-delay="0.2s">
                    <div  class="bg-primary" >
                        <div class="badge"  class="bg-primary">
                             <span> <button style="height:70px;width:75px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Us</font> </a>

                                </button></span>

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

                            <h3><font color="white">College foundation day</font></h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12" data-wow-delay="0.2s">
                    <a href="#"><img src="<?php echo base_url();?>assets/img1/slider2.png" style="height: 240px;width:750px" alt=""></a>

                </div>
                </figure>
            </div>
            <a href="<?php echo base_url();?>index.php/ATD/event1/>" class="btn-default du-common-property"> more events</a>

        </div>
    </div>

    <section class="du-teacher du-section-ash ptb-50 common">
        <!-- Team Block -->
        <div class="team-content">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- <h2 class="text-center">Our Teacher</h2> -->
                    <div class="col-md-4 col-sm-7">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft">
                            <!-- Image -->
                            <figure><img src="<?php echo base_url();?>assets/img1/wellcome.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h2 class="title" style="text-align: center;">About us</h2>
                                <p>whether you just graduated and started new job or contiue with your higher education, your alumni association is here for you. Let us be a partner in your success </p>
                                <a href="#" class="btn-default du-common-property" style="text-align: center;">Read More</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-7">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft">
                            <figure><img src="<?php echo base_url();?>assets/img1/membership.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h2 class="title" style="text-align: center;">Membership</h2>
                                <p>"Stay connected with the College by telling us the best way to get in touch "</p><br>
                                <a href="<?php echo base_url();?>index.php/ATD/login1/>" class="btn-default du-common-property" style="text-align: center;">Read More</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-7">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft">
                            <figure><img src="<?php echo base_url();?>assets/img1/donate.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h2 class="title" style="text-align: center;">Donates</h2>
                                <p>"Support student abd our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College"</p>
                                <a href="#" class="btn-default du-common-property" style="text-align: center;">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <br>
                    <br>

                    <div class="col-md-4 col-sm-7">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft">
                            <figure><img src="<?php echo base_url();?>assets/img1/events.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h2 class="title" style="text-align: center;">Events</h2>
                                <p>"Stay connected with college by telling us the best way to get in touch" </p><br>
                                <a href="<?php echo base_url();?>index.php/ATD/event1/>" class="btn-default du-common-property">Read More</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-7">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft">
                            <figure><img src="<?php echo base_url();?>assets/img1/faculty.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h2 class="title" style="text-align: center;">Faculty</h2>
                                <p>"Support student abd our community>Even a small gift can make a big impact on generations so come and change lives. Give to CST College"</p>
                                <a href="#" class="btn-default du-common-property" style="text-align: center;">Read More</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-7">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft">
                            <figure><img src="<?php echo base_url();?>assets/img1/profile.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h2 class="title" style="text-align: center;">Profile</h2>
                                <p>"Support student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College"</p>
                                <a href="#" class="btn-default du-common-property" style="text-align: center;">Read More</a>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /Container -->
        </div>
        <!-- / Team -->
    </section>

    

    <div class="dream-university">

        <div class="bg-primary" class="du-newsletter">
            <div class="container">

                <div class="col-md-6">
                    <h2 class="wow fadeInUp">newsletter sign up</h2>
                    <p class="wow fadeInUp">Enter your email address to get the latest alumni news,spceial events and alumni activites delivered right into your inbox</p>

                    <form id="newsletter" accept-charset="utf-8">
                        <div class="success">Your subscribe request has been sent!</div>
                        <label class="email">
                            <input type="email" value="Enter Your E-mail:">
                            <span class="error">*This is not a valid email address.</span>
                        </label>
                        <br>
                        <a href="#" data-type="submit">Subscribe</a>
                    </form>

                </div>

                <div class="col-md-6">

                    <form id="newsletter" accept-charset="utf-8">
                        <h2>contact us</h2>
                        <p>02-325252
                            <br> Rinchending,phuntsholing.Bhutan
                            <br> CST_alumni@gmail.com
                        </p>



                    </form>

                </div>

            </div>
        </div>
    </div>

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
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/slider.js"></script>

</body>

</html>