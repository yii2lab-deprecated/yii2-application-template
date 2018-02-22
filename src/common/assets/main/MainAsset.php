<?php

namespace yii2lab\applicationTemplate\common\assets\main;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
	public $depends = [
		'yii\web\YiiAsset',
		'yii2lab\applicationTemplate\common\assets\fontAwesome\BowerAsset',
		'yii2lab\applicationTemplate\common\assets\main\ScriptAsset',
		'yii2lab\applicationTemplate\common\assets\main\StyleAsset',
	];
}
