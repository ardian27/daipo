<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\JenisMasalah;

/* @var $this yii\web\View */
/* @var $model app\models\Masalah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="masalah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pelapor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis_masalah')->dropDownList(ArrayHelper::map(JenisMasalah::Find()->all(),'id_jenis_masalah','masalah'),['prompt'=>'-- pilih masalah -- ']) ?>

    <?= 
      //  $form->field($model, 'waktu_pelaporan')->textInput() 
           $form->field($model, 'waktu_pelaporan')->hiddenInput(['value'=>date('Y-m-d H:i:s')])->label(false); 
    ?>


    <?= $form->field($model, 'detail_masalah')->textarea(['rows' => 6]) ?>


    <?=  $form->field($model, 'status')->hiddenInput(['value'=> "Menunggu Eksekusi"])->label(false); ?>
    


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
