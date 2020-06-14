
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
         <div id="page-wrapper">


          <div class="row profile">
            

            
  
      <br /><br /><br />  
      <h2>Insert New Year of Gradution / Faculty </h2><br />  
      <form method="post" action="<?php echo base_url()?>index.php/Settings/form_validation3">  
           <?php  
           if($this->uri->segment(2) == "inserted2")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
                echo '<p class="text-success">Data inserted successfully</p>';  
           }  
            if($this->uri->segment(2) == "notinserted2")  
           {  
                echo '<p class="text-danger">Data not inserted</p>'; 

           }   
           ?>  
           <?php  
           if(isset($user_data))  
           {  
                foreach($user_data->result() as $row)  
                {  
           ?> 

           
           <!-- <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter First Name</label>  
                <input style="width:400px;" type="text" name="FirstName" value="<?php echo $row->FirstName; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("FirstName"); ?></span>  
           </div>  
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Middle Name</label>  
                <input style="width:400px;" type="text" name="MiddleName" value="<?php echo $row->MiddleName; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("MiddleName"); ?></span>  
           </div>
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Last Name</label>  
                <input style="width:400px;" type="text" name="LastName" value="<?php echo $row->LastName; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("LastName"); ?></span>  
           </div>
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Department</label>  
                <input style="width:400px;" type="text" name="course" value="<?php echo $row->course; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("course"); ?></span>  
           </div>
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Year of Graduation</label>  
                <input style="width:400px;" type="text" name="year" value="<?php echo $row->year; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("year"); ?></span>  
           </div>

           <div class="form-group">  
                <input type="hidden" name="hidden_id" value="<?php echo $row->profileId; ?>" />  
                <input type="submit" name="update" value="Update" class="btn btn-info" />  
           </div>  -->  

               
           <?php       
                }  
           }  
           else  
           {  
           ?>  
            <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Select Department</label>  
                <select style="width:400px;" class="chosen-select form-control" id="place"  name="item" data-placeholder="Choose Item" class="col-xs-10 col-sm-5" required>
              <option value="">Select Department</option>
             <?php foreach($request as $key):?>
            <option value="<?php echo $key['AgencyParentID'];?>"> <?php echo $key['name']; ?></option>
            <?php endforeach; ?>
          </select>

                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
           </div>


           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Year of Graduation / Faculty</label>  
                <input style="width:400px;" type="text" id="amount" class="form-control"  name="quantity" placeholder="Eg:2020" required/> 
                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
           </div>

           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter ID (Year of Graduation)</label>  
                <input  style="width:400px;" type="text" id="amount" class="form-control col-sm-3 col-md-4 col-lg-2 control-label"  name="quantity1" placeholder="4108" required/> 
                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
           </div>
           <br><br><br>
           <div class="form-group">  
                <input  type="submit" name="insert" value="Insert" class="btn btn-info  pull-center" />
                &nbsp;&nbsp;&nbsp; <input type="reset" name="insert" value="Reset" class="btn btn-info " />  
           </div>
                 
           <?php  
           }  
           ?>  
      </form> 
     
  </div>

  </div>
   <div class="bg-primary" class="du-newsletter">
      <div class="bg-primary" class="du-newsletter" >
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>
      </div>
    </div>
 
 </body>  
 </html>  
