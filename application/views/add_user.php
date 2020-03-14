

                  <!--  page-wrapper -->
              <div id="page-wrapper">
	
	
			
					<div class="page-content">
						
											
						<div class="page-header">
							<h1>Dashboard<small><i class="ace-icon fa fa-angle-double-right"></i> Add New User </small></h1>
						</div><!-- /.page-header -->

							<!-- PAGE CONTENT BEGINS -->
							<div class="row">
								<div class="col-xs-12">
									<form class="form-horizontal" action="../includes/process.php" method="post"  id="genericFormForAll">
										<fieldset>
											<legend>Add New User</legend>
											<div class="form-group">
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Full Name</label>  
												<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
														<input name="fullName" id="fullName" placeholder="Full Name" class="form-control" type="text" required />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Email</label>  
												<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
														<input name="emailID" id="emailID" placeholder="Email ID" class="form-control" type="text" required />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Mobile No</label>  
												<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
														<input name="mobNum" id="mobNum" placeholder="Mobile Number" class="form-control" type="text" required />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">CID No</label>  
												<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
														<input name="cidNum" id="cidNum" placeholder="CID Number" class="form-control" type="text" required />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Employee ID No</label>  
												<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
														<input name="empNum" id="empNum" placeholder="Employee ID Number" class="form-control" type="text" required />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Designation</label>  
												<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
														<input name="designation" id="designation" placeholder="Designation" class="form-control" type="text" required />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Agency</label>
												<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
														<select name="uoffice" id="uoffice" class="form-control selectpicker" required>
															<option value=" ">Select </option>
															<?php 
																$dDetail = $generalClass->getAll(TBL_AGENCY); 
																foreach($dDetail as $dDtls):
															?>
															<option value="<?php echo $dDtls['id']; ?>"><?php echo $dDtls['name']." - ".$dDtls['description']; ?></option>
															<?php endforeach; ?>
													<!-- 		<option value="2">Dzongkhag</option>
															<option value="3">Thromde</option>
													 -->	</select>
													</div>
												</div>
											</div>
											<div id="headquarter" style="display:none"> <!-- HQ Office -->
											<div class="form-group"> 
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Department</label>
												<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
														<select name="department" id="department" class="form-control selectpicker">
															<option value=" ">Select Department</option>
															<?php 
																$dDetail = $generalClass->getAll(TBL_DEPT); 
																foreach($dDetail as $dDtls):
															?>
															<option value="<?php echo $dDtls['id']; ?>"><?php echo $dDtls['name']." - ".$dDtls['description']; ?></option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Division</label>
												<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-th-large"></i></span>
														<select name="division" id="division" class="form-control selectpicker">
															<option value="">Select Division</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Section</label>
												<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
														<select name="section" id="section" class="form-control selectpicker">
															<option value="">Select Section</option>
														</select>
													</div>
												</div>
											</div>
											</div><!-- HQ Office End -->
											<div id="dzongkhag" style="display:none"> <!-- Dzongkhags Office -->
											<div class="form-group"> 
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Dzongkhag</label>
												<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
														<select name="udzongkhag" id="udzongkhag" class="form-control selectpicker">
															<option value=" ">Select Dzongkhag</option>
															<?php 
																$dzoDetail = $generalClass->getAll(TBL_DZO); 
																foreach($dzoDetail as $dzoDtls):
															?>
															<option value="<?php echo $dzoDtls['id']; ?>"><?php echo $dzoDtls['name']." / ".$dzoDtls['name_dzo']; ?></option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
											</div>
											</div>
											<div id="thromde" style="display:none"> <!-- HQ Office -->
											<div class="form-group"> 
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Thromde</label>
												<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
														<select name="uthromde" id="uthromde" class="form-control selectpicker">
															<option value=" ">Select Thromde</option>
															<?php 
																$thromDetail = $generalClass->getAll(TBL_THROM); 
																foreach($thromDetail as $thromDtls):
															?>
															<option value="<?php echo $thromDtls['id']; ?>"><?php echo $thromDtls['name']." / ".$thromDtls['name_dzo']; ?></option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
											</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Office No.</label>  
												<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
														<input name="officePhone" id="officePhone" placeholder="office Phone No." class="form-control" type="text" />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Extension No.</label>  
												<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
														<input name="extNum" id="extNum" placeholder="Extension Number" class="form-control" type="text" />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Assign Roles</label>
												<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
													<div class="input-group">
														<?php 
															$rDetail = $generalClass->getAll(TBL_ROLE); 
															foreach($rDetail as $rDtls):
														?>
														<label class="inline col-lg-6">
															<input type="checkbox" id="id-toggle-<?php echo $rDtls['id'];?>" name="uRoles[]" value="<?php echo $rDtls['id'];?>" class="ace" />
															<span class="lbl"><?php echo " ".$rDtls['role'];?></span>
														</label>
														<?php endforeach; ?>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 col-md-4 col-lg-2 control-label">Password</label>  
												<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
														<input name="password" id="password" placeholder="Password" class="form-control" type="text" required />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 col-md-4 col-lg-2 control-label"></label>
												<div class="col-sm-7 col-md-6 col-lg-4">
													<button type="reset" class="btn btn-default" >Reset <span class="glyphicon glyphicon-refresh"></span></button>
													<button type="submit" class="btn btn-success" name="addNewUser">Add User <span class="glyphicon glyphicon-ok"></span></button>
												</div>
											</div>
										</fieldset>
									</form>
								</div><!-- /.container -->
							</div><!-- /.row -->	
					</div><!-- /.page-content -->
				</div>
			
		<!-- /.ends in footer-->
		   
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			$('#uoffice').on('change', function(){	
				var searchbyvalue = $('#uoffice').val();
				if(searchbyvalue == 1){                 
					$('#headquarter').show();
					$('#dzongkhag').hide();
					$('#thromde').hide();
					
				}else if(searchbyvalue == 2){
					$('#headquarter').hide();
					$('#dzongkhag').show();
					$('#thromde').hide();
					
				}else if(searchbyvalue == 3){
					$('#headquarter').hide();
					$('#dzongkhag').hide();
					$('#thromde').show();
					
				}else{
					$('#headquarter').hide();
					$('#dzongkhag').hide();
					$('#thromde').hide();
					
				}
			});

			$('#department').change(function() { 			
				$('#division').load("selectDivision.php?choice="+ $('#department').val(), function() {
					$('#division').trigger('chosen:updated');
				});
			});
			
			$('#division').change(function() { 			
				$('#section').load("selectSection.php?choice="+ $('#division').val(), function() {
					$('#section').trigger('chosen:updated');
				});
			});

			$(document).ready(function () {
				var validator = $("#genericFormForAll").bootstrapValidator({
					framework: 'bootstrap',
					excluded: ':disabled',
					message: 'Please enter a value.',
					fields : {
						fullName :{
							validators : {
								notEmpty : {
									message : "Please enter fullname."
								}
							}
						},
						emailID :{
							validators : {
								notEmpty : {
									message : "Please enter Email ID."
								},
								emailAddress: {
									message: 'The value is not a valid email address.'
								},
								remote: {
									url: 'checkMail.php',
									type: 'POST',
									data: function(validator) {
									   return {
										   mailID: $('[name="emailID"]').val(),
									   };
									},
									message: 'This Email ID is already used. Please contact Admin.',
								}
							}
						},
						mobNum :{
							validators : {
								notEmpty : {
									message : "Please enter Mobile No."
								},
								integer: {
									message: 'Mobile No. must be integer.'
								},
								stringLength: {
									min: 8,
									max: 8,
									message: 'Mobile No. must be 8 digit.'
								},
								remote: {
									url: 'checkMobile.php',
									type: 'POST',
									data: function(validator) {
									   return {
										   mobNo: $('[name="mobNum"]').val(),
									   };
									},
									message: 'This Mobile No. is already used. Please contact Admin.',
								}
								
							}
						},
						cidNum :{
							validators : {
								notEmpty : {
									message : "Please enter CID No."
								},
								integer: {
									message: 'CID No. must be integer.'
								},
								stringLength: {
									min: 11,
									max: 11,
									message: 'CID No. must be 11 digit.'
								},
							}
						},
						empNum :{
							validators : {
								notEmpty : {
									message : "Please enter Emp. ID No."
								}
							}
						},
						designation :{
							validators : {
								notEmpty : {
									message : "Please enter Designation."
								}
							}
						},
						/*uoffice :{
							validators : {
								notEmpty : {
									message : "Please select User Office Location."
								}
							}
						},
						department :{
							validators : {
								notEmpty : {
									message : "Please select Department."
								}
							}
						},
						division :{
							validators : {
								notEmpty : {
									message : "Please select Division."
								}
							}
						},
						section :{
							validators : {
								notEmpty : {
									message : "Please select Section."
								}
							}
						},
						udzongkhag :{
							validators : {
								notEmpty : {
									message : "Please select User Dzongkhag."
								}
							}
						},
						uthromde :{
							validators : {
								notEmpty : {
									message : "Please select User Thromde."
								}
							}
						},*/
						uRole :{
							validators : {
								notEmpty : {
									message : "Please select Role."
								}
							}
						},
						password :{
							validators : {
								notEmpty : {
									message : "Please enter new Password."
								},
								callback: {
									message: 'Passowrd must be minium of 8 characters',
									callback: function(value, validator, $field){
										return value.length >= 8;
									}
								},
							}
						},
					}
				});				
			});
		</script>
		<script src="../assets/formValidate/bootstrapValidator.js"></script>
	<?php include("../inc/footer.php"); ?>
addUser.php
Displaying addUser.php.