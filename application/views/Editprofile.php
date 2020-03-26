<!--  <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/bootstrap.min1.css"> -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/cst6.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <br>
           
            <div class="row">
                <!-- Welcome -->
                <div class="col-md-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>


 
                    </div>
                </div>
                
            </div>
           



    <div class="container emp-profile">
            
                <div class="container">
                    <div class="col-md-9 row text-center">
                       <h3>Profile Management</h3>
                           <!--  <img style="height: 150px;width: 150px;border-radius: 50%" src="<?php echo base_url();?>assets/img1/membership.jpg "  alt=""/> -->
                         <div class="col-md-4">
                  <?php foreach($user->result() as $row){?>
        <img style="height: 150px;width: 150px;border-radius: 50%" src="<?php echo base_url();?>assets/img/profile/<?php echo $row->profile;?>" class="img-rounded img-responsive">
        <br/>
         <?php echo form_open_multipart('Settings/uploadpic');?>
        <input type="file" name="userfile" size="20" />
        <br /><input type="submit" value="upload" />
        <br/> <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
        <span class="text-success"> <?php if (isset($success_msg)) { echo $success_msg; } ?></span>
         <?php echo form_close(); ?>
        <br/> 
      
         
                </div>

                 </div>

                 </div>
                 <br>
                     
                
                
                    <div class="container">
                        <div class="row col-md-6 ">
                        <h5><b>Workplace</b></h5>
                       
                       
                        <p class="font-weight-bold" style="margin-left:60px;color: #222;" ><b style="size: 24px">Occupation/Position</b><i class="glyphicon glyphicon-plus-sign  btn btn-defult btn-sm" data-toggle="collapse" data-target="#Occupation"></i>
                        <div id="Occupation" class="collapse">
                           
                                <div class="row text-center">
                                    <div class="col-md-6 " style="margin-left: 60px">
                                       <form>
                                      <div class="form-group">
                                       
                                        <input type="text" class="form-control" id="occupation" placeholder="Your Occupation" value="<?php echo $row->occupation;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact()" >Add</button>
                                        
                                      </div>
                                     
                                    
                                     
                                    </form>
                                        
                                      
                                    </div>
                            
                                
                            </div>
                            
                        </div>
                        </p>

                          
                         <p style="margin-left:60px;color: #222" id=""><b>Organization</b><i style="margin-left: 47px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Organization"></i>
                        <div id="Organization" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                    <div class="col-md-6 " style="margin-left: 62px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="organization" class="form-control" placeholder="Your Organization" value="<?php echo $row->organization;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact()" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>


                       
                         <p style="margin-left:60px;color: #222" id=""><b>Office Address</b><i style="margin-left: 35px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Office"></i>
                        <div id="Office" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                    <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="office_address" class="form-control"   placeholder="Office Address" value="<?php echo $row->office_address;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact1()" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>
                           <p style="margin-left:60px;color: #222" id=""><b>Contact Address</b><i style="margin-left: 24px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Contact"></i>
                        <div id="Contact" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                    <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="contact_address" class="form-control"   placeholder="Contact Address" value="<?php echo $row->contact_address;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact1()" >Add</button>
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>
                         

                          <p style="margin-left:60px;color: #222" id=""><b>Email Address</b><i style="margin-left: 37px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Email"></i>
                        <div id="Email" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                   <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" class="form-control"  id="email" placeholder="Your email" value="<?php echo $row->email;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact()" >Add</button>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>


                        

                        


                               
                        </div>
                    
                    
                        <div class="row col-md-6 ">
                             <h5><b>Publication</b></h5>
                            

                               <p style="margin-left:60px;color: #222" id=""><b>Research Paper</b><i class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Paper"></i>
                        <div id="Paper" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                    <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="research_paper" class="form-control"   placeholder="Research Paper" value="<?php echo $row->research_paper;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact3()" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>


                               
                                <p style="margin-left:60px;color: #222" id=""><b>Journal</b><i style="margin-left: 50px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Journal"></i>
                        <div id="Journal" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                    <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="journal" class="form-control"   placeholder="Journal" value="<?php echo $row->journal;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact3()" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>


                              
                               <p style="margin-left:60px;color: #222" id=""><b>Books</b><i style="margin-left: 57px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Edu"></i>
                        <div id="Edu" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                   <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="book" class="form-control"   placeholder="Books" value="<?php echo $row->book;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact3()" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>

                        <br> <br> <br>


                


                                  
                        </div>    
              
                  
                      </div>

                       <div class="container">
                        <div class="row col-md-6 ">
                        <h5><b>Education</b></h5>
                        <p style="margin-left:60px;color: #222" id=""><b>College</b><i style="margin-left: 82px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Education"></i>
                        <div id="Education" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                   <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="college" class="form-control"   placeholder="College" value="<?php echo $row->college;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact1()" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>

                        
                          <p style="margin-left:60px;color: #222" id=""><b>Master</b><i style="margin-left: 87px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Master"></i>
                        <div id="Master" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                   <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="master" class="form-control"   placeholder="Master" value="<?php echo $row->master;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact2()" >Add</button>
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>
                          
                           <p style="margin-left:60px;color: #222" id=""><b>PhD</b><i style="margin-left: 105px"  class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#PhD"></i>
                        <div id="PhD" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                   <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="phD" class="form-control"  placeholder="PhD" value="<?php echo $row->phD;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact2()" >Add</button>
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>
                          
                            <p style="margin-left:60px;color: #222" id=""><b>Other</b><i style="margin-left: 97px"  class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Other"></i>
                        <div id="Other" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                   <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="other" class="form-control"  placeholder="Other" value="<?php echo $row->other;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact2()" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>
                                  
                </div>
                    
                    
                        <div class="row col-md-6 ">
                             <h5><b>Conference</b></h5>
                              

                               <p style="margin-left:60px;color: #222" id=""><b>Seminar</b><i style="margin-left: 50px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Seminar"></i>
                        <div id="Seminar" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                    <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="seminar" class="form-control"   placeholder="Seminar" value="<?php echo $row->seminar;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact4()" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>


                               

                                <p style="margin-left:60px;color: #222" id=""><b>Training</b><i style="margin-left: 50px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Training"></i>
                        <div id="Training" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                   <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="training" class="form-control"  placeholder="Training" value="<?php echo $row->training;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact4()" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>


                              
                                 <p style="margin-left:60px;color: #222" id=""><b>Workshop</b><i style="margin-left: 38px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Workshop"></i>
                        <div id="Workshop" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                    <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" id="workshop" class="form-control"   placeholder="workshop" value="<?php echo $row->workshop;?>"/>
                                          <button class="btn btn-info btn-block" onclick="updateContact4()" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>


                        
                                  
                        </div>    
              
                  
                      </div>


      
   
           <?php }?>

    </div>
      <script type="text/javascript">
  
  function updateContact() {
    
  
    var email = $('#email').val();
    var occupation= $('#occupation').val();
    var organization = $('#organization').val();
    

    $.post('<?php echo base_url();?>index.php/Settings/updateContact/',
  {
    
    email:email,
    occupation:occupation,
    organization:organization
   
    
  },function(data) 
    {   
    //$('#result').html(data);
    if(data=="1"){
      if(!alert('Your profile details successfully updated')){window.location.reload();}
     } else if(data=="0") {
      
       if(!alert('Something went wrong. Please try again later')){window.location.reload();}
     }
     
     else {
       if(!alert('No response')){window.location.reload();}
     }
  
    }); 
    
    
    
  }
   function updateContact1() {
    
  
    
    var office_address= $('#office_address').val();
    var contact_address = $('#contact_address').val();
    var college= $('#college').val();
   

    $.post('<?php echo base_url();?>index.php/Settings/updateContact1/',
  {
    
   
    office_address: office_address,
    contact_address:contact_address, 
    college:college
   
    
  },function(data) 
    {   
    //$('#result').html(data);
    if(data=="1"){
      if(!alert('Your profile details successfully updated')){window.location.reload();}
     } else if(data=="0") {
      
       if(!alert('Something went wrong. Please try again later')){window.location.reload();}
     }
     
     else {
       if(!alert('No response')){window.location.reload();}
     }
  
    }); 
    
    
    
  }
   function updateContact2() {
    
  
    
    var master= $('#master').val();
    var phD= $('#phD').val();
    var other = $('#other').val();
    

    $.post('<?php echo base_url();?>index.php/Settings/updateContact2/',
  {
    
    
    master:master,
     phD:phD,
     other:other
   
    
  },function(data) 
    {   
    //$('#result').html(data);
    if(data=="1"){
      if(!alert('Your profile details successfully updated')){window.location.reload();}
     } else if(data=="0") {
      
       if(!alert('Something went wrong. Please try again later')){window.location.reload();}
     }
     
     else {
       if(!alert('No response')){window.location.reload();}
     }
  
    }); 
    
    
    
  }
   function updateContact3() {
    
  
    
    var research_paper= $('#research_paper').val();
    var journal = $('#journal').val();
    var book= $('#book').val();
   

    $.post('<?php echo base_url();?>index.php/Settings/updateContact3/',
  {
    
    
    research_paper:research_paper,
    journal:journal,
    book:book
   
    
  },function(data) 
    {   
    //$('#result').html(data);
    if(data=="1"){
      if(!alert('Your profile details successfully updated')){window.location.reload();}
     } else if(data=="0") {
      
       if(!alert('Something went wrong. Please try again later')){window.location.reload();}
     }
     
     else {
       if(!alert('No response')){window.location.reload();}
     }
  
    }); 
    
    
    
  }
   function updateContact4() {
    
  
    
    var seminar = $('#seminar').val();
    var training= $('#training').val();
    var workshop= $('#workshop').val();

    $.post('<?php echo base_url();?>index.php/Settings/updateContact4/',
  {
    
    
    seminar:seminar,
     training:training,
     workshop:workshop
    
  },function(data) 
    {   
    //$('#result').html(data);
    if(data=="1"){
      if(!alert('Your profile details successfully updated')){window.location.reload();}
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
 



  



