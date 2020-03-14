 <br />
<div class="container">
	<div class="panel panel-info">
	    <div class="panel-heading">
	        <i class="fa fa-envelope-o fa-fw"></i>Initiating Letter Forward 
	    </div>
	    <div class="panel-body">
	      	<form class="form-horizontal" enctype="multipart/form-data" action="#" method="post" id="forwardmessage">
	        	<div class="form-group">
		           <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Subject: </label>
		           <div class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> 
		            	<input type="text" class="form-control" id="subject" name="subject">
		            	<span id="subjecterr" class="text-danger"></span>
		           </div>    
		        </div>
		        <div class="form-group">
		           <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Message: </label>
		           <div class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> 
		           		<textarea class="form-control" id="message" name="message"></textarea>
		           		<span id="messageerr" class="text-danger"></span>
		           </div>    
		        </div>
		        <div class="form-group">
		           <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Attachment: </label>
		           <div class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> 
		            	<input type="file" name="Attachment" id="Attachment">
		           </div>    
		        </div>
	        	
		        <div class="form-group">
		        	<label class="col-lg-2 col-xs-12 col-sm-2 col-md-2">
		        		Forward to
		        	</label>
		          	<div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
		             	<select name="forwardto[]" id="forwardto" class="form-control">
			               	<option value="">Select</option>
			               <?php foreach($userlist as $row):?>
			                  <option value="<?php echo $row['cid']?>">
	                    		<?php echo $row['FirstName'].$row['MiddleName'].$row['LastName']?>
			                  </option>
			                <?php endforeach;?>
		             	</select> 
		             	<span id="forwarderr" class="text-danger"></span>
		          	</div>
		          	<div class="col-lg-4 col-xs-12 col-sm-4 col-md-4">
		          		<button type="button" onclick="addmessageto()" class="btn btn-success">Add More</button>
			             <button type="button" onclick="removemessageto()" class="btn btn-warning">Remove</button>
		          	</div>
	        	</div>
		        <span id="addmoreforwardto"></span>
		        <hr />
		        <div class="form-group">
		        	
		           <div class="col-xs-12 col-lg-10 col-sm-12 col-md-12"> 
		            <button type="button" class="btn btn-info" onclick="forwardmessage()"> <i class="fa fa-share"></i> &nbsp;&nbsp;&nbsp;Forward to</button>
		        
		            <a href="<?php echo base_url()?>index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>
		           </div>    
		        </div>
	      	</div>
	        </form>
	    </div>
	</div>
</div>
<script type="text/javascript">
  var optval='';
  <?php foreach($userlist as $row):?>
    optval+='<option value="<?php echo $row['cid']?>"><?php echo $row['FirstName'].$row['MiddleName'].$row['LastName']?></option>';
  <?php endforeach;?>
    var count=1;
    function addmessageto(){
      count++;
      $('#addmoreforwardto').append('<div id="addedforwarder'+count+'"><div class="form-group"><label class="col-lg-2 col-xs-12 col-sm-2 col-md-2"></label><div class="col-lg-6 col-xs-12 col-sm-6 col-md-6"><select name="forwardto[]" class="form-control"><option value="">Select</option>'+optval+'</select></div></div></div>');

        $("#").append('url');
    }
    function removemessageto(){
      $('#addedforwarder'+count).remove();
      count--;
    }
    function forwardmessage(){
    	if(validateform()){
    		var url='<?php echo site_url();?>/Settings/initiatemessagesubmit/';
	      	var option= {target: '#loadcontent',url:url,type:'POST',data: $('#forwardmessage').serialize()};
	     	$('#forwardmessage').ajaxSubmit(option);
    	}
    }
    function validateform(){
    	retvl=true;
    	if($('#subject').val()==""){
    		$('#subjecterr').html('Please mention subject of message');
    		retvl=false;
    	}
    	else{
    		$('#subjecterr').html('');
    	}
    	if($('#message').val()==""){
    		$('#messageerr').html('Please mention message');
    		retvl=false;
    	}
    	else{
    		$('#messageerr').html('');
    	}
    	if($('#forwardto').val()==""){
    		$('#forwarderr').html('Please select the name to forward the message');
    		retvl=false;
    	}
    	else{
    		$('#forwarderr').html('');
    	}
    	return retvl;
    }
</script>