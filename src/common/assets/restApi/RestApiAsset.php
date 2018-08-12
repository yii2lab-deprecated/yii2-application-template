<?php

namespace yii2lab\applicationTemplate\common\assets\restApi;

use yii\web\AssetBundle;

class RestApiAsset extends AssetBundle
{
	public $sourcePath = '@yii2lab/applicationTemplate/common/assets/restApi/dist';
	public $js = [
		'js/main.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
		'yii2lab\applicationTemplate\common\assets\main\ScriptAsset',
	];
	
}
