<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Masalah2 */
?>
<div class="masalah2-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_masalah',
            'nama_pelapor',
            'id_jenis_masalah',
            'waktu_pelaporan',
            'detail_masalah:ntext',
            'status',
        ],
    ]) ?>

</div>
