
        <!--  page-wrapper -->
         <style>
#more {display: none;}
</style>
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper"style="color: #111"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
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
            <div class="container">
            <div id="page-wrapper" style="margin-left: 0px">
             <?php foreach($eventdetail as $row): ?>
               <div class="col-md-12 col-lg-12 col-sm-12"  >
               <div class="col-lg-5 col-md-5 col-sm-12 img-responsive" >
                 
                    
                        <div class="hovereffect">
                            <figure> <img class="card-imd-top-top" src="<?php echo base_url();?>assets/img/event/<?php echo $row['image'];?>" style="height: 230px;width:100%;" ></figure>
                                
                        </div>
                </div>
            <div class="col-md-5 col-md-5 col-sm-12 " style="height:100%;text-align: justify;font-family:georgia; color:black; font-size: 15px" >
                
<table>
                
                          
                          <h3 class="title" style="color:#428af5;;margin-left: 100px"><?php echo $row['eventname'];?><br></h3>
                          <b style="margin-left: 100px;"><?php echo $row['date'];?></b>
                          <br><br>
                          
                          <tr><?php echo $row['event'];?><br></tr></table>
                         <br>
                  
                         
                  
              
            </div><br>
            <div class="col-md-2 col-sm-12 col-lg-2 " style="height: 210px;">
                

                    
 <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/Settings/event_validate/<?php echo $row['event_id'];?>"   class="form-group">
                <input type="hidden" name="cid" value=1>
                <input type="submit" value="Join Now" style="height:40px;font-size:15px;width: 120px" class="btn btn-primary text-left" data-animation="animated zoomInUp">
                </form> 
                
                       <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/Settings/event_cancel/<?php echo $row['event_id'];?>"   class="form-group">
                <input type="hidden" name="cid" value=1><br>
                <input type="submit" value="Cancel" style="height:40px;font-size:15px;width: 120px" class="btn btn-primary text-left" data-animation="animated zoomInUp">
                </form> 
                
                   

                        
                                   <button class="btn btn-default btn-lg" style="height:70px;width:120px;font-size:15px;font-family:georgia;text-shadow: 1px 1px 1px #111">  
                                        <p><font color="black">
                                          <?php echo $row['event1'];?>
                                       
                                       <b>Member(s) <br> Interested</b></font></p>
                                          </button><br>

                              
            </div>
        </div><?php endforeach; ?><br>
 
        </div>
        
    </div>  
    </div> 

              
 </div><br>




 <div class="bg-primary">
   <div class="container">
      <div class="col-lg-12">
         <div class="col-md-6 col-sm-12">
            <p>&copy Alumni Management System</p>
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
                    

