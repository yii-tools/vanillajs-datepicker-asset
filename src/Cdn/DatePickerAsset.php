<?php

declare(strict_types=1);

namespace Yii\DatePicker\Asset\Cdn;

use Yiisoft\Assets\AssetBundle;

final class DatePickerAsset extends AssetBundle
{
    public bool $cdn = true;
    public array $js = ['https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker-full.min.js'];
}
