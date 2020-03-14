<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?php echo $title;?></title>

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
            <link rel="stylesheet" href="<?php echo base_url();?>css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?php echo base_url();?>css/ace-ie.min.css" />
        <![endif]-->
        
        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>
        <!--<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>-->

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="<?php echo base_url();?>js/html5shiv.min.js"></script>
        <script src="<?php echo base_url();?>js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">
     <!--    <?php//this->load->view('base/header');?> -->

        <div class="main-container" id="main-container">

            <?php $this->load->view('base/sidebar');?>
            

            <div class="main-content">
                <!-- use this id to load all page content here! -->
                    <div class="main-content-inner">
                        <div id="displaycontent">
                             <?php echo $message;?>
                             <!--if ($message=='file successfully inserted') then do you want to continue adding-->
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
    </body>
</html>
<script type="text/javascript">
    function loadPage(url){
        $("#loadcontent").load(url);
    }
</script>
