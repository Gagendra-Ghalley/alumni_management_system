

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
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('')) {echo "<div class='alert alert-success'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       

 
                    </div>
                </div>

     

            
     <div id="page-wrapper" style="margin-left: 0px">
     
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

          <div class="panel-heading bg-primary col-md-12">
              <span style="color: #fff" ><b>Email</b></span>
            </div><br>

          <br />          
          <form method="post" action="<?php echo base_url(); ?>index.php/sendemail/send" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-7" style="margin-left: 30px;">
                <div class="form-group">
                  <label>Enter subject</label>
                  <input type="text" name="name" placeholder="Enter subject" class="form-control" required />
                </div>
                <!-- <div class="form-group">
                  <label>Enter Address</label>
                  <textarea name="address" placeholder="Enter Address" class="form-control" required></textarea>
                </div> -->
                <div class="form-group">
                  <label>Send Email to</label>
                <!--   <input type="email" name="email" class="form-control" placeholder="Send Email to" required /> -->

                  <textarea type="email" name="email" class="form-control" placeholder="Eg: 0216518.cst@rub.edu.bt, 0216506.cst@rub.edu.bt (For multiple email address use comma , )" class="form-control" required rows="4"></textarea>
                </div>

              
            
                <div class="form-group">
                  <label>Message</label>
                  <textarea name="additional_information" placeholder="Type your message here" class="form-control" required rows="8"></textarea>
                </div>
              </div>
            </div>

            

            <div class="form-group" align="center">
              <input type="submit" name="submit" value="Send Mail" class="btn btn-info btn-lg" />

            </div>
          </form>
       
      </div>

    </div>
  </div>
  </div>



      

