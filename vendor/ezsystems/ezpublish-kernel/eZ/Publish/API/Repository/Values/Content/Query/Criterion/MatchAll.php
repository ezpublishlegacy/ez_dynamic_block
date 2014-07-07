<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\Criterion\MatchAll class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\API\Repository\Values\Content\Query\CriterionInterface;

/**
 * A criterion that just matches everything
 */
class MatchAll extends Criterion implements CriterionInterface
{
    /**
     * Creates a new MatchAll criterion
     */
    public function __construct()
    {
        // Do NOT call parent constructor. It tries to be too smart.
    }

    public function getSpecifications()
    {
        return array();
    }

    public static function createFromQueryBuilder( $target, $operator, $value )
    {
        return new self();
    }
}
