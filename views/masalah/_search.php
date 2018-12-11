<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasalahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="masalah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_masalah') ?>

    <?= $form->field($model, 'nama_pelapor') ?>

    <?= $form->field($model, 'id_jenis_masalah') ?>

    <?= $form->field($model, 'waktu_pelaporan') ?>

    <?= $form->field($model, 'detail_masalah') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
