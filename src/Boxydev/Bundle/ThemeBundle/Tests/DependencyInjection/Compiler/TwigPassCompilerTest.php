<?php

/*
 * This file is part of the boxywork package.
 *
 * (c) Matthieu Mota <matthieu@boxydev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boxydev\Bundle\CmsBundle\Tests\DependencyInjection\Compiler;

use Boxydev\Bundle\ThemeBundle\DependencyInjection\Compiler\TwigPass;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class TwigPassCompilerTest extends TestCase
{
    public function testProcess()
    {
        $container = new ContainerBuilder();

        $container->register('twig.loader.chain', stdClass::class);

        $twigPass = new TwigPass();
        $twigPass->process($container);

        $methodCalls = $container->getDefinition('twig.loader.chain')->getMethodCalls();
        $this->assertCount(1, $methodCalls);
        $this->assertContains('addLoader', $methodCalls[0]);
    }
}
