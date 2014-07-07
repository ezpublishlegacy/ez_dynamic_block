<?php
/**
 * File containing the SeeOther ValueObjectVisitor class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\Output\ValueObjectVisitor;
use eZ\Publish\Core\REST\Common\Output\Generator;
use eZ\Publish\Core\REST\Common\Output\Visitor;

/**
 * SeeOther Value object visitor
 */
class SeeOther extends ValueObjectVisitor
{
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $visitor->setStatus( 303 );
        $visitor->setHeader( 'Location', $data->redirectUri );
    }
}
