<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;

?>
<a href="<?= Url::to(['/games/genre/view', 'id' => $model->id]) ?>">
    <h3><?= $model->name; ?></h3>
    <div class="w2">
        <?= StringHelper::truncate( $model->description, 64, "&hellip;"); ?>
    </div>
</a>
