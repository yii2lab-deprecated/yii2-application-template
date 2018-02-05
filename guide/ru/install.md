Установка
===

Устанавливаем зависимость:

```
composer require yii2lab/yii2-application-template
```

Создаем полномочие:

```
oExamlpe
```

Объявляем frontend модуль:

```php
return [
	'modules' => [
		// ...
		'application-template' => 'yii2lab\applicationTemplate\frontend\Module',
		// ...
	],
];
```

Объявляем backend модуль:

```php
return [
	'modules' => [
		// ...
		'application-template' => 'yii2lab\applicationTemplate\backend\Module',
		// ...
	],
];
```

Объявляем api модуль:

```php
return [
	'modules' => [
		// ...
		'applicationTemplate' => 'yii2lab\applicationTemplate\api\Module',
		// ...
		'components' => [
            'urlManager' => [
                'rules' => [
                    ...
                   ['class' => 'yii\rest\UrlRule', 'controller' => ['{apiVersion}/application-template' => 'application-template/default']],
                    ...
                ],
            ],
        ],
	],
];
```

Объявляем консольный модуль:

```php
return [
	'modules' => [
		// ...
		'application-template' => 'yii2lab\applicationTemplate\console\Module',
		// ...
	],
];
```

Объявляем домен:

```php
return [
	'components' => [
		// ...
		'applicationTemplate' => 'yii2lab\applicationTemplate\domain\Domain',
		// ...
	],
];
```
