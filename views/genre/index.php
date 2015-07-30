<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use frontend\modules\games\helpers\GenrePath;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('games', 'Genres');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genre-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('games', 'Create Genre'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
	    [
		'label' => Yii::t('games', 'Path'),
		'content' => function ($model, $key, $index, $column)
		{
		    return Breadcrumbs::widget([
		        'homeLink' => false,
		        'links'    => GenrePath::forModel($model),
		    ]);
		},
		'value' => 'parent_genre_id',
	    ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
