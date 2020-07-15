
<<<<<<< HEAD

 
       
 <body>  
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

=======
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


<<<<<<<< HEAD:application/views/add_user.php
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
 
                    </div>
                </div>
          <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">
  
      
<<<<<<< HEAD
      <div class="panel-heading bg-primary" >
              <i class="fa fa-bar-chart-o fa-fw" style="color: #fff"></i> <span style="color: #fff" ><b>Insert student data</b></span>
            </div><br>
      <form method="post" action="<?php echo base_url()?>index.php/Settings/form_validation_add_user">  
=======
      <div class="panel-heading" style="background-color: #0a97b0">
              <i class="fa fa-bar-chart-o fa-fw" style="color: #fff"></i> <span style="color: #fff" ><b>Insert student data</b></span>
            </div><br>
========
          <div class="row profile">
            

            
  
      <br /><br /><br />  
      <h2>Insert Students Data</h2><br />  
>>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9:application/views/main_view.php
      <form method="post" action="<?php echo base_url()?>index.php/Settings/form_validation1">  
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
           <?php  
           if($this->uri->segment(2) == "inserted")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
<<<<<<< HEAD
            echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-success">User inserted Successfully</p></b>
                    </div><br><br>';
               
           }  
           if($this->uri->segment(2) == "notinserted")  
           {  
                echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-danger">User not inserted</p></b>
                    </div><br><br>';

=======
                echo '<p class="text-success">Data Inserted</p>';  
           }  
           if($this->uri->segment(2) == "updated")  
           {  
                echo '<p class="text-success">Data Updated</p>';  
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
           }  
           ?>  
           <?php  
           if(isset($user_data))  
           {  
                foreach($user_data->result() as $row)  
                {  
           ?> 

           
<<<<<<< HEAD
           
=======
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

>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
               
           <?php       
                }  
           }  
           else  
           {  
           ?>  
<<<<<<< HEAD
           <br><br><br>
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter CID</label>  
                <input style="width:400px;" type="text" name="cid" class="form-control"   required />  
                <span class="text-danger"><?php echo form_error("cid"); ?></span>  
           </div>  
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Your Name</label>  
                <input style="width:400px;" type="text" name="FirstName" class="form-control"  required />  
                <span class="text-danger"><?php echo form_error("FirstName"); ?></span>  
           </div>
          <!--  <div class="form-group">  
=======
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter CID</label>  
                <input style="width:400px;" type="text" name="cid" class="form-control" />  
                <span class="text-danger"><?php echo form_error("cid"); ?></span>  
           </div>  
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter First Name</label>  
                <input style="width:400px;" type="text" name="FirstName" class="form-control" />  
                <span class="text-danger"><?php echo form_error("FirstName"); ?></span>  
           </div>
           <div class="form-group">  
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Middle Name</label>  
                <input style="width:400px;" type="text" name="MiddleName" class="form-control" />  
                <span class="text-danger"><?php echo form_error("MiddleName"); ?></span>  
           </div>  

            <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Last Name</label>  
                <input style="width:400px;" type="text" name="LastName" class="form-control" />  
                <span class="text-danger"><?php echo form_error("LastName"); ?></span>  
<<<<<<< HEAD
           </div> -->
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Gender</label>  
                <input style="width:400px;" placeholder="Male/Female" type="text" name="gender" class="form-control"  required/>  
                <span class="text-danger"><?php echo form_error("gender"); ?></span>  
           </div>
            <div class="form-group">  
                <label class="col-sm-3 col-md-8 col-lg-2 control-label">Select Department</label>  
                <select  style="width:400px;" class="form-control" class="option3 searchdropdown" onchange="selectdepartment()" id="parent"  name="parent" data-placeholder="Select Department"  required>
              <option value="">Select Department</option>
             <?php foreach($request as $key):?>
            <option value="<?php echo $key['AgencyParentID'];?>"> <?php echo $key['name']; ?></option>
=======
           </div>
<<<<<<<< HEAD:application/views/add_user.php
            <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Select Department</label>  
                <select  style="width:400px;" class="option3 searchdropdown" onchange="selectagency()" id="parent"  name="parent" data-placeholder="Select Department"  required>
              <option value="">Select Department</option>
             <?php foreach($request as $key):?>
            <option value="<?php echo $key['department_ID'];?>"> <?php echo $key['name']; ?></option>
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
            <?php endforeach; ?>
          </select>

                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
<<<<<<< HEAD
           </div>
              <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Select Year of graduation</label> 
                
                <select style="width:400px;" name="agency" class="form-control" id="agency" class="option3 searchdropdown" onchange="selectbatch()" required>
              <option value="" required>- Select Year  - </option>
              <!-- <?php foreach($request1 as $key):?>
            <option value="<?php echo $key['AgencyID'];?>"> <?php echo $key['name']; ?></option>
            <?php endforeach; ?> -->
      
              </select>        
                <!-- <select class="chosen-select form-control" id="place"  name="AgencyID" data-placeholder="Choose Item" style="width:400px;" required>
              <option value="">Select Year</option>
             <?php foreach($request1 as $key):?>
            <option value="<?php echo $key['AgencyID'];?>"> <?php echo $key['name']; ?></option>
            <?php endforeach; ?>
          </select> -->

                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
           </div>

           <div class="form-group">  
               <button style="border:none" ><input  type="submit" name="insert" value="Insert" class="btn btn-info btn-lg"  />
                &nbsp;&nbsp;&nbsp;</button> 
                <button style="border: none"><input type="reset" name="insert" value="Reset" class="btn btn-success btn-lg" /></button>
           </div>      
=======
========
                   <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Department</label>  
                <input style="width:400px;" type="text" name="AgencyParentID" class="form-control" />  
                <span class="text-danger"><?php echo form_error("AgencyParentID"); ?></span>  
>>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9:application/views/main_view.php
           </div>
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter year of Graduation</label>  
                <input style="width:400px;" type="text" name="AgencyID"  class="form-control" />  
                <span class="text-danger"><?php echo form_error("AgencyID"); ?></span>  
           </div>

           <div class="form-group">  
                <input type="submit" name="insert" value="Insert" class="btn btn-info" />  
           </div>       
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
           <?php  
           }  
           ?>  
      </form> 
     
  </div>

  </div>
