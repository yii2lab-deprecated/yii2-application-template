<?php

use yii2lab\app\domain\helpers\EnvService;
use yii2lab\domain\helpers\ServiceHelper;
use yii2lab\extension\common\helpers\ModuleHelper;
use yii2lab\extension\yii\helpers\Html;
use yii2module\profile\widget\Avatar;

/* @var $this yii\web\View */
/* @var $identity \yii2module\account\domain\v2\entities\LoginEntity */

$identity = Yii::$app->user->identity;

?>

<!-- Menu Toggle Button -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">

    <?php if(ServiceHelper::has('profile.avatar')) { ?>
        <!-- The user image in the navbar-->
	    <?= !class_exists(Avatar::class) ? Html::fa('user') : Avatar::widget([
		    'options' => [
			    'class' => 'img-circle',
                'height' => 18,
		    ],
	    ]) ?>
	<?php } else { ?>
	    <?= Html::fa('user') ?>
    <?php } ?>
	<?= $identity->username ?></small>
</a>

<ul class="dropdown-menu">

	<!-- The user image in the menu -->
	<li class="user-header">
        <?php if(ServiceHelper::has('profile.avatar')) { ?>
	        <?= Avatar::widget([
		        'options' => [
			        'class' => 'img-circle',
			        'style' => 'height: 115px !important; width: 115px !important; ',
		        ],
	        ]) ?>
        <?php } ?>
		<p>
			<?= \yii2module\account\module\helpers\Menu::getUseName() ?>
		</p>
	</li>

	<!-- Menu Footer-->
	<li class="user-footer">

		<div class="pull-right">
			<?= Html::a(Yii::t('account/auth', 'logout_action'),['/user/auth/logout'],['class'=>"btn btn-default btn-flat", 'data-method'=>'post']); ?>
		</div>
	</li>
</ul>
