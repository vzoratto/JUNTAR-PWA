<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pregunta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pregunta-form">

    <?php $form = ActiveForm::begin([
        'id' => 'pregunta-form',
        'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 1 => 'Respuesta Corta', 2 => 'Respuesta Larga', 3 => 'Subir Archivo', ])->label("Tipo de pregunta") ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true])->label("Pregunta") ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
