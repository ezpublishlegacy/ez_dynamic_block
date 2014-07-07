<?php
/**
 * File containing the LocationSearchHandler implementation
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\Persistence\Cache;

use eZ\Publish\API\Repository\Values\Content\LocationQuery;
use eZ\Publish\SPI\Persistence\Content\Location\Search\Handler as LocationSearchHandlerInterface;

/**
 * @see eZ\Publish\SPI\Persistence\Content\Location\Search\Handler
 */
class LocationSearchHandler extends AbstractHandler implements LocationSearchHandlerInterface
{
    /**
     * Finds locations for given $query.
     *
     * @param \eZ\Publish\API\Repository\Values\Content\LocationQuery $query
     */
    public function findLocations( LocationQuery $query )
    {
        $this->logger->logCall( __METHOD__, array( 'query' => $query ) );
        return $this->persistenceHandler->locationSearchHandler()->findLocations( $query );
    }
}
