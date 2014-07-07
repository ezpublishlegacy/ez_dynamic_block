<?php
/**
 * File containing a Io Handler test
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\IO\Tests\Handler;

use eZ\Publish\Core\IO\Handler\InMemory;
use eZ\Publish\Core\IO\Tests\Handler\Base as BaseHandlerTest;

/**
 * Handler test
 */
class InMemoryTest extends BaseHandlerTest
{
    /**
     * @return \eZ\Publish\SPI\IO\Handler
     */
    protected function getIOHandler()
    {
        return new InMemory();
    }
}
