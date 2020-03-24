 <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/bootstrap.min1.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <br>
           
            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>


 
                    </div>
                </div>
                
            </div>
            



    <div class="container emp-profile">
            
                <div class="row">
                    <div class="col-lg-4">
                        <div class="profile-img ">
                            <img style="height: 200px;width: 200px ;border-radius: 50%" src="<?php echo base_url();?>assets/img1/membership.jpg "  alt=""/>
                            
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row col-md-9">
                        <div class="profile-head">
                                                       
                                    <b>User Profile</b>
                                <ul>   
                                    <li style="color: #222"><b>Name:</b> Choden</li>
                                    <li style="color: #222"><b>CID no:</b> 1234567897</li>
                                    <li style="color: #222"><b>Education:</b> College Of Science And Technology</li>
                                    <li style="color: #222"><b>Work Place:</b> Department Of Information Technology And<br> Telecommunication(DITT)</li>
                                    <li style="color: #222"><b>Publication:</b> Research Paper on Network System in CST</li>
                                    <li style="color: #222"><b>Conference:</b> International Conference-ICSciTec</li>
                                </ul>
                        </div>
                                    
                        
                                  
                    </div>
                </div>
                  
                  
                </div>
              
                  
        </div>
      
   
           

    </div>
 <div class="bg-primary" class="du-newsletter">
            <div class="container">

               

                <div class="col-md-6">

                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>

  </div>



