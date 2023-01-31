<?php

declare(strict_types=1);

namespace Yii\DatePicker\Asset\Npm\Min;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class DatePickerFoundationAsset extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@npm/vanillajs-datepicker';
    public array $css = ['dist/css/datepicker-foundation.min.css'];
    public array $depends = [DatePickerAsset::class];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**/dist/css/datepicker-foundation.min.css',
            ),
        ];
    }
}
