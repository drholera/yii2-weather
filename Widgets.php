<?php

namespace drholera\Dhweather;

use yii\helpers\Html;

class Widgets extends \yii\base\Widget
{
    public $cityId;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        return $this->render('form', ['instance' => new LoginForm()]);
    }

}