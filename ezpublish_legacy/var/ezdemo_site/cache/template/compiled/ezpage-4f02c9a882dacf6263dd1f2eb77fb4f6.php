<?php
// URI:       design:content/datatype/edit/ezpage.tpl
// Filename:  extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl
// Timestamp: 1404662622 (Sun Jul 6 9:03:42 PDT 2014)
$oldSetArray_0762cb8088aac8ca78472ab89d31f499 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/ezdemo_site/cache/template/compiled/common.php' );

// def $zone_id
if ( $tpl->hasVariable( 'zone_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'zone_id' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'zone_id', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'zone_id', '', $rootNamespace );
}

// def $block_id
if ( $tpl->hasVariable( 'block_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'block_id' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'block_id', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'block_id', '', $rootNamespace );
}

// def $item_id
if ( $tpl->hasVariable( 'item_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'item_id' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'item_id', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'item_id', '', $rootNamespace );
}

// def $zone_names
if ( $tpl->hasVariable( 'zone_names', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'zone_names' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'zone_names', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'zone_names', array (
), $rootNamespace );
}

// def $zone_layout
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'zone_layout' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "content" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "zone_layout" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = '';
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'zone_layout', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'zone_layout' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'zone_layout', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'zone_layout', $var, $rootNamespace );
}

// def $allowed_zones
unset( $var );
$var = call_user_func_array( array( new eZFlowFunctionCollection(), 'fetchAllowedZones' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'allowed_zones', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'allowed_zones' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'allowed_zones', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'allowed_zones', $var, $rootNamespace );
}

// def $can_change_layout
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "ezflow",
    'function' => "changelayout",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_change_layout', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_change_layout' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'can_change_layout', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_change_layout', $var, $rootNamespace );
}

// def $current_user
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchCurrentUser' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_user', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_user' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'current_user', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_user', $var, $rootNamespace );
}

// def $content_object
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentObject' ),
  array(     'object_id' => $var1,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'content_object', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_object' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'content_object', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_object', $var, $rootNamespace );
}

// def $policies
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchUserRole' ),
  array(     'user_id' => $var1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'policies', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'policies' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'policies', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'policies', $var, $rootNamespace );
}

// def $layout_for_current_class
if ( $tpl->hasVariable( 'layout_for_current_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'layout_for_current_class' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 11,
    1 => 40,
    2 => 642,
  ),
  2 => 'extension/ezflow/design/standard/templates/content/datatype/edit/ezpage.tpl',
) );
    $tpl->setVariable( 'layout_for_current_class', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'layout_for_current_class', false, $rootNamespace );
}

$text .= '
     ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_9 ) ) $fe_variable_stack_53b1913555aee437eb89558ad525eb77_9 = array();
$fe_variable_stack_53b1913555aee437eb89558ad525eb77_9[] = compact( 'fe_array_53b1913555aee437eb89558ad525eb77_9', 'fe_array_keys_53b1913555aee437eb89558ad525eb77_9', 'fe_n_items_53b1913555aee437eb89558ad525eb77_9', 'fe_n_items_processed_53b1913555aee437eb89558ad525eb77_9', 'fe_i_53b1913555aee437eb89558ad525eb77_9', 'fe_key_53b1913555aee437eb89558ad525eb77_9', 'fe_val_53b1913555aee437eb89558ad525eb77_9', 'fe_offset_53b1913555aee437eb89558ad525eb77_9', 'fe_max_53b1913555aee437eb89558ad525eb77_9', 'fe_reverse_53b1913555aee437eb89558ad525eb77_9', 'fe_first_val_53b1913555aee437eb89558ad525eb77_9', 'fe_last_val_53b1913555aee437eb89558ad525eb77_9' );
unset( $fe_array_53b1913555aee437eb89558ad525eb77_9 );
unset( $fe_array_53b1913555aee437eb89558ad525eb77_9 );
$fe_array_53b1913555aee437eb89558ad525eb77_9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policies'] : null;
if (! isset( $fe_array_53b1913555aee437eb89558ad525eb77_9 ) ) $fe_array_53b1913555aee437eb89558ad525eb77_9 = NULL;
while ( is_object( $fe_array_53b1913555aee437eb89558ad525eb77_9 ) and method_exists( $fe_array_53b1913555aee437eb89558ad525eb77_9, 'templateValue' ) )
    $fe_array_53b1913555aee437eb89558ad525eb77_9 = $fe_array_53b1913555aee437eb89558ad525eb77_9->templateValue();

