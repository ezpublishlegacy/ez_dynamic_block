<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\Criterion\Location\Visibility class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion\Location;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion\Location;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator\Specifications;
use InvalidArgumentException;

/**
 * A criterion that matches Location based on its visibility
 */
class Visibility extends Location
{
    /**
     * Visibility constant: visible
     */
    const VISIBLE = 0;

    /**
     * Visibility constant: hidden
     */
    const HIDDEN = 1;

    /**
     * Creates a new Visibility criterion
     *
     * @param int $value one of self::VISIBLE and self::HIDDEN
     *
     * @throws \InvalidArgumentException
     */
    public function __construct( $value )
    {
        if ( $value !== self::VISIBLE && $value !== self::HIDDEN )
        {
            throw new InvalidArgumentException( "Invalid visibility value $value" );
        }

        parent::__construct( null, null, $value );
    }

    public function getSpecifications()
    {
        return array(
            new Specifications(
                Operator::EQ,
                Specifications::FORMAT_SINGLE,
                Specifications::TYPE_INTEGER
            ),
        );
    }

    public static function createFromQueryBuilder( $target, $operator, $value )
    {
        return new self( $value );
    }
}
