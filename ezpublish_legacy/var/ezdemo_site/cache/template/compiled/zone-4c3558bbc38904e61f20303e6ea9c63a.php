<?php
// URI:       design:page/zone.tpl
// Filename:  extension/ezflow/design/standard/templates/page/zone.tpl
// Timestamp: 1404662622 (Sun Jul 6 9:03:42 PDT 2014)
$oldSetArray_18421e44a649e8e609bb2dd93f236419 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="object-left">
    <select name="ContentObjectAttribute_ezpage_block_type_';
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

$text .= '_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_1 ) ) $fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_1 = array();
$fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_1[] = compact( 'fe_array_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_array_keys_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_n_items_processed_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_i_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_key_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_val_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_max_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_first_val_6b7a4f08ed78b379fd04d82a04d352b7_1', 'fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_1' );
$fe_array_6b7a4f08ed78b379fd04d82a04d352b7_1 = array (
  0 => 'Campaign',
  1 => 'MainStory',
  2 => 'ContentGrid',
  3 => 'Gallery',
  4 => 'Banner',
  5 => 'Video',
  6 => 'TagCloud',
  7 => 'Poll',
  8 => 'ItemList',
  9 => 'FeedReader',
  10 => 'FeedbackForm',
  11 => 'HighlightedItem',
);
$fe_array_keys_6b7a4f08ed78b379fd04d82a04d352b7_1 = is_array( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_1 ) ? array_keys( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_1 ) : array();
$fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1 = count( $fe_array_keys_6b7a4f08ed78b379fd04d82a04d352b7_1 );
$fe_n_items_processed_6b7a4f08ed78b379fd04d82a04d352b7_1 = 0;
$fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1 = 0;
$fe_max_6b7a4f08ed78b379fd04d82a04d352b7_1 = $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1 - $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1;
$fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_1 = false;
if ( $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1 < 0 || $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1 >= $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1 )
{
    $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1 = ( $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1 < 0 ) ? 0 : $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1;
    if ( $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1 || $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1'. Array count: $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1");   
}
}
if ( $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_1 < 0 || $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1 + $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_1 > $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1 )
{
    if ( $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_1");
    $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_1 = $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1 - $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1;
}
if ( $fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_1 )
{
    $fe_first_val_6b7a4f08ed78b379fd04d82a04d352b7_1 = $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1 - 1 - $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1;
    $fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_1  = 0;
}
else
{
    $fe_first_val_6b7a4f08ed78b379fd04d82a04d352b7_1 = $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1;
    $fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_1  = $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1 - 1;
}
// foreach
for ( $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_1 = $fe_first_val_6b7a4f08ed78b379fd04d82a04d352b7_1; $fe_n_items_processed_6b7a4f08ed78b379fd04d82a04d352b7_1 < $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_1 && ( $fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_1 ? $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_1 >= $fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_1 : $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_1 <= $fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_1 ); $fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_1 ? $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_1-- : $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_1++ )
{
$fe_key_6b7a4f08ed78b379fd04d82a04d352b7_1 = $fe_array_keys_6b7a4f08ed78b379fd04d82a04d352b7_1[$fe_i_6b7a4f08ed78b379fd04d82a04d352b7_1];
$fe_val_6b7a4f08ed78b379fd04d82a04d352b7_1 = $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_1[$fe_key_6b7a4f08ed78b379fd04d82a04d352b7_1];
$vars[$rootNamespace]['type'] = $fe_val_6b7a4f08ed78b379fd04d82a04d352b7_1;
$text .= '        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['type'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
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
        2 => 'type',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'Name',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'block.ini',
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
$text .= $var;
unset( $var );

$text .= '</option>
    ';
$fe_n_items_processed_6b7a4f08ed78b379fd04d82a04d352b7_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_1 ) ) extract( array_pop( $fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_1 ) );

else
{

unset( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_array_keys_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_n_items_processed_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_key_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_val_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_first_val_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_1 );

unset( $fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_1 );

}

// foreach ends
$text .= '    </select>
    <input class="button" type="submit" name="CustomActionButton[';
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

$text .= '_new_block-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="Add block" />
</div>

<div class="object-right">
    <button class="trigger expand-all button" title="Expand All">Expand All</button> 
    <button class="trigger collapse-all button" title="Collapse All">Collapse All</button>
</div>

<div class="break"></div>

