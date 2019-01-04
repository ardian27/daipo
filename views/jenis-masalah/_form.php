<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisMasalah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-masalah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'masalah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
