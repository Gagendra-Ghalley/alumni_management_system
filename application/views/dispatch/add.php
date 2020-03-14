<div class="page-header">
	<h1>Add New Dispatch</h1>
</div>
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" role="form" action="<?php echo site_url('dispatch/add');?>" method="POST">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="subject"> Subject </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" id="subject" class="form-control" name="subject" placeholder="Insert Subject" required/>
				</div>
				<?php echo form_error('Subject'); ?>

			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="dispatch_addr"> Dispatch Addressee </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" id="dispatch_addr" class="form-control" name="dispatch_addr" placeholder="Insert Dispatch Addr" required/>
				</div>
				<?php echo form_error('dispatch_addr'); ?>

			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="agency"> Agency </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" id="subject" class="form-control" name="agency" placeholder="Insert Agency"/>
				</div>
				<?php echo form_error('agency'); ?>

			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="place">Place</label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<select class="chosen-select form-control" id="place" name="place" data-placeholder="Choose a place" class="col-xs-10 col-sm-5" required>
					   	<option value="">Select place</option>
					   <?php foreach($places as $key=>$list):?>
						<option value="<?php echo $list['place_id'];?>"><?php echo $list['place_name']; ?></option>
					  <?php endforeach; ?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="file">File</label>
				<?php

				function getFiscalYears(){
					if(date('m') > 6){
						$fiscalYear = date('Y') . '-' . (date('Y')+1);
					}else{
						$fiscalYear = (date('Y')-1) . '-' . date('Y');
					}

					return $fiscalYear;
				}

				?>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<select class="chosen-select form-control" id="file" name="file" data-fileholder="Choose a file" class="col-xs-10 col-sm-5" required>
					   	<option value="">Select File</option>
					   <?php foreach($files as $key=>$list):?>
					    <?php
					       if($this->session->userdata('sector_id') == $list['sector_id']):

									 //   	 $dispatchNo = $list['file_name'].'/'.getFiscalYears().'/'.$z;
					       	 $dispatchNo = $list['file_name'].'/'.getFiscalYears().'/';
					    ?>
						<option value="<?php echo $dispatchNo;?>"><?php echo $dispatchNo; ?></option>

					  <?php
					    endif;
					  endforeach; ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="copy_to"> Copy To </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" id="subject" class="form-control" name="copy_to" placeholder="Insert Copy To"/>
				</div>
				<?php echo form_error('copy_to'); ?>

			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="sent_via"> Send Via </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="checkbox" name="sent_via[]" value="E-mail">&nbsp E-mail</br>
					<input type="checkbox" name="sent_via[]" value="By Post">&nbsp By Post</br>
					<input type="checkbox" name="sent_via[]" value="Other">&nbsp Other</br>
				</div>
				<?php echo form_error('sent_via'); ?>

			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="dispatch_by"> Dispatch By </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" id="subject" class="form-control" name="dispatch_by" placeholder="Insert Dispatch By"/>
				</div>
				<?php echo form_error('dispatch_by'); ?>

			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="remarks"> Remarks </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<textarea type="text" id="remarks" class="form-control" name="remarks" placeholder="Insert remarks"></textarea>
				</div>
				<?php echo form_error('remarks'); ?>

			</div>

			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Add
					</button>

					&nbsp; &nbsp; &nbsp;
					<a href="<?php echo site_url('dispatch/index');?>" class="btn btn-danger" type="reset">
						<i class="ace-icon fa fa-close bigger-110"></i>
						Cancel
					</a>
				</div>
			</div>
		</form>
	</div>
</div>
