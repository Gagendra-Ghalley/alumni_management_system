        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
<<<<<<< HEAD
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper" style="color: #111"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
=======
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
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
    $cid=$row->cid;
    ?>
        

<<<<<<< HEAD
            <div id="page-wrapper" style="background-color: #f5f5f5;margin-left: 0px">
                <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/Settings/updatealumni/<?php echo $cid;?>/" class="form-group">
                         
                <div class="col-lg-10">
    
                 
                       
                              <div class="form-group">
                               
                                    <div style="color:black"><b>First Name:</b></div><input class="form-control" placeholder="FirstName" name="fname" type="text" value="<?php echo $row->FirstName;?>" autofocus>
                                </div>
                              
                                 <div class="form-group">
                                     <div style="color:black"><b>Gender:</b><div><input class="form-control" placeholder="M/F" name="gender" type="text" value="<?php echo $row->gender;?>">
                                </div>
                                
                       
                       
                    
        
          
              <div class="form-group">
                 <div class="form-group">
                                 <div style="color:black"><b>Role:</b></div>    <input class="form-control" placeholder="roleId" name="roleId" type="text" value="<?php echo $row->roleId;?>">
                                </div>
                                 <div class="form-group">
                                     <div style="color:black"><b>Year of Graduation:</b></div><input class="form-control" placeholder="AgencyID" name="agencyid" type="text" value="<?php echo $row->AgencyID;?>">
                                </div>
                                     <div style="color:black"><b>Department:</b></div><input class="form-control" placeholder="AgencyParentID" name="agencyparentid" type="text" value="<?php echo $row->AgencyParentID;?>">
                                </div>
                                 <div class="form-group">
                                    <div style="color:black"></div> <input class="form-control" placeholder="AgencyMainParentID" name="agencymainparentid" type="hidden" value="<?php echo $row->AgencyMainParentID;?>">
                                </div>
                                 
                               
=======
            <div class="row">
                <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/Settings/updateEmployee/<?php echo $cid;?>/" class="form-group">
                         
                <div class="col-lg-6">
 
   <div class="panel-body login">
                       
                              <div class="form-group">
                               
                                    <div class="text-label">First Name:</div><input class="form-control" placeholder="FirstName" name="fname" type="text" value="<?php echo $row->FirstName;?>" autofocus>
                                </div>
                                <div class="form-group">
                                     <div class="text-label">Middle Name:</div><input class="form-control" placeholder="MiddleName" name="mname" type="text" value="<?php echo $row->MiddleName;?>">
                                </div>
                              <div class="form-group">
                                  <div class="text-label">Last Name:</div>   <input class="form-control" placeholder="LastName" name="lname" type="text" value="<?php echo $row->LastName;?>">
                                </div>
                                 <!-- <div class="form-group">
                                     <div class="text-label">Gender:</div><input class="form-control" placeholder="Gender" name="Gender" type="text" value="<?php echo $row->Gender;?>">
                                </div>
                                 <div class="form-group">
                                    <div class="text-label">Date of Birth:</div> <input class="form-control" placeholder="DD/MM/YYYY" name="dob" type="text" value="<?php echo $row->DateOfBirth;?>">
                                </div>
                                <div class="form-group">
                                     <div class="text-label">Telephone:</div><input class="form-control" placeholder="Telephone" name="telephone" type="text" value="<?php echo $row->telephone;?>">
                                </div> -->
                                 <div class="form-group">
                                     <div class="text-label">Email:</div><input class="form-control" placeholder="Email" name="email" type="text" value="<?php echo $row->email;?>">
                                </div>
                                <!--  <div class="form-group">
                                     <div class="text-label">Mobile</div><input class="form-control" placeholder="Mobile" name="mobile" type="text" value="<?php echo $row->Mobile;?>">
                                </div> -->
                       
                       
                    </div>
                   
          


        </div>
        
          <div class="col-lg-6">
             <div class="panel-body login">
              <div class="form-group">
                 <div class="form-group">
                                 <div class="text-label">RoleId:</div>    <input class="form-control" placeholder="roleId" name="roleId" type="text" value="<?php echo $row->roleId;?>">
                                </div>
                                 <div class="form-group">
<<<<<<<< HEAD:application/views/editalumni.php
                                     <div style="color:black">Year of Graduation:</div><input class="form-control" placeholder="batch_ID" name="batch_ID" type="text" value="<?php echo $row->batch_ID;?>">
                                </div>
                                     <div style="color:black">Department:</div><input class="form-control" placeholder="department_ID" name="department_ID" type="text" value="<?php echo $row->department_ID;?>">
                                </div>
                                 <div class="form-group">
                                    <div style="color:black"></div> <input class="form-control" placeholder="departmentParent_ID" name="agencymainparentid" type="hidden" value="<?php echo $row->departmentParent_ID;?>">
========
                                     <div class="text-label">Agency ID:</div><input class="form-control" placeholder="AgencyID" name="agencyid" type="text" value="<?php echo $row->AgencyID;?>">
                                </div>
                                     <div class="text-label">Parent Agency ID:</div><input class="form-control" placeholder="AgencyParentID" name="agencyparentid" type="text" value="<?php echo $row->AgencyParentID;?>">
                                </div>
                                 <div class="form-group">
                                    <div class="text-label">Agency Main Parent ID:</div> <input class="form-control" placeholder="AgencyMainParentID" name="agencymainparentid" type="text" value="<?php echo $row->AgencyMainParentID;?>">
>>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9:application/views/editfullemployee.php
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
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
                           
          </div>
          
          
<<<<<<< HEAD
           <div class="col-lg-6 col-lg-3">
          <button style="width: 100%;border: none;"><input type="submit" value="Update" class="btn btn-lg btn-success btn-block "></button>
=======
           <div class="col-lg-6">
          <input type="submit" value="Update" class="btn btn-lg btn-success btn-block"/>
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
          <div id="errorsupdate"><?php echo validation_errors();?></div></div>
           </form>

           <form >
<<<<<<< HEAD
               <div class="col-lg-6 col-lg-3">
              <button style="width: 100%;border: none;"> <a href="<?php echo base_url();?>index.php/Settings/viewUsers/" class="btn btn-lg btn-warning btn-block " >Back</a></button>
=======
               <div class="col-lg-6">
               <a href="<?php echo base_url();?>index.php/Settings/viewUsers/" class="btn btn-lg btn-warning btn-block">Back</a>
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
           </div>
           </form>
             
            


             </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->


 