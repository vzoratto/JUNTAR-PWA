<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\RespuestaFile */
/* @var $form yii\widgets\ActiveForm */

$this->title = "Respuestas";
?>

<div class="respuesta-form text-center container">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],
        'id' => 'respuestas-form',
    ]); ?>

    <?php foreach ($preguntas as $i => $pregunta): ?>
    <h5><?=$pregunta->descripcion?></h5>

        <?php if($respuestas[$i] != null){
            $respuestaAPregunta = $respuestas[$i]->respuesta;
        }else{
            $respuestaAPregunta = "No se contesto";
        }?>
        <?php if($pregunta->tipo == 1): ?>
        <?= Html::input("text", "respuesta".$i, $respuestaAPregunta, ["disabled" => true]) ?>
        <?php elseif($pregunta->tipo == 2): ?>
        <?= Html::textarea("respuesta".$i, $respuestaAPregunta,["disabled" => true]); ?>
        <?php elseif($pregunta->tipo == 3): ?>
            <?= Html::a($respuestaAPregunta, "#", ["download" => true]); ?>
        <?php endif; ?>
        <br><br>
    <?php endforeach; ?>
    <div class="form-group">
        <?php if($esAjax): ?>
        <?= \yii\bootstrap4\Html::button("Cerrar", ["data-dismiss" => "modal", 'class' => 'btn btn-outline-success'])?>
        <?php else: ?>
            <?= \yii\bootstrap4\Html::a("Volver Atras", Url::previous("verRespuestas") , ['class' => 'btn btn-outline-success'])?>
        <?php endif; ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>