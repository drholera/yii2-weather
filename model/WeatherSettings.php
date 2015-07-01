<?php

namespace drholera\dhweather\model;

use Yii;

/**
 * This is the model class for table "weather_settings".
 *
 * @property integer $id
 * @property integer $country
 * @property integer $city
 */
class WeatherSettings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'weather_settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
        ];
    }

}
