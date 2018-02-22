<?php

namespace yii2lab\applicationTemplate\common\assets\main;

use Yii;
use yii\web\AssetBundle;

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
		$env = env(null);
		$config['env'] = [
			'mode' => $env['mode'],
			'url' => $env['url'],
		];
        Yii::$app->view->registerJsVar('app', $config);
	}
}
