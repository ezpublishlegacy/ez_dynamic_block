<?php
/**
 * This file contains the Aggregate converter class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\FieldType\RichText\Converter;

use eZ\Publish\Core\FieldType\RichText\Converter;
use DOMDocument;

/**
 * Aggregate converter converts using configured converters in prioritized order.
 */
class Aggregate implements Converter
{
    /**
     * An array of converters, sorted by priority.
     *
     * @var \eZ\Publish\Core\FieldType\RichText\Converter[]
     */
    protected $converters = array();

    /**
     * @param \eZ\Publish\Core\FieldType\RichText\Converter[] $converters An array of Converters, sorted by priority
     */
    public function __construct( array $converters = array() )
    {
        $this->converters = $converters;
    }

    /**
     * Performs conversion of the given $document using configured converters.
     *
     * @param \DOMDocument $document
     *
     * @return \DOMDocument
     */
    public function convert( DOMDocument $document )
    {
        foreach ( $this->converters as $converter )
        {
            $document = $converter->convert( $document );
        }

        return $document;
    }
}
