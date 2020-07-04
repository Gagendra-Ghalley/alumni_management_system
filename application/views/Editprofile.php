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
     
      <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #e0dede">
         <h3>Profile Management</h3>
         <!--  <img style="height: 150px;width: 150px;border-radius: 50%" src="<?php echo base_url();?>assets/img1/membership.jpg "  alt=""/> -->
         <div class="col-md-5">
            <?php foreach($user->result() as $row){?>
            <img style="height: 150px;width: 150px;border-radius: 50%" src="<?php echo base_url();?>assets/img/profile/<?php echo $row->profile;?>" class="img-rounded img-responsive">
            <br/>
            <?php echo form_open_multipart('Settings/uploadpic');?>
            <input type="file" name="userfile" size="20" />
            <br />
            <input type="submit" value="upload" />
            <br/> <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
            <span class="text-success"> <?php if (isset($success_msg)) { echo $success_msg; } ?></span>
            <?php echo form_close(); ?>
            <br/>
            <?php }?>
         </div>
         <div class="col-md-6">
            <div class="row">
               <?php foreach($user->result() as $row){?> 
               <h4>Name:<?php echo $row->Name;?></h4>
               <h4>Email Address: <?php echo $row->email;?></h4>
               <?php } ?> 
            </div>
         </div>
      </div>
  
      <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">
         <?php foreach($user->result() as $row){?>
         <div class="col-md-10 ">
            <h3 class="text-center">Add Details</h3>
         </div>
         <div class="row">
            <div class="col-md-6 ">
               <h4><b>Workplace</b>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i></h4>
               <p style="margin-left:60px;color: #222;"><b style="font-size: 15px">Occupation/Position</b><i style="margin-left: 37px" class="fa fa-plus" data-toggle="collapse" data-target="#Occupation"></i>
               <div id="Occupation" class="collapse">
                  <div class="row text-center ">
                     <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                        <form>
                           <div class="form-group">
                              <input type="text" class="form-control" id="occupation" placeholder="Your Occupation" value="<?php echo $row->occupation;?>" />
                              <button class="btn btn-info btn-block" onclick="updateContact()">Add</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               </p>
               <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Organization</b><i style="margin-left: 94px" class="fa fa-plus" data-toggle="collapse" data-target="#Organization"></i>
               <div id="Organization" class="collapse">
                  <div class="container-fluid padding">
                     <div class="row text-center">
                        <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                           <form>
                              <div class="form-group">
                                 <input type="text" id="organization" class="form-control" placeholder="Your Organization" value="<?php echo $row->organization;?>" />
                                 <button class="btn btn-info btn-block" onclick="updateContact()">Add</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               </p>
               <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Office Address</b><i style="margin-left: 83px" class="fa fa-plus" data-toggle="collapse" data-target="#Office"></i>
               <div id="Office" class="collapse">
                  <div class="container-fluid padding">
                     <div class="row text-center">
                        <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                           <form>
                              <div class="form-group">
                                 <input type="text" id="office_address" class="form-control" placeholder="Office Address" value="<?php echo $row->office_address;?>" />
                                 <button class="btn btn-info btn-block" onclick="updateContact1()">Add</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               </p>
               <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Current Address</b><i style="margin-left: 71px" class="fa fa-plus" data-toggle="collapse" data-target="#Contact"></i>
               <div id="Contact" class="collapse">
                  <div class="container-fluid padding">
                     <div class="row text-center">
                        <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                           <form>
                              <div class="form-group">
                                 <input type="text" id="contact_address" class="form-control" placeholder="Contact Address" value="<?php echo $row->contact_address;?>" />
                                 <button class="btn btn-info btn-block" onclick="updateContact1()">Add</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               </p>
               <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Email Address</b><i style="margin-left: 88px" class="fa fa-plus" data-toggle="collapse" data-target="#Email"></i>
               <div id="Email" class="collapse">
                  <div class="container-fluid padding">
                     <div class="row text-center">
                        <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                           <form>
                              <div class="form-group">
                                 <input type="text" class="form-control" id="email" placeholder="Your email" value="<?php echo $row->email;?>" />
                                 <button class="btn btn-info btn-block" onclick="updateContact()">Add</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               </p>
            </div>
            <div class="col-md-6 ">
               <h4><b>Education &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i></b></h4>
               <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">College</b><i style="margin-left: 87px" class="fa fa-plus" data-toggle="collapse" data-target="#Education"></i>
               <div id="Education" class="collapse">
                  <div class="container-fluid padding">
                     <div class="row text-center">
                        <div class="col-md-12 col-sm-12 col-lg-9" style="margin-left: 43px">
                           <form>
                              <div class="form-group">
                                 <input type="text" id="college" class="form-control" placeholder="College" value="<?php echo $row->college;?>" />
                                 <button class="btn btn-info btn-block" onclick="updateContact1()">Add</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               </p>
               <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Master</b><i style="margin-left: 90px" class="fa fa-plus" data-toggle="collapse" data-target="#Master"></i>
               <div id="Master" class="collapse">
                  <div class="container-fluid padding">
                     <div class="row text-center">
                        <div class="col-md-12 col-sm-12 col-lg-9" style="margin-left: 43px">
                           <form>
                              <div class="form-group">
                                 <input type="text" id="master" class="form-control" placeholder="Master" value="<?php echo $row->master;?>" />
                                 <button class="btn btn-info btn-block" onclick="updateContact2()">Add</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               </p>
               <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">PhD</b><i style="margin-left: 113px" class="fa fa-plus" data-toggle="collapse" data-target="#PhD"></i>
               <div id="PhD" class="collapse">
                  <div class="container-fluid padding">
                     <div class="row text-center">
                        <div class="col-md-12 col-sm-12 col-lg-9" style="margin-left: 43px">
                           <form>
                              <div class="form-group">
                                 <input type="text" id="phD" class="form-control" placeholder="PhD" value="<?php echo $row->phD;?>" />
                                 <button class="btn btn-info btn-block" onclick="updateContact2()">Add</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               </p>
               <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Other</b><i style="margin-left: 101px" class="fa fa-plus" data-toggle="collapse" data-target="#Other"></i>
               <div id="Other" class="collapse">
                  <div class="container-fluid padding">
                     <div class="row text-center">
                        <div class="col-md-12 col-sm-12 col-lg-9" style="margin-left: 43px">
                           <form>
                              <div class="form-group">
                                 <input type="text" id="other" class="form-control" placeholder="Other" value="<?php echo $row->other;?>" />
                                 <button class="btn btn-info btn-block" onclick="updateContact2()">Add</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               </p>
            </div>
         </div>

         <div class="row">
            <div class="col-md-12 ">
               <div class="col-md-6 ">
                  <h4><b>Publication</b>&nbsp; &nbsp; <i class="fa fa-edit"></i></h4>
                  <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Research Paper</b><i style="margin-left: 63px"  class="fa fa-plus" data-toggle="collapse" data-target="#Paper"></i>
                  <div id="Paper" class="collapse">
                     <div class="container-fluid padding">
                        <div class="row text-center">
                           <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                              <form>
                                 <div class="form-group">
                                    <textarea type="text" id="research_paper" class="form-control" placeholder="Research Paper" value="<?php echo $row->research_paper;?>" /></textarea>
                                    <button class="btn btn-info btn-block" onclick="updateContact3()">Add</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  </p>
                  <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Journal</b><i style="margin-left: 124px" class="fa fa-plus" data-toggle="collapse" data-target="#Journal"></i>
                  <div id="Journal" class="collapse">
                     <div class="container-fluid padding">
                        <div class="row text-center">
                           <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                              <form>
                                 <div class="form-group">
                                    <textarea type="text" id="journal" class="form-control" placeholder="Journal" value="<?php echo $row->journal;?>" ></textarea> 
                                    <button class="btn btn-info btn-block" onclick="updateContact3()">Add</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  </p>
                  <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Books</b><i style="margin-left: 133px" class="fa fa-plus" data-toggle="collapse" data-target="#Edu"></i>
                  <div id="Edu" class="collapse">
                     <div class="container-fluid padding">
                        <div class="row text-center">
                           <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                              <form>
                                 <div class="form-group">
                                    <textarea type="text" id="book" class="form-control" placeholder="Books" value="<?php echo $row->book;?>" ></textarea>
                                    <button class="btn btn-info btn-block" onclick="updateContact3()">Add</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  </p>
               </div>
               <div class="col-md-6 ">
                  <h4><b>Conference&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i></b></h4>
                  <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Seminar</b><i style="margin-left: 83px" class="fa fa-plus" data-toggle="collapse" data-target="#Seminar"></i>
                  <div id="Seminar" class="collapse">
                     <div class="container-fluid padding">
                        <div class="row text-center">
                           <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                              <form>
                                 <div class="form-group">
                                    <textarea type="text" id="seminar" class="form-control" placeholder="Seminar" value="<?php echo $row->seminar;?>" ></textarea>
                                    <button class="btn btn-info btn-block" onclick="updateContact4()">Add</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  </p>
                  <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Training</b><i style="margin-left: 85px" class="fa fa-plus" data-toggle="collapse" data-target="#Training"></i>
                  <div id="Training" class="collapse">
                     <div class="container-fluid padding">
                        <div class="row text-center">
                           <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                              <form>
                                 <div class="form-group">
                                    <textarea type="text" id="training" class="form-control" placeholder="Training" value="<?php echo $row->training;?>" ></textarea>
                                    <button class="btn btn-info btn-block" onclick="updateContact4()">Add</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  </p>
                  <p style="margin-left:60px;color: #222" id=""><b style="font-size: 15px">Workshop</b><i style="margin-left: 72px" class="fa fa-plus" data-toggle="collapse" data-target="#Workshop"></i>
                  <div id="Workshop" class="collapse">
                     <div class="container-fluid padding">
                        <div class="row text-center">
                           <div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: 43px">
                              <form>
                                 <div class="form-group">
                                    <textarea type="text" id="workshop" class="form-control" placeholder="workshop" value="<?php echo $row->workshop;?>" ></textarea>
                                    <button class="btn btn-info btn-block" onclick="updateContact4()">Add</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <?php }?>
   </div>
