<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\games\models\GameCompany */

$this->title = Yii::t('games', 'Create Game Company');
$this->params['breadcrumbs'][] = ['label' => Yii::t('games', 'Game Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="game-company-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
