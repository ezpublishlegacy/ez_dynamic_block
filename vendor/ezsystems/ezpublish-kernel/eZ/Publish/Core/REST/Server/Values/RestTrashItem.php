<?php
/**
 * File containing the RestTrashItem class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\API\Repository\Values\Content\TrashItem;
use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * RestTrashItem view model
 */
class RestTrashItem extends RestValue
{
    /**
     * A trash item
     *
     * @var \eZ\Publish\API\Repository\Values\Content\TrashItem
     */
    public $trashItem;

    /**
     * Number of children of the trash item
     *
     * @var int
     */
    public $childCount;

    /**
     * @param \eZ\Publish\API\Repository\Values\Content\TrashItem $trashItem
     * @param int $childCount
     */
    public function __construct( TrashItem $trashItem, $childCount )
    {
        $this->trashItem = $trashItem;
        $this->childCount = $childCount;
    }
}
