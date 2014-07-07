<?php
/**
 * File containing the IdentityAware interface.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\SPI\User;

/**
 * Interface for "user identity-aware" services.
 */
interface IdentityAware
{
    public function setIdentity( Identity $identity );
}
