<?php
/**
 * File containing the MatcherInterface interface.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\Matcher\Block;

use eZ\Publish\Core\FieldType\Page\Parts\Block;
use eZ\Publish\Core\MVC\Symfony\Matcher\MatcherInterface as BaseMatcherInterface;

/**
 * Main interface for block matchers.
 */
interface MatcherInterface extends BaseMatcherInterface
{
    /**
     * Checks if a Block object matches.
     *
     * @param \eZ\Publish\Core\FieldType\Page\Parts\Block $block
     *
     * @return boolean
     */
    public function matchBlock( Block $block );
}
