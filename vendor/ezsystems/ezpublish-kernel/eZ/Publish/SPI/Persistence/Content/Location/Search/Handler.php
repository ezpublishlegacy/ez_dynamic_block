<?php
/**
 * File containing the Location Search Handler interface
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\SPI\Persistence\Content\Location\Search;

use eZ\Publish\API\Repository\Values\Content\LocationQuery;

/**
 * The Location Search Handler interface defines search operations on Location elements in the storage engine.
 */
interface Handler
{
    /**
     * Finds locations for the given $query
     *
     * @param \eZ\Publish\API\Repository\Values\Content\LocationQuery $query
     */
    public function findLocations( LocationQuery $query );
}
