<?php
/**
 * File containing the FileResourceProvider interface.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\IO\Handler\Legacy;

/**
 * This interface handles providing of a file resource based on a stored cluster path
 */

interface FileResourceProvider
{
    /**
     * Returns a read file resource for legacy path $path
     * @param string $storagePath
     * @return resource
     */
    public function getResource( $storagePath );
}
