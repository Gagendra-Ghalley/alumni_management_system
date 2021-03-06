<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css file link-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- Header-->
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
                                    <li   class="active"><a href="<?php echo base_url();?>index.php/ATD/Login/"><i class="icon-heart"></i>Home</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/aboutUs/"><i class="icon-cogs"></i>About us</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/event1/"><i class="icon-th"></i>Events</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/faculty/"><i class="icon-th"></i>Organogram</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/register/"><i class="icon-th"></i>Register</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/login1/"><i class="icon-th"></i>Login</a></li>

                                    <!-- <li><a href="<?php echo base_url();?>index.php/ATD/login1/"><i class="icon-envelope"></i>Profile</a></li> -->

                                    <!-- <li><a href="<?php echo base_url()?>index.php/ATD/membersearch1/"><i class="icon-envelope"></i>Members</a></li> -->
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

<!--Slider-->

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

                
                    <div class="carousel-inner " role="listbox">

                   
                        <div class="item active deepskyblue">
                             <div class="hovereffect">
                              <figure><img src="<?php echo base_url();?>assets/Images1/slider1.png" style="height: 350px" alt=""></figure>
                                <div class="overlay">
                                   
                                </div>
                        </div>
                            
                            <div class="carousel-caption ">
                                
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
                            <div class="hovereffect">
                            <figure><img src="<?php echo base_url();?>assets/Images1/slider2.png" style="height: 350px" alt=""></figure>
                            <div class="overlay">
                                   
                                </div>
                            </div>
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
                            <div class="hovereffect">
                            <figure><img src="<?php echo base_url();?>assets/Images1/slider3.png" style="height: 350px" alt=""></figure>
                            <div class="overlay">
                                   
                                </div>
                            </div>
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
                        <!--fourth slide-->
                        <div class="item darkerskyblue">
                            <div class="hovereffect">
                            <figure><img src="<?php echo base_url();?>assets/Images1/slider4.png" style="height: 350px" alt=""></figure>
                            <div class="overlay">
                                   
                                </div>
                            </div>
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
                     

                    </div>
                    
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
    <!--Upcoming event-->
   

<br>
    <div class="du-current-news center ">
    <div class="container img-thumbnail">
         <h4 class="title" style="color:#111;text-align: center;">UP COMMING EVENT</h4>
     <!--  <div class="card-title text-left bold"><b></b></div><br> -->
       <?php foreach($editdetail as $row): ?>
       

            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="col-lg-5 col-md-5 col-sm-5 ">
                
                        <div class="hovereffect">
                            <figure> <img class="card-imd-top-top" src="<?php echo base_url();?>assets/img/event/<?php echo $row['image'];?>" style="height: 230px;width: 500px" ></figure>
                                <div class="overlay">
                                    <h2>Events</h2>
                                    
                                </div>
                        </div>
                            
                            
                                
                        </div>
                    
                   
         
         
            
            <div class="col-lg-5 col-md-6 col-sm-5 " style="height:100%;text-align: justify;font-family:georgia; color:black; font-size: 15px" >
                     <!-- <p class="text-primary"><b>Description</b></p> -->
                 
               
