<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Riwayat */
?>
<div class="riwayat-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_riwayat',
            'id_tiket',
            'riwayat',
            'user',
        ],
    ]) ?>

</div>
