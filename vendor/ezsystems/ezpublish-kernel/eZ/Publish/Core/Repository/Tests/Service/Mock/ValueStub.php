<?php
/**
 * File containing the ValueStub class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\Repository\Tests\Service\Mock;

use eZ\Publish\Core\FieldType\Value as BaseValue;

/**
 * Value for TextLine field type
 */
class ValueStub extends BaseValue
{
    /**
     * @var string
     */
    public $value;

    /**
     * Construct a new Value object and initialize it $value
     *
     * @param string $value
     */
    public function __construct( $value )
    {
        $this->value = $value;
    }

    /**
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString()
    {
        return (string)$this->value;
    }
}
