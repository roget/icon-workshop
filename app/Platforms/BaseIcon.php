<?php
/**
 * Created by PhpStorm.
 * User: hans
 * Date: 2018/10/4
 * Time: 09:55
 */

namespace App\Platforms;


abstract class BaseIcon extends BaseAsset
{
    public static function getAssetName() {
        return 'Icon';
    }
}
