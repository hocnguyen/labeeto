r
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
            
            <?php if($this->user->photo =='undefined'){ ?>
                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/no-avatar.png">
            <?php } else { ?>
                <img src="/uploads/avatar/<?php echo $this->user->photo ?>" />
            <?php } ?>
            <span class="double-spans"></span>
            <div class="popup_avavtar">
                <a href="#" data-toggle="modal" data-target="#ChangeAvatar">
                    <span style="display: inline-block;">Upload Photo</span>
                </a>
            </div>
        </div>
        <div class="content-infor-profile">
            <div class="name_user">
                <?php echo $this->user->username ?>
                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/<?php echo ($online ==  User::USER_ONLINE)? 'search-online.png' :'settings.png'; ?>" >
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
                <div class="street"><span class="icon-people"></span>
                <?php echo date("Y") - date('Y', strtotime($this->user->birthday));  ?>, <?php  if($this->user->gender == 1) echo "F"; else echo 'M Straight'; ?> <?php if ($online->membership ==  User::MEMBER_VERIFIED ) { ?>
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/verify.png" >
                    <?php } ?></div>
                <div class="businuess"><span class="icon-vali"></span><?php if($this->user->career) echo $this->user->career; ?></div>
                <div class="location"><span class="icon-location"></span><?php if($this->user->address) echo $this->user->address; ?></div>
            </div>
            <div class="img-photo-video">
                <div class="photo-private"  id="PhotoNomal">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo.png" />
                    <h6><?php echo Yii::t('global', 'Photos') ?></h6>
                    <h3><?php echo count($photos)?></h3>
                    <span class="line-green-photo"></span>
                </div>
                <div class="photo-private" id="PhotoPrivate">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/photo.png" />
                    <h6><?php echo Yii::t('global', 'Private Photo') ?></h6>
                    <h3><?php echo count($private)?></h3>
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
                <span class="note-span" id="id-gender"></span>
                <div id="value-gender">
                    <p>
                        <span class="txt-gender"><?php echo Yii::t('global', 'Gender: ') ?></span>
                        <span class="txt-female"><?php  if($this->user->gender_look == 1) echo "Female"; else echo 'Male'; ?></span>
                    </p>
                    <p>
                        <span class="txt-gender"><?php echo Yii::t('global', 'Relationship: ') ?> </span>
                        <span class="txt-female"><?php if($this->user->relations_look) echo $this->user->relations_look; ?></span>
                    </p>
                    <p>
                        <span class="txt-gender"><?php echo Yii::t('global', 'Age: ')?> </span>
                        <span class="txt-female"><?php if($this->user->age) echo $this->user->age; ?></span>
                    </p>
                    <p>
                        <span class="txt-gender"><?php echo Yii::t('global', 'Training Buddy:') ?> </span>
                        <span class="txt-female"><?php if($this->user->training == 0) echo 'No'; else echo "Yes"; ?></span>
                    </p>
                </div>
                <form method="post" id="form-gender" style="display: none;">
                    <p>
                        <span class="txt-gender"><?php echo Yii::t('global', 'Gender: ') ?></span>
                        <span class="txt-female">
                            <input type="radio" name="gender" <?php if($this->user->gender_look == 0) echo 'checked="true"'; ?> value="0"  />Male
                            <input type="radio" name="gender" <?php if($this->user->gender_look == 1) echo 'checked="true"'; ?> value="1" name=""/>Female
                        </span>
                    </p>
                    <p>
                        <span class="txt-gender"><?php echo Yii::t('global', 'Relationship: ') ?> </span>
                        <span class="txt-female">
                            <select name="relationship" class="form-control">
                                <option <?php if($this->user->relations_look == 'Casual') echo 'selected'; ?> value="Casual">Casual</option>
                                <option <?php if($this->user->relations_look == 'Something Serious') echo 'selected'; ?> value="Something Serious">Something Serious</option>
                                <option <?php if($this->user->relations_look == 'Friendship') echo 'selected'; ?> value="Friendship">Friendship</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        <span class="txt-gender"><?php echo Yii::t('global', 'Age: ')?> </span>
                        <?php $arr_age = explode("-",$this->user->age);?>
                        <span class="txt-female">
                            <select name="age-from" class="form-control" style="width: 75px; float: left;">
                                <?php 
                                
                                for($i=18; $i<=50; $i++) {
                                    if($arr_age[0] == $i)
                                        $l = 'selected';
                                    else
                                        $l = '';
                                    echo "<option ". $l ." value='".$i."'>".$i."</option>";
                                }?>
                            </select>
                            <select name="age-to" class="form-control" style="width: 75px;">
                                <?php 
                                
                                for($i=19; $i<=50; $i++) {
                                    if($arr_age[1] == $i)
                                        $l = 'selected';
                                    else
                                        $l = '';
                                    echo "<option ". $l ." value='".$i."'>".$i."</option>";
                                }?>
                            </select>
                        </span>
                    </p>
                    <p>
                        <span class="txt-gender"><?php echo Yii::t('global', 'Training Buddy:') ?> </span>
                        <span class="txt-female">
                            <select name="training" class="form-control">
                                <option <?php if($this->user->training == 1) echo 'selected'; ?> value="1">Yes</option>
                                <option <?php if($this->user->training == 0) echo 'selected'; ?> value="0">No</option>
                            </select>
                        </span>
                    </p>
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-gender">Cancel</span>
                    </span>
                </form>
            </div>
            <div class="looking-about">
                <span class="looking_about"><?php echo Yii::t('global', 'about') ?></span>
                <span class="note-span" id="id-about"></span>
                <p id="value-about"><?php if($this->user->about) echo $this->user->about; ?></p>
                <form method="post" style="display: none;" id="form-about">
                    <textarea class="form-control" name="about"><?php if($this->user->about) echo $this->user->about; ?></textarea>
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-about">Cancel</span>
                    </span>
                </form>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'education') ?></span>
                <span class="note-span" id="id-education"></span>
                <span class="bachelor" id="value-education"><?php if($this->user->education) echo Education::model()->getNameEducation($this->user->education); ?></span>
                <form method="post" style="display: none;" id="form-education">
                    <select name="education" id="education" class="form-control">
                        <?php $education = Education::model()->findAll(); 
                            foreach($education as $value){
                                $l = '';
                                if($value->id == $this->user->education)
                                    $l = 'selected'; 
                                    echo "<option ". $l ." value='".$value->id."'>".$value->name."</option>"; 
                                }
                        ?>
                    </select>
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-education">Cancel</span>
                    </span>
                </form>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'RELIGION') ?></span>
                <span class="note-span" id="id-religion"></span>
                <span class="bachelor" id="value-religion"><?php if($this->user->religion) echo Religion::model()->getNameReligion($this->user->religion) ?></span>
                <form method="post" style="display: none;" id="form-religion">
                    <select name="religion" id="religion" class="form-control">
                        <?php $religion = Religion::model()->findAll(); 
                            foreach($religion as $value){
                                $l = '';
                                if($value->id == $this->user->religion)
                                    $l = 'selected'; 
                                    echo "<option ". $l ." value='".$value->id."'>".$value->name."</option>"; 
                                }
                        ?>
                    </select>
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-religion">Cancel</span>
                    </span>
                </form>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'ETHNICITY')?></span>
                <span class="note-span" id="id-ehtnicity"></span>
                <span class="bachelor" id="value-ehtnicity"><?php if($this->user->ehtnicity) echo Ethnicity::model()->getNameEthnicity($this->user->ehtnicity) ?></span>
                <form method="post" style="display: none;" id="form-ehtnicity">
                    <select name="ehtnicity" id="ethnicity" class="form-control">
                        <?php $ethnicity = Ethnicity::model()->findAll(); 
                            foreach($ethnicity as $value){
                                $l = '';
                                if($value->id == $this->user->ehtnicity)
                                    $l = 'selected'; 
                                    echo "<option ". $l ." value='".$value->id."'>".$value->name."</option>"; 
                                }
                        ?>
                    </select>
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-ehtnicity">Cancel</span>
                    </span>
                </form>
            </div>
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'HEIGHT') ?></span>
                <span class="note-span" id="id-height"></span>
                <span class="bachelor" id="value-height"><?php if($this->user->height) echo $this->user->height . Yii::t('global', ' FEET')?> </span>
                <?php $arr = explode(".",$this->user->height);?>
                <form method="post" style="display: none;" id="form-height">
                    <div style="float: left; width: 50%;">
                        <select class="form-control" name="feet">
                                <?php 
                                
                                for($i=0; $i<=10; $i++) {
                                    if($arr[0] == $i)
                                        $l = 'selected';
                                    else
                                        $l = '';
                                    echo "<option ". $l ." value='".$i."'>".$i."</option>";
                                }?>
                        </select>
                    </div>
                    <div style="float: right; width: 49%;">
                        <select class="form-control" id="inches" name="inches">
                            <?php 
                            
                            /*for($i=0; $i<=9; $i++) {
                                if($arr[1] == $i)
                                    $h = 'selected';
                                else
                                    $h = '';
                                echo "<option ". $h ." value='".$i."'>".$i."</option>";
                            }*/?>
                        </select>
                    </div>
                        
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-height">Cancel</span>
                    </span>
                </form>
            </div>
            
            <div class="education">
                <span class="education-span"><?php echo Yii::t('global', 'CHILDREN') ?></span>
                <span class="note-span" id="id-children"></span>
                <span class="bachelor" id="value-children"><?php if($this->user->children) echo Children::model()->getNameChildren($this->user->children) ?> </span>
                <form method="post" style="display: none;" id="form-children">
                   <select class="form-control" name="children">
                        <?php $religion = Children::model()->findAll(); 
                            foreach($religion as $value){
                                $l = '';
                                if($value->id == $this->user->religion)
                                    $l = 'selected'; 
                                    echo "<option ". $l ." value='".$value->id."'>".$value->name."</option>"; 
                                }
                        ?>
                    </select>
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-children">Cancel</span>
                    </span>
                </form>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global', 'Fitness passion') ?></span>
                <span class="note-span" id="id-passion"></span>
                <span class="godfather" id="value-passion"><?php if($this->user->passion) echo $this->user->passion ?> </span>
                <form method="post" style="display: none;" id="form-passion">
                    <input type="text" name="passion" class="form-control" value="<?php if($this->user->passion) echo $this->user->passion; ?>"/>
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-passion">Cancel</span>
                    </span>
                </form>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global', 'GYM MEMBERSHIP') ?></span>
                <span class="note-span" id="id-gym"></span>
                <span class="godfather" id="value-gym"><?php if($this->user->gym) echo $this->user->gym ?> </span>
                <form method="post" style="display: none;" id="form-gym">
                    <input type="text" name="gym" class="form-control" value="<?php if($this->user->gym) echo $this->user->gym; ?>"/>
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-gym">Cancel</span>
                    </span>
                </form>
            </div>
            
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global', 'DIET') ?></span>
                <span class="note-span" id="id-diet"></span>
                <span class="godfather" id="value-diet"><?php if($this->user->diet) echo $this->user->diet ?> </span>
                <form method="post" style="display: none;" id="form-diet">
                    <input type="text" name="diet" class="form-control" value="<?php if($this->user->diet) echo $this->user->diet; ?>"/>
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-diet">Cancel</span>
                    </span>
                </form>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global', 'Goals') ?></span>
                <span class="note-span" id="id-goal"></span>
                <span class="godfather" id="value-goal"><?php if($this->user->goal) echo $this->user->goal ?> </span>
                <form method="post" style="display: none;" id="form-goal">
                    <input type="text" name="goal" class="form-control" value="<?php if($this->user->goal) echo $this->user->goal; ?>"/>
                    <span class="my-btn">
                        <input type="submit" value="Save"/>
                        <span class="text-cancel" id="cancel-goal">Cancel</span>
                    </span>
                </form>
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global',  'HOW OFTEN DO YOU EXCERCISE?') ?></span>
                <span class="note-span rangesUpdate" id="id-excercise" ></span>
                <div style="position: relative;" >
                    
                    <span class="godfather"><?php echo Yii::t('global', 'Never') ?></span>
                    <p class="range-2" id="value-excercise">
                        <span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="<?php if($this->user->excercise) echo $this->user->excercise; ?>" aria-valuetext="<?php /*if($this->user->excercise) echo $this->user->excercise; */?>">
                            <span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: <?php if($this->user->excercise) echo $this->user->excercise; ?>%;"></span>
                            <span class="ws-range-rail ws-range-track" style="left: 11px; right: 9px;">
                                <span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: <?php if($this->user->excercise) echo $this->user->excercise; ?>%;">
                                     </span>
                            </span>
                        </span>
                    </p>
                    
                    
                    <span class="often"><?php echo Yii::t('global', 'Often') ?></span>
                    <form method="post"  class="rangetype" id="form-excercise">
                        <input class="rangeOpacity" name="excercise" type="range" min="0" value="<?php if($this->user->excercise) echo $this->user->excercise; ?>" max="100" data-rangeslider>
                        <output style="display: none"></output>
                        <!--<p class="range-2">
                            <input type="range" min="1" max="100" step="1" value="<?php //echo $this->user->excercise ?>" name="excercise" class="width-range"/>
                        </p>-->
                        <span class="my-btn btn-ranges btn-ranges-ex" >
                            <input type="submit" value="Save"/>
                            <span class="text-cancel" id="cancel-excercise">Cancel</span>
                            <div class="ajaxloader"></div>
                        </span>

                    </form>
                </div>
                  
            </div>
            
            <div class="content-bit favorite_a">
                <span class="what"><?php echo Yii::t('global', 'DO YOU DRINK?') ?></span>
                <span class="note-span rangesUpdate" id="id-drink"></span>
                <div style="position: relative;">
                    
                    <span class="godfather"><?php echo Yii::t('global', 'Never') ?></span>
                    <p class="range-2" id="value-drink">
                        <!--<input type="range" value="20" max="100" class="input-range" />-->
                        <span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="<?php if($this->user->drink) echo $this->user->drink; ?>" aria-valuetext="<?php if($this->user->drink) echo $this->user->drink; ?>">
                            <span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: <?php if($this->user->drink) echo $this->user->drink; ?>%;"></span>
                            <span class="ws-range-rail ws-range-track" style="left: 11px; right: 9px;">
                                <span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: <?php if($this->user->drink) echo $this->user->drink; ?>%;">
                                    <span data-value="<?php if($this->user->drink) echo $this->user->drink; ?>" data-valuetext="<?php if($this->user->drink) echo $this->user->drink; ?>"></span>
                                </span>
                            </span>
                        </span>
                    </p>
                    <span class="often"><?php echo Yii::t('global', 'Often') ?></span>
                    <form method="post"  class="rangetype" id="form-drink">
                        <input name="drink" type="range" min="0" value="<?php if($this->user->drink) echo $this->user->drink; ?>" max="100" data-rangeslider>
                        <output style="display: none"></output>
                        <!--<p class="range-2">
                            <input type="range" min="1" max="100" step="1" value="<?php //echo $this->user->drink ?>" name="drink" class="width-range"/>
                        </p>-->
                        <span class="my-btn btn-ranges btn-ranges-dr">
                            <input type="submit" value="Save"/>
                            <span class="text-cancel" id="cancel-drink">Cancel</span>
                            <div class="ajaxloader"></div>
                        </span>
                    </form>
                </div>
                
            </div>
            
            <div class="content-bit-final favorite_a">
                <span class="what"><?php echo Yii::t('global', 'DO YOU SMOKE?') ?></span>
                <span class="note-span rangesUpdate" id="id-smoke"></span>
                <div style="position: relative;">
                    
                    <span class="godfather"><?php echo Yii::t('global', 'Never') ?></span>
                    <p class="range-2" id="value-smoke">
                        <span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="<?php if($this->user->smoke) echo $this->user->smoke; ?>" aria-valuetext="<?php if($this->user->smoke) echo $this->user->smoke; ?>">
                            <span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: <?php if($this->user->smoke) echo $this->user->smoke; ?>%;"></span>
                            <span class="ws-range-rail ws-range-track" style="left: 11px; right: 9px;">
                                <span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: <?php if($this->user->smoke) echo $this->user->smoke; ?>%;">
                                    <span data-value="<?php if($this->user->smoke) echo $this->user->smoke; ?>" data-valuetext="<?php if($this->user->smoke) echo $this->user->smoke; ?>"></span>
                                </span>
                            </span>
                        </span>
                    </p>
                    <span class="often"><?php echo Yii::t('global', 'Often') ?></span>
                    <form method="post"  class="rangetype" id="form-smoke">
                        <input name="smoke" type="range" min="0" value="<?php if($this->user->smoke) echo $this->user->smoke; ?>" max="100" data-rangeslider>
                        <output style="display: none"></output>
                        <!--<p class="range-2">
                            <input type="range" min="1" max="100" step="1" value="<?php //echo $this->user->smoke ?>" name="smoke" class="width-range"/>
                        </p>-->
                        <span class="my-btn btn-ranges btn-ranges-sm ">
                            <input type="submit" value="Save"/>
                            <span class="text-cancel" id="cancel-smoke">Cancel</span>
                            <div class="ajaxloader"></div>
                        </span>
                    </form>
                </div>
                
            </div>
            
        </div>
        <!--End Post 1 -->
    </div>
    <div class="right-profile">
    
        <div class="content-video" style="display: none;">
            <div class="title-photo">
                <h3>Videos <span>(2 Videos)</span></h3>
                <p>
                    <a href="#" data-toggle="modal" data-target="#ChangeAvatar">Upload</a>
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
        
        <?php $this->renderPartial('/user/photo',compact('photos','private')) ?>
        
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
                    width="98%" height="300" src="http://www.youtube.com/embed/uIbkLjjlMV8"
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
                <span class="bit">Detailed About Me</span>
                <span class="add-question-1" id="question-custom">Add Custom Question</span>
            </div>
            <div id="question-custom-form" class="content-form-question">
                <div class="form-group">
                    <input type="text" id="question" class="form-control" name="question" placeholder="Enter a question" />
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="answer" name="answer" placeholder="And now answer it!"></textarea>
                </div>
                <span class="my-btn">
                    <input type="submit" value="Save" class="post-question"/>
                    <span class="text-cancel" id="cancel-question-custom">Cancel</span>
                </span>
            </div>
            
            <div class="all-question"></div>
            <?php if($this->question){ 
                $i = 0;
                foreach($this->question as $value){                     
                    $check = Question::model()->checkQuestion($value['question_id']);
                ?>
                <?php if($check == 0) { ?>
                        <div <?php if($i == (count($this->question) - 1)) echo 'class="content-bit-final"'; else echo 'class="content-bit"'; ?> id="content-question-default_<?php echo $value['question_id'];?>">
                            <span class="what" id="sentence_question_<?php echo $value['question_id']; ?>"><?php echo Question::model()->getQuestion($value['question_id']); ?></span>
                        <?php }else{ ?>
                        <div <?php if($i == (count($this->question) - 1)) echo 'class="content-bit-final"'; else echo 'class="content-bit"'; ?> >
                            <span class="what"><?php echo Question::model()->getQuestion($value['question_id']); ?></span>
                        <?php } ?>
                        <span class="note-span note_default_question" data-id="<?php echo $value['question_id']; ?>"></span>
                        <span class="godfather answer_<?php echo $value['question_id']; ?>" ><?php echo $value['answer']; ?></span>
                        <div id="question_<?php echo $value['question_id']; ?>" style="display: none;" method="post">
                            <?php if($check == 0) { ?>
                                <input type="text" id="user_question_<?php echo $value['question_id']; ?>" name="question" class="form-control" value="<?php echo Question::model()->getQuestion($value['question_id']); ?>" />
                                <br />
                            <?php }else{ ?>
                                <input type="hidden" id="user_question_<?php echo $value['question_id']; ?>" name="question" class="form-control" value="<?php echo Question::model()->getQuestion($value['question_id']); ?>" />
                            <?php } ?>
                            <textarea class="form-control" id="user_answer_<?php echo $value['question_id']; ?>" name="answer"> <?php echo $value['answer']; ?> </textarea>
                            <span class="my-btn">
                                <input type="button" value="Save" class="saveAnswer" data-id="<?php echo $value['question_id'];; ?>" />
                                <?php if($check == 0) { ?>
                                    <span class="text-cancel q_default_delete deleteAnswer" data-id="<?php echo $value['question_id']; ?>">Delete</span>
                                <?php } ?>
                                <span class="text-cancel q_default_cancel" data-id="<?php echo $value['question_id']; ?>">Cancel</span>
                            </span>
                        </div>
                    </div>
                <?php $i++; } 
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


<div class="modal fade" id="ChangeAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content special-border">
      <div class="modal-header header-report">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <span>Upload Photo</span>
        
      </div>
      <div class="modal-footer footer-report footer-upgarde">
        <form method="post" id="form-change-avatar">
            <div style="width: 50%; float: left;">
                <input type="file" id="photo-new" name="photo-change" style="display: none;">
                <label for="photo-new" class="btn btn-primary my-report-1">From My Computer </label>
            </div>
        </form>
            <div style="width: 50%; float: left;">
                <a type="button" class="btn btn-primary my-report-1">From Facebook</a>
            </div>
        
      </div>
    </div>
  </div>
</div>

<script>
    var type = '<?php echo isset($_GET['type'])?$_GET['type']:'' ?>';
    if(type=='photos'){
        $('.content-profile').hide();
        $('.content-video').hide();
        $('.line-green-video').hide();
        $('.line-green-photo-pravite').hide();
        $('.content-photo-private').hide();
        $('.content-photo').show();
        $('.line-green-photo').css('display','block');
    }else if(type=='private'){
        $('.content-profile').hide();
        $('.content-photo').hide();
        $('.content-video').hide();
        $('.line-green-photo').hide();
        $('.line-green-photo-pravite').hide();
        $('.line-green-video').hide();
        $('.content-photo-private').show();
        $('.line-green-photo-pravite').css('display','block');
    }else if(type == 'video'){
        $('.content-profile').hide();
        $('.content-photo').hide();
        $('.line-green-photo').hide();
        $('.content-photo-private').hide();
        $('.line-green-photo-pravite').hide();
        $('.content-video').show();
        $('.line-green-video').css('display','block');
    }
</script>
