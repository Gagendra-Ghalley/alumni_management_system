
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>
             <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div>

          
           	

          <div id="page-wrapper" style="margin-left: 0px">
            
				
				
				<div class="col-lg-12"style="margin-top: 10px;background-color: #f5f5f5">
					<div class="panel-heading bg-primary" >
		              <i class="fa fa-bar-chart-o fa-fw" style="color: #fff"></i> <span style="color: #fff" >Change Your Password</span>
		            </div>
					<br>
					
						<label>Enter Old password</label><br/>
						<input type="password" class="form-control" id="old"/>
						<label>Enter New password</label><br/>
						<input type="password" class="form-control" id="new"/>
						<label>Confirm New password</label><br/>
						<input type="password" class="form-control" id="newconfirm"/>
						<br/>
						<button class="btn btn-info" onclick="changePassword()">Change password</button><br><br>
					<!-- </div> -->
           </div>
              

             </div>
 

    </div>
</div>
    <!-- end wrapper -->
   
<div class="bg-primary" style="margin-top: 147px;">
            <div class="container">
                <div class="col-lg-12">
                <div class="col-md-6 col-sm-12">
                    <p>Alumni Management System@2020</p>
                </div>
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
	
	function changePassword() {
		
		var old = $('#old').val();
		var newpass = $('#new').val();
		var newconfirm = $('#newconfirm').val();
		if((old!=null&&old!="")&&(newpass!=null&&newpass!="")&&(newconfirm!=null&&newconfirm!="")) {
			if(newpass!=newconfirm){
				alert('The confirm password is not same as the new password.');
			} else {
				
				$('#confirm').modal();
				
			}
		} else {
			$('#incomplete').modal();
		}
		
		
	}
	
	function confirmPassword() {
		var old = $('#old').val();
		var newpass = $('#new').val();
		$.post('<?php echo base_url();?>index.php/Settings/changePassword/',
		{
			old:old,
			newpass:newpass
		
	},function(data) 
		{		
		//$('#result').html(data);
		if(data=="1"){
			if(!alert('Password changed successfully')){window.location.reload();}
		 } else if(data=="2") {
		 	
		 	 if(!alert('Your old password is wrong')){window.location.reload();}
		 }
		 
		 else {
			 if(!alert('Error changing password')){window.location.reload();}
		 }
	
		});	
	}
	
	
	
</script>
 
