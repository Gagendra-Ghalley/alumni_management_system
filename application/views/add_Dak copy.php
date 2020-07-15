<div id="page-wrapper">
<div class="page-header">
	<h1>Generate DaK no</h1>
</div>
<div class="row">
	<div class="col-xs-12">
		<div id="loadcontenthere">
			<form class="form-horizontal" role="form" id="fileaddformdak" action="<?php echo site_url('UserManagement/addDak');?>" method="POST">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="subject" > Subject </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" id="subject" class="form-control" name="subject" placeholder="Insert Subject" required/>
				</div>
				<?php echo form_error('Subject'); ?>

			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="dispatch_addr"> From  </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" id="address_to" class="form-control" name="From" placeholder="From" required/>
				</div>
				<?php echo form_error('address_to'); ?>

			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="agency"> Agency </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" id="agency" class="form-control" name="agency" placeholder="Insert Agency"/>
				</div>
				<?php echo form_error('agency'); ?>

			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="place">Place</label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<select class="chosen-select form-control" id="place" name="place" data-placeholder="Choose a place" class="col-xs-10 col-sm-5" required>
					   	<option value="">Select place</option>
					   <?php foreach($place as $key):?>
						<option value="<?php echo $key['id'];?>"><?php echo $key['place']; ?></option>
					  <?php endforeach; ?>
					</select>
				</div>
			</div>

			
				
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="file">date</label>
				
					<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" id="date" class="form-control" name="date" placeholder="Insert date" required/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="copy_to"> Address to </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" id="subject" class="form-control" name="copy_to[]" placeholder="Insert Copy To"/>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<button type="button" onclick="addfield()" class="btn btn-primary"> Add More</button>
				</div>
			</div>
			<span id="addcopyfield"></span>
			
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="sent_via"> DAK </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" name="letterNo" id="letterNo" class="form-control"> 
					<input type="hidden" name="seqNo" id="seqNo" value="<?=$seqNo?>"> 
					
					<span id="letterNoerr" class="text-danger"></span>
				</div>
				<?php echo form_error('sent_via'); ?>

			</div>
			<div class="form-group" id="addId" style="display: none">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="dispatch_by"> Recieved By </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text"  value= "<?php echo $this->session->userdata('name');?>"  id="subject" class="form-control" name="Recieved by" placeholder="Insert Recieved By"/>
				</div>
				<?php echo form_error('Recieved_by'); ?>

			</div>
            <div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="sent_via"> Letter No of recieved letter </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input type="text" name="RletterNo" id="RletterNo" class="form-control"> 
					<!-- <input type="hidden" name="seqNo" id="seqNo" value="<?=$seqNo?>">  -->
					
					<span id="letterNoerr" class="text-danger"></span>
				</div>
				<?php echo form_error('sent_via'); ?>

			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="remarks">  Remarks </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<textarea type="text" id="remarks" class="form-control" name="remarks" placeholder="Insert remarks"></textarea>
				</div>
				<?php echo form_error('remarks'); ?>

			</div>

			<div class="clearfix form-actions" id="addbtn">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-primary" type="button" onclick="addfile()">
						<!-- <i class="ace-icon fa fa-check bigger-110"></i> -->
						<i class="ace-icon fa fa-save" style="font-size:24px"></i>
						Save
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn btn-danger btn-lg" type="button" >

					<a href="#" onclick="loadPage('<?php echo site_url()?>/Settings/dakgen')"> 
						<i class="ace-icon fa fa-close bigger-110"></i>
						Reset
					</a>
					</button>

				</div>
			</div>
			<div class="row" id="fileModel" style="display: none">
				<div class="col-xs-12">
					<div  class="alert alert-info" >
						<div class="form-group">
							<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
								<label>Your Recieved Dak no: <b><span id="filename"></span></b></label>
								
								<input type="hidden" name="lastweqno" id="lastweqno"> </input>
								<input type="hidden" name="lastweqnotoupdate" id="lastweqnotoupdate"> </input>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 pull-right">
								<button class="btn btn-primary" type="button" onclick="addfile()"> Save</button>
								&nbsp; &nbsp; &nbsp;
								<a href="<?php echo base_url();?>">
                					<button class="btn btn-danger" type="button">Cancel</button>
					            </a>			
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		</div>
		<!-- PAGE CONTENT BEGINS -->
		
	</div>
</div>
</div>
<script type="text/javascript">
	

	function addfile(){
		$('#lastweqno').val($('#letterNo').val()+'/'+parseInt($('#seqNo').val()+1));
		$('#lastweqnotoupdate').val(parseInt($('#seqNo').val())+1);

		var url='<?php echo site_url();?>/settings/addDaks/discontinue';//+condition;
		var option= {target: '#loadcontent',url:url,type:'POST',data: $('#fileaddformdak').serialize()}; 
		$('#fileaddformdak').ajaxSubmit(option);
	}
	function showfilename(){
		if($('#letterNo').val()!=""){
			var url='<?php echo site_url();?>/Settings/getDaksequenceNo';
			$.ajax({
				url:url,
				success:function(data){
					//alert(data);
					if(data!="sorry"){
						//alert();
						$('#filename').append($('#letterNo').val()+'/'+(parseInt(data)+1));
						$('#lastweqno').val($('#letterNo').val()+'/'+(parseInt(data)+1));
						$('#lastweqnotoupdate').val((parseInt(data)+1));
						
					}
					else{
						$('#filename').append("Not able to pull file sequence");
					}
				}
			});
			$('#fileModel').show();
			$('#addbtn').hide();
			$('#letterNoerr').html('');
			$('#letterNo').prop('disabled',  'true');
		}
		else{
			$('#letterNoerr').html('Please provide letter number	');
		}
		
	}
	
	$(function () {
        $('#date').datetimepicker({
           useCurrent: false, //Important! See issue #1075
           format: 'YYYY-MM-DD',
            daysOfWeekDisabled: [0, 6]
        }).on('changeDate',function(){
        	$('#date').datetimepicker('hide');
        });
    });
    var initialcount=0;
    function addfield(){
    	initialcount++;
    	$('#addcopyfield').append('<div class="form-group" id="addedfiles'+initialcount+'"><label class="col-xs-12 col-sm-3 col-md-3 control-label">Copy To</label><div class="col-xs-12 col-sm-5 col-md-5"><input type="text" id="subject'+initialcount+'" class="form-control" name="copy_to[]" placeholder="Insert Copy To"/></div><div class="col-xs-12 col-sm-4 col-md-4"><button type="button" id="delbuton'+initialcount+'" class="btn btn-danger" onclick="deleterecord('+initialcount+')">Delete</button></div></div>');
    }
    function deleterecord(id){
    	$('#addedfiles'+id).remove();
    }
</script>
