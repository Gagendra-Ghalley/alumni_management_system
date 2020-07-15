
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
<<<<<<< HEAD
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper" style="color: #111"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
=======
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
                </div>
                <!--End Page Header -->
            </div>
             <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div>
 
         


        
       
<<<<<<< HEAD
             
     <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">
                  <?php  
           if($this->uri->segment(2) == "deleted2")  
           {  
           
                echo ' <div class="col-lg-8 panel-body">
                    <b><p class="text-success">Department deleted successfully</p></b>
                    </div><br><br>';

            } 

             if($this->uri->segment(2) == "updated_department")  
           {  
           
                echo ' <div class="col-lg-8 panel-body">
                    <b><p class="text-success">Department updated successfully</p></b>
                    </div><br><br>';

            } 

               if($this->uri->segment(2) == "notupdated_department")  
           {  
           
                echo ' <div class="col-lg-8 panel-body">
                    <b><p class="text-danger">Department not updated</p></b>
                    </div><br><br>';

            }


            ?> 

            <br><br><br>
=======
     <div id="page-wrapper" style="margin-left: 0px">
      <?php  
           if($this->uri->segment(2) == "delete_department1")  
           {  
           
                echo ' <div class="col-lg-8 panel-body">
                    <b><p class="text-success">Department has been deleted successfully</p></b>
                    </div><br><br>';

            } 
            ?> 
<<<<<<<< HEAD:application/views/managedepartment.php
              <?php  
           if($this->uri->segment(2) == "notdelete_department1")  
           {  
           
                echo ' <div class="col-lg-8 panel-body">
                    <b><p class="text-danger">Department not deleted</p></b>
                    </div><br><br>';

            } 
            ?> 

             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">

            <div id="page-wrapper" style="margin-left: 0px">
                <br>
                <br>

                <div class="col-lg-7">

========
             
     <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">
>>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9:application/views/viewusers2.php

>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
    
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            
<<<<<<< HEAD
                            <i class="fa fa-bar-chart-o fa-fw"></i>
=======
<<<<<<<< HEAD:application/views/managedepartment.php
                            <i class="fa fa-bar-chart-o fa-fw"></i>
========
                            <i class="fa fa-bar-chart-o fa-fw"></i>Manage Department
>>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9:application/views/viewusers2.php
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
                           
                            <div class="pull-right">

                               <form >
                                

         
                                 <label for="ParentAgency">Department </label>
<<<<<<< HEAD
                                 <select id="parent" name="Parent" class="option3 searchdropdown"  onchange="selectdepartment()">
                                <option value="0" class="searchdropdown" selected>Select one</option>
                                <?php foreach($parent->result() as $row){?>
                                    <option class="searchdropdown" value="<?php echo $row->AgencyParentID;?>"><?php echo $row->name;?></option><?php }?>
=======
                                 <select id="parent" name="Parent" class="option3 searchdropdown"  onchange="selectagency()">
                                <option value="0" class="searchdropdown" selected>Select one</option>
                                <?php foreach($parent->result() as $row){?>
                                    <option class="searchdropdown" value="<?php echo $row->department_ID;?>"><?php echo $row->name;?></option><?php }?>
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
                                </select>
                                
                                
                               </form>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
<<<<<<< HEAD
                                <div class="col-lg-5">
=======
                                <div class="col-lg-8">
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
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

           

                      


         

<<<<<<< HEAD
        </div>
=======
<<<<<<<< HEAD:application/views/managedepartment.php
        </div>

        </div>
        <!-- end page-wrapper -->
        
      <div class="bg-primary" style="margin-top: 147px;">
            <div class="container">

               


                <div class="col-lg-12">
========
        </div>
>>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9:application/views/viewusers2.php
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9

        </div>
        <!-- end page-wrapper -->
     
 

<script>


<<<<<<< HEAD
    function selectdepartment()
=======
    function selectagency()
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
{


   var parent=$('#parent').val();
        
<<<<<<< HEAD
        $.post('<?php echo base_url();?>index.php/Settings/get_dropdownlistfordepartment/',
=======
        $.post('<?php echo base_url();?>index.php/Settings/department_dropdownlist/',
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
    {
        parent:parent
        
        },
        function(data) 
        {
        
        $('#employees').html(data);
        }); 
}




</script>

