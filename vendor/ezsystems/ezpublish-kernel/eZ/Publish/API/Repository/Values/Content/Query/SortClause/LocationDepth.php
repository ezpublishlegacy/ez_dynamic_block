<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\SortClause\LocationDepth class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\SortClause;

use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\API\Repository\Values\Content\Query\SortClause;

/**
 * Sets sort direction on the location depth string for a content query
 *
 * @deprecated Since 5.3, use Location search instead
 */
class LocationDepth extends SortClause
{
    /**
     * Constructs a new LocationDepth SortClause
     * @param string $sortDirection
     *
     * @deprecated Since 5.3, use Location search instead
     */
    public function __construct( $sortDirection = Query::SORT_ASC )
    {
        parent::__construct( 'location_depth', $sortDirection );
    }
}
