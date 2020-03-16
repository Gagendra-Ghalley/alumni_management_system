
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Profile</h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>

          
            

            <div class="row profile">
                <div class="col-md-4">


                  <form class="form-horizontal"   id="f" action="<?php echo base_url();?>index.php/ATD/viewmember2" method="post" style="background-color: white; width:550px;padding:10px"></form>


                     

          <fieldset>
               <legend> Search Alumni </legend>
        <div class="form-group"> 
            <label class="col-sm-3 col-md-4 col-lg-2 control-label"> Name</label>

            <div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                    <input name="name" id="cidNum" placeholder=" Enter Name" form ="f"  type="text" required />
                </div>
            </div>
        </div>
        <br>
        <br>

            <div class="form-group"> 
            <label class="col-sm-3 col-md-4 col-lg-2 control-label"> Depart ment</label>
            
            <div class="col-sm-7 col-md-6 col-lg-4 selectContainer">
                

         <!--        <select id="f">
  <option value="volvo">Civil</option>
  <option value="saab">Information Technology</option>
  <option value="opel">Electrical</option>
  <option value="audi">Electronics and Communication</option>
</select>
   -->


                

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                   

                    <select name="f1" form="f">
                        <option value="" form="f">Select Department</option>
  <option value="Civil" >Civil</option>
  <option value="Information Technology" >Information Technology</option>
  <option value="Electrical" >Electrical</option>
  <option value="Electronics and Communication" >Electronics and Communication</option>
</select>

              <!--       <input name="department" id="cidNum"  form="f" placeholder=" Enter Department" type="text" required /> -->
                </div> 
            </div>
        </div>
        
            <br><br>
            
        <div class="form-group">
            <label class="col-sm-3 col-md-4 col-lg-2 control-label"></label>
            <div class="col-sm-7 col-md-6 col-lg-4">
                <button type="reset" class="btn btn-default" >Reset <span class="glyphicon glyphicon-refresh"></span></button>
                <input type="submit" class="btn btn-success" form="f" value="Get Details" id="getbtn"><span class="glyphicon glyphicon"></span>
            </div>
        </div>
        
    </fieldset>

             
                 
                </div>
                   
              

            </div>

          

        </div>
        <!-- end page-wrapper -->

    </div>
   