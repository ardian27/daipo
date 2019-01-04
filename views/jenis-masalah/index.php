<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JenisMasalahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Master Jenis Problem';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-masalah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jenis_masalah',
            'masalah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
