<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\Criterion\Value\MapLocationValue class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 *
 *
 * @package eZ\Publish\API\Repository\Values\Content\Query
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion\Value;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion\Value;

/**
 * Struct that stores extra value information for a MapLocationDistance Criterion object
 * @package eZ\Publish\API\Repository\Values\Content\Query
 */
class MapLocationValue extends Value
{
    /**
     * Latitude of a geographical location
     *
     * @var float
     */
    public $latitude;

    /**
     * Longitude of a geographical location
     *
     * @var float
     */
    public $longitude;

    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct( $latitude, $longitude )
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}