<table>
                          <h3 class="title" style="color:#428af5;;margin-left: 100px"><?php echo $row['eventname'];?><br></h3>
                          <b style="margin-left: 100px;"><?php echo $row['date'];?></b>
                          <br><br>
                          
                          
                          <tr><?php echo $row['event'];?><br></tr></table>
                         
                  
                </div>
         
            <div class="col-md-2 col-sm-12  " style="height: 210px;" >
                

                    
                               

                    <button style="height:60px;width:100px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Now</font> </a>

                                </button><br>
                      
                   

                        
                                   <button class="btn btn-default btn-lg" style="height:60px;width:110px;margin-top:10px;font-size:15px;">  
                                        <p><font color="#111">

                                          
                                          <?php echo $row['event1'];?>
                                       
                                       <b>Member(s) <br> Interested</b></font></p>
                                          </button><br>

                              
          
        </div><?php endforeach; ?>
   

        
    </div>
     </div>
 </div>

     <!--body content-->
    <section class="du-teacher du-section-ash ptb-50 common">
        
        <div class="team-content">
            
            <div class="container">
                <div class="row">
                 
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- image thumbnail -->
                        <div class="team-box wow fadeInLeft img-thumbnail">
                            <!-- Image -->

                            <div class="hovereffect">
                            <figure> <img class="img-responsive" src="<?php echo base_url();?>assets/img1/wellcome.jpg" style="height: 250px;width: 100%" alt="" class="img-responsive img1-w3l" alt=""></figure>
                                <div class="overlay">
                                    <h2>About Us</h2>
                                    
                                </div>
                        </div>
                                                  
                    
                            <!-- about us -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">About us</h3>
                                <p style="font-family:georgia; color:black; font-size: 16px">"whether you just graduated and started new job or contiue with your higher education, your alumni association is here for you. Let us be a partner in your success" </p>
                                <a href="<?php echo base_url();?>index.php/ATD/aboutUs/" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">READ MORE</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                     
                        <div class="team-box wow fadeInLeft img-thumbnail">

                            <div class="hovereffect">
                            <figure><img src="<?php echo base_url();?>assets/img1/membership.jpg" style="height: 250px;width: 100%" alt="" class="img-responsive"></figure>
                                <div class="overlay">
                                    <h2>Memberships</h2>
                                    
                                </div>
                        </div>
                            

                            <!-- membership -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">Membership</h3>
                                <p  style="font-family:georgia; color:black; font-size: 16px">"Stay connected with the College by telling us the best way to get in touch and do suggest the best way be connect with eachother"</p><br>

                                <a href="<?php echo base_url();?>index.php/ATD/login1/>" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">SIGN IN</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      
                        <div class="team-box wow fadeInLeft img-thumbnail">

                            <div class="hovereffect">
                            <figure><img src="<?php echo base_url();?>assets/img1/donate.jpg" style="height: 250px;width: 100%" alt="" class="img-responsive"></figure>
                                <div class="overlay">
                                    <h2>Donate us</h2>
                                    
                                </div>
                        </div>
                           

                            <!-- Donate -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">Donates Us</h3>
                                <p  style="font-family:georgia; color:black; font-size: 16px">"Support student abd our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College"</p><br>
                                <a href="<?php echo base_url();?>index.php/ATD/donate/" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">DONATE</a>
                                
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <br>
                    <br>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        
                        <div class="team-box wow fadeInLeft img-thumbnail">

                            <div class="hovereffect">
                            <figure><img src="<?php echo base_url();?>assets/img1/events.jpg" style="height: 250px;width: 100%" alt="" class="img-responsive"></figure>
                                <div class="overlay">
                                    <h2>See Events</h2>
                                    
                                </div>
                        </div>
                            

                            <!-- Event -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">Events</h3>
                                <p  style="font-family:georgia; color:black; font-size: 16px">"Stay connected with college by telling us the best way to get in touch and do suggest the best way be connect" </p>
                                
                                <a href="<?php echo base_url();?>index.php/ATD/event1/>" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">READ MORE</a>
                            </div>

                        </div>
                    </div>


                

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        
                        <div class="team-box wow fadeInLeft img-thumbnail">

                            <div class="hovereffect">
                            <figure><img src="<?php echo base_url();?>assets/img1/faculty.jpg" style="height: 250px;width: 100%" alt="" class="img-responsive"></figure>
                                <div class="overlay">
                                    <h2>Faculty</h2>
                                    
                                </div>
                        </div>
                           
                       
                            <!-- Faculty -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">Ogranogram</h3>
                                <p  style="font-family:georgia; color:black; font-size: 16px">"Support student and our community, Even a small gift can make a big impact on generations so come and change lives. Give to CST College"</p>
                                <a href="<?php echo base_url();?>index.php/ATD/faculty/" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">READ MORE</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        
                        <div class="team-box wow fadeInLeft img-thumbnail">


                            <div class="hovereffect">
                            <figure><img src="<?php echo base_url();?>assets/img1/profile.jpg" style="height: 250px;width: 100%" alt="" class="img-responsive"></figure>
                                <div class="overlay">
                                    <h2>See Profile</h2>
                                    
                                </div>
                        </div>
                          

                            <!-- Profile -->
                            <div class="du-caption">
                                <br>
                                <h3 class="title" style="color:#428af5;text-align: center;">Profile</h3>
                                <p  style="font-family:georgia; color:black; font-size: 16px">"Support student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College"</p>
                                <a href="<?php echo base_url();?>index.php/ATD/login1/" class="btn btn-default btn-lg btn-block" style="color:#428af5;text-align: center; ">READ MORE</a>
                            </div>

                        </div>
                    </div>
                    
                    


                </div>
            </div>


       
      
    </section>


        <div class="du-current-news center" style="background-color: #f5f5f5">
            <h3 class="title" style="color:#428af5;text-align: center;">News</h3>
        <div class="container img-thumbnail"> 
            <div style="font-family:georgia; color:#111; font-size: 16px;text-align: justify;">
            
           <?php
                 
                  foreach($data as $row)
                  {
                  
                  
                 
                   echo $row['describtion'];
                
                
                  }
                   ?>
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
 <div class="bg-primary">
            <div class="bg-primary">
            <div class="container">

               

                <div class="col-md-12">

                    <p>@Alumni Management System</p>

                                        

                                        <ul class="social social-boxed" style="margin-left: 500px">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            
                                        </ul>
                                    

                    

                </div>

            </div>
        </div>


        </div>



  



  

    <!-- javascript file -->
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