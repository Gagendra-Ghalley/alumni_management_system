
        <!--  page-wrapper -->
         <style>
#more {display: none;}
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
            
              <?php  
           if($this->uri->segment(2) == "inserted_event")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
            echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-success">Event added successfully</p></b>
                    </div><br><br>';
               
           }  
           if($this->uri->segment(2) == "notinserted_event")  
           {  
                echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-danger">Event not added</p></b>
                    </div><br><br>';

           }  


            if($this->uri->segment(2) == "updated_event")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
            echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-success">Event updated successfully</p></b>
                    </div><br><br>';
               
           }  
           if($this->uri->segment(2) == "notupdated_event")  
           {  
                echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-danger">Event not updated</p></b>
                    </div><br><br>';

           }  



             if($this->uri->segment(2) == "deleted_event")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
            echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-success">Event deleted successfully</p></b>
                    </div><br><br>';
               
           }  
           if($this->uri->segment(2) == "notdeleted_event")  
           {  
                echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-danger">Event not deleted</p></b>
                    </div><br><br>';

           }  
           ?>
            
            

           
  <div class="col-md-12 col-sm-12">
      

     <br>
                        <?php foreach($editdetail as $row): ?>

<div class="du-current-news center bg-secondary">
    <div class="container img-thumbnail">
        <div class="row padding">
           <div class="col-lg-12 col-md-12 col-sm-12"data-wow-delay="0.2s" >
                <div class="card">
                 <div class="col-md-4 col-sm-12">

                  <div class="hovereffect">
                            <figure> <img class="card-imd-top-top" src="<?php echo base_url();?>assets/img/event/<?php echo $row['image'];?>" style="height: 230px;width:100%;" ></figure>
                                
                        </div>
                    
                </div> 
                <br>
<div class="col-lg-6 col-md-6 col-sm-6 " style="height:100%;text-align: justify;font-family:georgia; color:black; font-size: 15px" >
                 
                    
                 
               
<table>
                          <h3 class="title" style="color:#428af5;margin-left: 100px"><?php echo $row['eventname'];?><br></h3>
                          <b style="margin-left: 100px;"><?php echo $row['date'];?></b>
                          <br><br>
                          
                          <tr><?php echo $row['event'];?><br></tr></table>
                         <br>
                  
                
            </div><br><br>
            
                          
              
                          <form method ="post"></form>
                         <!--  <button class="btn btn-link text-primary btn-lg" style="margin-left:900px"><b><a href="#">Update </a></b></button> -->
                <div class="col-md-1">          
                 <a href="<?php echo site_url();?>/Settings/editevent/<?php echo $row['event_id'];?>" > 
                    <button  class="btn btn-primary" name="edit" id="edit" type="submit"  value="fav_CSS"  >Edit</button></a> </br> <br>
                  </div>
                       <div class="col-md-1">  

                    <a href="<?php echo site_url();?>/Settings/deleteevent/<?php echo $row['event_id'];?>"> 
                    

            <button  class="btn btn-danger" name="delete"   type="submit" value="fav_CSS"  >Delete</button></a>
            </div>




                                   <button class="btn btn-primary" style="height:70px;width:130px;font-size:15px;font-family:georgia;">  
                                        <p><font color="#fff">
                                          <?php echo $row['event1'];?>
                                       
                                       <b>Member(s) <br> Interested</b></font></p>
                                          </button><br>



                    </div>
                        </div></div></div>  <?php endforeach; ?> 
                        
                          
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
                    

