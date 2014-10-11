<div class="banner-ad-top">
    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ads-top.png" />
</div>
<div class="content-main-setting">
    
    <div class="menu-nav-message">
            <ul style="float: right;">
                <li class="message_new"><span class="new_message">New Message</span></li>
                <li class="li_message"><span class="all_message">ALL MESSAGES</span><span class="arrow_message"></span></li>
                <li class="list_message">
                    <ul>
                        <li><span class="message_1"><</span></li>
                        <li><span class="message_1">1</span></li>
                        <li><span class="message_1">2</span></li>
                        <li><span class="message_1">12</span></li>
                        <li><span class="message_1">13</span></li>
                        <li><span class="message_1">></span></li>
                    </ul>
                </li>
            </ul>
        </div>

    
</div>
 
<br />
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


