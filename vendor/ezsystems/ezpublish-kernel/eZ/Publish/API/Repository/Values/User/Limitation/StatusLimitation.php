<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\User\Limitation\StatusLimitation class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\API\Repository\Values\User\Limitation;

use eZ\Publish\API\Repository\Values\User\Limitation;

/**
 * Status Limitation is used to limit the access to Content based on its version status.
 */
class StatusLimitation extends Limitation
{
    /**
     * @see \eZ\Publish\API\Repository\Values\User\Limitation::getIdentifier()
     *
     * @return string
     */
    public function getIdentifier()
    {
        return Limitation::STATUS;
    }
}
