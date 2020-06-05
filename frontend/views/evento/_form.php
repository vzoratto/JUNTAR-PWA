<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\Evento */
=======
/* @var $model common\models\evento */
>>>>>>> c0503ad64a517a0a11aecb6b2fd47fe90b2ea636
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idUsuario')->textInput() ?>

    <?= $form->field($model, 'nombreEvento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcionEvento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lugar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modalidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkPresentaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkFlyer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkLogo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capacidad')->textInput() ?>

    <?= $form->field($model, 'preInscripcion')->textInput() ?>

    <?= $form->field($model, 'fechaLimiteInscripcion')->textInput() ?>

    <?= $form->field($model, 'codigoAcreditacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>