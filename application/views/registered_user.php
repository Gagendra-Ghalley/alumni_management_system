
  
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
      <h4 style="margin-left: 20px"><b>Registered Users</b></h4>
      <!-- <div class="panel-body"> -->
      
        <div class="col-lg-10">
         
 <table class="panel panel-primary table table-bordered ">
         <div class="row">
                <div class="col-lg-10">

  
 <div >
                        <div >
                          
                          <!--   <i class="fa fa-bar-chart-o fa-fw"></i>Users -->
                           
                            <!-- <div class="pull-right"> -->

                                              
        <!-- <table class="table table-bordered table-hover table-striped leavetable"> -->
            <tr class="panel panel-heading bg-primary" ><th>#</th><th>Name</th><th>CID</th>
                <th>Gender</th><th>Department</th><th>Year of Graduation/Faculty</th><th>Registration(Date/Time)</th><th>Email</th></tr>
            
             

            <?php $count=1; foreach($request as $row): ?>
            <tr><td><?php echo $count++;?></td>

            
                    <td> <?php 
                                                    $cids=explode(", ", $row['relatedUserId']);
                                                    foreach ($cids as $key => $cid) {
                                                      echo $this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->FirstName. ' '.$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->MiddleName.' '.$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->LastName .'';
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
                                                      echo $this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->gender. ' ';
                                                    }
                                                    ?>
                                                   </td> 

                                                     <td> <?php 
                                                    $cids=explode(", ", $row['AgencyParentID']);
                                                    foreach ($cids as $key => $cid) {
                                                      echo $this->db->get_where('bpas_master_agencyparent',array('AgencyParentID' =>trim($cid)))->row()->name. ' ';
                                                    }
                                                    ?>
                                                   </td>


                                                   

                                                     <td> <?php 
                                                    $cids=explode(", ", $row['AgencyID']);
                                                    foreach ($cids as $key => $cid) {
                                                      echo $this->db->get_where('bpas_master_agency',array('AgencyID' =>trim($cid)))->row()->name. ' ';
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

</div>
</div>
</div>
</div>
</div>

 </table> 
  <div class="bg-primary" style="margin-top: 100px;">
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



