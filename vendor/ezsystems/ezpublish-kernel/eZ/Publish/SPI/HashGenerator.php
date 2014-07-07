<?php
/**
 * File containing the HashGenerator interface.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\SPI;

interface HashGenerator
{
    /**
     * Generates the hash.
     *
     * @return string
     */
    public function generate();
}
