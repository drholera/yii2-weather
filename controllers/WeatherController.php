<?php

namespace drholera\dhweather\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use Cmfcmf\OpenWeatherMap;

class WeatherController extends Controller{

    public $location;

    public function __construct(){
        die;
    }

    public function actionGetWeather(){

        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;

            $this->location = $_POST['city'];
            $lang = 'en';
            $units = 'metric';

            $Weather = new OpenWeatherMap();
            $currentWeather = $Weather->getWeather($this->location, $units, $lang);

            $res = array(
                'body'    => print_r($currentWeather, true),
                'success' => true,
            );


            return $res;
        }
    }
}