<<<<<<< HEAD
</div>
</div>
  
   
<script>
function mySearchFunction() 
{
    var search=$('#search').val();
        
        $.post('<?php echo base_url();?>index.php/Settings/search/',
    {
        search:search
        
        },
        function(data) 
        {
        
        $('#employees').html(data);
        }); 
    
    
}


   function selectdepartment()
{
   var parent=$('#parent').val();
        
        $.post('<?php echo base_url();?>index.php/Settings/get_dropdownlistforuser_selectyear/',
    {
        parent:parent
        
        },
        function(data) 
        {
        
        $('#agency').html(data);
        }); 
}

function selectbatch()
{
   var agency=$('#agency').val();
        
        $.post('<?php echo base_url();?>index.php/Settings/get_dropdownlistforuser/',
    {
        agency:agency
        
        },
        function(data) 
        {
        
        $('#employees').html(data);
        }); 
}


//  $(document).ready(function(){  
//            $('.delete_data').click(function(){  
//                 var id = $(this).attr("id");  
//                 if(confirm("Are you sure you want to delete this?"))  
//                 {  
//                      window.location="<?php echo base_url()?>index.php/Settings/delete_data/"+id;  
//                 }  
//                 else  
//                 {  
//                      return false;  
//                 }  
//            });  
//       });  

</script>
=======
<<<<<<<< HEAD:application/views/add_user.php
</div>
</div>
  <div class="bg-primary" style="margin-top: 150px;">
========
   <div class="bg-primary" class="du-newsletter">
      <div class="bg-primary" class="du-newsletter" >
>>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9:application/views/main_view.php
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
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
