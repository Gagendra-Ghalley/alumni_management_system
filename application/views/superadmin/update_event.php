
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
                    <h1 class="page-header"></h1> <div class="clockwrapper"></div>
                </div>
                <!--End Page Header -->
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



                                    <div class="col-md-12"> 
                                      <label>Description</label>
                                     <input type="text" class="form-control" name="editevent" rows="10" id="input" value="<?php echo $row['event'];?>"/> 
                                      
                                     
                                    </div>
                                    


                                   <div class="col-md-12">
                                  <p></p>
                                      <label>Image</label>
                                       <input type="file" name="userfile" size="20" />
                                            <br />
                                            <input type="submit" value="upload" />
                                          

                            
                                   </div>



                        <button name="update" id="update" type="submit" form="f" value="fav_CSS" class="btn-default du-common-property" >Save</button>

                         <a href="<?php echo site_url();?>/Settings/editevent/<?php echo $row['event_id'];?>" > 
                         <button name="cancel" id="cancel" type="submit" value="fav_CSS" class="btn-default du-common-property" >Cancel</button> 
                        </a></form> 


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