<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitudes de aval FAI';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-index container">
    <div class="row">
        <div class="col-12 mb-4 p-0">
            <div class="card">
                <h1 class="card-header text-center darkish_bg text-white"><?= Html::encode($this->title) ?></h1>

                <div class="card-body">
                    <div class="table-responsive">
                        <?=
                        GridView::widget([
                            'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
                            'options' => ['style' => 'width:100%;'],
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
                                [
                                    'attribute' => 'idUsuario',
                                    'label' => 'Organizador',
                                    'value' => function($dataProvider) {
                                        return $dataProvider->idUsuario0->nombre . " " . $dataProvider->idUsuario0->apellido;
                                    }, //valor referenciado
                                ],
//            [
//                'attribute' => 'idCategoriaEvento',
//                'label' => 'Categoria',
//                'value' => 'idCategoriaEvento.descripcionCategoria', //valor referenciado por ActiveQuery en el metodo idClub0
//            ],
//            [
//                'attribute' => 'idEstadoEvento',
//                'label' => 'Estado',
//                'value' => 'idEstadoEvento.descripcionEstado', //valor referenciado por ActiveQuery en el metodo idClub0
//            ],
//            [
//                'attribute' => 'idModalidadEvento',
//                'label' => 'Modalidad',
//                'value' => 'idModalidadEvento0.descripcionModalidad', //valor referenciado por ActiveQuery en el metodo idClub0
//            ],
                                [
                                    'attribute' => 'nombreEvento',
                                    'label' => 'Título',
                                    'value' => 'nombreEvento', //valor referenciado por ActiveQuery en el metodo idClub0
                                ],
//            [
//                'attribute' => 'nombreCortoEvento',
//                'label' => 'Slug',
//                'value' => 'nombreCortoEvento', //valor referenciado por ActiveQuery en el metodo idClub0
//            ],
//            [
//                'attribute' => 'descripcionEvento',
//                'label' => 'Descripción',
//                'value' => 'descripcionEvento', //valor referenciado por ActiveQuery en el metodo idClub0
//            ],
                                [
                                    'attribute' => 'lugar',
                                    'label' => 'Lugar',
                                    'value' => 'lugar', //valor referenciado por ActiveQuery en el metodo idClub0
                                ],
                                [
                                    'attribute' => 'fechaInicioEvento',
                                    'label' => 'Fecha Inicio',
                                    'value' => 'fechaInicioEvento', //valor referenciado por ActiveQuery en el metodo idClub0
                                ],
                                [
                                    'attribute' => 'fechaFinEvento',
                                    'label' => 'Fecha Finalizacion',
                                    'value' => 'fechaFinEvento', //valor referenciado por ActiveQuery en el metodo idClub0
                                ],
                                [
                                    'attribute' => 'capacidad',
                                    'label' => 'Capacidad',
                                    'value' => 'capacidad', //valor referenciado por ActiveQuery en el metodo idClub0
                                ],
//            [
//                'attribute' => 'preInscripcion',
//                'label' => 'Pre-Inscripcion',
//                'value' => function ($dataProvider) {
////                    $fechaConBarras = date('d/m/Y', strtotime($dataProvider->diaPresentacion));
//                    return ($dataProvider->preInscripcion == 0 ? 'No' : 'Si');
//                }, //valor referenciado por ActiveQuery en el metodo idClub0
//            ],
//            [
//                'attribute' => 'fechaLimiteInscripcion',
//                'label' => 'Fecha Limite Inscripcion',
//                'value' => 'fechaLimiteInscripcion', //valor referenciado por ActiveQuery en el metodo idClub0
//            ],
//            [
//                'attribute' => 'codigoAcreditacion',
//                'label' => 'Código Acreditación',
//                'value' => 'codigoAcreditacion', //valor referenciado por ActiveQuery en el metodo idClub0
//            ],
//            [
//                'attribute' => 'fechaCreacionEvento',
//                'label' => 'Fecha Creación',
//                'value' => 'fechaCreacionEvento', //valor referenciado por ActiveQuery en el metodo idClub0
//            ],
                                //'imgLogo',
                                //'capacidad',
                                //'preInscripcion',
                                //'fechaLimiteInscripcion',
                                //'codigoAcreditacion',
                                //'fechaCreacionEvento',
                                ['class' => 'yii\grid\ActionColumn',
                                    'buttons' => [
                                        'view' => function($url, $model) {
                                            return Html::a('<img class="filter-white" src="' . Yii::getAlias('@web/iconos/eye.svg') . '" alt="Visualizar" width="20" height="20" title="Visualizar" role="img">', $url, ['class' => 'btn btn-pink']);
                                        },
                                    ]
                                ],
                            ],
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>