<?php
// URI:       design:content/parts/add_to_block.tpl
// Filename:  extension/ezflow/design/admin2/override/templates/content/parts/add_to_block_frontpage.tpl
// Timestamp: 1404662622 (Sun Jul 6 9:03:42 PDT 2014)
$oldSetArray_bf09ef0f0fb06e7cb11b5c95320c8553 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="ajaxsearchbox" class="tab-container">

<div class="box-header"><div class="box-tc"><div class="box-ml"><div class="box-mr"><div class="box-tl"><div class="box-tr">

<h4>Quick search</h4>

</div></div></div></div></div></div>

<div class="box-bc"><div class="box-ml"><div class="box-mr"><div class="box-br"><div class="box-bl"><div class="box-content">


<div class="block">
    <label>Search phrase</label>
    <input id="search-string-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="textfield" type="text" name="SearchStr" value="" />
    <input name="SearchOffset" type="hidden" value="0"  />
    <input name="SearchLimit" type="hidden" value="10"  />
</div>

<div class="block">
    <input id="search-button-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="button" type="button" name="SearchButton" value="Search" />
</div>

<div class="block search-results">
    <div id="search-results-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" style="overflow: hidden">
</div>
';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_6 ) ) $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_6 = array();
$fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_6[] = compact( 'fe_array_98b575eb05c970a1494742b0b8ecf315_6', 'fe_array_keys_98b575eb05c970a1494742b0b8ecf315_6', 'fe_n_items_98b575eb05c970a1494742b0b8ecf315_6', 'fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_6', 'fe_i_98b575eb05c970a1494742b0b8ecf315_6', 'fe_key_98b575eb05c970a1494742b0b8ecf315_6', 'fe_val_98b575eb05c970a1494742b0b8ecf315_6', 'fe_offset_98b575eb05c970a1494742b0b8ecf315_6', 'fe_max_98b575eb05c970a1494742b0b8ecf315_6', 'fe_reverse_98b575eb05c970a1494742b0b8ecf315_6', 'fe_first_val_98b575eb05c970a1494742b0b8ecf315_6', 'fe_last_val_98b575eb05c970a1494742b0b8ecf315_6' );
unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_6 );
unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_6 );
$fe_array_98b575eb05c970a1494742b0b8ecf315_6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attributes'] : null;
if (! isset( $fe_array_98b575eb05c970a1494742b0b8ecf315_6 ) ) $fe_array_98b575eb05c970a1494742b0b8ecf315_6 = NULL;
while ( is_object( $fe_array_98b575eb05c970a1494742b0b8ecf315_6 ) and method_exists( $fe_array_98b575eb05c970a1494742b0b8ecf315_6, 'templateValue' ) )
    $fe_array_98b575eb05c970a1494742b0b8ecf315_6 = $fe_array_98b575eb05c970a1494742b0b8ecf315_6->templateValue();

