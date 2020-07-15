        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper" style="color: #111"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
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
                                 
                               
                           
          </div>
          
          
           <div class="col-lg-6 col-lg-3">
          <button style="width: 100%;border: none;"><input type="submit" value="Update" class="btn btn-lg btn-success btn-block "></button>
          <div id="errorsupdate"><?php echo validation_errors();?></div></div>
           </form>

           <form >
               <div class="col-lg-6 col-lg-3">
              <button style="width: 100%;border: none;"> <a href="<?php echo base_url();?>index.php/Settings/viewUsers/" class="btn btn-lg btn-warning btn-block " >Back</a></button>
           </div>
           </form>
             
            


             </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->


 