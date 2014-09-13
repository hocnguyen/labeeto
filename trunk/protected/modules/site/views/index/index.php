
<h1 class="heading"> Meet people. Find love. Get fit.</h1>
<h2 class="tag-line"> We'll get you connected to people who share your healthy lifestyle and passionate goals</h2>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'signup-form',

    'enableAjaxValidation'=>true,
)); ?>
<div id="signup-form" >
<div class="form-wrapper" id="sign-up">
    <!--<div class="error"></div>-->
    <input type="text" name="SignUp[username]" id="username" class="username-input validate[required,custom[space],funcCall[checkUsernameExists]] "  placeholder="Username"/>
    <input type="text" name="SignUp[email]" id="email" class="email-input validate[required,custom[email,funcCall[checkEmailExists]]" placeholder="Email"/>
    <input type="password"  name="SignUp[password]" id="password" class="password-input validate[required]" placeholder="Password"/>
    <a href="#registration" class="registrations">
        <input type="submit" value="Sign Up" class="signup-home"/>
    </a>
    <div class="email-exists"><input type="hidden" value="0" id="email-exists"/></div>
    <div class="username-exists"><input type="hidden" value="0" id="username-exists"/></div>
</div>
</div>
<?php $this->endWidget(); ?>

<p class="description">
    By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Use Policy</a>,including our
    <a href="#">Cookie Use</a>.
</p>

<a href="#" id="signin-fb">
    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/signin_fb.png" id='facebook' alt="Sign in with Facebook"/>
