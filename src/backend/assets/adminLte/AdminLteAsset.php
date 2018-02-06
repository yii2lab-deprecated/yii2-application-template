<?php

namespace yii2lab\applicationTemplate\backend\assets\adminLte;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
	public $sourcePath = '@yii2lab/applicationTemplate/backend/assets/adminLte/dist';
	public $js = [
		'js/sidebarToggle.js',
	];
	public $css = [
		'css/fixMenu.css',
	];
	public $depends = [
		'yii2lab\applicationTemplate\backend\assets\adminLte\BowerAsset',
	];
	
}