$fe_array_keys_98b575eb05c970a1494742b0b8ecf315_6 = is_array( $fe_array_98b575eb05c970a1494742b0b8ecf315_6 ) ? array_keys( $fe_array_98b575eb05c970a1494742b0b8ecf315_6 ) : array();
$fe_n_items_98b575eb05c970a1494742b0b8ecf315_6 = count( $fe_array_keys_98b575eb05c970a1494742b0b8ecf315_6 );
$fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_6 = 0;
$fe_offset_98b575eb05c970a1494742b0b8ecf315_6 = 0;
$fe_max_98b575eb05c970a1494742b0b8ecf315_6 = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_6 - $fe_offset_98b575eb05c970a1494742b0b8ecf315_6;
$fe_reverse_98b575eb05c970a1494742b0b8ecf315_6 = false;
if ( $fe_offset_98b575eb05c970a1494742b0b8ecf315_6 < 0 || $fe_offset_98b575eb05c970a1494742b0b8ecf315_6 >= $fe_n_items_98b575eb05c970a1494742b0b8ecf315_6 )
{
    $fe_offset_98b575eb05c970a1494742b0b8ecf315_6 = ( $fe_offset_98b575eb05c970a1494742b0b8ecf315_6 < 0 ) ? 0 : $fe_n_items_98b575eb05c970a1494742b0b8ecf315_6;
    if ( $fe_n_items_98b575eb05c970a1494742b0b8ecf315_6 || $fe_offset_98b575eb05c970a1494742b0b8ecf315_6 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_98b575eb05c970a1494742b0b8ecf315_6'. Array count: $fe_n_items_98b575eb05c970a1494742b0b8ecf315_6");   
}
}
if ( $fe_max_98b575eb05c970a1494742b0b8ecf315_6 < 0 || $fe_offset_98b575eb05c970a1494742b0b8ecf315_6 + $fe_max_98b575eb05c970a1494742b0b8ecf315_6 > $fe_n_items_98b575eb05c970a1494742b0b8ecf315_6 )
{
    if ( $fe_max_98b575eb05c970a1494742b0b8ecf315_6 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_98b575eb05c970a1494742b0b8ecf315_6");
    $fe_max_98b575eb05c970a1494742b0b8ecf315_6 = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_6 - $fe_offset_98b575eb05c970a1494742b0b8ecf315_6;
}
if ( $fe_reverse_98b575eb05c970a1494742b0b8ecf315_6 )
{
    $fe_first_val_98b575eb05c970a1494742b0b8ecf315_6 = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_6 - 1 - $fe_offset_98b575eb05c970a1494742b0b8ecf315_6;
    $fe_last_val_98b575eb05c970a1494742b0b8ecf315_6  = 0;
}
else
{
    $fe_first_val_98b575eb05c970a1494742b0b8ecf315_6 = $fe_offset_98b575eb05c970a1494742b0b8ecf315_6;
    $fe_last_val_98b575eb05c970a1494742b0b8ecf315_6  = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_6 - 1;
}
// foreach
for ( $fe_i_98b575eb05c970a1494742b0b8ecf315_6 = $fe_first_val_98b575eb05c970a1494742b0b8ecf315_6; $fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_6 < $fe_max_98b575eb05c970a1494742b0b8ecf315_6 && ( $fe_reverse_98b575eb05c970a1494742b0b8ecf315_6 ? $fe_i_98b575eb05c970a1494742b0b8ecf315_6 >= $fe_last_val_98b575eb05c970a1494742b0b8ecf315_6 : $fe_i_98b575eb05c970a1494742b0b8ecf315_6 <= $fe_last_val_98b575eb05c970a1494742b0b8ecf315_6 ); $fe_reverse_98b575eb05c970a1494742b0b8ecf315_6 ? $fe_i_98b575eb05c970a1494742b0b8ecf315_6-- : $fe_i_98b575eb05c970a1494742b0b8ecf315_6++ )
{
$fe_key_98b575eb05c970a1494742b0b8ecf315_6 = $fe_array_keys_98b575eb05c970a1494742b0b8ecf315_6[$fe_i_98b575eb05c970a1494742b0b8ecf315_6];
$fe_val_98b575eb05c970a1494742b0b8ecf315_6 = $fe_array_98b575eb05c970a1494742b0b8ecf315_6[$fe_key_98b575eb05c970a1494742b0b8ecf315_6];
$vars[$rootNamespace]['content_attribute'] = $fe_val_98b575eb05c970a1494742b0b8ecf315_6;
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_type_string' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'ezpage' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<script type="text/javascript">

function addBlock( object, id )
{
    var $select = object;
    var $id = id;
    var addToBlock = document.getElementById( \'addtoblock\' );
    addToBlock.name = \'CustomActionButton[\' + $id  +\'_new_item\' + \'-\' + $select.value + \']\';
}

</script>

<div class="block">
<label>Select block</label>
<select name="zonelist" onchange="addBlock( this, ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' );">
<option>Select:</option>';
// def $zone_id
if ( $tpl->hasVariable( 'zone_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'zone_id' is already defined.", array (
  0 => 
  array (
    0 => 45,
    1 => 0,
    2 => 1654,
  ),
  1 => 
  array (
    0 => 47,
    1 => 25,
    2 => 1792,
  ),
  2 => 'extension/ezflow/design/admin2/override/templates/content/parts/add_to_block_frontpage.tpl',
) );
    $tpl->setVariable( 'zone_id', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'zone_id', '', $rootNamespace );
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
    0 => 45,
    1 => 0,
    2 => 1654,
  ),
  1 => 
  array (
    0 => 47,
    1 => 25,
    2 => 1792,
  ),
  2 => 'extension/ezflow/design/admin2/override/templates/content/parts/add_to_block_frontpage.tpl',
) );
    $tpl->setVariable( 'zone_layout', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'zone_layout', $var, $rootNamespace );
}

