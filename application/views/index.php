
 <div id="page-wrapper">
    

            


    <div class="row profile">
 
<?php if(!empty($files)){ foreach($files as $frow){ ?>
<div class="file-box ">
    <div class="box-content">
        <h5><?php echo $frow['title']; ?></h5>
        <div class="preview ">
            <embed src="<?php echo base_url().'uploads/'.$frow['file_name']; ?>">
        </div>
        <a href="<?php echo base_url().'index.php/files/download/'.$frow['id']; ?>" class="dwn">Download</a>
    </div>
</div>
<?php } } ?>

</div>
</div>






