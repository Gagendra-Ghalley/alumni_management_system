	
	<!--  page-wrapper -->
        <div  style="background-color:white"; id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1> <div class="clockwrapper"><div id="clock"></div> <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>

					
						<div class="page-header">
							<h1>ODS<small><i class="ace-icon fa fa-angle-double-right"></i> Dispatch Letters</small></h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<form class="form-horizontal" action="../includes/process.php" method="post"  id="genericFormForAll" enctype="multipart/form-data">
										<div class="col-xs-12 col-md-6 col-lg-6">
										<fieldset>
											<center><legend>Sender Informations</legend></center>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Agency</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-th-large"></i></span>
														<input type="text" name="dodept" id="dodept" placeholder="Name of Dept/Agency/Office" class="form-control" />
													
													    																									
															
															</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Department</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon" required><i class="ace-icon fa fa-home"></i></span>
														<select name="adepartment" id="adepartment" class="form-control selectpicker" required>
															
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Division</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-th-large"></i></span>
														
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Section</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-th"></i></span>
														<select name="asection" id="asection" class="form-control selectpicker" required>
															
														</select>
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Fiscal Year</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Dispatch Number</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Dispatch Date</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-calendar-check-o"></i></span>
														<input data-date-format="yyyy-mm-dd" type="text" name="adate" id="adate" placeholder="Select date of Dispatch." class="form-control date-picker" required />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Time</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-clock-o"></i></span>
														<input type="text" name="atime" id="atime" placeholder="Select appointment time." class="form-control" required />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Letter Copy</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-file-pdf-o"></i></span>
														<input type="file" name="letterCopy" id="letterCopy" class="btn btn-primary" required/>
													</div>
												</div>
											</div>
										</fieldset>
										</div>
										<div class="col-xs-12 col-md-6 col-lg-6">
										<fieldset>
											<center><legend>Reciver Informations</legend></center>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Address To</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-envelope-open"></i></span>
														<input type="text" name="address" id="address" placeholder="Letter is Addressed to" class="form-control" required />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Agency</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-home"></i></span>
														<input type="text" name="doffice" id="doffice" placeholder="Name of Ministry/Agency/Office" class="form-control" />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Department</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-th-large"></i></span>
														<input type="text" name="dodept" id="dodept" placeholder="Name of Dept/Agency/Office" class="form-control" />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Division</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-th"></i></span>
														<input type="text" name="dodivision" id="dodivision" placeholder="Name of Division/Agency/Office" class="form-control" />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Destination (Place)</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-map-marker"></i></span>
														<input type="text" name="doplace" id="doplace" placeholder="Place" class="form-control" required />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Subject of Letter</label>
												<div class="col-sm-6 col-md-7 col-lg-8 selectContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-pencil-square-o"></i></span>
														<input type="text" name="subject" id="subject" placeholder="Subject." class="form-control" required />
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
												<label class="col-sm-6 col-md-5 col-lg-3 control-label">Remarks </label>  
												<div class="col-sm-6 col-md-7 col-lg-8 inputGroupContainer">
													<div class="input-group">
														<span class="input-group-addon"><i class="ace-icon fa fa-copy"></i></span>
														<input type="text" name="copyTo" id="copyTo" placeholder="Remarks,CC etc." class="form-control" required />
													</div>
												</div>
											</div>
											<div class="form-group"> 
												<label class="col-sm-6 col-md-5 col-lg-3 control-label"></label>
												<div class="col-sm-6 col-md-7 col-lg-8">
													<div class="pull-right">
														<a href="" class="btn btn-default" ><span class="glyphicon glyphicon-remove"></span> Cancel</a>
														<button type="submit" class="btn btn-success" name="dispatchLetter">Dispatch Letter <span class="glyphicon glyphicon-ok"></span></button>
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
				</div><!-- /.page-content -->
			</div>
		
		
		<!--// Form Validation -->
		<script src="../assets/formValidate/bootstrapValidator.js"></script>
		
		<!--// date and time picker -->
		<script src="../assets/js/bootstrap-datepicker.min.js"></script>
		<script src="../assets/js//bootstrap-timepicker.min.js"></script>
		
		<script type="text/javascript">
			$('#adepartment').change(function() { 			
				$('#adivision').load("selectDivision.php?choice="+ $('#adepartment').val(), function() {
					$('#adivision').trigger('chosen:updated');
				});
			});
			
			$('#adivision').change(function() { 			
				$('#asection').load("selectSection.php?choice="+ $('#adivision').val(), function() {
					$('#asection').trigger('chosen:updated');
				});
			});
			
			$('.date-picker').datepicker({
				autoclose: true,
				todayHighlight: true
			});
			
			$('#atime').timepicker({
				minuteStep: 1,
				showSeconds: false,
				showMeridian: true
			}).next().on(ace.click_event, function(){
				$(this).prev().focus();
			});
						
			$(document).ready(function () {
				var validator = $("#genericFormForAll").bootstrapValidator({
					framework: 'bootstrap',
					excluded: ':disabled',
					fields : {
						adepartment :{
							validators : {
								notEmpty : {
									message : "Please select Department."
								}
							}
						},
						adivision :{
							validators : {
								notEmpty : {
									message : "Please select Division."
								}
							}
						},
						asection :{
							validators : {
								notEmpty : {
									message : "Please select Section."
								}
							}
						},
						fyear :{
							validators : {
								notEmpty : {
									message : "Please enter fiscal year."
								}
							}
						},
						adate :{
							validators : {
								notEmpty : {
									message : "Please select the dispatch date."
								}
							}
						},
						atime :{
							validators : {
								notEmpty : {
									message : "Please select the appointment time."
								}
							}
						},
						address :{
							validators : {
								notEmpty : {
									message : "Please Enter the name of person to whom the letter is addressed."
								}
							}
						},
						doffice :{
							validators : {
								notEmpty : {
									message : "Please Enter the name of Office where the letter is sent."
								}
							}
						},
						dodept :{
							validators : {
								notEmpty : {
									message : "Please Enter the name of Dept. where the letter is sent."
								}
							}
						},
						dodivision :{
							validators : {
								notEmpty : {
									message : "Please Enter the name of division where the letter is sent."
								}
							}
						},
						doplace :{
							validators : {
								notEmpty : {
									message : "Please Enter the place where the letter is sent."
								}
							}
						},
						subject :{
							validators : {
								notEmpty : {
									message : "Please Enter the subject of the letter."
								}
							}
						},
						refNum :{
							validators : {
								notEmpty : {
									message : "Please Enter the reference number."
								}
							}
						},
						copyTo :{
							validators : {
								notEmpty : {
									message : "Please Enter the names of person to whom the letter is copied."
								}
							}
						},
						letterCopy :{
							validators : {
								notEmpty : {
									message : "Please upload scanned copy of the letter."
								}
							}
						},
					}
				});				
			});
		</script>

		  </div>
        <!-- end page-wrapper -->
		
	