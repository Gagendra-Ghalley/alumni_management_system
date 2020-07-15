
        <!--  page-wrapper -->
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
 
            
            <br>
            <div class="row">
               
 
                  
            <form onSubmit="return false;">

                <div class="col-md-8" style="margin-top: 10px; margin-left: 40px">
                    <?php  
           if($this->uri->segment(2) == "deleted")  
           {  
           
                echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-success">User has been deleted successfully</p></b>
                    </div><br><br>';

            }  
<<<<<<< HEAD

             if($this->uri->segment(2) == "deleted3")  
           {  
           
                echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-success">Selected batch user deleted successfully</p></b>
                    </div><br><br>';

            }  


           if($this->uri->segment(2) == "updated")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
            echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-success">User updated successfully</p></b>
                    </div><br><br>';
               
           }  
           if($this->uri->segment(2) == "notupdated")  
           {  
                echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-danger">User not updated</p></b>
                    </div><br><br>';

           }  
         
=======
             if($this->uri->segment(2) == "notdeleted")  
           {  
           
                echo ' <div class="col-lg-12 panel-body">
                    <b><p class="text-danger">User not deleted</p></b>
                    </div><br><br>';

            } 
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
           
           ?> </div>
         
                <div class="col-md-6 pull-center" style="margin-top: 10px; margin-left: 40px">
           
                <div class="input-group">
                 
                    <input class="form-control" id="search" placeholder="Search by CID ">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="mySearchFunction()"><i class="fa fa-search"></i></button>
                    </span>
                </div>
              </div>
            </form>

           
          
        </div>
                
               
            </div><br>


        
     
            <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">

    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            
                            <i>!</i> 
                           
                            <div class="pull-right">
                                
                               <form>
                                
                                 <label for="ParentAgency">Department </label>
                                 <select id="parent" name="Parent" class="option3 searchdropdown"  onchange="selectdepartment()">
                                <option value="0" class="searchdropdown" selected>Select one</option>
                                <?php foreach($parent->result() as $row){?>
                                    <option class="searchdropdown" value="<?php echo $row->department_ID;?>"><?php echo $row->name;?></option><?php }?>
                                </select>
                                 <label for="AgencyName">Year</label>
 <select name="Agency" id="agency" class="option3 searchdropdown" onchange="selectbatch()">
      <option value="">- Select Year  - </option>
     
      
    </select>       
                                
                               </form>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table tablescroll table-bordered table-hover table-striped" >
                                             <tbody id="employees">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                  <th style="width:300px">Name</th>
                                            
                                            <th style="width:150px">CID / Student_id</th>
                                        
                                
                                <th style="width:150px">Department</th>
                                <th style="width:150px">Gender</th>
                                <th style="width:160px">Year of Graduation / Faculty</th>
                                <th style="width:160px">Delete</th>
                                <th style="width:160px">Deleteall</th>
                                                </tr>
                                            </thead>
                                           
                                          

                                            </tbody>
                                        </table>
                                        
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->
                  
                 

                </div>

            </div>
<<<<<<< HEAD
=======
        </div>
    </div>

>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
        </div>
    </div>
<<<<<<< HEAD

        </div>
        <!-- end page-wrapper -->
=======
    <div class="bg-primary" style="margin-top: 94px;">
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>Alumni Management System@2020</p>

                </div>

            </div>
        </div>
      </div>
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9

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
        
<<<<<<< HEAD
        $.post('<?php echo base_url();?>index.php/Settings/get_dropdownlistforuser/',
=======
        $.post('<?php echo base_url();?>index.php/Settings/manageuser_dropdownlist/',
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
    {
        agency:agency
        
        },
        function(data) 
        {
        
        $('#employees').html(data);
        }); 
}

 $(document).ready(function(){  
           $('.delete_data').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Are you sure you want to delete this?"))  
                {  
                     window.location="<?php echo base_url()?>index.php/Settings/delete_data/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  

</script>

 