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
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 </div>
 <br>
                           

         <?php  
           if($this->uri->segment(2) == "updated")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
            echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-success">User updated successfully</p></b>
                    </div><br><br>';
               
           }  
           if($this->uri->segment(2) == "notupdated")  
           {  
                echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-danger">User not updated</p></b>
                    </div><br><br>';

           }  
           ?>
              
                </div>
 

           
    </div>
    <!-- end wrapper -->


 