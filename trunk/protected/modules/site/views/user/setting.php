<!--<div class="banner-ad-top">
    <img src="<?php //echo Yii::app()->themeManager->baseUrl; ?>/images/ads-top.png" />
</div>-->
<div class="content-main-setting">
    <div class="profile-setting">
        <h3 class="profile-setting-title"><span>features users</span></h3>
        <div class="profile-setting-details">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <ul>
                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>
                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>
                             <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>

                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>
                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>
                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>
                        <ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>
                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>
                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>

                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>
                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>
                            <li>
                                <div class="profile-image"><img src="/themes/default/images/f_avatar.png" alt="profile-img1" width="50" height="50"/></div>
                                <div class="profile-name"><span>@BrenWintonBren</span></div>
                                <div class="profile-address">38,Tules,<span> mi</span></div>
                            </li>

                            
                        <ul>
                    </div>


                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
    <div class="menu-setting">settings</div>
    <div class="menu-nav-setting">
            <ul style="float: right;">
                <li class="li-GeneralSettings"><a href="#" class="link-GeneralSettings" style="backgound:#f0eeee, width:230px"><?php echo Yii::t('global', 'GENERAL') ?></a>
                <li class="li-SearchReferences"><a href="#" class="link-SearchReferences"><?php echo Yii::t('global', 'SEARCH PREFERENCES') ?></a>
                <li class="li-Notifications"><a href="#" class="link-Notifications"><?php echo Yii::t('global', 'NOTIFICATIONS') ?></a></li>
                <li class="li-Blocklist"><a href="#" class="link-Blocklist"><?php echo Yii::t('global', 'BLOCKLIST') ?></a></li>
            </ul>
        </div>
    <div class="settings-header">
        <div style="height: auto;">
        <!-- General Settings -->
        <div id="GeneralSettings" style="display: block;">
            <!-- <div class="setting-header">General Settings</div> -->
            <div class="setting-detail">
                <form role="form" class="form-setting">
                    <div class="form-group">
                    <?php $arr = explode(".", $this->user->birthday); ?>
                    <label for="exampleInputEmail1" class="label-text">Birthday</label>
                        <select class="form-control select-day" id="days" placeholder="Day">
                            <?php for($i = 01; $i < 32; $i++ ){
                                $select = "";
                                if($arr[0] == $i) $select = "selected";
                                if($i < 10) $i = '0'.$i;
                                echo "<option ". $select ."> " . $i . "</option>";
                            } ?>
                        </select>
                        <input type="hidden" id="ss_days" value="<?php echo $arr[0]; ?>" />
                        <select class="form-control select-month" id="months" placeholder="Month">
                            <?php for($i = 1; $i < 13; $i++ ){
                                $select = "";
                                error_reporting(0);
                                if($arr[1] == $i) $select = "selected";
                                if($i < 10) $i = '0'.$i;
                                echo "<option ". $select ."> " . $i . "</option>";
                            } ?>
                        </select>
                         <input type="hidden" id="ss_months" value="<?php echo $arr[1]; ?>" />
                        <select class="form-control select-month" id="years" placeholder="Year">
                            <?php for($i = 1970; $i < date("Y")+1; $i++ ){
                                $select = "";
                                if($arr[2] == $i) $select = "selected";
                                echo "<option ". $select ."> " . $i . "</option>";
                            } ?>
                        </select>
                         <input type="hidden" id="ss_years" value="<?php echo $arr[2]; ?>" />
                    </div>
                      <div class="form-group">
                        <label for="InputEmail" class="label-text" style="padding-top: 15px;">Email address</label>
                        <input type="text" class="form-control input-text color-focus" value="<?php echo $this->user->email ?>" id="InputEmail">
                        <input type="hidden" id="ss_email" value="<?php echo $this->user->email ?>" />
                        <span class="check-block"  id="ok_InputEmail" style="display: none;"></span>
                        <p style="color: red; font-size: 12px; margin-top: 15px; margin-left: 20px; display: none;" id="error_InputEmail">Email not correct</p>
                      </div>
                      <div class="form-group">
                        <label for="InputOld_Password" class="label-text">OldPassword</label>
                        <input type="password" class="form-control input-text color-focus" id="InputPassword_1">
                        <span class="check-block" id="ok_InputPassword_1" style="display: none;"></span>
                        <p style="color: red; font-size: 12px; margin-top: 15px; margin-left: 20px; display: none;" id="error_InputPassword_1">Password not same login password</p>
                      </div>
                      <div class="form-group">
                        <label for="InputPassword_1" class="label-text">Password</label>
                        <input type="password" class="form-control input-text" id="InputPassword_1">
                        <span class="check-block" id="ok_InputPassword_1" style="display: none;"></span>
                        <p style="color: red; font-size: 12px; margin-top: 15px; margin-left: 20px; display: none;" id="error_InputPassword_1">Password not same login password</p>
                      </div>
                      <div class="form-group">
                        <label for="InputPassword_2" class="label-text"> New Password</label>
                        <input type="password" class="form-control input-text" id="InputPassword_2">
                        <span class="check-block" id="ok_InputPassword_2" style="display: none;"></span>
                        <p style="color: red; font-size: 12px; margin-top: 15px; margin-left: 20px; display: none;" id="error_InputPassword_2">Password must be 8 characters long and contain 1 number and 1 letter</p>
                      </div>
                      <div class="form-group">
                        <label for="InputPassword_3" class="label-text">Confirm New Passworld </label>
                        <input type="password" class="form-control input-text" id="InputPassword_3">
                        <span class="check-block" id="ok_InputPassword_3" style="display: none;"></span>
                        <p style="color: red; font-size: 12px; margin-top: 15px; margin-left: 20px; display: none;" id="error_InputPassword_3">Confirm password is not same password</p>
                      </div>
                      <div class="form-group">
                        <label for="Zipcode" class="label-text">Zip code </label>
                        <input type="text" value="<?php echo $this->user->zipcode ?>" class="form-control" id="Zipcode"  style="width: 180px; height: 43px; display: inline-block; float: left; margin-bottom: 10px; margin-right: 20px;" placeholder="Day">
                        <input type="hidden" id="ss_zipcode" value="<?php echo $this->user->zipcode ?>" />
                        <span class="check-block" id="ok_Zipcode" style="display: none;"></span>
                        <p style="color: red; font-size: 12px; margin-top: 15px; margin-left: 20px; display: none;" id="error_Zipcode">Zip Code must is number</p>
                      
                      </div>
                      <div class="form-group">
                        <label for="CitySuburb" class="label-text height-city">Time Zone</label>
                        <input type="text" id="address_setting" value="<?php echo $this->user->address ?>" class="form-control pre-fill-text" id="CitySuburb" placeholder="GMT+8">
                        <input type="hidden" id="ss_address" value="<?php echo $this->user->address ?>" />
                        <div id="maps-test-setting"></div>
                      </div>
                      <div class="contennt-btn-form">
                            <button type="submit" class="btn btn-default btn-save-st" id="save_general_settings">Save</button>
                            <button class="btn btn-default btn-cancel-st">Cancel</button>
                      </div>
                </form>
            </div>
        </div>
        <!--End General Settings--!>
        
        <!-- Blocklist -->
        <div id="Blocklist" style="display: none;">
        <?php /*if($report){
                $arr = array();
                $arr = explode(",",$report->blocked_user);
                $arr = array_slice($arr, 0, -1);
        }*/ ?>
            <!-- <div class="setting-header">Blocklist</div> -->
            <div class="setting-detail">
                <div class="content-blocklist">
                    <span class="block">Block Users</span>
                    <form class="form-inline" role="form" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <?php 
                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                	    'name'=>'q',
                                        'value'=>isset($username)?$username:'',
                                	    'source'=>'js: function(request, response) {
                                                $.ajax({
                                                    url: "'.$this->createUrl('/user/ajaxUser').'",
                                                    dataType: "json",
                                                    data: {
                                                        term: request.term,
                                                        brand: $("#type").val()
                                                    },
                                                    success: function (data) {
                                                        response(data);
                                                    }
                                                })
                                            }',
                                            'options' => array(
                                                'minLength'=>'1',
                                            ),
                                            'htmlOptions' => array(
                                                'class'=>'form-control add-name',
                                                'placeholder'=>'Add Name or Email',           
                                            ),
                            	    ));
                                ?>
                            </div>
                        <button type="button" class="btn btn-default btn-block-list">Block</button>
                        <!--<div id="autocomple"></div>-->
                    </form>
                    <!--<form class="form-inline" role="form">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control add-name" id="exampleInputEmail2" placeholder="Add Name or Email">
                          </div>
                           <button type="submit" class="btn btn-default btn-block-list">Block</button>
                    </form>-->
                    
                    <div class="locklist">
                        <ul>
                        <?php
                              $this->widget('zii.widgets.CListView', array(
                                  'dataProvider'=>$report,
                                  'itemView'=>'../elements/blocked_user',
                                  'summaryText'=>'',
                              ));
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Blocklist--!>
        
        <!-- Notifications -->
        <div id="Notifications" style="display: none;">
            <!-- <div class="setting-header">Notifications</div> -->
            <div class="setting-detail">
                <div class="content-notification">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="width-checkbox"> Email me new messages that go to my inbox
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="width-checkbox"> Email me news and special offers from Labeeto
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="width-checkbox"> Email me news and special offers from Labeeto
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="width-checkbox"> Email me when users like my achievements
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="checkbox" >
                                <label>
                                    <input type="checkbox" class="width-checkbox"  > Email me when users like my achievements
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="width-checkbox"> Email me about other users in my area I may be interested in
                                </label>
                            </div>
                        </div>
                      </div>
                      <div class="contennt-btn-form" style="padding-top: 225px;padding-left:17px">
                        <button type="submit" class="btn btn-default btn-save-st">Save</button>
                        <button type="submit" class="btn btn-default btn-cancel-st">Cancel</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End Notifications--!>
    
        <!-- SearchReferences -->
        <div id="SearchReferences" style="display: none;">
            <!-- <div class="setting-header">Search References</div> -->
            <div class="setting-detail">
                <div class="content-references row">
                    <form action="#">
                        <div>
                            <label class="col-md-12 label-gender">I am a ....</label>
                            <select class="serach-prefer-select">
                                <option value="-1" class="genders" selected="selected">Select Gender</option>
                                <option value="-1"  class="genders">Female</option>
                                <option value="-1" class="genders">Made</option>
                            </select>
                        </div>
                        
                        
                        <div style="margin-top: 30px;">
                            <label class="col-md-12 label-gender">I am looking for ...</label>
                            <div class="search-prefer">
                                <label class="radio-inline special-label">
                                  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" class="radio-inl"> Friendship
                                </label>
                            </div>

                            <div class="search-prefer">
                                <label class="radio-inline special-label">
                                  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" class="radio-inl"> Something Serious
                                </label>
                            </div>
                            <div class="search-prefer">
                                <label class="radio-inline special-label">
                                  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" class="radio-inl"> Casual
                                </label>
                            </div>
                            <div class="search-prefer">
                                <label class="radio-inline special-label">
                                  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option4" class="radio-inl"> Long Term
                                </label>
                            </div>
                        </div>
                        
                        <div style="margin-top: 30px;">
                            <label class="col-md-12 label-gender">I am interested for a training partner</label>
                            <div class="search-prefer">
                                <label class="radio-inline yes-no">
                                  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin: 0;height: 20px; width: 30px; padding-left: 10px;"> Yes
                                </label>
                            </div>

                            <div class="search-prefer">
                                <label class="radio-inline yes-no" >
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" style="margin: 0;height: 20px; width: 30px; padding-left: 10px;"> No
                                </label>
                            </div>
                        </div>
                        
                        <div class="contennt-btn-form">
                            <button type="submit" class="btn btn-default btn-save-st">Save</button>
                            <button type="submit" class="btn btn-default btn-cancel-st">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End Search References--!>
    </div>
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
   <script type="text/javascript">
            function initialize() {
                $.session.clear();
                var options = {
                    types: ['(cities)']
                };
                var map = new google.maps.Map(document.getElementById('maps-test-setting'));
                var input = /** @type {HTMLInputElement} */(
                    document.getElementById('address_setting'));
                var autocomplete = new google.maps.places.Autocomplete(input,options);
                autocomplete.bindTo('bounds',map);
                google.maps.event.addListener(autocomplete, 'place_changed', function() {
                    var place = autocomplete.getPlace();
                    if (!place.geometry) {
                        return;
                    }
                    // If the place has a geometry, then present it on a map.
                    $.session.set('address',place.formatted_address);
                    $.session.set('latitude',place.geometry.location.k);
                    $.session.set('longitude',place.geometry.location.B);
    
                });
    
            }
            google.maps.event.addDomListener(window, 'load', initialize);

    </script>

