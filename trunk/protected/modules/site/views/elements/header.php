<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <h1 class="navbar-brand">
                <a href="">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/logo.png" />
                </a>
                <span>Combining dating and fitness in a crazy new way</span>
            </h1>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <?php if(!Yii::app()->user->isGuest) { ?>
            <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-justified">
                    <li class="active"><a href="">HOME</a></li>

                    <li><a href="">SEARCH</a></li>
                    <li><a href="">POST A DAY</a></li>
                    <li><a href="">PLAY</a></li>
                    <li><a href="">contact us</a></li>
                </ul>
            </div>
        <?php } ?>
        <!-- /.navbar-collapse -->
    </nav>
</div>