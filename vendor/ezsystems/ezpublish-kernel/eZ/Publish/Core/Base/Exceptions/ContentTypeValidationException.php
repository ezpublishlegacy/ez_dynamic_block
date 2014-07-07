<?php
/**
 * File containing the eZ\Publish\Core\Base\Exceptions\ContentTypeValidationException class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\Base\Exceptions;

use eZ\Publish\API\Repository\Exceptions\ContentTypeValidationException as APIContentTypeValidationException;

/**
 * This Exception is thrown on create or update content type when content type is not valid
 */
class ContentTypeValidationException extends APIContentTypeValidationException
{
}
