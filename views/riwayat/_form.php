<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Riwayat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riwayat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tiket')->textInput() ?>

    <?= $form->field($model, 'riwayat')->textInput() ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
