<?php
/**
 * File containing the MetadataHandler class.
 *
 * @copyright Copyright (C) 2013 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */
namespace eZ\Publish\Core\IO;

interface MetadataHandler
{
    /**
     * Extracts metadata for the file identified by $path
     * @param string $path
     *
     * @return array Metadata hash
     */
    public function extract( $path );
}
