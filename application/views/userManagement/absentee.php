<div class="container">
	<div class="col-xs-12">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View those who have never logged in</h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Message
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" id="allmessages6">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Department</th>
                                                    <th>Division</th>
                                                    <th>Status</th>
                                                    <th>EmpNo</th>
                                                    <th>Gender</th>
                                                    
                                                    
                                                 </tr>
                                            </thead>
                                            <tbody>
                                               <?php $count=1;foreach($absent_detail as $row):?>
                                               	<tr>
                                               		<td><?php  echo $count++;?></td>
                                               		<td><?php  echo $row['FirstName']." ".$row['LastName'];?></td>
                                               	  <td><?php  echo $row['AgencyID'];?></td>
                                               		<td><?php  echo $row['Late'];?></td>
                                                  <td><?php  echo $row['EmpNo'];?></td>
                                                  <td> <?php echo $row['cid'];?></td>
                                                  <td><?php  echo $row['Gender'];?></td>

                                                 </tr>
                                                  

                                                   
                                                  
                                                    

                                                   
                                                   
                                               
                                               	<?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(function(){
    $("#allmessages6").dataTable();
  });
</script>

 