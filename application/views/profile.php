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
              
    <div id="page-wrapper" style="margin-left: 0px">

   <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #e0dede">

      <div class="row">
         <div class="col-md-12 col-lg-12 col-sm-12 center">
            <div class="profile-img ">
               <?php foreach($user->result() as $row){?>
               <img style="height: 150px;width: 150px ;border-radius: 50%" src="<?php echo base_url();?>assets/img/profile/<?php echo $row->profile;?>" class="img-rounded img-responsive text-center  img-thumbnail">
               <h3 class="text-center">User Profile</h3>
               <?php }?>
            </div>
         </div>
      </div>
   </div>
  
   <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5" >
    
      <div class="alert alert-white">
         <?php foreach($user->result() as $row){?>
         <h4>Name:<?php echo $row->Name;?></h4>
         <h4>Occupation : <?php echo $row->occupation;?></h4>
         <h4>Organization: <?php echo $row->organization;?></h4>
         <h4>Office Addresss: <?php echo $row->office_address;?></h4>
         <h4>
         Email Address: <?php echo $row->email;?></h5>
         <h4>Current Address: <?php echo $row->contact_address;?></h4>
         <h4>College: <?php echo $row->college;?></h4>
         <h4>Master: <?php echo $row->master;?></h4>
         <h4>PhD: <?php echo $row->phD;?></h4>
         <h4>Other : <?php echo $row->other;?></h4>
         <h4 >Research Paper:<span style="white-space:pre-line;"><?php echo $row->research_paper;?></span></h4>
         <h4 style="white-space:pre-line;">Journal: <?php echo $row->journal;?></h4>
         <h4 style="white-space:pre-line;">Books:<?php echo $row->book;?></h4>
         <h4 style="white-space:pre-line;">Seminar: <?php echo $row->seminar;?></h4>
         <h4 style="white-space:pre-line;">Training: <?php echo $row->training;?></h4>
         <h4 style="white-space:pre-line;">Workshop: <?php echo $row->workshop;?>&nbsp;</h4>
         <?php } ?>
      </div>
   </div>
</div>
</div>
</div>


<div class="bg-primary">
   <div class="container">
      <div class="col-lg-12">
         <div class="col-md-6 col-sm-12">
            <p>&copy Alumni Management System</p>
         </div>
      </div>
   </div>
</div>
