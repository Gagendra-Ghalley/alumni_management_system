
  
  <div id="page-wrapper">
  <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>
             <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('09:00:00AM')) {echo "<div class='alert alert-danger'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                       <b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata('name');?></b>

 
                    </div>
                </div> 

           

   <div id="page-wrapper" style="margin-left: 0px">


             <div class="col-md-12 col-lg-12 col-sm-12">
  
   <div class="row">
<?php  
           if($this->uri->segment(2) == "registered_user1")  
           {  
           //base url - http://localhost/app/las04  
           //redirect url - http://localhost/app/las04/Settings/inserted/  
                //main - segment(1)  
                //inserted - segment(2)  
            echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-success">User registered successfully</p></b>
                    </div><br><br>';
               
           }  
           if($this->uri->segment(2) == "notregistered_user1")  
           {  
                echo ' <div class="col-lg-10 panel-body">
                    <b><p class="text-danger">User not registered</p></b>
                    </div><br><br>';

           }  


                 

           
           ?>

       </div>
       <br>
       <br>
 
        <div class="panel panel-primary">
            <div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i>Pending Request For Registration</div>
        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">


                                        <table class="table table-bordered table-hover table-striped" id="allmessages">

                                              
        
            <tr ><th>#</th><th>Name</th><th>CID</th><th>Gender</th><th>Department</th><th>Year of Graduation</th><th>Date and Time</th><th>Email</th><th>Enter Email</th><th>Action</th></tr>
            
             

             <?php $count=1; foreach($request as $row): ?>
            <tr><td><?php echo $count++;?></td>

            
                    
                                                  <td><?php echo $row['FirstName'];?></td>
                                                   <td><?php echo $row['relatedUserId'];?></td>
                                                   <td><?php echo $row['gender'];?></td> 
                                                     <td><?php echo $row['department'];?></td>
                                                       <td><?php echo $row['batch'];?></td>
                                                       <td><?php echo $row['date'];?></td>
                                                       <td><?php echo $row['email'];?></td>

                                                    
               
                 
                    
                        
                   


                
                   <td>


                    
                   
                      <form class="form-horizontal" id="f"  action="<?php echo site_url();?>/Sendemail/subscribed/<?php echo $row['relatedUserId'];?>" method="post"> </form>
                      <input type="email"  class="form-control"  form ="f" name="email[]" placeholder="email">

                  </td>
                  <td>
                 
                    <button name="approve1[]" type="submit" style="background-color:green;color:white;width:150px;height:40px;"  value="<?php echo $row['relatedUserId'];?>" form ="f" >Approve</button> <br> <br>
                      
                     <a href="<?php echo site_url();?>/Settings/rejected/<?php echo $row['loginId'];?>" > <button name="subject" type="submit"  style="background-color:#cc0000;color:white;width:150px;height:40px;"
                    value="fav_CSS"  >Reject</button></a>


                </td> 
                
           



                   
                
<?php endforeach; ?>  </tr> 
</table>

               
            
     
        </div>
        </div>


  
</div>
</div>
</div>
</div>
</div>



    <script type="text/javascript">
  $(function(){
    $("#allmessages").dataTable();
  });
</script>



<script type="text/javascript">

    function addfile1(){
        var url='<?php echo site_url();?>/Settings/add2';
        var option= {target: '#loadcontent',url:url,type:'POST',data: $('#fileaddformid').serialize()};
        $('#fileaddformid').ajaxSubmit(option);
    }
    
    function showfilename(){
        if($('#filenameId').val()!=""){

            var url='<?php echo site_url();?>/Settings/getsequenceNo/'; 
            $.ajax({
                url:url,
                success:function(data){
                    if(data!="sorry"){
                        $('#filename').append($('#filenameId option:selected').text()+data);
                        //$('#filename').append($'#filenameID option:selected').text()+val(parseInt(data)+1);
                        //$('#filename').append($('#filenameId option:selected').text()+data); 
                        $('#finalfilename').val($('#filenameId option:selected').text()+data);
                        $('#finalfileid').val($('#filenameId').val());
                        $('#lastweqno').val(parseInt(data)+1);
                    }
                    else{
                        $('#filename').append("Not able to pull file sequence");
                    }
                },
            });
            $('#fileModel').show();
            $('#addbtn').hide();
            $('#fileError').html('');
            $('#filenameId').prop('disabled',  'true');
        }
        else{
            $('#fileError').html('Please select file');
        }
        
    }
    $(function () {
        $('#date').datetimepicker({
           useCurrent: false, //Important! See issue #1075
           format: 'YYYY-MM-DD',
            daysOfWeekDisabled: [0, 6]
        }).on('changeDate',function(){
            $('#date').datetimepicker('hide');
        });
    });
    var initialcount=0;
    function addfield(){
        initialcount++;
        $('#addcopyfield').append('<div class="form-group" id="addedfiles'+initialcount+'"><label class="col-xs-12 col-sm-3 col-md-3 control-label">Copy To</label><div class="col-xs-12 col-sm-5 col-md-5"><input type="text" id="subject'+initialcount+'" class="form-control" name="copy_to[]" placeholder="Insert Copy To"/></div><div class="col-xs-12 col-sm-4 col-md-4"><button type="button" id="delbuton'+initialcount+'" class="btn btn-danger" onclick="deleterecord('+initialcount+')">Delete</button></div></div>');
    }
    function deleterecord(id){
        $('#addedfiles'+id).remove();
    }

    var count=0;
    function  address()  {
        count++; 
        $('#addto').append('<div class="form-group" id="addr'+count+'"><label class="col-xs-12 col-sm-3 col-md-3 control-label">Address To</label><div class="col-xs-12 col-sm-5 col-md-5"><input type="text" id="address_to'+count+'" class="form-control" name="address_to" placeholder="Insert Copy To"/></div><div class="col-xs-12 col-sm-4 col-md-4"><button type="button" id="delbuton'+count+'" class="btn btn-danger" onclick="deleterecordadd('+count+')">Delete</button></div></div>');
    }
    function deleterecordadd(id){
        $('#addr'+id).remove();
        
    }

    var count=0;
    function Add_Email_Copy() {
        count++;
        $('#Add_Email_Copy').append('<div class="form-group" id="email'+count+'"><label class="col-xs-12 col-sm-3 col-md-3 control-label">Send copy Via Email</label><div class="col-xs-12 col-sm-5 col-md-5"><input type="email" id="email'+count+'" class="form-control" name="email" placeholder="Enter email address"/></div><div class="col-xs-12 col-sm-4 col-md-4"><button type="button" id="delbuton'+count+'" class="btn btn-danger" onclick="deleteEmail('+count+')">Delete</button></div></div>');
    }




    function deleteEmail(id) {
        $('#email'+id).remove();
    }



</script> 

 
<script type="text/javascript" src="jquery.dataTables.js"></script>
<script type="text/javascript" src="dataTables.scrollingPagination.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#allmessages').dataTable( {
            "pagingType": "scrolling"
        } );
    } );
</script>
