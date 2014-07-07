<?php
/**
 * File containing the CountryList class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * Country list view model
 */
class CountryList extends RestValue
{
    /**
     * @var \eZ\Publish\API\Repository\Values\ContentType\Countries[]
     */
    public $countries;

    /**
     * Construct
     *
     */
    public function __construct( array $countries )
    {
        $this->countries = $countries;
    }
}
