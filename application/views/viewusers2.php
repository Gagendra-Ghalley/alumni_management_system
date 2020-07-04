
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
 
         


        
        <?php  
           if($this->uri->segment(2) == "deleted2")  
           {  
           
                echo ' <div class="col-lg-8 panel-body">
                    <b><p class="text-success">Department has been deleted successfully</p></b>
                    </div><br><br>';

            } 
            ?> 
             
     
            <div id="page-wrapper" style="margin-left: 0px">
                <br>
                <br>

                <div class="col-lg-10">

    
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            
                            <i class="fa fa-bar-chart-o fa-fw"></i>Users
                           
                            <div class="pull-right">

                               <form >
                                

         
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
                                <div class="col-lg-8">
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
        
      <div class="bg-primary" style="margin-top: 100px;">
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>Alumni Management System@2020</p>

                </div>

            </div>
        </div>
      </div>
 

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

