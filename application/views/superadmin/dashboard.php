
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
            </div>
      

           <div id="page-wrapper" style="margin-left: 0px">
            
        
        
        <div class="col-lg-12"style="margin-top: 10px;">
                <!--quick info section -->
               <!--  <?php if($pendingLeave>0){?><a href="<?php echo base_url();?>index.php/Leave/approvePending/"><?php }?> -->
                <div class="col-lg-6">
                   <div class="panel panel-primary border">
                    <div class="panel-body green text-center" style="height: 140px">
                    <a href="<?php echo base_url()?>index.php/Settings/addevents/">
                        <i class="fa fa-user fa-5x"></i>&nbsp;<br/><b><!-- <?php echo $pendingLeave;?> --> </b><br/>
                        <strong>Add event</strong>

                       
                  </div>
                  <div class="panel-footer">
                            <span class="panel-eyecandy-title"><strong><b style=" color:green; font-size: 18px">Add event</b></strong> 
                            </span><i class="fa fa-plus-circle fa-2x"  style="margin-left: 470px;color: green"></i></a>
                        </div>
                </div>

              </div>
            
             
               <!--  <?php if($pendingLeave>0){?></a><?php }?>
                <?php if($latecount>0){?><a href="<?php echo base_url();?>index.php/ATD/lateToday/"><?php }?> -->
                <div class="col-lg-6">
                    <div class="panel panel-primary border ">
                    <div class="panel-body blue text-center" style="height: 140px">
                      <a href="<?php echo base_url()?>index.php/Settings/viewevent/">
                        <i class="fa  fa-clock-o fa-5x"></i>&nbsp;<br/><b><!-- <?php echo $latecount;?> --> </b><br/><strong>Edit Event</strong>
                    </div>
                     <div class="panel-footer">
                      
                            <span class="panel-eyecandy-title"><strong><b style=" color:blue; font-size: 18px">Edit Event</b></strong>
                            </span><i class="fa fa-plus-circle fa-2x" style="margin-left: 470px;color: blue"></i></a>
                        </div>
                  </div>
                </div>
               

                <div class="col-lg-6">
                     <div class="panel panel-primary border ">
                    <div class="panel-body yellow text-center"style="height: 140px" >
                       <i class="fa  fa-calendar-o fa-5x" aria-hidden="true"></i>&nbsp;<br/><b><!-- <?php echo $leavecount;?> --></b><br/><strong>Add User</strong>

                    </div>
                    <div class="panel-footer">
                            <span class="panel-eyecandy-title"><strong><b style="color:#97839c; font-size:18px"> <a href="<?php echo base_url()?>index.php/Settings/membersearch3/"><i class="fa fa-user">&nbsp</i>Add User</a></b></strong>
                            </span><i class="fa fa-plus-circle fa-2x"  style="margin-left: 470px;color: #97839c"></i>
                        </div>
                </div>
               </div>
                <div class="col-lg-6">
                   <div class="panel panel-primary border ">
                    <div class="panel-body red text-center"style="height: 140px">
                        <i class="fa fa-user fa-5x"></i>&nbsp;<br/><b><!-- <?php echo $notused;?> --></b><br/><strong></strong>
                    </div>
                    <div class="panel-footer panel-red border">
                            <span class="font-weight-bold"><strong><b style="color: red; font-size:18px"><a href="<?php echo base_url();?>index.php/Settings/viewUsers/">Manage users</a></b></strong>
                            </span><i class="fa fa-plus-circle fa-2x" style="margin-left: 470px;color: red"></i>

                        </div>

                </div>
              </div>
             
            </div>

              
           
            
           </div>
           </div>      

    

    <!-- end wrapper -->
    <div class="bg-primary" style="margin-top: 130px;">
           
            <div class="container">

               

                <div class="col-md-12">

                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>

 
 
