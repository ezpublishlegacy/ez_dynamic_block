<?php
/**
 * File containing the WebHandler class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Legacy\Kernel;

use Symfony\Component\HttpFoundation\Request;
use eZURI;

/**
 * URIFixer is a helper class you can use to "align" legacy eZURI against current Symfony Request object.
 * i.e. Inject correct Pathinfo that has been already processed within Symfony (with SiteAccess detection).
 */
class URIHelper
{
    /**
     * Fixes up legacy eZURI against current request.
     *
     * @param Request $request
     */
    public function updateLegacyURI( Request $request )
    {
        $uri = eZURI::instance();
        $uri->setURIString(
            $request->attributes->get(
                'semanticPathinfo',
                $request->getPathinfo()
            ) . $request->attributes->get( 'viewParametersString' )
        );
    }
}
