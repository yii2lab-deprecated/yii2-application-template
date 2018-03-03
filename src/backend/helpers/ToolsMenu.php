<?php

namespace yii2lab\applicationTemplate\backend\helpers;

use yii2lab\extension\menu\interfaces\MenuInterface;

class ToolsMenu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['admin', 'tools'],
			'icon' => 'wrench',
			'items' => [
				'yii2module\encrypt\admin\helpers\Menu',
			],
		];
	}
	
}
