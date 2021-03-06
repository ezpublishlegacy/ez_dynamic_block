<?php
/**
 * File containing the eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map\Host class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map;

use eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher;
use eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map;
use eZ\Publish\Core\MVC\Symfony\Routing\SimplifiedRequest;

class Host extends Map
{
    public function getName()
    {
        return 'host:map';
    }

    /**
     * Injects the request object to match against.
     *
     * @param \eZ\Publish\Core\MVC\Symfony\Routing\SimplifiedRequest $request
     */
    public function setRequest( SimplifiedRequest $request )
    {
        if ( !$this->key )
        {
            $this->setMapKey( $request->host );
        }

        parent::setRequest( $request );
    }

    public function reverseMatch( $siteAccessName )
    {
        $matcher = parent::reverseMatch( $siteAccessName );
        if ( $matcher instanceof Host )
        {
            $matcher->getRequest()->setHost( $matcher->getMapKey() );
        }

        return $matcher;
    }
}
