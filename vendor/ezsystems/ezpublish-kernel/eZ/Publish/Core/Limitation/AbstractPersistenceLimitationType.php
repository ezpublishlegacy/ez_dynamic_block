<?php
/**
 * File containing the eZ\Publish\Core\Limitation\AbstractPersistenceLimitationType class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\Limitation;

use eZ\Publish\SPI\Persistence\Handler as SPIPersistenceHandler;

/**
 * LocationLimitation is a Content limitation
 */
class AbstractPersistenceLimitationType
{
    /**
     * @var \eZ\Publish\SPI\Persistence\Handler
     */
    protected $persistence;

    /**
     * @param \eZ\Publish\SPI\Persistence\Handler $persistence
     */
    public function __construct( SPIPersistenceHandler $persistence )
    {
        $this->persistence = $persistence;
    }
}
