
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
                    <span class="img-thumbnail"><img class="card-imd-top-top" src="<?php echo base_url();?>assets/img1/slider3.png" style="height: 200px;width: 430px" ></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6" >
                <div class="card">
                    <div class="card-body">
                        <div class="card-title text-left bold">UP COMING EVENT</div><br>
                        <h3 class="text-left" style="text-shadow: 1px 1px 2px ">College Foundation Day</h3>
                         <p class="text-left glyphicon glyphicon-map-marker" style="margin-right: 500px">CST,Rinchending,phuntsholing</p>
                        <div>
                            
                                <h2 id="demo" class="text-left" style="text-shadow: 1px 1px 2px"></h2>
                                <p class="text-left bold text-dark" style="text-shadow: 1px 1px 1px">Days &nbsp; &nbsp; &nbsp;   hours &nbsp; &nbsp; &nbsp; Minutes &nbsp; &nbsp; Second</p>

                               
                        </div>
                       
                    </div>
                  
                </div>
            </div>
            <div class="col-md-2 col-sm-6 " >
                

                    <div class="" >
                             <span> <button style="height:30px;font-size:15px;width: 100px" class="btn btn-primary text-left">
                             <!--     <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/Settings/event_validate"   class="form-group">
                <input type="text" name="cid">
                 <input type="submit" value="Join Us" class="btn-default du-common-property">
                </form> 
           
    <table>
      <tbody>
                                               <?php $count1=0; foreach($request1 as $row):?>
                                               
                                                <tr>
                                                  <?php  $count1++;?>
                                                </tr>
                                                  

                                                   
                                                  
                                                    

                                                   
                                                   
                                               
                                                <?php endforeach;?>
                                            </tbody>
                                        </table> 
                                        <button style="height:100px;width:100px;font-size:15px"><?php
                                        $a="+";
                                        echo ($count1.=$a);
                                        echo ("\nMembers");?></button> -->
                                    <a href="<?php echo base_url();?>index.php/Settings/event_validate"><font color="white" >Join Now</font> </a>

                                </button></span>

                            <br> 

                   

                            <table>
                            <!--  <tbody>
                                               <?php $count1=0; foreach($request1 as $row):?>
                                               
                                                <tr>
                                                  <?php  $count1++;?>
                                                </tr>     
                                               
                                                <?php endforeach;?>
                                            </tbody> -->
                                        </table> 
                                   <button class="btn btn-default" style="height:70px;width:100px;font-size:15px;font-family:georgia;text-shadow: 1px 1px 1px #111">  
                                        <p><font color="black"><?php
                                        // $a="+";
                                        echo ($count1);
                                        echo (" Members <br> Interested");?></font></p>
                                          </button><br><br>

<<<<<<< HEAD
                                    
               
=======
                               <!--  <button style="height:70px;width:95px;font-size:15px;" class="btn btn-primary btn-lg" data-animation="animated zoomInUp">

                                    <a href="<?php echo base_url();?>index.php/ATD/login1/"><font color="white" >Join Us</font> </a>

                                </button>       
                -->
>>>>>>> 68842006aa7b85a0f47d82cf8b0c5c62423c8e17
            </div>
        </div>
 
               
           
  <div class="col-md-10 col-sm-12">

     <br>
                        <?php foreach($eventdetail as $row): ?>

<!-- <div class="du-current-news center bg-secondary"> -->
    <div class="container img-thumbnail">
        <div class="row padding">
           <div class="col-lg-12 col-md-12 col-sm-12"data-wow-delay="0.2s" >
                <div class="card">
                 <div class="col-md-5 col-sm-12">
                    <p class="text-primary"><b>Description</b></p>
                </div> 
                <br>

                <img src="<?php echo $row['image'];?>">

                <!-- <img src=<?php echo $row['image'];?>> -->


                <!-- <img src=<?php echo $row['image'];?>> -->

                         <b><?php echo $row['date'];?></b>
                          <br>
                          <h3><?php echo $row['eventname'];?><br></h3>
                          <?php echo $row['event'];?><br>
                          
              
                          <form method ="post"></form>
                         <!--  <button class="btn btn-link text-primary btn-lg" style="margin-left:900px"><b><a href="#">Update </a></b></button> -->
                <div class="col-md-6">          
                 <a href="<?php echo site_url();?>/Settings/editevent/<?php echo $row['event_id'];?>" > 
                    <button  class="btn btn-link text-primary btn-lg" name="edit" id="edit" type="submit"  value="fav_CSS"  >Edit</button></a> </br> <br>
                  </div>
                       <div class="col-md-6">  

                    <a href="<?php echo site_url();?>/Settings/deleteevent/<?php echo $row['event_id'];?>"> 
                    

            <button  class="btn btn-link text-primary btn-lg text-right" name="delete"   type="submit" value="fav_CSS"  >Delete</button></a>
            </div>







                    </div>
                        </div></div></div>  <?php endforeach; ?> 
                      <!--   <p class="text-bold text-center text-justify" style="font-family:georgia; color:black; font-size: 15px">Faculty Development program cum workshop on climate Across the curriculum. Educational Resource for Teacher's organized by center for Disater Risk Reducation<span id="dots">...</span> <span id="more"> and community development studies (CDRR & CDS) college of science and Technology, Royal University of Bhutan and Commission of Education and outreach, international association of seismology.Support student abd our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College, awhether you just graduated and started new job or contiue with your higher education, your alumni association is here for you. Let us be a partner in your success. ISupport student abd our community, Even a small gift can make a big impact on generations so come and change lives. Give to CST College.upport student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College.upport student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College.upport student and our community Even a small gift can make a big impact on generations so come and change lives. Give to CST College</span></p> -->
                        
                       <!--  <div class="col-md-10">
                        <button class="btn btn-link text-primary" onclick="myFunction()" id="myBtn"><b>Read more</b></button>
                        </div> -->
                        
            </div>
        </div>
        
    </div>   

              
 </div>
</div>

 <div class="bg-primary" class="du-newsletter">
      <div class="bg-primary" class="du-newsletter" >
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>
      </div>
    </div>

 <script>



  function deletefn(){
//onclick="deletefn()"

//<a href="<?php echo site_url();?>/Settings/deleteevent/<?php echo $row['event_id'];?>" >
if(confirm('Are you sure?')){

<a href="<?php echo site_url();?>/Settings/deleteevent/<?php echo $row['event_id'];?>">  


  //       var option= {target: '#loadcontent',url:url,type:'POST',data: $('#fileaddformid').serialize()};
  //       $('#fileaddformid').ajaxSubmit(option);
}

else{
alert("Nothing");
}

  }
    
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
                    

