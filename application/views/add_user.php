

 
       
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

 
                    </div>
                </div>
          <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">
  
      
      <div class="panel-heading bg-primary" >
              <i class="fa fa-bar-chart-o fa-fw" style="color: #fff"></i> <span style="color: #fff" ><b>Insert student data</b></span>
            </div><br>
      <form method="post" action="<?php echo base_url()?>index.php/Settings/form_validation_add_user">  
           <?php  
           if($this->uri->segment(2) == "inserted")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
            echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-success">User inserted Successfully</p></b>
                    </div><br><br>';
               
           }  
           if($this->uri->segment(2) == "notinserted")  
           {  
                echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-danger">User not inserted</p></b>
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
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Middle Name</label>  
                <input style="width:400px;" type="text" name="MiddleName" class="form-control" />  
                <span class="text-danger"><?php echo form_error("MiddleName"); ?></span>  
           </div>  

            <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Last Name</label>  
                <input style="width:400px;" type="text" name="LastName" class="form-control" />  
                <span class="text-danger"><?php echo form_error("LastName"); ?></span>  
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
            <?php endforeach; ?>
          </select>

                <span class="text-danger"><?php echo form_error("Department"); ?></span>  
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
           <?php  
           }  
           ?>  
      </form> 
     
  </div>

  </div>
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