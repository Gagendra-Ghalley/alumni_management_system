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
  <style>
#more {display: none;}
</style>

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
                                    <li><a href="<?php echo base_url();?>index.php/ATD/faculty/"><i class="icon-th"></i>Organogram</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/register/"><i class="icon-th"></i>Register</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/ATD/login1/"><i class="icon-th"></i>Login</a></li>

                                    <!-- <li><a href="<?php echo base_url()?>index.php/ATD/membersearch1/"><i class="icon-envelope"></i>Members</a></li> -->
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

  
<div class="du-current-news center bg-secondary">
    <div class="container img-thumbnail">
     <!--  <div class="card-title text-left bold">UP COMMING EVENT</div><br> -->
       <?php foreach($editdetail as $row): ?>
        
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="col-lg-5 col-md-5 col-sm-4 img-responsive" >
                 
                    
                        <div class="hovereffect">
                            <figure> <img class="card-imd-top-top" src="<?php echo base_url();?>assets/img/event/<?php echo $row['image'];?>" style="height: 230px;width:100%;" ></figure>
                                <div class="overlay">
                                    <h2>Events</h2>
                                    
                                </div>
                        </div>
                </div>
           
            <div class="col-lg-6 col-md-6 col-sm-6 " style="height:100%;text-align: justify;font-family:georgia; color:black; font-size: 15px" >
                 
                    
                 
               
<table>
                          <h3 class="title" style="color:#428af5;;margin-left: 100px"><?php echo $row['eventname'];?><br></h3>
                          <b style="margin-left: 100px;"><?php echo $row['date'];?></b>
                          <br><br>
                          
                          <tr><?php echo $row['event'];?><br></tr></table>
                         <br>
                  
                
            </div><br><br>
            
                

                    <div class="col-lg-1 col-md-1 col-sm-1">
                               

                    <button style="height:60px;width:95px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Now</font> </a>

                                </button> 
                      
                   

                                      
                                   <button class="btn btn-default btn-lg" style="height:60px;width:107px;font-size:15px;margin-top: 20px;">  
                                        <p><font color="#111">

                                          
                                          <?php echo $row['event1'];?>
                                       
                                       <b>Member(s) <br> Interested</b></font></p>
                                          </button><br>

                              
            </div><br><br>
        <?php endforeach; ?>

            

   
          
    </div> 
    </div>
              
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

    


<!--footer-->
 

  

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
                      





  function deletefn(){
//onclick="deletefn()"

//<a href="<?php echo site_url();?>/Settings/deleteevent/<?php echo $row['event_id'];?>" >
if(confirm('Are you sure?')){

<a href="<?php echo site_url();?>/Settings/deleteevent/<?php echo $row['event_id'];?>">  


  //       var option= {target: '#loadcontent',url:url,type:'POST',data: $('#fileaddformid').serialize()};
  //       $('#fileaddformid').ajaxSubmit(option);
}

else{
alert("Nothing");
}

  }
    
    function searchFunction(){
        
        var input,filter,table,tr,td,i;
        input =document.getElementById("myInput");
        
        filter = input.value.replace(/  +/g, ' ').toUpperCase();
        
        table=document.getElementById("tablestatus");
        tr = table.getElementsByTagName("tr");
        
        for(i=0;i<tr.length;i++){
            
            td = tr[i].getElementsByTagName("td")[1];
            
            if (td) {
                td = td.innerHTML.replace(/  +/g, ' ');
          if (td.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
    } 
        }
        
    }
    
    
</script>
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
 <script>
                        function myFunction() {
                          var dots = document.getElementById("dots");
                          var moreText = document.getElementById("more");
                          var btnText = document.getElementById("myBtn");

                          if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "Read more"; 
                            moreText.style.display = "none";
                          } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "Read less"; 
                            moreText.style.display = "inline";
                          }
                        }
                    </script>
                    

