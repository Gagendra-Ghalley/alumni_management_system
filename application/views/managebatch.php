
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
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('')) {echo "<div class='alert alert-success'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                      
 
                    </div>
                </div>
            


        
     
            <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">

                   <?php
                 if($this->uri->segment(2) == "deleted1")  
           {  
           
                echo ' <div class="col-lg-8 panel-body">
                    <b><p class="text-success">Year of graduation/faculty has been deleted successfully</p></b>
                    </div><br><br>';

            } 


              if($this->uri->segment(2) == "updated_batch")  
           {  
           
                echo ' <div class="col-lg-8 panel-body">
                    <b><p class="text-success">Batch updated successfully</p></b>
                    </div><br><br>';

            } 

               if($this->uri->segment(2) == "notupdated_batch")  
           {  
           
                echo ' <div class="col-lg-8 panel-body">
                    <b><p class="text-danger">Batch not updated</p></b>
                    </div><br><br>';

            }
            ?> 
            <br><br><br> 
                <div class="col-md-12 col-lg-12 col-sm-12">

    
                <div class="panel panel-primary">
                        <div class="panel-heading">
                            
                            <i>!</i>
                           
                            <div class="pull-right">
                                
                               <form >
                                
                                 <label for="ParentAgency">Department </label>
                                 <select id="parent" name="Parent" class="option3 searchdropdown"  onchange="selectdepartment()">
                                <option value="0" class="searchdropdown" selected>Select one</option>
                                <?php foreach($parent->result() as $row){?>
                                    <option class="searchdropdown" value="<?php echo $row->AgencyParentID;?>"><?php echo $row->name;?></option><?php }?>
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
                                <div class="col-md-10 col-lg-10 col-sm-10">
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


    function selectdepartment()
{
   var parent=$('#parent').val();
        
        $.post('<?php echo base_url();?>index.php/Settings/get_dropdownlistforbatch_selectyear/',
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
        
        $.post('<?php echo base_url();?>index.php/Settings/get_dropdownlistforbatch/',
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

 