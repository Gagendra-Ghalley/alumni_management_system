
  
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
     
             <div class="col-md-12 col-lg-12 col-sm-12">

      <h4 style="margin-left: 20px"><b>Registered Users</b></h4>
      <!-- <div class="panel-body"> -->
      <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table tablescroll table-bordered table-hover table-striped" >
                                             
                                            <thead>
                                                <tr class="panel panel-heading bg-primary" ><th>#</th><th>Name</th><th>CID</th>
                <th>Gender</th><th>Department</th><th>Year of Graduation/Faculty</th><th>Registration(Date/Time)</th><th>Email</th></tr>
            
             

            <?php $count=1; foreach($request as $row): ?>
            <tr><td><?php echo $count++;?></td>

            
                    <td> <?php 
                                                    $cids=explode(", ", $row['relatedUserId']);
                                                    foreach ($cids as $key => $cid) {
                                                      echo $this->db->get_where('user_profiles',array('cid' =>trim($cid)))->row()->FirstName. ' '.$this->db->get_where('user_profiles',array('cid' =>trim($cid)))->row()->MiddleName.' '.$this->db->get_where('user_profiles',array('cid' =>trim($cid)))->row()->LastName .'';
                                                    }
                                                    ?>
                                                   </td> 

                                                   <td> <?php echo 
                                                     $row['relatedUserId'];
                                                    ?>
                                                   </td> 
                                                      <td> <?php 
                                                    $cids=explode(", ", $row['relatedUserId']);
                                                    foreach ($cids as $key => $cid) {
                                                      echo $this->db->get_where('user_profiles',array('cid' =>trim($cid)))->row()->gender. ' ';
                                                    }
                                                    ?>
                                                   </td> 

                                                     <td> <?php 
                                                    $cids=explode(", ", $row['department_ID']);
                                                    foreach ($cids as $key => $cid) {
                                                      echo $this->db->get_where('department',array('department_ID' =>trim($cid)))->row()->name. ' ';
                                                    }
                                                    ?>
                                                   </td>


                                                   

                                                     <td> <?php 
                                                    $cids=explode(", ", $row['batch_ID']);
                                                    foreach ($cids as $key => $cid) {
                                                      echo $this->db->get_where('batch',array('batch_ID' =>trim($cid)))->row()->name. ' ';
                                                    }
                                                    ?>
                                                   </td> 

                                                      <td style="width:80px"> <?php 
                                                    $format = "Y-m-d / h:m:s a";
                                                     $Date=strtotime($row['date']);   
                                                     $NewDate= date($format, $Date);
                                                     echo $NewDate;
                                                    
                                                    ?>
                                                   </td>
                                                       <td style="width:80px"> <?php 

                                                    echo  $row['email'];
                                                    
                                                    ?>
                                                   </td>
                                                   
                   
                
<?php endforeach; ?>  </tr> 
                                            </thead>
                                           
                                          

                                            
                                        </table>
                                        
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            


        
  <div class="bg-primary" style="margin-top: 147px;">
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>Alumni Management System@2020</p>

                </div>

            </div>
        </div>
      </div> 


    <script type="text/javascript">
  $(function(){
    $("#allmessages").dataTable();
  });
</script>



