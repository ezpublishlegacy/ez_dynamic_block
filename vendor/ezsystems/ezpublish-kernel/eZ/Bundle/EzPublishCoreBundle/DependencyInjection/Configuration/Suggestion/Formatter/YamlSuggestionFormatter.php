<?php
/**
 * File containing the YamlSuggestionFormatter class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Configuration\Suggestion\Formatter;

use eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Configuration\Suggestion\ConfigSuggestion;
use Symfony\Component\Yaml\Yaml;

class YamlSuggestionFormatter implements SuggestionFormatterInterface
{
    public function format( ConfigSuggestion $configSuggestion )
    {
        $yamlConfig = Yaml::dump( $configSuggestion->getSuggestion(), 8 );
        if ( php_sapi_name() !== 'cli' )
        {
            $yamlConfig = "<pre>$yamlConfig</pre>";
        }

        return <<<EOT
{$configSuggestion->getMessage()}


Example:
========

$yamlConfig
EOT;
    }
}
