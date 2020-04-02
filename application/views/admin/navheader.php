<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CST Alumni Management System</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <!--  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" /> -->
      <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
     <!--  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" /> -->
       <link href="css/bootstrap.min.css" rel="stylesheet">  
       <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet"/>
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

</head>



</br></br>
    <!--  wrapper -->
   
        

<body onload="startTime()">

   <div id="wrapper" >
    <!--  wrapper -->

 

        <!-- navbar top -->
        <nav class="box navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<<<<<<< HEAD
                <a class="navbar-brand " href="#">
                    <h1 class="lead"><img src="<?php echo base_url();?>assets/img/cstlogo2.png"><font size="3">CST Alumni Management System</font></h1></a>
                
=======
                 <a class="navbar-brand " href="#">
                    <h1 class="lead"><img src="<?php echo base_url();?>assets/img/cstlogo2.png"><font size="3">CST Alumni Management System</font></h1></a>
>>>>>>> 9555942de391d748067e48354d19517c351f9091
            </div>
            <!-- end navbar-header -->
            
            <ul class="nav navbar-top-links navbar-right">
<<<<<<< HEAD
                <!-- main dropdown -->
              <!--   <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger"><?php  if($unreadm>0){echo $unreadm;}?></span><i class="fa fa-envelope fa-2x"></i>
                    </a> -->
                    <!-- dropdown-messages -->
                    <!-- ul class="dropdown-menu dropdown-messages">
                    	<?php foreach($messages->result() as $message): ?>
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
                        <?php endforeach; ?>
                        <li>
                            <a class="text-center" href="<?php echo base_url();?>index.php/Messages/viewAll/">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul> -->
                    <!-- end dropdown-messages -->
               <!--  </li> -->
=======
              
>>>>>>> 9555942de391d748067e48354d19517c351f9091

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-2x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
<<<<<<< HEAD
                        
                        <li class="divider"></li>
=======
                       <!--  <li><a href="<?php echo base_url();?>index.php/Settings/profile/"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li> -->
                       <!--  <li class="divider"></li> -->
>>>>>>> 9555942de391d748067e48354d19517c351f9091
                        <li><a href="<?php echo base_url();?>index.php/ATD/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        
<<<<<<< HEAD
        <!-- end navbar top -->
    </div>
</body>
=======

        <!-- end navbar top -->
    



        <!-- end navbar top -->

>>>>>>> 9555942de391d748067e48354d19517c351f9091
