<form class="form-horizontal"   id="editrole">
          <fieldset>
		       <legend> Your absent Details </legend>
		<div class="form-group"> 
			<label class="col-sm-3 col-md-4 col-lg-2 control-label">Enter your CID</label>
			<div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					<input name="absent_single" id="absent" placeholder=" Enter your absent details" class="form-control" type="text" required />
				</div>
			</div>
		</div>
		
			
			
		<div class="form-group">
			<label class="col-sm-3 col-md-4 col-lg-2 control-label"></label>
			<div class="col-sm-7 col-md-6 col-lg-4">
				<button type="reset" class="btn btn-default" >Reset <span class="glyphicon glyphicon-refresh"></span></button>
				<button type="button" class="btn btn-success" id="getbtn" onclick="loadPagcontente('<?php echo site_url()?>/Settings/absentSingle/id')">Get Details <span class="glyphicon glyphicon-ok"></span></button>
			</div>
		</div>
		
	</fieldset>

</form>