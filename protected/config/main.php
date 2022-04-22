<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'STSPd',
	'timeZone'=>'Asia/Jakarta',
	'theme'=>'apps',
	'defaultController' => 'login',

	// preloading 'log' component
	// 'preload'=>array('booster'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool 
 
			'apps'=>array(
				'preload'=>array('booster'),
				'components' => array(
					'booster' => array(
						'class' => 'ext.booster.components.Booster',
						'responsiveCss' => true,
						'fontAwesomeCss' => true
					),
				),	
			), 
	),

	// application components
	'components'=>array(
		'booster' => array(
			'class' => 'ext.booster.components.Booster',
		    'responsiveCss' => true,
		    'fontAwesomeCss' => true
	    ),

		'debug' => array(
            'class' => 'ext.yii2-debug.Yii2Debug',
        ),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

// 		uncomment the following to enable URLs in path-format
		'urlManager'=>array( 
//		'userClass'=>'Admin',
//		'class'=>'RDbAuthManager',
//		'superuserName'=>'Admin',
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/

		// database settings are configured in database.php
		// 'db'=>require(dirname(__FILE__).'/database.php'), 
		'db'=>array(
            'class'=>'CDbConnection',
            'connectionString'=>'pgsql:host=rafly.id;port=5432;dbname=simblue',
            'username'=>'oki',
            'password'=>'Djarum76#!',
            'emulatePrepare' => true,
            'enableProfiling'=>true,
            'enableParamLogging'=>true,
		), 
		// 'db'=>array(
  //           'class'=>'CDbConnection',
  //           'connectionString'=>'pgsql:host=localhost;port=5432;dbname=simblue',
  //           'username'=>'postgres',
  //           'password'=>'zeromind',
  //           'emulatePrepare' => true,
  //           'enableProfiling'=>true,
  //           'enableParamLogging'=>true,
		// ),  
		// 'db'=>array(
  //           'class'=>'CDbConnection',
  //           'connectionString'=>'pgsql:host=localhost;port=5432;dbname=esakiptegal',
  //           'username'=>'postgres',
  //           'password'=>'zeromind',
  //           'emulatePrepare' => true,
  //           'enableProfiling'=>true,
  //           'enableParamLogging'=>true,
		// ), 
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
			// 'errorAction'=>'site/error',
		),

		'url' => array(
	        'class'         => 'ext.urisegment.ExtUrlSegment',
		),
		'enkripsi' => array(
	        'class'         => 'ext.enkripsi.ExtEnkripsi',
		),
		'dashboard' => array(
	        'class'         => 'ext.dashboard.ExtDashboard',
		),
		'ePdf' => array(
	        'class'         => 'ext.yiipdf.EYiiPdf',
	        'params'        => array(
	            'mpdf'      => array(
	                'librarySourcePath' => 'application.vendor.mpdf.*',
	                'constants'         => array(
	                    '_MPDF_TEMP_PATH' => Yii::getPathOfAlias('application.runtime'),
	                ),
	                'class'=>'mpdf',
	            ),
	        ),
		),

		// 'log'=>array(
		// 	'class'=>'CLogRouter',
		// 	'routes'=>array(
		// 		array(
		// 			'class'=>'CFileLogRoute',
		// 			'levels'=>'error, warning',
		// 		),
		// 		// uncomment the following to show log messages on web pages
		// 		/*
		// 		array(
		// 			'class'=>'CWebLogRoute',
		// 		),
		// 		*/
		// 	),
		// ),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),

	'theme'=>'stspd'

);
