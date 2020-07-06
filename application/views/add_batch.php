

 
 
 <body>  
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

          <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">
            

         
           <div class="panel-heading" style="background-color: #0a97b0;">
              <i class="fa fa-bar-chart-o fa-fw"style="color: #fff"></i> <span style="color: #fff;size: 25px" ><b>Insert New Year of Gradution</b></span>
            </div><br><br>
      
      <form method="post" action="<?php echo base_url()?>index.php/Settings/form_validation3"  > 
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
            <option value="<?php echo $key['department_ID'];?>"> <?php echo $key['name']; ?></option>
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
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter batch_ID</label>  
                <input  style="width:400px;" type="text" id="amount" class="form-control col-sm-3 col-md-4 col-lg-2 control-label"  name="quantity1" placeholder="Eg:4108" required/> 
                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
           </div>
           <br><br><br>
           <div class="form-group">  
                <input  type="submit" name="insert" value="Insert" class="btn btn-info  pull-center" />
                &nbsp;&nbsp;&nbsp; <input type="reset" name="insert" value="Reset" class="btn btn-info " />  
           </div>
                 
           <?php  
           }  
           ?><br>  
      </form> 
     
  </div>

  </div>
   </div>
 </div>
 <div class="bg-primary" style="margin-top: 147px;">
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>Alumni Management System@2020</p>

                </div>

            </div>
        </div>
      </div>
 
