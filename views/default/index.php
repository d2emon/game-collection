<?php
$blocks = [
    ['provider' => $companies, 'view' => '_company'],
    ['provider' => $authors,   'view' => '_author'],
    ['provider' => $genres,    'view' => '_genre'],
    ['provider' => $tags,      'view' => '_tag'],
];
?>
<div class="games-default-index">
    <h1><?= yii::t('games', 'Games') ?></h1>
    <?php \yii2masonry\yii2masonry::begin([
        'clientOptions' => [
	    'columnWidth'  => 256,
	    'itemSelector' => '.item'
	]
    ]); ?>
        <?php 
        $maxI = rand(2, 10);
        for($i=0; $i<$maxI; $i++):
	    foreach($blocks as $block):
	        $maxJ = rand(0, 5);
                for($j=0; $j<$maxJ; $j++):
	?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $block['provider'],
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => $block['view'],
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?php 
		endfor;
	    endforeach;
        endfor;
        ?>
    <?php \yii2masonry\yii2masonry::end(); ?>
</div>
