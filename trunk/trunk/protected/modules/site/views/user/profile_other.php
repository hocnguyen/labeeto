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
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatar-post.png"/>
        </div>
        <div class="content-infor-profile">
            <div class="name_user">
                Romeo
            </div>
            <div class="menu-nav-infor">
                <ul style="float: right;">
                    <li><a href="#" data-toggle="modal" data-target="#WantToChat"><span class="span-chat"></span>CHAT</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#SendaMessage"><span class="span-message"></span>Message</a></li>
                    <li><a href="#"><span class="span-favorite"></span>Favorite</a></li>
                    <li><a href="#"><span class="span-rate"></span>Rate</a></li>
                </ul>
            </div>
        </div>
       
        <div class="content-img">
            <div style="float: left; width: 60%; padding-left: 14%;">
                <div class="street"><span class="icon-people"></span>24, M, Straight</div>
                <div class="businuess"><span class="icon-vali"></span>FREELANCE UI/UX DESIGNER</div>
                <div class="location"><span class="icon-location"></span>Metro Manila, Philipines</div>
            </div>
            <div class="img-photo-video">
                <div class="photo-private" id="PhotoNomal">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo.png" />
                    <h6>Photos</h6>
                    <h3>243</h3>
                    <span class="line-green-photo"></span>
                </div>
                <div class="photo-private" >
                    <a href="#" data-toggle="modal" data-target="#PrivatePhoto">
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo.png" />
                        <h6>Private Photo</h6>
                        <h3>8</h3>
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
                <span class="looking_img">LOOKING FOR</span>
                <!--<a href="#"><span class="check-ok"></span></a>-->
                <p><span class="txt-gender">Gender: </span><span class="txt-female">Female</span><span class="stick-green"></span></p>
                <p><span class="txt-gender">Relationship: </span><span class="txt-female">Casual</span><span class="stick-green"></span></p>
                <p><span class="txt-gender">Age: </span><span class="txt-female">22-28</span></p>
                <p><span class="txt-gender">Training: </span><span class="txt-female">Yes</span><span class="stick-green"></span></p>
            </div>
            <div class="looking-about">
                <span class="looking_about">about</span>
                <p>I so love writing poems and having tea with people who also love tea</p>
            </div>
            
            <div class="education">
                <span class="education-span">education</span>
                <span class="bachelor">Bachelor</span>
            </div>
            
            <div class="education">
                <span class="education-span">RELIGION</span>
                <span class="bachelor">Roman Catholic</span>
            </div>
            
            <div class="education">
                <span class="education-span">ETHNICITY</span>
                <span class="bachelor">Asian</span>
            </div>
            
            <div class="education">
                <span class="education-span">HEIGHT</span>
                <span class="bachelor">5'5 FEET</span>
            </div>
            
            <div class="education">
                <span class="education-span">CHILDREN</span>
                <span class="bachelor">17, all boys</span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">FAVORITE SPORT</span>
                <span class="godfather">Cricket, Basketball, Poker</span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">FAVORITE EXERCISE</span>
                <span class="godfather">Push Ups</span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">GYM MEMBERSHIP</span>
                <span class="godfather">Gold's Gym</span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">DIET</span>
                <span class="godfather">Vegan</span>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">HOW OFTEN DO YOU EXCERCISE?</span>
                <div style="position: relative;">
                    
                    <span class="godfather">Nope</span>
                    <p class="range-2">
                        <input type="range" value="20" max="100" class="input-range" disabled = "disabled" />
                    </p>
                    <span class="often">Often</span>
                </div>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">DO YOU DRINK?</span>
                <div style="position: relative;">
                    
                    <span class="godfather">Nope</span>
                    <p class="range-2">
                        <input type="range" value="80" max="100" class="input-range" disabled = "disabled" />
                    </p>
                    <span class="often">Often</span>
                </div>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what">DO YOU SMOKE?</span>
                <div style="position: relative;">
                    
                    <span class="godfather">Nope</span>
                    <p class="range-2">
                        <input type="range" value="80" max="100" class="input-range" disabled = "disabled" />
                    </p>
                    <span class="often">Often</span>
                </div>
            </div>
            
            <div class="content-bit-final favorite_a">
                <span class="what">Goals</span>
                <span class="godfather">WEIGHT LOSS</span>
            </div>
        </div>
        <!--End Post 1 -->
    </div>
    <div class="right-profile">
    
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
        
        
        <div class="content-video" style="display: none;">
            <div class="title-photo">
                <h3>Videos <span>(2 Videos)</span></h3>
                <p>
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
                    <iframe title="YouTube video player" class="youtube-player" type="text/html" style="padding-left: 10px; padding-bottom: 10px;"
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
                <!--<span class="add-question-1">Add Custom Question</span>-->
            </div>
            <a href="#" class="link_question">
                <div class="content-bit">
                    <span class="what">WHAT IS THE LAST MOVIE YOU WATCHED?</span>
                    <!--<span class="note-span"></span>-->
                    <span class="godfather">The Godfather Trilogy</span>
                </div>
            </a>
            <a href="#" class="link_question">
                <div class="content-bit">
                    <span class="what">WHO IS YOUR CELEBRITY CRUSH?</span>
                    <span class="godfather">Jennifer Lawrence</span>
                </div>
            </a>
            <a href="#" class="link_question">
                <div class="content-bit">
                    <span class="what">WHAT IS YOUR CAR MAKE?</span>
                    <span class="godfather">Honda</span>
                </div>
            </a>
            
            <a href="#" class="link_question">
                <div class="content-bit">
                    <span class="what">MY PERFECT SUNDAY</span>
                    <span class="godfather">DARK</span>
                </div>
            </a>
            <a href="#" class="link_question">
                <div class="content-bit-final">
                    <span class="what">MY PERFECT SATURDAY</span>
                    <span class="godfather">DARKER</span>
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
