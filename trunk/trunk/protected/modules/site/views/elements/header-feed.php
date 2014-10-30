<div class="head-feed">
    <div class="content-head">
        <a href="/my_feed" id="logo">
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/logo-feed.png" alt="Logo"/>
        </a>
        <div class="menu-nav">
            <!-- <a href="/user/advanceSearch" class="menu-item"><span class="icon search"></span> SEARCH</a> -->
            <a href="#" class="menu-item"><span class="icon top-rate"></span>TOP RATED</a>
            <a href="#" class="menu-item"><span class="icon get-fit"></span>GET FIT</a>
            <a href="#" class="menu-item"><span class="icon inspire"></span>Speed date</a>
        </div>
        <div class="notify">
            <div class="search-request" href="#">
                <a href="/user/advanceSearch" class="menu-item"></a> 
            </div>
            <div class="olock-request">
                
            </div>
            <div class="friend-request friend-active">
                <div class="notice-notify">8</div>
            </div>
            <div class="message-request"> <!-- Class active: message-active -->
                <!--<div class="notice-notify">45</div>-->
            </div>
            <div class="notify-request notify-active" id="toggle-notification">
                <div class="notice-notify clicked-notification">45</div>
                <div class="menu-notification">
                    <span class="only-this-span"></span>
                    <ul>
                        <li>
                            <span class="notification-header">NOTIFICATIONS</span>
                            <span class="notification-number">(45)</span>
                            <span class="notification-seeall">See All</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/1_avarta.png">
                                <h6>SAORI TABATA <span class="active-infor">likes your</span><span class="content-infor">post</span></h6>
                                <span class="minuten">16 mins</span>
                            </a>

                        </li>

                        <li>
                            <a href="#">
                                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/2_avata.png">
                                <h6>EMMA ROSE BUNTON <span class="active-infor">likes your</span><span class="content-infor">post</span></h6>
                                <span class="minuten">18 mins</span>
                            </a>

                        </li>

                        <li>
                            <a href="#">
                                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/3_avata.png">
                                <h6>MIRIAM REGALADO <span class="active-infor">likes your</span><span class="content-infor">ROFILE PICTURE</span></h6>
                                <span class="minuten">2 hr</span>
                            </a>

                        </li>

                        <li>
                            <a href="#">
                                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/3_avata.png">
                                <h6>MIRIAM REGALADO <span class="active-infor">wants access to your</span><span class="content-infor">pRIVATE PHOTOS</span></h6>
                                <span class="minuten">2 hr</span>
                            </a>
                            <div class="content-active">
                                <span class="delete-post"></span><span class="check-post"></span>
                            </div>

                        </li>

                        <li>
                            <a href="#">
                                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/4_avata.png">
                                <h6>ASH PONCE <span class="active-infor">likes your</span><span class="content-infor">post</span></h6>
                                <span class="minuten">2 hr</span>
                            </a>

                        </li>

                        <li>
                            <a href="#">
                                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/3_avata.png">
                                <h6>MIRIAM REGALADO <span class="active-infor">wants to</span><span class="content-infor">CHAT</span></h6>
                                <span class="minuten">2 hr</span>
                            </a>
                            <div class="content-active">
                                <span class="delete-post"></span><span class="check-post"></span>
                            </div>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="profile-nav">
            <div class="test-nav" style="width: 210px; float: right; height: 50px;">
                
                <div class="username-nav">
                    <?php
                    if(strlen(Yii::app()->user->username) > 8){
                        echo "Welcome, ".substr(Yii::app()->user->username, 0, 5). '...';
                    }else{
                        echo "Welcome, " .Yii::app()->user->username;
                    }

                    ?>
                </div>
                <?php
                    error_reporting(0);
                ?>
                <?php if(($this->user->photo =='')||($this->user->photo =='undefined')){ ?>
                    <img class="avatar-nav" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/no-avatar.png">
               <?php } else { ?>
                    <img class="avatar-nav" src="/uploads/avatar/<?php echo $this->user->photo ?>" />
                <?php } ?>
                <img class="arrow-nav" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/arrow_down.png" />
            </div>
            <div class="menu-profile">
                <a href="/profile" class=" profile-item firt-profile"><span class="icon-profile your-profile"></span><span class="content-pro-txt">YOUR PROFILE</span></a>
                <a href="#" class=" profile-item"><span class="icon-profile favorite"></span><span class="content-pro-txt">FAVORITE</span></a>
                <a href="#" class=" profile-item"><span class="icon-profile post-an-achievement"></span><span class="content-pro-txt">POST AN ACHIEVEMENT</span></a>
                <a href="#" class=" profile-item"><span class="icon-profile invite-friend"></span><span class="content-pro-txt">INVITE FRIEND</span></a>
                <a href="/settings" class=" profile-item"><span class="icon-profile settings"></span><span class="content-pro-txt">SETTING</span></a>
                <a href="#" class=" profile-item"><span class="icon-profile post-an-ad"></span><span class="content-pro-txt">POST AN AD</span></a>
                <a href="#" class=" profile-item"><span class="icon-profile upgrade-account"></span><span class="content-pro-txt">UPGRADE ACCOUNT</span></a>
                <a href="<?php echo $this->createUrl('/user/logout'); ?>" class=" profile-item"><span class="icon-profile logout"></span><span class="content-pro-txt">LOGOUT</span></a>
            </div>

        </div>
    </div>
</div>