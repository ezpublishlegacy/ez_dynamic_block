<?php
/**
 * File containing the Page ParameterProvider class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\FieldType\Page;

use eZ\Publish\Core\MVC\Symfony\FieldType\View\ParameterProviderInterface;
use eZ\Publish\Core\FieldType\Page\PageService;
use eZ\Publish\API\Repository\Values\Content\Field;

/**
 * View parameter provider for Page fieldtype.
 */
class ParameterProvider implements ParameterProviderInterface
{
    /**
     * @var \eZ\Publish\Core\FieldType\Page\PageService
     */
    protected $pageService;

    public function __construct( PageService $pageService )
    {
        $this->pageService = $pageService;
    }

    public function getViewParameters( Field $field )
    {
        return array(
            'pageService'   => $this->pageService
        );
    }
}
