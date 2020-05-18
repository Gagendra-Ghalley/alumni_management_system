
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <!-- <div class="col-lg-12">
                    <h1 class="page-header">View users</h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div> -->
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
 
                   <div class="col-md-6">
           <!--  <form onSubmit="return false;">
                <div class="input-group">
                 
                    <input class="form-control" id="search" placeholder="Search by CID or FirstName">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="mySearchFunction()"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form> -->

            <br><br><br>
          
        </div>
                </div>
                <!--end  Welcome -->
            </div>


        
     
            <div class="row">
                <div class="col-lg-12">

    
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            
                            <i class="fa fa-bar-chart-o fa-fw"></i>Users
                           
                            <div class="pull-right">
                                
                               <form>
                                
                                 <label for="ParentAgency">Department </label>
                                 <select id="parent" name="Parent" class="option3 searchdropdown"  onchange="selectagency()">
                                <option value="0" class="searchdropdown" selected>Select one</option>
                                <?php foreach($parent->result() as $row){?>
                                    <option class="searchdropdown" value="<?php echo $row->AgencyParentID;?>"><?php echo $row->name;?></option><?php }?>
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
                                                    <th>#</th>
                                          <!--         <th style="width:150px">Name</th>
                                            
                                            <th style="width:150px">CID</th> -->
                                        
                                
                                
                               <th style="width:150px">Department(ID)</th>
                                <th style="width:160px">Department</th>
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
        <!-- end page-wrapper -->

    </div>
     <div class="bg-primary" class="du-newsletter">
      <div class="bg-primary" class="du-newsletter" >
            <div class="container">

               

<!-- 
                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>@Alumni Management System</p>

                </div>

            </div> -->
        </div>
      </div>
    </div>
    <!-- end wrapper -->

<script>


    function selectagency()
{


   var parent=$('#parent').val();
        
        $.post('<?php echo base_url();?>index.php/Settings/getAgencyEmployees3/',
    {
        parent:parent
        
        },
        function(data) 
        {
        
        $('#employees').html(data);
        }); 
}




</script>

