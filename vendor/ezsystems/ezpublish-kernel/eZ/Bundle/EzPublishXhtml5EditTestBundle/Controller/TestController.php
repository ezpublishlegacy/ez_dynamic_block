<?php
/**
 * File containing the TestController class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Bundle\EzPublishXhtml5EditTestBundle\Controller;

use eZ\Bundle\EzPublishCoreBundle\Controller;

class TestController extends Controller
{
    public function testAction( $contentId )
    {
        return $this->render(
            "EzPublishXhtml5EditTestBundle::test.html.twig",
            array(
                "content" => $this->getRepository()->getContentService()->loadContent( $contentId )
            )
        );
    }
}
