<div class="banner-ad-top">
    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ads-top.png" />
</div>
<div class="content-main">
    <?php //$this->widget('widgets.admin.notifications'); ?>
    <div class="search-header">
        <form action="" method="post">
            <div class="main-search">
                <div class="search-block first-block">
                    <div class="text-explore">
                        <input type="text" id="search" name="Search[username]"/>                        
                    </div>
                    <button id="any-btn" class="btn-all">any</button>
                    <button id="casual-btn" class="btn-all btn-all-01">casual</button>
                    <button id="serious-btn" class="btn-all">somethings serious</button>
                    <button id="friend-btn" class="btn-all btn-all-01">friendship</button>
                    <div class="btn-training">
                        <span class="premium">
                            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/search-premium.png" alt="" />
                        </span>
                        <button id="training" class="btn-all">training</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="search-block-special">
                    <div class="search-block-02">
                        <label>gender</label>
                        <input type="number" placeholder="Gender Preference" id="gender" name="Search[gender]"/>
                    </div>
                    <div class="search-block-03">
                        <label>Ages</label>
                        <div class="list-age"> 
                            <input type="text" value="74" id="start" name="Search[ages_start]"/>
                            <span>To</span>
                            <input type="text" value="74" id="end" name="Search[ages_end]"/>
                        </div>
                    </div>
                    <div class="search-block-02">
                        <label>Within</label>
                        <div class="list-age"> 
                            <input type="text" value="74" id="start" name="Search[within]"/>
                            <span>Miles of</span>
                            <input type="text" value="5000" id="end" style="width: 89px;" name="Search[miles]"/>
                        </div>
                    </div>
                    <div class="search-block-03" style="margin-right: 0px; float: right;">
                        <label>Height (cm)</label>
                        <div class="list-age"> 
                            <input type="text" value="163" id="start" name="Search[height_start]"/>
                            <span>To</span>
                            <input type="text" value="210" id="end" name="Search[height_start]"/>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="search-block-special">
                    <div class="search-block-02">
                        <label>Education</label>
                        <input type="number" placeholder="Pre-filled" id="gender" name="Search[education]" />
                    </div>
                    <div class="search-block-02">
                        <label>Race</label>
                        <input type="number" placeholder="Pre-filled" id="race" name="Search[race]" />
                    </div>
                    <div class="search-block-02">
                        <label>Faith</label>
                        <input type="number" placeholder="Pre-filled" id="race" name="Search[faith]" /> 
                    </div>
                    <div class="search-block-02" style="margin-right: 0px; float: right;">
                        <label>Kids</label>
                        <input type="number" placeholder="Pre-filled" id="race" name="Search[kids]" />
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="search-block-special">
                    <div class="search-block-02">
                        <label>Exercise Level</label>
                        <input type="number" placeholder="Pre-filled" id="gender" name="Search[exercise_level]"/>
                    </div>
                    <div class="search-block-02">
                        <label>Drinking Level</label>
                        <input type="number" placeholder="Pre-filled" id="gender" name="Search[drinking_level]" />
                    </div>
                    <div class="search-block-02">
                        <label>Smoking Level</label>
                        <input type="number" placeholder="Pre-filled" id="gender" name="Search[smoking_level]" />
                    </div>
                    <div class="search-block-02">
                        <div style="margin-top: 20px;">
                            <label>
                                <input type="checkbox"> Only show users that are online
                            </label>
                        </div>
                    </div>
                    <div class="search-block-02">
                        <div style="margin-left: 20px; margin-top: 20px;">
                            <label>
                                <input type="checkbox"> Only show users that are verified
                            </label>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="search-block last-block">
                    <ul>
                        <li>
                            <a href="/user/advanceSearch">ADVANCE SEARCH</a>
                            <span></span>   
                        </li>
                        <li>
                            <a href="#">SAVED SEARCHES</a>
                            <span class="white"></span>
                        </li>
                        <li>
                            <a href="#">RESET FILTERS</a>
                        </li>
                        <li>
                            <button id="save" class="btn-save-search">Save this search</button>
                        </li>
                        <li>
                            <button id="save" class="btn-search-page">Search</button>
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
    <div style="margin-top: 45px;">
     <!-- Content Left  -->
    <div class="left-content-01">
        <div class="search-result">
            <ul class="list-result">
            <li class="premium-member-new">
                <div class="avatar-intro">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/search-avatar.png" alt=""/>
                    <p>
                        <strong>Hi I'm Trish.'Nam veteran. Nice to meet you !</strong>
                        <strong>I'm looking for a weird looking boyfriend.</strong>
                        <a data-toggle="modal" data-target="#ReportUser" class="report">Report User</a>
                    </p>
                </div>
                <div class="chat-message">
                    <div class="name-01">
                        <h3>Trisha <span class="text-search-01">27 F, PH</span> <span class="check-red"></span></h3>
                        <span class="online">online</span>
                    </div>
                    <div class="message-01">
                        <a data-toggle="modal" data-target="#SendaMessage">message</a>
                    </div>

                    <div class="chat-01-premium">
                        <a data-toggle="modal" data-target="#WantToChat">Chat</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>

            <li class="premium-member-new">
                <div class="avatar-intro">
                    <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/search-avatar.png" alt=""/>
                    <p>
                        <strong>Hi I'm Trish.'Nam veteran. Nice to meet you !</strong>
                        <strong>I'm looking for a weird looking boyfriend.</strong>
                        <a data-toggle="modal" data-target="#ReportUser" class="report">Report User</a>
                    </p>
                </div>
                <div class="chat-message">
                    <div class="name-01">
                        <h3>Trisha <span class="text-search-01">27 F, PH</span> <span class="check-red"></span></h3>
                        <span class="online">online</span>
                    </div>
                    <div class="message-01">
                        <a data-toggle="modal" data-target="#SendaMessage">message</a>
                    </div>

                    <div class="chat-01-premium">
                        <a data-toggle="modal" data-target="#WantToChat">Chat</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
                <li>
                    <div class="avatar-intro">
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/search-avatar.png" alt=""/>
                        <p>
                            <strong>Hi I'm Trish.'Nam veteran. Nice to meet you !</strong>
                            <strong>I'm looking for a weird looking boyfriend.</strong>
                            <a data-toggle="modal" data-target="#ReportUser" class="report">Report User</a>
                        </p>
                    </div>
                    <div class="chat-message">
                        <div class="name-01">
                            <h3>Trisha <span class="text-search-01">27 F, PH</span> <span class="check-red"></span></h3>
                            <span class="online">online</span>
                        </div>
                        <div class="message-01">
                            <a data-toggle="modal" data-target="#SendaMessage">message</a>
                        </div>
                        
                        <div class="chat-01">
                            <a data-toggle="modal" data-target="#WantToChat">Chat</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
                
                <li>
                    <div class="avatar-intro">
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/search-avatar.png" alt=""/>
                        <p>
                            <strong>Hi I'm Trish.'Nam veteran. Nice to meet you !</strong>
                            <strong>I' looking for a weird looking boyfriend. </strong>
                            <a data-toggle="modal" data-target="#ReportUser"class="report">Report User</a>
                        </p>
                    </div>
                    <div class="chat-message">
                        <div class="name-01">
                            <h3>Trisha <span class="text-search-01">27 F, PH</span> <span class="check-red"></span></h3>
                            <span class="online">online</span>
                        </div>
                        <div class="message-01">
                            <a data-toggle="modal" data-target="#SendaMessage">message</a>
                        </div>
                        
                        <div class="chat-01">
                            <a data-toggle="modal" data-target="#WantToChat">Chat</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
                
                <li>
                    <div class="avatar-intro">
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/search-avatar.png" alt=""/>
                        <p>
                            <strong>Hi I'm Trish.'Nam veteran. Nice to meet you !</strong>
                            <strong>I' looking for a weird looking boyfriend. </strong>
                            <a data-toggle="modal" data-target="#ReportUser" class="report">Report User</a>
                        </p>
                    </div>
                    <div class="chat-message">
                        <div class="name-01">
                            <h3>Trisha <span class="text-search-01">27 F, PH</span> <span class="check-red"></span></h3>
                            <span class="online">online</span>
                        </div>
                        <div class="message-01">
                            <a data-toggle="modal" data-target="#SendaMessage">message</a>
                        </div>
                        
                        <div class="chat-01">
                            <a data-toggle="modal" data-target="#WantToChat">Chat</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
                
                <li>
                    <div class="avatar-intro">
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/search-avatar.png" alt=""/>
                        <p>
                            <strong>Hi I'm Trish.'Nam veteran. Nice to meet you !</strong>
                            <strong>I' looking for a weird looking boyfriend. </strong>
                            <a data-toggle="modal" data-target="#ReportUser" class="report">Report User</a>
                        </p>
                    </div>
                    <div class="chat-message">
                        <div class="name-01">
                            <h3>Trisha <span class="text-search-01">27 F, PH</span> <span class="check-red"></span></h3>
                            <span class="online">online</span>
                        </div>
                        <div class="message-01">
                            <a data-toggle="modal" data-target="#SendaMessage">message</a>
                        </div>
                        
                        <div class="chat-01">
                            <a data-toggle="modal" data-target="#WantToChat">Chat</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
                
                <li>
                    <div class="avatar-intro">
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/search-avatar.png" alt=""/>
                        <p>
                            <strong>Hi I'm Trish.'Nam veteran. Nice to meet you !</strong>
                            <strong>I' looking for a weird looking boyfriend. </strong>
                            <a data-toggle="modal" data-target="#ReportUser" class="report">Report User</a>
                        </p>
                    </div>
                    <div class="chat-message">
                        <div class="name-01">
                            <h3>Trisha <span class="text-search-01">27 F, PH</span> <span class="check-red"></span></h3>
                            <span class="online">online</span>
                        </div>
                        <div class="message-01">
                            <a data-toggle="modal" data-target="#SendaMessage">message</a>
                        </div>
                        
                        <div class="chat-01">
                            <a data-toggle="modal" data-target="#WantToChat">Chat</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
                
                
                <li>
                    <div class="avatar-intro">
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/search-avatar.png" alt=""/>
                        <p>
                            <strong>Hi I'm Trish.'Nam veteran. Nice to meet you !</strong>
                            <strong>I' looking for a weird looking boyfriend. </strong>
                            <a data-toggle="modal" data-target="#ReportUser" class="report">Report User</a>
                        </p>
                    </div>
                    <div class="chat-message">
                        <div class="name-01">
                            <h3>Trisha <span class="text-search-01">27 F, PH</span> <span class="check-red"></span></h3>
                            <span class="offline">last seen 54m ago</span>
                        </div>
                        <div class="message-01">
                            <a data-toggle="modal" data-target="#SendaMessage">message</a>
                        </div>
                        
                        <div class="chat-01">
                            <a data-toggle="modal" data-target="#WantToChat">Chat</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
                
                <li>
                    <div class="avatar-intro">
                        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/search-avatar.png" alt=""/>
                        <p>
                            <strong>Hi I'm Trish.'Nam veteran. Nice to meet you !</strong>
                            <strong>I' looking for a weird looking boyfriend. </strong>
                            <a data-toggle="modal" data-target="#ReportUser" class="report">Report User</a>
                        </p>
                    </div>
                    <div class="chat-message">
                        <div class="name-01">
                            <h3>Trisha <span class="text-search-01">27 F, PH</span> <span class="check-red"></span></h3>
                            <span class="offline">last seen 54m ago</span>
                        </div>
                        <div class="message-01">
                            <a data-toggle="modal" data-target="#SendaMessage">message</a>
                        </div>
                        
                        <div class="chat-01">
                            <a data-toggle="modal" data-target="#WantToChat">Chat</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
                
            </ul>
        </div>
        
        <div class="pagination-post" style="margin-top: 100px;">
            <ul>
                <li><a href="#" class="prev-post"><</a></li>
                <li><a href="#" class="normal-pag">1</a></li>
                <li><a href="#" class="special-pag">2</a></li>
                <li><a href="#" class="normal-pag">3</a></li>
                <li><a href="#" class="normal-pag">4</a></li>
                <li><a href="#">....</a></li>
                <li><a href="#" class="normal-pag">9</a></li>
                <li><a href="#" class="normal-pag">10</a></li>
                <li><a href="#" class="next-post">></a></li>
            </ul>
        </div>
        
    </div>
    <!--End Content Left  -->
    
    <!-- Content Right -->
    <div class="right-content-01">
        <div class="adv-01">
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/adv_1.png" />
        </div>
        <div class="adv-01">
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ad2.png" />
        </div>
        <div class="adv-01">
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ad3.png" />
        </div>
        <div class="adv-01">
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ad5.png" />
        </div>
        <div class="adv-01">
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/ad4.png" />
        </div>
    </div>
     <!-- End Content Right -->
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
<!-- Modal Report-->
<div class="modal fade" id="ReportUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content special-border">
      <div class="modal-header header-report">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title report-title">Is there something wrong with this profile? </h4>
        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatar-post-small.png">
        <span class="user-kaka user-ricky">Ricky Martin</span>
      </div>
      <div class="">
        <select class="form-control" style="border-radius: 0;">
            <option>Test</option>
            <option>Test</option>
            <option>Test</option>
            <option>Test</option>
        </select>
      </div>
      <div class="modal-footer footer-report">
        <div class="agreed">
            <input type="checkbox" name="" class="pull-left"/> <span>Would you also like to block this user from making contact with you?</span>
        </div>
        <a type="button" class="btn btn-primary my-report">Report</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal Message-->
<div class="modal fade" id="SendaMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<script>
    $('.post-btn').click(function(){
        content = $('.post-textarea').val();
        if( content != '')
            $('#form-achievement').submit();
    });
</script>

<!-- Modal Report-->
<div class="modal fade" id="ReportUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content special-border">
      <div class="modal-header header-report">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title report-title">Is there something wrong with this profile? </h4>
        <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/avatar-post-small.png">
        <span class="user-kaka user-ricky">Ricky Martin</span>
      </div>
      <div class="">
        <select class="form-control" style="border-radius: 0;">
            <option>Test</option>
            <option>Test</option>
            <option>Test</option>
            <option>Test</option>
        </select>
      </div>
      <div class="modal-footer footer-report">
        <div class="agreed">
            <input type="checkbox" name="" class="pull-left"/> <span>Would you also like to block this user from making contact with you?</span>
        </div>
        <a type="button" class="btn btn-primary my-report">Report</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal Message-->
<div class="modal fade" id="SendaMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<!-- Modal WantToChat -->
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
