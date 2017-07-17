<?php

namespace app\assets;

use yii\web\AssetBundle;

class TimeLineJSAsset extends AssetBundle
{
    public $css = [
        'https://cdn.knightlab.com/libs/timeline3/latest/css/timeline.css',
    ];
    public $js = [
        'https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js'
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
