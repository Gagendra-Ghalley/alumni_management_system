<link href="<?php echo base_url();?>assets/css/cst2.css" rel="stylesheet"/>


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
                                <a style="background-color:transparent"; href="<?php echo base_url();?>index.php/Settings/profile/"> <img class="roundedimage" src="<?php echo base_url();?>assets/img/profile/<?php echo $this->session->userdata('profileImage');?>"/></a>
                            </div>
                             <div style="margin-bottom: 50px;"class="user-info">
                                <div></div>
                                <div class="status" style="margin-bottom: 35px;">
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
                                 <div style="margin-bottom: 35px;">
                                   <!--  <input type="text" placeholder="Remarks" name="statusremarks" value="<?php echo $statusRemarks;?>"> -->
                                   </div>
                                     <div style="margin-bottom: 35px;">
                                    <!-- <input type="submit" class="btn btn-default green" type="button" value="Update Status" class="statusremarks"> -->
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
                       <a href="<?php echo base_url()?>index.php/Settings/profile/">
                            
                      <i class="menu-icon fa fa-caret-right"></i><i class="menu-icon fa fa-caret-right"></i>User Profile </span></a>
                    </li>

                     <li>
                       <a href="<?php echo base_url()?>index.php/Settings/Profilepassword/">
                            
                      <i class="menu-icon fa fa-caret-right"></i><i class="menu-icon fa fa-caret-right"></i>Change your password </span></a>
                    </li>
                  
                     <li>
                        <a href="<?php echo base_url()?>index.php/Settings/updateDetail/"><i class="menu-icon fa fa-caret-right"></i><i class="menu-icon fa fa-caret-right"></i>Add details</a>
                    </li>

                     <li>
                        <a href="<?php echo base_url()?>index.php/ATD/membersearch1/"><i class="menu-icon fa fa-caret-right"></i><i class="menu-icon fa fa-caret-right"></i>Member Search</a>
                    </li>
                   
                   
                
                  
                  
                   
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        

        <!-- end navbar side -->