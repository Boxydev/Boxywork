<?php

/*
 * This file is part of the boxywork package.
 *
 * (c) Matthieu Mota <matthieu@boxydev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boxydev\Bundle\CmsBundle\Tests;

use Boxydev\Bundle\ThemeBundle\BoxydevThemeBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class BoxydevThemeBundleTest extends TestCase
{
    public function testBundleCanBuild()
    {
        $bundle = new BoxydevThemeBundle();
        $container = new ContainerBuilder();
        $bundle->build($container);

        $this->assertInstanceOf(ContainerBuilder::class, $container);
    }
}
