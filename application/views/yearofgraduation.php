
        <!--  page-wrapper -->
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

                <?php
                 if($this->uri->segment(2) == "deleted1")  
           {  
           
                echo ' <div class="col-lg-8 panel-body">
                    <b><p class="text-success">Year of graduation/faculty has been deleted successfully</p></b>
                    </div><br><br>';

            } 
            ?> 
                <div class="col-lg-12">

    
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            
                            <i>!</i>
                           
                            <div class="pull-right">
                                
                               <form >
                                
                                 <label for="ParentAgency">Department </label>
                                 <select id="parent" name="Parent" class="option3 searchdropdown"  onchange="selectagency()">
                                <option value="0" class="searchdropdown" selected>Select one</option>
                                <?php foreach($parent->result() as $row){?>
                                    <option class="searchdropdown" value="<?php echo $row->department_ID;?>"><?php echo $row->name;?></option><?php }?>
                                </select>
                                 <label for="AgencyName">Year</label>
 <select name="Agency" id="agency" class="option3 searchdropdown" onchange="populateEmployees()">
      <option value="">- Select Year  - </option>
     
      
    </select>       
                                
                               </form>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="table-responsive">
                                        <table class="table tablescroll table-bordered table-hover table-striped" >
                                             <tbody id="employees">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">#</th>
                                          <!--         <th style="width:150px">Name</th>
                                            
                                            <th style="width:150px">CID</th> -->
                                        
                                
                                
                               <th style="width:350px">Year of Graduation(ID)</th>
                                <th style="width:300px">Year of Graduation</th>
                                <th style="width:160px">Delete</th>
                                
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

       
     <div class="bg-primary" style="margin-top: 100px;">
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>Alumni Management System@2020</p>

                </div>

            </div>
        </div>
      </div>
 
    <!-- end wrapper -->

<script>
// function mySearchFunction() 
// {
//     var search=$('#search').val();
        
//         $.post('<?php echo base_url();?>index.php/Settings/search/',
//     {
//         search:search
        
//         },
//         function(data) 
//         {
        
//         $('#employees').html(data);
//         }); 
    
    
// }


    function selectagency()
{
   var parent=$('#parent').val();
        
        $.post('<?php echo base_url();?>index.php/Settings/agencyFromParent2/',
    {
        parent:parent
        
        },
        function(data) 
        {
        
        $('#agency').html(data);
        }); 
}

function populateEmployees()
{
   var agency=$('#agency').val();
        
        $.post('<?php echo base_url();?>index.php/Settings/getAgencyEmployees2/',
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
                     window.location="<?php echo base_url()?>index.php/Settings/delete_data1/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  

</script>

 