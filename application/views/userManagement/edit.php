<!--<form class="form-horizontal" action="<?php //echo site_url()?>/userManagement/loadUserDetails/" method="post"  id="editrole"> -->
	<form class="form-horizontal" action="<?php echo site_url()?>/UsermanagementController/update/" method="post"  id="editrole">
	<?php
	if($identifier=="userdetails"){ 
	?>
	<fieldset>
		<legend>Edit Details</legend>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">CID No</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<input name="cidNumer" id="cidNumer" value="<?php echo $userdeatils->CID;?>"readonly="true" class="form-control" type="text" required />
				</div>
			</div>
		</div>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">First Name</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<input name="fname" id="fname" value="<?=$userdeatils->FirstName;?>" class="form-control" type="text" required />
				</div>
			</div>
		</div>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">Middle Name</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<input name="mame" id="mame" value="<?=$userdeatils->MiddleName;?>" class="form-control" type="text" required />
				</div>
			</div>
		</div>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">Last Name</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<input name="lname" id="lname" value="<?=$userdeatils->LastName;?>" class="form-control" type="text" required />
				</div>
			</div>
		</div>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">Agency </label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<select name="Ministry" id="Ministry" class="form-control selectpicker" required>
						<?php 
							foreach($divisionList as $min):
						?>
						<option <?php if($min['AgencyID'] == $userdeatils->AgencyID){ echo 'selected="selected"'; } ?> value="<?php echo $min['AgencyID'] ?>"><?php echo $min['name'] ?> </option>

						<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">Department</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<select name="Ministry" id="Ministry" class="form-control selectpicker" required>
						<?php 
							foreach($departmentList as $min):
						?>
					 <option <?php if($min['AgencyParentID'] == $userdeatils->AgencyParentID){ echo 'selected="selected"'; } ?> value="<?php echo $min['AgencyParentID'] ?>"><?php echo $min['name'] ?> </option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">Ministry</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<select name="Ministry" id="Ministry" class="form-control selectpicker" required>
						<?php 
							foreach($ministryList as $min):
						?>
						<option <?php if($min['AgencyMainParentID'] == $userdeatils->AgencyMainParentID){ echo 'selected="selected"'; } ?> value="<?php echo $min['AgencyMainParentID'] ?>"><?php echo $min['name'] ?> </option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">Position</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<select name="Ministry" id="Ministry" class="form-control selectpicker" required>
						<?php 
							foreach($Description as $min):
						?>
						<option <?php if($min['PositionID'] == $userdeatils->PositionID){ echo 'selected="selected"'; } ?> value="<?php echo $min['PositionID'] ?>"><?php echo $min['Description'] ?> </option>

						<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">DOB</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<input name="DOB" id="DOB" value="<?=$userdeatils->DOB;?>" class="form-control" type="text" required />
				</div>
				
			</div>
		</div>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">Email</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<input name="email" id="email" value="<?=$userdeatils->Email;?>" class="form-control" type="text" required />
				</div>
			</div>
		</div>
		
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">Password</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<input  type="password" name="pwd" id="passwd"  class="form-control" type="text" required />
				</div>
			</div>
		</div>
		
		

		<div class="form-group">
			<label class="col-sm-3 col-md-4 col-lg-2 control-label"></label>
			<div class="col-sm-7 col-md-6 col-lg-4">
				<!--<button type="submit" class="btn btn-success" id="submitbt" onclick="loadPagcontente('<?php// echo site_url()?>/userManagement/loadUserDetails/edit/2')">Update <span class="glyphicon glyphicon-ok"></span></button>-->
			<!--	<button type="submit" class="btn btn-success" id="submitbt" onclick="loadPagcontente('<?php //echo site_url()?>/userManagement/lupdate')">Update <span class="glyphicon glyphicon-ok"></span></button>-->
				<!-- <button type="submit" class="btn btn-success" id="submitbt" onclick="submituserdetails()">update <span class="glyphicon glyphicon-ok"></span></button> -->
				 <button type="submit" class="btn btn-success" id="submitbt" value="submit">update <span class="glyphicon glyphicon-ok"></span></button> 

				
			</div>
		</div>
	</fieldset>
	<?php	
	}
 	else{
	?>
	<fieldset>
		<legend>Editing </legend>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">CID No</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<input name="cidNum" id="cidNum" placeholder="CID Number" class="form-control" type="text" required />
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-4 col-lg-2 control-label"></label>
			<div class="col-sm-7 col-md-6 col-lg-4">
				<button type="reset" class="btn btn-default" >Reset <span class="glyphicon glyphicon-refresh"></span></button>
				<button type="button" class="btn btn-success" id="getbtn" onclick="loadPagcontente('<?php echo site_url()?>/UsermanagementController/loadUserDetails/edit/2')">Get Detais <span class="glyphicon glyphicon-ok"></span></button>
			</div>
		</div>
	</fieldset>
	<?php 
	}
	?>
</form>
<script type="text/javascript">
	$(function () {
        $('#DOB').datetimepicker({
           useCurrent: false, //Important! See issue #1075
           format: 'YYYY/MM/DD',
            daysOfWeekDisabled: [0, 6]
        }).on('changeDate',function(){
        	$('#DOB').datetimepicker('hide');
        });
    });
</script>