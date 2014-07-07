<?php
/**
 * File containing the eZ\Publish\Core\IO\Handler\Legacy\FileResourceProvider\eZFSFileHandler class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\IO\Handler\Legacy\FileResourceProvider;

use eZ\Publish\Core\IO\Handler\Legacy\FileResourceProvider;

/**
 * This class provides file resource functionality for a cluster file
 */
class eZFSFileHandler extends BaseHandler implements FileResourceProvider
{
    public function getResource( $storagePath )
    {
        $this->legacyKernel->enterLegacyRootDir();
        $fh = fopen( $storagePath, 'rb' );
        $this->legacyKernel->leaveLegacyRootDir();

        return $fh;
    }
}
