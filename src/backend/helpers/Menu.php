<?php

namespace yii2lab\applicationTemplate\backend\helpers;

use yii2lab\applicationTemplate\common\enums\ApplicationPermissionEnum;
use yii2lab\extension\menu\interfaces\MenuInterface;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['admin', 'app'],
			'icon' => 'square-o',
			'items' => [
				'yii2module\offline\admin\helpers\Menu',
				'yii2module\cleaner\admin\helpers\Menu',
				'yii2module\lang\module\helpers\Menu',
				[
					'label' => ['admin', 'logreader'],
					//'icon' => '',
					'url' => 'logreader',
					'module' => 'logreader',
					'access' => ApplicationPermissionEnum::LOGREADER_MANAGE,
				],
				'yii2lab\init\admin\helpers\Menu',
			],
		];
	}

}
