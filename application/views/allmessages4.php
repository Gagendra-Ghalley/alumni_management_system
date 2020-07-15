<div class="container"id="allmessages5" height=500px>
	<div class="col-xs-12">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Dispatch  details</h1> <div class="clockwrapper"><div id="clock"></div> <?php echo date('D d/M/Y');?></div>
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
                                        <table class="table table-bordered table-hover table-striped" id="allmessage5">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Dispatch number</th>
                                                    <th>Subject</th>
                                                    <th>Dispatched by</th>
                                                    <th>Sent_via</th>
                                                    <th>Dispatch date</th>
                                                    <th>file_name</th>
                                                    
                                                 </tr>
                                            </thead>
                                            <tbody>
                                               <?php $count=1;foreach($message5 as $row):?>
                                               	<tr>
                                               		<td><?php  echo $count++;?></td>
                                               		<td><?php  echo $row['Dispatch_no'];?></td>
                                               	  <td><?php  echo $row['subject'];?></td>
                                               		<td><?php  echo $row['dispatch_by'];?></td>
                                                  <td><?php  echo $row['sent_via'];?></td>
                                                  <td> <?php echo $row['created'];?></td>
                                                  <td><?php  echo $row['file_name'];?></td>

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
    $("#allmessages5").DataTable();
  });
</script>

 