<?php
/**
 * File containing the View\Provider\Block\Configured class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\View\Provider\Block;

use eZ\Publish\Core\MVC\Symfony\View\Provider\Configured as BaseConfigured;
use eZ\Publish\Core\MVC\Symfony\View\Provider\Block as BlockProvider;
use eZ\Publish\Core\FieldType\Page\Parts\Block;

class Configured extends BaseConfigured implements BlockProvider
{
    /**
     * Returns a ContentView object corresponding to $block, or null if not applicable
     *
     * @param \eZ\Publish\Core\FieldType\Page\Parts\Block $block
     *
     * @return \eZ\Publish\Core\MVC\Symfony\View\ContentView|null
     */
    public function getView( Block $block )
    {
        $viewConfig = $this->matcherFactory->match( $block, 'block' );
        if ( empty( $viewConfig ) )
        {
            return;
        }

        return $this->buildContentView( $viewConfig );
    }
}
