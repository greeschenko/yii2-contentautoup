<?php

namespace greeschenko\contentautoup;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath = '@greeschenko/contentautoup/assets';
    public $js = [
        'js/contentautoup.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
