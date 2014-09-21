<div class="post">
    <div class="first-infor">
        <div class="profile">
            <img src="../uploads/avatar/<?php echo Utils::getAvatar($infor->photo); ?>">
            <div class="crycle-img">
                <h2><a href="/profile_other"><?php echo $infor->username; ?></a><span class="time-location">18 F, CA,</span> <span class="dot-icon"> <?php echo $data->created; ?></span></h2>
                <a class="message" data-toggle="modal" data-target="#SendaMessage">Send a Message</a>
                <a class="report-user" data-toggle="modal" data-target="#ReportUser">Report User</a>
            </div>
        </div>
        <span class="refesh">10</span>
    </div>
    <div class="content-post">
      <h3> <?php echo $data->content; ?> </h3>

    </div>
</div>