<?php
/**
 * File containing the eZ\Publish\Core\FieldType\RichText\Converter\Render class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\FieldType\RichText\Converter;

use eZ\Publish\Core\FieldType\RichText\RendererInterface;
use DOMElement;
use DOMNode;

/**
 * Base class for Render converters.
 */
abstract class Render
{
    /**
     * @var \eZ\Publish\Core\FieldType\RichText\RendererInterface
     */
    protected $renderer;

    public function __construct( RendererInterface $renderer )
    {
        $this->renderer = $renderer;
    }

    /**
     * Extracts configuration hash from embed element.
     *
     * @param \DOMElement $embed
     *
     * @return array
     */
    protected function extractConfiguration( DOMElement $embed )
    {
        $hash = array();
        $configElements = $embed->getElementsByTagName( "ezconfig" );

        if ( $configElements->length )
        {
            $hash = $this->extractHash( $configElements->item( 0 ) );
        }

        return $hash;
    }

    /**
     * Recursively extracts data from XML hash structure.
     *
     * @param \DOMNode $configHash
     *
     * @return array
     */
    protected function extractHash( DOMNode $configHash )
    {
        $hash = array();

        foreach ( $configHash->childNodes as $node )
        {
            /** @var \DOMText|\DOMElement $node */
            if ( $node->nodeType === XML_ELEMENT_NODE )
            {
                $hash[$node->getAttribute( "key" )] = $this->extractHash( $node );
            }
            else if ( $node->nodeType === XML_TEXT_NODE && !$node->isWhitespaceInElementContent() )
            {
                return $node->wholeText;
            }
        }

        return $hash;
    }
}
