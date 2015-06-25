<?php

namespace Dhweather;

use Cmfcmf\OpenWeatherMap;
use yii\helpers\Html;

class DHWidget extends \yii\base\Widget
{
    public $cityId;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        return $this->render('form');
    }

}