<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    <title><?php echo implode( ' - ', $this->pageTitle ); ?></title>
    <link rel="shortcut icon" href="/favicon.ico" />
	<?php Yii::app()->clientScript->registerCssFile( Yii::app()->themeManager->baseUrl . '/css/stylesheets.css', 'screen' ); ?>
    <!--[if lt IE 8]>
        <link href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <?php Yii::app()->clientScript->registerCssFile( Yii::app()->themeManager->baseUrl . '/css/fullcalendar.print.css', 'print' ); ?>
    <?php Yii::app()->clientScript->registerCssFile( Yii::app()->themeManager->baseUrl . '/css/jquery.tagit.css' ); ?>
    <?php Yii::app()->clientScript->registerCssFile( Yii::app()->themeManager->baseUrl . '/css/tagit.ui-zendesk.css' ); ?>
	<?php Yii::app()->clientScript->registerCssFile( Yii::app()->themeManager->baseUrl . '/css/bootstrap.min.css' ); ?>
    <?php Yii::app()->clientScript->registerCssFile( Yii::app()->themeManager->baseUrl . '/css/bootstrap.css' ); ?>
    <?php Yii::app()->clientScript->registerCssFile( Yii::app()->themeManager->baseUrl . '/css/style-admin.css' ); ?>

    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<script type="text/javascript">
		var themeUrl = '<?php echo Yii::app()->themeManager->baseUrl; ?>';
		var _languages = {
			'deletePrompt': '<?php echo Yii::t('adminglobal', 'Are you sure you want to delete this item?\nThis action cannot be undone!'); ?>',
			'deleteAborted': '<?php echo Yii::t('adminglobal', 'OK! Action Cancled.'); ?>'
		};

		$(document).ready(function(){
			setTimeout(function(){$("div.alert-error, div.alert-attention, div.alert-success").slideUp(400)}, 5000);
		});
        // using jQuery

	</script>

	<?php Yii::app()->clientScript->registerScriptFile( 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js' ); ?>
	<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/jquery/jquery.mousewheel.min.js' ); ?>
	<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/cookie/jquery.cookies.2.2.0.min.js' ); ?>
	<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/bootstrap.min.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/charts/excanvas.min.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/charts/jquery.flot.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/charts/jquery.flot.stack.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/charts/jquery.flot.pie.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/charts/jquery.flot.resize.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/sparklines/jquery.sparkline.min.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/fullcalendar/fullcalendar.min.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/select2/select2.min.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/uniform/uniform.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js' ); ?>
    <?php if(Yii::app()->language=='en'){
        Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/validation/languages/jquery.validationEngine-en.js' );
    } else {
        Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/validation/languages/jquery.validationEngine-de.js' );
    }
    ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/validation/jquery.validationEngine.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/animatedprogressbar/animated_progressbar.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/cleditor/jquery.cleditor.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/dataTables/jquery.dataTables.min.js' ); ?>

    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins/fancybox/jquery.fancybox.pack.js' ); ?>
     <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/cookies.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/actions.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/charts.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/plugins.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/settings.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/tag-it.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/jwplayer.js' ); ?>
    <?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/bootstrap.min.js' ); ?>
    <?php //Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/jquery.min.js' ); ?>
    <script type="text/javascript">jwplayer.key="YLh0EpQST8/bQUTi3GDUFWxfaIaeKorWSL5ihzmIxDSdoJDoz9fLSJZrt9g=";</script>
	<?php if( Yii::app()->locale->getOrientation() == 'rtl' )
	{
		Yii::app()->clientScript->registerCssFile( Yii::app()->themeManager->baseUrl . '/css/rtl.css', 'screen' );
	}
    Yii::app()->clientScript->registerScript('re-install-date-picker', "
        function reinstallDatePicker(id, data) {
            jQuery('#datepicker_for_due_date').datepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['".(Yii::app()->language=='en'?'':Yii::app()->language)."'], {'dateFormat':'".Yii::app()->locale->getDateFormat('medium_js')."'}));
            jQuery('#datepicker_for_due_date_last').datepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['".(Yii::app()->language=='en'?'':Yii::app()->language)."'], {'dateFormat':'".Yii::app()->locale->getDateFormat('medium_js')."'}));
        }
        ");

    ?>

</head>
<body class="ctl_index">
	<div class="wrapper">
		<div class="container-fluid">
            <div class="row">
                <div class="col-md-1 col-lg-1">
                </div>
                <div class="col-md-10 col-lg-10">
                    <div class="logo">
                        <a href="/"><img class="img-responsive" src="/uploads/logo/<?php echo Yii::app()->settings->logo_site ?>" /></a>
                    </div>
                </div>
            </div>
            <div class="col-md-1 col-lg-1">
            </div>
            <div class="row">
                <nav class="navbar navbar-default" role="navigation" style="background: <?php echo Yii::app()->settings->color_header ?>">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li><a <?php echo  (Yii::app()->controller->id=='user')? "style='color: white!important;'":'' ?>  href="/admin/user"><?php echo Yii::t('global','User') ?></a></li>
                        <li><a <?php echo  (Yii::app()->controller->id=='apps' && Yii::app()->controller->action->id!='samplecode')? "style='color: white!important;'":'' ?> href="/admin/apps/"><?php echo Yii::t('global','Apps') ?></a></li>
                        <li><a <?php echo  (Yii::app()->controller->id=='appUser')? "style='color: white!important;'":'' ?> href="/admin/appUser"><?php echo Yii::t('global','Registrations') ?></a></li>
                        <li><a <?php echo  (Yii::app()->controller->action->id=='samplecode')? "style='color: white!important;'":'' ?> href="/admin/apps/samplecode"><?php echo Yii::t('global','Code Samples') ?></a></li>
                        <li><a <?php echo  (Yii::app()->controller->id=='settings')? "style='color: white!important;'":'' ?> href="/admin/settings"><?php echo Yii::t('global','Settings') ?></a></li>
                        <li><a href="/user/logout"><?php echo Yii::t('global','Logout') ?></a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div>

            <div class="row">
				<?php   echo $content; ?>
			</div>
			</div>
        </div>
		</div>
</body>
</html>