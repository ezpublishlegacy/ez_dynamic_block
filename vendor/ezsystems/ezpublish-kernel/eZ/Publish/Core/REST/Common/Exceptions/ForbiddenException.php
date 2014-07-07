<?php
/**
 * File containing the ForbiddenException class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\REST\Common\Exceptions;

use InvalidArgumentException;

/**
 * Exception thrown if the request is forbidden
 */
class ForbiddenException extends InvalidArgumentException
{
}
