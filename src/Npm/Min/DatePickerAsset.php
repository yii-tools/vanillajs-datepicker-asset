<?php

declare(strict_types=1);

namespace Yii\DatePicker\Asset\Npm\Min;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class DatePickerAsset extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@npm/vanillajs-datepicker/dist';
    public array $js = ['js/datepicker-full.min.js'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**js/datepicker-full.min.js',
            ),
        ];
    }
}
