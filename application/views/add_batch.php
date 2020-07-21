

 
 
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
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('')) {echo "<div class='alert alert-success'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       
 
                    </div>
                </div>

          <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">
            

         
           <div class="panel-heading bg-primary">
              <i class="fa fa-bar-chart-o fa-fw"style="color: #fff"></i> <span style="color: #fff;size: 25px" ><b>Insert New Year of Gradution</b></span>
            </div><br><br>
      
      <form method="post" action="<?php echo base_url()?>index.php/Settings/form_validation_add_batch"  > 
           <?php  
           if($this->uri->segment(2) == "inserted_batch")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
            echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-success">Batch inserted successfully</p></b>
                    </div><br><br>';
                
           }  
            if($this->uri->segment(2) == "notinserted_batch")  
           {  
                
                  echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-danger">Batch not inserted</p></b>
                    </div><br><br>';

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
           <br><br><br>
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
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter new batch / Faculty</label>  
                <input style="width:400px;" type="text" id="amount" class="form-control"  name="quantity" placeholder="Eg:2020" required/> 
                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
           </div>

           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Batch_ID</label>  
                <input  style="width:400px;" type="text" id="amount" class="form-control col-sm-3 col-md-4 col-lg-2 control-label"  name="quantity1" placeholder="4108" required/> 
                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
           </div>
           <br><br><br>
           <div class="form-group">  
                <input  type="submit" name="insert" value="Insert" class="btn btn-primary btn-lg" />
                &nbsp;&nbsp;&nbsp; 
                <input type="reset" name="insert" value="Reset" class="btn btn-success btn-lg" />  
           </div>
                 
           <?php  
           }  
           ?><br>  
      </form> 
     
  </div>

  </div>
   </div>
 </div>
 
 
