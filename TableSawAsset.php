<?php

namespace virtualwonders\tablesaw;


use yii\web\AssetBundle;


/**
 * Main YFP TableSawAsset bundle.
 */
class TableSawAsset extends AssetBundle
{
    public $sourcePath = '@vendor/virtualwonders/yii2-tablesaw/tablesaw';
    public $js = [
        'js/jquery-ui.min.js',
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