</div>
</div>
   <!--footer-->
  
      <div class="bg-primary">
         <div class="container">
            <div class="col-md-6">
               <p>@Alumni Management System</p>
            </div>
         </div>
      </div>
   

<script type="text/javascript">
   function updateContact() {
   
       var email = $('#email').val();
       var occupation = $('#occupation').val();
       var organization = $('#organization').val();
   
       $.post('<?php echo base_url();?>index.php/Settings/updateContact/', {
   
           email: email,
           occupation: occupation,
           organization: organization
   
       }, function(data) {
           //$('#result').html(data);
           if (data == "1") {
               if (!alert('Your profile details successfully updated')) {
                   window.location.reload();
               }
           } else if (data == "0") {
   
               if (!alert('Something went wrong. Please try again later')) {
                   window.location.reload();
               }
           } else {
               if (!alert('No response')) {
                   window.location.reload();
               }
           }
   
       });
   
   }
   
   function updateContact1() {
   
       var office_address = $('#office_address').val();
       var contact_address = $('#contact_address').val();
       var college = $('#college').val();
   
       $.post('<?php echo base_url();?>index.php/Settings/updateContact1/', {
   
           office_address: office_address,
           contact_address: contact_address,
           college: college
   
       }, function(data) {
           //$('#result').html(data);
           if (data == "1") {
               if (!alert('Your profile details successfully updated')) {
                   window.location.reload();
               }
           } else if (data == "0") {
   
               if (!alert('Something went wrong. Please try again later')) {
                   window.location.reload();
               }
           } else {
               if (!alert('No response')) {
                   window.location.reload();
               }
           }
   
       });
   
   }
   
   function updateContact2() {
   
       var master = $('#master').val();
       var phD = $('#phD').val();
       var other = $('#other').val();
   
       $.post('<?php echo base_url();?>index.php/Settings/updateContact2/', {
   
           master: master,
           phD: phD,
           other: other
   
       }, function(data) {
           //$('#result').html(data);
           if (data == "1") {
               if (!alert('Your profile details successfully updated')) {
                   window.location.reload();
               }
           } else if (data == "0") {
   
               if (!alert('Something went wrong. Please try again later')) {
                   window.location.reload();
               }
           } else {
               if (!alert('No response')) {
                   window.location.reload();
               }
           }
   
       });
   
   }
   
   function updateContact3() {
   
       var research_paper = $('#research_paper').val();
       var journal = $('#journal').val();
       var book = $('#book').val();
   
       $.post('<?php echo base_url();?>index.php/Settings/updateContact3/', {
   
           research_paper: research_paper,
           journal: journal,
           book: book
   
       }, function(data) {
           //$('#result').html(data);
           if (data == "1") {
               if (!alert('Your profile details successfully updated')) {
                   window.location.reload();
               }
           } else if (data == "0") {
   
               if (!alert('Something went wrong. Please try again later')) {
                   window.location.reload();
               }
           } else {
               if (!alert('No response')) {
                   window.location.reload();
               }
           }
   
       });
   
   }
   
   function updateContact4() {
   
       var seminar = $('#seminar').val();
       var training = $('#training').val();
       var workshop = $('#workshop').val();
   
       $.post('<?php echo base_url();?>index.php/Settings/updateContact4/', {
   
           seminar: seminar,
           training: training,
           workshop: workshop
   
       }, function(data) {
           //$('#result').html(data);
           if (data == "1") {
               if (!alert('Your profile details successfully updated')) {
                   window.location.reload();
               }
           } else if (data == "0") {
   
               if (!alert('Something went wrong. Please try again later')) {
                   window.location.reload();
               }
           } else {
               if (!alert('No response')) {
                   window.location.reload();
               }
           }
   
       });
   
   }
   
   function changePassword() {
   
       var old = $('#old').val();
       var newpass = $('#new').val();
       var newconfirm = $('#newconfirm').val();
       if ((old != null && old != "") && (newpass != null && newpass != "") && (newconfirm != null && newconfirm != "")) {
           if (newpass != newconfirm) {
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
       $.post('<?php echo base_url();?>index.php/Settings/changePassword/', {
           old: old,
           newpass: newpass
   
       }, function(data) {
           //$('#result').html(data);
           if (data == "1") {
               if (!alert('Password changed successfully')) {
                   window.location.reload();
               }
           } else if (data == "2") {
   
               if (!alert('Your old password is wrong')) {
                   window.location.reload();
               }
           } else {
               if (!alert('Error changing password')) {
                   window.location.reload();
               }
           }
   
       });
   }
</script>