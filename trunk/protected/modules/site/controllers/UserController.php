<?php

class UserController extends SiteBaseController {
    public $text;
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
            if( $model->validate() )
            {
                // Login
                $identity = new InternalIdentity($model->email, $model->password);
                if($identity->authenticate())
                {
                    Yii::app()->user->setFlash('success', Yii::t('global', 'Thanks. You are now logged in.'));
                    Yii::app()->user->login($identity, (Yii::app()->params['loggedInDays'] * 60 * 60 * 24 ));
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
        $model =  new User();
        if(isset($_POST['User'])){
            $email=$_POST['User']['email'];
            $member = User::model()->findByAttributes(array('email' => $email));
            if($member){
                $password = $member->generatePassword(5, 10);
                $hashedPassword = $member->hashPassword( $password);
                $message = Yii::t('global', "Dear {username},<br /><br />
    									We have reseted your password successfully.<br /><br />
    									You new password is: <b>{password}</b><br />",
                    array( '{username}' => $member->firstname." ".$member->lastname, '{password}' => $password ));

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
}