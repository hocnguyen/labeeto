<!DOCTYPE html>
<html>
<head>
    <title>Labeeto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- Bootstrap -->

    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/feed.css" rel="stylesheet">
    <link type="text/css" href="<?php echo Yii::app()->themeManager->baseUrl; ?>/css/validationEngine.jquery.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/js/jquery.js"></script>
</head>
<body >
<div id="wrapper">
    <header class="clearfix head-feed">
        <?php //$this->renderPartial('../elements/header-feed'); ?>
        <div class="content-head">
            <a href="#" id="logo">
                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/logo-feed.png" alt="Logo"/>
            </a>
            <div class="menu-nav">
                <a href="#" class=" menu-item"><span class="icon search"></span> SEARCH</a>
                <a href="#" class=" menu-item"><span class="icon top-rate"></span>TOP RATED</a>
                <a href="#" class=" menu-item"><span class="icon get-fit"></span>GET FIT</a>
                <a href="#" class=" menu-item"><span class="icon inspire"></span>INSPIRE</a>
            </div>
            <div class="notify">
                <div class="friend-request friend-active">
                    <div class="notice-notify">8</div>
                </div>
                <div class="message-request"> <!-- Class active: message-active -->
                    <!--<div class="notice-notify">45</div>-->
                </div>
                <div class="notify-request notify-active">
                    <div class="notice-notify">45</div>
                </div>
            </div>
            <div class="profile-nav">
                <img class="avatar-nav" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatart-step2.png" />
                <div class="username-nav">ROMEO</div>
                <img class="arrow-nav" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/arrow_down.png" />
            </div>
        </div>
        <div class="menu-profile">
            <a href="#" class=" profile-item firt-profile"><span class="icon-profile your-profile"></span>YOUR PROFILE</a>
            <a href="#" class=" profile-item"><span class="icon-profile favorite"></span>FAVORITE</a>
            <a href="#" class=" profile-item"><span class="icon-profile post-an-achievement"></span>POST AN ACHIEVEMENT</a>
            <a href="#" class=" profile-item"><span class="icon-profile invite-friend"></span>INVITE FRIEND</a>
            <a href="#" class=" profile-item"><span class="icon-profile settings"></span>SETTING</a>
            <a href="#" class=" profile-item"><span class="icon-profile post-an-ad"></span>POST AN AD</a>
            <a href="#" class=" profile-item"><span class="icon-profile upgrade-account"></span>UPGRADE ACCOUNT</a>
            <a href="#" class=" profile-item"><span class="icon-profile logout"></span>LOGOUT</a>
        </div>
    </header>
    <main class="container" id="content-feed">
        <?php //echo $content ?>
        <div class="banner-ad-top">
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ads-top.png" />
        </div>
        <div class="content-main">
            <div class="left-content"></div>
            <div class="right-content"></div>

        </div>
    </main>



    <footer class="clearfix">
        <?php //echo $this->renderPartial('../elements/footer-feed') ?>
    </footer>

<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/js/feed.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl . '/js/jquery.validationEngine.js' ?>"></script>
<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl . '/js/jquery.validationEngine-en.js' ?>"></script>
<script type="text/javascript" src="<?php echo Yii::app()->themeManager->baseUrl . '/js/bootstrap.min.js' ?>"></script>
</body>

</html>