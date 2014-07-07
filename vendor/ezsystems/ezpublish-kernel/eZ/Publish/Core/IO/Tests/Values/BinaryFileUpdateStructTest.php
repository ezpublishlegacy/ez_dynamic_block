<?php
/**
 * File containing the BinaryFileUpdateStructTest class.
 *
 * @copyright Copyright (C) 2013 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\IO\Tests\Values;

use eZ\Publish\Core\IO\Values\BinaryFileUpdateStruct;

class BinaryFileUpdateStructTest extends \PHPUnit_Framework_TestCase
{
    public function testGetInputStream()
    {
        $resource = fopen( __FILE__, 'r' );
        $struct = new BinaryFileUpdateStruct();
        $struct->setInputStream( $resource );
        self::assertSame(
            $resource,
            $struct->getInputStream()
        );
    }
}
