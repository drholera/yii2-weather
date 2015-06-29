<?php

namespace drholera\Dhweather\model;

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
            [['country', 'city'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'city' => 'City',
        ];
    }

}
