<div class="page-header">
	<h1>
		Dispatch List		
	</h1>
</div>
<div class="row">
	<div class="col-xs-12">
		<a href="/ods/dispatch/add" class="btn btn-success">
			<i class="ace-icon fa fa-plus bigger-110"></i>
			Add Dispatch
		</a>
	</div>
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
					<th>Dispatch By</th>
					<th>Remarks</th>
				</tr>
			</thead>

			<tbody>
			    <?php
			     $i =  $this->uri->segment(3)+1;
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
				<!--	<td>
						<a href="/ods/dispatch/edit/<?php echo $list['dispatch_id'];?>" class="btn btn-xs btn-info">
							<i class="ace-icon fa fa-pencil bigger-120"></i>
						</a>-->
                                                     
						<!-- <a href="/ods/dispatch/delete/<?php echo $list['dispatch_id'];?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this dispatch?');">
							<i class="ace-icon fa fa-trash-o bigger-120"></i> 
						</a>
					</td>-->									
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
		<?php echo $Links; ?>
	</div>
    </div>
</div>
