
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
            </div>
      

           <div id="page-wrapper" style="margin-left: 0px">
            
        
        
        <div class="col-lg-12"style="margin-top: 10px;">
                <!--quick info section -->
               <!--  <?php if($pendingLeave>0){?><a href="<?php echo base_url();?>index.php/Leave/approvePending/"><?php }?> -->
                <div class="col-lg-6">
                   <div class="panel panel-primary border">
                    <div class="panel-body green text-center" style="height: 140px">
                    <a href="<?php echo base_url()?>index.php/Settings/passwordemail/">
                        <i class="fa fa-key fa-5x" aria-hidden="true"></i>&nbsp;<br/><br/>
                        <strong>Password Reset</strong>

                       
                  </div>
                  <div class="panel-footer">
                            <span class="panel-eyecandy-title"><strong><b style=" color:green; font-size: 18px">Password Reset</b></strong> 
                            </span><i class="fa fa-plus-circle fa-2x"  style="margin-left: 90%;color: green"></i></a>
                        </div>
                </div>

              </div>
            
             
               <!--  <?php if($pendingLeave>0){?></a><?php }?>
                <?php if($latecount>0){?><a href="<?php echo base_url();?>index.php/ATD/lateToday/"><?php }?> -->
                <div class="col-lg-6">
                    <div class="panel panel-primary border ">
                    <div class="panel-body blue text-center" style="height: 140px">
                      <a href="<?php echo base_url()?>index.php/Settings/addevents/">
                        <i class="fa fa-calendar fa-5x" aria-hidden="true"></i>&nbsp;<br/><br/><strong>Manage Event</strong>
                    </div>
                     <div class="panel-footer">
                      
                            <span class="panel-eyecandy-title"><strong><b style=" color:blue; font-size: 18px">Manage Event</b></strong>
                            </span><i class="fa fa-plus-circle fa-2x" style="margin-left: 90%;color: blue"></i></a>
                        </div>
                  </div>
                </div>
               

                <div class="col-lg-6">
                     <div class="panel panel-primary border ">
                    <div class="panel-body yellow text-center"style="height: 140px" >
                       <i class= "fa fa-user fa-5x"aria-hidden="true"></i>&nbsp;<br/><br/><strong>Manage User</strong>

                    </div>
                    <div class="panel-footer">
                            <span class="panel-eyecandy-title"><strong><b style="color:#97839c; font-size:18px"> <a href="<?php echo base_url();?>index.php/Settings/viewUsers/"><i class="fa fa-user">&nbsp</i>Manage User</a></b></strong>
                            </span><i class="fa fa-plus-circle fa-2x"  style="margin-left: 90%;color: #97839c"></i>
                        </div>
                </div>
               </div>
                <div class="col-lg-6">
                   <div class="panel panel-primary border ">
                    <div class="panel-body green text-center"style="height: 140px">
                        <i class="fa fa-user fa-5x"></i>&nbsp;<br/><br/><strong>Manage Department</strong>
                    </div>
                    <div class="panel-footer panel-red border">
                            <span class="font-weight-bold"><strong><b style="color: red; font-size:18px"><a href="<?php echo base_url();?>index.php/Settings/managedepartment/">Manage Department</a></b></strong>
                            </span><i class="fa fa-plus-circle fa-2x" style="margin-left: 90%;color: green"></i>

                        </div>

                </div>
              </div>
             
            </div>

              
           
            
           </div>
           </div>      

    

     <

 
 