$fe_array_keys_53b1913555aee437eb89558ad525eb77_9 = is_array( $fe_array_53b1913555aee437eb89558ad525eb77_9 ) ? array_keys( $fe_array_53b1913555aee437eb89558ad525eb77_9 ) : array();
$fe_n_items_53b1913555aee437eb89558ad525eb77_9 = count( $fe_array_keys_53b1913555aee437eb89558ad525eb77_9 );
$fe_n_items_processed_53b1913555aee437eb89558ad525eb77_9 = 0;
$fe_offset_53b1913555aee437eb89558ad525eb77_9 = 0;
$fe_max_53b1913555aee437eb89558ad525eb77_9 = $fe_n_items_53b1913555aee437eb89558ad525eb77_9 - $fe_offset_53b1913555aee437eb89558ad525eb77_9;
$fe_reverse_53b1913555aee437eb89558ad525eb77_9 = false;
if ( $fe_offset_53b1913555aee437eb89558ad525eb77_9 < 0 || $fe_offset_53b1913555aee437eb89558ad525eb77_9 >= $fe_n_items_53b1913555aee437eb89558ad525eb77_9 )
{
    $fe_offset_53b1913555aee437eb89558ad525eb77_9 = ( $fe_offset_53b1913555aee437eb89558ad525eb77_9 < 0 ) ? 0 : $fe_n_items_53b1913555aee437eb89558ad525eb77_9;
    if ( $fe_n_items_53b1913555aee437eb89558ad525eb77_9 || $fe_offset_53b1913555aee437eb89558ad525eb77_9 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_53b1913555aee437eb89558ad525eb77_9'. Array count: $fe_n_items_53b1913555aee437eb89558ad525eb77_9");   
}
}
if ( $fe_max_53b1913555aee437eb89558ad525eb77_9 < 0 || $fe_offset_53b1913555aee437eb89558ad525eb77_9 + $fe_max_53b1913555aee437eb89558ad525eb77_9 > $fe_n_items_53b1913555aee437eb89558ad525eb77_9 )
{
    if ( $fe_max_53b1913555aee437eb89558ad525eb77_9 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_53b1913555aee437eb89558ad525eb77_9");
    $fe_max_53b1913555aee437eb89558ad525eb77_9 = $fe_n_items_53b1913555aee437eb89558ad525eb77_9 - $fe_offset_53b1913555aee437eb89558ad525eb77_9;
}
if ( $fe_reverse_53b1913555aee437eb89558ad525eb77_9 )
{
    $fe_first_val_53b1913555aee437eb89558ad525eb77_9 = $fe_n_items_53b1913555aee437eb89558ad525eb77_9 - 1 - $fe_offset_53b1913555aee437eb89558ad525eb77_9;
    $fe_last_val_53b1913555aee437eb89558ad525eb77_9  = 0;
}
else
{
    $fe_first_val_53b1913555aee437eb89558ad525eb77_9 = $fe_offset_53b1913555aee437eb89558ad525eb77_9;
    $fe_last_val_53b1913555aee437eb89558ad525eb77_9  = $fe_n_items_53b1913555aee437eb89558ad525eb77_9 - 1;
}
// foreach
for ( $fe_i_53b1913555aee437eb89558ad525eb77_9 = $fe_first_val_53b1913555aee437eb89558ad525eb77_9; $fe_n_items_processed_53b1913555aee437eb89558ad525eb77_9 < $fe_max_53b1913555aee437eb89558ad525eb77_9 && ( $fe_reverse_53b1913555aee437eb89558ad525eb77_9 ? $fe_i_53b1913555aee437eb89558ad525eb77_9 >= $fe_last_val_53b1913555aee437eb89558ad525eb77_9 : $fe_i_53b1913555aee437eb89558ad525eb77_9 <= $fe_last_val_53b1913555aee437eb89558ad525eb77_9 ); $fe_reverse_53b1913555aee437eb89558ad525eb77_9 ? $fe_i_53b1913555aee437eb89558ad525eb77_9-- : $fe_i_53b1913555aee437eb89558ad525eb77_9++ )
{
$fe_key_53b1913555aee437eb89558ad525eb77_9 = $fe_array_keys_53b1913555aee437eb89558ad525eb77_9[$fe_i_53b1913555aee437eb89558ad525eb77_9];
$fe_val_53b1913555aee437eb89558ad525eb77_9 = $fe_array_53b1913555aee437eb89558ad525eb77_9[$fe_key_53b1913555aee437eb89558ad525eb77_9];
$vars[$rootNamespace]['policy'] = $fe_val_53b1913555aee437eb89558ad525eb77_9;
$text .= '        ';
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_49 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_491 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_492 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_493 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_53b1913555aee437eb89558ad525eb77_494 = compiledFetchAttribute( $elseif_cond_53b1913555aee437eb89558ad525eb77_493, 'moduleName' );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_493 = $elseif_cond_53b1913555aee437eb89558ad525eb77_494;
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_493, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = $elseif_cond_53b1913555aee437eb89558ad525eb77_493->templateValue();
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_493, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = $elseif_cond_53b1913555aee437eb89558ad525eb77_493->templateValue();
$elseif_cond_53b1913555aee437eb89558ad525eb77_492 = ( ( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 ) == ( '*' ) );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_492 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_492 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_492 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_492, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_492 = $elseif_cond_53b1913555aee437eb89558ad525eb77_492->templateValue();
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_494 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_53b1913555aee437eb89558ad525eb77_495 = compiledFetchAttribute( $elseif_cond_53b1913555aee437eb89558ad525eb77_494, 'functionName' );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_494 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495;
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_494, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = $elseif_cond_53b1913555aee437eb89558ad525eb77_494->templateValue();
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_494, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = $elseif_cond_53b1913555aee437eb89558ad525eb77_494->templateValue();
$elseif_cond_53b1913555aee437eb89558ad525eb77_493 = ( ( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) == ( '*' ) );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_493, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = $elseif_cond_53b1913555aee437eb89558ad525eb77_493->templateValue();
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_495 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_53b1913555aee437eb89558ad525eb77_496 = compiledFetchAttribute( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'limitation' );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_496;
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495->templateValue();
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495->templateValue();
$elseif_cond_53b1913555aee437eb89558ad525eb77_494 = ( ( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) == ( '*' ) );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_494, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = $elseif_cond_53b1913555aee437eb89558ad525eb77_494->templateValue();
if ( !$elseif_cond_53b1913555aee437eb89558ad525eb77_492 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_491 = false;
else if ( !$elseif_cond_53b1913555aee437eb89558ad525eb77_493 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_491 = false;
else if ( !$elseif_cond_53b1913555aee437eb89558ad525eb77_494 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_491 = false;
else
    $elseif_cond_53b1913555aee437eb89558ad525eb77_491 = $elseif_cond_53b1913555aee437eb89558ad525eb77_494;
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_492, $elseif_cond_53b1913555aee437eb89558ad525eb77_493, $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_491 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_491 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_491 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_491, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_491 = $elseif_cond_53b1913555aee437eb89558ad525eb77_491->templateValue();
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_492 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_494 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_53b1913555aee437eb89558ad525eb77_495 = compiledFetchAttribute( $elseif_cond_53b1913555aee437eb89558ad525eb77_494, 'moduleName' );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_494 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495;
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_494, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = $elseif_cond_53b1913555aee437eb89558ad525eb77_494->templateValue();
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_494, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = $elseif_cond_53b1913555aee437eb89558ad525eb77_494->templateValue();
$elseif_cond_53b1913555aee437eb89558ad525eb77_493 = ( ( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) == ( 'ezflow' ) );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_493, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = $elseif_cond_53b1913555aee437eb89558ad525eb77_493->templateValue();
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_495 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_53b1913555aee437eb89558ad525eb77_496 = compiledFetchAttribute( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'functionName' );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_496;
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495->templateValue();
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495->templateValue();
$elseif_cond_53b1913555aee437eb89558ad525eb77_494 = ( ( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) == ( '*' ) );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_494, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = $elseif_cond_53b1913555aee437eb89558ad525eb77_494->templateValue();
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_496 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_53b1913555aee437eb89558ad525eb77_497 = compiledFetchAttribute( $elseif_cond_53b1913555aee437eb89558ad525eb77_496, 'limitation' );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_496 = $elseif_cond_53b1913555aee437eb89558ad525eb77_497;
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_496 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_496, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_496 = $elseif_cond_53b1913555aee437eb89558ad525eb77_496->templateValue();
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_496, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_496 = $elseif_cond_53b1913555aee437eb89558ad525eb77_496->templateValue();
$elseif_cond_53b1913555aee437eb89558ad525eb77_495 = ( ( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 ) == ( '*' ) );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495->templateValue();
if ( !$elseif_cond_53b1913555aee437eb89558ad525eb77_493 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_492 = false;
else if ( !$elseif_cond_53b1913555aee437eb89558ad525eb77_494 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_492 = false;
else if ( !$elseif_cond_53b1913555aee437eb89558ad525eb77_495 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_492 = false;
else
    $elseif_cond_53b1913555aee437eb89558ad525eb77_492 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495;
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493, $elseif_cond_53b1913555aee437eb89558ad525eb77_494, $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_492 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_492 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_492 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_492, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_492 = $elseif_cond_53b1913555aee437eb89558ad525eb77_492->templateValue();
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_495 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_53b1913555aee437eb89558ad525eb77_496 = compiledFetchAttribute( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'moduleName' );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_496;
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495->templateValue();
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495->templateValue();
$elseif_cond_53b1913555aee437eb89558ad525eb77_494 = ( ( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) == ( 'ezflow' ) );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_494 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_494, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_494 = $elseif_cond_53b1913555aee437eb89558ad525eb77_494->templateValue();
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_496 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_53b1913555aee437eb89558ad525eb77_497 = compiledFetchAttribute( $elseif_cond_53b1913555aee437eb89558ad525eb77_496, 'functionName' );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_496 = $elseif_cond_53b1913555aee437eb89558ad525eb77_497;
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_496 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_496, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_496 = $elseif_cond_53b1913555aee437eb89558ad525eb77_496->templateValue();
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_496, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_496 = $elseif_cond_53b1913555aee437eb89558ad525eb77_496->templateValue();
$elseif_cond_53b1913555aee437eb89558ad525eb77_495 = ( ( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 ) == ( 'changelayout' ) );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_495 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_495, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_495 = $elseif_cond_53b1913555aee437eb89558ad525eb77_495->templateValue();
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_497 );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_497 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_497 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_53b1913555aee437eb89558ad525eb77_498 = compiledFetchAttribute( $elseif_cond_53b1913555aee437eb89558ad525eb77_497, 'limitation' );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_497 );
$elseif_cond_53b1913555aee437eb89558ad525eb77_497 = $elseif_cond_53b1913555aee437eb89558ad525eb77_498;
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_497 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_497 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_497 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_497, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_497 = $elseif_cond_53b1913555aee437eb89558ad525eb77_497->templateValue();
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_497 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_497, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_497 = $elseif_cond_53b1913555aee437eb89558ad525eb77_497->templateValue();
$elseif_cond_53b1913555aee437eb89558ad525eb77_496 = ( ( $elseif_cond_53b1913555aee437eb89558ad525eb77_497 ) == ( '*' ) );
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_497 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_496 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_496 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_496, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_496 = $elseif_cond_53b1913555aee437eb89558ad525eb77_496->templateValue();
if ( !$elseif_cond_53b1913555aee437eb89558ad525eb77_494 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = false;
else if ( !$elseif_cond_53b1913555aee437eb89558ad525eb77_495 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = false;
else if ( !$elseif_cond_53b1913555aee437eb89558ad525eb77_496 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = false;
else
    $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = $elseif_cond_53b1913555aee437eb89558ad525eb77_496;
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_494, $elseif_cond_53b1913555aee437eb89558ad525eb77_495, $elseif_cond_53b1913555aee437eb89558ad525eb77_496 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_493, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_493 = $elseif_cond_53b1913555aee437eb89558ad525eb77_493->templateValue();
if ( $elseif_cond_53b1913555aee437eb89558ad525eb77_491 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_49 = $elseif_cond_53b1913555aee437eb89558ad525eb77_491;
else if ( $elseif_cond_53b1913555aee437eb89558ad525eb77_492 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_49 = $elseif_cond_53b1913555aee437eb89558ad525eb77_492;
else if ( $elseif_cond_53b1913555aee437eb89558ad525eb77_493 )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_49 = $elseif_cond_53b1913555aee437eb89558ad525eb77_493;
else
    $elseif_cond_53b1913555aee437eb89558ad525eb77_49 = false;
unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_491, $elseif_cond_53b1913555aee437eb89558ad525eb77_492, $elseif_cond_53b1913555aee437eb89558ad525eb77_493 );
if (! isset( $elseif_cond_53b1913555aee437eb89558ad525eb77_49 ) ) $elseif_cond_53b1913555aee437eb89558ad525eb77_49 = NULL;
while ( is_object( $elseif_cond_53b1913555aee437eb89558ad525eb77_49 ) and method_exists( $elseif_cond_53b1913555aee437eb89558ad525eb77_49, 'templateValue' ) )
    $elseif_cond_53b1913555aee437eb89558ad525eb77_49 = $elseif_cond_53b1913555aee437eb89558ad525eb77_49->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'moduleName' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 'ezflow' ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'functionName' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 'changelayout' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'limitation' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = is_array( $if_cond4 );unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else
    $if_cond = $if_cond3;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'limitation' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 0 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'values_as_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'content_class' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'layout_for_current_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['layout_for_current_class'] = true;
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
elseif ( $elseif_cond_53b1913555aee437eb89558ad525eb77_49 )
{
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'layout_for_current_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['layout_for_current_class'] = true;
}
$text .= '        ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_53b1913555aee437eb89558ad525eb77_49 );

$text .= '     ';
$fe_n_items_processed_53b1913555aee437eb89558ad525eb77_9++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_9 ) ) extract( array_pop( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_9 ) );

else
{

unset( $fe_array_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_array_keys_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_n_items_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_n_items_processed_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_i_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_key_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_val_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_offset_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_max_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_reverse_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_first_val_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_last_val_53b1913555aee437eb89558ad525eb77_9 );

unset( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_9 );

}

// foreach ends
$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_layout', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_layout'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( '' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezini',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'zone_layout',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ZoneName',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'zone.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'zone_names', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['zone_names'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
<div id="page-datatype-container" class="yui-skin-sam yui-skin-ezflow">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_change_layout', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_change_layout'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'layout_for_current_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['layout_for_current_class'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="zones float-break">';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_10 ) ) $fe_variable_stack_53b1913555aee437eb89558ad525eb77_10 = array();
$fe_variable_stack_53b1913555aee437eb89558ad525eb77_10[] = compact( 'fe_array_53b1913555aee437eb89558ad525eb77_10', 'fe_array_keys_53b1913555aee437eb89558ad525eb77_10', 'fe_n_items_53b1913555aee437eb89558ad525eb77_10', 'fe_n_items_processed_53b1913555aee437eb89558ad525eb77_10', 'fe_i_53b1913555aee437eb89558ad525eb77_10', 'fe_key_53b1913555aee437eb89558ad525eb77_10', 'fe_val_53b1913555aee437eb89558ad525eb77_10', 'fe_offset_53b1913555aee437eb89558ad525eb77_10', 'fe_max_53b1913555aee437eb89558ad525eb77_10', 'fe_reverse_53b1913555aee437eb89558ad525eb77_10', 'fe_first_val_53b1913555aee437eb89558ad525eb77_10', 'fe_last_val_53b1913555aee437eb89558ad525eb77_10' );
unset( $fe_array_53b1913555aee437eb89558ad525eb77_10 );
unset( $fe_array_53b1913555aee437eb89558ad525eb77_10 );
$fe_array_53b1913555aee437eb89558ad525eb77_10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_zones'] : null;
if (! isset( $fe_array_53b1913555aee437eb89558ad525eb77_10 ) ) $fe_array_53b1913555aee437eb89558ad525eb77_10 = NULL;
while ( is_object( $fe_array_53b1913555aee437eb89558ad525eb77_10 ) and method_exists( $fe_array_53b1913555aee437eb89558ad525eb77_10, 'templateValue' ) )
    $fe_array_53b1913555aee437eb89558ad525eb77_10 = $fe_array_53b1913555aee437eb89558ad525eb77_10->templateValue();

$fe_array_keys_53b1913555aee437eb89558ad525eb77_10 = is_array( $fe_array_53b1913555aee437eb89558ad525eb77_10 ) ? array_keys( $fe_array_53b1913555aee437eb89558ad525eb77_10 ) : array();
$fe_n_items_53b1913555aee437eb89558ad525eb77_10 = count( $fe_array_keys_53b1913555aee437eb89558ad525eb77_10 );
$fe_n_items_processed_53b1913555aee437eb89558ad525eb77_10 = 0;
$fe_offset_53b1913555aee437eb89558ad525eb77_10 = 0;
$fe_max_53b1913555aee437eb89558ad525eb77_10 = $fe_n_items_53b1913555aee437eb89558ad525eb77_10 - $fe_offset_53b1913555aee437eb89558ad525eb77_10;
$fe_reverse_53b1913555aee437eb89558ad525eb77_10 = false;
if ( $fe_offset_53b1913555aee437eb89558ad525eb77_10 < 0 || $fe_offset_53b1913555aee437eb89558ad525eb77_10 >= $fe_n_items_53b1913555aee437eb89558ad525eb77_10 )
{
    $fe_offset_53b1913555aee437eb89558ad525eb77_10 = ( $fe_offset_53b1913555aee437eb89558ad525eb77_10 < 0 ) ? 0 : $fe_n_items_53b1913555aee437eb89558ad525eb77_10;
    if ( $fe_n_items_53b1913555aee437eb89558ad525eb77_10 || $fe_offset_53b1913555aee437eb89558ad525eb77_10 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_53b1913555aee437eb89558ad525eb77_10'. Array count: $fe_n_items_53b1913555aee437eb89558ad525eb77_10");   
}
}
if ( $fe_max_53b1913555aee437eb89558ad525eb77_10 < 0 || $fe_offset_53b1913555aee437eb89558ad525eb77_10 + $fe_max_53b1913555aee437eb89558ad525eb77_10 > $fe_n_items_53b1913555aee437eb89558ad525eb77_10 )
{
    if ( $fe_max_53b1913555aee437eb89558ad525eb77_10 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_53b1913555aee437eb89558ad525eb77_10");
    $fe_max_53b1913555aee437eb89558ad525eb77_10 = $fe_n_items_53b1913555aee437eb89558ad525eb77_10 - $fe_offset_53b1913555aee437eb89558ad525eb77_10;
}
if ( $fe_reverse_53b1913555aee437eb89558ad525eb77_10 )
{
    $fe_first_val_53b1913555aee437eb89558ad525eb77_10 = $fe_n_items_53b1913555aee437eb89558ad525eb77_10 - 1 - $fe_offset_53b1913555aee437eb89558ad525eb77_10;
    $fe_last_val_53b1913555aee437eb89558ad525eb77_10  = 0;
}
else
{
    $fe_first_val_53b1913555aee437eb89558ad525eb77_10 = $fe_offset_53b1913555aee437eb89558ad525eb77_10;
    $fe_last_val_53b1913555aee437eb89558ad525eb77_10  = $fe_n_items_53b1913555aee437eb89558ad525eb77_10 - 1;
}
// foreach
for ( $fe_i_53b1913555aee437eb89558ad525eb77_10 = $fe_first_val_53b1913555aee437eb89558ad525eb77_10; $fe_n_items_processed_53b1913555aee437eb89558ad525eb77_10 < $fe_max_53b1913555aee437eb89558ad525eb77_10 && ( $fe_reverse_53b1913555aee437eb89558ad525eb77_10 ? $fe_i_53b1913555aee437eb89558ad525eb77_10 >= $fe_last_val_53b1913555aee437eb89558ad525eb77_10 : $fe_i_53b1913555aee437eb89558ad525eb77_10 <= $fe_last_val_53b1913555aee437eb89558ad525eb77_10 ); $fe_reverse_53b1913555aee437eb89558ad525eb77_10 ? $fe_i_53b1913555aee437eb89558ad525eb77_10-- : $fe_i_53b1913555aee437eb89558ad525eb77_10++ )
{
$fe_key_53b1913555aee437eb89558ad525eb77_10 = $fe_array_keys_53b1913555aee437eb89558ad525eb77_10[$fe_i_53b1913555aee437eb89558ad525eb77_10];
$fe_val_53b1913555aee437eb89558ad525eb77_10 = $fe_array_53b1913555aee437eb89558ad525eb77_10[$fe_key_53b1913555aee437eb89558ad525eb77_10];
$vars[$rootNamespace]['allowed_zone'] = $fe_val_53b1913555aee437eb89558ad525eb77_10;
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_zone'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'classes' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'object' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'content_class' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'identifier' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="zone">
        <div class="zone-label">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_zone'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</div>
        <div class="zone-thumbnail"><img src=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_zone'] : null;
$var4 = compiledFetchAttribute( $var3, 'thumbnail' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'ezpage/thumbnails/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1 = eZURLOperator::eZImage( $tpl, $var1, "ezimage", false );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' alt="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_zone'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" /></div>
        <div class="zone-selector">
            <input type="radio" class="zone-type-selector" name="ContentObjectAttribute_ezpage_zone_allowed_type_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_zone'] : null;
$var1 = compiledFetchAttribute( $var, 'type' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_zone'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'type' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_layout', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_layout'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' />
        </div>
    </div>';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_53b1913555aee437eb89558ad525eb77_10++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_10 ) ) extract( array_pop( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_10 ) );

else
{

unset( $fe_array_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_array_keys_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_n_items_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_n_items_processed_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_i_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_key_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_val_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_offset_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_max_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_reverse_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_first_val_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_last_val_53b1913555aee437eb89558ad525eb77_10 );

unset( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_10 );

}

// foreach ends
$text .= '    <div class="break"></div>

    <div id="zone-map-container" class="hide float-break">
        <div id="zone-map-type"></div>
        <p>The total number of zones in the new layout is less than the number of zones in the previous layout. Therefore, you must map the previous zones to new zones. Unmapped zones will be removed!</p>
        <div id="zone-map-placeholder"></div>
    </div>

    <div class="block">
        <input id="set-zone-layout" class="button" type="submit" name="CustomActionButton[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_new_zone_layout]" value="Set layout" />
    </div>
    <input type="hidden" class="current-zone-count" name="ContentObjectAttribute_ezpage_zone_count_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'zones' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
</div>';
}
unset( $if_cond );
// if ends

$text .= '<div id="zone-tabs-container"></div>
</div>

';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::yui2',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::yui3',
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::yui3io',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '

<script type="text/javascript">
(function() {    var loader = new YAHOO.util.YUILoader(YUI2_config);

    loader.onSuccess = function() {        YAHOO.ez.ZoneLayout.cfg = { \'allowedzones\': \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_zones'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'json',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
                                           \'zonelayout\': \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_layout', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_layout'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\' };
        YAHOO.ez.ZoneLayout.init();

        var tabView = new YAHOO.widget.TabView();

        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_11 ) ) $fe_variable_stack_53b1913555aee437eb89558ad525eb77_11 = array();
$fe_variable_stack_53b1913555aee437eb89558ad525eb77_11[] = compact( 'fe_array_53b1913555aee437eb89558ad525eb77_11', 'fe_array_keys_53b1913555aee437eb89558ad525eb77_11', 'fe_n_items_53b1913555aee437eb89558ad525eb77_11', 'fe_n_items_processed_53b1913555aee437eb89558ad525eb77_11', 'fe_i_53b1913555aee437eb89558ad525eb77_11', 'fe_key_53b1913555aee437eb89558ad525eb77_11', 'fe_val_53b1913555aee437eb89558ad525eb77_11', 'fe_offset_53b1913555aee437eb89558ad525eb77_11', 'fe_max_53b1913555aee437eb89558ad525eb77_11', 'fe_reverse_53b1913555aee437eb89558ad525eb77_11', 'fe_first_val_53b1913555aee437eb89558ad525eb77_11', 'fe_last_val_53b1913555aee437eb89558ad525eb77_11' );
unset( $fe_array_53b1913555aee437eb89558ad525eb77_11 );
unset( $fe_array_53b1913555aee437eb89558ad525eb77_11 );
$fe_array_53b1913555aee437eb89558ad525eb77_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$fe_array_53b1913555aee437eb89558ad525eb77_111 = compiledFetchAttribute( $fe_array_53b1913555aee437eb89558ad525eb77_11, 'content' );
unset( $fe_array_53b1913555aee437eb89558ad525eb77_11 );
$fe_array_53b1913555aee437eb89558ad525eb77_11 = $fe_array_53b1913555aee437eb89558ad525eb77_111;
$fe_array_53b1913555aee437eb89558ad525eb77_111 = compiledFetchAttribute( $fe_array_53b1913555aee437eb89558ad525eb77_11, 'zones' );
unset( $fe_array_53b1913555aee437eb89558ad525eb77_11 );
$fe_array_53b1913555aee437eb89558ad525eb77_11 = $fe_array_53b1913555aee437eb89558ad525eb77_111;
if (! isset( $fe_array_53b1913555aee437eb89558ad525eb77_11 ) ) $fe_array_53b1913555aee437eb89558ad525eb77_11 = NULL;
while ( is_object( $fe_array_53b1913555aee437eb89558ad525eb77_11 ) and method_exists( $fe_array_53b1913555aee437eb89558ad525eb77_11, 'templateValue' ) )
    $fe_array_53b1913555aee437eb89558ad525eb77_11 = $fe_array_53b1913555aee437eb89558ad525eb77_11->templateValue();

$fe_array_keys_53b1913555aee437eb89558ad525eb77_11 = is_array( $fe_array_53b1913555aee437eb89558ad525eb77_11 ) ? array_keys( $fe_array_53b1913555aee437eb89558ad525eb77_11 ) : array();
$fe_n_items_53b1913555aee437eb89558ad525eb77_11 = count( $fe_array_keys_53b1913555aee437eb89558ad525eb77_11 );
$fe_n_items_processed_53b1913555aee437eb89558ad525eb77_11 = 0;
$fe_offset_53b1913555aee437eb89558ad525eb77_11 = 0;
$fe_max_53b1913555aee437eb89558ad525eb77_11 = $fe_n_items_53b1913555aee437eb89558ad525eb77_11 - $fe_offset_53b1913555aee437eb89558ad525eb77_11;
$fe_reverse_53b1913555aee437eb89558ad525eb77_11 = false;
if ( $fe_offset_53b1913555aee437eb89558ad525eb77_11 < 0 || $fe_offset_53b1913555aee437eb89558ad525eb77_11 >= $fe_n_items_53b1913555aee437eb89558ad525eb77_11 )
{
    $fe_offset_53b1913555aee437eb89558ad525eb77_11 = ( $fe_offset_53b1913555aee437eb89558ad525eb77_11 < 0 ) ? 0 : $fe_n_items_53b1913555aee437eb89558ad525eb77_11;
    if ( $fe_n_items_53b1913555aee437eb89558ad525eb77_11 || $fe_offset_53b1913555aee437eb89558ad525eb77_11 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_53b1913555aee437eb89558ad525eb77_11'. Array count: $fe_n_items_53b1913555aee437eb89558ad525eb77_11");   
}
}
if ( $fe_max_53b1913555aee437eb89558ad525eb77_11 < 0 || $fe_offset_53b1913555aee437eb89558ad525eb77_11 + $fe_max_53b1913555aee437eb89558ad525eb77_11 > $fe_n_items_53b1913555aee437eb89558ad525eb77_11 )
{
    if ( $fe_max_53b1913555aee437eb89558ad525eb77_11 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_53b1913555aee437eb89558ad525eb77_11");
    $fe_max_53b1913555aee437eb89558ad525eb77_11 = $fe_n_items_53b1913555aee437eb89558ad525eb77_11 - $fe_offset_53b1913555aee437eb89558ad525eb77_11;
}
if ( $fe_reverse_53b1913555aee437eb89558ad525eb77_11 )
{
    $fe_first_val_53b1913555aee437eb89558ad525eb77_11 = $fe_n_items_53b1913555aee437eb89558ad525eb77_11 - 1 - $fe_offset_53b1913555aee437eb89558ad525eb77_11;
    $fe_last_val_53b1913555aee437eb89558ad525eb77_11  = 0;
}
else
{
    $fe_first_val_53b1913555aee437eb89558ad525eb77_11 = $fe_offset_53b1913555aee437eb89558ad525eb77_11;
    $fe_last_val_53b1913555aee437eb89558ad525eb77_11  = $fe_n_items_53b1913555aee437eb89558ad525eb77_11 - 1;
}
// foreach
for ( $fe_i_53b1913555aee437eb89558ad525eb77_11 = $fe_first_val_53b1913555aee437eb89558ad525eb77_11; $fe_n_items_processed_53b1913555aee437eb89558ad525eb77_11 < $fe_max_53b1913555aee437eb89558ad525eb77_11 && ( $fe_reverse_53b1913555aee437eb89558ad525eb77_11 ? $fe_i_53b1913555aee437eb89558ad525eb77_11 >= $fe_last_val_53b1913555aee437eb89558ad525eb77_11 : $fe_i_53b1913555aee437eb89558ad525eb77_11 <= $fe_last_val_53b1913555aee437eb89558ad525eb77_11 ); $fe_reverse_53b1913555aee437eb89558ad525eb77_11 ? $fe_i_53b1913555aee437eb89558ad525eb77_11-- : $fe_i_53b1913555aee437eb89558ad525eb77_11++ )
{
$fe_key_53b1913555aee437eb89558ad525eb77_11 = $fe_array_keys_53b1913555aee437eb89558ad525eb77_11[$fe_i_53b1913555aee437eb89558ad525eb77_11];
$fe_val_53b1913555aee437eb89558ad525eb77_11 = $fe_array_53b1913555aee437eb89558ad525eb77_11[$fe_key_53b1913555aee437eb89558ad525eb77_11];
$vars[$rootNamespace]['zone'] = $fe_val_53b1913555aee437eb89558ad525eb77_11;
$vars[$rootNamespace]['index'] = $fe_key_53b1913555aee437eb89558ad525eb77_11;
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'action' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'action' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 'remove' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
$skipDelimiter = true;
continue;

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            tabView.addTab( new YAHOO.widget.Tab({                label: \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_names'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone'] : null;
$var3 = compiledFetchAttribute( $var2, 'zone_identifier' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
                dataSrc: \'';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var6 = compiledFetchAttribute( $var5, 'version' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var1 = ( '/ezflow/zone/' . $var3 . '/' . $var5 . '/' . $var7 );
unset( $var3, $var5, $var7 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\',
                cacheData: true
                }));
        ';
$fe_n_items_processed_53b1913555aee437eb89558ad525eb77_11++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_11 ) ) extract( array_pop( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_11 ) );

else
{

unset( $fe_array_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_array_keys_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_n_items_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_n_items_processed_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_i_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_key_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_val_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_offset_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_max_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_reverse_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_first_val_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_last_val_53b1913555aee437eb89558ad525eb77_11 );

unset( $fe_variable_stack_53b1913555aee437eb89558ad525eb77_11 );

}

// foreach ends
$text .= '
        
        var activeTabIndex = YAHOO.util.Cookie.get( \'eZPageActiveTabIndex\' );

        if ( activeTabIndex ) {
            if ( tabView.getTab( activeTabIndex ) ) {
                tabView.set( \'activeIndex\',  activeTabIndex );
            }
            else {
                tabView.set( \'activeIndex\', 0 );
            }
        }
        else {
            tabView.set( \'activeIndex\', 0 );
        }

        var tabs = tabView.get("tabs");
        for( var i = 0; i < tabs.length; i++ ) {
            tabs[i].on("dataLoadedChange", function(e) {
                YAHOO.util.Event.onContentReady("zone-tabs-container", function() {
                    var cfg = {
         
                        url: "/ezpublish/index.php/admin_site/ezflow/request",
                        attributeid: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
                        version: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'version' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
                        zone: tabView.getTabIndex(this)
         
                    };
                    YAHOO.ez.BlockDD.cfg = cfg;
                    YAHOO.ez.BlockDD.init();
                    YAHOO.ez.BlockCollapse.init();
                    YAHOO.ez.sheduleDialog.init();
                    BlockDDInit.cfg = cfg;
                    BlockDDInit();
                }, this, true);
            });
        }

        tabView.on("activeTabChange", function(e) {
            var tabIndex = tabView.getTabIndex( e.newValue );
            YAHOO.util.Cookie.set("eZPageActiveTabIndex", tabIndex, {path: "/"});
            BlockDDInit.cfg.zone = tabIndex;
        });

        tabView.appendTo(\'zone-tabs-container\');
        
    }
    loader.addModule({        name: \'blocktools\',
        type: \'js\',
        fullpath: \'/ezpublish/extension/ezflow/design/standard/javascript/blocktools.js\'
    });

    loader.addModule({        name: \'zonetools\',
        type: \'js\',
        fullpath: \'/ezpublish/extension/ezflow/design/standard/javascript/zonetools.js\'
    });

    loader.addModule({        name: \'scheduledialog\',
        type: \'js\',
        fullpath: \'/ezpublish/extension/ezflow/design/standard/javascript/scheduledialog.js\'
    });

    loader.addModule({        name: \'scheduledialog-css\',
        type: \'css\',
        fullpath: \'/ezpublish/extension/ezflow/design/standard/stylesheets/scheduledialog.css\'
    });

    loader.addModule({        name: \'pagedatatype-css\',
        type: \'css\',
        fullpath: \'/ezpublish/extension/ezflow/design/admin2/stylesheets/ezpage/ezpage.css\'
    });

    loader.require(["button","calendar","container","cookie","get","json","tabview","utilities","blocktools","zonetools","scheduledialog","scheduledialog-css", "pagedatatype-css"]);

    loader.insert();
})();

function confirmDiscard( question ){    // Ask user if he really wants to do it.
    return confirm( question );}</script>
';

$setArray = $oldSetArray_0762cb8088aac8ca78472ab89d31f499;
$tpl->Level--;
?>
