<?php
/**
 * File containing the ManagerInterface interface.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\Controller;

use eZ\Publish\API\Repository\Values\ValueObject;

interface ManagerInterface
{
    /**
     * Returns a ControllerReference object corresponding to $valueObject and $viewType
     *
     * @param ValueObject $valueObject
     * @param string $viewType
     *
     * @return \Symfony\Component\HttpKernel\Controller\ControllerReference|null
     */
    public function getControllerReference( ValueObject $valueObject, $viewType );
}
