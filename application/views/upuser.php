<div class="row">
	
	
	<div class="col-xs-12">
		<div id="acknowledgement" style="display: none">
		</div>
		<div id="adduserdetails">
			<form class="form-horizontal" action="<?php echo site_url()?>/userManagement/EditUser2/" method="post"  id="adduser">
				<?php foreach ($query->result() as $row) {?>
			<fieldset>
				<legend>EditUser</legend>
				<div class="form-group">
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">CID No</label>  
					<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
							<input name="cidNum" value="<?php echo $row->CID ;?>" id="cidNum" placeholder="CID Number" class="form-control" type="text" required />
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">First Name</label>  
					<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
						

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="FirstName" vlaue="<?php echo $row->FirstName ?>" id="FirstName" placeholder="First Name" class="form-control" type="text" required />
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Middle Name</label>  
					<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
						
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="MiddleName"  value="<?php  echo $row->MiddleName ?> " id="MiddleName" placeholder="Middle Name" class="form-control" type="text" required />
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Last Name</label>  
					<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
						

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="LastName" value="<?php  echo $row->LastName ?>" id="LastName" placeholder="Last Name" class="form-control" type="text" required />
						</div>
					</div>
				</div>
				<div class="form-group"> 
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Ministry</label>
					<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<select name="Ministry" id="Ministry" class="form-control selectpicker" required>
								<option value=" ">Select </option>
								
									<option value="<?php echo $row['Ministry']; ?>"><?php echo $row->Ministry ?></option>
								
							</select>
						</div>
					</div>
				</div>
					<div class="form-group"> 
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Department</label>
					<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<select name="Department" id="Department" class="form-control selectpicker" required>
								<option value=" ">Select </option>
								
									<option value="<?php echo $row['Department']; ?>"><?php echo $row ->Department ?></option>
								
							</select>
						</div>
					</div>
				</div>
				<div class="form-group"> 
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Agency</label>
					<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<select name="Agency" id="Agency" class="form-control selectpicker" required>
								<option value=" ">Select </option>
								
								<option value="<?php echo $row['Agency']; ?>"><?php echo $row->Agency?></option>
								
								
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Grade</label>  
					<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
						
						<div class="input-group">

							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input value="<?php echo $row->Grade ?> name="Grade" id="Grade" placeholder="Grade" class="form-control" type="text" required />
						</div>
					</div>
				</div>
			<!--	<div class="form-group">
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Gender</label>  
					<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input name="Gender" value="<?php?>" id="Gender" placeholder="Gender" class="form-control" type="text" required />
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Date of Birth</label>  
					<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input name="dob" id="dob" placeholder="Date of Birth" class="form-control" type="text" required />
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
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Office No.</label>  
					<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							<input name="officePhone" id="officePhone" placeholder="office Phone No." class="form-control" type="text" />
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
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Dzongkhag</label>
					<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<select name="dzongkhag" id="dzongkhag" class="form-control selectpicker">
								<option value=" ">Select Dzongkhag</option>
								<?php 
									foreach($dzongkhagList as $min):
								?>
									<option value="<?php echo $min['Dzo_Id']; ?>"><?php echo $min['Dzongkhag_Name']?></option>
								<?php endforeach; ?>
							</select>
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
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Employee ID No</label>  
					<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
							<input name="empNum" id="empNum" placeholder="Employee ID Number" class="form-control" type="text" required />
						</div>
					</div>
				</div>
				
				<div class="form-group"> 
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Assign Roles</label>
					<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
							<select name="roleId" id="roleId" class="form-control selectpicker">
								<option value=" ">Select </option>
								<?php 
									foreach($bapasRole as $min):
								?>
									<option value="<?php echo $min['roleID']; ?>"><?php echo $min['roleType']?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group"> 
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">Dispatch Roles</label>
					<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
							<select name="dispatchid" id="dispatchid" class="form-control selectpicker">
								<option value=" ">Select </option>
								<?php 
									foreach($st_dispatch_role as $min):
								?>
									<option value="<?php echo $min['disp_roleID']; ?>"><?php echo $min['role_type']?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 col-md-4 col-lg-2 control-label"></label>
					<div class="col-sm-7 col-md-6 col-lg-4">
						<button type="reset" class="btn btn-default" >Reset <span class="glyphicon glyphicon-refresh"></span></button>
						<button type="submit" class="btn btn-success" id="submitbt" onclick="submituserdetails()">Add User <span class="glyphicon glyphicon-ok"></span></button>
					</div>
				</div> -->

			</fieldset>
			<?php }?>
		</form>
		</div>
	</div><!-- /.container -->
</div><!-- /.row -->