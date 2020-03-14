<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <!-- <title><?php //echo $title;?></title> -->

        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.min.css" />
        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?php //echo base_url();?>css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?php //echo base_url();?>css/ace-ie.min.css" />
        <![endif]-->
        
        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>
        <!--<script src="<?php //echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>-->

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="<?php //echo base_url();?>js/html5shiv.min.js"></script>
        <script src="<?php //echo base_url();?>js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">
        <?php $this->load->view('base/header1');?>

        <div class="main-container">
          <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forwarded letter</h1> 
                    <div class="clockwrapper pull-right">
                        <div id="clock"></div> <?php echo date('D d/M/Y');?>
                    </div>
                </div>

            </div>
           <div id="loadcontent">
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Forwarded letter
                        </div>
                        <div class="panel-body">
                           <?php foreach ($message1 as $messages): ?>  
                         

                          <form class="form-horizontal" action="#" method="post" id="forwardmessage">
                            <div class="row">
                               <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Message From: </label>
                               
                               <div class="col-xs-12 col-lg-10 col-sm-10 col-md">
                                <?php echo $messages['SenderName'];?>  
                               
                               
                               </div>    
                            </div>
                            <div class="row">
                               <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Subject: </label>
                               <div class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> 
                                <input type="hidden" id="remarks" name="subject" value="<?php echo $messages['subject'];?>">
                                <?php echo $messages['subject'];?>
                               </div>    
                            </div>
                        

                            <div class="row">
                               <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Message: </label>
                               <div class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> 
                                <!-- input type="hidden" id="remarks" name="remarks" value="<?php echo $message1->Message;?>"> -->
                                <?php echo $messages['Message'];?>
                                <!-- <input type="hidden" id="Message name="" value="<?php //echo $message1->Message;?>"> -->
                               </div>    
                            </div>
                            <div class="row">
                               <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Letter No: </label>
                               <div class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> 
                                  <a href="<?php echo site_url();?>/Settings/downloadfile/<?php echo $messages['Attachment'];?>" target="_blank"><?php echo $messages['RecievedLetter'].'/'.$messages['letter_no'];?></a>
                                  <input type="hidden" id="custId" name="letterNo" value="<?php echo $messages['letter_no'];?>">
                               </div>    
                            </div>

                            <div  style="display:none"class="row">
                               <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Recived letter: </label>
                               <div class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> 
                                  
                                  <input type="hidden" id="custId" name="Rletter" value="<?php echo $messages['RecievedLetter'];?>">
                               </div>    
                            </div>
                           

                            <div class="row">
                               <label class="col-xs-12 col-lg-2 col-sm-2 col-md-2">Attachment: </label>
                               <div class="col-xs-12 col-lg-10 col-sm-10 col-md-10"> 
                                <?php $str_arr = explode ("/", $messages['Attachment']);  
                                $fileLocation=str_replace("/","kkk",$messages['Attachment']);
                                //echo $fileLocation;
                                 ?>
                                <a href="<?php echo site_url();?>/Settings/downloadfile/<?php echo $fileLocation;?>" target="_blank"><?php echo $str_arr[sizeof($str_arr)-1];?></a>
                               
                               </div>    
                            </div>



                            <br/>
                            
                            <div class="row">
                               <div class="col-xs-12 col-lg-10 col-sm-12 col-md-12"> 
                                <button type="button" id="forwardbtn" data-toggle="modal" data-target="#myModal" class="btn btn-info"> <i class="fa fa-send"></i> &nbsp;&nbsp;&nbsp;Forward to</button>
                                
                                <button type="button" id="completebtn" onclick="completeprocess1('<?php echo $messages['letter_no'];?>')" data-toggle="modal" data-target="#myModal" class="btn btn-info"> <i class="fa fa-send"></i> &nbsp;&nbsp;&nbsp;complete</button>
                                    
                              

                                <a href="<?php echo base_url()?>index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
                                  <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
                                  </button>
                                </a>
                               </div>  
                               <?php endforeach;?>  
                            </div>
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Forward message to: </h4>
                                  </div>
                                  
                                  <div class="modal-body">


                                     <div class="row">
                                      <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                        <form>
                                        <div class="form-group">
                                          <label for="comment" name="remarks">Remarks:</label>
                                          
                                           <textarea type="text" id="remarks" class="form-control" name="remarks" placeholder="Insert remarks"></textarea>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                   
       
                             
                                    <br/>
                                    <div class="row">
                                      <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                         <select name="forwardto[]" class="form-control">
                                           <option value="">Select</option>
                                           <?php foreach($userlist as $row):?>
                                              <option value="<?php echo $row['cid']?>">
                                                <?php echo $row['FirstName'].$row['MiddleName'].$row['LastName']?>
                                              </option>
                                            <?php endforeach;?>
                                         </select> 
                                      </div>
                                    </div>

                                    <span id="addmoreforwardto"></span>
                                  </br>

                                    <div class="row">
                                      <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                        <button type="button" onclick="addmessageto()" class="btn btn-success">Add More</button>
                                         <button type="button" onclick="removemessageto()" class="btn btn-warning">Remove</button>
                                        
                                      </div>
                                  </div>
                                </br>
                                  <div class="modal-footer">
                                    

                                      
                                    <button type="button" id="forwardbtn" class="btn btn-primary"  onclick="forwardmessage('forward')">
                                      <i class="fa fa-check"></i>&nbsp;&nbsp;Forward
                                    </button> 
                                    <button type="button" id="completebtn" class="btn btn-primary"  onclick="forwardmessage('completed')">
                                      <i class="fa fa-check"></i>&nbsp;&nbsp;Completed
                                    </button>    

                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                      <i class="fa fa-times"></i>&nbsp;&nbsp;Close
                                    </button>
                                  </div>




                                </div>
                              </div>
                            </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          </div>
                    
        </div>

        <?php $this->load->view('base/footer');?>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
        </div><!-- /.main-container -->
        <script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/fuelux.spinner.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/daterangepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.knob.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-tag.min.js"></script>  
        <script src="<?php echo base_url();?>assets/jquery.form.js"></script>  
        <script src="<?php echo base_url();?>assets/JqueryAjaxFormSubmit.js"></script>  
    </body>
