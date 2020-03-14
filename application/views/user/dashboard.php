
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>
Today's Attendance Time: <b><?php echo $this->session->userdata('atd_time');?> </b>
 
                    </div>
                </div>
                <!--end  Welcome -->
                  

            <div class="row">
                <div class="col-lg-8">



                  
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Daily Attendance
                            <input class="form-control-search" type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search for names">
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                      <?php $selectedDiv=$this->session->userdata('divFeed'); echo $selectedDiv;?>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                    	
                                    		<?php if($selectedDiv!="All"){?>
                                    			<li><a href="<?php echo base_url();?>index.php/ATD/divfeedchange/<?php echo 'All';?>">All</a></li><?php } ?>
                                    	<?php foreach($divisions->result() as $row) {
                                    		 
                                        if($selectedDiv!=$row->Agency) {?><li><a href="<?php echo base_url();?>index.php/ATD/divfeedchange/<?php echo $row->Agency;?>"><?php echo $row->Agency;?></a>
                                        </li><?php } } ?>
                                        
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="tablestatus" class="table table-bordered table-hover table-striped tablescroll">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Time In</th>
                                                    <th>Division</th>
                                                    <th>Status</th>
                                                    <th>Remarks</th>
                                                    <th>Extension</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                               		$counter=1;
                                               		foreach ($reports->result() as $row){?>
                                               			<tr>
                                               				<td>
                                               					<?php echo $counter++;?>
                                               				</td>
                                               				<td>
                                               					<?php echo $row->name;?>
                                               				</td>
                                               				<td>
                                               					<?php if(strtotime($row->atdtime)>strtotime('09:00:00AM'))
                                               					{
                                               						echo "<div class='yellow center'>".$row->atdtime."</div>";
																} elseif($row->atdtime==null)
																{
																	echo "<div class='red center'>Absent</div>";
																} 
																else {
																	echo "<div class='green center'>".$row->atdtime."</div>";}  ?>
                                               				</td>
                                               				<td>
                                               					<?php echo $row->Agency;?>
                                               				</td>
                                               				<td>
                                               					<?php if($row->status=='In Office')
                                               					{
                                               						echo "<div class='green center'>".$row->status."</div>";
																} elseif($row->status=='Meeting')
																{
																	echo "<div class='red center'>".$row->status."</div>";
																} 
																elseif ($row->status=='Seminar'){
																	echo "<div class='btn-warning center'>".$row->status."</div>";} 
																	
																	elseif ($row->status=='Training'){
																	echo "<div class='btn-info center'>".$row->status."</div>";}
																	   ?>
                                               					
                                               				</td>
                                               				<td>
                                               					<?php echo $row->statusRemarks;?>
                                               				</td>
                                               				<td>
                                               					<?php echo $row->telephone;?>
                                               				</td>
                                               			</tr>
                                               			
														
														
                                               		<?php } ?>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->

                </div>

                <div class="col-lg-4">
                	   <?php if($leavecount>0){?><a href="<?php echo base_url();?>index.php/Leave/leaveToday/"><?php }?>
                
                	   <div class="alert alert-info text-center">
                       <i class="fa  fa-calendar-o fa-3x" aria-hidden="true"></i>&nbsp;<br/><b><?php echo $leavecount;?></b><br/>Officials on Leave

                    </div>
               
                <?php if($leavecount>0){?></a><?php }?>
                    <div class="panel panel-primary no-boder">
                        <div class="panel-body yellow"><table>
                            <tr><td>Position Title:</td><td><b><?php echo $this->session->userdata('position');?></b></td></tr>
                            	<tr><td>Division:</td><td><b><?php echo $this->session->userdata('divName');?></b></td></tr>
                            	<tr><td>Dept:</td><td><b><?php echo $this->session->userdata('deptName');?></b></td></tr>
                            	<tr><td>Ministry: </td><td><b><?php echo $this->session->userdata('minName');?></b></td></tr>
                            	
                            </table>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">User Profile
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o text-center fa-3x"></i>
                            <h5><?php foreach($supervisor->result() as $row){ ?>
                            	<table><tr><td>Name:</td><td><b><?php echo $row->name;?></b></td></tr>
                            		<tr><td>Position Title:</td><td><b><?php echo $row->PositionTitle?></b></td></tr>
                            		<tr><td>Division:</td><td><b><?php echo $row->Agency;?></b></td></tr>
                            		<tr><td>Email:</td><td><b><?php echo $row->email;?></b></td></tr>
                            		<tr><td>Telephone:</td><td><b><?php echo $row->telephone;?></b></td></tr>
                            	</table>
                            	                            <?php } ?>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Supervisor Details
                            </span>
                        </div>
                    </div>
                    
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                           <i class="fa fa-user fa-3x"></i>
                            <?php $role=$this->session->userdata('role');?>
                            <h3><?php if ($role=='1'){ echo "Super Admin";}elseif($role=='2'){echo "Secretary";}elseif($role=='3'){echo "Director";}
							elseif($role=='4'){echo "Division Head";} elseif($role=='5'){echo "User";}elseif($role=='6'){echo "HR";}elseif($role=='7'){echo "Offtg Secretary";}elseif($role=='8'){echo "Offtg Director";}
							elseif($role=='9'){echo "Offtg Division Head";}?></h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Your User Role
                            </span>
                        </div>
                    </div>







                </div>

            </div>

           

                      


         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
<script>
	
	function searchFunction(){
		
		var input,filter,table,tr,td,i;
		input =document.getElementById("myInput");
		
		filter = input.value.replace(/  +/g, ' ').toUpperCase();
		
		table=document.getElementById("tablestatus");
		tr = table.getElementsByTagName("tr");
		
		for(i=0;i<tr.length;i++){
			
			td = tr[i].getElementsByTagName("td")[1];
			
			if (td) {
				td = td.innerHTML.replace(/  +/g, ' ');
	      if (td.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
    } 
		}
		
	}
	
	
</script>
 