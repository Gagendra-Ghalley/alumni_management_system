
<html>  
 <head>  
    <title>Insert</title>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

   
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />   -->
   <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url();?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/cst.css" rel="stylesheet"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

 </head>  
  
 
 
 <body>  
         <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                     <h3 class="page-header"><font size="5" color="#FFF">Manage User</font></h3> 
                <!--End Page Header -->
            </div>
          </div>

          <div class="row profile">
            

            
 <div class="container">  
      <br /><br /><br />  
      <h3 align="center">Insert Students Data</h3><br />  
      <form method="post" action="<?php echo base_url()?>index.php/Settings/form_validation1">  
           <?php  
           if($this->uri->segment(2) == "inserted")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
                echo '<p class="text-success">Data Inserted</p>';  
           }  
           if($this->uri->segment(2) == "updated")  
           {  
                echo '<p class="text-success">Data Updated</p>';  
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
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Middle Name</label>  
                <input style="width:400px;" type="text" name="MiddleName" class="form-control" />  
                <span class="text-danger"><?php echo form_error("MiddleName"); ?></span>  
           </div>  

            <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter Last Name</label>  
                <input style="width:400px;" type="text" name="LastName" class="form-control" />  
                <span class="text-danger"><?php echo form_error("LastName"); ?></span>  
           </div>
            <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter MainAgency</label>  
                <input style="width:400px;" type="text" name="AgencyMainParentID" class="form-control" />  
                <span class="text-danger"><?php echo form_error("AgencyMainParentID"); ?></span>  
           </div>
            <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">ParentAgency</label>  
                <input style="width:400px;" type="text" name="AgencyParentID" class="form-control" />  
                <span class="text-danger"><?php echo form_error("AgencyParentID"); ?></span>  
           </div>
           <div class="form-group">  
                <label class="col-sm-3 col-md-4 col-lg-2 control-label">Agency</label>  
                <input style="width:400px;" type="text" name="AgencyID"  class="form-control" />  
                <span class="text-danger"><?php echo form_error("AgencyID"); ?></span>  
           </div>

           <div class="form-group">  
                <input type="submit" name="insert" value="Insert" class="btn btn-info" />  
           </div>       
           <?php  
           }  
           ?>  
      </form> 
     
      <br /><br />  
      <h3>Student Details</h3><br />
      <!-- <div class="panel-body"> -->
      <div class="table-responsive">
        <div class="col-lg-10">
         
 <table class="table table-bordered ">
         <div class="row">
                <div class="col-lg-12">

  
 <div class="panel panel-primary">
                        <div class="panel-heading">
                          
                            <i class="fa fa-bar-chart-o fa-fw"></i>Users
                           
                            <div class="pull-right">
      
      
                <tr>  
                     <th >Sl.no</th>  
                     <th >Name</th>  
                     <th >CID</th>  
                     <th >Department</th>
                     <th >Email</th>
                     <th >Year of Graduation</th>  
                      
                </tr>
            <?php $counter=1; ?>  
           <?php  
           if($fetch_data->num_rows() > 0)  
           {  

                foreach($fetch_data->result() as $row)  
                {  
           ?>  

          
                <tr> <td><?php echo $counter;   ?></td> 
                     
                     <td style="width: 150px;"><?php echo $row->name; ?></td> 
                     <td style="width: 150px;"><?php echo $row->cid; ?></td> 
                     <td style="width: 150px;"><?php echo $row->ParentAgency; ?></td>
                     <td style="width: 150px;"><?php echo $row->Email; ?></td>
                     <td style="width: 150px;"><?php echo $row->Agency; ?></td> 
                    <!--  <td style="width: 150px;"><?php echo $row->year; ?></td> --> 
                     <!--  <td style="width: 150px;"><?php echo $row->course; ?></td> 
                     <td style="width: 150px;"><?php echo $row->year; ?></td>   
                     <td style="width: 150px;"><a href="#" class="delete_data" id="<?php echo $row->cid; ?>">Delete</a></td>  --> 
                     
                </tr> 
                <?php $counter++; ?> 
           <?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="5">No Data Found</td>  
                </tr>  
           <?php  
           }  
           ?>  
           </table>  
      </div>  
    </div>
  </div>
</div>
  </div>
  </div>

      <!-- <script>  
      $(document).ready(function(){  
           $('.delete_data').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Are you sure you want to delete this?"))  
                {  
                     window.location="<?php echo base_url()?>Settings/delete_data/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
      </script>   -->
 </div> 
  
</div>

 </body>  
 </html>  
