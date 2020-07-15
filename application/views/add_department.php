
  
  <div id="page-wrapper">

           <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
<<<<<<< HEAD
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper" style="color: #111" ><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
=======
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
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
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">

<<<<<<< HEAD
           <div class="panel-heading bg-primary">
=======
           <div class="panel-heading" style="background-color: #0a97b0;">
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
              <i class="fa fa-bar-chart-o fa-fw"style="color: #fff"></i> <span style="color: #fff;size: 25px" ><b>Insert new department</b></span>
            </div><br>
          <div class="row profile">  
  
       
      
<<<<<<< HEAD
      <form method="post" action="<?php echo base_url()?>index.php/Settings/form_validation_add_department">  
           <?php  
           if($this->uri->segment(2) == "inserted_department")  
=======
      <form method="post" action="<?php echo base_url()?>index.php/Settings/form_validation2">  
           <?php  
           if($this->uri->segment(2) == "inserted1")  
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
<<<<<<< HEAD
            echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-success">Department inserted successfully</p></b>
                    </div><br><br>';

                
           }  
              if($this->uri->segment(2) == "notinserted_department")  
           {  
                
                echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-danger">Department not inserted</p></b>
                    </div><br><br>';
=======
                echo '<p class="text-success">Data inserted successfully</p>';  
           }  
              if($this->uri->segment(2) == "notinserted1")  
           {  
                echo '<p class="text-danger">Data not inserted</p>'; 
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
                <label class="col-sm-3 col-md-4 col-lg-2 control-label"><b>Enter new Department</b></label>  
=======

             <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label"><b>Enter Department</b></label>  
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
                <input style="width:400px;" placeholder="Eg: B.E Information Technology" type="text" name="FirstName" class="form-control" required/>  
                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
           </div>
           <div class="form-group">  
<<<<<<< HEAD
                <label class="col-sm-3 col-md-4 col-lg-2 control-label"><b>Enter Department_ID</b></label>  
=======
                <label class="col-sm-3 col-md-4 col-lg-2 control-label"><b>Enter ID(Department)</b></label>  
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
                <input style="width:400px;" placeholder="Eg: 410" type="text" name="cid" class="form-control" required />  
                <span class="text-danger"><?php echo form_error("id"); ?></span>  
           </div>  
         
           <div class="form-group ">  
<<<<<<< HEAD
               <button style="border: none" > <input  type="submit" name="insert" value="Insert" class="btn btn-primary btn-lg"/></button>
                &nbsp;&nbsp;&nbsp;
                <button style="border: none"> <input type="reset" name="insert" value="Reset" class="btn btn-success btn-lg" /></button> 
=======
                <input  type="submit" name="insert" value="Insert" class="btn btn-info  pull-center " />
                &nbsp;&nbsp;&nbsp; <input type="reset" name="insert" value="Reset" class="btn btn-info " /> 
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
           </div>
                 
           <?php  
           }  
           ?>  
      </form> 
     
  </div>
</div>
</div>
</div>
  </div>
<<<<<<< HEAD
   
=======
<<<<<<<< HEAD:application/views/add_department.php
   <div class="bg-primary" style="margin-top: 147px;">
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>Alumni Management System@2020</p>

                </div>

            </div>
        </div>
      </div>
========
   
>>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9:application/views/main_view1.php
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
 
 
