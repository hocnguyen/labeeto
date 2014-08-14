<section class="slider">
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active"> <img data-src="<?php echo Yii::app()->themeManager->baseUrl; ?>/labeeto/bg.png" alt="Second slide" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/labeeto/bg.png">
            <div class="container">
                <div class="carousel-caption ">
                    <h1>Stay fit. Meet peple. Get a life</h1>
                    <!--<a class="btn btn-default btn-lg" data-toggle="modal" data-target="#register" href="#" role="button">Get Started Now</a>-->
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a> </div>
</section>

<!-- Popup Login -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog fix-dialog-login">
        <div class="modal-content fix-content-padding">

            <div class="modal-body">
                <div class="wrapper-login">
                    <div class="row fix-row">
                        <input type="text" name="username" value="Username" class="text-login form-control" />
                    </div>
                    <div class="row fix-row">
                        <input type="text" name="password" value="Password" class="text-login form-control" />
                    </div>
                    <div class="row fix-row">
                        <a href="#" class="signin signin-btn ">Sign in</a>
                        <a href="#" class="last-btn signin signin-btn-fb">Sign in with Facebook</a>
                        <div class="forgot-pass">
                            <label>Forgot your password ?</label>
                            <a href="#"> Click here</a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<!-- Popup Register -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog fix-dialog-login">
        <div class="modal-content fix-content-padding">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title text-center" style="text-transform: none" id="myModalLabel">Getting Started with <span class="labeeto">Labeeto</span> </h4>
            </div>
            <div class="modal-body">
                <form name="" method="post" action="">

                </form>
            </div>

        </div>
    </div>
</div>
