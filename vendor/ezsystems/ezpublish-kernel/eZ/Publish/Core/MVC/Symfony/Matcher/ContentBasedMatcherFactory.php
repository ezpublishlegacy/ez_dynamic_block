<?php
/**
 * File containing the ContentBasedMatcherFactory class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\Matcher;

use eZ\Publish\Core\MVC\Symfony\Matcher\ContentBased\MatcherInterface as ContentBasedMatcherInterface;
use InvalidArgumentException;

abstract class ContentBasedMatcherFactory extends AbstractMatcherFactory
{
    const MATCHER_RELATIVE_NAMESPACE = 'eZ\\Publish\\Core\\MVC\\Symfony\\Matcher\\ContentBased';

    protected function getMatcher( $matcherIdentifier )
    {
        $matcher = parent::getMatcher( $matcherIdentifier );
        if ( !$matcher instanceof ContentBasedMatcherInterface )
        {
            throw new InvalidArgumentException(
                'Content based Matcher must implement eZ\\Publish\\Core\\MVC\\Symfony\\Matcher\\ContentBased\\MatcherInterface.'
            );
        }

        return $matcher;
    }
}
