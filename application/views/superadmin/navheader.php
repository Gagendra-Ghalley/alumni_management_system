 <link href="<?php echo base_url();?>assets/css/cst.css" rel="stylesheet" />
 <head>
   
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
  <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url();?>assets/css/cst.css" rel="stylesheet"/>

</head>

<body onload="startTime()">
   </br></br>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="box navbar navbar-default navbar-fixed-top" role="navigation" >
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1><img src="<?php echo base_url();?>assets/img/cstlogo2.png"><font size="4">CST Alumni Management System</font></h1>
                </a>
            </div>
            



      
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li >
                    <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger"><?php  if($unreadm>0){echo $unreadm;}?></span><i class="fa fa-envelope fa-2x"></i>
                    </a> -->
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu ">
                        <!-- <?php foreach($messages->result() as $message): ?>
                        <li>
                            <a href="<?php echo base_url();?>index.php/Messages/message/<?php echo $message->mId;?>">
                                <div>
                                    <strong><span class=" label label-danger"><?php echo $message->Sender;?></span></strong>
                                    <span class="pull-right text-muted">
                                        <em><?php echo $message->mTimestamp;?></em>
                                    </span>
                                </div>
                                <div><?php echo substr($message->mDetails, 0,40);?>...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php endforeach; ?> -->
                        <!-- <li>
                            <a class="text-center" href="<?php echo base_url();?>index.php/Messages/viewAll/">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li> -->
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

              <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-2x"></i>
                    </a>
                    <!-- dropdown user-->
<!-- 
                    <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="user-profile-lite.html">
                      <i class="material-icons">&#xE7FD;</i> Profile</a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="../admin-signin.html">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div> -->
                    <ul class="dropdown-menu dropdown-user">
                      
                        <li class="divider"></li>
                         <li   class="fa fa-angle-right"><span class="pull-right"><a href="<?php echo base_url();?>index.php/ATD/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a></span></li>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        
        <!-- end navbar top -->
    </div>

</body>



                   