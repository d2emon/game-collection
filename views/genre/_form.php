<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\modules\games\models\Genre;

/* @var $this yii\web\View */
/* @var $model frontend\modules\games\models\Genre */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="genre-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'parent_genre_id')->dropDownList(
	ArrayHelper::map(array_merge([new Genre], Genre::find()->where(['not', ['id' => $model->id]])->all()), 'id', 'name')
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('games', 'Create') : Yii::t('games', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
