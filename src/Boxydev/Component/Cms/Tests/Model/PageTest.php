<?php

/*
 * This file is part of the boxywork package.
 *
 * (c) Matthieu Mota <matthieu@boxydev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boxydev\Component\Cms\Tests\Model;

use Boxydev\Component\Cms\Model\Page;
use PHPUnit\Framework\TestCase;

class PageTest extends TestCase
{
    public function testId()
    {
        $page = $this->getPage();
        $this->assertNull($page->getId());

        $page->setId(10);
        $this->assertSame(10, $page->getId());
    }

    public function testTitle()
    {
        $page = $this->getPage();
        $this->assertNull($page->getTitle());

        $page->setTitle('Ma page');
        $this->assertSame('Ma page', $page->getTitle());
    }

    public function testSlug()
    {
        $page = $this->getPage();
        $this->assertNull($page->getSlug());

        $page->setSlug('ma-page');
        $this->assertSame('ma-page', $page->getSlug());
    }

    public function testContent()
    {
        $page = $this->getPage();
        $this->assertNull($page->getContent());

        $page->setContent('Lorem ipsum');
        $this->assertSame('Lorem ipsum', $page->getContent());
    }

    public function testCreatedAt()
    {
        $page = $this->getPage();
        $this->assertNull($page->getCreatedAt());

        $page->setCreatedAt(new \DateTime('11/11/11'));
        $this->assertSame('11/11/2011', $page->getCreatedAt()->format('d/m/Y'));
    }

    /**
     * @codeCoverageIgnore
     * @return Page
     */
    protected function getPage()
    {
        return new Page();
    }
}
