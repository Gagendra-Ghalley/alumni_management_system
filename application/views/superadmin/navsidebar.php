<link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet"/>


        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                 <img class="roundedimage" src="<?php echo base_url();?>assets/img/profile/<?php echo $this->session->userdata('profileImage');?>"/>
                            </div>
                            <div class="user-info">
                                <div></div>
                                <div class="status">
                                 <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/ATD/atdchangestatus" class="form-group">
                        			<div style="margin-bottom: 5px;">
                                	<!-- <select name="status">
                                		<option selected>
                                			<?php $status=$this->session->userdata('status');$statusRemarks=$this->session->userdata('statusRemarks');
                                       echo $status;?>
                                		</option>
                                		<?php if($status!='In Office'){?><option value="In Office">In Office</option>
                                      <?php } ?>
                                        <?php if($status!='Meeting'){?><option value="Meeting">Meeting</option>
                                      <?php } ?>
                                        <?php if($status!='Seminar'){?><option value="Seminar">Seminar</option>
                                      <?php } ?>
                                        <?php if($status!='Training'){?><option value="Training">Training</option>
                                      <?php } ?>
                                		
                                	</select> -->
                                </div>
                                <div style="margin-bottom: 15px;">
                                   <!--  <input type="text" placeholder="Remarks" name="statusremarks" value="<?php echo $statusRemarks;?>" class="statusremarks"> -->
                                   </div>
                                   <div style="margin-bottom: 75px;">
                                    <!-- <input type="submit" class="btn btn-default green" type="button" value="Update Status"> -->
                                   </div>
                                   </form>
                                    
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                   
                    <li>
                        <a href="<?php echo base_url()?>index.php/ATD/dashboard/"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                      <li>
                                    <a href="<?php echo base_url()?>index.php/Settings/Registered_user/"><i class="fa fa-user">&nbsp</i>Registered Users</a>
                                </li>
                     <li>
                        <a href="<?php echo base_url()?>index.php/Settings/sendemail/"><i class="fa  fa-envelope-o"></i>&nbsp;Send Email</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()?>index.php/Settings/passwordemail/"><i class="fa fa-key"></i>&nbsp;Forget password</a>
                    </li>

                   <!--  <li>
                        <a href="<?php echo base_url()?>index.php/Leave/admin_profile/"><i class="glyphicon glyphicon-user"></i>&nbspProfile</a>
                        
                      
                    </li> -->
                   <!--  <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i> Leave<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li>
                                <a href="<?php echo base_url()?>index.php/Leave/requestLeave/">Request leave</a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url()?>index.php/Leave/approvePending/">Approve leave</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url()?>index.php/Leave/approvedRecord/">Leave Record</a>
                            </li></a>
                            </li>
                        </ul>
                    
                    </li> -->
                    <li>
                       <a href="<?php echo base_url()?>index.php/Settings/Profilepassword/">
                            
                      <i class="fa fa-key">&nbsp</i>Change your password </a>
                    </li>
                    
                     <li>
                        <a href="<?php echo base_url()?>index.php/Settings/addevents/"><i class="fa  fa-calendar-o"></i>&nbsp;Add Events</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Settings/viewevent"><i class="fa fa-pencil-square-o">&nbsp</i>Edit events</a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url()?>index.php/TelDirectory/viewDirectory/"><i class="fa fa-phone fa-fw"></i>Telephone Directory</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/Settings/viewHolidays/"><i class="fa fa-search fa-fw"></i>Holidays</span></a>
                        
                        
                    </li> -->

                   
                    <li>
                        <a href="#"><i class="fa fa-file-text"></i>&nbspManage User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>index.php/Settings/viewUsers/"><i class="fa fa-file-text"></i>&nbspManage users</a>
                            </li>

                             <li>
                        
                                 <a href="<?php echo base_url()?>index.php/Settings/membersearch1/"   ><i class="fa fa-files-o">
                                
                              </i><i class="menu-icon fa fa-caret-right"></i>&nbspAdd User From CSV</a>
                            </li>

                             
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Settings/membersearch3/"><i class="fa fa-user">&nbsp</i>Add User</a>
                                </li>
                               <!--     <li>
                                    <a href="<?php echo base_url()?>index.php/Settings/membersearch5/"><i class="fa fa-user">&nbsp</i>Add Department</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Settings/membersearch6/"><i class="fa fa-user">&nbsp</i>Add Year of Graduation</a>
                                </li> -->


                                </ul>

                            </li>


                            <li>
                        <a href="#"><i class="fa fa-file-text"></i>&nbspManage Department<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                             <li>
                                <a href="<?php echo base_url();?>index.php/Settings/viewUsers2/"><i class="fa fa-file-text"></i>&nbspManage Department</a>
                            </li>

                              <li>
                                <a href="<?php echo base_url();?>index.php/Settings/viewUsers1/"><i class="fa fa-file-text"></i>&nbspManage Year of Graduation</a>
                            </li>
                                
                                   <li>
                                    <a href="<?php echo base_url()?>index.php/Settings/membersearch5/"><i class="fa fa-user">&nbsp</i>Add Department</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Settings/membersearch6/"><i class="fa fa-user">&nbsp</i>Add Year of Graduation</a>
                                </li>

                                



                                </ul>

                            </li>
                              <li>
                                    <a href="<?php echo base_url()?>index.php/Settings/student_detail/"><i class="fa fa-user">&nbsp</i>Student Details</a>
                                </li>

                                


                                        <!-- <li>
                                <a href="<?php echo base_url();?>index.php/Settings/assignAgencies/">Assign agency heads</a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url();?>index.php/Settings/assignParentAgencies/">Assign Dept heads</a>
                            </li>
                            	
                            <li>

                                <a href="<?php echo base_url();?>index.php/Settings/viewevent">Edit events</a>
                            </li> -->
                            

                     <!-- <li>
                        <a href="<?php echo base_url()?>index.php/Settings/membersearch2/"><i class="menu-icon fa fa-caret-right"></i><i class="menu-icon fa fa-caret-right"></i>Delete User</a>
                    </li>
 -->
                   <!--  <li>
                        <a href="<?php echo base_url()?>index.php/Settings/membersearch3/"><i class="menu-icon fa fa-caret-right"></i><i class="menu-icon fa fa-caret-right"></i>Add User</a>
                    </li> -->
                                            <!-- </li> -->

                             
                           
                              
                     <!--  <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Training<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>index.php/Training/viewTraining/">View training</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Training/addTraining/">Add training</a>
                            </li>
 -->
                            

                           
                      
                        <!-- second-level-items -->
                    <!-- </li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i>Dispatch_admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                                <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>index.php/Settings/view_ods_dashboard/">add</a>
                            </li>
                           

                             -->

                     
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        

        <!-- end navbar side -->