<?php

/*
 * This file is part of the boxywork package.
 *
 * (c) Matthieu Mota <matthieu@boxydev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boxydev\Bundle\CmsBundle\Tests\DependencyInjection;

use Boxydev\Bundle\ThemeBundle\DependencyInjection\BoxydevThemeExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class BoxydevThemeExtensionTest extends TestCase
{
    public function testSimpleLoadExtension()
    {
        $container = new ContainerBuilder();
        $loader = new BoxydevThemeExtension();
        $loader->load([], $container);

        $this->assertInstanceOf(ContainerBuilder::class, $container);
    }
}
