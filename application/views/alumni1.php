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
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" /> 
  
     <link href="<?php echo base_url();?>assets/footer2css" rel="stylesheet">
     <link href="<?php echo base_url();?>assets/footer3.css" rel="stylesheet">
    
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />

    <link href="<?php echo base_url();?>assets/css/cst2.css" rel="stylesheet" /> 
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
  


    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

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
                                    <li   class="active"><a href="<?php echo base_url();?>index.php/ATD/Login/"><i class="icon-heart"></i>Home</a></li>
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
                                
                                <h1 class="title" style="text-transform: uppercase; font-family:bold;text-shadow: 1px 1px 1px #66ccff">Working diligently for the benefit of <br>all alumni</h1>


                               

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

                                <h1 style="text-transform: uppercase;font-family:bold;text-shadow: 1px 1px 1px #66ccff">Working diligently for the benefit of all alumni</h1>

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

                                <h1 style="text-transform: uppercase; font-family:bold;text-shadow: 1px 1px 1px #66ccff">Working diligently for the benefit of all alumni</h1>

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

                                <h1 style="text-transform: uppercase;font-family:bold;text-shadow: 1px 1px 1px #66ccff">Working diligently for the benefit of all alumni</h1>

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
              

            </div>

        </div>

    </div>
    <div class="du-current-news center ">
    <div class="container img-thumbnail">
        <div class="row padding">
            <div class="col-lg-7 col-md-12 col-sm-12"data-wow-delay="0.2s" >
                <div class="card">
                    <span class="img-thumbnail"><img class="card-imd-top-top" src="<?php echo base_url();?>assets/img1/slider4.png" style="height: 200px" ></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12" >
                <div class="card">
                    <div class="card-body">
                        <div class="card-title text-left bold">UP COMING EVENT</div><br>
                        <h3 class="text-left" style="text-shadow: 1px 1px 2px ">College Foundation Day</h3>
                         <p class="text-left glyphicon glyphicon-map-marker" style="margin-right: 500px">CST,Rinchending,phuntsholing</p>
                        <div>
                            
                                <h2 id="demo" class="text-left" style="text-shadow: 1px 1px 2px"></h2>
                                <p class="text-left bold text-dark" style="text-shadow: 1px 1px 1px">Days &nbsp; &nbsp; &nbsp;   hours &nbsp; &nbsp; &nbsp; Minutes &nbsp; &nbsp; Second</p>

                               
                        </div>
                       
                    </div>
                  
                </div>
            </div>
            <div class="col-md-2 col-sm-12 " >
                
                   
                            <table>
                             <tbody>
                                               <?php $count1=0; foreach($request1 as $row):?>
                                               
                                                <tr>
                                                  <?php  $count1++;?>
                                                </tr>
                                                  

                                                   
                                                  
                                                    

                                                   
                                                   
                                               
                                                <?php endforeach;?>
                                            </tbody>
                                        </table> 
                                   <button class="btn btn-default" style="height:70px;width:100px;font-size:15px;font-family:georgia;text-shadow: 1px 1px 1px #111">  
                                        <p><font color="black"><?php
                                        // $a="+";
                                        echo ($count1);
                                        echo (" Members <br> Interested");?></font></p>
                                          </button><br><br>

                                <button style="height:70px;width:95px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Us</font> </a>

                                </button>   
               
            </div>

                        <div class="col-md-12">
                        <button class="btn btn-link text-primary btn-lg"><b><a href="<?php echo base_url();?>index.php/ATD/login1/">Read more</a></b></button>
                        </div>
        </div>

        
    </div>
     </div>

    <section class="du-teacher du-section-ash ptb-50 common">
        <!-- Team Block -->
        <div class="team-content">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- <h2 class="text-center">Our Teacher</h2> -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft img-thumbnail">
                            <!-- Image -->
                            <figure><img src="<?php echo base_url();?>assets/img1/wellcome.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">About us</h3>
                                <p style="font-family:georgia; color:black; font-size: 16px">"whether you just graduated and started new job or contiue with your higher education, your alumni association is here for you. Let us be a partner in your success" </p>
                                <a href="#" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">READ MORE</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft img-thumbnail">
                            <figure><img src="<?php echo base_url();?>assets/img1/membership.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">Membership</h3>
                                <p  style="font-family:georgia; color:black; font-size: 16px">"Stay connected with the College by telling us the best way to get in touch and do suggest the best way be connect with eachother"</p><br>

                                <a href="<?php echo base_url();?>index.php/ATD/login1/>" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">READ MORE</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft img-thumbnail">
                            <figure><img src="<?php echo base_url();?>assets/img1/donate.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">Donates</h3>
                                <p  style="font-family:georgia; color:black; font-size: 16px">"Support student abd our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College"</p><br>
                                <a href="#" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">READ MORE</a>
                                
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <br>
                    <br>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft img-thumbnail">
                            <figure><img src="<?php echo base_url();?>assets/img1/events.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">Events</h3>
                                <p  style="font-family:georgia; color:black; font-size: 16px">"Stay connected with college by telling us the best way to get in touch and do suggest the best way be connect" </p>
                                
                                <a href="<?php echo base_url();?>index.php/ATD/event1/>" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">READ MORE</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft img-thumbnail">
                            <figure><img src="<?php echo base_url();?>assets/img1/faculty.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">Faculty</h3>
                                <p  style="font-family:georgia; color:black; font-size: 16px">"Support student abd our community, Even a small gift can make a big impact on generations so come and change lives. Give to CST College"</p>
                                <a href="#" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">READ MORE</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Team Box -->
                        <div class="team-box wow fadeInLeft img-thumbnail">
                            <figure><img src="<?php echo base_url();?>assets/img1/profile.jpg" style="height: 270px;width: 100%" alt="" class="img-responsive"></figure>

                            <!-- Heading -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">Profile</h3>
                                <p  style="font-family:georgia; color:black; font-size: 16px">"Support student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College"</p>
                                <a href="#" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">READ MORE</a>
                            </div>

                        </div>
                    </div>
    


                </div>
            </div>


        </div>
      
    </section>
                   
    <div class="agile-contact col-md-12">
    <div class="left-contact col-md-6">
        

            <h6>contact us</h6>
            <ul>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="0216506.cst@rub.edu.bt">Alumni management system</a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+77777777</li>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>college of science and technology</li>
            </ul>
    
    </div>
    <div class="right-contact">
        <div class="map">
            <iframe src="https://www.google.com/maps/place/College+of+Science+and+Technology/@26.8502058,89.3918037,17z/data=!3m1!4b1!4m5!3m4!1s0x39e3cb2c210e611d:0x44c5cb2cd32b18d4!8m2!3d26.8502058!4d89.3939924?hl=en-US" frameborder="0" style="border:0" allowfullscreen></iframe>
            <form action="#" method="post">
                <input placeholder="Name" name="Name" class="name" type="text" required=""><br>
                <input placeholder="E-mail" name="Name" class="name" type="text" required=""><br>
                <textarea placeholder="Message"></textarea><br>
                <input type="submit" value="send message">
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</div>


<!--footer-->
 <div class="bg-primary" class="du-newsletter">
            <div class="bg-primary" class="du-newsletter">
            <div class="container">

               

                <div class="col-md-6">

                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>

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
     <script>
                                // Set the date we're counting down to
                                var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                  // Get today's date and time
                                  var now = new Date().getTime();
                                    
                                  // Find the distance between now and the count down date
                                  var distance = countDownDate - now;
                                    
                                  // Time calculations for days, hours, minutes and seconds
                                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                    
                                  // Output the result in an element with id="demo"
                                  document.getElementById("demo").innerHTML = days + ": &nbsp " + hours + ": &nbsp"
                                  + minutes + ": &nbsp " + seconds + ": &nbsp ";
                                    
                                  // If the count down is over, write some text 
                                  if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById("demo").innerHTML = "EXPIRED";
                                  }
                                }, 1000);
                                </script>

 

</body>

</html>