<?php

namespace drholera\Dhweather\model;

use drholera\Dhweather;
use yii\base\Model;

class WeatherForm extends Model
{
    public $country;
    public $city;

    public function rules()
    {
        return [
            // username and password are both required
            [['country', 'city'], 'required'],
        ];
    }
}