<?php
namespace drholera\dhweather;


use Yii;
use yii\base\InvalidConfigException;
use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'drholera\dhweather\controllers';

    const VERSION = '1.0.0-dev';

    public function init()
    {
        parent::init();
    }
}