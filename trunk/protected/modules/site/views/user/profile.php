<div class="banner-ad-top">
    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ads-top.png" />
</div>
<div class="content-main">
    <?php //$this->widget('widgets.admin.notifications'); ?>
    <hr class="hr-line" />
    
    <div class="infor-user">
        <div class="report-user-1">
            <!--<a class="report-user user-report">Report User</a>-->
        </div>

        <div class="avartar">
            <?php if($this->user->photo ==''){ ?>
                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/no-avatar.png">
            <?php } else { ?>
                <img src="/uploads/avatar/<?php echo $this->user->photo ?>" />
            <?php } ?>
            <!--<img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/avatar-post.png"/>-->
        </div>
        <div class="content-infor-profile">
            <div class="name_user">
                <?php echo $this->user->username ?>
            </div>
            <div class="menu-nav-infor">
                <ul style="float: right;">
                    <li><a href="/profile_other"><?php echo Yii::t('global', 'preview profile') ?></a></li>
                    <li><a href="#"><?php echo Yii::t('global', 'verify profile') ?></a></li>
                    <!--
                    <li><a href="#"><span class="span-chat"></span>CHAT</a></li>
                    <li><a href="#"><span class="span-message"></span>Message</a></li>
                    <li><a href="#"><span class="span-favorite"></span>Favorite</a></li>
                    <li><a href="#"><span class="span-rate"></span>Rate</a></li> -->
                </ul>
            </div>
        </div>
       
        <div class="content-img">
            <div style="float: left; width: 60%; padding-left: 14%;">
                <div class="street"><span class="icon-people"></span>24, M, Straight</div>
                <div class="businuess"><span class="icon-vali"></span><?php if($this->user->career) echo $this->user->career; ?></div>
                <div class="location"><span class="icon-location"></span><?php if($this->user->address) echo $this->user->address; ?></div>
            </div>
            <div class="img-photo-video">
                <div class="photo-private"  id="PhotoNomal">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo.png" />
                    <h6><?php echo Yii::t('global', 'Photos') ?></h6>
                    <h3>243</h3>
                    <span class="line-green-photo"></span>
                </div>
                <div class="photo-private" id="PhotoPrivate">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo.png" />
                    <h6><?php echo Yii::t('global', 'Private Photo') ?></h6>
                    <h3>8</h3>
                    <span class="line-green-photo-pravite"></span>
                </div>
                <div class="photo-private" id="VideosNormal">
                    <!--<a href="#" data-toggle="modal" data-target="#PrivateVideo">-->
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/videos.png" />
                        <h6><?php echo Yii::t('global', 'Videos') ?></h6>
                        <h3>15</h3>
                    <span class="line-green-video"></span>
                    <!--</a>-->
                </div>
                
            </div>
        </div>
        
    </div>
    <div class="left-profile">
        <!--Post 1-->
        <!--<span class="arrow-up"></span>-->
        <div class="post" style="border: none; position: relative;" > 
            <div class="looking-for">
                <span class="looking_img"><?php echo Yii::t('global', 'LOOKING FOR') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <p><span class="txt-gender"><?php echo Yii::t('global', 'Gender: ') ?></span><span class="txt-female"><?php if( $this->user->address ) { echo ($this->user->gender == 1) ? 'Female' : 'Male';} ?></span></p>
                <p><span class="txt-gender"><?php echo Yii::t('global', 'Relationship: ') ?> </span><span class="txt-female"><?php if($this->user->relations) echo $this->user->relations; ?></span></p>
                <p><span class="txt-gender"><?php echo Yii::t('global', 'Age: ')?> </span><span class="txt-female">22-28</span></p>
                <p><span class="txt-gender"><?php echo Yii::t('global', 'Training:') ?> </span><span class="txt-female">Yes</span></p>
            </div>
            <div class="looking-about">
                <span class="looking_about"><?php echo Yii::t('global', 'about') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <p>I so love writing poems and having tea with people who also lov</p>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'education') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="bachelor"><?php if($this->user->education) echo $this->user->education; ?></span>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'RELIGION') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="bachelor"><?php if($this->user->religion) echo $this->user->religion ?></span>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'ETHNICITY')?></span>
                <form>
                    <input class="search-pre" type="text" placeholder="Pre-Fill" />
                    <span class="my-btn"><input type="submit" value="Save"/><button>Cancel</button></span>
                </form>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'HEIGHT') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="bachelor"><?php if($this->user->height) echo $this->user->height . Yii::t('global', ' FEET')?> </span>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'CHILDREN') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="bachelor">17, all boys</span>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'HOW OFTEN DO YOU EXCERCISE?') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="bachelor"><?php if($this->user->excercise) echo $this->user->excercise ?></span>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'DO YOU DRINK?') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="bachelor"><?php if($this->user->drink) echo $this->user->drink?></span>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'DO YOU SMOKE?') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="bachelor"><?php if($this->user->smoke) echo $this->user->smoke ?></span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global','FAVORITE SPORT') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="godfather"><?php if($this->user->passion) echo $this->user->passion?></span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global', 'FAVORITE EXERCISE') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="godfather">Push Ups</span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php Yii::t('global', 'GYM MEMBERSHIP') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="godfather">Gold's Gym</span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global', 'DIET') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="godfather">Vegan</span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global',  'HOW OFTEN DO YOU EXCERCISE?') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <div style="position: relative;">
                    
                    <span class="godfather"><?php echo Yii::t('global', 'Nope') ?></span>
                    <p class="range-2">
                        <span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="41" aria-valuetext="41">
                            <span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: 41%;"></span>'
                            <span class="ws-range-rail ws-range-track" style="left: 11px; right: 11px;">
                                <span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: 41%;">
                                    <span data-value="41" data-valuetext="41"></span>
                                </span>
                            </span>
                        </span>
                    </p>
                    <span class="often"><?php echo Yii::t('global', 'Often') ?></span>
                </div>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global', 'DO YOU DRINK?') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <div style="position: relative;">
                    
                    <span class="godfather"><?php echo Yii::t('global', 'Nope') ?></span>
                    <p class="range-2">
                        <!--<input type="range" value="20" max="100" class="input-range" />-->
                        <span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="41" aria-valuetext="41">
                            <span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: 41%;"></span>'
                            <span class="ws-range-rail ws-range-track" style="left: 11px; right: 11px;">
                                <span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: 41%;">
                                    <span data-value="41" data-valuetext="41"></span>
                                </span>
                            </span>
                        </span>
                    </p>
                    <span class="often"><?php echo Yii::t('global', 'Often') ?></span>
                </div>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global', 'DO YOU SMOKE?') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <div style="position: relative;">
                    
                    <span class="godfather"><?php echo Yii::t('global', 'Nope') ?></span>
                    <p class="range-2">
                        <span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="41" aria-valuetext="41">
                            <span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: 41%;"></span>'
                            <span class="ws-range-rail ws-range-track" style="left: 11px; right: 11px;">
                                <span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: 41%;">
                                    <span data-value="41" data-valuetext="41"></span>
                                </span>
                            </span>
                        </span>
                    </p>
                    <span class="often"><?php echo Yii::t('global', 'Often') ?></span>
                </div>
            </div>
            
            <div class="content-bit-final favorite_a">
                <span class="what"><?php echo Yii::t('global', 'Goals') ?></span>
                <a href="#"><span class="note-span"></span></a>
                <span class="godfather"><?php if($this->user->goal) echo $this->user->goal ?></span>
            </div>
        </div>
        <!--End Post 1 -->
    </div>
    <div class="right-profile">
    
        <div class="content-video" style="display: none;">
            <div class="title-photo">
                <h3>Videos <span>(2 Videos)</span></h3>
                <p>
                    <a href="#">Upload</a>
                    <a href="#">delete</a>
                    <a href="#" class="close-icon"></a>
                </p>
                
            </div>
            
            <div class="post-video"> 
                <!--<div class="title-video">
                    <h2>This is my title</h2>
                </div>-->
                <div class="content-post">
                    <h3><span class="link_3">ICEBUCKET CHALLENGE</span> <span class="link_2">#ALSawareness </span><span class="link_1">#LOL</span></h3>
                    <span class="hour-post">1 hr</span>
                    <iframe title="YouTube video player" class="youtube-player" type="text/html" style="padding-left: 10px; padding-bottom: 10px;"
                    width="98%" height="390" src="http://www.youtube.com/embed/uIbkLjjlMV8"
                    frameborder="0" allowFullScreen></iframe>
                </div>
            </div>
            
            <div class="post-video video-border"> 
                <!--<div class="title-video">
                    <h2>This is my title</h2>
                </div>-->
                <div class="content-post">
                    <h3><span class="link_3">Workout like a pro in 3 minutes.</span></h3>
                    <span class="hour-post">1 hr</span>
                    <iframe title="YouTube video player" class="youtube-player" type="text/html" style="padding-left: 10px; padding-bottom: 10px;"
                    width="98%" height="390" src="http://www.youtube.com/embed/uIbkLjjlMV8"
                    frameborder="0" allowFullScreen></iframe>
                </div>
            </div>
            
        </div>
        
        <!--Photo Pravite Page-->
        <div class="content-photo-private" style="display: none;">
            <div class="title-photo">
                <h3>Private Photos <span>(243 Photos)</span></h3>
                <p>
                    <a href="#">Upload</a>
                    <a href="#">delete</a>
                    <a href="#" class="close-icon"></a>
                </p>
                
            </div>
            <ul>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_6.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_5.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_4.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_3.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_2.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_1.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_1.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_2.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_3.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_4.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_5.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_6.png"></a></li>
            </ul>
        </div>
        <!--End Photo Pravite Page-->
        
        <!--Photo Page-->
        <div class="content-photo" style="display: none;">
            <div class="title-photo">
                <h3>Photos <span>(243 Photos)</span></h3>
                <p>
                    <a href="#">Upload</a>
                    <a href="#">delete</a>
                    <a href="#" class="close-icon"></a>
                </p>
                
            </div>
            <ul>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_1.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_2.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_3.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_4.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_5.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_6.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_1.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_2.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_3.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_4.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_5.png"></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo_6.png"></a></li>
            </ul>
        </div>
        
        <!--End Photo Page-->
        
        <!--Home Page-->
        <div class="content-profile">
        <!--Post 1-->
            <div class="post"> 
                <div class="first-infor infor-pro">
                    <div class="profile">
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatart-step2.png">
                        <div class="crycle-img">
                            <h2 class="h2-name">Rome Martin J. Rosales<span class="time-location">18 F, CA,</span> <span class="dot-icon"> 2 hr</span></h2>
                        </div>
                    </div>
                    <span class="refesh">1002</span>
                </div>
                <div class="content-post">
                    <h3><span class="link_3">ICEBUCKET CHALLENGE</span> <span class="link_2">#ALSawareness </span><span class="link_1">#LOL</span></h3>
                    <iframe title="YouTube video player" class="youtube-player" type="text/html" style="padding-left: 10px;"
                    width="98%" height="390" src="http://www.youtube.com/embed/uIbkLjjlMV8"
                    frameborder="0" allowFullScreen></iframe>
                </div>
            </div>
            <!--End Post 1 -->
            
            <div class="post"> 
                <div class="first-infor infor-pro">
                    <div class="profile">
                        <img src="/themes/default/images/avatart-step2.png">
                        <div class="crycle-img">
                            <h2 class="h2-name">Rome Martin J. Rosales<span class="time-location">18 F, CA,</span> <span class="dot-icon"> 2 hr</span></h2>
                        </div>
                    </div>
                    <span class="refesh">12</span>
                </div>
                <div class="content-post">
                    <h3 style="padding-left: 10px;"><span class="link_1">yumMmm</span> <span class="link_3">#burger #7200cal</span> <span class="link_2">#LOL #depressed </span></h3>
                    <img style="padding-left: 10px; padding-right: 10px;" src="/themes/default/images/break.png">
                </div>
            </div>
            
            <div class="post"> 
                <div class="first-infor infor-pro">
                    <div class="profile">
                        <img src="/themes/default/images/avatart-step2.png">
                        <div class="crycle-img">
                            <h2 class="h2-name">Martin Rosales<span class="time-location">33 M, NY,</span> <span class="dot-icon">Yesterday</span></h2>
                        </div>
                    </div>
                    <div class="refesh">75</div>
                </div>
                <div class="content-post">
                    <h4>Shoutout to my nigga Manny Pacman Pacquiao for
                    helping in my weight-loss programme.<span class="link_1">#LOL</span></h4>
                </div>
            </div>
        </div>
        <div class="post" style="padding-bottom: 0px;"> 
            <div class="bit-and-bit">
                <span class="bit">BITS AND BITS</span>
                <!--<button class="add_question">Add a Custom Question</button>-->
                <span class="add-question-1">Add Custom Question</span>
            </div>
            <a href="#" class="link_question">
                <div class="content-bit">
                    <span class="what">WHAT IS THE LAST MOVIE YOU WATCHED?</span>
                    <span class="note-span"></span>
                    <span class="godfather">The Godfather Trilogy</span>
                </div>
            </a>
            <a href="#" class="link_question">
                <div class="content-bit">
                    <span class="what">WHO IS YOUR CELEBRITY CRUSH?</span>
                    <span class="note-span"></span>
                    <span class="godfather">Jennifer Lawrence</span>
                </div>
            </a>
            <a href="#" class="link_question">
                <div class="content-bit">
                    <span class="what">WHAT IS YOUR CAR MAKE?</span>
                    <span class="note-span"></span>
                    <span class="godfather">HOnda</span>
                </div>
            </a>
            
            <a href="#" class="link_question">
                <div class="content-bit">
                    <span class="what">MY PERFECT SUNDAY</span>
                    <span class="note-span"></span>
                    <span class="godfather">DARK</span>
                </div>
            </a>
            <a href="#" class="link_question">
                <div class="content-bit-final">
                    <span class="what">WHAT IS THE LAST MOVIE YOU WATCHED?</span>
                    <span class="note-span"></span>
                    <span class="godfather">The Godfather Trilogy</span>
                </div>
            </a>
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


<div class="modal fade" id="PrivateVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content special-border">
      <div class="modal-header header-report">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title upgarade-account">
        <span style="text-transform: uppercase;">UPGRADE YOUR ACCOUNT</span> <span>to be able to upload videos and</span> <span style="color: #ff6476;"><a href="#">more!</a></span>
         </h4>
        
      </div>
      <div class="modal-footer footer-report footer-upgarde">
        <a type="button" class="btn btn-primary my-report">Upgrade Account</a>
      </div>
    </div>
  </div>
</div>

