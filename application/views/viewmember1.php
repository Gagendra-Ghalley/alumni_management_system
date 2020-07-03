

<!--  page-wrapper -->
<div  style="width: 900px;height: 1200px" >

    <div class="row" style="height: 900px">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Profile</h1>
        </div>


        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
               
            </div>

          
            

            <div class="row profile"  style=" margin-left: 100px;width: 800px">
                <div  class="col-md-12" style="margin-top: 70px;margin-left: 100px;height: 900px">


                 <?php $count=1; foreach($checkissue as $row): ?>

            <tr>
                <br>
                <td><?php echo $count++;?></td><br>
                
               <b>Name:</b> <td><?php echo $row['FirstName'];?>
              
                 
               </td><br>
                <b>Department:</b>
<td> <?php 
                                                    $ids=explode(", ", $row['AgencyParentID']);//bpas_user_profiles
                                                    foreach ($ids as $key => $AgencyParentID) { //id
                                                      echo $this->db->get_where('bpas_master_agencyparent',array('AgencyParentID' =>trim($AgencyParentID)))->row()->name ;//tablename,id,name
                                                    }
                                                    

                                                   ?>
                                                    
                                                   
                                                   </td> 
              <br>
               <b>Email:</b> <td><?php echo $row['email'];?></td>
                    <?php endforeach; ?></tr> 
                </div>
                   
              

            </div>

          

        </div>
      
        <!--End Page Header -->
    </div>

</div>
        
           <div class="bg-primary">
            <div class="container">

               

                <div class="col-md-6">

                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>


    



       
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.easing.1.3.js"></script>

<!-- Feature box equal height JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.equalheights.js"></script>
<!-- UI bottom to top JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.ui.totop.js"></script>
<!-- Subscription JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/sForm.js"></script>
<!-- Animation JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/device.min.js"></script>
<!-- Menu JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/flexy-menu.js"></script>
<!-- Text rotator JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.simple-text-rotator.min.js"></script>
<!-- Smooth Scroll JS -->
<script type="text/javascript" src="j<?php echo base_url();?>assets/js1/library/smoothscroll.js"></script>

<!-- Testimonila JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/library/testimonials.js"></script>
<!-- Custom script -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js1/main.js"></script>