<?php
/**
 * File containing the LegacyFormulaLoader class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Legacy\Templating;

use Assetic\Factory\Loader\FormulaLoaderInterface;
use Assetic\Factory\Resource\ResourceInterface;

/**
 * This class does nothing.
 * It just avoids Assetic to bark because eztpl doesn't have a formula loader.
 */
class LegacyFormulaLoader implements FormulaLoaderInterface
{
    /**
     * Loads formulae from a resource.
     *
     * Formulae should be loaded the same regardless of the current debug
     * mode. Debug considerations should happen downstream.
     *
     * @param ResourceInterface $resource A resource
     *
     * @return array An array of formulae
     */
    public function load( ResourceInterface $resource )
    {
        return array();
    }
}
