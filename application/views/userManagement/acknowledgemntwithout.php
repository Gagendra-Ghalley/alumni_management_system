<div class="container">
    <!-- use this id to load all page content here! -->
        <div class="main-content-inner">
            <div id="displaycontent">
                 <!-- <?php //echo $message1;?> -->
                
               <ul class="nav ace-nav">

                 <li> <h>  Notificaton on Forward letters </h>
                         <a href="" data-toggle="dropdown" href="#" class="dropdown-toggle glyphicon glyphicon-envelope">  
                            <?php if(sizeof($messages1)>0){?>
                                <!-- <span class=" label label-danger " style="center: 45px; "><?php //echo sizeof($messages1)?></span> -->
                                <!-- <span class="badge-success" ><?php //echo sizeof($messages1)?></span> -->

                                <span class="badge badge-error"><?php echo sizeof($messages1)?></span>
                            <?}?>
                        </a>
                              


                        <ul class="user-menu dropdown-menu dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <?php foreach($messages1 as $message): ?>
                            <li>
                                <!-- <a href="> -->
                                    <!-- <a href="<?php //echo site_url();?>/Settings/msg/<?php //echo $message['letter_no'];?>" -->
                                    <a href="<?php echo site_url();?>/Settings/msg1/<?php echo $message['letter_no'];?>/<?php echo $message['Id'];?>">
                                    <!-- <a href="#" onclick="readmsg('<?php echo site_url();?>/Settings/msg1/<?php echo $message['letter_no'];?>')"> -->
                                    <div>
                                        <strong><span class=" label label-info"> from <?php echo $message['SenderName'];?></span>
                                           <!--  <input name="message" value ="<?php //echo $message['SenderName'];?>" type="hidden">  -->
                                        </strong>
                                        <strong><span class=" label label-info"> Designation <?php echo $message['Designation'];?></span></strong>
                                        <strong><span class=" label label-info">Letter No:<?php echo $message['RecievedLetter'].'/'.$message['letter_no'];?></span></strong>
                                        <span class="pull-right text-muted">
                                            <em><?php echo $message['ActionDate']?></em>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <?php endforeach; ?>
                            <li>
                                <a class="text-center" href="#" onclick="openMessage('<?php echo site_url();?>/Settings/getAllmessage1/','all')">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>   
                    </li>
                 <!--if ($message=='file successfully inserted') then do you want to continue adding-->
             </ul>
            </div>
    </div>
</div>
<script type="text/javascript">
    function loadPage(url){
        $("#displaycontent").load(url);
    }
    // function openMessage(url,identifier)
    // {
    //     if (identifer=='all')
    // }

    function readmsg() 
    {
     var option= {target: '#loadcontent',url:url,type:'POST',data: $('#displaycontent').serialize()}; 
     $('#displaycontent').ajaxSubmit(option);  
    }


    function openMessage(url,identifier){
        if(identifier=='all'){
            var option= {target: '#loadcontent',url:url,type:'POST',data: $('#displaycontent').serialize()};
        }
        else{
            var option= {target: '#loadcontent',url:url,type:'POST',data: $('#displaycontent').serialize()}; 
        }
        
        $('#displaycontent').ajaxSubmit(option);
</script>