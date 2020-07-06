
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
              <!--   Page Header -->
                <div class="col-lg-12">
                    <h3 class="page-header"><font size="5" color="#FFF">Change Your Password</font></h3> <div class="clockwrapper"><div id="clock"></div>,<?php echo date('D d/M/Y');?></div>
                </div>
               <!--  End Page Header -->
             </div> 

          
           	<div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div>

          <div class="row profile">
            
				 
				
				<div class="col-md-5">
					<div class="panel-heading bg-primary" >
		              <i class="fa fa-bar-chart-o fa-fw" style="color: #fff"></i> <span style="color: #fff" >Change Your Password</span>
		            </div>
						<label>Enter Old password</label><br/>
						<input type="password" class="form-control" id="old"/>
						<label>Enter New password</label><br/>
						<input type="password" class="form-control" id="new"/>
						<label>Confirm New password</label><br/>
						<input type="password" class="form-control" id="newconfirm"/>
						<br/>
						<button class="btn btn-warning" onclick="changePassword()">Change password</button>
					<!-- </div> -->
           </div>
              

             </div>
 
           

                      


         


       <!--  </div> -->
        <!-- end page-wrapper -->

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

    
   <div class="modal fade" id="incomplete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Please check the fields</h4>
      </div>
      <div class="modal-body">
        <p>Please check all the fields have been completed. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 <div class="modal fade" id="confirm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Confirm change password</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to change the password? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
         <button type="button" class="btn btn-default" data-dismiss="modal" onclick="confirmPassword()">Yes</button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


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
			 if(!alert('Password changed successfully')){window.location.reload();}
		 }
	
		});	
	}
	
	
	
</script>
 
