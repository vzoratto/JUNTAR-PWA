<?php

use frontend\models\Usuario;
use yii\helpers\Html;
use frontend\models\Evento;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use yii\bootstrap4\ActiveForm;
/* @var $this yii\web\View */
/* @var $model frontend\models\Presentacion */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-12 m-auto">
            <div class="presentacion-form">
                <h2 class="text-center">Cargar Presentacion a evento</h2>
                <p class="text-center">Complete los siguientes campos</p>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'idEvento')->dropdownList($item,  ['value' => $evento->idEvento, 'readonly' => true])->label('Seleccione un evento *');
                ?>

                <?= $form->field($model, 'tituloPresentacion')->textInput(['maxlength' => true,  'placeholder' => 'Ingrese título de la presentación'])->label('Titulo de la presentación *') ?>

                <?= $form->field($model, 'descripcionPresentacion')->textarea(['rows' => '8', 'placeholder' => 'Descripción de la presentación [ máximo 800 caracteres ]'])->label('Descripción *')  ?>

                <?= $form->field($model, 'diaPresentacion')->input('date', ['style' => 'width: auto'])->label('Ingrese fecha *') ?>

                <?= $form->field($model, 'horaInicioPresentacion')->input('time', ['style' => 'width: auto'])->label('Hora de incio (HH:MM) *') ?>

                <?= $form->field($model, 'horaFinPresentacion')->input('time', ['style' => 'width: auto'])->label('Hora de finalización (HH:MM) *') ?>

                <?= $form->field($model, 'linkARecursos')->textInput(['placeholder' => 'Ingrese link a recursos'] , ['maxlength' => true]) ?>

                <p class="font-italic">
                    * Campos obligatorios.
                <p>            
                <div class="form-group">
                    <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>


            </div>
        </div>
    </div>
</div>    