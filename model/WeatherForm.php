<?php

namespace drholera\Dhweather\model;

use Yii;
use yii\base\Model;

/**
 * WeatherForm is the model behind the weather form.
 */
class WeatherForm extends Model
{
    public $country;
    public $city;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['country', 'city'], 'required'],
            // rememberMe must be a boolean value
        ];
    }
}
