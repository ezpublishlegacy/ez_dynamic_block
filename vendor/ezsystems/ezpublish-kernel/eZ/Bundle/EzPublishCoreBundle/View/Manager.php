<?php
/**
 * File containing the Manager class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Bundle\EzPublishCoreBundle\View;

use eZ\Publish\Core\MVC\Symfony\SiteAccess\SiteAccessAware;
use eZ\Publish\Core\MVC\Symfony\SiteAccess;
use eZ\Publish\Core\MVC\Symfony\View\Manager as BaseManager;

class Manager extends BaseManager implements SiteAccessAware
{
    /**
     * Changes SiteAccess.
     * Passed SiteAccess will be injected in all location/content/block view providers
     * to allow them to change their internal configuration based on this new SiteAccess.
     *
     * @param SiteAccess $siteAccess
     */
    public function setSiteAccess( SiteAccess $siteAccess = null )
    {
        if ( $this->logger )
        {
            $this->logger->debug( 'Changing SiteAccess in view providers' );
        }

        foreach (
            array_merge(
                $this->getAllLocationViewProviders(),
                $this->getAllContentViewProviders(),
                $this->getAllBlockViewProviders()
            )
            as $provider
        )
        {
            if ( $provider instanceof SiteAccessAware )
            {
                $provider->setSiteAccess( $siteAccess );
            }
        }
    }
}
