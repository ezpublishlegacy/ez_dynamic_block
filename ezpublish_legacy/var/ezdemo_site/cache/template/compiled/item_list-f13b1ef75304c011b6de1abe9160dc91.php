<?php
// URI:       extension/ezdemo/design/ezdemo/override/templates/block/item_list.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/block/item_list.tpl
// Timestamp: 1404683329 (Sun Jul 6 14:48:49 PDT 2014)
$oldSetArray_349cc141c743c621ebf59a24f0804729 = isset( $setArray ) ? $setArray : array();
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

// def $valid_nodes
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'valid_nodes' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'valid_nodes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'valid_nodes' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 37,
    2 => 38,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block/item_list.tpl',
) );
    $tpl->setVariable( 'valid_nodes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'valid_nodes', $var, $rootNamespace );
}

$text .= '
<div class="block-type-itemlist item-list">

    <div class="attribute-header">
        <h2>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
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

$text .= '</h2>
    </div>

    <article>
        <ul>
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_6d2cb74eceb7d1806485898eea55dbe0_7 ) ) $fe_variable_stack_6d2cb74eceb7d1806485898eea55dbe0_7 = array();
$fe_variable_stack_6d2cb74eceb7d1806485898eea55dbe0_7[] = compact( 'fe_array_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_array_keys_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_n_items_processed_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_i_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_key_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_val_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_max_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_reverse_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_first_val_6d2cb74eceb7d1806485898eea55dbe0_7', 'fe_last_val_6d2cb74eceb7d1806485898eea55dbe0_7' );
unset( $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7 );
unset( $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7 );
$fe_array_6d2cb74eceb7d1806485898eea55dbe0_7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_nodes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_nodes'] : null;
if (! isset( $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7 ) ) $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7 = NULL;
while ( is_object( $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7 ) and method_exists( $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7, 'templateValue' ) )
    $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7 = $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7->templateValue();

$fe_array_keys_6d2cb74eceb7d1806485898eea55dbe0_7 = is_array( $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7 ) ? array_keys( $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7 ) : array();
$fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7 = count( $fe_array_keys_6d2cb74eceb7d1806485898eea55dbe0_7 );
$fe_n_items_processed_6d2cb74eceb7d1806485898eea55dbe0_7 = 0;
$fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7 = 0;
$fe_max_6d2cb74eceb7d1806485898eea55dbe0_7 = $fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7 - $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7;
$fe_reverse_6d2cb74eceb7d1806485898eea55dbe0_7 = false;
if ( $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7 < 0 || $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7 >= $fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7 )
{
    $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7 = ( $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7 < 0 ) ? 0 : $fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7;
    if ( $fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7 || $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7'. Array count: $fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7");   
}
}
if ( $fe_max_6d2cb74eceb7d1806485898eea55dbe0_7 < 0 || $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7 + $fe_max_6d2cb74eceb7d1806485898eea55dbe0_7 > $fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7 )
{
    if ( $fe_max_6d2cb74eceb7d1806485898eea55dbe0_7 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_6d2cb74eceb7d1806485898eea55dbe0_7");
    $fe_max_6d2cb74eceb7d1806485898eea55dbe0_7 = $fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7 - $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7;
}
if ( $fe_reverse_6d2cb74eceb7d1806485898eea55dbe0_7 )
{
    $fe_first_val_6d2cb74eceb7d1806485898eea55dbe0_7 = $fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7 - 1 - $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7;
    $fe_last_val_6d2cb74eceb7d1806485898eea55dbe0_7  = 0;
}
else
{
    $fe_first_val_6d2cb74eceb7d1806485898eea55dbe0_7 = $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7;
    $fe_last_val_6d2cb74eceb7d1806485898eea55dbe0_7  = $fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7 - 1;
}
// foreach
for ( $fe_i_6d2cb74eceb7d1806485898eea55dbe0_7 = $fe_first_val_6d2cb74eceb7d1806485898eea55dbe0_7; $fe_n_items_processed_6d2cb74eceb7d1806485898eea55dbe0_7 < $fe_max_6d2cb74eceb7d1806485898eea55dbe0_7 && ( $fe_reverse_6d2cb74eceb7d1806485898eea55dbe0_7 ? $fe_i_6d2cb74eceb7d1806485898eea55dbe0_7 >= $fe_last_val_6d2cb74eceb7d1806485898eea55dbe0_7 : $fe_i_6d2cb74eceb7d1806485898eea55dbe0_7 <= $fe_last_val_6d2cb74eceb7d1806485898eea55dbe0_7 ); $fe_reverse_6d2cb74eceb7d1806485898eea55dbe0_7 ? $fe_i_6d2cb74eceb7d1806485898eea55dbe0_7-- : $fe_i_6d2cb74eceb7d1806485898eea55dbe0_7++ )
{
$fe_key_6d2cb74eceb7d1806485898eea55dbe0_7 = $fe_array_keys_6d2cb74eceb7d1806485898eea55dbe0_7[$fe_i_6d2cb74eceb7d1806485898eea55dbe0_7];
$fe_val_6d2cb74eceb7d1806485898eea55dbe0_7 = $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7[$fe_key_6d2cb74eceb7d1806485898eea55dbe0_7];
$vars[$rootNamespace]['valid_node'] = $fe_val_6d2cb74eceb7d1806485898eea55dbe0_7;
$text .= '           <li>
             <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_node'] : null;
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
             <br/>
             <div class="attribute-short">
                ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'valid_node',
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
          1 => 'data_map',
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
          1 => 'intro',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 16,
    1 => 16,
    2 => 422,
  ),
  1 => 
  array (
    0 => 16,
    1 => 71,
    2 => 477,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block/item_list.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '             </div>
           </li>
        ';
$fe_n_items_processed_6d2cb74eceb7d1806485898eea55dbe0_7++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_6d2cb74eceb7d1806485898eea55dbe0_7 ) ) extract( array_pop( $fe_variable_stack_6d2cb74eceb7d1806485898eea55dbe0_7 ) );

else
{

unset( $fe_array_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_array_keys_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_n_items_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_n_items_processed_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_i_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_key_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_val_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_offset_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_max_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_reverse_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_first_val_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_last_val_6d2cb74eceb7d1806485898eea55dbe0_7 );

unset( $fe_variable_stack_6d2cb74eceb7d1806485898eea55dbe0_7 );

}

// foreach ends
$text .= '        </ul>
    </article>

</div>
';
// undef $valid_nodes
$tpl->unsetLocalVariable( 'valid_nodes', $rootNamespace );


$setArray = $oldSetArray_349cc141c743c621ebf59a24f0804729;
$tpl->Level--;
?>
