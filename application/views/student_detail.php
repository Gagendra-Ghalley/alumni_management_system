

 <body>  
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
 
          <div class="row profile">
            
    
     
      <h3 style="margin-left: 20px">Student Details</h3><br />
      <!-- <div class="panel-body"> -->
      <div >
        <div class="col-lg-10">
         
 <table class="table table-bordered ">
         <div class="row">
                <div class="col-lg-12">

  
 <div >
                        <div >
                          
                           <!--  <i class="fa fa-bar-chart-o fa-fw"></i>Users -->
                           
                            <div>
      
      
                <tr class="panel-heading bg-primary">  
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
 
  
