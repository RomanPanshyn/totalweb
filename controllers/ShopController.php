<?php

namespace app\controllers;

use Yii;
use app\models\Content;
use app\models\ShopSearch;
use app\models\Shopcateg;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShopController implements the CRUD actions for Content model.
 */
class ShopController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Content models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShopSearch();
        $categModel = Shopcateg::findOne(['id' => 1]);
        $categModel->load(Yii::$app->request->post());
        $categModel->save();
        $categories;
        if ($categModel)
        {
            $categories = $categModel['names'];
        }
        $categories = explode(',', $categories);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $categories);
        $categoriesall = $searchModel->searchcategory();
        return $this->render('index', [
            'categModel' => $categModel,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'categoriesall' => $categoriesall,
            'categories' => $categories,
        ]);
    }

    /**
     * Displays a single Content model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Finds the Content model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Content the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Content::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
