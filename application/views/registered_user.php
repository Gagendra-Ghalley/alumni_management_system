
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
            

            

     
      <h2>Registered Users</h2><br />
      <!-- <div class="panel-body"> -->
      <div >
        <div class="col-lg-10">
         
 <table class="panel panel-primary table table-bordered ">
         <div class="row">
                <div class="col-lg-12">

  
 <div >
                        <div >
                          
                          <!--   <i class="fa fa-bar-chart-o fa-fw"></i>Users -->
                           
                            <!-- <div class="pull-right"> -->

                                              
        <!-- <table class="table table-bordered table-hover table-striped leavetable"> -->
            <tr class="panel panel-heading bg-primary" ><th>#</th><th>Name</th><th>CID</th>
                <th>Gender</th><th>Department</th><th>Year of Graduation/Faculty</th><th>Registration(Date/Time)</th></tr>
            
             

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
                                                   
                   
                
<?php endforeach; ?>  </tr> 

</div>
</div>
</div>
</div>
</div>

 </table>  
</div>
</div>
</div>
</div>
</body>
</html>

    <script type="text/javascript">
  $(function(){
    $("#allmessages").dataTable();
  });
</script>



