<?php

use yii2lab\extension\menu\helpers\MenuHelper;
use yii2lab\extension\widget\RequestRunTime;
use yii2lab\extension\common\helpers\ModuleHelper;
use yii2lab\extension\web\enums\HtmlEnum;
use yii2module\article\widgets\PostList;
use yii2module\lang\widgets\LangSelector;

$items = MenuHelper::load('menu/footer', 'leftMenu', true);

$lineCount = 1;
$height = 40 * $lineCount;

$css = '
.wrap {
	min-height: 100%;
	height: auto;
	margin: 0 auto -'.$height.'px;
	padding: 0 0 '.$height.'px;
}

.page-footer {
	height: '.$height.'px;
	background-color: #f5f5f5;
	border-top: 1px solid #ddd;
}

.page-footer .container {
	padding-top: 8px;
}
';

$this->registerCss($css);

?>

<div class="pull-left">

    &copy; <?= Yii::$app->name . SPC . date('Y') ?>

    &nbsp;
    
	<?php if(YII_ENV_DEV || YII_ENV_PRETEST) { ?>
		
		<span class="text-muted"><?= RequestRunTime::widget() ?></span>
	
	<?php } ?>
    
    <?php if(APP == FRONTEND && ModuleHelper::has('article')) { ?>

        <?= PostList::widget([
            'names' => param('article.links'),
        ]) ?>

    <?php } ?>

</div>

<div class="pull-right">

	<?php if(ModuleHelper::has('lang')) { ?>
        <span class="dropup">
            <?= LangSelector::widget() ?>
            <?= HtmlEnum::PIPE ?>
            <?= MenuHelper::renderMenu($items) ?>
        </span>
	<?php } ?>

</div>
