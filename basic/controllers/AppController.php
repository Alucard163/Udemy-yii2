<?php


namespace app\controllers;

use yii\web\Controller;
use yii;
class AppController extends Controller
{
    public function debug ($arr) {
        echo '<pre>'. print_r($arr, true).'</pre>';
    }
}
