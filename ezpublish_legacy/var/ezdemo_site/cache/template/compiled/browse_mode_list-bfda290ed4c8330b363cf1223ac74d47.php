<?php
// URI:       design/admin/templates/content/browse_mode_list.tpl
// Filename:  design/admin/templates/content/browse_mode_list.tpl
// Timestamp: 1397808120 (Fri Apr 18 1:02:00 PDT 2014)
$oldSetArray_892eb1e9df63df3145b2bea8e426fa5e = isset( $setArray ) ? $setArray : array();
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

$text .= '<table class="list" cellspacing="0">
<tr>
    <th class="tight">
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_type'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'checkbox' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <img src="/ezpublish/design/admin/images/toggle-button-16x16.gif" width="16" height="16" alt="Invert selection." title="Invert selection." onclick="ezjs_toggleCheckboxes( document.browse, \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '[]\' ); return false;" />
    ';
}
else
{
$text .= '        &nbsp;
    ';
}
unset( $if_cond );
// if ends

$text .= '    </th>
    <th class="wide">
    Name
    </th>
    <th class="tight">
    Type
    </th>
</tr>
';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_array'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bglight',
  1 => 'bgdark',
);
if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['Nodes'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['Nodes'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '  <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    <td>
    
     ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$var2 = compiledFetchAttribute( $var1, 'ignore_nodes_select_subtree' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var3 = compiledFetchAttribute( $var2, 'item' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'path_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = array_merge( $var1, $var2 );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['ignore_nodes_merge'] = $var;
unset( $var );
$vars[$currentNamespace]['browse_permission'] = true;
$text .= '     ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'permission' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'permission' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'contentclass_id' );
unset( $if_cond );
$if_cond = $if_cond1;
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
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'permission' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'contentclass_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = is_array( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e5815f64d11c3a75391ffbb4baa6c83b_1 ) ) $fe_variable_stack_e5815f64d11c3a75391ffbb4baa6c83b_1 = array();
$fe_variable_stack_e5815f64d11c3a75391ffbb4baa6c83b_1[] = compact( 'fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_array_keys_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_n_items_processed_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_i_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_key_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_val_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_max_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_reverse_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_first_val_e5815f64d11c3a75391ffbb4baa6c83b_1', 'fe_last_val_e5815f64d11c3a75391ffbb4baa6c83b_1' );
unset( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 );
unset( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 );
$fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$fe_array_e5815f64d11c3a75391ffbb4baa6c83b_11 = compiledFetchAttribute( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1, 'permission' );
unset( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 );
$fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 = $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_11;
$fe_array_e5815f64d11c3a75391ffbb4baa6c83b_11 = compiledFetchAttribute( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1, 'contentclass_id' );
unset( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 );
$fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 = $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_11;
if (! isset( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 ) ) $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 = NULL;
while ( is_object( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 ) and method_exists( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1, 'templateValue' ) )
    $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 = $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1->templateValue();

$fe_array_keys_e5815f64d11c3a75391ffbb4baa6c83b_1 = is_array( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 ) ? array_keys( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 ) : array();
$fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1 = count( $fe_array_keys_e5815f64d11c3a75391ffbb4baa6c83b_1 );
$fe_n_items_processed_e5815f64d11c3a75391ffbb4baa6c83b_1 = 0;
$fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1 = 0;
$fe_max_e5815f64d11c3a75391ffbb4baa6c83b_1 = $fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1 - $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1;
$fe_reverse_e5815f64d11c3a75391ffbb4baa6c83b_1 = false;
if ( $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1 < 0 || $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1 >= $fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1 )
{
    $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1 = ( $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1 < 0 ) ? 0 : $fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1;
    if ( $fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1 || $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1'. Array count: $fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1");   
}
}
if ( $fe_max_e5815f64d11c3a75391ffbb4baa6c83b_1 < 0 || $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1 + $fe_max_e5815f64d11c3a75391ffbb4baa6c83b_1 > $fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1 )
{
    if ( $fe_max_e5815f64d11c3a75391ffbb4baa6c83b_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e5815f64d11c3a75391ffbb4baa6c83b_1");
    $fe_max_e5815f64d11c3a75391ffbb4baa6c83b_1 = $fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1 - $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1;
}
if ( $fe_reverse_e5815f64d11c3a75391ffbb4baa6c83b_1 )
{
    $fe_first_val_e5815f64d11c3a75391ffbb4baa6c83b_1 = $fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1 - 1 - $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1;
    $fe_last_val_e5815f64d11c3a75391ffbb4baa6c83b_1  = 0;
}
else
{
    $fe_first_val_e5815f64d11c3a75391ffbb4baa6c83b_1 = $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1;
    $fe_last_val_e5815f64d11c3a75391ffbb4baa6c83b_1  = $fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1 - 1;
}
// foreach
for ( $fe_i_e5815f64d11c3a75391ffbb4baa6c83b_1 = $fe_first_val_e5815f64d11c3a75391ffbb4baa6c83b_1; $fe_n_items_processed_e5815f64d11c3a75391ffbb4baa6c83b_1 < $fe_max_e5815f64d11c3a75391ffbb4baa6c83b_1 && ( $fe_reverse_e5815f64d11c3a75391ffbb4baa6c83b_1 ? $fe_i_e5815f64d11c3a75391ffbb4baa6c83b_1 >= $fe_last_val_e5815f64d11c3a75391ffbb4baa6c83b_1 : $fe_i_e5815f64d11c3a75391ffbb4baa6c83b_1 <= $fe_last_val_e5815f64d11c3a75391ffbb4baa6c83b_1 ); $fe_reverse_e5815f64d11c3a75391ffbb4baa6c83b_1 ? $fe_i_e5815f64d11c3a75391ffbb4baa6c83b_1-- : $fe_i_e5815f64d11c3a75391ffbb4baa6c83b_1++ )
{
$fe_key_e5815f64d11c3a75391ffbb4baa6c83b_1 = $fe_array_keys_e5815f64d11c3a75391ffbb4baa6c83b_1[$fe_i_e5815f64d11c3a75391ffbb4baa6c83b_1];
$fe_val_e5815f64d11c3a75391ffbb4baa6c83b_1 = $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1[$fe_key_e5815f64d11c3a75391ffbb4baa6c83b_1];
$vars[$rootNamespace]['contentclass_id'] = $fe_val_e5815f64d11c3a75391ffbb4baa6c83b_1;
$text .= '                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$var2 = compiledFetchAttribute( $var1, 'permission' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'access' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var3 = compiledFetchAttribute( $var2, 'item' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentclass_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentclass_id'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'checkAccess' ),
  array(     'access' => $var1,
    'contentobject' => $var2,
    'contentclass_id' => $var3,
    'parent_contentclass_id' => false,
    'language' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'browse_permission', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['browse_permission'] = $var;
    unset( $var );
}
$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse_permission', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse_permission'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
break;

}
unset( $if_cond );
// if ends

$text .= '                ';
$fe_n_items_processed_e5815f64d11c3a75391ffbb4baa6c83b_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e5815f64d11c3a75391ffbb4baa6c83b_1 ) ) extract( array_pop( $fe_variable_stack_e5815f64d11c3a75391ffbb4baa6c83b_1 ) );

else
{

unset( $fe_array_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_array_keys_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_n_items_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_n_items_processed_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_i_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_key_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_val_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_offset_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_max_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_reverse_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_first_val_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_last_val_e5815f64d11c3a75391ffbb4baa6c83b_1 );

unset( $fe_variable_stack_e5815f64d11c3a75391ffbb4baa6c83b_1 );

}

// foreach ends
$text .= '            ';
}
else
{
$text .= '                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$var2 = compiledFetchAttribute( $var1, 'permission' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'access' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var3 = compiledFetchAttribute( $var2, 'item' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$var4 = compiledFetchAttribute( $var3, 'permission' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'contentclass_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'checkAccess' ),
  array(     'access' => $var1,
    'contentobject' => $var2,
    'contentclass_id' => $var3,
    'parent_contentclass_id' => false,
    'language' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'browse_permission', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['browse_permission'] = $var;
    unset( $var );
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
else
{
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$var2 = compiledFetchAttribute( $var1, 'permission' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'access' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var3 = compiledFetchAttribute( $var2, 'item' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'checkAccess' ),
  array(     'access' => $var1,
    'contentobject' => $var2,
    'contentclass_id' => false,
    'parent_contentclass_id' => false,
    'language' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'browse_permission', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['browse_permission'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '     ';
}
unset( $if_cond );
// if ends

$text .= '     ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse_permission', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse_permission'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'ignore_nodes_select' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'item' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'node_id' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
if( is_string( $if_cond4 ) )
{
  $if_cond3 = ( strpos( $if_cond4, $if_cond5 ) !== false );
}
else if ( is_array( $if_cond4 ) )
{
  $if_cond3 = in_array( $if_cond5, $if_cond4 );
}
else
{
$if_cond3 = false;
}unset( $if_cond4, $if_cond5 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ignore_nodes_merge', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ignore_nodes_merge'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond4Data = array( 'value' => $if_cond4 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond4Data, false, false );
$if_cond4 = $if_cond4Data['value'];
unset( $if_cond4Data );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
unset( $if_cond5 );
unset( $if_cond6 );
unset( $if_cond6 );
$if_cond6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ignore_nodes_merge', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ignore_nodes_merge'] : null;
if (! isset( $if_cond6 ) ) $if_cond6 = NULL;
while ( is_object( $if_cond6 ) and method_exists( $if_cond6, 'templateValue' ) )
    $if_cond6 = $if_cond6->templateValue();
$if_cond5 = array_unique( $if_cond6 );unset( $if_cond6 );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond5Data = array( 'value' => $if_cond5 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond5Data, false, false );
$if_cond5 = $if_cond5Data['value'];
unset( $if_cond5Data );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond3 = ( ( $if_cond4 ) == ( $if_cond5 ) );
unset( $if_cond4, $if_cond5 );
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
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = is_array( $if_cond1 );unset( $if_cond1 );
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
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '                <input type="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_type'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_attribute'] : null;
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

$text .= '" />
            ';
}
else
{
$text .= '                <input type="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_type'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="_Disabled" value="" disabled="disabled" />
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
else
{
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'action_name' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 'MoveNode' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'action_name' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = ( ( $if_cond4 ) == ( 'CopyNode' ) );
unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'action_name' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = ( ( $if_cond5 ) == ( 'AddNodeAssignment' ) );
unset( $if_cond5 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( $if_cond2 )
    $if_cond1 = $if_cond2;
else if ( $if_cond3 )
    $if_cond1 = $if_cond3;
else if ( $if_cond4 )
    $if_cond1 = $if_cond4;
else
    $if_cond1 = false;
unset( $if_cond2, $if_cond3, $if_cond4 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'item' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'object' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'content_class' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'is_container' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
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
$text .= '                <input type="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_type'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_attribute'] : null;
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

$text .= '" disabled="disabled" />
            ';
}
else
{
$text .= '                <input type="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_type'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_attribute'] : null;
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

$text .= '" />
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
else
{
$text .= '        <input type="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_type'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="_Disabled" value="" disabled="disabled" />
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
unset( $vars[$currentNamespace]['ignore_nodes_merge'] );
unset( $vars[$currentNamespace]['browse_permission'] );
$text .= '    </td>
    <td>

    
    
    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$var2 = compiledFetchAttribute( $var1, 'ignore_nodes_click' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var3 = compiledFetchAttribute( $var2, 'item' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'path_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = array_merge( $var1, $var2 );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['ignore_nodes_merge'] = $var;
unset( $var );
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ignore_nodes_merge', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ignore_nodes_merge'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ignore_nodes_merge', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ignore_nodes_merge'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = array_unique( $if_cond3 );unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
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
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'action_name' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( 'MoveNode' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'browse', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['browse'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'action_name' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = ( ( $if_cond4 ) != ( 'CopyNode' ) );
unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( $if_cond2 )
    $if_cond1 = $if_cond2;
else if ( $if_cond3 )
    $if_cond1 = $if_cond3;
else
    $if_cond1 = false;
unset( $if_cond2, $if_cond3 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'object' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'content_class' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'is_container' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'class_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'Nodes',
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
          1 => 'item',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'class_name',
          2 => false,
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

$text .= '&nbsp;<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var4 = compiledFetchAttribute( $var3, 'item' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/browse/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
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

$text .= '</a>
        ';
}
else
{
$text .= '            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'class_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'Nodes',
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
          1 => 'item',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'class_name',
          2 => false,
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

$text .= '&nbsp;';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
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

$text .= '
        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
else
{
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'class_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'Nodes',
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
          1 => 'item',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'class_name',
          2 => false,
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

$text .= '&nbsp;';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
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

$text .= '
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
unset( $vars[$currentNamespace]['ignore_nodes_merge'] );
$text .= '
    </td>
    <td class="class nowrap">
    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Nodes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content_class' );
unset( $var1 );
$var1 = $var2;
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

$text .= '
    </td>
 </tr>';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '</table>';

$setArray = $oldSetArray_892eb1e9df63df3145b2bea8e426fa5e;
$tpl->Level--;
?>
