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
<br>
	
<div class="du-current-news center bg-secondary">
    <div class="container img-thumbnail">
      <div class="card-title text-left bold">UP COMMING EVENT</div><br>
       <?php foreach($eventdetail as $row): ?>
        <div class="row padding">
            <div class="col-lg-6 col-md-12 col-sm-12"data-wow-delay="0.2s" >
                <div class="card">
                 
                    <span class="img-thumbnail"><img class="card-imd-top-top" src="<?php echo base_url();?>assets/img/event/<?php echo $row['image'];?>" style="height: 200px;width: 500px" ></span>
                </div>
            </div>
            <div class="col-md-4 col-md-12 col-sm-12" >
                <div class="card">
                     <p class="text-primary"><b>Description</b></p>
                 
               
<table>
                
                          <b><?php echo $row['date'];?></b>
                          <br>
                          <h3><?php echo $row['eventname'];?><br></h3>
                          <tr><?php echo $row['event'];?><br></tr></table>
                         
                  
                </div>
            </div>
            <div class="col-md-7 col-sm-3 " >
                

                    <div class="" >
                               

                    <button style="height:60px;width:95px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Now</font> </a>

                                </button> 
                      
                   

                        
                                   <button class="btn btn-default" style="height:70px;width:120px;font-size:15px;font-family:georgia;text-shadow: 1px 1px 1px #111">  
                                        <p><font color="black">
                                          <?php echo $row['event1'];?>
                                       
                                       <b>Member(s) <br> Interested</b></font></p>
                                          </button><br>

                              
            </div>
        </div><?php endforeach; ?>

            <!-- <div class="col-lg-2 col-md-12 col-sm-12 " >
                
                    
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
               
            </div> -->

           <div class="col-md-10 col-sm-12">
      

     <br>
                        <?php foreach($editdetail as $row): ?>

<!-- <div class="du-current-news center bg-secondary"> -->
    <div class="container img-thumbnail">
        <div class="row padding">
           <div class="col-lg-12 col-md-12 col-sm-12"data-wow-delay="0.2s" >
                <div class="card">
                 <div class="col-md-5 col-sm-12">

<span class="img-thumbnail"><img class="card-imd-top-top" src="<?php echo base_url();?>assets/img/event/<?php echo $row['image'];?>" style="height: 200px;width: 500px" ></span>

                  
</div>
                  <p class="text-primary"><b>Description</b></p>
                 
               
<table>
                
                          <b><?php echo $row['date'];?></b>
                          <br>
                          <h3><?php echo $row['eventname'];?><br></h3>
                          <tr><?php echo $row['event'];?><br></tr></table>
                         
                          
              <div class="col-md-7 col-sm-3 " >
                

                    <div class="" >
                               

                    <button style="height:60px;width:95px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Now</font> </a>

                                </button> 
                      
                   

                        
                                   <button class="btn btn-default" style="height:70px;width:120px;font-size:15px;font-family:georgia;text-shadow: 1px 1px 1px #111">  
                                        <p><font color="black">
                                          <?php echo $row['event1'];?>
                                       
                                       <b>Member(s) <br> Interested</b></font></p>
                                          </button><br>

                              
            </div>
        </div>










                    </div>
                        </div></div></div>  <?php endforeach; ?> 
                        <!--   <p class="text-bold text-center text-justify" style="font-family:georgia; color:black; font-size: 15px">Faculty Development program cum workshop on climate Across the curriculum. Educational Resource for Teacher's organized by center for Disater Risk Reducation<span id="dots">...</span> <span id="more"> and community development studies (CDRR & CDS) college of science and Technology, Royal University of Bhutan and Commission of Education and outreach, international association of seismology.Support student abd our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College, awhether you just graduated and started new job or contiue with your higher education, your alumni association is here for you. Let us be a partner in your success. ISupport student abd our community, Even a small gift can make a big impact on generations so come and change lives. Give to CST College.upport student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College.upport student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College.upport student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College</span></p> -->
                          
                         <!--  <div class="col-md-10">
                          <button class="btn btn-link text-primary" onclick="myFunction()" id="myBtn"><b>Read more</b></button>
                          </div> -->
                          
              </div>
          </div>

          
    </div>   

              
 </div>
</div>

 <div class="bg-primary" class="du-newsletter">
      <div class="bg-primary" class="du-newsletter" >
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>
      </div>
    </div>

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
                    

