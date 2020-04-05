


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
                                 <!-- <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/ATD/atdchangestatus" class="form-group">
                          <div style="margin-bottom: 5px;">
                                	<select name="status">
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
                                		
                                	</select>
                               </div>
                                 <div style="margin-bottom: 5px;">
                                    <input type="text" placeholder="Remarks" name="statusremarks" value="<?php echo $statusRemarks;?>" class="statusremarks">
                                   </div>
                                     <div style="margin-bottom: 5px;">
                                    <input type="submit" class="btn btn-default green" type="button" value="Update Status">
                                    </div>
                                   </form> -->
                                    
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li><br><br><br>
                   
                    <li>
                        <a href="<?php echo base_url()?>index.php/ATD/dashboard/"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/Leave/admin_profile/"><i class="fa fa-user">&nbsp</i>Profile</a>
                        
                      
                    </li>
                     <li>
                       <a href="#"><i class="fa fa-edit fa-fw"></i> Event<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li>
                                <a href="<?php echo base_url()?>index.php/Leave/addevent/">Add Events</a>
                            </li>
                          
                             <li>
                                <a href="<?php echo base_url()?>index.php/Leave/deleteevent/">Delete Events</a>
                            </li></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i> Users<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                            <li>
                                <a href="<?php echo base_url()?>index.php/Leave/adduser/">Add Users</a>
                            </li>
                            <li>
                              <a href="<?php echo base_url()?>index.php/Leave/deleteuser/">Delete Users</a>
                            </li>
                             </a>
                            </li>
                        </ul>
                    </li>
                   
					<li>
                        
                    </li>
                    
                   
                   
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        

        <!-- end navbar side -->