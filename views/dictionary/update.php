<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Dictionary $model */

$this->title = Yii::t('app', 'Изменить: {name}', [
    'name' => $model->value,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Справочники'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->value, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Изменить');
?>
<div class="dictionary-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
