<div id="page-wrapper">
<div class="row">
	<div class="col-xs-12">
		
		<div id="editrole">
			<form class="navbar-form" action="<?php echo site_url()?>/userManagement/editRole/" method="post"  id="editrole">
			<fieldset>
				<legend>Add New User</legend>
				<div class="form-group">
					<label class="col-sm-3 col-md-4 col-lg-2 control-label">CID No</label>  
					<div class="col-sm-7 col-md-6 col-lg-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
							<input name="cidNum" id="cidNum" placeholder="CID Number here " class="form-control" type="text" required />
						</div>
						<div class="input-group-btn">
            <button class="btn btn-default " type="submit" value = "Search"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
					</div>
			   </div>
						
			</fieldset>
		</form>
		</div>
	</div><!-- /.container -->
</div><!-- /.row -->
</div>