</a>
<div id="registration" class="registration-fancybox">
<div class="step-1 ">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'signup-form-step2',

        'enableAjaxValidation'=>false,
    )); ?>
    <div class="registration-head">
        <div class="wrapper-step">
            <div class="step1">
                <span class="step-one-one">1</span>
            </div>
            <div class="step-normal">
                <span class="step-one-two">2</span>
                <span class="step-one-three">3</span>
            </div>
        </div>
    </div>
    <div class="bellow-head">
        <div class="basic-info-part">
            <div class="logo-signup">
                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/footer_logo.png">
                <div class="signup-registration">SIGN UP</div>
            </div>
            <div class="text-basic-info">BASIC PROFILE INFORMATION</div>
        </div>
        <div class="right-part">
            <div class="have-account">
                Have an account? <a  href="#facebook-fancybox" class="fancybox fix-color-login">Log in</a>
            </div>
            <div class="line-bottom"></div>
        </div>
    </div>
    <div class="content-registration">
        <div class="left-content">
            <div class="avatar">
                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/no-avatar.png"/>
            </div>
            <div class="profile-picture">Set Profile Picture</div>
            <div class="option-upload">
                <a href="#" class="upload-from-file">Upload from file</a>
                <a href="#" class="upload-via-facebook">Upload via facebook</a>
            </div>
        </div>
        <div class="center-content">
            <div class="wrapper-form">
                <div class="username column-form">
                    <label>Username</label>
                    <input type="text" id="username-step2" name="username-step2" class="text-input validate[required],funcCall[checkUsernameExists]"/>
                </div>
                <div class="relationship column-form">
                    <label>Relation Status</label>
                    <select name="relations" id="relations" class="text-input validate[required]">
                        <option>Single</option>
                        <option>Married</option>
                    </select>
                </div>
                <div class="birthday column-form">
                    <label>Birthday</label>
                    <div class="select-option">
                        <select class="day text-select validate[required]" id="day" name="day">
                            <option value="">Day</option>
                            <?php for($i=1;$i<=31;$i++) {
                                echo "<option value='".$i."'>".$i."</option>";
                            } ?>
                        </select>
                        <select class="month text-select validate[required]" id="month" name="month">
                            <option value="">Month</option>
                            <?php for($i=1;$i<=12;$i++) {
                                echo "<option value='".$i."'>".$i."</option>";
                            }?>
                        </select>
                        <select class="year text-select validate[required]" id="year" name="year">
                            <option value="">Year</option>
                            <?php for($i=1960;$i<=1996;$i++) {
                                echo "<option value='".$i."'>".$i."</option>";
                            }?>
                        </select>
                    </div>
                </div>
                <div class="height column-form">
                    <label>Height</label>
                    <div class="select-option">
                        <select class="day text-select validate[required]" id="feet" name="feet">
                            <option value="">Feet</option>
                            <?php for($i=1;$i<=10;$i++) {
                                echo "<option value='".$i."'>".$i."</option>";
                            }?>
                        </select>
                        <select class="month text-select validate[required]" id="inches" name="inches">
                            <option value="">Inches</option>
                            <?php for($i=1;$i<=10;$i++) {
                                echo "<option value='".$i."'>".$i."</option>";
                            }?>
                        </select>

                    </div>
                </div>
                <div class="gender ">
                    <label>Gender</label>
                    <div class="group-radio">
                        <span class="text-radio"><input  type="radio" name="gender" value="0" checked id="male"/>Male</span>
                        <span for="female" class="text-radio"><input  type="radio" name="gender" value="1" id="female"/>Female</span>
                    </div>
                </div>
                <div class="ethnicity column-form">
                    <label>Ethnicity</label>
                    <select name="ehtnicity" id="ehtnicity" class="text-ehtnicity validate[required]">
                        <option value="">Select your ethnicity</option>
                        <option value="1">Asian</option>
                        <option value="2">Black</option>
                        <option value="3">Indian</option>
                        <option value="4">Hispanic/Latin</option>
                        <option value="5">Middle Eastern</option>
                        <option value="6">Native American</option>
                        <option value="7">Pacific Islander</option>
                        <option value="8">White</option>
                        <option value="9">Other</option>
                    </select>
                </div>

                <div class="address column-form">
                    <label>Address</label>
                    <input id="address" class="controls text-input validate[required]" type="text"  placeholder="Enter a location">
                    <div id="maps-test"></div>
                </div>

                <div class="button-next">
                    <input type="submit" value="Next" class="btn-next btn-next-style">
                </div>
            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<div class="step-2">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'signup-form-step3',
        'enableAjaxValidation'=>false,
    )); ?>
    <div class="registration-head">
        <div class="wrapper-step">
            <div class="step2">
                <span class="step-one-one">1</span>
                <span class="step-two-two">2</span>
            </div>
            <div class="step2-normal">
                <span class="step-one-three">3</span>
            </div>
        </div>
    </div>
    <div class="bellow-head">
        <div class="basic-info-part">
            <div class="logo-signup">
                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/footer_logo.png">
                <div class="signup-registration">SIGN UP</div>
            </div>
            <div class="text-basic-info">TELL US MORE ABOUT YOUSELF</div>
        </div>
        <div class="right-part">
            <div class="have-account">
                Have an account? <a  href="#facebook-fancybox" class="fancybox fix-color-login">Log in</a>
            </div>
            <div class="line-bottom"></div>
        </div>
    </div>
    <div class="content-registration">
        <div class="left-content">
            <div class="step-2-basic-info">
                Basic Profile Summary
            </div>
            <div class="avatar-step2">
                <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatart-step2.png"/>
            </div>
            <p class="detail-temp-info"> </p>
            <div class="btn-edit-wrapper">
                <input type="button" class="btn-edit" value="Edit">
            </div>

        </div>
        <div class="center-content">
            <div class="wrapper-form">
                <div class="career column-form">
                    <label>Career</label>
                    <input type="text" name="career" id="career" class="text-input validate[required]"/>
                </div>
                <div class="excercise column-form">
                    <label>Exercise</label><br/>
                    <!--<input name="excercise" id="excercise" class="text-input">-->
                    <div class="fix-range">
                        <label style="margin-right: 20px;">Never</label>
                        <input  type=range min=0 max=100  class="input-range " value=50 id="excrise" step=20 list=volsettings>

                        <datalist id=volsettings>
                            <option>0</option>
                            <option>20</option>
                            <option>40</option>
                            <option>60</option>
                            <option>80</option>
                            <option>100</option>
                        </datalist>
                        <label style="float: right;margin-right: 40px;">Often</label>
                    </div>
                </div>
                <div class="education column-form">
                    <label>Education</label>
                    <select name="education" id="education" class="text-input" style="height: 34px;">
                        <option value="">Select your education</option>
                        <option value="1">High School</option>
                        <option value="10">Some College</option>
                        <option value="2">2 Year College</option>
                        <option value="3">College</option>
                        <option value="4">Masters</option>
                        <option value="5">MFA</option>
                        <option selected="selected" value="6">Law School</option>
                        <option value="7">Medical School</option>
                        <option value="8">Business School</option>
                        <option value="9">PhD</option>
                    </select>
                </div>
                <div class="religion column-form">
                    <label>Religion</label>
                    <input type="text" name="religion" id="religion" class="text-input validate[required]" />
                </div>

                <div class="fitness-passion column-form">
                    <label>Fitness Passion</label>
                    <input name="passion" id="passion" class="text-input validate[required]"/>

                </div>
                <div class="firness-goal column-form">
                    <label>Fitness Goal</label>
                    <input name="goal" id="goal" class="text-input validate[required]" />
                </div>
                <div class="smoke column-form">
                    <label>Do you smoke?</label>
                    <div class="fix-range">
                        <label style="margin-right: 20px;">Never</label>
                        <input type=range min=0 max=100 value=50 id="smoke" step=20 list=volsettings>

                        <datalist id=volsettings>
                            <option>0</option>
                            <option>20</option>
                            <option>40</option>
                            <option>60</option>
                            <option>80</option>
                            <option>100</option>
                        </datalist>
                        <label style="float: right;margin-right: 40px;">Often</label>
                    </div>
                </div>
                <div class="drink column-form">
                    <label>Do you drink?</label>
                    <div class="fix-range">
                        <label style="margin-right: 20px;">Never</label>
                        <input type=range min=0 max=100 value=50 id="drink" step=20 list=volsettings>
                        <datalist id=volsettings>
                            <option>0</option>
                            <option>20</option>
                            <option>40</option>
                            <option>60</option>
                            <option>80</option>
                            <option>100</option>
                        </datalist>
                        <label style="float: right;margin-right: 40px;">Often</label>
                    </div>
                </div>


                <div class="button-next">
                    <a href="#step3" class="post-a-day">
                        <input type="submit" value="Next" class="btn-next-step2 btn-next-style">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
