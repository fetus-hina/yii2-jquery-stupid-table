<?php
/**
 * @copyright Copyright (C) 2016 AIZAWA Hina
 * @license https://github.com/fetus-hina/yii2-jquery-stupid-table/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

namespace jp3cki\yii2\jqueryStupidTable;

use yii\web\AssetBundle;

class JqueryStupidTableAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-stupid-table';
    public $js = [
        'stupidtable.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
