<?php
/**
 * File containing the SignalSlotPass class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use LogicException;
use Symfony\Component\DependencyInjection\Reference;

/**
 * This compiler pass will register slots in SignalDispatcher
 */
class SignalSlotPass implements CompilerPassInterface
{
    public function process( ContainerBuilder $container )
    {
        if ( !$container->hasDefinition( 'ezpublish.signalslot.signal_dispatcher' ) )
            return;

        $signalDispatcherDef = $container->getDefinition( 'ezpublish.signalslot.signal_dispatcher' );
        foreach ( $container->findTaggedServiceIds( 'ezpublish.api.slot' ) as $id => $attributes )
        {
            foreach ( $attributes as $attribute )
            {
                if ( !isset( $attribute['signal'] ) )
                {
                    throw new LogicException( "Could not find 'signal' attribute on '$id' service, which is mandatory for services tagged as 'ezpublish.api.slot'" );
                }

                $signalDispatcherDef->addMethodCall( 'attach', array( $attribute['signal'], new Reference( $id ) ) );
            }
        }
    }
}
