<?php
/**
 * File containing the eZ\Publish\Core\IO\Values\BinaryFileCreateStruct class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\IO\Values;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * Create struct for BinaryFile objects
 */
class BinaryFileCreateStruct extends ValueObject
{
    /**
     * URI the binary file should be stored to
     * @var string
     */
    public $id;

    /**
     * The size of the file
     * @var int
     */
    public $size;

    /**
     * the input stream
     * @var resource
     */
    public $inputStream;

    /**
     * The file's mime type
     * If not provided, will be auto-detected by the IOService
     * Example: text/xml
     * @var string
     */
    public $mimeType;
}
