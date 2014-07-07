<?php
/**
 * File containing the ContentIdCriterion parser class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\REST\Server\Input\Parser\Criterion;

use eZ\Publish\Core\REST\Common\Input\BaseParser;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;

/**
 * Parser for ViewInput
 */
class UserMetadata extends BaseParser
{
    /**
     * Parses input structure to a Criterion object
     *
     * @param array $data
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     *
     * @throws \eZ\Publish\Core\REST\Common\Exceptions\Parser
     *
     * @return \eZ\Publish\API\Repository\Values\Content\Query\Criterion\UserMetadata
     */
    public function parse( array $data, ParsingDispatcher $parsingDispatcher )
    {
        throw new \Exception( '@todo implement' );
    }
}
