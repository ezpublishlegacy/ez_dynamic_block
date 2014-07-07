<?php
/**
 * File containing the InstantCachePurger class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Bundle\EzPublishCoreBundle\Cache\Http;

use eZ\Publish\Core\MVC\Symfony\Cache\Http\InstantCachePurger as BasePurger;
use Symfony\Component\HttpKernel\CacheClearer\CacheClearerInterface;

class InstantCachePurger extends BasePurger implements CacheClearerInterface
{
    /**
     * Clears any caches necessary.
     *
     * @param string $cacheDir The cache directory.
     */
    public function clear( $cacheDir )
    {
        $this->purgeAll();
    }
}
