<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cst6.css">
<div class="row">
	<div class="col-xs-12">
		<div id="acknowledgement" style="display: none">
		</div>
		<div id="adduserdetails">
			<form class="form-horizontal" action="<?php echo site_url()?>/userManagement/EditUser1/" method="post"  id="adduser">
			<fieldset>
				<legend>Edit</legend>
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
					<label class="col-sm-3 col-md-4 col-lg-2 control-label"></label>
					<div class="col-sm-7 col-md-6 col-lg-4">
						<button type="reset" class="btn btn-default" >Reset <span class="glyphicon glyphicon-refresh"></span></button>
						<button type="submit" class="btn btn-success" id="submitbt" onclick="submituserdetails()">Edit <span class="glyphicon glyphicon-ok"></span></button>
					</div>
				</div>
			</fieldset>
		</form>
		</div>
	</div><!-- /.container -->
</div><!-- /.row -->