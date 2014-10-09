<div class="banner-ad-top">
    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ads-top.png" />
</div>
<hr class="hr-line" />
<div class="content-main">
    <?php //$this->widget('widgets.admin.notifications'); ?>
    
    
    <div class="infor-user">
        <div class="report-user-1">
            <!--<a class="report-user user-report">Report User</a>-->
        </div>

        <div class="avartar">
            <?php if($model->photo =='undefined'){ ?>
                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/no-avatar.png">
            <?php } else { ?>
                <img src="/uploads/avatar/<?php echo $model->photo ?>" />
            <?php } ?>
        </div>
        <div class="content-infor-profile">
            <div class="name_user">
                <?php echo $model->username ?>
            </div>
            <div class="menu-nav-infor">
                <ul style="float: right;">
                    <li><a href="#" data-toggle="modal" data-target="#WantToChat"><span class="span-chat"></span>CHAT</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#SendaMessage"><span class="span-message"></span>Message</a></li>
                    <li><a href="#"><span class="span-favorite"></span>Favorite</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#RateUser"><span class="span-rate"></span>Rate</a></li>
                </ul>
            </div>
        </div>
       
        <div class="content-img">
            <div style="float: left; width: 60%; padding-left: 14%;">
                <div class="street"><span class="icon-people"></span>24, M, Straight</div>
                <div class="businuess"><span class="icon-vali"></span><?php echo $model->career; ?></div>
                <div class="location"><span class="icon-location"></span><?php echo $model->address; ?></div>
            </div>
            <div class="img-photo-video">
                <div class="photo-private" id="PhotoNomal">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo.png" />
                    <h6>Photos</h6>
                    <h3><?php echo count($photos)?></h3>
                    <span class="line-green-photo"></span>
                </div>
                <div class="photo-private" >
                    <a href="#" data-toggle="modal" data-target="#PrivatePhoto">
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo.png" />
                        <h6>Private Photo</h6>
                        <h3><?php echo count($private)?></h3>
                    </a>
                </div>
                <div class="photo-private" id="VideosNormal">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/videos.png" />
                    <h6>Videos</h6>
                    <h3>15</h3>
                    <span class="line-green-video"></span>
                </div>
                
            </div>
        </div>
        
    </div>
    <div class="left-profile">
        <!--Post 1-->
        <!--<span class="arrow-up"></span>-->
        <div class="post" style="border: none; position: relative;" > 
            <div class="looking-for">
                <span class="looking_img">LOOKING FOR</span> <span class="stick-green-profile"></span>
                <!--<a href="#"><span class="check-ok"></span></a>-->
                <p>
                <span class="txt-female-profile">
                    <?php if($model->training == 0) echo 'No,'; else echo "Yes,"; ?>
                    <?php echo $model->relations. ',' ?>
                    <?php  if($model->gender == 1) echo "Female,"; else echo 'Male,'; ?>
                    <?php echo "Ages: ".  $model->age  ?>
                    
                </span>
                
                </p>
                </div>
            <div class="looking-about">
                <span class="looking_about">about</span>
                <p><?php echo $model->about; ?></p>
            </div>
            
            <div class="education">
                <span class="education-span">education</span>
                <span class="bachelor"><?php echo Education::model()->getNameEducation($model->education); ?></span>
            </div>
            
            <div class="education">
                <span class="education-span">RELIGION</span>
                <span class="bachelor"><?php echo Religion::model()->getNameReligion($model->religion) ?></span>
            </div>
            
            <div class="education">
                <span class="education-span">ETHNICITY</span>
                <span class="bachelor"><?php echo Ethnicity::model()->getNameEthnicity($model->ehtnicity) ?></span>
            </div>
            
            <div class="education">
                <span class="education-span">HEIGHT</span>
                <span class="bachelor"><?php echo $model->height . Yii::t('global', ' FEET') ?></span>
            </div>
            
            <div class="education">
                <span class="education-span">CHILDREN</span>
                <span class="bachelor"><?php echo Children::model()->getNameChildren($model->children); ?></span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">Fitness passion</span>
                <span class="godfather"><?php echo $model->passion ?></span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">GYM MEMBERSHIP</span>
                <span class="godfather"><?php echo $model->gym; ?></span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">DIET</span>
                <span class="godfather"><?php echo $model->diet ?></span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">Goals</span>
                <span class="godfather"><?php echo $model->goal ?></span>
            </div>
            
            
            <div class="content-bit favorite_a">
                <span class="what">HOW OFTEN DO YOU EXCERCISE?</span>
                <div style="position: relative;">
                    
                    <span class="godfather"><?php echo Yii::t('global', 'Never') ?></span>
                    <p class="range-2" id="value-excercise">
                        <span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="<?php echo $model->excercise; ?>" aria-valuetext="<?php /*if($this->user->excercise) echo $this->user->excercise; */?>">
                            <span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: <?php echo $model->excercise; ?>%;"></span>
                            <span class="ws-range-rail ws-range-track" style="left: 11px; right: 9px;">
                                <span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: <?php echo $model->excercise; ?>%;">
                                     </span>
                            </span>
                        </span>
                    </p>
                    <span class="often"><?php echo Yii::t('global', 'Often') ?></span>
                </div>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">DO YOU DRINK?</span>
                <div style="position: relative;">
                    
                    <span class="godfather"><?php echo Yii::t('global', 'Never') ?></span>
                    <p class="range-2" id="value-drink">
                        <span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="<?php echo $model->drink; ?>" aria-valuetext="<?php /*if($this->user->excercise) echo $this->user->excercise; */?>">
                            <span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: <?php echo $model->drink; ?>%;"></span>
                            <span class="ws-range-rail ws-range-track" style="left: 11px; right: 9px;">
                                <span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: <?php echo $model->drink; ?>%;">
                                     </span>
                            </span>
                        </span>
                    </p>
                    <span class="often"><?php echo Yii::t('global', 'Often') ?></span>
                    
                </div>
            </div>
            
            <div class="content-bit-final favorite_a">
                <span class="what">DO YOU SMOKE?</span>
                <div style="position: relative;">
                    
                    <span class="godfather"><?php echo Yii::t('global', 'Never') ?></span>
                    <p class="range-2" id="value-smoke">
                        <span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="<?php echo $model->smoke; ?>" aria-valuetext="<?php /*if($this->user->excercise) echo $this->user->excercise; */?>">
                            <span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: <?php echo $model->smoke; ?>%;"></span>
                            <span class="ws-range-rail ws-range-track" style="left: 11px; right: 9px;">
                                <span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: <?php echo $model->smoke; ?>%;">
                                     </span>
                            </span>
                        </span>
                    </p>
                    <span class="often"><?php echo Yii::t('global', 'Often') ?></span>
                </div>
            </div>
            
        </div>
        <!--End Post 1 -->
    </div>
    <div class="right-profile">
    
        <!--Photo Page-->
        <!--<div class="content-photo" style="display: none;">
            <div class="title-photo">
                <h3>Photos <span>(243 Photos)</span></h3>
                <p>
                    <a href="#">Upload</a>
                    <a href="#">delete</a>
                    <a href="#" class="close-icon"></a>
                </p>
                
            </div>
            <ul>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_1.png"></a></li>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_2.png"></a></li>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_3.png"></a></li>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_4.png"></a></li>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_5.png"></a></li>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_6.png"></a></li>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_1.png"></a></li>
                <li><a href="#"><img src="<?php ///echo Yii::app()->themeManager->baseUrl; ?>/images/photo_2.png"></a></li>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_3.png"></a></li>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_4.png"></a></li>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_5.png"></a></li>
                <li><a href="#"><img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/photo_6.png"></a></li>
            </ul>
        </div>-->
        
        
        <!--<div class="content-video" style="display: none;">
            <div class="title-photo">
                <h3>Videos <span>(2 Videos)</span></h3>
                <p>
                    <a href="#" class="close-icon"></a>
                </p>
                
            </div>
            
            <div class="post-video"> 
                <!--<div class="title-video">
                    <!--<h2>This is my title</h2>
                </div>-->
                <!--<div class="content-post">
                    <h3><span class="link_3">ICEBUCKET CHALLENGE</span> <span class="link_2">#ALSawareness </span><span class="link_1">#LOL</span></h3>
                    <span class="hour-post">1 hr</span>
                    <iframe title="YouTube video player" class="youtube-player" type="text/html" style="padding-left: 10px; padding-bottom: 10px;"
                    width="98%" height="390" src="http://www.youtube.com/embed/uIbkLjjlMV8"
                    frameborder="0" allowFullScreen></iframe>
                </div>
            </div>
            
            <div class="post-video video-border"> 
                <!--<div class="title-video">
                   <!-- <h2>This is my title</h2>
                </div>-->
               <!-- <div class="content-post">
                    <h3><span class="link_3">Workout like a pro in 3 minutes.</span></h3>
                    <span class="hour-post">1 hr</span>
                    <iframe title="YouTube video player" class="youtube-player" type="text/html" style="padding-left: 10px; padding-bottom: 10px;"
                    width="98%" height="390" src="http://www.youtube.com/embed/uIbkLjjlMV8"
                    frameborder="0" allowFullScreen></iframe>
                </div>
            </div>
            
        </div>-->
        <?php $this->renderPartial('/user/photo_profile_other',compact('photos','private')) ?>
        <!--Home Page-->
        <div class="content-profile">
        <!--Post 1-->
            <!--<div class="post"> 
                <div class="first-infor infor-pro">
                    <div class="profile">
                        <img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/avatart-step2.png">
                        <div class="crycle-img">
                            <h2 class="h2-name">Rome Martin J. Rosales<span class="time-location">18 F, CA,</span> <span class="dot-icon"> 2 hr</span></h2>
                        </div>
                    </div>
                    <span class="refesh">1002</span>
                </div>
                <div class="content-post">
                    <h3><span class="link_3">ICEBUCKET CHALLENGE</span> <span class="link_2">#ALSawareness </span><span class="link_1">#LOL</span></h3>
                    <iframe title="YouTube video player" class="youtube-player" type="text/html" style="padding-left: 10px; padding-bottom: 10px;"
                    width="98%" height="390" src="http://www.youtube.com/embed/uIbkLjjlMV8"
                    frameborder="0" allowFullScreen></iframe>
                </div>
            </div>->
            <!--End Post 1 -->
            
            <!--<div class="post"> 
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
            </div>-->
            <?php if($achievements) { 
                foreach($achievements as $value){
                ?>
                <div class="post"> 
                    <div class="first-infor infor-pro">
                        <div class="profile">
                        <?php if($model->photo =='undefined'){ ?>
                            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/no-avatar.png">
                        <?php } else { ?>
                            <img src="/uploads/avatar/<?php echo $model->photo ?>" />
                        <?php } ?>
                            <div class="crycle-img">
                                <h2 class="h2-name"><?php echo $model->username ?><span class="time-location">33 M, NY,</span> <span class="dot-icon">Yesterday</span></h2>
                            </div>
                        </div>
                        <div class="refesh">75</div>
                    </div>
                    <div class="content-post">
                        <h4><?php echo $value->content; ?><span class="link_1">#LOL</span></h4>
                        <?php if($value->media){ 
                            $filetype = pathinfo($value->media, PATHINFO_EXTENSION);
                            if(($filetype == 'jpg') || ($filetype == 'PNG') || ($filetype == 'png') || ($filetype == 'GIF') || ($filetype == 'gif')){ ?>
                                <img src="/uploads/media/<?php echo $value->media ?>" alt="" />
                            <?php }
                            if(($filetype == '3gp') || ($filetype == 'avi') || ($filetype == 'flv') || ($filetype == 'mp4') || ($filetype == 'FLV')){ ?>
                                <div class="video-view" style="padding: 10px; width: 100%;">
                                <?php echo $model->getVideo($value->media) ?>
                                </div>
                           <?php }
                        } ?>
                    </div>
                </div>
            <?php } }?>
        </div>
        
        <div class="post" style="padding-bottom: 0px;"> 
             <div class="bit-and-bit">
                <span class="bit">BITS AND BITS</span>
            </div>
            <?php if($question){
                    $i = 0;
                    foreach($question as $value){  
                        if($i == (count($question) - 1) ) $class = 'content-bit-final';
                        else $class = 'content-bit';
                        ?>
                        <div class="<?php echo $class; ?>">
                            <span class="what"><?php echo Question::model()->getQuestion($value['question_id']); ?></span>
                            <span class="godfather"><?php echo $value['answer']; ?></span>
                        </div>
                    
                   <? $i++; }
            } ?>
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

