<?php

declare(strict_types=1);

namespace Yii\DatePicker\Asset\Tests\Provider;

use Yii\DatePicker\Asset\Cdn;

final class CdnAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public function assetBundles(): array
    {
        return [
            [
                'Css',
                Cdn\DatePickerBootstrap5Asset::class,
                Cdn\DatePickerAsset::class,
            ],
            [
                'Css',
                Cdn\DatePickerBulmaAsset::class,
                Cdn\DatePickerAsset::class,
            ],
            [
                'Css',
                Cdn\DatePickerFoundationAsset::class,
                Cdn\DatePickerAsset::class,
            ],
            [
                'Js',
                Cdn\DatePickerAsset::class,
            ],
        ];
    }
}
