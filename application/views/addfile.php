

                  <!--  page-wrapper -->
              <div id="page-wrapper">

	
	
			
					<div class="page-content">
						
											
						<div class="page-header">
							<?php if($message=="initiatefile"){?>	
							<h1>Insert File<small><i class="ace-icon fa fa-angle-double-right"></i> Add File </small></h1>
							<?php }else{?>
								<h1>Add Sequence Number<small></h1>
							<?php } ?>
						</div><!-- /.page-header -->

							<!-- PAGE CONTENT BEGINS -->
							<div class="row">
								<div class="col-xs-12">

									<form class="form-horizontal" action="<?php echo site_url()?>/usermanagementController/addfile/" method="post"  id="addfile">
										<fieldset>
											<?php if($message=="initiatefile"){?>	
												<legend>Add New file name</legend>
												<div class="form-group">
													<label>File Name</label>  
												</div>
											<?php } ?>
											
											<div class="form-group">
												<div class="col-sm-2">
												<select name="Ministry"id="Ministry" class="form-control" required>
													<option value=" ">Select </option>
													<?php 
														foreach($ministryList as $min):
													?>
														<option <?php if($min['name'] == $this->session->userdata('minName')){ echo 'selected="selected"'; } ?> value="<?php echo $min['minCode'] ?>"><?php echo $min['minCode'] ?> </option>
													<?php endforeach; ?>
												</select>
												</div>
												<div class="col-sm-2">
													<select name="division" id="division" class="form-control" required>
													<option value=" ">Select </option>
													<?php 
														foreach($division as $min):
													?>
													<option <?php if($min['name'] == $this->session->userdata('divName')){ echo 'selected="selected"'; } ?> value="<?php echo $min['div_code'] ?>"><?php echo $min['div_code'] ?> </option>
													<?php endforeach; ?>
												</select>
												</div>
												<div class="col-sm-4">
													<?php if($message=="initiatefile") {?>
														<input type="text" name="filename"  placeholder="File Name" class="form-control"/>
													<?php  } 
													



                                                          else { ?>
														<input type="text" name="sequenceNo"  placeholder="sequenceNo" class="form-control"/>
													<?php }?>


													</div>
													<div class="col-sm-2">
														<input type="hidden" name="savetype" value="<?=$message?>">	
														<button type="submit" class="btn btn-success" name="addfiles">Add <span class="glyphicon glyphicon-ok"></span></button>
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
		   
		