

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
                <td>  <div class="row profile">
                <div class="col-md-4">
                <?php foreach($user->result() as $row){?>
                <img src="<?php echo base_url();?>assets/img/profile/<?php echo $row->profile;?>" class="img-rounded img-responsive">
                <br/>
                 <?php echo form_open_multipart('Settings/uploadpic');?>
                <input type="file" name="userfile" size="20" />
                <br /><input type="submit" value="upload" />
                <br/> <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                <span class="text-success"> <?php if (isset($success_msg)) { echo $success_msg; } ?></span>
                 <?php echo form_close(); ?>
                <br/> 
                <!-- <label>Telephone</label>
                <input type="text" class="form-control" id="tel" placeholder="Eg: 323123 (EXT 123)" value="<?php echo $row->telephone;?>"/>
                <label>Mobile</label>
                <input type="text" class="form-control" id="mob" placeholder="Eg: 17777271" value="<?php echo $row->Mobile;?>"/>
                <label>Email</label>
                <input type="text" class="form-control" id="email" placeholder="Eg: Email" value="<?php echo $row->email;?>"/><br/>
                <button class="btn btn-success" onclick="updateContact()">Update Details</button> -->
                  <?php }?> 
                 
                </div></td>
            	<td><?php echo $row['FirstName'];?></td><br>

              	<td><?php echo $row['department'];?></td><br>
              	<td><?php echo $row['email'];?></td>
                    <?php endforeach; ?></tr> 
                </div>
                   
              

            </div>

          

        </div>
      