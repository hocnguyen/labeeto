<?php

class UserController extends SiteBaseController
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function filters()
	{
		return array(
			'accessControl', 
			'postOnly + delete', 
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('register','login','myaccount','logout'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array(),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array(),
				'users'=>array('admin'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}
	/*
	public function actionRegister()
	{
		$model = new RegisterForm;
		if(isset($_POST['RegisterForm'])){
			$model->attributes = $_POST['RegisterForm'];
			
			if($model->validate()){
				$user = new User;
				$user->attributes = $_POST['RegisterForm'];
				if($user->save())
					$this->redirect('/user/myaccount');
			}
		
		}
		return $this->render('register', compact('model'));
	}

	public function actionLogin(){

		if(Yii::app()->user->isGuest){
			$this->pageTitle .= ' :: Login';
			
			$model = new LoginForm;
			if( isset($_POST['LoginForm']) )
			{
				$model->attributes = $_POST['LoginForm'];
				if( $model->validate() )
				{
					// Login
					$identity = new InternalIdentity($model->username, $model->password);
					if($identity->authenticate())
					{
						Yii::app()->user->login($identity);
					}  
					$this->redirect(Yii::app()->homeUrl);
				}
				
			}
			$this->render('login',compact('model'));
			return;
		}else{
			$this->redirect(Yii::app()->homeUrl);
		}
	}

	public function actionMyaccount(){
		if(!Yii::app()->user->isGuest){
			$this->layout = 'myaccount';
			$this->pageTitle .= ' :: My Account';

			$user = User::model()->findByPk(Yii::app()->user->id);
			$this->render('myaccount',compact('user'));
		}else{
			$this->redirect(Yii::app()->homeUrl);
		}
	}

	public function actionUpdateAjaxIntro(){

		$user = User::model()->findByPk(Yii::app()->user->id);
		$user->attributes = $_POST['User'];

		if($user->save()){
			echo $user->intro_myself;
			return true;
		}
	}
	public function actionUpdateAjax(){
		$user = User::model()->findByPk(Yii::app()->user->id);
		
		if(isset($_POST['User']['birthday']))
			$_POST['User']['birthday'] = date('Y-m-d',strtotime($_POST['User']['birthday']));

		if(isset($_POST['User']['district_name'])){
			$tmpa1 = explode('-', $_POST['User']['district_name']);
			$tmpa2 = District::model()->findByAttributes(array('name'=>$tmpa1[0]));
			if(isset($tmpa2))
				$_POST['User']['district_id'] = $tmpa2->id;
		}
		if(isset($_POST['User']['past_district_name'])){
			$tmpb1 = explode('-', $_POST['User']['past_district_name']);
			$tmpb2 = District::model()->findByAttributes(array('name'=>$tmpb1[0]));
			if(isset($tmpb2))
				$_POST['User']['past_district'] = $tmpb2->id;
		}

		$user->attributes = $_POST['User'];
		if($user->save()){
			return true;
		}
	}
	public function actionUploadAvatar(){
		if(!Yii::app()->user->isGuest){
			if($model = User::model()->findByPk(Yii::app()->user->id)){
				$oldFile = $model->avatar;

				$uploadFile = CUploadedFile::getInstance($model,'avatar');
				$filename = Yii::app()->utils->uniqueFile($uploadFile->name);
				$model->avatar = $filename;

				if($model->save(false)){
					if(isset($uploadFile)){
						if($uploadFile->saveAs(Yii::getPathOfAlias("webroot").Yii::app()->params['ava_dir'].$model->avatar))                
							Utils::deleteFile(Yii::getPathOfAlias("webroot").Yii::app()->params['ava_dir'],$oldFile);
					}
					$this->redirect($this->createUrl('user/myaccount'));
				}
			}
		}
	}
	public function actionlogout()
	{
		// Guests are not allowed
		if( Yii::app()->user->isGuest ){
			$this->redirect(Yii::app()->homeUrl);
		}
	
		Yii::app()->user->logout();        
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionUserMenu(){
		$model = User::model()->findByPk(Yii::app()->user->id);
		$this->renderPartial('/elements/accPopup',compact('model'));
	} */
}