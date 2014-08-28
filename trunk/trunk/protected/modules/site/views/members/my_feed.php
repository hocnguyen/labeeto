<div class="banner-ad-top">
    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ads-top.png" />
</div>
<div class="content-main">
    <?php $this->widget('widgets.admin.notifications'); ?>
    <div class="left-content">
        <form class="post-home" method="post" name="" action="#">
            <div class="avatar-post">
                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatar-post.png">
            </div>
            <textarea class="post-textarea" placeholder="Post an achievement..."></textarea>
            <div class="footer-post">
                <a href="#" class="add-media">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/icon-upload.png" />
                    Add Media
                </a>
                <a href="#" class="add-location">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/icon-location.png" />
                    Add Location
                </a>
                <a href="#" class="post-btn">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/post-home.png" />
                </a>

            </div>
        </form>
        <div class="tabs">

        </div>
    </div>
    <div class="right-content">

    </div>

</div>
<div class="">
    <?php    if(isset($_SESSION['User'])) {    ?>
        <div class="col-lg-12">
            You logged with facebook acount:
        </div>
        <img src="https://graph.facebook.com/<?php echo $_SESSION['User']['id']; ?>/picture" width="50"/><div><?php echo $_SESSION['User']['name'];?></div>
        <a href="<?php echo $_SESSION['facebook_logout'];?>">Logout</a>
        <div class="col-lg-12">
            This page is processing develop...
        </div>
    <?php } ?>
</div>





