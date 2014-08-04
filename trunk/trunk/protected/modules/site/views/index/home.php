
<div class="row grey-info-block text-center">
    <div class="container" >
        <div class="row nothing">
            <section class="col-md-8 main-content">
                <div class="row fix-row">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs fix-nav-tabs" role="tablist">
                        <li class="active"><a href="#popular" role="tab" data-toggle="tab">Popular</a></li>
                        <li><a href="#newest" role="tab" data-toggle="tab">Newest</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content fix-tabs-content">
                        <div class="tab-pane active" id="popular">
                            <img class="img-home-profile" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/slider.jpg">
                        </div>
                        <div class="tab-pane" id="newest">
                            <img class="img-home-profile" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/slider1.jpg">

                        </div>

                    </div>
                </div>
                <div class="row fix-row">
                    <div class="wrapper-post">
                        <h4 class="title-post">Post Achievment</h4>
                        <ul class="nav nav-tabs fix-nav-tabs" role="tablist">
                            <li class="active"><a href="#status" role="tab" data-toggle="tab">Update Status</a></li>
                            <li><a href="#photo_video" role="tab" data-toggle="tab">Add Photo / Video</a></li>
                        </ul>
                        <div class="tab-content fix-tabs-content">
                            <div class="tab-pane active" id="status">
                                <textarea rows="4" class="form-control textarea-post" placeholder="What's on your mind?"></textarea>
                                <div class="wrapper-post-btn">
                                    <div class="right-post">
                                        <button class="dc_ibutton-red">Post</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="photo_video">
                               <div class="custom-photo-video fix-video-post">
                                   <a href="#">Upload Video</a>
                               </div>
                                <div class=" custom-photo-video fix-upload-photo">
                                    <a href="#">Upload Photo</a>
                                </div>
                            </div>

                        </div>
                        <div class="content-post">
                            <div class="col-md-12">
                                <article class="the-status"> <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/img1.jpg" alt="pic1" class="pull-left img-responsive">
                                    <div class="text">
                                        <div class="like-btn">
                                            <div class="number-likes">100</div>
                                        </div>
                                        <p class="fix-content-status">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </article>
                                <article class="the-status"> <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/img2.jpg" alt="pic2" class="pull-left img-responsive">
                                    <div class="text">
                                        <div class="like-btn">
                                            <div class="number-likes">100</div>
                                        </div>
                                        <p class="fix-content-status">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna</p>

                                    </div>
                                    <div class="clearfix"></div>
                                </article>
                                <article class="the-status"> <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/img3.jpg" alt="pic3" class="pull-left img-responsive">
                                    <div class="text">
                                        <div class="like-btn">
                                            <div class="number-likes">100</div>
                                        </div>
                                        <p class="fix-content-status">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </article>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <aside class="col-md-4">
                <div class=" wrapper-ads">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ads1.jpg"/>
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ads2.jpg"/>
                </div>
            </aside>
        </div>

    </div>
</div>
