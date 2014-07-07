<?php
/**
 * File containing the InstantCachePurgerTest class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Bundle\EzPublishCoreBundle\Tests\Cache\Http;

use eZ\Bundle\EzPublishCoreBundle\Cache\Http\InstantCachePurger;
use eZ\Publish\Core\MVC\Symfony\Cache\Tests\Http\InstantCachePurgerTest as BaseTest;

class InstantCachePurgerTest extends BaseTest
{
    /**
     * @covers eZ\Bundle\EzPublishCoreBundle\Cache\Http\InstantCachePurger::clear
     */
    public function testClear()
    {
        $this
            ->purgeClient
            ->expects( $this->once() )
            ->method( 'purgeAll' );

        $purger = new InstantCachePurger( $this->purgeClient );
        $purger->clear( 'cache/dir/' );
    }
}
