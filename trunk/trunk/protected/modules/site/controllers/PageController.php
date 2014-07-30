<?php
/**
 * Index controller Home page
 */
class PageController extends SiteBaseController {
	public function init()
	{
		parent::init();
	}
	/* static page to show */
	public function actionHome() {
		$this->layout = false;
		$this->seprateCss = $this->baseUrl.'/css/page/home.css';
		$this->render('home');
	}
	public function actionSearch() {
		$this->seprateCss = $this->baseUrl.'/css/page/search.css';
		$this->render('search');
	}
	public function actionMyProfile() {
		$this->seprateCss = $this->baseUrl.'/css/page/myprofile.css';
		$this->render('myprofile');
	}
	public function actionPreview() {
		$this->seprateCss = $this->baseUrl.'/css/page/preview.css';
		$this->render('preview');
	}
	public function actionSetting() {
		$this->seprateCss = $this->baseUrl.'/css/page/setting.css';
		$this->render('setting');
	}
	public function actionMessage() {
		$this->seprateCss = $this->baseUrl.'/css/page/message.css';
		$this->render('message');
	}
	public function actionFavority() {
		$this->seprateCss = $this->baseUrl.'/css/page/favority.css';
		$this->render('favority');
	}
	public function actionUpgrade() {
		$this->seprateCss = $this->baseUrl.'/css/page/upgrade.css';
		$this->render('upgrade');
	}
	public function actionInvite() {
		$this->seprateCss = $this->baseUrl.'/css/page/invite.css';
		$this->render('invite');
	}
	public function actionDaily() {
		$this->seprateCss = $this->baseUrl.'/css/page/daily.css';
		$this->render('daily');
	}
	public function actionViewer() {
		$this->seprateCss = $this->baseUrl.'/css/page/viewer.css';
		$this->render('viewer');
	}
}
