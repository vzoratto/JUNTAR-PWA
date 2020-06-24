<?php

use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = "Responder Formulario";
?>

<div class="responder-formulario container">
    <h3>Haga click en los en cada boton para responder el formulario de preinscripcion</h3>

    <?php foreach ($preguntas as $i => $pregunta): ?>
    <?php $url = Url::toRoute(["respuesta/create?id=" . $pregunta->id . "&id2=" . $idInscripcion]) ?>
        <?= Html::a('Pregunta ' . ($i + 1), $url, ['class' => 'btn btn-outline-success responderPregunta',
            "data-id" => $url]);?>
    <?php endforeach; ?>

</div>

<?php
Modal::begin([
    'id' => 'modalPregunta',
    'size' => 'modal-lg'
]);
Modal::end();
?>