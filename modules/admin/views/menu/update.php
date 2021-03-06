<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */

$this->title = "Menyuga o'zgartirish kiritish:"  . $model->name_uz;
$this->params['breadcrumbs'][] = ['label' => 'Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_uz, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="<?=\yii\helpers\Url::to(['/admin'])?>">Bosh sahifa/</a></li>
                            <li class=""><a href="<?=\yii\helpers\Url::to(['/admin/menu'])?>">Menular/</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Menyuni o'zgartirish</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
    </header>
</div>
<div class="menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
