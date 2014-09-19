<div class="banner-ad-top">
    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ads-top.png" />
</div>
<div class="content-main">
    <?php //$this->widget('widgets.admin.notifications'); ?>
    <hr class="hr-line" />
    
    <div class="infor-user">
       
        
        <div class="content-infor-profile">
            <div class="name_user">
                <?php echo $this->user->username ?>
            </div>
            <div class="menu-nav-infor">
                <ul style="float: right;">
                    <li><a href="/profile_other"><?php echo Yii::t('global', 'preview profile') ?></a></li>
                    <li><a href="#"><?php echo Yii::t('global', 'verify profile') ?></a></li>
                </ul>
            </div>
        </div>
       
        <div class="content-img">
        </div>
    </div>
    <div class="left-profile">
        <!--Post 1-->
           
        </div>
        <!--End Post 1 -->
    </div>
    <div class="right-profile">
        
        
        <div class="content-profile">
            
            
        </div>
        
        
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


