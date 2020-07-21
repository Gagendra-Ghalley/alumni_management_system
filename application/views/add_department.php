
  
  <div id="page-wrapper">

           <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper" style="color: #111" ><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
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
              <i class="fa fa-bar-chart-o fa-fw"style="color: #fff"></i> <span style="color: #fff;size: 25px" ><b>Insert new department</b></span>
            </div><br>
          <div class="row profile">  
  
       
      
      <form method="post" action="<?php echo base_url()?>index.php/Settings/form_validation_add_department">  
           <?php  
           if($this->uri->segment(2) == "inserted_department")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
            echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-success">Department inserted successfully</p></b>
                    </div><br><br>';

                
           }  
              if($this->uri->segment(2) == "notinserted_department")  
           {  
                
                echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-danger">Department not inserted</p></b>
                    </div><br><br>';

           }    
           ?>  
           <?php  
           if(isset($user_data))  
           {  
                foreach($user_data->result() as $row)  
                {  
           ?> 

           
          

               
           <?php       
                }  
           }  
           else  
           {  
           ?>  
           <br><br><br>
             <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label"><b>Enter new Department</b></label>  
                <input style="width:400px;" placeholder="Eg: B.E Information Technology" type="text" name="FirstName" class="form-control" required/>  
                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
           </div>
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label"><b>Enter Department_ID</b></label>  
                <input style="width:400px;" placeholder="Eg: 410" type="text" name="cid" class="form-control" required />  
                <span class="text-danger"><?php echo form_error("id"); ?></span>  
           </div>  
         
           <div class="form-group ">  
               <button style="border: none" > <input  type="submit" name="insert" value="Insert" class="btn btn-primary btn-lg"/></button>
                &nbsp;&nbsp;&nbsp;
                <button style="border: none"> <input type="reset" name="insert" value="Reset" class="btn btn-success btn-lg" /></button> 
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
   
 
 
