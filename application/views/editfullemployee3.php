
<html>  
 <head>  
   <title>Delete</title>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

   
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />   -->
   <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />

    <!-- <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" /> -->
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
   <!--  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" /> -->

    
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
   

    <!-- Page-Level CSS -->
    <link href="<?php echo base_url();?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
   <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet" />

 </head>  
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit User</h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>

          

 <?php $row=$employee->row(0);
    $cid=$row->AgencyID;
    ?>
        

           
            <div class="row">
                <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/Settings/updateEmployee1/<?php echo $cid;?>/" class="form-group">
                         
                <div class="col-lg-6">
 
   <div class="panel-body login">
                       
                              
                                 <div class="form-group">
                                     <div style="color:black">Year of Graduation(ID):</div><input class="form-control" placeholder="Department ID" name="agencyid" type="text" value="<?php echo $row->AgencyID;?>">
                                </div>
                                     <div style="color:black">Year of Graduation:</div><input class="form-control" placeholder="Department" name="agencyparentid" type="text" value="<?php echo $row->name;?>">
                                </div>
                              
                                 <!-- <div class="form-group">
                                    <div class="text-label">Grade:</div> <input class="form-control" placeholder="Grade" name="grade" type="text" value="<?php echo $row->Grade;?>">
                                </div>
                                
                                 <div class="form-group">
                                     <div class="text-label">Employee Type:</div><input class="form-control" placeholder="EmployeeType" name="etype" type="text" value="<?php echo $row->EmployeeTypeIndex;?>">
                                </div>
                                 <div class="form-group">
                                     <div class="text-label">Employee Status:</div><input class="form-control" placeholder="EmployeeStatus" name="estatus" type="text" value="<?php echo $row->EmployeeStatus;?>">
                                </div>
                                 <div class="form-group">
                                     <div class="text-label">Position Title:</div><input class="form-control" placeholder="PositionTitle" name="positiontitle" type="text" value="<?php echo $row->PositionTitle;?>">
                                </div>
                              
                                 <div class="form-group">
                                     <div class="text-label">Appointment date:</div><input class="form-control" placeholder="AppointmentDate" name="appdate" type="text" value="<?php echo $row->AppointmentDate;?>">
                                </div> -->
                          </div>      
                           
          </div>
          
          
           <div class="col-lg-6">
          <input type="submit" value="Update" class="btn btn-lg btn-success btn-block"/>
          <div id="errorsupdate"><?php echo validation_errors();?></div></div>
           </form>

           <form >
               <div class="col-lg-6">
               <a href="<?php echo base_url();?>index.php/Settings/viewUsers1/" class="btn btn-lg btn-warning btn-block">Back</a>
           </div>
           </form>
             
            


             </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->


 