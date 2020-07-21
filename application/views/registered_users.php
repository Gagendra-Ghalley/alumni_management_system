<html>
<head>
	<title>Alumni Management System</title>

	<!-- Datatable CSS -->
	<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

	<!-- jQuery Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Datatable JS -->
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<body>

<br><br><br>

   <div id="page-wrapper">
    

	<!-- Table -->

	<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <div class="table-responsive">
	<table id='registereduserTable' class='table-bordered table-hover table-striped display dataTable'>

	  <thead>
	    <tr>
	      <tr class="bg-primary"><th>Name</th><th>CID/Student_ID</th>
                <!-- <th>Gender</th> --><th>Department</th><th>Year of Graduation/Faculty</th><th>Registration(Date/Time)</th><th>Email</th></tr>
            
	    </tr>
	  </thead>

	</table>

</div>

</div>
</div>
</div>
</div>


	<!-- Script -->
	<script type="text/javascript">
	$(document).ready(function(){
	   	$('#registereduserTable').DataTable({
	      	'processing': true,
	      	'serverSide': true,
	      	'serverMethod': 'post',
	      	'ajax': {
	          'url':'<?=base_url()?>index.php/Registereduser/registeredList'
	      	},
	      	'columns': [
	         	{ data: 'FirstName' },
	         	{ data: 'relatedUserId' },
	         	{ data: 'department' },
	         	{ data: 'batch' },
	         	{ data: 'date' },
	         	{ data: 'email' },
	      	]
	   	});
	});
	</script>
</body>
</html>






