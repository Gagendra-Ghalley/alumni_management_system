<html>
<head>
    <title>Export Data to Excel in Codeigniter using PHPExcel</title>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>
	<div class="container ">
		<h3 align="center">Export Data to Excel in Codeigniter using PHPExcel</h3>
		<br />

		<div id="page-wrapper">
    

	

	<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12">

                                	<div align="center">
				<form method="post" action="<?php echo base_url(); ?>index.php/excel_export/action">
					<input type="submit" name="export" class="btn btn-success" value="Export" />
				</form>
			</div>
			<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr class="bg-primary">
					<th>FirstName</th>
					<th>CID</th>
					<th>Gender</th>
					<th>Department</th>
					<th>Year of Graduation</th>
					<th>Date</th>
					<th>Email</th>
				</tr>
				<?php
				foreach($registered_data as $row)
				{
					echo '
					<tr>
						<td>'.$row->FirstName.'</td>
						<td>'.$row->relatedUserId.'</td>
						<td>'.$row->gender.'</td>
						<td>'.$row->department.'</td>
						<td>'.$row->batch.'</td>
						<td>'.$row->date.'</td>
						<td>'.$row->email.'</td>
					</tr>
					';
				}
				?>
			</table>
			
			<br />
			<br />
		</div>
	</div>

</div>
</div>
</div>
</div>
</body>
</html>
























