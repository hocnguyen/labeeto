<?php
/**
 * Index controller Home page
 */
class IndexController extends SiteBaseController {
	
	public $login;
	
	const PAGE_SIZE = 5;
	/**
	 * Controller constructor
	 */
	public function init()
	{
		parent::init();
	}

	public function actionIndex() {
        $model =  new Members();
        $this->login= 0;// set template no login to check
		$this->render('index',compact('model'));
	}

    public function actionHome(){
        $this->login = 1; // set template user login to check
        $this->render('home');
    }

    public function actionSpeedDay(){
    	$this->login = 1;
        $this->render('static/speed_day');
    }
}
