<?php
/**
 * File containing the Value abstract class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\FieldType;

use eZ\Publish\API\Repository\Values\ValueObject;
use eZ\Publish\SPI\FieldType\Value as ValueInterface;

/**
 * Abstract class for all field value classes.
 * A field value object is to be understood with associated field type
 */
abstract class Value extends ValueObject implements ValueInterface
{
    /**
     * Returns a string representation of the field value.
     *
     * @return string
     */
    abstract public function __toString();
}
