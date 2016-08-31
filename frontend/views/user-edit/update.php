<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserEdit */

$this->title = 'Update User Edit: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Edits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-edit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
