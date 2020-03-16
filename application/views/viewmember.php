

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
                
                <td><?php echo $row['FirstName'];?></td><br>

                <td><?php echo $row['department'];?></td><br>
                <td><?php echo $row['email'];?></td>
                    <?php endforeach; ?></tr> 
                </div>
                   
              

            </div>

          

        </div>
      