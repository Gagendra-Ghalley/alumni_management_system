
<div id="page-wrapper" >
          <div class="row">
                
                <div class="col-lg-12">
<<<<<<< HEAD
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper" style="color: #111"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
=======
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
                </div>
               
            </div>
             <div class="row">
               
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div> 
                
        
           
            <div class="col-md-8 col-md-offset-1 " style="margin-top: -80px;">
                <div class="login-panel panel" style="background-color: #f5f5f5"> 
                <div class="panel-heading">
                        <h5 class="panel-title">Message</h5>
                    </div>     
                    <div class="panel-body login" >
                       <h5><b>There is no record of Alumni</b></h5>
                      <div class="modal-footer">

                           <a href="<?php echo base_url()?>index.php/settings/membersearch/"><button type="button" class="btn btn-success">Close</button></a>
       
                          </div>
                       
                        
                    </div>

                    
                </div>
            </div>

        </div>
      </div>
                
<<<<<<< HEAD
    <div class="bg-primary">
   <div class="container">
      <div class="col-lg-12">
         <div class="col-md-6 col-sm-12">
            <p>&copy Alumni Management System</p>
         </div>
      </div>
   </div>
</div>
=======
    
  
       <div class="bg-primary" >
            <div class="container">
                <div class="col-md-12 col-sm-12">


                    <p>Alumni Management System@2020</p>

              

            </div>
        </div>
      </div>
   
>>>>>>> 75afe1f37e6560b511ae03c8f8e5ce4b192350a9
