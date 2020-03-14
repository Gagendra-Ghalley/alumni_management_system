<title>ods</title>
<div class="page-header">
        <a href="<?php echo base_url('pdf/ODSUserManual_v1.1.pdf');?>">Download ODS User Manual here</a>
	<h1>
		Dispatch List		
	</h1>
</div>
<br>

<?php if($this->session->flashdata('message')):?> 
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Success!</h4>
  <p><?php echo $this->session->flashdata('message');?></p>
</div>
<?php endif;?>

<div class="row">
    <div class="col-xs-12">
        <table id="simple-table" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
				    <th>Sl.No</th>
					<th>Dispatch No.</th>
					<th>Date</th>				    
					<th>Details of the Addressee</th>
					<th>Agency</th>
					<th>Place</th>
					<th>Subject</th>
					<th>Sector</th>
					<th>Copy To</th>
					<th>Send Via</th>
					<th>Dispatch by</th>
					<th>Remarks</th>
				</tr>
			</thead>

			<tbody>
			    <?php 
			     $i = $this->uri->segment(3)+1;
			     if($dispatchList != null):
			     foreach($dispatchList as $list):
			    ?>
				<tr>
					<td><?php echo $i;?></td>	
					<td><?php echo $list['file_no'];?></td>				
					<td><?php echo date('jS M, Y', strtotime($list['created']));?></td>
					<td><?php echo $list['dispatch_addr'];?></td>
					<td><?php echo $list['agency'];?></td>
					<td><?php echo $this->masterdata->getPlaceName($list['place_id']);?></td>
					<td><?php echo $list['subject'];?></td>
					<td><?php echo $this->masterdata->getSectorName($list['sector_id']);?></td>
					<td><?php echo $list['copy_to'];?></td>
					<td><?php echo $list['sent_via'];?></td>
					<td><?php echo $list['dispatch_by'];?></td>
					<td><?php echo $list['remarks'];?></td>
				</tr>
				<?php
				 $i++;
				 endforeach;
				 else:
				?>
			    <tr>
			    	<td colspan="12">No Record Found</td>
			    </tr>
			    <?php endif;?>
			</tbody>
		</table>
		<div align="center">
		<?php if(count($dispatchList) > 9):
				echo $Links; 
			endif;
		?>
		</div>
	</div>
</div>
