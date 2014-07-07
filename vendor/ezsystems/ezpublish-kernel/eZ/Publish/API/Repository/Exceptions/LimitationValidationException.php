<?php
/**
 * File containing the eZ\Publish\API\Repository\Exceptions\LimitationValidationException class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\API\Repository\Exceptions;

/**
 * This Exception is thrown on create, update or assign policy or role
 * when one or more given limitations are not valid
 */
abstract class LimitationValidationException extends ForbiddenException
{
    /**
     * Returns an array of limitation validation error messages
     *
     * @return array
     */
    abstract public function getLimitationErrors();
}
