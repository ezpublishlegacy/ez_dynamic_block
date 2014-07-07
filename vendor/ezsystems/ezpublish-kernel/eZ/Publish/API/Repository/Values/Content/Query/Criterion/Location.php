<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\Criterion\Location class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 *
 * @package eZ\Publish\API\Repository\Values\Content\Query\Criterion
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\API\Repository\Values\Content\Query\CriterionInterface;

/**
 * This is the base class for Location criterions
 */
abstract class Location extends Criterion implements CriterionInterface
{
}
