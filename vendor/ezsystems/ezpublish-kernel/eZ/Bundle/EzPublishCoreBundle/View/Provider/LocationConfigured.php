<?php
/**
 * File containing the LocationConfigured class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Bundle\EzPublishCoreBundle\View\Provider;

use eZ\Publish\Core\MVC\Symfony\SiteAccess\SiteAccessAware;
use eZ\Publish\Core\MVC\Symfony\SiteAccess;
use eZ\Publish\Core\MVC\Symfony\View\Provider\Location\Configured;

class LocationConfigured extends Configured implements SiteAccessAware
{
    /**
     * Changes SiteAccess.
     *
     * @param SiteAccess $siteAccess
     */
    public function setSiteAccess( SiteAccess $siteAccess = null )
    {
        if ( $this->matcherFactory instanceof SiteAccessAware )
        {
            $this->matcherFactory->setSiteAccess( $siteAccess );
        }
    }
}
