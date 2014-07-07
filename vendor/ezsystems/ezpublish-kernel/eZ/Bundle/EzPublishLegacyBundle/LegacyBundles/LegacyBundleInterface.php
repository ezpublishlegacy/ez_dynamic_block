<?php
/**
 * File containing the LegacyBundleInterface class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */
namespace eZ\Bundle\EzPublishLegacyBundle\LegacyBundles;

/**
 * By implementing this interface, a bundle can return custom name of legacy extensions that should be injected.
 */
interface LegacyBundleInterface
{
    /**
     * Returns a list of legacy extension names
     *
     * @return array List of legacy extension names to inject to ActiveExtensions
     */
    public function getLegacyExtensionsNames();
}
