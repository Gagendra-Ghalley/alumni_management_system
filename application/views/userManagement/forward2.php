 <br/>
<div class="container">
	<div class="panel panel-info">
	    <div class="panel-heading">
	        <i class="fa fa-envelope-o fa-fw"></i>forward to
	    </div>
	    <div class="panel-body">
	      	<form class="form-horizontal" enctype="multipart/form-data" action="#" method="post" id="forwardmessage">
	      		

	      		<div class="form-group">
		           <label  for="letter"class="col-xs-12 col-lg-2 col-sm-12 col-md-2">letter_no/Dak_no: </label>
		           <div class="input-group">
					 <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>

					<?php  if(!empty($userdeatils)){
               foreach($userdeatils as $row) { ?>
   <!--  your html code -->
			                 		
					 <input name="dakLetterNo" id="dakLetterNo" value="<?php echo $row['dakLetterNo'];?>"readonly="true" class="form-control" type="text" required />
				   </div>
				  
                 
                  		             
		        </div>
		   



		        <!-- <div class="form-group">
		           <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">created: </label>
		           <div class="input-group">
					 <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					 <input name="copy_to" id="copy_to" value="<?php //echo $userdeatils->created;?>"readonly="true" class="form-control" type="text" required />
				   </div>   -->
            	<input type="hidden" name="attach" value="<?php echo $row['Attachment']?>">
				   <div class="form-group">

		           <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Attachment: </label>
		           <div class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> 
		           	<?php $str_arr = explode ("/", $row['Attachment']);  
		           	$fileLocation=str_replace("/","kkk",$row['Attachment']);
		           	//echo $fileLocation;
		           	 ?>
		           	<a href="<?php echo site_url();?>/Settings/downloadfile/<?php echo $fileLocation;?>" target="_blank"><?php echo $str_arr[sizeof($str_arr)-1];?></a>
		            	
		           </div>    
		        </div>
                  		             
		        
	        	<div class="form-group">
		           <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Subject: </label>
		              <div class="input-group" class="col-xs-12 col-lg-10 col-sm-10 col-md-10">
                  		<span class="input-group-addon" id="subjecterr"><i class="glyphicon glyphicon-credit-card"></i></span>
					 <input name="subject" id="Remark" value="<?php echo $row['subject'];?>"readonly="true" class="form-control" type="text" required />   

					 </div>          
		        </div>
		        <div class="form-group">
		        	 
		           <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Place: </label>
		             <div class="input-group" class="col-xs-12 col-lg-10 col-sm-10 col-md-10">
		           <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
					 <input name="place" id="place" value="<?php echo $row['place'];?>"readonly="true" class="form-control" type="text" required />  
					</div>
		           
		              
		        </div>
		        <div class="form-group">
		        
		           <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">from: </label>
		           <div class="input-group" class="col-xs-12 col-lg-10 col-sm-10 col-md-10">
		             <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
		             <input name="from" id="receieve_add" value="<?php echo $row['from'];?>"readonly="true" class="form-control" type="text" required />
		          </div>
                  		             
		        </div>

                  <div class="form-group">
		        
		           <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Recieved Letter no: </label>
		           <div class="input-group" class="col-xs-12 col-lg-10 col-sm-10 col-md-10">
		             <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
		             <input name="Rletter" id="RecievedLetter" value="<?php echo $row['RletterNo'];?>"readonly="true" class="form-control" type="text" required />
		          </div>
                  		             
		        </div>


		        <div class="form-group">
		           

		             <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Created: </label>
		           <div class="input-group" class="col-xs-12 col-lg-10 col-sm-10 col-md-10">
		             <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
		             <input name="created" id="created" value="<?php echo $row['created'];?>"readonly="true" class="form-control" type="text" required />
		           </div>
		       </div>


		       <div class="form-group">
		           

		             <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Remarks on recieved letter: </label>
		           <div class="input-group" class="col-xs-12 col-lg-10 col-sm-10 col-md-10">
		             <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
		             <input name="remarks" id="created" value="<?php echo $row['Remark'];?>"readonly="true" class="form-control" type="text" required />
		           </div>
		       </div>
                  		             
		        <!-- </div> -->

		        <!-- <div class="form-group"> -->
		           

		             <!-- <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Message: </label> -->
		           <!-- <div class="input-group" class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> -->
		             <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span> -->
		             <!-- <input name="message" id="message" value="<?php //echo $userdeatils->created;?>"readonly="true" class="form-control" type="text" required /> -->
		           <!-- </div> -->
                  		             
		        <!-- </div> -->
		         <?php } ?>  <!-- //foreach close -->
		         <?php } ?>  <!-- //if close -->

		        <div class="form-group">
		           <label class="col-lg-2 col-xs-12 col-sm-2 col-md-2">Message: </label>
		           <div class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> 
		           		<textarea class="form-control" id="message" name="message"></textarea>
		           		<span id="messageerr" class="text-danger"></span>
		           </div>    
		        </div>
	        	
		        <div class="form-group">
		        	<label class="col-lg-2 col-xs-12 col-sm-2 col-md-2">
		        		Forward to
		        	</label>
		          	<div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
		             	<select name="forwardto[]" id="forwardto" class="form-control">
			               	<option value="">Select</option>
			               <?php 
			               foreach($name as $row):  ?>
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
		             <button type="button" class="btn btn-info" onclick="forwardmessage('forward')"> <i class="fa fa-share"></i> &nbsp;&nbsp;&nbsp;Forward to</button> 
		             
		             <button type="button" class="btn btn-info" onclick="forwardmessage('complete')"> <i class="fa fa-send"></i> &nbsp;&nbsp;&nbsp;Complete Action</button>
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
  <?php foreach($name as $row):?>
    optval+='<option value="<?php echo $row['cid']?>"><?php echo $row['FirstName'].$row['MiddleName'].$row['LastName']?></option>';
  <?php endforeach;?>
    var count=1;
    function addmessageto(){
      count++;
      $('#addmoreforwardto').append('<div id="addedforwarder'+count+'"><div class="form-group"><label class="col-lg-2 col-xs-12 col-sm-2 col-md-2">forward to</label><div class="col-lg-6 col-xs-12 col-sm-6 col-md-6"><select name="forwardto[]" class="form-control"><option value="">Select</option>'+optval+'</select></div></div></div>');

        //$("#").append('url');
    }
    function removemessageto(){
      $('#addedforwarder'+count).remove();
      count--;
    }
    function forwardmessage(param){
    	if(validateform()){
    		var url='<?php echo site_url();?>/Settings/messagesubmit/'+param;
    		// var url='<?php //echo site_url();?>/Settings/messageforward/'+param;
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
    	// if($('#message').val()==""){
    		// $('#messageerr').html('Please mention message');
    		// retvl=false;
    	// }
    	// else{
    		// $('#messageerr').html('');
    	// }
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