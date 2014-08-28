<h1 class="heading"> Meet people. Find love. Get fit.</h1>
<h2 class="tag-line"> We'll get you connected to people who share your healthy lifestyle and passionate goals</h2>
<?php /*$form=$this->beginWidget('CActiveForm', array(
    'id'=>'signup-form',

    'enableAjaxValidation'=>false,
));*/ ?>
<div id="signup-form" >
<div class="form-wrapper">
    <div class="error"></div>
    <input type="text" name="SignUp[username]" id="username" class="username-input validate[required]" placeholder="Username"/>
    <input type="text" name="SignUp[email]" id="email" class="email-input validate[required,custom[email]]" placeholder="Email"/>
    <input type="password"  name="SignUp[password]" id="password" class="password-input validate[required]" placeholder="Password"/>
    <a href="#registration" class="registrations">
        <input type="submit" value="Sign Up" class="signup-home"/>
    </a>

</div>
</div>
<?php //$this->endWidget(); ?>

<p class="description">
    By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Use Policy</a>,including our
    <a href="#">Cookie Use</a>.
</p>
<a href="#" id="signin-fb">
    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/signin_fb.png" id='facebook' alt="Sign in with Facebook"/>
</a>
<div id="registration" class="registration-fancybox">
<div class="step-1 ">
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
                <div class="firstname column-form">
                    <label>First Name</label>
                    <input type="text" name="firstname" id="firstname" class="text-input"/>
                </div>
                <div class="lastname column-form">
                    <label>Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="text-input"/>
                </div>
                <div class="birthday column-form">
                    <label>Birthday</label>
                    <div class="select-option">
                        <select class="day text-select" id="day" name="day">
                            <option>Day</option>
                            <?php for($i=1;$i<=31;$i++) {
                                echo "<option value='".$i."'>".$i."</option>";
                            }?>
                        </select>
                        <select class="month text-select" id="month" name="month">
                            <option>Month</option>
                            <?php for($i=1;$i<=12;$i++) {
                                echo "<option value='".$i."'>".$i."</option>";
                            }?>
                        </select>
                        <select class="year text-select" id="year" name="year">
                            <option>Year</option>
                            <?php for($i=1960;$i<=1996;$i++) {
                                echo "<option value='".$i."'>".$i."</option>";
                            }?>
                        </select>
                    </div>
                </div>
                <div class="height column-form">
                    <label>Height</label>
                    <div class="select-option">
                        <select class="day text-select"id="feet" name="feet">
                            <option>Feet</option>
                            <?php for($i=1;$i<=10;$i++) {
                                echo "<option value='".$i."'>".$i."</option>";
                            }?>
                        </select>
                        <select class="month text-select" id="inches" name="inches">
                            <option>Inches</option>
                            <?php for($i=1;$i<=10;$i++) {
                                echo "<option value='".$i."'>".$i."</option>";
                            }?>
                        </select>

                    </div>
                </div>
                <div class="gender ">
                    <label>Gender</label>
                    <div class="group-radio">
                        <label for="male" class="text-radio"><input  type="radio" name="gender" value="0" checked id="male"/>Male</label>
                        <label for="female" class="text-radio"><input  type="radio" name="gender" value="1" id="female"/>Female</label>
                    </div>
                </div>
                <div class="ethnicity column-form">
                    <label>Ethnicity</label>
                    <select name="ehtnicity" id="ehtnicity" class="text-ehtnicity">
                        <option>Pre-Fill</option>
                        <option>Pre-Fill</option>
                    </select>
                </div>
                <div class="address column-form">
                    <label>Address</label>
                    <input type="text" placeholder="Current city or Hometown" id="address" name="address" class="text-input"/>
                </div>
                <div class="button-next">
                    <input type="submit" value="Next" class="btn-next btn-next-style">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step-2">
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
                <div class="career column-form-full">
                    <label>Career</label>
                    <input type="text" name="career" id="career" class="text-input"/>
                </div>

                <div class="education column-form">
                    <label>Education</label>
                    <select name="education" id="education" class="text-input">
                        <option>Pre-Fill</option>
                        <option>Pre-Fill</option>
                    </select>
                </div>
                <div class="religion column-form">
                    <label>Religion</label>
                    <select name="religion" id="religion" class="text-input">
                        <option>Pre-Fill</option>
                        <option>Pre-Fill</option>
                    </select>
                </div>
                <div class="excercise form-three-column">
                    <label>Exercise</label>
                    <select name="excercise" id="excercise" class="text-input">
                        <option>Pre-Fill</option>
                        <option>Pre-Fill</option>
                    </select>
                </div>
                <div class="fitness-passion form-three-column">
                    <label>Fitness Passion</label>
                    <select name="passion" id="passion" class="text-input">
                        <option>Pre-Fill</option>
                        <option>Pre-Fill</option>
                    </select>
                </div>
                <div class="firness-goal form-three-column">
                    <label>Fitness Goal</label>
                    <select name="goal" id="goal" class="text-input">
                        <option>Pre-Fill</option>
                        <option>Pre-Fill</option>
                    </select>
                </div>
                <div class="smoke column-form">
                    <label>Do you smoke?</label>
                    <select name="smoke" id="smoke" class="text-input">
                        <option>Pre-Fill</option>
                        <option>Pre-Fill</option>
                    </select>
                </div>
                <div class="drink column-form">
                    <label>Do you drink?</label>
                    <select name="drink" id="drink" class="text-input">
                        <option>Pre-Fill</option>
                        <option>Pre-Fill</option>
                    </select>
                </div>


                <div class="button-next">
                    <a href="#step3" class="post-a-day">
                        <input type="submit" value="Next" class="btn-next-step2 btn-next-style">
                    </a>
                </div>
            </div>
        </div>
    </div>
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
                <input type="submit" value="" class="btn-post btn-post-style"/>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        <?php  if(isset($_SESSION['User'])) { ?>
        window.location.assign("/my_feed");
        <?php }?>
    });
</script>
