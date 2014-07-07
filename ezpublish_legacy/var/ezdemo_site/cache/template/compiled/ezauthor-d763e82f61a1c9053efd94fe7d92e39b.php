<?php
// URI:       design:content/datatype/view/ezauthor.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/content/datatype/view/ezauthor.tpl
// Timestamp: 1404662620 (Sun Jul 6 9:03:40 PDT 2014)
$oldSetArray_93343e86243fe701c52982daabe0ef9b = isset( $setArray ) ? $setArray : array();
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

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_0d119ece9549bf5d9e78c1e3808fceb4_1 ) ) $fe_variable_stack_0d119ece9549bf5d9e78c1e3808fceb4_1 = array();
$fe_variable_stack_0d119ece9549bf5d9e78c1e3808fceb4_1[] = compact( 'fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_array_keys_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_n_items_processed_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_i_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_key_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_val_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_max_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_reverse_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_first_val_0d119ece9549bf5d9e78c1e3808fceb4_1', 'fe_last_val_0d119ece9549bf5d9e78c1e3808fceb4_1' );
unset( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 );
unset( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 );
$fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$fe_array_0d119ece9549bf5d9e78c1e3808fceb4_11 = compiledFetchAttribute( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1, 'content' );
unset( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 );
$fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 = $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_11;
$fe_array_0d119ece9549bf5d9e78c1e3808fceb4_11 = compiledFetchAttribute( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1, 'author_list' );
unset( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 );
$fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 = $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_11;
if (! isset( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 ) ) $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 = NULL;
while ( is_object( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 ) and method_exists( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1, 'templateValue' ) )
    $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 = $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1->templateValue();

$fe_array_keys_0d119ece9549bf5d9e78c1e3808fceb4_1 = is_array( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 ) ? array_keys( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 ) : array();
$fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1 = count( $fe_array_keys_0d119ece9549bf5d9e78c1e3808fceb4_1 );
$fe_n_items_processed_0d119ece9549bf5d9e78c1e3808fceb4_1 = 0;
$fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1 = 0;
$fe_max_0d119ece9549bf5d9e78c1e3808fceb4_1 = $fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1 - $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1;
$fe_reverse_0d119ece9549bf5d9e78c1e3808fceb4_1 = false;
if ( $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1 < 0 || $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1 >= $fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1 )
{
    $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1 = ( $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1 < 0 ) ? 0 : $fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1;
    if ( $fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1 || $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1'. Array count: $fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1");   
}
}
if ( $fe_max_0d119ece9549bf5d9e78c1e3808fceb4_1 < 0 || $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1 + $fe_max_0d119ece9549bf5d9e78c1e3808fceb4_1 > $fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1 )
{
    if ( $fe_max_0d119ece9549bf5d9e78c1e3808fceb4_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_0d119ece9549bf5d9e78c1e3808fceb4_1");
    $fe_max_0d119ece9549bf5d9e78c1e3808fceb4_1 = $fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1 - $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1;
}
if ( $fe_reverse_0d119ece9549bf5d9e78c1e3808fceb4_1 )
{
    $fe_first_val_0d119ece9549bf5d9e78c1e3808fceb4_1 = $fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1 - 1 - $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1;
    $fe_last_val_0d119ece9549bf5d9e78c1e3808fceb4_1  = 0;
}
else
{
    $fe_first_val_0d119ece9549bf5d9e78c1e3808fceb4_1 = $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1;
    $fe_last_val_0d119ece9549bf5d9e78c1e3808fceb4_1  = $fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1 - 1;
}
// foreach
for ( $fe_i_0d119ece9549bf5d9e78c1e3808fceb4_1 = $fe_first_val_0d119ece9549bf5d9e78c1e3808fceb4_1; $fe_n_items_processed_0d119ece9549bf5d9e78c1e3808fceb4_1 < $fe_max_0d119ece9549bf5d9e78c1e3808fceb4_1 && ( $fe_reverse_0d119ece9549bf5d9e78c1e3808fceb4_1 ? $fe_i_0d119ece9549bf5d9e78c1e3808fceb4_1 >= $fe_last_val_0d119ece9549bf5d9e78c1e3808fceb4_1 : $fe_i_0d119ece9549bf5d9e78c1e3808fceb4_1 <= $fe_last_val_0d119ece9549bf5d9e78c1e3808fceb4_1 ); $fe_reverse_0d119ece9549bf5d9e78c1e3808fceb4_1 ? $fe_i_0d119ece9549bf5d9e78c1e3808fceb4_1-- : $fe_i_0d119ece9549bf5d9e78c1e3808fceb4_1++ )
{
$fe_key_0d119ece9549bf5d9e78c1e3808fceb4_1 = $fe_array_keys_0d119ece9549bf5d9e78c1e3808fceb4_1[$fe_i_0d119ece9549bf5d9e78c1e3808fceb4_1];
$fe_val_0d119ece9549bf5d9e78c1e3808fceb4_1 = $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1[$fe_key_0d119ece9549bf5d9e78c1e3808fceb4_1];
$vars[$rootNamespace]['author'] = $fe_val_0d119ece9549bf5d9e78c1e3808fceb4_1;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',&nbsp;';
} // delimiter ends

unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'author', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['author'] : null;
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

$fe_n_items_processed_0d119ece9549bf5d9e78c1e3808fceb4_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_0d119ece9549bf5d9e78c1e3808fceb4_1 ) ) extract( array_pop( $fe_variable_stack_0d119ece9549bf5d9e78c1e3808fceb4_1 ) );

else
{

unset( $fe_array_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_array_keys_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_n_items_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_n_items_processed_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_i_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_key_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_val_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_offset_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_max_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_reverse_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_first_val_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_last_val_0d119ece9549bf5d9e78c1e3808fceb4_1 );

unset( $fe_variable_stack_0d119ece9549bf5d9e78c1e3808fceb4_1 );

}

// foreach ends

$setArray = $oldSetArray_93343e86243fe701c52982daabe0ef9b;
$tpl->Level--;
?>
