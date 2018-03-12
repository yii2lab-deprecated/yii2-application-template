<?php

use yii\helpers\Html;
use yii2lab\domain\helpers\ServiceHelper;
use yii2lab\helpers\ModuleHelper;
use yii2module\profile\widget\Avatar;

/* @var $this yii\web\View */
/* @var $identity \yii2module\account\domain\v2\entities\LoginEntity */

$identity = Yii::$app->user->identity;

?>

<!-- Menu Toggle Button -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">

    <?php if(ServiceHelper::has('profile.avatar')) { ?>
        <!-- The user image in the navbar-->
	    <?= Avatar::widget([
		    'options' => [
			    'class' => 'img-circle',
                'height' => 18,
		    ],
	    ]) ?>
	<?php } else { ?>
	    <?= $identity->username ?>
    <?php } ?>
    
	<!-- hidden-xs hides the username on small devices so only the image appears. -->
    <!-- <small class="hidden-xs"><?= $identity->username ?></small> -->
</a>

<ul class="dropdown-menu">

	<!-- The user image in the menu -->
	<li class="user-header">
        <?php if(ServiceHelper::has('profile.avatar')) { ?>
	        <?= Avatar::widget([
		        'options' => [
			        'class' => 'img-circle',
		        ],
	        ]) ?>
        <?php } ?>
		<p>
			<?= $identity->username ?>
		</p>
	</li>
	
	<!-- Menu Footer-->
	<li class="user-footer">

		<div class="pull-left">
			<?php if(ModuleHelper::has('profile', FRONTEND) && ServiceHelper::has('profile.avatar')) {
				echo Html::a(Yii::t('profile/profile', 'title'),env('url.frontend') . 'profile/person',['class'=>"btn btn-default btn-flat"]);
			} ?>
		</div>
		<div class="pull-right">
			<?= Html::a(Yii::t('account/auth', 'logout_action'),['/user/auth/logout'],['class'=>"btn btn-default btn-flat", 'data-method'=>'post']); ?>
		</div>
	</li>
</ul>