// def $zone_name
if ( $tpl->hasVariable( 'zone_name', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'zone_name' is already defined.", array (
  0 => 
  array (
    0 => 45,
    1 => 0,
    2 => 1654,
  ),
  1 => 
  array (
    0 => 47,
    1 => 25,
    2 => 1792,
  ),
  2 => 'extension/ezflow/design/admin2/override/templates/content/parts/add_to_block_frontpage.tpl',
) );
    $tpl->setVariable( 'zone_name', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'zone_name', array (
), $rootNamespace );
}

$text .= '    ';
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'zone_name', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['zone_name'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_5 ) ) $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_5 = array();
$fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_5[] = compact( 'fe_array_98b575eb05c970a1494742b0b8ecf315_5', 'fe_array_keys_98b575eb05c970a1494742b0b8ecf315_5', 'fe_n_items_98b575eb05c970a1494742b0b8ecf315_5', 'fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_5', 'fe_i_98b575eb05c970a1494742b0b8ecf315_5', 'fe_key_98b575eb05c970a1494742b0b8ecf315_5', 'fe_val_98b575eb05c970a1494742b0b8ecf315_5', 'fe_offset_98b575eb05c970a1494742b0b8ecf315_5', 'fe_max_98b575eb05c970a1494742b0b8ecf315_5', 'fe_reverse_98b575eb05c970a1494742b0b8ecf315_5', 'fe_first_val_98b575eb05c970a1494742b0b8ecf315_5', 'fe_last_val_98b575eb05c970a1494742b0b8ecf315_5' );
unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_5 );
unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_5 );
$fe_array_98b575eb05c970a1494742b0b8ecf315_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attribute'] : null;
$fe_array_98b575eb05c970a1494742b0b8ecf315_51 = compiledFetchAttribute( $fe_array_98b575eb05c970a1494742b0b8ecf315_5, 'content' );
unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_5 );
$fe_array_98b575eb05c970a1494742b0b8ecf315_5 = $fe_array_98b575eb05c970a1494742b0b8ecf315_51;
$fe_array_98b575eb05c970a1494742b0b8ecf315_51 = compiledFetchAttribute( $fe_array_98b575eb05c970a1494742b0b8ecf315_5, 'zones' );
unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_5 );
$fe_array_98b575eb05c970a1494742b0b8ecf315_5 = $fe_array_98b575eb05c970a1494742b0b8ecf315_51;
if (! isset( $fe_array_98b575eb05c970a1494742b0b8ecf315_5 ) ) $fe_array_98b575eb05c970a1494742b0b8ecf315_5 = NULL;
while ( is_object( $fe_array_98b575eb05c970a1494742b0b8ecf315_5 ) and method_exists( $fe_array_98b575eb05c970a1494742b0b8ecf315_5, 'templateValue' ) )
    $fe_array_98b575eb05c970a1494742b0b8ecf315_5 = $fe_array_98b575eb05c970a1494742b0b8ecf315_5->templateValue();

