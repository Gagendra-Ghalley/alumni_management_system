
        <!--  page-wrapper -->
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
                                        22 <span>jun</span>
                                        <strong>6 <img src="assets/img1/page1_icon4.png" alt=""></strong>
                                    </div>
                                    <div class="du-date-short-des">
                                        <p>Lorem ipsum dolor sit amedgit, consectetur adipscing elitsf tell. Mauris feugiat vari dghus elit, a commodo libero dicuij futumty pottor estibulum   egestas egestas erat et iaculis.</p>
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
                                        <p>Lorem ipsum dolor sit amedgit, consectetur adipscing elitsf tell. Mauris feugiat vari dghus elit, a commodo libero dicuij futumty pottor estibulum   egestas egestas erat et iaculis.</p>
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
                 

                       <!--  <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 du-news-date-box wow fadeInRight" data-wow-delay="0.2s">
                                <div>
                                    <div class="badge">
                                        24 <span>jun</span>
                                        <strong>6 <img src="assets/img1/page1_icon4.png" alt=""></strong>
                                    </div>
                                    <div class="du-date-short-des">
                                        <p>Lorem ipsum dolor sit amedgit, consectetur adipscing elitsf tell. Mauris feugiat vari dghus elit, a commodo libero dicuij futumty pottor estibulum   egestas egestas erat et iaculis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
                                <figure><img src="<?php echo base_url();?>assets/img1/page1_pic4.jpg" alt=""></figure>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 du-news-date-box wow fadeInRight" data-wow-delay="0.2s">
                                <div>
                                    <div class="badge">
                                        14 <span>jun</span>
                                        <strong>6 <img src="<?php echo base_url();?>assets/img1/page1_icon4.png" alt=""></strong>
                                    </div>
                                    <div class="du-date-short-des">
                                        <p>Lorem ipsum dolor sit amedgit, consectetur adipscing elitsf tell. Mauris feugiat vari dghus elit, a commodo libero dicuij futumty pottor estibulum   egestas egestas erat et iaculis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
                                <figure><img src="<?php echo base_url();?>assets/img1/page1_pic4.jpg" alt=""></figure>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 du-news-date-box wow fadeInRight" data-wow-delay="0.2s">
                                <div>
                                    <div class="badge">
                                        20 <span>jun</span>
                                        <strong>3 <img src="<?php echo base_url();?>assets/img1/page1_icon4.png" alt=""></strong>
                                    </div>
                                    <div class="du-date-short-des">
                                        <p>Lorem ipsum dolor sit amedgit, consectetur adipscing elitsf tell. Mauris feugiat vari dghus elit, a commodo libero dicuij futumty pottor estibulum   egestas egestas erat et iaculis.</p>
                                    </div>
                                </div>
                            </div> -->
                           <!--  <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
                                <figure><img src="<?php echo base_url();?>assets/img1/page1_pic4.jpg" alt=""></figure>
                            </div> -->
                        </div>


                    </section>              
                    
                </div>
            </section>
            <!-- End event -->


            
            
        </div><!-- /.du-event -->
    </div><!-- /.du-subpage content -->

            <div class="row">
                <div class="col-lg-8">



                  
                    <!--Simple table example -->
                 
                    <!--End simple table example -->

                </div>

              

            </div>

           

                      


         


        </div>
        <div class="bg-primary" class="du-newsletter">
            <div class="container">

               

                <div class="col-md-6">

                    <p>@Alumni Management System</p>

                </div>

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
 

