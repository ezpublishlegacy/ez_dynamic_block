<?php
/**
 * File containing the Null comments provider class.
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace EzSystems\CommentsBundle\Comments\Provider;

use eZ\Publish\API\Repository\Values\Content\ContentInfo;
use EzSystems\CommentsBundle\Comments\ProviderInterface;
use Symfony\Component\HttpFoundation\Request;

class Null implements ProviderInterface
{
    /**
     * Renders the comments list.
     * Comment form might also be included.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param array $options
     *
     * @return string
     */
    public function render( Request $request, array $options = array() )
    {
        return;
    }

    /**
     * Renders the comments list for a given content.
     * Comment form might also be included
     *
     * @param \eZ\Publish\API\Repository\Values\Content\ContentInfo $contentInfo
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param array $options
     *
     * @return mixed
     */
    public function renderForContent( ContentInfo $contentInfo, Request $request, array $options = array() )
    {
        return;
    }
}