<div id="zone-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-blocks">';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_2 ) ) $fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_2 = array();
$fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_2[] = compact( 'fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_array_keys_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_n_items_processed_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_i_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_key_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_val_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_max_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_first_val_6b7a4f08ed78b379fd04d82a04d352b7_2', 'fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_2' );
unset( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 );
unset( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 );
$fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone'] : null;
$fe_array_6b7a4f08ed78b379fd04d82a04d352b7_21 = compiledFetchAttribute( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2, 'blocks' );
unset( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 );
$fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 = $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_21;
if (! isset( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 ) ) $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 = NULL;
while ( is_object( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 ) and method_exists( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2, 'templateValue' ) )
    $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 = $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2->templateValue();

$fe_array_keys_6b7a4f08ed78b379fd04d82a04d352b7_2 = is_array( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 ) ? array_keys( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 ) : array();
$fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2 = count( $fe_array_keys_6b7a4f08ed78b379fd04d82a04d352b7_2 );
$fe_n_items_processed_6b7a4f08ed78b379fd04d82a04d352b7_2 = 0;
$fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2 = 0;
$fe_max_6b7a4f08ed78b379fd04d82a04d352b7_2 = $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2 - $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2;
$fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_2 = false;
if ( $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2 < 0 || $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2 >= $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2 )
{
    $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2 = ( $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2 < 0 ) ? 0 : $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2;
    if ( $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2 || $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2'. Array count: $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2");   
}
}
if ( $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_2 < 0 || $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2 + $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_2 > $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2 )
{
    if ( $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_2");
    $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_2 = $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2 - $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2;
}
if ( $fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_2 )
{
    $fe_first_val_6b7a4f08ed78b379fd04d82a04d352b7_2 = $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2 - 1 - $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2;
    $fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_2  = 0;
}
else
{
    $fe_first_val_6b7a4f08ed78b379fd04d82a04d352b7_2 = $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2;
    $fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_2  = $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2 - 1;
}
// foreach
for ( $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_2 = $fe_first_val_6b7a4f08ed78b379fd04d82a04d352b7_2; $fe_n_items_processed_6b7a4f08ed78b379fd04d82a04d352b7_2 < $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_2 && ( $fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_2 ? $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_2 >= $fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_2 : $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_2 <= $fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_2 ); $fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_2 ? $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_2-- : $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_2++ )
{
$fe_key_6b7a4f08ed78b379fd04d82a04d352b7_2 = $fe_array_keys_6b7a4f08ed78b379fd04d82a04d352b7_2[$fe_i_6b7a4f08ed78b379fd04d82a04d352b7_2];
$fe_val_6b7a4f08ed78b379fd04d82a04d352b7_2 = $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2[$fe_key_6b7a4f08ed78b379fd04d82a04d352b7_2];
$vars[$rootNamespace]['block'] = $fe_val_6b7a4f08ed78b379fd04d82a04d352b7_2;
$vars[$rootNamespace]['index'] = $fe_key_6b7a4f08ed78b379fd04d82a04d352b7_2;
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'action' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'remove' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
$textElements = array();
$tpl->processFunction( 'block_edit_gui', $textElements,
                       false,
                       array (
  'block' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'block',
      ),
      2 => false,
    ),
  ),
  'block_id' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'index',
      ),
      2 => false,
    ),
  ),
  'current_time' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'currentdate',
      ),
      2 => false,
    ),
  ),
  'zone_id' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'zone_id',
      ),
      2 => false,
    ),
  ),
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute',
      ),
      2 => false,
    ),
  ),
  'zone' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'zone',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 20,
    1 => 8,
    2 => 1020,
  ),
  1 => 
  array (
    0 => 20,
    1 => 127,
    2 => 1139,
  ),
  2 => 'extension/ezflow/design/standard/templates/page/zone.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_6b7a4f08ed78b379fd04d82a04d352b7_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_2 ) ) extract( array_pop( $fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_2 ) );

else
{

unset( $fe_array_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_array_keys_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_n_items_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_n_items_processed_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_i_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_key_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_val_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_offset_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_max_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_reverse_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_first_val_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_last_val_6b7a4f08ed78b379fd04d82a04d352b7_2 );

unset( $fe_variable_stack_6b7a4f08ed78b379fd04d82a04d352b7_2 );

}

// foreach ends
$text .= '</div>';

$setArray = $oldSetArray_18421e44a649e8e609bb2dd93f236419;
$tpl->Level--;
?>
