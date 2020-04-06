<html>
<head>
    <title>How to Import CSV Data into Mysql using Codeigniter</title>
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 link href="<?php echo base_url();?>assets/css1/bootstrap.min.css" rel="stylesheet">  
   <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/style.css">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/animate.css">
  <!-- Font Awesome Css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts1/font-awesome.css">
  <!-- Menu -->
  <link href="<?php echo base_url();?>assets/css1/flexy-menu.css" rel="stylesheet">
  <!-- Testimonial CSS -->
  <link href="<?php echo base_url();?>assets/css/cubeportfolio.min.css" rel="stylesheet">
  
  
  <!-- Font  -->
  <link href='http://fonts1.googleapis.com/css1?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts1.googleapis.com/css1?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  
  
  
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
<!--   <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />  -->
      <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
  <!--    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />  -->

      <link href="<?php echo base_url();?>assets/css/cst6.css" rel="stylesheet" /> 
    
</head>
<body>

   <div id="page-wrapper">

            <div class="row profile">
 
  <h3 align="center">Importing Student's data using CSV</h3>
  <br />

  <form method="post" id="import_csv" enctype="multipart/form-data">
   <div class="form-group">
    <label>Select CSV File</label>
    <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
   </div>
   <br />
   <button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Import CSV</button>
  </form>
  <br />
  <div id="imported_csv_data"></div>


</div>
</div>
</body>
</html>

<script>
$(document).ready(function(){

 load_data();

 function load_data()
 {
  $.ajax({
   url:"<?php echo base_url(); ?>index.php/csv_import/load_data",
   method:"POST",
   success:function(data)
   {
    $('#imported_csv_data').html(data);
   }
  })
 }

 $('#import_csv').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"<?php echo base_url(); ?>index.php/csv_import/import",
   method:"POST",
   data:new FormData(this),
   contentType:false,
   cache:false,
   processData:false,
   beforeSend:function(){
    $('#import_csv_btn').html('Importing...');
   },
   success:function(data)
   {
    $('#import_csv')[0].reset();
    $('#import_csv_btn').attr('disabled', false);
    $('#import_csv_btn').html('Import Done');
    load_data();
   }
  })
 });
 
});
</script>
