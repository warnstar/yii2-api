<?php

namespace app\controllers;

use yii\rest\Controller;

class SiteController extends Controller
{

    public function actionIndex()
    {
        return [
            'env' => getenv("USERNAME"),
            "Hello Test",
            [
                "key" => "Hello"
            ],
            'get' => \Yii::$app->request->get(),
            'json' => \Yii::$app->request->getBodyParams()

        ];
    }

    public function actionError()
    {
        \Yii::$app->response->setStatusCode(400, "Invalid Request");
        return [
            "aaa" => "11111"
        ];
    }
}

