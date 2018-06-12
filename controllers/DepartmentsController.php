<?php

namespace app\controllers;

use yii\web\Controller;


class DepartmentsController extends Controller
{
    public function actionPr()
    {
        return $this->render('pr');
    }

    public function actionMedia()
    {
        return $this->render('media');
    }

    public function actionCopyright()
    {
        return $this->render('copyright');
    }

    public function actionPromotion()
    {
        return $this->render('promotion');
    }

    public function actionMarketing()
    {
        return $this->render('marketing');
    }

    public function actionSales()
    {
        return $this->render('sales');
    }

    public function actionHr()
    {
        return $this->render('hr');
    }

    public function actionAccounting()
    {
        return $this->render('accounting');
    }

    public function actionLaw()
    {
        return $this->render('law');
    }

    public function actionDevelopment()
    {
        return $this->render('development');
    }

    public function actionAnalytic()
    {
        return $this->render('analytic');
    }

    public function actionInfrastructure()
    {
        return $this->render('infrastructure');
    }

    public function actionCoach()
    {
        return $this->render('coach');
    }

    public function actionPartnership()
    {
        return $this->render('partnership');
    }

    public function actionMonetization()
    {
        return $this->render('monetization');
    }
}