$fe_array_keys_98b575eb05c970a1494742b0b8ecf315_5 = is_array( $fe_array_98b575eb05c970a1494742b0b8ecf315_5 ) ? array_keys( $fe_array_98b575eb05c970a1494742b0b8ecf315_5 ) : array();
$fe_n_items_98b575eb05c970a1494742b0b8ecf315_5 = count( $fe_array_keys_98b575eb05c970a1494742b0b8ecf315_5 );
$fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_5 = 0;
$fe_offset_98b575eb05c970a1494742b0b8ecf315_5 = 0;
$fe_max_98b575eb05c970a1494742b0b8ecf315_5 = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_5 - $fe_offset_98b575eb05c970a1494742b0b8ecf315_5;
$fe_reverse_98b575eb05c970a1494742b0b8ecf315_5 = false;
if ( $fe_offset_98b575eb05c970a1494742b0b8ecf315_5 < 0 || $fe_offset_98b575eb05c970a1494742b0b8ecf315_5 >= $fe_n_items_98b575eb05c970a1494742b0b8ecf315_5 )
{
    $fe_offset_98b575eb05c970a1494742b0b8ecf315_5 = ( $fe_offset_98b575eb05c970a1494742b0b8ecf315_5 < 0 ) ? 0 : $fe_n_items_98b575eb05c970a1494742b0b8ecf315_5;
    if ( $fe_n_items_98b575eb05c970a1494742b0b8ecf315_5 || $fe_offset_98b575eb05c970a1494742b0b8ecf315_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_98b575eb05c970a1494742b0b8ecf315_5'. Array count: $fe_n_items_98b575eb05c970a1494742b0b8ecf315_5");   
}
}
if ( $fe_max_98b575eb05c970a1494742b0b8ecf315_5 < 0 || $fe_offset_98b575eb05c970a1494742b0b8ecf315_5 + $fe_max_98b575eb05c970a1494742b0b8ecf315_5 > $fe_n_items_98b575eb05c970a1494742b0b8ecf315_5 )
{
    if ( $fe_max_98b575eb05c970a1494742b0b8ecf315_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_98b575eb05c970a1494742b0b8ecf315_5");
    $fe_max_98b575eb05c970a1494742b0b8ecf315_5 = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_5 - $fe_offset_98b575eb05c970a1494742b0b8ecf315_5;
}
if ( $fe_reverse_98b575eb05c970a1494742b0b8ecf315_5 )
{
    $fe_first_val_98b575eb05c970a1494742b0b8ecf315_5 = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_5 - 1 - $fe_offset_98b575eb05c970a1494742b0b8ecf315_5;
    $fe_last_val_98b575eb05c970a1494742b0b8ecf315_5  = 0;
}
else
{
    $fe_first_val_98b575eb05c970a1494742b0b8ecf315_5 = $fe_offset_98b575eb05c970a1494742b0b8ecf315_5;
    $fe_last_val_98b575eb05c970a1494742b0b8ecf315_5  = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_5 - 1;
}
// foreach
for ( $fe_i_98b575eb05c970a1494742b0b8ecf315_5 = $fe_first_val_98b575eb05c970a1494742b0b8ecf315_5; $fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_5 < $fe_max_98b575eb05c970a1494742b0b8ecf315_5 && ( $fe_reverse_98b575eb05c970a1494742b0b8ecf315_5 ? $fe_i_98b575eb05c970a1494742b0b8ecf315_5 >= $fe_last_val_98b575eb05c970a1494742b0b8ecf315_5 : $fe_i_98b575eb05c970a1494742b0b8ecf315_5 <= $fe_last_val_98b575eb05c970a1494742b0b8ecf315_5 ); $fe_reverse_98b575eb05c970a1494742b0b8ecf315_5 ? $fe_i_98b575eb05c970a1494742b0b8ecf315_5-- : $fe_i_98b575eb05c970a1494742b0b8ecf315_5++ )
{
$fe_key_98b575eb05c970a1494742b0b8ecf315_5 = $fe_array_keys_98b575eb05c970a1494742b0b8ecf315_5[$fe_i_98b575eb05c970a1494742b0b8ecf315_5];
$fe_val_98b575eb05c970a1494742b0b8ecf315_5 = $fe_array_98b575eb05c970a1494742b0b8ecf315_5[$fe_key_98b575eb05c970a1494742b0b8ecf315_5];
$vars[$rootNamespace]['zone'] = $fe_val_98b575eb05c970a1494742b0b8ecf315_5;
$vars[$rootNamespace]['index'] = $fe_key_98b575eb05c970a1494742b0b8ecf315_5;
$text .= '    ';
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
$text .= '        ';
$skipDelimiter = true;
continue;

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'zone_id', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['zone_id'] = $var;
    unset( $var );
}
$text .= '    <optgroup label="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_name'] : null;
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

