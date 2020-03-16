 <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/bootstrap.min1.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--  page-wrapper -->
        <div id="page-wrapper">
          
           
            <div class="row">
                  <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard   </h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>


 
                    </div>
                </div>
                
            </div>
             <div class="clockwrapper">
                <div id="clock"></div>,
                <?php echo date('D d/M/Y');?>
            </div>
<div class="col-lg-12">
<div class="du-subpage-content">

 
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
                 

 </div>
      
    </div><!-- /.du-subpage content -->

           


        </div>
        <!-- end page-wrapper -->

    </div>
 <div class="bg-primary" class="du-newsletter">
            <div class="container">

               

                <div class="col-md-6">

                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>

  </div>



