
        <!--  page-wrapper -->
        <div id="page-wrapper">

         <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>
             <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div>
 

          

 <?php $row=$employee->row(0);
    $cid=$row->department_ID;
    ?>
        
          <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">

           
            <div class="row">
                <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/Settings/updateEmployee2/<?php echo $cid;?>/" class="form-group">
                         
                <div class="col-md-12 col-lg-12 col-sm-12">
 
                    <div class="col-lg-12">
                       
                              
                              <!--    <div class="form-group">
                                     <div style="color:black">Year of Graduation(ID):</div><input class="form-control" placeholder="Department ID" name="agencyid" type="text" value="<?php echo $row->AgencyID;?>">
                                </div> -->
                                     <div style="color:black"><h3>Department:</h3></div><input class="form-control" placeholder="Department" name="agencyparentid" type="text" value="<?php echo $row->name;?>">
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
          <br>
          
           <div class="col-lg-6">
          <input type="submit" value="Update" class="btn btn-lg btn-success btn-block"/>
          <div id="errorsupdate"><?php echo validation_errors();?></div></div>
           </form>
           
           <form >
               <div class="col-lg-6">
               <a href="<?php echo base_url();?>index.php/Settings/managedepartment/" class="btn btn-lg btn-warning btn-block">Back</a>
           </div>
         
            


             </div>
        <!-- end page-wrapper -->

    </div>
  </div>
</div>
</div>
<div class="bg-primary" style="margin-top: 147px;">
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>Alumni Management System@2020</p>

                </div>

            </div>
        </div>
      </div>
 


 