<?php
/**
 * File containing the LocationMatcherFactory class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\Matcher;

use eZ\Publish\API\Repository\Values\Content\Location;
use eZ\Publish\API\Repository\Values\ValueObject;
use InvalidArgumentException;

class LocationMatcherFactory extends ContentBasedMatcherFactory
{
    /**
     * Checks if $valueObject matches $matcher rules.
     *
     * @param \eZ\Publish\Core\MVC\Symfony\Matcher\ContentBased\MatcherInterface $matcher
     * @param ValueObject $valueObject
     *
     * @throws \InvalidArgumentException
     * @return bool
     */
    protected function doMatch( MatcherInterface $matcher, ValueObject $valueObject )
    {
        if ( !$valueObject instanceof Location )
            throw new InvalidArgumentException( 'Value object must be a valid Location instance' );

        return $matcher->matchLocation( $valueObject );
    }
}
