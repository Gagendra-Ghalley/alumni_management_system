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
            



    <div class="container emp-profile">
            
                <div class="row">
                    <div class="col-lg-4">
                        <div class="profile-img ">
                            
                             <?php foreach($user->result() as $row){?>
        <img style="height: 200px;width: 200px ;border-radius: 50%" src="<?php echo base_url();?>assets/img/profile/<?php echo $row->profile;?>" class="img-rounded img-responsive">
      
        <?php }?>
                            
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row col-md-9">
                        <div class="profile-head">
                                                       
                                    <h2>User Profile</h2>
                                <ul>   
                                   
                                
                                <div class="col-md-8">
                    <div class="alert alert-info">
                        <?php foreach($user->result() as $row){?>
                        <h5>Name:<?php echo $row->Name;?></h5>
                        <h5>Occupation : <?php echo $row->occupation;?></h5>
                        <h5>Organization: <?php echo $row->organization;?></h5>
                        <h5>Office Addresss: <?php echo $row->office_address;?></h5>
                        <h5>Email Address: <?php echo $row->email;?></h5>
                        <h5>Contact Address: <?php echo $row->contact_address;?></h5>
                        <h5>College: <?php echo $row->college;?></h5>
                        <h5>Master: <?php echo $row->master;?></h5>
                        <h5>PhD: <?php echo $row->phD;?></h5>
                        <h5>Other : <?php echo $row->other;?></h5>
                        <h5>Research Paper: <?php echo $row->research_paper;?></h5>
                        <h5>Journal: <?php echo $row->journal;?></h5>
                        <h5>Books:<?php echo $row->book;?></h5>
                        <h5>Seminar: <?php echo $row->seminar;?></h5>
                        <h5>Training: <?php echo $row->training;?></h5>
                         <h5>Workshop: <?php echo $row->workshop;?></h5>

                        <?php } ?>


                    </div>
                        </div>

                         </ul>
                                    
                        
                                  
                    </div>
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



