<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\games\models\GameCompany */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('games', 'Games'), 'url' => ['/games']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('games', 'Game Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="game-company-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('games', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('games', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('games', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
	    [
		'label'  => $model->author->getAttributeLabel('name'),
		'value'  => Html::a($model->author->name, ['/games/author/view', 'id' => $model->author->id]),
		'format' => 'raw',
	    ],
            'description:paragraphs',
        ],
    ]) ?>

</div>
