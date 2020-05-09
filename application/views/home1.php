<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave and Attendance System</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
      <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
      <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />

</head>


<body class="body-Login-back" >

    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="nav navbar-header">



                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <div class="nav navbar-brand navbar-right" >

                    <h5><img src="<?php echo base_url();?>assets/img/cstlogo2.png"> &nbsp;&nbsp;<font size="4" color="#BAD5F5">CST Alumni Management System</font> </h5>
                </div>
            </div>

                   

                    <ul class="nav navbar-top-links navbar-right">

                        <li>
                             <a href="<?php echo base_url();?>index.php/ATD/login1/"><input type="submit" style="height:50px;width:150px" value="Login" class="btn btn-lg btn-success btn-block"/></a>
               
                </li>
                <!-- end main dropdown -->
            </ul>
        </nav>
                </div>



                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
      
        
       
  <div class="row" >
                <!-- Page Header -->
                <div class="col-md-11">
                     <h3 class="p ge-header"><font size="5" color="transparent"> </font></h3>   <div class="clockwrapper"><div id="clock"></div><?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>

               <div class="col-md-12" >
                <!--quick info section -->
               
                <div class="col-md-4"  >
                    <div class="alert alert-danger text-center" style="height:350px;">
                        <i class="fa fa-exclamation-circle fa-3x"></i>&nbsp;<br/><br/>Events
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="alert alert-success text-center"  style="height:350px;">
                        <i class="fa fa-clock-o fa-3x"></i>&nbsp;<br/><br/><a href="<?php echo base_url();?>index.php/ATD/register/"><input type="submit" style="height:50px;width:300px;font-size:30px" value="Register"> </a>
                    </div>
                </div>
                
                <div class="col-md-4">
                     <div class="alert alert-info text-center"  style="height:350px;">
                       <i class="fa  fa-calendar-o fa-3x" aria-hidden="true"></i>&nbsp;<br/><br/><a href="<?php echo base_url();?>index.php/ATD/membersearch/"><input type="submit" style="height:50px;width:300px;font-size:30px" value="Member Search"> </a>

                    </div>
                </div>

                 
                <div class="col-md-4">
                    <div class="alert alert-danger text-center"  style="height:350px;">
                        <i class="fa fa-exclamation-circle fa-3x"></i>&nbsp;<br/><br/>About us 

                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="alert alert-success text-center"  style="height:350px;">
                        <i class="fa  fa-clock-o fa-3x"></i>&nbsp;<br/><br/>Login
                    </div>
                </div>
                
                <div class="col-md-4">
                     <div class="alert alert-info text-center"  style="height:350px;">
                       <i class="fa fa-calendar-o fa-3x" aria-hidden="true"></i>&nbsp;<br/><br/>Donate

                    </div>
                </div>
               


                <!--end quick info section -->
            </div>


            
    
    
<!-- Modal -->

</body>

</html>


