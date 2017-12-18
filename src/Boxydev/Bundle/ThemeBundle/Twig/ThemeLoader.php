<?php

/*
 * This file is part of the boxywork package.
 *
 * (c) Matthieu Mota <matthieu@boxydev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boxydev\Bundle\ThemeBundle\Twig;

class ThemeLoader extends \Twig_Loader_Filesystem
{
    /**
     * @var \Twig_LoaderInterface
     */
    private $loader;

    public function __construct(\Twig_LoaderInterface $loader)
    {
        parent::__construct();

        $this->loader = $loader;
    }

    /**
     * Returns the source context for a given template logical name.
     *
     * @param string $name The template logical name
     *
     * @return \Twig_Source
     *
     * @throws \Twig_Error_Loader When $name is not found
     */
    public function getSourceContext($name)
    {
        die('ti');
        // TODO: Implement getSourceContext() method.
    }

    /**
     * Gets the cache key to use for the cache for a given template name.
     *
     * @param string $name The name of the template to load
     *
     * @return string The cache key
     *
     * @throws \Twig_Error_Loader When $name is not found
     */
    public function getCacheKey($name)
    {
        return parent::getCacheKey($name);
    }

    /**
     * Returns true if the template is still fresh.
     *
     * @param string $name The template name
     * @param int $time Timestamp of the last modification time of the
     *                     cached template
     *
     * @return bool true if the template is fresh, false otherwise
     *
     * @throws \Twig_Error_Loader When $name is not found
     */
    public function isFresh($name, $time)
    {
        return parent::isFresh($name, $time);
    }

    /**
     * Check if we have the source code of a template, given its name.
     *
     * @param string $name The name of the template to check if we can load
     *
     * @return bool If the template source code is handled by this loader or not
     */
    public function exists($name)
    {
        return parent::exists($name);
    }
}
