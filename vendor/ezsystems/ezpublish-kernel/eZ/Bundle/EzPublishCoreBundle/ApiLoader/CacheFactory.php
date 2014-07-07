<?php
/**
 * File containing the CacheFactory class.
 *
 * @copyright Copyright (C) 2013 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */
namespace eZ\Bundle\EzPublishCoreBundle\ApiLoader;

use eZ\Publish\Core\MVC\ConfigResolverInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Class CacheFactory
 *
 * Service "ezpublish.cache_pool", selects a Stash cache service based on siteaccess[-group] setting "cache_pool_name"
 */
class CacheFactory extends ContainerAware
{
    /**
     * @param ConfigResolverInterface $configResolver
     *
     * @return \Stash\Interfaces\PoolInterface
     */
    public function getCachePool( ConfigResolverInterface $configResolver )
    {
        return $this->container->get( sprintf( 'stash.%s_cache', $configResolver->getParameter( "cache_pool_name" ) ) );
    }
}
