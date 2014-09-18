<?php
// Side bar menu
$this->widget('widgets.NBADMenu', array(
	'activateParents' => true,
	'htmlOptions' => array( 'class' => 'nav' ) ,
	'items' => array(
					// DASHBOARD
					 array( 
							'label' => Yii::t('global', 'System'),
							//'icon' => 'icon-dashboard',
							'itemOptions' => array( 'class' => 'dropdown' ),
							'items' => array(
								array(
									'label' => Yii::t('global', 'Manage Settings'),
									'url' => array('settings/index'),
								),
								/*array(
									'label' => Yii::t('global', 'Manage Languages'),
									'url' => array('languages/index'),
								),
                                array(
                                    'label' => Yii::t('global', 'Manage Animation Home'),
                                    'url' => array('slidershow/index'),
                                ),*/
                                array(
                                    'label' => Yii::t('global', 'Payment Method'),
                                    'url' => array('paymentMethods/index'),
                                ),
							),
						  ),
						//Members
						array(
							'label' => Yii::t('global', 'Administrators'),
							//'icon' => 'icon-user',
							'itemOptions' => array( 'class' => 'dropdown' ),
							'items' => array(
								array(
									'label' => Yii::t('global', 'Admin Accounts'),
									'url' => array('user/admin'),
								),
								array(
									'label' => Yii::t('global', 'Manage Members'),
									'url' => array('user/index'),
								),
							),
						),

                        array(
                            'label' => Yii::t('global', 'CMS'),
                            //'icon' => 'icon-th-large',
                            'itemOptions' => array( 'class' => 'dropdown' ),
                            'items' => array(
                                array(
                                    'label' => Yii::t('global', 'Manage Banners'),
                                    'url' => array('banners/index'),
                                ),
                               /* array(
                                    'label' => Yii::t('global', 'Manage Newsletters'),
                                    'url' => array('newsletter/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Pages'),
                                    'url' => array('custompages/index'),
                                ),*/
                                array(
                                    'label' => Yii::t('global', 'Manage Contact'),
                                    'url' => array('contactus/index'),
                                ),
                            ),
                        ),



				)
));
?>