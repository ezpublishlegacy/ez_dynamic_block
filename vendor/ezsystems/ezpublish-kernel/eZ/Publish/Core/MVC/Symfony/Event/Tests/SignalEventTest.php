<?php
/**
 * File containing the SignalEventTest class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\Event\Tests;

use eZ\Publish\Core\MVC\Symfony\Event\SignalEvent;
use PHPUnit_Framework_TestCase;

class SignalEventTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers eZ\Publish\Core\MVC\Symfony\Event\SignalEvent::__construct
     * @covers eZ\Publish\Core\MVC\Symfony\Event\SignalEvent::getSignal
     */
    public function testGetSignal()
    {
        $signal = $this->getMock( 'eZ\\Publish\\Core\\SignalSlot\\Signal' );
        $event = new SignalEvent( $signal );
        $this->assertSame( $signal, $event->getSignal() );
    }
}
