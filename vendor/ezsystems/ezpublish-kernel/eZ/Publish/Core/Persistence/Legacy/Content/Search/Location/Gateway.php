<?php
/**
 * File containing the Search Location Gateway class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\Persistence\Legacy\Content\Search\Location;

use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;

/**
 * Base class for location search gateways.
 */
abstract class Gateway
{
    /**
     * Returns total count and data for all Locations satisfying the parameters.
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Query\Criterion $criterion
     * @param int $offset
     * @param int|null $limit
     * @param \eZ\Publish\API\Repository\Values\Content\Query\SortClause[] $sortClauses
     *
     * @return mixed[][]
     */
    abstract public function find( Criterion $criterion, $offset = 0, $limit = null, array $sortClauses = null );
}
