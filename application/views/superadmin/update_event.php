
        <!--  page-wrapper -->

        <style>
          #input{

            width:100%;
            padding:12px 20px;
            margin:8px 0;
            display: inline-block;
            border:1px solid #ccc;
            height:380px;
            text-align-last:start;
            border-radius: 4px;
            box-sizing: border-box;
          }
        </style>
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
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div>
                <!--end  Welcome -->
            </div>

        


            <div class="row">
                <div class="col-lg-12">



                  
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <span>Edit Event</span>
                            <div class="pull-right">
                               
                            </div>
                        </div>

                        <div class="panel-body">







                         
<?php foreach($editdetail as $row): ?>
<h5>Please Select the image</h5>
                    <?php echo @$error; ?> 
  <?php echo form_open_multipart('Settings/updateevent/'.$row['event_id']);?>
  <?php echo "<input type='file' name='image' size='20' />"; ?> 
                          

                            <div class="row">
                               <div class="col-md-12">
                                <div class="row du-contact-form"> 
                               
   <form class="form-horizontal"  id="f"  method="post" action="<?php echo site_url();?>/Settings/updateevent/<?php echo $row['event_id'];?>">
                           
                                    <div class="form-group col-md-6"> 
                                      <label>Tittle</label>
                                      <input type="text" name="editname"class="form-control" value="<?php echo $row['eventname'];?>"/> 
                                    </div> 

                                          

                                          <div class="form-group col-md-6"> 
                                            <label>Date</label>
                                           
                                              <input type='date' class="form-control" name="editdate" value="<?php echo $row['date'];?>"/> 
                                          </div>



                                    <div class="col-md-12" style="text-align: justify;"> 
                                      <label>Description</label>
                                     <input type="text" class="form-control" name="editevent" rows="10" id="input" value="<?php echo $row['event'];?>"/> 
                                      
                                     
                                    </div>
                                    


                                   


<?php echo "<input type='submit' name='update' class='btn-primary du-common-property btn-lg' /> ";?>
                          <?php echo "</form>"?>

                        

                         <a href="<?php echo site_url();?>/Settings/viewevent/<?php echo $row['event_id'];?>" > 
                         <button name="cancel" id="cancel" type="button" value="fav_CSS" class="btn-success du-common-property btn-lg " >Cancel</button> 
                        </a>

                      </form> 


                </div> 
              </div>

                            </div>

                           <?php endforeach; ?>
                        </div>

                      
                    </div>
                    

                   

  

           

                      


         


        </div>
     

    </div>
  </div>
    <!-- end wrapper -->