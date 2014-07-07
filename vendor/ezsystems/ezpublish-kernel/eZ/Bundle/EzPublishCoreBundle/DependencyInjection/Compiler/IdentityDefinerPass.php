<?php
/**
 * File containing the IdentityDefinerPas class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class IdentityDefinerPass implements CompilerPassInterface
{
    public function process( ContainerBuilder $container )
    {
        if ( !$container->hasDefinition( 'ezpublish.user.hash_generator' ) )
            return;

        $hashGeneratorDef = $container->getDefinition( 'ezpublish.user.hash_generator' );
        foreach ( $container->findTaggedServiceIds( 'ezpublish.identity_definer' ) as $id => $attributes )
        {
            $hashGeneratorDef->addMethodCall(
                'setIdentityDefiner',
                array( new Reference( $id ) )
            );
        }
    }
}
