<?php

namespace virtualwonders\tablesaw;


use yii\web\AssetBundle;


/**
 * Main YFP TableSawAsset bundle.
 */
class TableSawAsset extends AssetBundle
{
    public $sourcePath = '@vendor/virtualwonders/yii2-tablesaw/dist';
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
