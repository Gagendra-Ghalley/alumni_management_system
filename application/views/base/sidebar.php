<div id="sidebar" class="sidebar responsive">
    <ul class="nav nav-list">
        <li class="">
            <a href="<?php echo base_url()?>index.php/Settings/view_ods_dashboard/">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
            <b class="arrow"></b>
        </li>
         <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text"> User Management</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
             <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <?php if(("3"==$this->session->userdata('disp_roleID')) And ("ICT"==$this->session->userdata('dipcode') )) {?>
                    <a href="#" onclick="loadPage('<?php echo site_url()?>/usermanagementController/loadUserDetails/adduser')">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add user
                    </a>
                <?php }?>   
                </li> 
                <li class="">
                     <?php if(("3"==$this->session->userdata('disp_roleID')) And ("ICT"==$this->session->userdata('dipcode'))) {?>
                    <a href="#" onclick="loadPage('<?php echo site_url()?>/usermanagementController/listusers/allusers')">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List user
                    </a>
                      <?php }?> 
                </li>   
                <li class="">
                    <?php if(("3"==$this->session->userdata('disp_roleID')) And  ("ICT"==$this->session->userdata('dipcode'))){?>
                    <a href="#" onclick="loadPage('<?php echo site_url()?>/usermanagementController/loadUserDetails/edit')">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Edit user
                    </a>
                     <?php }?> 
                </li> 
                      

                <li class="">
                    <a href="#" onclick="loadPage('<?php echo site_url()?>/Settings/email1/')">
                        <i class="menu-icon fa fa-caret-right"></i>
                    Email
                    </a>
                </li> 

                <li class="">
                    <a href="#" onclick="loadPage('<?php echo site_url()?>/Settings/absent/')">
                        <i class="menu-icon fa fa-caret-right"></i>
                    Never logged in  
                    </a>

                    <a href="#" onclick="loadPage('<?php echo site_url()?>/Settings/singleabsent/')">
                        <i class="menu-icon fa fa-caret-right"></i>
                    Check absentee
                    </a>
                </li>            
            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Dispatch</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="#" onclick="loadPage('<?php echo site_url()?>/Settings/view_dispatch')">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Dispatch
                    </a>
                    <b class="arrow"></b>
                </li>                 
          <!--  </ul> -->
           <!-- <ul class="">-->


            <li class="">
                <a herf="#" onclick="loadPage('<?php echo site_url()?>/Settings/TrackDispatch1')">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Dispatch track
                </a>
                <b class="arrow" ></b>
            </li>
                <li class="">

                  
                        <?php if("3"==$this->session->userdata('disp_roleID')){?>
                                  <a href="#" onclick="loadPage('<?php echo site_url()?>/Settings/add_files/initiatefile')">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Add files name
                                </a>
                        <?php } ?>

                    <b class="arrow"></b>
                </li>   
                 <li class="">
                     <?php if(("3"==$this->session->userdata('disp_roleID')) And ("ICT"==$this->session->userdata('dipcode') )) {?>
                  
                      <!--   <?php //if("3"==$this->session->userdata('disp_roleID')){?> -->
                                  <a href="#" onclick="loadPage('<?php echo site_url()?>/Settings/add_files/initiatesequence')">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Add Sequence number
                                </a>
                        <?php } ?>

                    <b class="arrow"></b>
                </li>                
            </ul>
        </li>
        <li class="">
        <a href="#" class="dropdown-toggle">
                
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">DAK</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>
            <ul class="submenu">

                
                <li class="">


                    <?php if("3"==$this->session->userdata('disp_roleID')){?>
                   <a href="#" onclick="loadPage('<?php echo site_url()?>/Settings/dakgen')"> 
                     

                        <i class="menu-icon fa fa-caret-right"></i>
                        Generate DAK  no
                        </a>
                    <?php }?>
                    
                    <b class="arrow"></b>
                </li>

                <li class="">
                  
                        <?php if("3"==$this->session->userdata('disp_roleID')){?>
                                  <a href="#" onclick="loadPage('<?php echo site_url()?>/Settings/add_files/initiatefile')">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Add files name
                                </a>
                        <?php } ?>

                    <b class="arrow"></b>
                </li>   

                <li class="">
                    <?php if ("3"==$this->session->userdata('disp_roleID')) {?>
                    <a href="#" onclick="loadPage('<?php echo site_url()?>/usermanagementController/Dak')">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add DAK Sequence no
                    </a>
                <?php } ?>
                </li>
  <li class="">
                    <a href="#" onclick="loadPage('<?php echo site_url()?>/UsermanagementController/trackadd')">
                        <i class="menu-icon fa fa-caret-right"></i>
                        forward Document
                    </a>
                </li>

             </ul> 
            </li> 

        <!-- <li class="">
            <a href="#"  onclick="openMessage('<?php echo site_url();?>/Settings/initiatemessage/','all')">
                <i class="menu-icon fa fa-envelope-o"></i>
                <span class="menu-text"> Forward letter </span>
            </a>

            <b class="arrow"></b>
        </li> -->

        <!-- <li class="">
            <a href="#"  onclick="openMessage('<?php echo site_url();?>/Settings/message_dashboard/')">
                <i class="menu-icon fa fa-folder" > </i>
                 

                <span class="menu-text">Forward Message</span>
                
            </a>

            <b class="arrow"></b>
        </li>
 -->
        <li class="">
            <!-- <a href="#" onlclick="openMessage('<?php //echo site_url();?>/UsermanagementController/trackLet/')">
                 -->
            <a href="#"  onclick="openMessage('<?php echo site_url();?>/Settings/trackLet/')">
               <i class=" menu-icon fa fa-search" ></i>

                <span class="menu-text"> Track Document </span>
            </a>
            <b class="arrow"></b>
        </li>
        
        
        <li class="">
           <a href="<?php echo base_url();?>">
                <i class="menu-icon fa fa-dashboard"></i>
                <span class="menu-text"> BPAS Dashboard </span>
            </a>
             <b class="arrow"></b>
        </li>
        
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
