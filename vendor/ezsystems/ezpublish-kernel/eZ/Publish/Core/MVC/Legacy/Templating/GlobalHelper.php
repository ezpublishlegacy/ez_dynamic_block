<?php
/**
 * File containing the GlobalHelper class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Legacy\Templating;

use eZ\Publish\Core\MVC\Symfony\Templating\GlobalHelper as BaseGlobalHelper;

class GlobalHelper extends BaseGlobalHelper
{
    /**
     * @var \eZ\Publish\Core\MVC\Legacy\Templating\LegacyHelper
     */
    protected $legacyHelper;

    /**
     * @param \eZ\Publish\Core\MVC\Legacy\Templating\LegacyHelper $legacyHelper
     */
    public function setLegacyHelper( LegacyHelper $legacyHelper )
    {
        $this->legacyHelper = $legacyHelper;
    }

    /**
     * @return \eZ\Publish\Core\MVC\Legacy\Templating\LegacyHelper
     */
    public function getLegacy()
    {
        return $this->legacyHelper;
    }
}
