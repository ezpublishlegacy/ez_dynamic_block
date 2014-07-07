<?php
/**
 * File containing the UserInterface class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\Security;

use eZ\Publish\API\Repository\Values\User\User as APIUser;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Interface for Repository based users.
 */
interface UserInterface extends AdvancedUserInterface
{
    /**
     * @return \eZ\Publish\API\Repository\Values\User\User
     */
    public function getAPIUser();

    /**
     * @param \eZ\Publish\API\Repository\Values\User\User $apiUser
     */
    public function setAPIUser( APIUser $apiUser );
}
