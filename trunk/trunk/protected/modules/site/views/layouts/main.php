<!DOCTYPE html>
<html>
<head>
    <title>Labeeto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/style.css" rel="stylesheet">
    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/style_tue.css" rel="stylesheet">
    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/shortcodes.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>

</head>
<body>
<header class="main__header">
    <?php $this->renderPartial('../elements/header') ?>
</header>

<?php if($this->login==0){ //Yii::app()->user->isGuest
    $this->renderPartial('../elements/slider');
}
 ?>
<!--end of slider section-->
<section class="main__middle__container">
    <?php echo $content ?>
</section>
<footer>
    <?php $this->renderPartial('../elements/footer') ?>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo Yii::app()->themeManager->baseUrl; ?>/js/bootstrap.min.js"></script>
<!--<script src="<?php /*echo Yii::app()->themeManager->baseUrl; */?>/js/jquery.fancybox.pack.js"></script>-->
<script type="text/javascript">
    $('.carousel').carousel({
        interval: 3500, // in milliseconds
        pause: 'none' // set to 'true' to pause slider on mouse hover
    })
</script>
<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/js/idangerous.swiper-2.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/js/script.js"></script>
</body>

</html>