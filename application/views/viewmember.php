

        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>
             <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div>

          
            

            <div id="page-wrapper" style="margin-left: 0px">
     
             <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #f5f5f5">


                 <?php $count=1; foreach($checkissue as $row): ?>

            <tr>
                <br>
                <td><?php echo $count++;?></td><br>
                
             <b>Name:</b><td><?php echo $row['FirstName'];?> <!-- <?php echo $row['MiddleName'];?> <?php echo $row['LastName'];?> --></td><br>
             <b>Department:</b><td> <?php 
                                                    $ids=explode(", ", $row['AgencyParentID']);//bpas_user_profiles
                                                    foreach ($ids as $key => $AgencyParentID) { //id
                                                      echo $this->db->get_where('department',array('AgencyParentID' =>trim($AgencyParentID)))->row()->name ;//tablename,id,name
                                                    }
                                                    

                                                   ?>
                                                    
                                                   
                                                   </td> 
              <br>
             <b>Email:</b><td><?php echo $row['email'];?></td><br>
             <b>Occupation:</b><td><?php echo $row['occupation'];?></td><br>
             <b>Organization:</b><td><?php echo $row['organization'];?></td><br>
             <b>Office Address:</b><td><?php echo $row['office_address'];?></td><br>
              <b>Master:</b><td><?php echo $row['master'];?></td><br>
             <b>phD:</b><td><?php echo $row['phD'];?></td><br>
             <b>Others:</b><td><?php echo $row['other'];?></td><br>
             <b>Seminar:</b><td><?php echo $row['seminar'];?></td><br>
             <b>Training:</b><td><?php echo $row['training'];?></td><br>
             <b>Workshop:</b><td><?php echo $row['workshop'];?></td><br>
             <b>Research paper:</b><td><?php echo $row['research_paper'];?></td><br>
             <b>Book:</b><td><?php echo $row['book'];?></td><br>
             <b>Journal:</b><td><?php echo $row['journal'];?></td><br>
                    <?php endforeach; ?></tr> 

                </div>
                   
              

            </div>
          
<br>
          

        </div> <br>
    </div>
        <div class="bg-primary">
            <div class="container">

               


                <div class="col-lg-12">

                <div class="col-md-6 col-sm-12">


                    <p>Alumni Management System@2020</p>

                </div>

            </div>
        </div>
      </div>
      