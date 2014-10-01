<?php $code =$this->generateRandomString(5); ?>
<div class="wrapper-verify">
    <div class="head-verify">
        <h2>Verify Profile</h2>
    </div>
    <div class="stepVerify">
        <div class="headstep1">
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/verify.png" />
            <p class="text-headst1">Your profile will show an icon confirming that your profile is verified.</p>
        </div>
        <div class="verifyCode">
            <div class="stepOne"> 1</div>
            <div class="writeCode">
                <h1>Write the verification code</h1>
                <div class="text-step1">
                    Handwrite the verification code <b style="font-weight: bold"><?php echo $code; ?></b> on a piece of paper
                </div>
                <div class="paper-code"><?php echo $code; ?>
                <img class="pen-code" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/pen.png" />
                </div>
            </div>
        </div>
    </div>
    <div class="stepVerify">
        <div class="stepOne"> 1</div>
        <div class="writeCode">
            <h1>Write the verification code</h1>
            <div class="text-step1">
                Handwrite the verification code <b style="font-weight: bold"><?php echo $code; ?></b> on a piece of paper
            </div>
            <div class="paper-code"><?php echo $code; ?>
                <img class="pen-code" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/pen.png" />
            </div>
        </div>
    </div>
    <div class="stepVerify">

    </div>
</div>