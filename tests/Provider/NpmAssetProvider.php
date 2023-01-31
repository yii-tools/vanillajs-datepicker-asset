<?php

declare(strict_types=1);

namespace Yii\DatePicker\Asset\Tests\Provider;

use Yii\DatePicker\Asset\Npm;

final class NpmAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public function assetBundles(): array
    {
        return [
            [
                'Css',
                Npm\Dev\DatePickerBootstrap5Asset::class,
                Npm\Dev\DatePickerAsset::class,
            ],
            [
                'Css',
                Npm\Dev\DatePickerBulmaAsset::class,
                Npm\Dev\DatePickerAsset::class,
            ],
            [
                'Css',
                Npm\Dev\DatePickerFoundationAsset::class,
                Npm\Dev\DatePickerAsset::class,
            ],
            [
                'Js',
                Npm\Dev\DatePickerAsset::class,
            ],
            [
                'Css',
                Npm\Min\DatePickerBootstrap5Asset::class,
                Npm\Min\DatePickerAsset::class,
            ],
            [
                'Css',
                Npm\Min\DatePickerBulmaAsset::class,
                Npm\Min\DatePickerAsset::class,
            ],
            [
                'Css',
                Npm\Min\DatePickerFoundationAsset::class,
                Npm\Min\DatePickerAsset::class,
            ],
            [
                'Js',
                Npm\Min\DatePickerAsset::class,
            ],
        ];
    }
}
