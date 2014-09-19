<?php

class UserController extends SiteBaseController {
    public $text;
    public $user;
    public function init()
	{
		parent::init();
		
		$this->breadcrumbs[ Yii::t('global', 'Users') ] = array('user/index');
		$this->pageTitle[] = Yii::t('global', 'Users');
	}
    
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */

    public function actionLoginUser()
    {
        $model=new LoginForm;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
           // var_dump($_POST['LoginForm']); exit;
            if( $model->validate() )
            {
                // Login
                $identity = new InternalIdentity($model->email, $model->password);
                if($identity->authenticate())
                {
                    Yii::app()->user->setFlash('success', Yii::t('global', 'Thanks. You are now logged in.'));
                    Yii::app()->user->login($identity, (Yii::app()->params['loggedInDays'] * 60 * 60 * 24 ));
                    if((isset($_POST['LoginForm']['rememberme']) && ($_POST['LoginForm']['rememberme'] == 1))){
                       $duration = $model->rememberme ? 3600*24*0.5 : 0; //12 hours
                       Yii::app()->user->login($identity, $duration);
                    }
                    if((isset($_POST['LoginForm']['keepmelogged']) && ($_POST['LoginForm']['keepmelogged'] == 1))){
                       $duration = $model->keepmelogged ? 3600*24*0.5 : 3600; //1 hours
                       Yii::app()->user->login($identity, $duration);
                    }
                    
                    $this->redirect('/my_feed');
                }
                else{
                    Yii::app()->user->setFlash('error', $identity->errorMessage);
                }
            }
        }
        $pop_up = true;
        $this->render('../index/index', compact('pop_up'));
    }

    public function actionLogout()
    {
        // Guests are not allowed
        if( Yii::app()->user->isGuest )
        {
            $this->redirect(Yii::app()->homeUrl);
        }
        Yii::app()->user->logout(true);
        Yii::app()->user->setFlash('success', Yii::t('global', 'You are now logged out.'));
        $this->redirect(Yii::app()->homeUrl);
    }

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionChangePassword(){

        $model =  new User();
        if(isset($_POST['User'])){
            $oldPassword = $model->hashPassword( $_POST['User']['oldpassword']);
            $infoUser = $model->findByPk(Yii::app()->user->id);
            if($oldPassword == $infoUser->password){
                $newPass = $model->hashPassword($_POST['User']['newpassword']);
                $model->updateByPk(Yii::app()->user->id,array('password'=>$newPass));
                Yii::app()->user->setFlash('success', Yii::t('login', 'Change password successful'));
            } else {
                Yii::app()->user->setFlash('error', Yii::t('login', 'Old Password incorrect, Please check again!'));
            }
        }
        $this->render('change_password',array(
            'model'=>$model,
        ));
    }

    public function actionLostPassword (){
        $model =  new LostPasswordForm;
        if(isset($_POST['LostPasswordForm'])){
            $email=$_POST['LostPasswordForm']['email'];
            $member = User::model()->findByAttributes(array('email' => $email));
            if($member){
                $password = $member->generatePassword(5, 10);
                $hashedPassword = $member->hashPassword( $password);
                $message = Yii::t('global', "Dear {username},<br /><br />
    									We have reseted your password successfully.<br /><br />
    									You new password is: <b>{password}</b><br />",
                    array( '{username}' => $member->username, '{password}' => $password ));

                $message .= Yii::t('global', '<br /><br />----------------<br />Regards,<br />The {team} Team.<br />', array('{team}'=>Yii::app()->name));
                Utils::sendMail(Yii::app()->params['emailout'], $member->email, Yii::t('global', 'Password Reset Completed'), $message);

                User::model()->updateByPk($member->id, array('password'=>$hashedPassword));

                Yii::app()->user->setFlash('success', Yii::t('global', 'Thank You. Your password was reset. Please check your email for you new generated password.'));

            } else {
                Yii::app()->user->setFlash('error', Yii::t('login', 'Not found this email. Please check again!'));
            }
        }
        $this->render('forgot_password',array(
            'model'=>$model,
        ));
    }

    public function actionMy_feed(){
        $this->layout = 'feed';
        if(!Yii::app()->user->isGuest){
            $this->user = User::model()->findByPk(Yii::app()->user->id);
            $this->render('my_feed');
        } else {
            $this->redirect('/');
        }

    }

    public function actionLogin(){
        Yii::app()->Facebook->facebook();
        echo '<script type="text/javascript"> window.close();</script>';
    }

    public function actionLogoutFacebook(){

        if(isset($_SESSION['User']) && !empty($_SESSION['User'])){
            session_destroy();
        }
        $this->redirect('/');
    }
    public function actionRegister(){
        $model = new User();
        $model->username = $_GET['username'];
        $model->email = $_GET['email'];
        $model->password = md5(sha1($_GET['password']));
        $model->birthday = $_GET['birthday'];
        $model->height = $_GET['height'];
        $model->gender = $_GET['gender'];
        $model->ehtnicity = $_GET['ehtnicity'];
        $model->address = $_GET['address'];
        $model->career = $_GET['career'];
        $model->education = $_GET['education'];
        $model->religion = $_GET['religion'];
        $model->excercise = $_GET['excercise'];
        $model->passion = $_GET['passion'];
        $model->goal = $_GET['goal'];
        $model->smoke = $_GET['smoke'];
        $model->drink = $_GET['drink'];
        $model->relations = $_GET['relations'];
        $model->latitude = $_GET['latitude'];
        $model->longtitude = $_GET['longtitude'];
        $model->photo = $_GET['photo'];
        if($model->save()){
            $identity = new InternalIdentity($_GET['username'],$_GET['password']);
            if($identity->authenticate())
            {
                Yii::app()->user->login($identity, (Yii::app()->params['loggedInDays'] * 60 * 60 * 24 ));

            }
        }
    }

    public function actionCheckEmail(){
        $this->layout = '';
        $record = User::model()->findByAttributes(array(),array(
            'condition'=>'email=:email ',
            'params'=>array('email'=>$_GET['email']),

        ));
        if($record===null){
            $arrayToJs = true;
            echo json_encode($arrayToJs);
        }else {
            $arrayToJs = false;          // found user with that name
            echo json_encode($arrayToJs);
        }

    }
    public function actionCheckUser(){
        $this->layout = '';
        $record = User::model()->findByAttributes(array(),array(
            'condition'=>'username=:username ',
            'params'=>array('username'=>$_GET['username']),

        ));
        if($record===null){
            $arrayToJs = true;
            echo json_encode($arrayToJs);
        }else {
            $arrayToJs = false;          // found user with that name
            echo json_encode($arrayToJs);
        }

    }

    public function actionProfile(){
        $this->layout = 'feed';
        if(!Yii::app()->user->isGuest){
            $this->user = User::model()->findByPk(Yii::app()->user->id);
            $this->render('profile');
        } else {
            $this->redirect('/');
        }

    }
    
    public function actionProfile_other(){
        $this->layout = 'feed';
        if(!Yii::app()->user->isGuest){
            $this->render('profile_other');
        } else {
            $this->redirect('/');
        }

    }

    public function actionAdmin(){
        if(Yii::app()->user->role == 'admin') $this->redirect('/admin');
        $model = new LoginForm;

        if( isset($_POST['LoginForm']) )
        {
            $model->attributes = $_POST['LoginForm'];
            if( $model->validate() )
            {
                // Login
                $identity = new InternalIdentity($model->email, $model->password);
                if($identity->authenticate())
                {
                    // Member authenticated, Login
                    Yii::app()->user->setFlash('success', Yii::t('login', 'Thanks. You are now logged in.'));
                    Yii::app()->user->login($identity, (Yii::app()->params['loggedInDays'] * 60 * 60 * 24 ));
                }
                else{
                    Yii::app()->user->setFlash('error', $identity->errorMessage);
                }

                // Redirect
                if(Yii::app()->user->role == 'admin') $this->redirect('/admin');
                else $this->redirect(Yii::app()->homeUrl);
            }
        }

        $this->pageTitle[] = Yii::t('global', 'Login');
        $this->renderPartial('admin', array('model'=>$model));
    }

    public function actionUploadAvatar(){
        if (isset($_FILES['avatar'])){
            $folder = Yii::app()->basePath.'/../uploads/avatar/';

            $filename = $this->generateRandomString().$_FILES['avatar']['name'];
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $folder.$filename)){
                echo $filename;
            }
        }
    }
    function generateRandomString($length = 10) {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }
    
    public function actionSetting(){
        $this->layout = 'feed';
        if(!Yii::app()->user->isGuest){
            $this->render('setting');
        } else {
            $this->redirect('/');
        }

    }
    
    public function actionSaveEducation(){
        if (isset($_POST['education'])){
            User::model()->updateByPk(Yii::app()->user->id, array('education'=>$_POST['education']));
            echo Education::model()->getNameEducation($_POST['education']);
        }
    }
    
    public function actionSaveReligion(){
        if (isset($_POST['religion'])){
            User::model()->updateByPk(Yii::app()->user->id, array('religion'=>$_POST['religion']));
            echo Religion::model()->getNameReligion($_POST['religion']);
        }
    }
    
    public function actionSaveEthnicity(){
        if (isset($_POST['ehtnicity'])){
            User::model()->updateByPk(Yii::app()->user->id, array('ehtnicity'=>$_POST['ehtnicity']));
            echo Ethnicity::model()->getNameEthnicity($_POST['ehtnicity']);
        }
    }
    
    public function actionSavePassion(){
        if (isset($_POST['passion'])){
            User::model()->updateByPk(Yii::app()->user->id, array('passion'=>$_POST['passion']));
            echo $_POST['passion'];
        }
    }
    
    public function actionSaveGoal(){
        if (isset($_POST['goal'])){
            User::model()->updateByPk(Yii::app()->user->id, array('goal'=>$_POST['goal']));
            echo $_POST['goal'];
        }
    }
    
    public function actionSaveChildren(){
        if (isset($_POST['children'])){
            User::model()->updateByPk(Yii::app()->user->id, array('children'=>$_POST['children']));
            echo $_POST['children'] . ' all boy';
        }
    }
    
    public function actionSaveHeight(){
        if ((isset($_POST['feet'])) && (isset($_POST['inches']))){
            $height = $_POST['feet'] . '.' . $_POST['inches'];
            User::model()->updateByPk(Yii::app()->user->id, array('height'=>$height));
            echo $height . ' FEET';
        }
    }
    
    public function actionSaveAbout(){
        if (isset($_POST['about'])){
            User::model()->updateByPk(Yii::app()->user->id, array('about'=>$_POST['about']));
            echo $_POST['about'] ;
        }
    }
    
    public function actionSaveExcercise(){
        if (isset($_POST['excercise'])){
            User::model()->updateByPk(Yii::app()->user->id, array('excercise'=>$_POST['excercise']));
            $t = '';
            $t.= '<span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="'. $_POST['excercise'] .'" aria-valuetext="'. $_POST['excercise'] .'">';
            $t.= '<span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: '. $_POST['excercise'] .'%;"></span>';
            $t.= '<span class="ws-range-rail ws-range-track" style="left: 11px; right: 9px;">';
            $t.= '<span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: '. $_POST['excercise'] .'%;">';
            $t.= '</span></span></span>';
            echo $t;
        }
    }
    
    public function actionSaveDrink(){
        if (isset($_POST['drink'])){
            User::model()->updateByPk(Yii::app()->user->id, array('drink'=>$_POST['drink']));
            $t = '';
            $t.= '<span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="'. $_POST['drink'] .'" aria-valuetext="'. $_POST['drink'] .'">';
            $t.= '<span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: '. $_POST['drink'] .'%;"></span>';
            $t.= '<span class="ws-range-rail ws-range-track" style="left: 11px; right: 9px;">';
            $t.= '<span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: '. $_POST['drink'] .'%;">';
            $t.= '</span></span></span>';
            echo $t;
            
        }
    }
    
    public function actionSaveSmoke(){
        if (isset($_POST['smoke'])){
            User::model()->updateByPk(Yii::app()->user->id, array('smoke'=>$_POST['smoke']));
            $t = '';
            $t.= '<span class="ws-range" role="slider" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="'. $_POST['smoke'] .'" aria-valuetext="'. $_POST['smoke'] .'">';
            $t.= '<span class="ws-range-min ws-range-progress" style="margin-top: 0px; width: '. $_POST['smoke'] .'%;"></span>';
            $t.= '<span class="ws-range-rail ws-range-track" style="left: 11px; right: 9px;">';
            $t.= '<span class="ws-range-thumb" style="margin-left: -11px; margin-top: -6px; left: '. $_POST['smoke'] .'%;">';
            $t.= '</span></span></span>';
            echo $t;
        }
    }
    
    public function actionSaveDiet(){
        if (isset($_POST['diet'])){
            User::model()->updateByPk(Yii::app()->user->id, array('diet'=>$_POST['diet']));
            echo $_POST['diet'];
        }
    }
    
    
    public function actionSaveGym(){
        if (isset($_POST['gym'])){
            User::model()->updateByPk(Yii::app()->user->id, array('gym'=>$_POST['gym']));
            echo $_POST['gym'];
        }
    }
    
    public function actionSaveGender(){
        $user = User::model()->findByPk(Yii::app()->user->id);
        $t = '';
        if(isset($_POST['gender'])){
            User::model()->updateByPk(Yii::app()->user->id, array('gender'=>$_POST['gender']));
            if($_POST['gender'] == 1) 
                $gender = 'Female'; 
            else 
                $gender = 'Male';
            $t.= '<p>
                    <span class="txt-gender">'. Yii::t('global', 'Gender: ') .'</span>
                    <span class="txt-female">'. $gender .'</span>
                </p>';
        }
        
        
        if(isset($_POST['relationship'])){
            User::model()->updateByPk(Yii::app()->user->id, array('relations'=>$_POST['relationship']));
            $t.= '<p>
                    <span class="txt-gender">'.Yii::t('global', 'Relationship: ').'</span>
                    <span class="txt-female">'. $_POST['relationship']. '</span>
                 </p>';
        }
        
        $t.= '<p>
                <span class="txt-gender">'.Yii::t('global', 'Age: ').' </span>
                <span class="txt-female">22-28</span>
             </p>';
        if(isset($_POST['training'])){
            User::model()->updateByPk(Yii::app()->user->id, array('training'=>$_POST['training']));
            if($_POST['training'] == 1) 
                $l = 'Yes';
            else
                $l = 'No';
            $t.= '<p>
                    <span class="txt-gender">'.Yii::t('global', 'Training:').'</span>
                    <span class="txt-female">'. $l .'</span>
                 </p>';
        }
        echo $t;
    }
       
}
