<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\games\models\Tag */

$this->title = Yii::t('games', 'Create Tag');
$this->params['breadcrumbs'][] = ['label' => Yii::t('games', 'Tags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
