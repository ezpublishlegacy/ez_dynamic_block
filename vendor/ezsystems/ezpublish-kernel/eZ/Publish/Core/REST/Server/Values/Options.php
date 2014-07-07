<?php
/**
 * File containing the CreatedPolicy class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * Struct representing a resource OPTIONS response
 */
class Options extends ValueObject
{
    /**
     * The methods allowed my the resource
     *
     * @var array
     */
    public $allowedMethods;

    public function __construct( $allowedMethods )
    {
        $this->allowedMethods = $allowedMethods;
    }
}
