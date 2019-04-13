<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NhlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nhls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhl-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nhl', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'match',
            'win',
            'lose',
            'country',
            //'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
