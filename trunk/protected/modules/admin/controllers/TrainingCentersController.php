<?php

class TrainingCentersController extends AdminBaseController {
    public function init()
	{
		parent::init();
		
		$this->breadcrumbs[ Yii::t('global', 'Training Centers') ] = array('trainingCenters/index');
		$this->pageTitle[] = Yii::t('global', 'Training Centers');
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
	public function actionCreate()
	{
		$model=new TrainingCenters;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TrainingCenters']))
		{
			$model->attributes=$_POST['TrainingCenters'];
            $uploadedFile=CUploadedFile::getInstance($model,'image');
            if(!empty($uploadedFile)) {
                $rnd = rand(0,9999);
                $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
                $model->image = $fileName;
            }
            else{
                $fileName = '';
            }

            $uploadedFileLogo=CUploadedFile::getInstance($model,'logo');
            if(!empty($uploadedFileLogo)) {
                $rnd = rand(0,9999);
                $fileNameLogo = "{$rnd}-{$uploadedFileLogo}";  // random number + file name
                $model->logo = $fileNameLogo;
            }
            else{
                $fileNameLogo = '';
            }
			if($model->save()){
                if(!empty($uploadedFile)) {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/audios/'.$fileName);
                }
                if(!empty($uploadedFileLogo)) {
                    $uploadedFileLogo->saveAs(Yii::app()->basePath.'/../uploads/audios/'.$fileNameLogo);
                }
				$this->redirect(array('view','id'=>$model->id));
            }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TrainingCenters']))
		{
			$model->attributes=$_POST['TrainingCenters'];
            $uploadedFile=CUploadedFile::getInstance($model,'image');

            if(!empty($uploadedFile)) {
                $rnd = rand(0,9999);
                $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
                $model->image = $fileName;
            }
            else{
                $modelold       = $this->loadModel($id);
                $model->image   = $modelold->image ;
            }

            $uploadedFileLogo=CUploadedFile::getInstance($model,'logo');

            if(!empty($uploadedFileLogo)) {
                $rnd = rand(0,9999);
                $fileNameLogo = "{$rnd}-{$uploadedFileLogo}";  // random number + file name
                $model->logo = $fileNameLogo;
            }
            else{
                $modelOldLogo   = $this->loadModel($id);
                $model->logo   = $modelOldLogo->logo ;
            }

			if($model->save()){
                if(!empty($uploadedFile)) {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/audios/'.$model->image);
                }
                if(!empty($uploadedFileLogo)) {
                    $uploadedFileLogo->saveAs(Yii::app()->basePath.'/../uploads/audios/'.$model->logo);
                }
				$this->redirect(array('view','id'=>$model->id));
            }
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new TrainingCenters('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TrainingCenters']))
			$model->attributes=$_GET['TrainingCenters'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$dataProvider=new CActiveDataProvider('TrainingCenters');
		$this->render('admin',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=TrainingCenters::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='training-centers-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
