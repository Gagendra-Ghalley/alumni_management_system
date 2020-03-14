

                  <!--  page-wrapper -->
              <div id="page-wrapper">

	
	
			
					<div class="page-content">
						
											
						<div class="page-header">
							
							<h1>Insert Sequence<small><i class="ace-icon fa fa-angle-double-right"></i> Add Sequence </small></h1>
						</div><!-- /.page-header -->

							<!-- PAGE CONTENT BEGINS -->
							<div class="row">
								<div class="col-xs-12">

									<form class="form-horizontal" action="<?php echo site_url()?>/UsermanagementController/addDaksequence/" method="post"  id="addDak">
										<fieldset>
											<legend>Add sequence</legend>
											<div class="form-group">
												<label>File Name</label>  
											</div>
											<div class="form-group">
												<div class="col-sm-2">
												<select name="Ministry"id="Ministry" class="form-control" placeholder="Ministry"required>
													<option value=" ">Select </option>
													<?php 
														foreach($ministryList as $min):
													?>
														<option <?php if($min['name'] == $this->session->userdata('minName')){ echo 'selected="selected"'; } ?> value="<?php echo $min['minCode'] ?>"><?php echo $min['minCode'] ?> </option>
													<?php endforeach; ?>
												</select>
												</div>
												<div class="col-sm-2">
													<select name="division" id="division" class="form-control" placeholder="Division" required>
													<option value=" ">Select </option>
													<?php 
														foreach($divisionList as $min):
													?>
													<option <?php if($min['name'] == $this->session->userdata('divName')){ echo 'selected="selected"'; } ?> value="<?php echo $min['div_code'] ?>"><?php echo $min['div_code'] ?> </option>
													<?php endforeach; ?>
												</select>
												</div>
												
												<div class="col-sm-4">
													<input type="number" name="Sequenceno"  placeholder="Add Sequenceno" class="form-control"/>
												</div>
												
												<div class="col-sm-2">
													<button type="submit" class="btn btn-success" name="addfiles">Add Sequence <span class="glyphicon glyphicon-ok"></span></button>
												</div>
												</div>
											</div>
										
										</fieldset>
									</form>
								</div><!-- /.container -->
							</div><!-- /.row -->	
					</div><!-- /.page-content -->
				</div>
			
		<!-- /.ends in footer-->
		   
		