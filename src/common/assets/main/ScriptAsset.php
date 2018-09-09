<?php

namespace yii2lab\applicationTemplate\common\assets\main;

use Yii;
use yii\web\AssetBundle;
use yii2lab\rest\domain\helpers\ApiVersionConfig;

class ScriptAsset extends AssetBundle
{
	public $sourcePath = '@yii2lab/applicationTemplate/common/assets/main/dist';
	public $js = [
		'js/function.js',
		'js/scripts.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
	
	function init() {
		parent::init();
		$this->generateConfigToJs();
	}
	
	private function generateConfigToJs() {
        $config['env']['mode'] = env('mode');
        $config['env']['url'] = env('url');
        $config['api']['defaultVersion'] = ApiVersionConfig::defaultApiVersionSting();
        Yii::$app->view->registerJsVar('app', $config);
	}
}
