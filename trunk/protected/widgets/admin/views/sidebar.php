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
								array(
									'label' => Yii::t('global', 'Manage Languages'),
									'url' => array('languages/index'),
								),
                                array(
                                    'label' => Yii::t('global', 'Manage Animation Home'),
                                    'url' => array('slidershow/index'),
                                ),
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
									'url' => array('members/admin'),
								),
								array(
									'label' => Yii::t('global', 'Manage Members'),
									'url' => array('members/index'),
								),
							),
						),
						//Products
						array(
							'label' => Yii::t('global', 'Articles'),
							//'icon' => 'icon-list',
							'itemOptions' => array( 'class' => 'dropdown' ),
							'items' => array(
								array(
									'label' => Yii::t('global', 'Manage Articles'),
									'url' => array('products/index'),
								),
								array(
									'label' => Yii::t('global', 'Manage Categories'),
									'url' => array('categories/index'),
								),
								array(
									'label' => Yii::t('global', 'Manage Comments'),
									'url' => array('ProductComments/index'),
								),
							),
						),
						

					 // // COMPANY
					 // array( 
						// 	'label' => Yii::t('global', 'COMPANY'), 
						// 	'icon' => 'icon-list',
						// 	'itemOptions' => array( 'class' => 'dropdown' ),
						// 	'items' => array(
						// 			array( 
						// 					'label' => Yii::t('global', 'ADD A COMPANY'), 
						// 					'url' => array('add-company/index'),
						// 				 ),
						// 			array( 
						// 					'label' => Yii::t('global', 'MANAGE COMPANIES'), 
						// 					'url' => array('manage-companies/index'),
						// 				 ),
						// 			array( 
						// 					'label' => Yii::t('global', 'ARCHIVED COMPANIES'), 
						// 					'url' => array('archived-companies/index'),
						// 				 ),
						// 			array( 
						// 					'label' => Yii::t('global', 'MANAGE PRODUCTS'), 
						// 					'url' => array('manage-products/index'),
						// 				 ),
						// 			array( 
						// 					'label' => Yii::t('global', 'MANAGE BRANDS'), 
						// 					'url' => array('manage-brands/index'),
						// 				 ),
						// 			array( 
						// 					'label' => Yii::t('global', 'MULTI CP COMPANY'), 
						// 					'url' => array('multi-company/index'),
						// 				 ),
						// 		 ),	
						//  ),
					 // SALON
					 array( 
							'label' => Yii::t('global', 'News'),
							//'icon' => 'icon-list-alt',
							'itemOptions' => array( 'class' => 'dropdown' ),
							'items' => array(
									array( 
											'label' => Yii::t('global', 'Manage News'),
											'url' => array('news/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'Manage Categories'),
											'url' => array('newsCategorys/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'Manage Comments'),
											'url' => array('newsComments/index'),
										 ),
								 ),	
						 ),
					 // HEARING TV
					 array( 
							'label' => Yii::t('global', 'Hearing TV'),
							//'icon' => 'icon-desktop',
							'itemOptions' => array( 'class' => 'dropdown' ),
							'items' => array(
									array(
										'label' => Yii::t('global', 'Manage Videos'),
										'url' => array('Videos/index'),
									),
									array(
									    'label' => Yii::t('global', 'Manage Comments'),
									 	'url' => array('/admin/videoComments'),
									),
								 ),	
						 ),
                        array(
                            'label' => Yii::t('global', 'Suppliers'),
                            //'icon' => 'icon-ok-circle',
                            'itemOptions' => array( 'class' => 'dropdown' ),
                            'items' => array(
                                array(
                                    'label' => Yii::t('global', 'Manage Banners'),
                                    'url' => array('suppliers/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Comment'),
                                    'url' => array('supplierComments/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Products '),
                                    'url' => array('supplierProducts/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Chip'),
                                    'url' => array('chips/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Range'),
                                    'url' => array('ranges/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Comments Products'),
                                    'url' => array('supplierProductsComments/index'),
                                ),
                            ),
                        ),
                       /* array(
                            'label' => Yii::t('global', 'Audio'),
                            //'icon' => 'icon-th-large',
                            'itemOptions' => array( 'class' => 'dropdown' ),
                            'items' => array(
                                array(
                                    'label' => Yii::t('global', 'Manage Networks'),
                                    'url' => array('networks/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Professionals'),
                                    'url' => array('professionals/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Centers'),
                                    'url' => array('centers/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Training Centers'),
                                    'url' => array('trainingCenters/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Comments'),
                                    'url' => array('audiosComments/index'),
                                ),
                            ),
                        ),*/

					 array( 
							'label' => Yii::t('global', 'Diary'),
							//'icon' => 'icon-tint',
							'itemOptions' => array( 'class' => 'dropdown' ),
							'items' => array(
									array( 
											'label' => Yii::t('global', 'Manage Events'),
											'url' => array('events/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'Manage Organizers'),
											'url' => array('organizers/index'),
										 ),
                                    array(
                                        'label' => Yii::t('global', 'Manage Category Events'),
                                        'url' => array('eventsCategory/index'),
                                    ),

                                    array(
                                        'label' => Yii::t('global', 'Manage Announcements'),
                                        'url' => array('announcements/index'),
                                    ),
                                    array(
                                        'label' => Yii::t('global', 'Manage Category Announcements'),
                                        'url' => array('announcementCategorys/index'),
                                    ),
                                array(
                                    'label' => Yii::t('global', 'Manage Press'),
                                    'url' => array('press/index'),
                                ),
                            ),
						 ),
                        array(
                            'label' => Yii::t('global', 'Users'),
                            //'icon' => 'icon-asterisk',
                            'itemOptions' => array( 'class' => 'dropdown' ),
                            'items' => array(
                                array(
                                    'label' => Yii::t('global', 'Manage User Account'),
                                    'url' => array('usersAccount/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Hospitals'),
                                    'url' => array('hospitals/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Doctors'),
                                    'url' => array('doctors/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Services'),
                                    'url' => array('services/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Practices'),
                                    'url' => array('practices/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Speech therapist'),
                                    'url' => array('speechTherapist/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Special education schools'),
                                    'url' => array('specialEducationSchools/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Module'),
                                    'url' => array('usersModule/index'),
                                ),
                            ),
                        ),
                        array(
                            'label' => Yii::t('global', 'Agencies'),
                            //'icon' => 'icon-align-justify',
                            'itemOptions' => array( 'class' => 'dropdown' ),
                            'items' => array(
                                array(
                                    'label' => Yii::t('global', 'Manage Agencies'),
                                    'url' => array('agencies/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Category'),
                                    'url' => array('agenciesCategory/index'),
                                ),
                            ),
                        ),
					array(
							'label' => Yii::t('global', 'Directorys'),
							//'icon' => 'icon-comment',
							'itemOptions' => array( 'class' => 'dropdown' ),
							'items' => array(
                                        array(
                                            'label' => Yii::t('global', 'Manage Directory Orders'),
                                            'url' => array('directoryOrders/index'),
                                        ),
                                array(
                                    'label' => Yii::t('global', 'Manage Networks'),
                                    'url' => array('networks/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Professionals'),
                                    'url' => array('professionals/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Centers'),
                                    'url' => array('centers/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Training Centers'),
                                    'url' => array('trainingCenters/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Comments'),
                                    'url' => array('audiosComments/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Maps'),
                                    'url' => array('maps/index'),
                                ),
						     ),
						 ),

					 // EXPORT
					 array( 
							'label' => Yii::t('global', 'Export'),
							//'icon' => 'icon-paste',
							'itemOptions' => array( 'class' => 'dropdown' ),
							'items' => array(
									array( 
											'label' => Yii::t('global', 'COMPANIES'), 
											'url' => array('companies/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'PRODUCT LISTING WORDING'), 
											'url' => array('product-listing-wording/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'PRODUCT CATALOGUE'), 
											'url' => array('product-catalogue/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'INDEX BY BRAND'), 
											'url' => array('index-by-brand/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'THERAPIST'), 
											'url' => array('therapist/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'TRAINING'), 
											'url' => array('training/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'AGENCIES'), 
											'url' => array('agencies/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'PRESS'), 
											'url' => array('press/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'LOUNGE'), 
											'url' => array('Lounge/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'STORES'), 
											'url' => array('Stores/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'FRANCHISES'), 
											'url' => array('Franchises/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'GEO LIST'), 
											'url' => array('geo-list/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'GEO ADDRESS LIST WITHOUT'), 
											'url' => array('geo-address-list-without/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'LIST ADVERTISER'), 
											'url' => array('list-advertiser/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'LIST OF CONTACTS'), 
											'url' => array('list-contacts/index'),
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
                                array(
                                    'label' => Yii::t('global', 'Manage Newsletters'),
                                    'url' => array('newsletter/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Pages'),
                                    'url' => array('custompages/index'),
                                ),
                                array(
                                    'label' => Yii::t('global', 'Manage Contact'),
                                    'url' => array('contactus/index'),
                                ),
                            ),
                        ),
					// MODIFIED JOURNAL
					/*array(
							'label' => Yii::t('global', 'MODIFIED JOURNAL'), 
							'icon' => 'icon-bar-chart',
							'itemOptions' => array( 'class' => 'dropdown' ),
							'items' => array(
									array( 
											'label' => Yii::t('global', 'COMPANY'), 
											'url' => array('company/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'STORE'), 
											'url' => array('store/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'LOUNGE'), 
											'url' => array('lounge/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'TRAINING'), 
											'url' => array('training/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'ORGANIZATION'), 
											'url' => array('organization/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'THERAPIST'), 
											'url' => array('therapist/index'),
										 ),
									array( 
											'label' => Yii::t('global', 'PRESS'), 
											'url' => array('press/index'),
										 ),
								 ),	
						 ),*/
					// PAGES

					// PARAMETER
					// array( 
					// 		'label' => Yii::t('global', 'PARAMETER'), 
					// 		'icon' => 'icon-bar-chart',
					// 		'itemOptions' => array( 'class' => 'dropdown' ),
					// 		'items' => array(
					// 				array( 
					// 						'label' => Yii::t('global', 'POSTAL CODE FRENCH MANAGEMENT'), 
					// 						'url' => array('postal-code-french-management/index'),
					// 					 ),
					// 				array( 
					// 						'label' => Yii::t('global', 'FOREIGN POSTAL CODE MANAGEMENT'), 
					// 						'url' => array('foreign-postal-code-management/index'),
					// 					 ),
					// 				array( 
					// 						'label' => Yii::t('global', 'PURGE'), 
					// 						'url' => array('purge/index'),
					// 					 ),
					// 			 ),	
					// 	 ),
					//end 

				)
));
?>