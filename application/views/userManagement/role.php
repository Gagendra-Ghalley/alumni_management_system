               
<form class="form-horizontal" action="<?php echo site_url()?>/userManagement/role/" method="post"  id="adduser">
	
		<fieldset>
<div class="row">
	<div class="col-xs-12">
		<div id="acknowledgement" style="display: none">
		</div>
		<div id="adduserdetails">
			


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
						<button type="submit" class="btn btn-success" id="submitbt" onclick="submituserdetails()">Edit role<span class="glyphicon glyphicon-ok"></span></button>
					</div>
				</div>

			</fieldset>
		</form>
		</div>
	</div><!-- /.container -->
</div><!-- /.r-->