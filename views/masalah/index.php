<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use app\models\JenisMasalah;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MasalahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daily Report Problem';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masalah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="pull-right">
       <button onclick="history.go(-1);" class="btn btn-warning">Kembali</button>
        <?= Html::a('New Ticket', ['create'], ['class' => 'btn btn-success pull-right']) ?>
        <br>
    </p>

    <?= 
    
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_masalah',
            'nama_pelapor',
            [
                'attribute'=>'id_jenis_masalah',
                'value'=>'jenisMasalah.masalah'

            ],
            'status',

            ['class' => 'yii\grid\ActionColumn',
          'header' => 'Actions',
          'headerOptions' => ['style' => 'color:#337ab7'],
          'template' => '{view}{update}{delete}',
          'buttons' => [
            'view' => function ($url, $model) {
                return Html::a('<span class="btn btn-info glyphicon glyphicon-search"> </span>', $url, [
                            'title' => Yii::t('app', 'Lihat Data'),
                ]);
            },
            'update' => function ($url, $model) {
                return Html::a('<span class="btn btn-success glyphicon glyphicon-ok"></span>', $url, [
                            'title' => Yii::t('app', 'Update Ticket'),
                ]);
            },
            'delete' => function ($url, $model) {
                return Html::a('<span class="btn btn-danger glyphicon glyphicon-trash"></span>', $url, [
                            'title' => Yii::t('app', 'Hapus Data'),
                ]);
            }

          ],
         
          ],
        ],
    ]); ?>

    
    <?php Pjax::end(); ?>
</div>
