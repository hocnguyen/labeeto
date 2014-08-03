<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <div class="right-top-conner">
                <button class="register_button dc_ibutton-red" data-toggle="modal" data-target="#myModal">Login</button>
                <button class="register_button dc_ibutton-red">Register </button>
            </div>
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
                    <li><a href=""></a></li>
                </ul>
            </div>
        <?php } ?>
        <!-- /.navbar-collapse -->
    </nav>
</div>

<!-- Popup login -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Login to Your Account </h4>
            </div>
            <div class="modal-body">
               <div class="wrapper-login">
                   <div class="row fix-row">
                       <label>Email or Username</label>
                       <input type="text" name="username" class="form-control" />
                   </div>
                   <div class="row fix-row">
                       <label>Password</label>
                       <input type="text" name="password" class="form-control" />
                       <label class="label-join" ><input type="checkbox" > Remember me </label> <br/>
                       <a href="#" class="forget-pass">Forget password  </a>
                   </div>
               </div>
            </div>
            <div class="modal-footer">
                <button class="register_button dc_ibutton-red">Register now</button> Or
                <a href="#" class="">
                    <img class="" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/signin_fb.png">
                </a>

            </div>
        </div>
    </div>
</div>