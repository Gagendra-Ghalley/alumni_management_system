
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                     <h2 class="text-left" style="text-shadow: 1px 1px 2px ">Update Profile Details</h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>

          
           	

            <div class="row profile">
               <div class="col-md-4">
                	<!-- <?php foreach($user->result() as $row){?>
				<img src="<?php echo base_url();?>assets/img/profile/<?php echo $row->profile;?>" class="img-rounded img-responsive"> -->
				<!-- <br/>
				 <?php echo form_open_multipart('Settings/uploadpic');?>
				<input type="file" name="userfile" size="20" />
				<br /><input type="submit" value="upload" />
				<br/> <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
				<span class="text-success"> <?php if (isset($success_msg)) { echo $success_msg; } ?></span>
				 <?php echo form_close(); ?> -->
				<br/>  
				<label>Telephone</label>
				<input type="text" class="form-control" id="tel" placeholder="Eg: 323123 (EXT 123)" value="<?php echo $row->telephone;?>"/>
				<label>Mobile</label>
				<input type="text" class="form-control" id="mob" placeholder="Eg: 17777271" value="<?php echo $row->Mobile;?>"/>
				<label>Email</label>
				<input type="text" class="form-control" id="email" placeholder="Eg: Email" value="<?php echo $row->email;?>"/><br/>
				<button class="btn btn-success" onclick="updateContact()">Update Details</button>
				 <?php }?>
				 
                </div>
				
				
				
              

            </div>

           

                      


         


        </div>
       
<script type="text/javascript">
	
	function updateContact() {
		
		var tel = $('#tel').val();
		var mob = $('#mob').val();
		var email = $('#email').val();
		$.post('<?php echo base_url();?>index.php/Settings/updateContact/',
	{
		tel:tel,
		mob:mob,
		email:email
		
	},function(data) 
		{		
		//$('#result').html(data);
		if(data=="1"){
			if(!alert('Contact details successfully updated')){window.location.reload();}
		 } else if(data=="0") {
		 	
		 	 if(!alert('Something went wrong. Please try again later')){window.location.reload();}
		 }
		 
		 else {
			 if(!alert('No response')){window.location.reload();}
		 }
	
		});	
		
		
		
	}
	
	
	
	
	
</script>
 

     
			
