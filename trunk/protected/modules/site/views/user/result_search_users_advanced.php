 <div class="search-result">
<ul class="list-result">
<li class="<?php echo ( $data->membership == User::MEMBER_PREMIUM )?'premium-member-new':'' ?>" >
    <div class="avatar-intro">
        <?php if(($data->photo =='')||($data->photo =='undefined')){ ?>
            <img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/no-avatar.png">
        <?php } else { ?>
            <img src="/uploads/avatar/<?php echo $data->photo ?>" />
        <?php } ?>
        <p>
            <strong>Hi I'm Trish.'Nam veteran. Nice to meet you !</strong>
            <strong>I'm looking for a weird looking boyfriend.</strong>
            <a data-toggle="modal" data-target="#ReportUser" class="report report-user" data-id=" <?php echo $data->id; ?> ">Report User</a>
        </p>
    </div>
    <div class="chat-message">
        <div class="name-01">
            <h3><a href="/user/detail/<?php echo $data->id; ?>"> <?php echo $data->username; ?> </a> <span class="text-search-01"><?php echo  date('Y')- date('Y', strtotime($data->birthday)); ?> F, PH</span> <span class="check-red"></span></h3>
            <span class="<?php echo ($data->is_online)?'online':'offline'; ?>"><?php echo ($data->is_online)?'online':'offline'; ?></span>
        </div>
        <div class="message-01">
            <a data-toggle="modal" data-target="#SendaMessage" class="message" data-id="<?php echo $data->id; ?>">message</a>
            <input type="hidden" id="avatar_hidien_<?php echo $data->id; ?>" value="<?php echo $data->photo; ?>" />
            <input type="hidden" id="name_hidien_<?php echo $data->id; ?>" value="<?php echo $data->username; ?>" />
        </div>

        <div class="chat-01<?php echo ( $data->membership == User::MEMBER_PREMIUM )?'-premium':'' ?>">
            <a data-toggle="modal" data-target="#WantToChat" data-id=" <?php echo $data->id; ?> ">Chat</a>
        </div>
        <div class="clear"></div>
    </div>
</li>


</ul>
</div>