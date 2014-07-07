<?php
/**
 * File containing the ContentHandler implementation
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\Persistence\Cache;

use eZ\Publish\SPI\Persistence\Handler as PersistenceHandler;

/**
 * Class AbstractHandler
 *
 * Abstract handler for use in other Persistence Cache Handlers.
 */
abstract class AbstractHandler
{
    /**
     * @var \eZ\Publish\Core\Persistence\Cache\CacheServiceDecorator
     */
    protected $cache;

    /**
     * @var \eZ\Publish\SPI\Persistence\Handler
     */
    protected $persistenceHandler;

    /**
     * @var \eZ\Publish\Core\Persistence\Cache\PersistenceLogger
     */
    protected $logger;

    /**
     * Setups current handler with everything needed
     *
     * @param \eZ\Publish\Core\Persistence\Cache\CacheServiceDecorator $cache
     * @param \eZ\Publish\SPI\Persistence\Handler $persistenceHandler
     * @param \eZ\Publish\Core\Persistence\Cache\PersistenceLogger $logger
     */
    public function __construct(
        CacheServiceDecorator $cache,
        PersistenceHandler $persistenceHandler,
        PersistenceLogger $logger
    )
    {
        $this->cache = $cache;
        $this->persistenceHandler = $persistenceHandler;
        $this->logger = $logger;
    }
}
