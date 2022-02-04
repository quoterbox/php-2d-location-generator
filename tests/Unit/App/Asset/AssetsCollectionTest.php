<?php

namespace Test\Unit\App\Asset;

use App\Asset\AssetsCollection;
use PHPUnit\Framework\TestCase;

class AssetsCollectionTest extends TestCase
{
    public function testCountGetAssetsWithExtension()
    {
        $assets = (self::createAssetFilesCollectionWithExtension())->getAssets();
        self::assertCount(5, $assets);
    }

    public function testGetAssetNameWithExtension()
    {
        $assets = (self::createAssetFilesCollectionWithExtension())->getAssets();
        self::assertEquals('1_0_G_R_R_R.png', $assets[0]->getNameExt());
        self::assertEquals('1_0_R_G_R_R.png', $assets[1]->getNameExt());
        self::assertEquals('1_0_R_R_G_R.png', $assets[2]->getNameExt());
        self::assertEquals('1_0_R_R_R_G.png', $assets[3]->getNameExt());
        self::assertEquals('3_1_G.png', $assets[4]->getNameExt());
    }

    public function testGetAssetPathWithExtension()
    {
        $assets = (self::createAssetFilesCollectionWithExtension())->getAssets();
        self::assertEquals('src\public\assets\Test\1_0_G_R_R_R.png', $assets[0]->getPath());
        self::assertEquals('src\public\assets\Test\1_0_R_G_R_R.png', $assets[1]->getPath());
        self::assertEquals('src\public\assets\Test\1_0_R_R_G_R.png', $assets[2]->getPath());
        self::assertEquals('src\public\assets\Test\1_0_R_R_R_G.png', $assets[3]->getPath());
        self::assertEquals('src\public\assets\Test\3_1_G.png', $assets[4]->getPath());
    }

    private static function createAssetFilesCollectionWithExtension() : AssetsCollection
    {
        return new AssetsCollection('src\public\assets\Test\\', 'png');
    }

    public function testCountGetAssetsNoExtension()
    {
        $assets = (self::createAssetFilesCollectionNoExtension())->getAssets();
        self::assertCount(8, $assets);
    }

    public function testGetAssetNameNoExtension()
    {
        $assets = (self::createAssetFilesCollectionNoExtension())->getAssets();
        self::assertEquals('1_0_G_G_R_R.jpg', $assets[0]->getNameExt());
        self::assertEquals('1_0_G_R_R_R.png', $assets[1]->getNameExt());
        self::assertEquals('1_0_R_G_G_R.jpg', $assets[2]->getNameExt());
        self::assertEquals('1_0_R_G_R_R.png', $assets[3]->getNameExt());
        self::assertEquals('1_0_R_R_G_R.png', $assets[4]->getNameExt());
        self::assertEquals('1_0_R_R_R_G.png', $assets[5]->getNameExt());
        self::assertEquals('2_1_G.gif', $assets[6]->getNameExt());
        self::assertEquals('3_1_G.png', $assets[7]->getNameExt());
    }

    public function testGetAssetPathNoExtension()
    {
        $assets = (self::createAssetFilesCollectionNoExtension())->getAssets();
        self::assertEquals('src\public\assets\Test\1_0_G_G_R_R.jpg', $assets[0]->getPath());
        self::assertEquals('src\public\assets\Test\1_0_G_R_R_R.png', $assets[1]->getPath());
        self::assertEquals('src\public\assets\Test\1_0_R_G_G_R.jpg', $assets[2]->getPath());
        self::assertEquals('src\public\assets\Test\1_0_R_G_R_R.png', $assets[3]->getPath());
        self::assertEquals('src\public\assets\Test\1_0_R_R_G_R.png', $assets[4]->getPath());
        self::assertEquals('src\public\assets\Test\1_0_R_R_R_G.png', $assets[5]->getPath());
        self::assertEquals('src\public\assets\Test\2_1_G.gif', $assets[6]->getPath());
        self::assertEquals('src\public\assets\Test\3_1_G.png', $assets[7]->getPath());
    }

    private static function createAssetFilesCollectionNoExtension() : AssetsCollection
    {
        return new AssetsCollection('src\public\assets\Test\\');
    }
}