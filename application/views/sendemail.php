<!DOCTYPE html>
<html>
  <head>
    <title>Alumni Management System</title>
    
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <br /> <br /> <br /> 
    <div class="container">
      <div class="row">
        <div class="col-md-8" style="margin:0 auto; float:none;">
          <h3 align="center">Alumni Management System</h3>
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
          <h4 align="center">Email</h4>
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
            <div class="form-group" align="center">
              <input type="submit" name="submit" value="Send Message" class="btn btn-info" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

