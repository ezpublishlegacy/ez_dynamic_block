<?php
/**
 * File containing the converter interface.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\FieldType\RichText;

use DOMDocument;

/**
 * Interface for rich text conversion.
 */
interface Converter
{
    /**
     * Converts given $xmlDoc into another \DOMDocument object
     *
     * @param \DOMDocument $xmlDoc
     *
     * @return \DOMDocument
     */
    public function convert( DOMDocument $xmlDoc );
}
