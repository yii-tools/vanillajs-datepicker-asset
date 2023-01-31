<?php

declare(strict_types=1);

namespace Yii\DatePicker\Asset\Cdn;

use Yiisoft\Assets\AssetBundle;

final class DatePickerBulmaAsset extends AssetBundle
{
    public bool $cdn = true;
    public array $css = ['https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker-bulma.min.css'];
    public array $depends = [DatePickerAsset::class];
}
