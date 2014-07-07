<?php
/**
 * File containing the SuggestionCollectorAwareInterface class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Configuration\Suggestion\Collector;

interface SuggestionCollectorAwareInterface
{
    /**
     * Injects SuggestionCollector.
     *
     * @param SuggestionCollectorInterface $suggestionCollector
     */
    public function setSuggestionCollector( SuggestionCollectorInterface $suggestionCollector );
}
