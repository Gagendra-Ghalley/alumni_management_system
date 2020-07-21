<div class="container">
	<div class="col-xs-12">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View messagessst</h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
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
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>From</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Forward To</th>
                                                    <th>Attachment</th>
                                                    <th>Date</th>
                                                 </tr>
                                            </thead>
                                            <tbody>
                                               <?php $count=1;foreach($messages as $row):?>
                                               	<tr>
                                               		<td><?php  echo $count++;?></td>
                                               		<td><?php echo $row['SenderName'];?></td>
                                               		<td><a href="<?php echo site_url();?>/Settings/getmessage/<?php echo $row['Id'];?>"><?php echo $row['Subject'];?></a></td>
                                               		<td><?php echo $row['Message'];?></td>
                                                  <td>
                                                  <?php 
                                                    $cids=explode(", ", $row['RecieverId']);
                                                    foreach ($cids as $key => $cid) {
                                                      echo $this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->FirstName. ' '.$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->MiddleName.' '.$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->LastName .', ';
                                                    }
                                                    

                                                   ?></td>
                                                  <td><?php echo $row['Attachment'];?></td>
                                               		
                                               		<td><?php echo $row['ActionDate'];?></td>
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

 