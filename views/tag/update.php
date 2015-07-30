<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\games\models\Tag */

$this->title = Yii::t('games', 'Update {modelClass}: ', [
    'modelClass' => 'Tag',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('games', 'Tags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('games', 'Update');
?>
<div class="tag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
