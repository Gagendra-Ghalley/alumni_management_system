<link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/ico">
<div id="navbar" class="navbar navbar-default">
    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="<?php echo base_url();?>" class="navbar-brand">
                <small>
                    <i class="fa fa-send"></i>
                    MOEA  Online Dispatch System
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <form class="form-horizontal" role="form" id="fileaddform" action="<?php echo site_url('Settings/');?>" method="POST">
            <ul class="nav ace-nav">
                    <!-- <li>
                         <a href="" data-toggle="dropdown" href="#" class="dropdown-toggle fa fa-envelope fa-2x class="fas fa-envelope-open-text">
                            <?php if(sizeof($messages)>0){?>
                                <span class=" label label-danger" style="margin-left: -43px;"><?php echo sizeof($messages)?></span>
                            <?}?>
                        </a>
                              


                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <?php foreach($messages as $message): ?>
                            <li>
                                <a href="<?php echo site_url();?>/Settings/getmessage/<?php echo $message['Id'];?>">
                                    <div>
                                        <strong><span class=" label label-info"> from <?php echo $message['SenderName'];?></span></strong>
                                        <strong><span class=" label label-info"> Designation <?php echo $message['Designation'];?></span></strong>
                                        <span class="pull-right text-muted">
                                            <em><?php echo $message['ActionDate']?></em>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <?php endforeach; ?>
                            <li>
                                <a class="text-center" href="#" onclick="openMessage('<?php echo site_url();?>/Settings/getAllmessage/','all')">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>    -->
                    <!-- </li> -->
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">                        
                        <span class="user-info">
                            <small>Welcome</small>
                            <?php echo $this->session->userdata('name'); ?>
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                           <li><a href="<?php echo base_url();?>index.php/ATD/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                            </li>
                        </li>
                    </ul>
                </li>
            </ul>
            </form>
        </div>
    </div><!-- /.navbar-container -->
</div>
<script type="text/javascript">
    function openMessage(url,identifier){
        if(identifier=='all'){
            var option= {target: '#loadcontent',url:url,type:'POST',data: $('#fileaddform').serialize()};
        }
        else{
            var option= {target: '#loadcontent',url:url,type:'POST',data: $('#fileaddform').serialize()}; 
        }
        
        $('#fileaddform').ajaxSubmit(option);
    }
</script>