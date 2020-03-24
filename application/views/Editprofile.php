 <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/bootstrap.min1.css">
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
                            <img style="height: 150px;width: 150px;border-radius: 50%" src="<?php echo base_url();?>assets/img1/membership.jpg "  alt=""/>
                    <!--        

                        <div class="text-center ">
                          <b>Name:Choden</b><br>
                            <b>CID:113067654</b><br>
                            <b>Batch:2020</b><br>
                       </div>
 -->
                    </div>

                 </div>
                 <br>
                     
                
                
                    <div class="container">
                        <div class="row col-md-6 ">
                        <h5><b>Workplace</b></h5>
                       
                       
                        <p class="font-weight-bold" style="margin-left:60px;color: #222;" ><b style="size: 24px">Occupation/Position</b><i class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#Occupation"></i>
                        <div id="Occupation" class="collapse">
                           
                                <div class="row text-center">
                                    <div class="col-md-6 " style="margin-left: 60px">
                                       <form>
                                      <div class="form-group">
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                    <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>


                              
                               <p style="margin-left:60px;color: #222" id=""><b>Books</b><i style="margin-left: 57px" class="glyphicon glyphicon-plus-sign btn btn-defult btn-sm" data-toggle="collapse" data-target="#books"></i>
                        <div id="books" class="collapse">
                            <div class="container-fluid padding">
                                <div class="row text-center">
                                   <div class="col-md-6 " style="margin-left: 60px">
                                        <form>
                                      <div class="form-group">
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
                                      </div>
                                     
                                    
                                     
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        </p>


                


                                  
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
                                       
                                        <input type="text" class="form-control"   placeholder="Type here">
                                          <button class="btn btn-info btn-block" >Add</button>
                                       
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
      


  



