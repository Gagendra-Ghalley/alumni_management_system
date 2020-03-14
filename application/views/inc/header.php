
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>MoEA System </title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="shortcut icon" href="../images/favicon.png" type="image">
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" />
		
		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="../css/dashboard.css" />
		<link rel="stylesheet" href="../assets/css/custom.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.min.js"></script>

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.min.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<![endif]-->
		
		<!-- page specific plugin styles // form validation -->
		<link rel="stylesheet" href="../assets/formValidate/bootstrapValidator.css" />
		<link rel="stylesheet" href="../js/notify/animate.css" />
		
		<!-- page specific plugin styles // date and time picker -->
		<link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-timepicker.min.css" />
		
		<!-- CK Editor />-->
		<script src="../ckeditor/ckeditor.js"></script>
		
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?php echo BASE_URL.'ods/'?>" class="navbar-brand">
						<small><i class="fa fa-desktop"></i> Online Dispatch Systems v1.0.0</small>
					</a>
				</div>
				<?php
					/*--- For /visitor/vServiceOverview.php?id=X-X to count Notifications ---*/
					$params = explode('-', $_GET['id']);
					$vID = $params['0'];
					$notifyId = $params['1'];
					
					$eFlag = $generalClass->getColumn('flag', TBL_NOTIFY, $notifyId);
					if($eFlag == '0'){
						$nData = array('flag' => '1');
						$updateNotify = $generalClass->updateData(TBL_NOTIFY, $nData, "WHERE id = '$notifyId'");
					}
					
					/*--- For /user/viewmail.php?id=X-X to count New Mails ---*/
					$mparams = explode('-', $_GET['mailId']);
					$msgID = $mparams['0'];
					$msgNotifyId = $mparams['1'];
					
					$mFlag = $generalClass->getColumn('flag', TBL_MSG_NOTIFY, $msgNotifyId);
					if($mFlag == '0'){
						//messgae notify
						$mnData = array('flag' => '1');
						$updateMessageNotify = $generalClass->updateData(TBL_MSG_NOTIFY, $mnData, "WHERE id = '$msgNotifyId'");
						
						//messgae mapped
						$isRead = '1';
						$userId = $userDetails->id;
						$messageId = $generalClass->getColumn('key', TBL_MSG_NOTIFY, $msgNotifyId);
						$updateMessageMapped = $generalClass->updateMessageMapped(TBL_MSG_MAP, $isRead, $messageId, $userId);
					}
				?>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey dropdown-modal">
							<?php
								$tasks = $generalClass->getTasks(TBL_TASKS, $userDetails->id);
								$numOfTasks = sizeof($tasks);
							?>
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">
									<?php echo ($numOfTasks > 0)?$numOfTasks:"0";?>
								</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header"><i class="ace-icon fa fa-check"></i>
									<?php echo ($numOfTasks > 0)?$numOfTasks." Pending Task(s)":"No Pending Tasks";?>
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<?php
											foreach($tasks as $taskDtls):
											$link = BASE_URL.$taskDtls['route']."/".$taskDtls['action']."?id=".$taskDtls['key'];
										?>
										<li>
											<a href="<?php echo $link; ?>">
												<div class="clearfix">
													<span class="pull-left"><?php echo $taskDtls['remarks']; ?></span>
													<div class="pull-right">
														<i class="ace-icon fa fa-calendar-check-o bigger-110"></i>
														<?php echo date('jS M, Y', strtotime($taskDtls['created'])); ?>
														<?php echo date('g:i A', strtotime($taskDtls['created'])); ?>
													</div>
												</div>
											</a>
										</li>
										<?php endforeach; ?>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="../user/tasks.php">
										See all Pending Task(s)
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple dropdown-modal">
							<?php
								$notifications = $generalClass->getNotifications(TBL_NOTIFY, $userDetails->id);
								$numOfNotify = sizeof($notifications);
							?>
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important"><?php echo ($numOfNotify > 0)?$numOfNotify:"0"; ?></span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-bell-o"></i>
									<?php echo ($numOfNotify > 0)?$numOfNotify."Notificaion(s)":"No Notificaions"; ?>
								</li>
								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<?php
											foreach($notifications as $notifyDtls):
											$link = BASE_URL.$notifyDtls['route']."/".$notifyDtls['action']."?id=".$notifyDtls['key']."-".$notifyDtls['id'];
										?>
										<li>
											<a href="<?php echo $link; ?>">
												<div class="clearfix">
													<span class="pull-left">
														<!--<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>-->
														<?php echo $notifyDtls['remarks']; ?>
													</span>
													<div class="pull-right">
														<i class="ace-icon fa fa-calendar-check-o bigger-110"></i>
														<?php echo date('jS M, Y', strtotime($notifyDtls['created'])); ?>
														<?php echo date('g:i A', strtotime($notifyDtls['created'])); ?>
													</div>
												</div>
											</a>
										</li>
										<?php endforeach; ?>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="../user/notifications.php">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green dropdown-modal">
							<?php
								$messages = $generalClass->getMessages(TBL_MSG_NOTIFY, $userDetails->id);
								$numOfMsgs = sizeof($messages);
							?>
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success"><?php echo ($numOfMsgs > 0)?$numOfMsgs:"0";?></span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									<?php echo ($numOfMsgs > 0)?$numOfMsgs." Message(s)":"No Message";?>
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<?php
											foreach($messages as $messageDtls):
											$link = BASE_URL.$messageDtls['route']."/".$messageDtls['action']."?mailId=".$messageDtls['key']."-".$messageDtls['id'];
										?>
										<li>
											<a href="<?php echo $link; ?>" class="clearfix">
												<?php
													$sender = $generalClass->getColumn('author', TBL_MSG, $messageDtls['key']);
													$senderDtls = $generalClass->get(TBL_USER, $sender);
													foreach($senderDtls as $sDtls);
												?>
												<?php if(empty($sDtls['photo'])){ $uImage = "default.jpg"; }else{ $uImage = $sDtls['photo']; } ?>
												<img src="<?php echo BASE_URL.'images/user/'.$uImage; ?>" class="msg-photo" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue"><?php echo explode(' ',trim($sDtls['name']))[0];?>:</span>
														<?php $messageSub = $generalClass->getColumn('subject', TBL_MSG, $messageDtls['key']); ?>
														<?php echo substr($messageSub, 0, 30); ?>
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>
															<?php 
																$day = $generalClass->getColumn('created', TBL_MSG, $messageDtls['key']); 
																echo date('jS M, Y', strtotime($day))." ".date('g:i A', strtotime($day)); 
															?>
														</span>
													</span>
												</span>
											</a>
										</li>
										<?php endforeach; ?>
									</ul>
								<li class="dropdown-footer">
									<a href="../user/inbox.php">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo explode(' ',trim($userDetails->name))[0];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<!--<li><a href="#"><i class="ace-icon fa fa-cog"></i>Settings</a></li>-->
								<li><a href="<?php echo BASE_URL.'user/userProfile.php'?>"><i class="ace-icon fa fa-user"></i>Profile</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo BASE_URL.'user/inbox.php'; ?>"><i class="ace-icon fa fa-envelope"></i>Inbox</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo BASE_URL; ?>includes/logout.php"><i class="ace-icon fa fa-power-off"></i>Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>