<!-- Modal Message-->
<div class="modal fade" id="WantToChat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content special-border">
      <div class="modal-header header-report">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title request-title">Do you wish to chat with this person? </h4>
        
      </div>
      <div class="modal-footer footer-report">
        <div class="avatar-model">
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatar-post-small.png">
            <span class="request-romeo">Romeo</span>
        </div>
        <a type="button" class="btn btn-primary my-report">Send Chat Request</a>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="PrivatePhoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content special-border">
      <div class="modal-header header-report">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title access-title">Do you wish to access his private photos? </h4>
        
      </div>
      <div class="modal-footer footer-report">
        <div class="avatar-model">
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatar-post-small.png">
            <span class="request-romeo">Romeo</span>
        </div>
        <a type="button" class="btn btn-primary my-report">Ask for permission</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="SendaMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header header-report special-border">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <span class="span-to">To</span> <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatar-post-small.png">
            <span class="user-kaka">Ricky Martin</span>
          </div>
          <div class="">
            <textarea class="form-control" rows="4" cols="50" placeholder="Write a message"></textarea>
          </div>
          <div class="modal-footer footer-report">
            <a type="button" class="btn btn-primary my-report">Send</a>
          </div>
    </div>
  </div>
</div>


<div class="modal fade" id="RateUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog">
    <div class="modal-content" style="width: 440px;">
          <div class="modal-header header-report special-border" style="background-color: #e8e8e8; border-bottom-color: #cdc7c7;">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <span class="span-to">Rate</span> <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatar-post-small.png">
            <span class="user-kaka">Romeo Martin Rosales</span>
          </div>
          <div style="text-align: center; background-color: #f0f0f0;">
            <div class="content-star-rate">
            <ul>
                <li><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/rate-star-green.png"/></li>
                <li><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/rate-star-green.png"/></li>
                <li><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/rate-star-green.png"/></li>
                <li><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/rate-star-green.png"/></li>
                <li><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/rate-star.png"/></li>
            </ul>
            
          </div>
          <span class="text-rate">(set RATING name per number of stars)</span>
          </div>
          <div class="modal-footer footer-report" style="border: none;">
            <a type="button" class="btn btn-primary my-report">Rate</a>
          </div>
    </div>
  </div>
</div>