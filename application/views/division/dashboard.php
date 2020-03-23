<link href="<?php echo base_url();?>assets/css/cst2.css" rel="stylesheet"/>
        <!--  page-wrapper -->
       
        <!--  page-wrapper -->
        <body>
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard   </h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
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
        <div class="du-event">

            <!-- Begin choose us -->
            <section class="event ptb-50">

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <h1>Event</h1>
                            
                                
                        </div>
                    </div>
                    
                    <section class="du-all-event">
                    
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 du-news-date-box wow fadeInRight" data-wow-delay="0.2s">
                                <div>
                                    <div class="badge">
                                      <span>  <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/Settings/event_validate"   class="form-group">
                
                           
                                <?php foreach($user->result() as $row){?>
                                
                                <input type="hidden"  name="cid" value="<?php echo $row->cid;?>">
                           <input type="submit" style="height:70px;width:75px;font-size:16px;font-family:Times New Roman;" class="btn btn-info btn-lg" data-animation="animated zoomInUp" value="Join Us" >
                           <?php } ?>
                         
                </form>  <table>
      <tbody>
                                               <?php $count1=0; foreach($request1 as $row):?>
                                               
                                                <tr>
                                                  <?php  $count1++;?>
                                                </tr>
                                                  

                                                   
                                                  
                                                    

                                                   
                                                   
                                               
                                                <?php endforeach;?>
                                            </tbody>
                                        </table> 
                                        <p style="font-family:Times New Roman;"><font size="4" color="white"><?php
                                        // $a="+";
                                        echo ($count1);
                                        echo (" Members are interested");?></font></p>

                                </span>
                                    </div>
                                    <div class="du-date-short-des">

                                            <h3 style="font-family:Times New Roman;"><font color="white">College Rimdro</font></h3>
                                       
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
                                <a href="#"><img src="<?php echo base_url();?>assets/img1/page1_pic4.jpg" alt=""></a>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 du-news-date-box wow fadeInRight" data-wow-delay="0.2s">
                                <div>
                                    <div class="badge">
                                        24 <span>jun</span>
                                        <strong>6 <img src="assets/img1/page1_icon4.png" alt=""></strong>
                                    </div>
                                    <div class="du-date-short-des">
                                         <h3 style="font-family:Times New Roman;"><font color="white">College Foundation Day</font></h3>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
                               <a href="#"><img src="<?php echo base_url();?>assets/img1/page1_pic4.jpg" alt=""></a>
                            </div>
                        </div>
                         <div class="col-lg-12" style="height: 100px;">
                                <div class="blog-page-pagination">
                                    <!-- Pagination Small -->
                                      <ul class="pagination pagination-sm">
                                        <li><a href="#">«</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li class="disabled"><a href="#">»</a></li>
                                      </ul>
                                </div>
                            </div>
                 

  
            <div class="row">
                <div class="col-lg-8">



                  
                    <!--Simple table example -->
                 
                    <!--End simple table example -->

                </div>

              

            </div>

           

                      


         


        </div>

          </div>

</section>
</div>
</section>
</div>
</div>
       
        
        <div class="bg-primary" class="du-newsletter">
            <div class="container">

                <div class="col-md-6">
                    <h2 class="wow fadeInUp">newsletter sign up</h2>
                    <p class="wow fadeInUp">Enter your email address to get the latest alumni news,spceial events and alumni activites delivered right into your inbox</p>

                    <!-- <form id="newsletter" accept-charset="utf-8">
                        <div class="success">Your subscribe request has been sent!</div>
                        <label class="email">
                            <input type="email" value="Enter Your E-mail:">
                            <span class="error">*This is not a valid email address.</span>
                        </label>
                        <br>
                        <a href="#" data-type="submit">Subscribe</a>
                    </form>
 -->
                </div>

                <div class="col-md-6">

                    <form id="newsletter" accept-charset="utf-8">
                        <h2>contact us</h2>
                        <p>02-325252
                            <br> Rinchending,phuntsholing.Bhutan
                            <br> CST_alumni@gmail.com
                        </p>



                    </form>

                </div>

            </div>
        </div>
    


  


    <!-- end wrapper -->

  
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
 

</body>