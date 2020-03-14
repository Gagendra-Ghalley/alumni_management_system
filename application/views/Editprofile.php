<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CST Alumni Management System</title>
<link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" /> -->
<link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css1/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css1/animate.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts1/font-awesome.css">
<link href="<?php echo base_url();?>assets/css1/flexy-menu.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css1/cubeportfolio.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css1/slider.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/pop.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/main-style1.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css1/flexy-menu.css" rel="stylesheet">


<div id="page-wrapper">

    <div class="row" class="pace-theme-big-counter">
        <!--   Page Header -->
        <div class="col-lg-9">
            <h3 class="page-header"><font size="5" color="#FFF">Edit Your Profile</font></h3>
            <div class="clockwrapper">
                <div id="clock"></div>,
                <?php echo date('D d/M/Y');?>
            </div>
        </div>
        <!--  End Page Header -->
    </div>

   

<div class="col-sm-9">
    

    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <hr>
            <form class="form" action="##" method="post" id="registrationForm">
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="first_name">
                            <h4>First name</h4></label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="last_name">
                            <h4>Last name</h4></label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="phone">
                            <h4>Phone</h4></label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="mobile">
                            <h4>Mobile</h4></label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Email</h4></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Location</h4></label>
                        <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="password">
                            <h4>Password</h4></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="password2">
                            <h4>Verify</h4></label>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                    </div>
                </div>
            </form>

            <hr>

        </div>
        <!--/tab-pane-->
        <div class="tab-pane" id="messages">

            <h2></h2>

            <hr>
            <form class="form" action="##" method="post" id="registrationForm">
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="first_name">
                            <h4>First name</h4></label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="last_name">
                            <h4>Last name</h4></label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="phone">
                            <h4>Phone</h4></label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="mobile">
                            <h4>Mobile</h4></label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Email</h4></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Location</h4></label>
                        <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="password">
                            <h4>Password</h4></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="password2">
                            <h4>Verify</h4></label>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-9">
                        <br>
                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                    </div>
                </div>
            </form>

        </div>
        <!--/tab-pane-->
        <div class="tab-pane" id="settings">

            <hr>
            <form class="form" action="##" method="post" id="registrationForm">
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="first_name">
                            <h4>First name</h4></label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="last_name">
                            <h4>Last name</h4></label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="phone">
                            <h4>Phone</h4></label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="mobile">
                            <h4>Mobile</h4></label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Email</h4></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Location</h4></label>
                        <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="password">
                            <h4>Password</h4></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="password2">
                            <h4>Verify</h4></label>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!--/tab-pane-->
</div>


    <div class="panel panel-default">
        <div class="panel-heading"></div>
        <div class="panel-body">
           
        </div>
    </div>

    </div>
 <div class="bg-primary" class="du-newsletter">
            <div class="container">

               

                <div class="col-md-6">

                    <p>@Alumni Management System</p>

                </div>

            </div>
        </div>

</div>
<!--/tab-content-->
<script type="text/javascript">
    $(document).ready(function() {

        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".file-upload").on('change', function() {
            readURL(this);
        });
    });
</script>