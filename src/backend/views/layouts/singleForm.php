<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii2lab\extension\web\helpers\Page;
use yii2lab\navigation\domain\widgets\Alert;

AppAsset::register($this);
?>

<?php Page::beginDraw(['class' => "hold-transition login-page"]) ?>

	<?= Alert::widget() ?>
	
	<?= $content ?>

<?php Page::endDraw() ?>
