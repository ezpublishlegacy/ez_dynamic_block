<?php
/**
 * File containing the FragmentPass class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Tweaks Symfony fragment framework.
 */
class FragmentPass implements CompilerPassInterface
{
    public function process( ContainerBuilder $container )
    {
        if (
            !(
                $container->hasDefinition( 'fragment.listener' )
                && $container->hasDefinition( 'ezpublish.decorated_fragment_renderer' )
            )
        )
        {
            return null;
        }

        $fragmentListenerDef = $container->findDefinition( 'fragment.listener' );
        $fragmentListenerDef
            ->setFactoryService( 'ezpublish.fragment_listener.factory' )
            ->setFactoryMethod( 'buildFragmentListener' )
            ->addArgument( '%fragment.listener.class%' );

        // Looping over all fragment renderers to decorate them
        // This is to make sure they are siteaccess aware (siteaccess is serialized in rendered path).
        foreach ( $container->findTaggedServiceIds( 'kernel.fragment_renderer' ) as $id => $attributes )
        {
            $renamedId = "$id.inner";
            $definition = $container->getDefinition( $id );
            $public = $definition->isPublic();
            $tags = $definition->getTags();
            $definition->setPublic( false );
            $container->setDefinition( $renamedId, $definition );

            $decoratedDef = new DefinitionDecorator( 'ezpublish.decorated_fragment_renderer' );
            $decoratedDef->setArguments( array( new Reference( $renamedId ) ) );
            $decoratedDef->setPublic( $public );
            $decoratedDef->setTags( $tags );
            // Special treatment for inline fragment renderer, to fit ESI renderer constructor type hinting (forced to InlineFragmentRenderer)
            if ( $id === 'fragment.renderer.inline' )
            {
                $decoratedDef->setClass( $container->getParameter( 'ezpublish.decorated_fragment_renderer.inline.class' ) );
            }

            $container->setDefinition( $id, $decoratedDef );
        }
    }
}
