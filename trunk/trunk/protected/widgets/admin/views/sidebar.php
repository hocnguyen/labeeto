<?php
// Side bar menu
$this->widget('widgets.NBADMenu', array(
	'activateParents' => true,
	'htmlOptions' => array( 'class' => 'navigation' ) ,
    'items' => array(
					// dashboard
        			array(
                        'label' => Yii::t('global', 'Dashboard'),
                        'url' => array('index/index'),
                        'icon' => 'isw-grid'
                    ),
					 // System
					array(
                        'label' => Yii::t('global', 'System'),
                        'url' => array('settings/index'),
                        'icon' => 'isw-settings',
                        'itemOptions' => array( 'class' => 'openable' ),
                        'items' => array(
                                array(
                                        'label' => Yii::t('global', 'Manage Settings'),
                                        'url' => array('settings/index'),
                                        'icon' => 'icon-wrench'
                                     ),
                                array(
                                        'label' => Yii::t('global', 'Manage Languages'),
                                        'url' => array('languages/index'),
                                        'icon' => 'icon-globe'
                                     ),

                                array(
                                        'label' => Yii::t('global', 'Email templates'),
                                        'url' => array('emailTemplates/index'),
                                        'icon' => 'icon-comment'
                                     ),
                        ),
                    ),
                    array(
                        'label' => Yii::t('global', 'Users'),
                        'url' => array('user/index'),
                        'icon' => 'isw-users'
                    ),
					array(
                        'label' => Yii::t('global', 'Apps'),
                        'url' => array('apps/index'),
                        'icon' => 'isw-archive'
                    ),
                    array(
                        'label' => Yii::t('global', 'Registrations'),
                        'url' => array(''),
                        'icon' => 'isw-favorite'
                    ),
                    array(
                        'label' => Yii::t('global', 'Code Samples'),
                        'url' => array(''),
                        'icon' => 'isw-bookmark'
                    ),


                    
				)
));
?>