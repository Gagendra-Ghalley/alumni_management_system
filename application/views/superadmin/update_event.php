
        <!--  page-wrapper -->
         <style>
#more {display: none;}
</style>
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px ">Dashboard</h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
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
            
<div class="du-subpage-content">
    <div class="container img-thumbnail">
        <div class="row padding">
            <div class="col-lg-6 col-md-12 col-sm-12"data-wow-delay="0.2s" >
                <div class="card">
                    <span class="img-thumbnail"><img class="card-imd-top-top" src="<?php echo base_url();?>assets/img1/slider3.png" style="height: 200px;width: 500px" ></span>
                </div>
            </div>
       
           
 <div class="container">
               
             <div class="container">
                <div class="col-md-10 col-sm-12">

     <br>
                        <!-- <?php foreach($editdetail as $row): ?>
 -->
<!-- <div class="du-current-news center bg-secondary"> -->
    <div class="container img-thumbnail">
        <div class="row padding">
           <div class="col-lg-12 col-md-12 col-sm-12"data-wow-delay="0.2s" >
                <div class="card">
                 <div class="col-md-5 col-sm-12">
                    <p class="text-primary"><b>Description</b></p>
                </div> 
                         <!-- <b><?php echo $row['date'];?></b>
                          <br>
                          <h3><?php echo $row['eventname'];?><br></h3>
                          <?php echo $row['event'];?><br> -->
                          
                         
                         <input type="text" name="id" value="<?php echo $d;?>"/>
                         
                          
                 <!-- <a href="<?php echo site_url();?>/Settings/editevent/<?php echo $row['event_id'];?>" > 
                    <button name="edit" type="submit" style="background-color:green;color:white;width:150px;height:40px;"  value="fav_CSS"  >Edit</button></a> </br> 

                     <a href="<?php echo site_url();?>/Settings/deleteevent/<?php echo $row['event_id'];?>" > <button name="subject" type="submit"  style="background-color:#cc0000;color:white;width:250px;height:40px;"
                    value="fav_CSS"  >Delete</button></a> -->







                    </div>
                        </div></div></div>  <!-- <?php endforeach; ?>  -->
                      <!--   <p class="text-bold text-center text-justify" style="font-family:georgia; color:black; font-size: 15px">Faculty Development program cum workshop on climate Across the curriculum. Educational Resource for Teacher's organized by center for Disater Risk Reducation<span id="dots">...</span> <span id="more"> and community development studies (CDRR & CDS) college of science and Technology, Royal University of Bhutan and Commission of Education and outreach, international association of seismology.Support student abd our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College, awhether you just graduated and started new job or contiue with your higher education, your alumni association is here for you. Let us be a partner in your success. ISupport student abd our community, Even a small gift can make a big impact on generations so come and change lives. Give to CST College.upport student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College.upport student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College.upport student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College</span></p> -->
                        
                       <!--  <div class="col-md-10">
                        <button class="btn btn-link text-primary" onclick="myFunction()" id="myBtn"><b>Read more</b></button>
                        </div> -->
                        
            </div>
        </div>
        
    </div>   

              
 </div>


      <div class="bg-primary" >
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>

 <script>
    
    function searchFunction(){
        
        var input,filter,table,tr,td,i;
        input =document.getElementById("myInput");
        
        filter = input.value.replace(/  +/g, ' ').toUpperCase();
        
        table=document.getElementById("tablestatus");
        tr = table.getElementsByTagName("tr");
        
        for(i=0;i<tr.length;i++){
            
            td = tr[i].getElementsByTagName("td")[1];
            
            if (td) {
                td = td.innerHTML.replace(/  +/g, ' ');
          if (td.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
    } 
        }
        
    }
    
    
</script>
 <script>
                                // Set the date we're counting down to
                                var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                  // Get today's date and time
                                  var now = new Date().getTime();
                                    
                                  // Find the distance between now and the count down date
                                  var distance = countDownDate - now;
                                    
                                  // Time calculations for days, hours, minutes and seconds
                                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                    
                                  // Output the result in an element with id="demo"
                                  document.getElementById("demo").innerHTML = days + ": &nbsp " + hours + ": &nbsp"
                                  + minutes + ": &nbsp " + seconds + ": &nbsp ";
                                    
                                  // If the count down is over, write some text 
                                  if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById("demo").innerHTML = "EXPIRED";
                                  }
                                }, 1000);
                                </script>
 <script>
                        function myFunction() {
                          var dots = document.getElementById("dots");
                          var moreText = document.getElementById("more");
                          var btnText = document.getElementById("myBtn");

                          if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "Read more"; 
                            moreText.style.display = "none";
                          } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "Read less"; 
                            moreText.style.display = "inline";
                          }
                        }
                    </script>
                    

