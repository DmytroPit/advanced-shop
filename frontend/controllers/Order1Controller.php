<?php

namespace frontend\controllers;

use Yii;
use app\models\Order1;
use app\models\Order1Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Order1Controller implements the CRUD actions for Order1 model.
 */
class Order1Controller extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Order1 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Order1Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Order1 model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Order1 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//    public function actionCreate()
//    {
//        $model = new Order1();
//
//        if ($model->load(Yii::$app->request->post())) {
//            $model->order_time = date('Y-m-d h:m:s');
////            $model->id = ;
//            $model->save();
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->renderAjax('create', [
//                'model' => $model,
//            ]);
//        }
//    }

    public function actionCreate()
    {
        $model = new Order1();

        if ($model->load(Yii::$app->request->post())) {
            $model->order_time = date('Y-m-d h:m:s');
            $model->save();
            return $this->redirect(\Yii::$app->urlManager->createUrl(['product/view', 'id' => $model->id_product]));
//            return $this->redirect(Yii::$app->urlManager->createUrl("test/show"));
//            $this->redirect(\Yii::$app->urlManager->createUrl("test/show"));
//            ['value'=>Url::toRoute(['order1/create', 'id_product' => '{$model->id}']
        } else {
            $model->id_product = Yii::$app->request->get('id_product');
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Order1 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Order1 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Order1 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Order1 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Order1::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
