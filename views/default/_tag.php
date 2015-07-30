<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;

?>
<a href="<?= Url::to(['/games/tag/view', 'id' => $model->id]) ?>">
    <h3><?= $model->name; ?></h3>
</a>
