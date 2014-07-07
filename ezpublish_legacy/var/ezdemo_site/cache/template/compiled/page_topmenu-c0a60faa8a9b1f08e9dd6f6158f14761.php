<?php
// URI:       design/admin/templates/page_topmenu.tpl
// Filename:  design/admin/templates/page_topmenu.tpl
// Timestamp: 1397808121 (Fri Apr 18 1:02:01 PDT 2014)
$oldSetArray_0acf207822db298aa124e83f80c1fdcb = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="header-topmenu">
<ul>';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_4da4e68d3c6d3c59a979c37ca6cf42da_4 ) ) $fe_variable_stack_4da4e68d3c6d3c59a979c37ca6cf42da_4 = array();
$fe_variable_stack_4da4e68d3c6d3c59a979c37ca6cf42da_4[] = compact( 'fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_array_keys_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_n_items_processed_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_i_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_key_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_val_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_max_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_reverse_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_first_val_4da4e68d3c6d3c59a979c37ca6cf42da_4', 'fe_last_val_4da4e68d3c6d3c59a979c37ca6cf42da_4' );
unset( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 );
if (! isset( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 ) ) $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 = NULL;
while ( is_object( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 ) and method_exists( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4, 'templateValue' ) )
    $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 = $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4->templateValue();
$fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4Data = array( 'value' => $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 );
$tpl->processOperator( 'topmenu',
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
        2 => 'ui_context',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 7,
      1 => true,
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4Data, false, false );
$fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 = $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4Data['value'];
unset( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4Data );
if (! isset( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 ) ) $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 = NULL;
while ( is_object( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 ) and method_exists( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4, 'templateValue' ) )
    $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 = $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4->templateValue();

$fe_array_keys_4da4e68d3c6d3c59a979c37ca6cf42da_4 = is_array( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 ) ? array_keys( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 ) : array();
$fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4 = count( $fe_array_keys_4da4e68d3c6d3c59a979c37ca6cf42da_4 );
$fe_n_items_processed_4da4e68d3c6d3c59a979c37ca6cf42da_4 = 0;
$fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4 = 0;
$fe_max_4da4e68d3c6d3c59a979c37ca6cf42da_4 = $fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4 - $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4;
$fe_reverse_4da4e68d3c6d3c59a979c37ca6cf42da_4 = false;
if ( $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4 < 0 || $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4 >= $fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4 )
{
    $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4 = ( $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4 < 0 ) ? 0 : $fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4;
    if ( $fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4 || $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4'. Array count: $fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4");   
}
}
if ( $fe_max_4da4e68d3c6d3c59a979c37ca6cf42da_4 < 0 || $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4 + $fe_max_4da4e68d3c6d3c59a979c37ca6cf42da_4 > $fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4 )
{
    if ( $fe_max_4da4e68d3c6d3c59a979c37ca6cf42da_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_4da4e68d3c6d3c59a979c37ca6cf42da_4");
    $fe_max_4da4e68d3c6d3c59a979c37ca6cf42da_4 = $fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4 - $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4;
}
if ( $fe_reverse_4da4e68d3c6d3c59a979c37ca6cf42da_4 )
{
    $fe_first_val_4da4e68d3c6d3c59a979c37ca6cf42da_4 = $fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4 - 1 - $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4;
    $fe_last_val_4da4e68d3c6d3c59a979c37ca6cf42da_4  = 0;
}
else
{
    $fe_first_val_4da4e68d3c6d3c59a979c37ca6cf42da_4 = $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4;
    $fe_last_val_4da4e68d3c6d3c59a979c37ca6cf42da_4  = $fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4 - 1;
}
// foreach
for ( $fe_i_4da4e68d3c6d3c59a979c37ca6cf42da_4 = $fe_first_val_4da4e68d3c6d3c59a979c37ca6cf42da_4; $fe_n_items_processed_4da4e68d3c6d3c59a979c37ca6cf42da_4 < $fe_max_4da4e68d3c6d3c59a979c37ca6cf42da_4 && ( $fe_reverse_4da4e68d3c6d3c59a979c37ca6cf42da_4 ? $fe_i_4da4e68d3c6d3c59a979c37ca6cf42da_4 >= $fe_last_val_4da4e68d3c6d3c59a979c37ca6cf42da_4 : $fe_i_4da4e68d3c6d3c59a979c37ca6cf42da_4 <= $fe_last_val_4da4e68d3c6d3c59a979c37ca6cf42da_4 ); $fe_reverse_4da4e68d3c6d3c59a979c37ca6cf42da_4 ? $fe_i_4da4e68d3c6d3c59a979c37ca6cf42da_4-- : $fe_i_4da4e68d3c6d3c59a979c37ca6cf42da_4++ )
{
$fe_key_4da4e68d3c6d3c59a979c37ca6cf42da_4 = $fe_array_keys_4da4e68d3c6d3c59a979c37ca6cf42da_4[$fe_i_4da4e68d3c6d3c59a979c37ca6cf42da_4];
$fe_val_4da4e68d3c6d3c59a979c37ca6cf42da_4 = $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4[$fe_key_4da4e68d3c6d3c59a979c37ca6cf42da_4];
$vars[$rootNamespace]['menu'] = $fe_val_4da4e68d3c6d3c59a979c37ca6cf42da_4;
$text .= '    ';
$oldRestoreIncludeArray_9503db8487f9582b28934fd139094cb3 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['menu_item'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'menu_item', $vars[$currentNamespace]['menu_item'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['menu_item'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'menu_item', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['menu_item'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['navigationpart_identifier'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'navigationpart_identifier', $vars[$currentNamespace]['navigationpart_identifier'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['navigationpart_identifier'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'navigationpart_identifier', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part'] : null;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['navigationpart_identifier'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_topmenuitem-513418db7a3e5e854fa83b6443726dd1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/page_topmenuitem.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_topmenuitem-513418db7a3e5e854fa83b6443726dd1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/page_topmenuitem.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_9503db8487f9582b28934fd139094cb3;

$fe_n_items_processed_4da4e68d3c6d3c59a979c37ca6cf42da_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_4da4e68d3c6d3c59a979c37ca6cf42da_4 ) ) extract( array_pop( $fe_variable_stack_4da4e68d3c6d3c59a979c37ca6cf42da_4 ) );

else
{

unset( $fe_array_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_array_keys_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_n_items_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_n_items_processed_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_i_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_key_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_val_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_offset_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_max_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_reverse_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_first_val_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_last_val_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

unset( $fe_variable_stack_4da4e68d3c6d3c59a979c37ca6cf42da_4 );

}

// foreach ends
$text .= '</ul>
</div>

<script type="text/javascript">

jQuery( \'#header-topmenu ul li\' ).click(function(){ jQuery(this).addClass(\'active\'); });

</script>
';

$setArray = $oldSetArray_0acf207822db298aa124e83f80c1fdcb;
$tpl->Level--;
?>
