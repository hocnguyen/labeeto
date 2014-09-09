<!DOCTYPE html>
<html>
<head>
    <title>Labeeto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/feed.css" rel="stylesheet">
    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/validationEngine.jquery.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/js/jquery.placeholder.js"></script>

</head>
<body >
<div id="wrapper">
    <header class="clearfix ">
        <?php $this->renderPartial('../elements/header-feed'); ?>

    </header>
    <div class="container" id="content-feed">
        <?php echo $content ?>

    </div>



    <footer class="clearfix">
        <?php echo $this->renderPartial('../elements/footer-feed') ?>
    </footer>
    <script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl . '/js/jquery.session.js' ?>"></script>
<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/js/feed.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl . '/js/jquery.validationEngine.js' ?>"></script>
<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl . '/js/jquery.validationEngine-en.js' ?>"></script>
<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl . '/js/bootstrap.min.js' ?>"></script>
    <script type="text/javascript">
        $('textarea').placeholder();
    </script>
</body>

</html>