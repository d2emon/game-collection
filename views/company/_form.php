<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\games\models\GameCompany */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="game-company-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php if(!$model->isNewRecord): ?>
    <?php if($model->author->id): ?>

    <?= DetailView::widget([
        'model' => $model->author,
        'attributes' => [
            'name',
            'description:paragraphs',
        ],
    ]) ?>

    <p>
        <?= Html::a( Yii::t('games', 'Edit author'), ['/games/author/edit', 'id'=>$model->author->id], ['class' => 'btn btn-primary']); ?>
    </p>
	    
    <?php else: ?>

    <p>
        <?= Html::a( Yii::t('games', 'Add author'), ['/games/author/create', 'company_id'=>$model->id], ['class' => 'btn btn-success']); ?>
    </p>

    <?php endif; ?>
    <?php endif; ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('games', 'Create') : Yii::t('games', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
