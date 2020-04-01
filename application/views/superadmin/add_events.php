
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add Events</h1> <div class="clockwrapper"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>

         

<br>
        
	 
	

<div class="row">
    <div class='col-sm-7' style="margin-left:150px">
    	<div class="panel-body login">
        <div class="form-group">
         
      
        	 <form accept-charset="utf-8" class="form-group" id="f" action="<?php echo site_url();?>/Settings/addevent1" method="post">
          
            <div class='input-group date'>
                <input type='date' class="form-control" id='datetimepickerstart' placeholder=" Date" style="margin-left:100px;width:300px" name="date"/>

             
          
            <br/>
             
              <br/>
              <br>
              <input type="text" name="event1" style="height:40px;width:300px;margin-left:100px" placeholder="Event Name" id="event"/><br/><br/>
                  <input type="text" name="event" style="height:80px;width:300px;margin-left:100px" placeholder="Event Details" id="event"/><br/><br/>
                  <button class="btn btn-default" style="margin-left:300px" type="submit">Add event</button>

</form>
</div>
</div>
</div>
</div>
</div>


 <script type="text/javascript">
    

     
        $(function() {              
           // Bootstrap DateTimePicker v4
           
           $('#datetimepickerstart').datetimepicker({
           	useCurrent: false,
                 format: 'YYYY/MM/DD',
                 minDate: moment(),
                 daysOfWeekDisabled: [0, 6]      
                 
                 
                  
                 
           });           
           
        $('#datetimepickerend').datetimepicker({
            useCurrent: false, //Important! See issue #1075
           format: 'YYYY/MM/DD',
            daysOfWeekDisabled: [0, 6]
        });
        $("#datetimepickerstart").on("dp.change", function (e) {
            $('#datetimepickerend').data("DateTimePicker").minDate(e.date);
            startDate = $('#datetimepickerstart').val();
        });
        $("#datetimepickerend").on("dp.change", function (e) {
            $('#datetimepickerstart').data("DateTimePicker").maxDate(e.date);
            CalcDiff();
        });
        		});
        		
       

function CalcDiff(){
var a=$('#datetimepickerstart').data("DateTimePicker").date();
var b=$('#datetimepickerend').data("DateTimePicker").date();
    var timeDiff=0
     if (b) {
            timeDiff = (b - a) / 1000;
        }
        daystotal=Math.floor(timeDiff/(60*60*24));
        daystotal+=1;
    $('#days-total').val(daystotal);
    CalWeekends(a,b);
   CalHolidays(a,b);
}

function CalWeekends(a,b){
  var start = new Date (a);
  var end = new Date(b);
   totalweekends=0;
  for(i = start; i<=end;){
    
    if(i.getDay()==0||i.getDay()==6){
      totalweekends++;
    }
    i.setTime(i.getTime()+1000*60*60*24);
  }
  $('#weekends').val(totalweekends);
}

function CalHolidays(a,b){
  var startDate = $('#datetimepickerstart').val();
  var endDate = $('#datetimepickerend').val();
  $.post('<?php echo base_url();?>index.php/Leave/countHolidays/',
  {
    start:startDate,
    end:endDate
    },
    function(data) 
    {   
    $('#holidays').val(data);
    var leavedays = 0;
    leavedays= daystotal-totalweekends-data;
    $('#leavedays').val(leavedays);
    }); 
}

function checkBalance(){
  
  var leavedays = $('#leavedays').val();
  var leavetype = $('#ltype').val();
  var offtg = $('#offtg').val();
  var startDate = $('#datetimepickerstart').val();
  var endDate = $('#datetimepickerend').val();
  var remarks = $('#remarks').val();
  var balance = <?php echo $bal?>;
  
  if((remarks!=null&&remarks!="")&&(leavetype!=null&&leavetype!="")&&(startDate!=null&&startDate!="")&&(endDate!=null&&endDate!="")&&(offtg!=null&&offtg!="")){
    if(leavedays>0){
        if(leavetype=='4'){
          if(leavedays<=balance){
            $("#confirm").modal();
          } else {
            $("#bal").modal();
            } 
        } else {
        
            $("#confirm").modal();
          }
    } else {
      $("#zero").modal();
    }
  } else {
    $("#incomplete").modal();
  }
}

function submitLeave(){
  
  var leavedays = $('#leavedays').val();
  var leavetype = $('#ltype').val();
  var startDate = $('#datetimepickerstart').val();
  var endDate = $('#datetimepickerend').val();
  var remarks = $('#remarks').val();
  var offtg = $('#offtg').val();
  var offtgrole = '5';
  var headrole = '4';
  $.post('<?php echo base_url();?>index.php/Leave/submitleaveSupervisor/',
  {
    startdate:startDate,
    enddate:endDate,
    leavedays:leavedays,
    leavetype:leavetype,
    offtg:offtg,
    remarks:remarks,
    offtgrole:offtgrole,
    headrole:headrole
    
  },function(data) 
    {   
    //$('#result').html(data);
    if(data=="1"){
      if(!alert('Leave successfully submitted')){window.location.reload();}
     } else if(data=="0") {
      
       if(!alert('Something went wrong. Please try again later')){window.location.reload();}
     }
     
     else {
       if(!alert('No response')){window.location.reload();}
     }
  
    }); 
}


    </script>

   
 