
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
     
             <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <span>Add Event</span>
                            <div class="pull-right">
                               
                            </div>
                        </div>
                        <br>
                      </br>
                      <br>


                    <?php echo @$error; ?> 
                      <?php echo form_open_multipart('Settings/addevent1');?>
                      <?php echo "<input type='file' name='image' size='20' />"; ?>
  
                        <div class="panel-body" style="background-color: #f5f5f5">
                            <div class="row">
                               <div class="col-md-12" >
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
            
                                             
                            
                                   </div>
                                   <?php echo "<input type='submit' name='Post the Event' class='btn btn-info' /> ";?>
                          <?php echo "</form>"?>
                          <!-- to update both image and data, use input type instead of button-leki -->
                              
                               <!-- <a href="#"><button type="submit" class="btn-default du-common-property" >Post the Event</button> </a> -->
                                  </form> 

                </div> 
              </div>

                            </div>
                           
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
               <div class="bg-primary" style="margin-top: 120px;">
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>Alumni Management System@2020</p>

                </div>

            </div>
        </div>
      </div>