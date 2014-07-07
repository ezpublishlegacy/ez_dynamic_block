<?php
/**
 * File containing the Base parser class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\REST\Common\Input;

use eZ\Publish\Core\REST\Common\Input\Parser;
use eZ\Publish\Core\REST\Common\RequestParser;

abstract class BaseParser extends Parser
{
    /**
     * URL handler
     *
     * @var \eZ\Publish\Core\REST\Common\RequestParser
     */
    protected $requestParser;

    public function setRequestParser( RequestParser $requestParser )
    {
        $this->requestParser = $requestParser;
    }
}
