

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


                 <?php $count=1; foreach($checkissue as $row): ?>

            <tr>
                <br>
                <td><?php echo $count++;?></td><br>
                
             <b>Name:</b><td><?php echo $row['FirstName'];?></td><br>
             <b>Department:</b><td><?php echo $row['department'];?></td><br>
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

          

        </div>
      