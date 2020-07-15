	 
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
    

     <div id="page-wrapper" style="margin-left: 0px" style="background-color: #f5f5f5">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">
         
          <br />
          <?php

          if($this->session->flashdata("message"))
          {
            echo "
            <div class='alert alert-success'>
              ".$this->session->flashdata("message")."
            </div>
            ";
          }
          ?>
          
            <div class="panel-heading bg-primary col-md-8">
              <i class="fa fa-bar-chart-o fa-fw" style="color: #fff"></i> <span style="color: #fff" >Password Reset</span>
            </div>
                       
        
          <br />
            <br />          
          <form method="post" method="post" action="<?php echo base_url(); ?>index.php/sendemail/send1" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-8">
             
                <div class="form-group">
                  <!-- <label>Enter Registered cid/Student_no</label>
                   <input type="text" name="cid" class="form-control" placeholder="Enter registered cid" required /><br><br> -->
                  <label>Enter Registered email</label>
                  <input type="email" name="password" class="form-control" placeholder="Enter registered email" required />

                  
                </div>

             
              </div>
            </div>
            <div class="form-group" align="left">
              <input type="submit" name="submit" value="Reset password" class="btn btn-success" />
            </div>
          </form>

        </div>
     
   
  </div>

  </div>
</div>


      
   

 

