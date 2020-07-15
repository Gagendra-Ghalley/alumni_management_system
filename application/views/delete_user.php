
<html>  
 <head>  
   <title>Delete</title>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

   
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />   -->
   <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />

    <!-- <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" /> -->
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
   <!--  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" /> -->

    
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
   

    <!-- Page-Level CSS -->
    <link href="<?php echo base_url();?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
   <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet" />

 </head>  
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit User</h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>

          

 <?php $row=$employee->row(0);
    $cid=$row->cid;
    ?>
        

            <div class="row">
                <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/Settings/delete_data/<?php $row->cid;?>/" class="form-group">
                         
              
          
           
           <div class="col-lg-6">
          

          <a href="#" class="delete_data btn btn-lg btn-danger btn-block" id="<?php echo $row->cid; ?>">Delete</a> 
           
          </div>
          <br><br><br><br><br><br>
           </form>

           <form >
               <div class="col-lg-6">
               <a href="<?php echo base_url();?>index.php/Settings/viewUsers/" class="btn btn-lg btn-info btn-block">Back</a>
           </div>
           </form>
           
    </div>

</div>
   
      <script>  
      // $(document).ready(function(){  
      //      $('.delete_data').click(function(){  
      //           var id = $(this).attr("id");  
      //           if(confirm("Are you sure you want to delete this?"))  
      //           {  
      //                window.location="<?php echo base_url()?>index.php/Settings/delete_data/<?php $row->cid?>/"+id;  
      //           }  
      //           else  
      //           {  
      //                return false;  
      //           }  
      //      });  
      // }); 

      window.onload = function(){
       document.forms[0].submit(id="<?php echo $row->batch_ID; ?>");
           
                if(confirm("Are you sure you want to delete this?"))  
                {  
                     window.location.href="<?php echo base_url()?>index.php/Settings/delete_data1/<?php $row->batch_ID?>/"+id;
                }  
                else  
                {  
                     
                     return false;  
                    
                    
                }  
         
           }   
      </script>

      </html>  


 