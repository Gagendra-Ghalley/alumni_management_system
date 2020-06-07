	 <html>  
 <head>  
    <title>Insert</title>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

   
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />   -->
   <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
   
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url();?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

 </head>  
  
 
 
 <body>  

 	<!DOCTYPE html>
<html>
  <head>
    <title>Email with Attachment </title>
    
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
          <h4 align="center">Password Reset</h4>
          <br />          
          <form method="post" method="post" action="<?php echo base_url(); ?>index.php/sendemail/send1" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
             
                <div class="form-group">
                  <label>Enter Registered cid/Student_no</label>
                   <input type="text" name="cid" class="form-control" placeholder="Enter registered cid" required /><br><br>
                  <label>Enter Registered email</label>
                  <input type="email" name="password" class="form-control" placeholder="Enter registered email" required />

                  
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


