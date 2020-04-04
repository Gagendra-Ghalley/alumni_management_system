
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"></h1> <div class="clockwrapper"></div>
                </div>
                <!--End Page Header -->
            </div>

        


            <div class="row">
                <div class="col-lg-12">



                  
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <span>Add Event</span>
                            <div class="pull-right">
                               
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-12">
                                <div class="row du-contact-form"> 
                                  <form accept-charset="utf-8" class="form-group" id="f" action="<?php echo site_url();?>/Settings/addevent1" method="post">

                                    <div class="form-group col-md-6"> 
                                      <label>Tittle</label>
                                      <input type="text" name="event1"class="form-control" placeholder="Type tittle here..."> 
                                    </div> 

                                          

                                          <div class="form-group col-md-6"> 
                                            <label>Date</label>
                                           
                                              <input type='date' class="form-control" id='datetimepickerstart' placeholder="Date.." name="date"/>
                                          </div>



                                    <div class="col-md-12"> 
                                      <label>Description</label>
                                      <textarea class="form-control" name="event" rows="10" placeholder="Description">
                                      </textarea> 
                                     
                                    </div>
                                    


                                   <div class="col-md-12">
                                  <p></p>
                                
                                      <label>Image</label>
                                       <input type="file" name="userfile" size="20" />
                                            <br />
                                            <input type="submit" value="upload" />
                                          

                            
                                   </div>
                               <a href="#"><button type="submit" class="btn-default du-common-property" >Post the Event</button> </a>
                                  </form> 

                </div> 
              </div>

                            </div>
                           
                        </div>

                      
                    </div>
                    

                   

  

           

                      


         


        </div>
     

    </div>
  </div>
    <!-- end wrapper -->