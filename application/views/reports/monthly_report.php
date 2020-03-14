
<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
		<meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!--<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/dist/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/fonts/font-awesome.min.css">
        <link href="<?php echo base_url();?>assets/dist/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <script async="" src="<?php echo base_url();?>assets/dist/js/analytics.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/dist/js/jquery-2.1.1.min.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url();?>assets/dist/js/bootstrap.min.js"></script>-->
        <script src="<?php echo base_url();?>assets/dist/js/moment-with-locales.js"></script>
        <script src="<?php echo base_url();?>assets/dist/js/bootstrap-datetimepicker.js"></script>
    </head>
<div class="page-header">
	<h1>Monthly Report</h1>
</div>
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" role="form" action="<?php echo site_url('reports/report_pdf');?>" method="POST">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="subject"> Select Month and Year </label>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<div class='input-group date' id='datetimepicker'>
               				<input type='text' class="form-control" name="month"/>
                			<span class="input-group-addon">
                    			<span class="glyphicon glyphicon-calendar">
                    			</span>
                		</span>
                	</div>	
				</div>
				
			</div>
    			<script type="text/javascript">
        			$(function () {
            		$('#datetimepicker').datetimepicker({
               			minViewMode: 'months',
    		   			viewMode: 'months',
    		   			pickTime: false,
    		    		format: "MM/YYYY", 
            		});
        		});
    			</script>


			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Generate Report
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Reset
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
</html>