
    <div id="page-wrapper">
      <div class="row">
               <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>
             <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div>
      <div class="row" style="margin-left: 15px">
        <div class="col-lg-10 "style="background-color: #e0dede" >
          
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
          <div class="panel-heading" style="background-color: #0a97b0">
              <span style="color: #fff" ><b>Email</b></span>
            </div><br>
          <br />          
          <form method="post" action="<?php echo base_url(); ?>index.php/sendemail/send" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
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

               <!--  <div class="form-group">
                  <label>CC</label>
                 

                  <textarea type="email" name="email2" class="form-control" placeholder="Eg: 0216518.cst@rub.edu.bt, 0216506.cst@rub.edu.bt (For multiple email address use comma , )" class="form-control"  rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label>BCC</label>
            

                  <textarea type="email" name="email" class="form-control" placeholder="Eg: 0216518.cst@rub.edu.bt, 0216506.cst@rub.edu.bt (For multiple email address use comma , )" class="form-control"  rows="4"></textarea>
                </div>  -->
          <div class="form-group">
                  <label>Attachment<i class="fa fa-paperclip fa-2x"></i></label>
                  <input type="file" name="resume"  accept=".doc,.docx, .pdf, .xls, .gif, .jpg, .png, .jpeg" required />
                </div>
                
            
                <div class="form-group">
                  <label>Message</label>
                  <textarea name="additional_information" placeholder="Type your message here" class="form-control" required rows="8"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group" align="left">
              <input type="submit" name="submit" value="Send mail" class="btn btn-info" />
            </div>
          </form>
        </div>
      </div>
    </div>
  <!-- <div class="bg-primary">
            <div class="row">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>Alumni Management System@2020</p>

                </div>

            </div>
        </div>
      </div>
 -->