<?php
/**
 * File containing the abstract Limitation handler
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\Persistence\Legacy\User\Role;

use eZ\Publish\Core\Persistence\Database\DatabaseHandler;
use eZ\Publish\SPI\Persistence\User\Policy;

/**
 * Limitation Handler
 *
 * Takes care of Converting a Policy limitation from Legacy value to spi value accepted by API.
 */
abstract class LimitationHandler
{
    /**
     * Database handler
     *
     * @var \eZ\Publish\Core\Persistence\Database\DatabaseHandler
     */
    protected $dbHandler;

    /**
     * Creates a new criterion handler
     *
     * @param \eZ\Publish\Core\Persistence\Database\DatabaseHandler $dbHandler
     */
    public function __construct( DatabaseHandler $dbHandler )
    {
        $this->dbHandler = $dbHandler;
    }

    /**
     * @param Policy $policy
     */
    abstract public function toLegacy( Policy $policy );

    /**
     * @param Policy $policy
     */
    abstract public function toSPI( Policy $policy );
}
