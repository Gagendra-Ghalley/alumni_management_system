
<div id="page-wrapper" >
          <div class="row">
                
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px; "></h2> <div class="clockwrapper" style="color: #111"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
               
            </div>
             <div class="row">
               
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div> 
    <form class="form-horizontal" id="f" action="<?php echo base_url();?>index.php/settings/viewmember1" method="post">
    </form>

        
         <div id="page-wrapper" style="margin-left: 0px;height:100%;">
          <div class="col-md-10 col-lg-10 col-sm-12" style="background-color: #f5f5f5;">
               <div class="panel-heading bg-primary" >
                  <i class="fa fa-bar-chart-o fa-fw" style="color: #fff"></i> <span style="color: #fff" >Member search</span>
                </div>  
                
              <br>
                <div class="form-group" >
                    <label class="col-sm-2 col-md-3 col-lg-2 control-label" style="font-size: 17px"> Name</label>

                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                         
                            <input class="form-control" name="name" id="cidNum" style="height: 30px; width: 90%" placeholder=" Enter Name" form="f" type="text" required />
                        </div>
                    </div>
                </div>
                <br>
                <br>
                
            

              <!--   <div class="form-group" >
                    <label class="col-sm-3 col-md-4 col-lg-2 control-label" style="color: black;font-size: 17px"> Department</label>

                    <div class="col-sm-7 col-md-6 col-lg-4 selectContainer">

                        <div class="input-group col-md-10">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-fas fa-sitemap"></i></span>
                            
                            

                            <select class="form-control" name="f1" form="f" style="height: 30px; width: 400px">
                                <option value="" form="f">Select Item</option>
                       <?php foreach($item as $key):?>
                        <option value="<?php echo $key['AgencyParentID'];?>"> <?php echo $key['name']; ?></option>
                      <?php endforeach; ?>
                               <!--  <option value="" >Select Department</option>
                                <option value="Civil">Civil</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Electronics and Communication">Electronics and Communication</option> -->
                     <!--        </select>

                        </div>
                    </div>
                </div>  -->

              

               
                    <label class="col-sm-3 col-md-4 col-lg-2 control-label"></label>
                    <div class="col-sm-5 col-md-6 col-lg-4">
                       
                        <input type="submit" class="btn btn-success" form="f" value="Get Details" id="getbtn"><span class="glyphicon glyphicon"></span>

                         <button type="reset" form="f" class="btn btn-danger">Reset <span class="glyphicon glyphicon-refresh"></span></button>
                    </div>
              

           

      </div>
  </div>

</div>
</div>
  
      <div class="bg-primary">
   <div class="container">
      <div class="col-lg-12">
         <div class="col-md-6 col-sm-12">
            <p>&copy Alumni Management System</p>
         </div>
      </div>
   </div>
</div>
   