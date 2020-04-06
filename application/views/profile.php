 <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/bootstrap.min1.css">
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/cst6.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <br>
           
            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>


 
                    </div>
                </div>
                
            </div>
            



    <div class="container">
            
                <div class="row">
                    <div class="col-md-12 col-lg-11 col-sm-12 ">
                        <div class="profile-img ">
                            
                             <?php foreach($user->result() as $row){?>
        <img style="height: 150px;width: 150px ;border-radius: 50%" src="<?php echo base_url();?>assets/img/profile/<?php echo $row->profile;?>" class="img-rounded img-responsive text-center  img-thumbnail">
        <h3 class="text-center">User Profile</h3>
      
        <?php }?>
                            
                        </div>
                    </div>

    </div>
                    <br>
                    
                        <div class="col-md-12 col-lg-11 col-sm-12 img-thumbnail">
                
                    <div class="alert alert-white">
                        <?php foreach($user->result() as $row){?>
                        <h4>Name:<?php echo $row->Name;?></h4>
                        <h4>Occupation : <?php echo $row->occupation;?></h4>
                        <h4>Organization: <?php echo $row->organization;?></h4>
                        <h4>Office Addresss: <?php echo $row->office_address;?></h4>
                        <h4>Email Address: <?php echo $row->email;?></h5>
                        <h4>Current Address: <?php echo $row->contact_address;?></h4>
                        <h4>College: <?php echo $row->college;?></h4>
                        <h4>Master: <?php echo $row->master;?></h4>
                        <h4>PhD: <?php echo $row->phD;?></h4>
                        <h4>Other : <?php echo $row->other;?></h4>
                        <h4>Research Paper: <?php echo $row->research_paper;?></h4>
                        <h4>Journal: <?php echo $row->journal;?></h4>
                        <h4>Books:<?php echo $row->book;?></h4>
                        <h4>Seminar: <?php echo $row->seminar;?></h4>
                        <h4>Training: <?php echo $row->training;?></h4>
                         <h4>Workshop: <?php echo $row->workshop;?></h4>

                        <?php } ?>


                    </div>
                        </div>
                       

                  
                </div>
              
                  
        </div>
      
   
     

 <div class="bg-primary" class="du-newsletter">
            <div class="container">

               

                <div class="col-md-6">

                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>

  </div>



