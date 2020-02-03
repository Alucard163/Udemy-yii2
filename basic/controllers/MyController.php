<?php


namespace app\controllers;


class MyController extends AppController
{
    public function actionIndex($id = null) {
        $hi = 'Hello,world!';
        if (!$id) {
            $id = 'test';
        };
        $names = ['Ivanov','Petrov','Sidorov'];
        return $this->render('index',['hello'=>$hi, 'names'=>$names]);
    }
    public function actionBlogPost () {
        return 'BlogPost';
    }
}