$text .= '">
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_4 ) ) $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_4 = array();
$fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_4[] = compact( 'fe_array_98b575eb05c970a1494742b0b8ecf315_4', 'fe_array_keys_98b575eb05c970a1494742b0b8ecf315_4', 'fe_n_items_98b575eb05c970a1494742b0b8ecf315_4', 'fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_4', 'fe_i_98b575eb05c970a1494742b0b8ecf315_4', 'fe_key_98b575eb05c970a1494742b0b8ecf315_4', 'fe_val_98b575eb05c970a1494742b0b8ecf315_4', 'fe_offset_98b575eb05c970a1494742b0b8ecf315_4', 'fe_max_98b575eb05c970a1494742b0b8ecf315_4', 'fe_reverse_98b575eb05c970a1494742b0b8ecf315_4', 'fe_first_val_98b575eb05c970a1494742b0b8ecf315_4', 'fe_last_val_98b575eb05c970a1494742b0b8ecf315_4' );
unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_4 );
unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_4 );
$fe_array_98b575eb05c970a1494742b0b8ecf315_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone'] : null;
$fe_array_98b575eb05c970a1494742b0b8ecf315_41 = compiledFetchAttribute( $fe_array_98b575eb05c970a1494742b0b8ecf315_4, 'blocks' );
unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_4 );
$fe_array_98b575eb05c970a1494742b0b8ecf315_4 = $fe_array_98b575eb05c970a1494742b0b8ecf315_41;
if (! isset( $fe_array_98b575eb05c970a1494742b0b8ecf315_4 ) ) $fe_array_98b575eb05c970a1494742b0b8ecf315_4 = NULL;
while ( is_object( $fe_array_98b575eb05c970a1494742b0b8ecf315_4 ) and method_exists( $fe_array_98b575eb05c970a1494742b0b8ecf315_4, 'templateValue' ) )
    $fe_array_98b575eb05c970a1494742b0b8ecf315_4 = $fe_array_98b575eb05c970a1494742b0b8ecf315_4->templateValue();

$fe_array_keys_98b575eb05c970a1494742b0b8ecf315_4 = is_array( $fe_array_98b575eb05c970a1494742b0b8ecf315_4 ) ? array_keys( $fe_array_98b575eb05c970a1494742b0b8ecf315_4 ) : array();
$fe_n_items_98b575eb05c970a1494742b0b8ecf315_4 = count( $fe_array_keys_98b575eb05c970a1494742b0b8ecf315_4 );
$fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_4 = 0;
$fe_offset_98b575eb05c970a1494742b0b8ecf315_4 = 0;
$fe_max_98b575eb05c970a1494742b0b8ecf315_4 = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_4 - $fe_offset_98b575eb05c970a1494742b0b8ecf315_4;
$fe_reverse_98b575eb05c970a1494742b0b8ecf315_4 = false;
if ( $fe_offset_98b575eb05c970a1494742b0b8ecf315_4 < 0 || $fe_offset_98b575eb05c970a1494742b0b8ecf315_4 >= $fe_n_items_98b575eb05c970a1494742b0b8ecf315_4 )
{
    $fe_offset_98b575eb05c970a1494742b0b8ecf315_4 = ( $fe_offset_98b575eb05c970a1494742b0b8ecf315_4 < 0 ) ? 0 : $fe_n_items_98b575eb05c970a1494742b0b8ecf315_4;
    if ( $fe_n_items_98b575eb05c970a1494742b0b8ecf315_4 || $fe_offset_98b575eb05c970a1494742b0b8ecf315_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_98b575eb05c970a1494742b0b8ecf315_4'. Array count: $fe_n_items_98b575eb05c970a1494742b0b8ecf315_4");   
}
}
if ( $fe_max_98b575eb05c970a1494742b0b8ecf315_4 < 0 || $fe_offset_98b575eb05c970a1494742b0b8ecf315_4 + $fe_max_98b575eb05c970a1494742b0b8ecf315_4 > $fe_n_items_98b575eb05c970a1494742b0b8ecf315_4 )
{
    if ( $fe_max_98b575eb05c970a1494742b0b8ecf315_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_98b575eb05c970a1494742b0b8ecf315_4");
    $fe_max_98b575eb05c970a1494742b0b8ecf315_4 = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_4 - $fe_offset_98b575eb05c970a1494742b0b8ecf315_4;
}
if ( $fe_reverse_98b575eb05c970a1494742b0b8ecf315_4 )
{
    $fe_first_val_98b575eb05c970a1494742b0b8ecf315_4 = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_4 - 1 - $fe_offset_98b575eb05c970a1494742b0b8ecf315_4;
    $fe_last_val_98b575eb05c970a1494742b0b8ecf315_4  = 0;
}
else
{
    $fe_first_val_98b575eb05c970a1494742b0b8ecf315_4 = $fe_offset_98b575eb05c970a1494742b0b8ecf315_4;
    $fe_last_val_98b575eb05c970a1494742b0b8ecf315_4  = $fe_n_items_98b575eb05c970a1494742b0b8ecf315_4 - 1;
}
// foreach
for ( $fe_i_98b575eb05c970a1494742b0b8ecf315_4 = $fe_first_val_98b575eb05c970a1494742b0b8ecf315_4; $fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_4 < $fe_max_98b575eb05c970a1494742b0b8ecf315_4 && ( $fe_reverse_98b575eb05c970a1494742b0b8ecf315_4 ? $fe_i_98b575eb05c970a1494742b0b8ecf315_4 >= $fe_last_val_98b575eb05c970a1494742b0b8ecf315_4 : $fe_i_98b575eb05c970a1494742b0b8ecf315_4 <= $fe_last_val_98b575eb05c970a1494742b0b8ecf315_4 ); $fe_reverse_98b575eb05c970a1494742b0b8ecf315_4 ? $fe_i_98b575eb05c970a1494742b0b8ecf315_4-- : $fe_i_98b575eb05c970a1494742b0b8ecf315_4++ )
{
$fe_key_98b575eb05c970a1494742b0b8ecf315_4 = $fe_array_keys_98b575eb05c970a1494742b0b8ecf315_4[$fe_i_98b575eb05c970a1494742b0b8ecf315_4];
$fe_val_98b575eb05c970a1494742b0b8ecf315_4 = $fe_array_98b575eb05c970a1494742b0b8ecf315_4[$fe_key_98b575eb05c970a1494742b0b8ecf315_4];
$vars[$rootNamespace]['block'] = $fe_val_98b575eb05c970a1494742b0b8ecf315_4;
$vars[$rootNamespace]['index'] = $fe_key_98b575eb05c970a1494742b0b8ecf315_4;
$text .= '        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ': ';
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
        2 => 'block',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'type',
          2 => false,
        ),
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
$fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_4 ) ) extract( array_pop( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_4 ) );

