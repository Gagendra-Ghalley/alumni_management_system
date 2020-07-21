	
	

		
			
			          <div id="page-wrapper">

			
					
					
						<div class="page-header">
							<h1>ODS<small><i class="ace-icon fa fa-angle-double-right"></i> Reciept Letters</small></h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<form class="form-horizontal" action="../includes/process.php" method="post"  id="genericFormForAll" enctype="multipart/form-data">
										<div class="col-xs-12 col-md-6 col-lg-6">
										<fieldset>
											<center><legend>Sender Informations</legend></center>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Subject</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-home"></i></span>
														<input type="text" name="subject" id="subject" placeholder="Subject" class="form-control" required />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Department</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-th-large"></i></span>
														<input type="text" name="letter_no" id="letter_no" placeholder="letter no" class="form-control" />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Agency</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-th"></i></span>
														<input type="text" name="Agency" id="dodivision" placeholder="Agency" class="form-control" />
													</div>
												</div>
											</div>
											
											
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Reference Number</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-file-text-o"></i></span>
														<input type="text" name="refNum" id="refNum" placeholder="Reference Number." class="form-control" required />
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">forward to </label>  
												<div class="col-sm-6 col-md-7 col-lg-8 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-copy"></i></span>
														<input type="text" name="forward_to" id="forward_to" placeholder="Remarks, Cc, etc." class="form-control" required />
													</div>
												</div>
											</div>
											
										</fieldset>
										</div>
										<div class="col-xs-12 col-md-6 col-lg-6">
										<fieldset>
											
											
											
													
											
											
											
											
											
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Date of Receipt</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-calendar-check-o"></i></span>
														<input data-date-format="yyyy-mm-dd" type="text" name="adate" id="adate" placeholder="Select date of Receipt." class="form-control date-picker" required />
													</div>
												</div>
											</div>
											>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label"></label>
												<div class="col-sm-6 col-md-7 col-lg-8">
													<div class="pull-right">
														<a href="<?php echo BASE_URL; ?>ods/" class="btn btn-default" ><span class="glyphicon glyphicon-remove"></span> Cancel</a>
														<button type="submit" class="btn btn-success" name="recieveLetter">Recieve Letter <span class="glyphicon glyphicon-ok"></span></button>
													</div>
												</div>
											</div>
										</fieldset>
										</div>
										<div class="clearfix"></div>
										<hr class="hr-dotted"/>
									</form>
								</div><!-- /.row -->
							</div><!-- /.row -->
							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				
		
		<!-- /.ends in footer-->
		