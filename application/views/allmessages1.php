<div class="container">
	<div class="col-xs-12">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Track Your letter</h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
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

                                                    <th>Si.no</th>
                                                    <!-- <th>First_SenderName</th> -->
                                                    <th>SenderName</th>
                                                    <th>letter_no</th>
                                                    <th>Forward to/Receiver</th>

                                                    <th>Status </th>

                                                    <th>Completed by</th>
                                                 </tr>
                                            </thead>
                                            <tbody>

                                              <?php $count=1?>
                                                <!--  <?//foreach ($message5->result_array() as $message4): ?>  -->
                                                    <?foreach ($message5 as $message4): ?> 
                                               		
                                                  <td><?php  echo $count++;?></td>
                                               		<!-- <td><?php //echo $message4['First_SenderName'];?></td> -->
                                                    <td><?php echo $message4['SenderName'];?></td>

                                                  
                                               	<td><?php echo $message4['RecievedLetter'].'/'.$message4['letter_no'];?></td>
                                               	
                                                    
                                                    

                                                     

                                                    

                                                
                                                    <td>
                                                  <?php echo $message4['RecieverName'];?>
                                                    
                                                  </td>
                                               
                                               <td class="bg-info">  


                                                  <?php if($message4['completeStatus']=='Y')
                                                        {
                                                         echo "<div class='green center'>"."completed"."</div>";
                                                }elseif($message4['forwardStatus']=='Y')
                                                {
                                                  echo "<div class='red center'>"."forwarded"."</div>";
                                                } 
                                                else{
                                                  echo "<div class='red center'>"."not forwarded"."</div>";
                                                    }
                                                 ?>


                                                </td>
                                              <td>

                                                <?php 
                                                if($message4['completeStatus']=='Y'){
                                                  

                                                   $cids=explode(", ", $message4['completed_by']);
                                                   foreach ($cids as $key => $cid){
                                                     if(trim($cid)!="")
                                                      { 

                                                   
                                                   

                                                  echo $this->db->get_where('bpas_user_profiles',array('cid' =>trim($message4['completed_by'])))->row()->FirstName. ' '.$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->MiddleName.' '.$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->LastName ;

                                                
                                                       }

                                                     }
                                                      }
                                                     ?>

                                
                                                  </td>


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

 