else
{

unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_array_keys_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_n_items_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_i_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_key_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_val_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_offset_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_max_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_reverse_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_first_val_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_last_val_98b575eb05c970a1494742b0b8ecf315_4 );

unset( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_4 );

}

// foreach ends
$text .= '    </optgroup>
    ';
$fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_5 ) ) extract( array_pop( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_5 ) );

else
{

unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_array_keys_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_n_items_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_i_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_key_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_val_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_offset_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_max_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_reverse_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_first_val_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_last_val_98b575eb05c970a1494742b0b8ecf315_5 );

unset( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_5 );

}

// foreach ends
$text .= '</select>
</div>

<div class="block">
    <input id="addtoblock" class="button" type="submit" name="CustomActionButton[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_new_item]" value="Add to block" />
</div>';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_6++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_6 ) ) extract( array_pop( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_6 ) );

else
{

unset( $fe_array_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_array_keys_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_n_items_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_n_items_processed_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_i_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_key_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_val_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_offset_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_max_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_reverse_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_first_val_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_last_val_98b575eb05c970a1494742b0b8ecf315_6 );

unset( $fe_variable_stack_98b575eb05c970a1494742b0b8ecf315_6 );

}

// foreach ends
$text .= '
</div>


</div></div></div></div></div></div>

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
            1 => 'ezjsc::yui3',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::yui3io',
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezajaxsearch.js',
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
<!--
eZAJAXSearch.cfg = {                        searchstring: \'#search-string-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
                        searchbutton: \'#search-button-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
                        searchresults: \'#search-results-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
                        dateformattype: \'shortdatetime\',
                        resulttemplate: \'<div class="block"><div class="item-title">{title}<\\/div><div class="item-published-date">[{class_name}] {date}<\\/div><div class="item-selector"><input type="checkbox" value="{node_id}" name="SelectedNodeIDArray[]" /></div></div>\'
                   };
eZAJAXSearch.init();
-->
</script>

<!-- SEARCH BOX: END -->

';

$setArray = $oldSetArray_bf09ef0f0fb06e7cb11b5c95320c8553;
$tpl->Level--;
?>