</html>
<script type="text/javascript">
  <?php 
  
  foreach ($message1 as $messages): ?> 
  if($messages['completeStatus']=='Y')
  {  
      $('#forwardbtn').prop('disabled', true);
      $('#completebtn').prop('disabled', true);
    }
     <?php endforeach;?>
  
      // $('#forwardbtn').prop('disabled', true);
      // $('#completebtn').prop('disabled', true);
      // $('[data-toggle="tooltip"]').tooltip();
      
    
    
  var optval='';
  <?php foreach($userlist as $row):?>
    optval+='<option value="<?php echo $row['cid']?>"><?php echo $row['FirstName'].$row['MiddleName'].$row['LastName']?></option>';
  <?php endforeach;?>


    var count=1;
    function addmessageto(){
      count++;
      $('#addmoreforwardto').append('<div id="addedforwarder'+count+'"><br /><div class="row"><div class="col-lg-12 col-xs-12 col-sm-12 col-md-12"><select name="forwardto[]" class="form-control"><option value="">Select</option>'+optval+'</select></div></div></div>');

    }
    function removemessageto(){
      $('#addedforwarder'+count).remove();
      count--;
    }
    function forwardmessage(id){
      // alert(id);
      var url='<?php echo site_url();?>/Settings/forwardnew1/'+id;
      var option= {target: '#loadcontent',url:url,type:'POST',data: $('#forwardmessage').serialize()};
      $('#forwardmessage').ajaxSubmit(option);
    }
    function complete(id){
      var url='<?php echo site_url();?>/Settings/completefurther/'+id;
      var option= {target: '#loadcontent',url:url,type:'POST',data: $('#forwardmessage').serialize()};
      $('#forwardmessage').ajaxSubmit(option);
    }

//     function forwardmessage(param){
//     var CompleteStatus=Y;

//     if (CompleteStatus ==param {
     




// }
function completeprocess1(messageId){
   var url='<?php echo site_url();?>/Settings/completeprocess1/'+messageId;
    var option= {target: '#loadcontent',url:url,type:'POST',data: $('#forwardmessage').serialize()};
    $('#forwardmessage').ajaxSubmit(option);
}

</script>





