
        <!--  page-wrapper -->
        <div id="page-wrapper">
          <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper" style="color: #111"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>
             <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('')) {echo "<div class='alert alert-success'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                     

 
                    </div>
                </div><br>
            

        


            <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <span>Add News</span>
                            <div class="pull-right">
                               
                            </div>
                        </div>
                        
                    
                                    <div class="col-md-12"> 
                                      <form method="post">
                                      <textarea type="text"  class="form-control" name="describtion" value="save Data" rows="10" placeholder="Description" required>
                                      </textarea>
                                     
                                    </div>
                                    
                                    


                                  
                         
                          
                               
                                  <button style="border: none"> 
                                    <input type="submit" name="save" value="submit"/></button>
                                     </form> 

                    </div> 
                  </div>

                   </div>
                           
                        
                   