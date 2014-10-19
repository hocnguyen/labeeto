<?php $user = User::model()->findByPk($data->user_id); 
if($user){?>
<div class="post">
    <div class="first-infor">
        <div class="profile">
            <img src="../uploads/avatar/<?php echo Utils::getAvatar($user->photo); ?>">
            <div class="crycle-img">
                <h2><a href="/user/detail/<?php echo $user->id; ?>"><?php echo $user->username; ?></a><span class="time-location">18 F, CA,</span> <span class="dot-icon"> <?php echo $data->created; ?></span></h2>
                <a class="message" data-id="<?php echo $user->id; ?>" data-toggle="modal" data-target="#SendaMessage">Send a Message</a>
                <a class="report-user" data-id="<?php echo $user->id . '_' . $data->id;; ?>" data-toggle="modal" data-target="#ReportUser">Report User</a>
                <input type="hidden" id="avatar_hidien_<?php echo $user->id; ?>" value="<?php echo $user->photo; ?>" />
                <input type="hidden" id="name_hidien_<?php echo $user->id; ?>" value="<?php echo $user->username; ?>" />
            </div>
        </div>
        <div class="vote">
            <ul>
                <li class="upvote" data-id=<?php echo $data->id; ?>></li>
                <li><span class="change_vote_<?php echo $data->id; ?>"><?php echo $data->vote ?></span></li>
                <li class="downvote" data-id=<?php echo $data->id; ?>></li>
            </ul>
        </div>
    </div>
    <div class="content-post">
      <h3 class="my_posted"> 
      <?php 
      $arr = $data->content;
      $search = array(); $replace = array();
      for($i = 0; $i < strlen($arr) - 1; $i++){
            if($arr[$i] == '#'){
                $str = '';
                for($j = $i; $j< (strlen($arr) ); $j++){
                    if($arr[$j] != ' '){
                        $str.= $arr[$j];
                    }else{
                        break;
                    }
                }
                $search[] = $str;
                $replace[] = '<span class="link_2">'. $str .'</span>';
            }
      }
      echo str_replace($search, $replace, $data->content); ?> </h3>
    
    </div>
</div>
<?php } ?>