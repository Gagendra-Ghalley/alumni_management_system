
<html>  
 <head>  
    <title>Insert</title>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

   
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />   -->
   <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
   
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url();?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

 </head>  
  
 
 
 <body>  
         <div id="page-wrapper">

          
          <div class="row profile">
            

            

     
      <h2>Student Details</h2><br />
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
                     <th >Gender</th>
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
                     <td style="width: 150px;"><?php echo $row->gender; ?></td>
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
 <div class="bg-primary" class="du-newsletter">
      <div class="bg-primary" class="du-newsletter" >
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>
      </div>
    </div>
  

 </body>  
 </html>  
