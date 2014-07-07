<?php
/**
 * File containing the ConfiguredLocalImageService class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\File;

use eZ\Publish\Core\FieldType\FileService\LegacyFileService as BaseFileService;
use eZ\Publish\Core\MVC\ConfigResolverInterface;

/**
 * Configuration aware local file service for Image FieldType storage
 */
class ConfiguredLocalImageService extends BaseFileService
{
    public function __construct( \Closure $kernelClosure, ConfigResolverInterface $resolver, $installDir )
    {
        parent::__construct(
            $kernelClosure,
            $installDir,
            '',
            sprintf(
                '%s/%s/images',
                $resolver->getParameter( 'var_dir' ),
                $resolver->getParameter( 'storage_dir' )
            )
        );
    }
}