</div>
<div id="step3" class="registration-fancybox">
    <div class="step-3">
        <div class="registration-head">
            <div class="wrapper-step">
                <div class="step3">
                    <span class="step-one-one">1</span>
                    <span class="step-three-two">2</span>
                    <span class="step-three-three">3</span>
                </div>
            </div>
        </div>
        <div class="bellow-head">
            <div class="basic-info-part">
                <div class="logo-signup">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/footer_logo.png">
                    <div class="signup-registration">SIGN UP</div>
                </div>
                <div class="text-basic-info">YOU'RE ALMOST THERE</div>
            </div>

        </div>
        <div class="content-post-a-day">
            <div class="head-content-step3">
                <div class="logo-step3">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/logo-step3.png">
                </div>
                <div class="description-step3">
                    <span class="it-easy">It's Easy.</span>
                    Just write something that you achieved today or  recently that you are  proud of.
                    <span class="italic-text">Nothing is a small achievement.</span>
                </div>

            </div>
            <div class="post-content-step3">
                <textarea class="textarea-step3"> What did you achieved today?</textarea>
            </div>
            <div class="footer-step3">
                <div class="icon-step3">
                    <a class="icon-images" href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/icon-upload.png"/>Add Media</a>
                    <a class="icon-location" href="#"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/icon-location.png"/>Add Location</a>
                </div>
                <input type="button" class="btn-skip" value="SKIP"/>
                <input type="submit"  value="" class="btn-post btn-post-style"/>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('input[data-type="range"]');
        <?php  if(isset($_SESSION['User'])) { ?>
            window.location.assign("/my_feed");
        <?php }?>
        <?php if(isset($pop_up)){ ?>
        $.fancybox("#facebook-fancybox");
        $('.message-login-error').append('<?php echo Yii::t("global","The username or password you entered is incorrect."); ?>');
        <?php  } ?>
        $('#login-btn').click(function(){
            $('.message-login-error').hide();
        });

    });
    function checkEmailExists(field, rules, i, options){
        var url = "/user/checkEmail";
        var data = field.attr("id") + "=" + field.val();
        var msg = undefined;
        $.ajax({
            type: "GET",
            url: url,
            cache: false,
            dataType: "json",
            data: data,
            async: false,
            success: function(json) {
                if(json===false) {
                    msg = "This email is available ";
                }
            }
        });
        if(msg != undefined) {
            $('#email-exists').val('1');
            return msg;
        } else {
            $('#email-exists').val('0');
        }
    }

    function checkUsernameExists(field, rules, i, options){
        var url = "/user/checkUser";
        var data = "username=" + field.val();
        var msg = undefined;
        $.ajax({
            type: "GET",
            url: url,
            cache: false,
            dataType: "json",
            data: data,
            async: false,
            success: function(json) {
                if(json===false) {
                    msg = "This username is available ";
                }
            }
        });
        if(msg != undefined) {
            $('#username-exists').val('1');
            return msg;
        } else {
            $('#username-exists').val('0');
        }
    }
</script>
