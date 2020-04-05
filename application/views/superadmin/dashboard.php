
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="page-header">Dashboard</h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
      

            <div class="row ">
                <!--quick info section -->
               <!--  <?php if($pendingLeave>0){?><a href="<?php echo base_url();?>index.php/Leave/approvePending/"><?php }?> -->
                <div class="col-lg-6">
                   <div class="panel panel-primary border">
                    <div class="panel-body green text-center" style="height: 140px">
                    <a href="<?php echo base_url()?>index.php/Settings/addevents/">
                        <i class="fa  fa-calendar-o fa-5x"></i>&nbsp;<br/><b><?php echo $pendingLeave;?> </b><br/>
                        <strong>Add event</strong>

                       
                  </div>
                  <div class="panel-footer">
                            <span class="panel-eyecandy-title"><strong><b style=" color:green; font-size: 18px">Add event</b></strong> 
                            </span><i class="fa fa-plus-circle fa-2x"  style="margin-left: 460px;color: green"></i></a>
                        </div>
                </div>

              </div>
            
             
               <!--  <?php if($pendingLeave>0){?></a><?php }?>
                <?php if($latecount>0){?><a href="<?php echo base_url();?>index.php/ATD/lateToday/"><?php }?> -->
                <div class="col-lg-6">
                    <div class="panel panel-primary border ">
                    <div class="panel-body blue text-center" style="height: 140px">
                      <a href="<?php echo base_url()?>index.php/Settings/viewevent/">
                        <i class="fa  fa-pencil-square-o fa-5x"></i>&nbsp;<br/><b><?php echo $latecount;?> </b><br/><strong>Edit Event</strong>
                    </div>
                     <div class="panel-footer">
                      
                            <span class="panel-eyecandy-title"><strong><b style=" color:blue; font-size: 18px">Edit Event</b></strong>
                            </span><i class="fa fa-plus-circle fa-2x" style="margin-left: 460px;color: blue"></i></a>
                        </div>
                  </div>
                </div>
               

                <div class="col-lg-6">
                     <div class="panel panel-primary border ">
                    <div class="panel-body yellow text-center"style="height: 140px" >
                       <i class="fa fa-user fa-5x" aria-hidden="true"></i>&nbsp;<br/><b><?php echo $leavecount;?></b><br/><strong>Add User</strong>

                    </div>
                    <div class="panel-footer">
                            <span class="panel-eyecandy-title"><strong><b style="color:#97839c; font-size:18px">Add User</b></strong>
                            </span><i class="fa fa-plus-circle fa-2x"  style="margin-left: 460px;color: #97839c"></i>
                        </div>
                </div>
               </div>
                <div class="col-lg-6">
                   <div class="panel panel-primary border ">
                    <div class="panel-body red text-center"style="height: 140px">
                        <i class="fa fa-trash-o fa-5x"></i>&nbsp;<br/><b><?php echo $notused;?></b><br/><strong>Delete User</strong>
                    </div>
                    <div class="panel-footer panel-red border">
                            <span class="font-weight-bold"><strong><b style="color: red; font-size:18px">Delete Users</b></strong>
                            </span><i class="fa fa-plus-circle fa-2x" style="margin-left: 460px;color: red"></i>

                        </div>

                </div>
              </div>
             
            </div>

              
               <div class="row">
                <div class="col-lg-12 ">
                                    <div class="table-responsive ">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead class="bg-primary">
                                                <tr>
                                                    <th>Users</th>
                                                    <th>Batch</th>
                                                    <th>Usage</th>
                                                    <th>Registration Date</th>
                                                    
                                                    
                                                   
                                                </tr>

                                            </thead>
                                             <tbody>   

                                                <tr>
                                                
                                                  <th>   
                                                 <a class="effect-bubba" href="#"><img src="<?php echo base_url();?>assets/img2/president.png" style="height:50px;width: 50px;border-radius: 50%" /></a> <b>Nima Wangchuk Tamang</b>
                                                  </th>
                                                    <th>
                                                      2016
                                                    </th>

                                                  <th class="effect-bubba">
                                                    <div class="progress">
                                                      <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 50%;height: 15px" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                  </th>

                                                  <th>
                                                    20/01/2020
                                                  </th>
                                                </tr>
                                                
                                                     
                                    

                                            </tbody>
                                             <tbody>   

                                                <tr>
                                                 
                                                  <th>
                                                    
                                                 <a class="effect-bubba" href="#"><img src="<?php echo base_url();?>assets/img2/president.png" style="height:50px;width: 50px;border-radius: 50%" /></a> <b>gagendra ghalley</b>
                                                  </th>
                                                   <th>
                                                    2017
                                                    </th>
                                                  <th class="effect-bubba">
                                                    <div class="progress ">
                                                      <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 70%;height: 15px" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                  </th>
                                                  <th>
                                                    03/02/2020
                                                  </th>
                                                </tr>
                                                
                                                     
                                    

                                            </tbody>
                                             <tbody>   

                                                <tr>
                                                 
                                                  <th>
                                                    
                                                 <a class="effect-bubba" href="#"><img src="<?php echo base_url();?>assets/img2/president.png" style="height:50px;width: 50px;border-radius: 50%" /></a> <b>Pema deki</b>
                                                  </th>
                                                   <th>
                                                    2017
                                                    </th>
                                                  <th class="effect-bubba">
                                                    <div class="progress ">
                                                      <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 70%;height: 15px" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                  </th>
                                                  <th>
                                                    03/02/2020
                                                  </th>
                                                </tr>
                                                
                                                     
                                    

                                            </tbody>
                                             <tbody>   

                                                <tr>
                                                 
                                                  <th>
                                                    
                                                 <a class="effect-bubba" href="#"><img src="<?php echo base_url();?>assets/img2/president.png" style="height:50px;width: 50px;border-radius: 50%" /></a> <b>Leki Yangden</b>
                                                  </th>
                                                   <th>
                                                    2017
                                                    </th>
                                                  <th class="effect-bubba">
                                                    <div class="progress ">
                                                      <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 70%;height: 15px" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                  </th>
                                                  <th>
                                                    03/02/2020
                                                  </th>
                                                </tr>
                                                
                                                     
                                    

                                            </tbody>
                                             <tbody>   

                                                <tr>
                                                 
                                                  <th>
                                                    
                                                 <a class="effect-bubba" href="#"><img src="<?php echo base_url();?>assets/img2/president.png" style="height:50px;width: 50px;border-radius: 50%" /></a> <b>gagendra ghalley</b>
                                                  </th>
                                                   <th>
                                                    2017
                                                    </th>
                                                  <th class="effect-bubba">
                                                    <div class="progress ">
                                                      <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 70%;height: 15px" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                  </th>
                                                  <th>
                                                    03/02/2020
                                                  </th>
                                                </tr>
                                                
                                                     
                                    

                                            </tbody>

                                           
                                        </table>
                                    </div>

                                </div>
                 
               </div>
            
                 

    </div>
  </div>

    <!-- end wrapper -->
    <div class="bg-primary" class="du-newsletter">
            <div class="bg-primary" class="du-newsletter">
            <div class="container">

               

                <div class="col-md-12">

                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>

        </div>
 
 
