<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div id="acknowledgement" style="display: none">
			</div>
			<div id="adduserdetails">
				<form class="form-horizontal" action="<?php echo site_url()?>/userManagement/adduser/" method="post"  id="adduser">
				<br />
					<fieldset>
						<legend> User List</legend>
						<div class="form-group">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="table-responsive">
									<table width="100%" border="1" class="table table-bordered table-hover" id="grouptask">
										<thead>
											<tr>
												<td>slNo</td>
												<td>CID</td>
												<td>Full Name</td>
												<td>Gender</td>
												<td>Dob</td>
												<td>Grade</td>
												<td>Designation</td>
												<td>Email</td>
												<td>Mobile</td>
												<td>Emp Id</td>
												<td>OfficeNo</td>
												<td>Ministry</td>
												<td>Department</td>
												<td>Agency</td>
												<td>Assign Role</td>
											</tr>
										</thead>
										<tbody>
											<?php
											foreach ($userdeatils as $key => $val) {
											?>
											<tr>
												<td><?=$key+1?></td>
												<td><?=$val['cid']?></td>
												<td>
													<?=$val['FirstName'].' '.$val['MiddleName'].' '.$val['LastName']?>
														
												</td>
												<td>
													<?php
														if($val['Gender']=="M"){
															echo 'Male';
														}
														else{
															echo 'Female';
														}
													?>
												</td>
												<td><?=$val['DateOfBirth']?></td>
												<td><?=$val['Grade']?></td>
												<td><?=$val['PositionTitle']?></td>
												<td><?=$val['email']?></td>
												<td><?=$val['Mobile']?></td>
												<td><?=$val['EmpNo']?></td>
												<td><?=$val['telephone']?></td>
												<td><?php if($val['AgencyMainParentID']>0){echo $this->db->get_where('bpas_master_agencymainparent', array('AgencyMainParentID' =>$val['AgencyMainParentID']))->row()->name; }?></td>
												<td><?php if($val['AgencyParentID']>0){ echo $this->db->get_where('bpas_master_agencyparent', array('AgencyParentID' =>$val['AgencyParentID']))->row()->name; } ?></td>
												<td><?php echo $this->db->get_where('bpas_master_agency', array('AgencyID' =>$val['AgencyID']))->row()->name; ?>							
												</td>
												<td><?php if($val['roleId']>0 && $val['roleId']<6){ echo $this->db->get_where('bpas_master_roles', array('roleID' =>$val['roleId']))->row()->roleType;} ?>			
												</td>
											</tr>
											<?php }
											?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function () {
        $("#grouptask").DataTable();
        
    });
</script>