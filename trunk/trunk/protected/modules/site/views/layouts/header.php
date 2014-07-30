<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="<?php echo Yii::app()->language; ?>" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!--> <html lang="<?php echo Yii::app()->language; ?>"> <!--<![endif]-->
<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lte IE 9]><link href="/assets/screen_split2-1b13569e9620782f423d4cd3ce931750.css" media="screen" rel="stylesheet" type="text/css" />-->
<head>
    <meta charset="<?php echo Yii::app()->charset; ?>">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="shortcut icon" href="<?php echo $this->baseUrl.'/favicon.png'?>" type="image/x-icon" />
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <?php 
        //register script and style
        $cs = Yii::app()->getClientScript();
        
        //registry css
        $fileCss = array(
            $this->baseUrl.'/css/fonts.css',
        );

        if(isset($this->seprateCss)){
            $fileCss[] = $this->seprateCss;
        }
        foreach($fileCss as $file){
            $cs->registerCssFile($file); 
        }

        //registry js
        $fileJs = array(
        );
        foreach($fileJs as $file){
            $cs->registerScriptFile($file);
        }
    ?>
    <!-- difine global var for js file -->
    <script type="text/javascript">
        var baseUrl = "<?php echo Yii::app()->baseUrl ?>";
        var isGuest = <?php echo Yii::app()->user->isGuest?'true':'false' ?>
    </script>
</head>