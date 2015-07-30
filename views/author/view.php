<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\games\models\BookAuthor */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('games', 'Games'), 'url' => ['/games']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('games', 'Book Authors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-author-view">

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
		'label' => $model->gameCompany->getAttributeLabel('name'),
		'value'  => Html::a($model->gameCompany->name, ['/games/company/view', 'id' => $model->gameCompany->id]),
		'format' => 'raw',
	    ],
            'description:ntext',
        ],
    ]) ?>

</div>
