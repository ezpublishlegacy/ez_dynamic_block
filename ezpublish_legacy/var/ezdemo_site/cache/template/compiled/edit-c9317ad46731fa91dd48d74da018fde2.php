<?php
// URI:       design:block/edit/edit.tpl
// Filename:  extension/ezflow/design/standard/templates/block/edit/edit.tpl
// Timestamp: 1404662622 (Sun Jul 6 9:03:42 PDT 2014)
$oldSetArray_7eff49d213727d1d7d489e575aecf33e = isset( $setArray ) ? $setArray : array();
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

// def $is_dynamic
if ( $tpl->hasVariable( 'is_dynamic', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'is_dynamic' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 4,
    1 => 28,
    2 => 110,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'is_dynamic', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'is_dynamic', false, $rootNamespace );
}

// def $is_custom
if ( $tpl->hasVariable( 'is_custom', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'is_custom' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 4,
    1 => 28,
    2 => 110,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'is_custom', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'is_custom', false, $rootNamespace );
}

// def $fetch_params
if ( $tpl->hasVariable( 'fetch_params', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'fetch_params' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 4,
    1 => 28,
    2 => 110,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'fetch_params', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'fetch_params', array (
), $rootNamespace );
}

// def $action
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'action' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'action', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'action' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 4,
    1 => 28,
    2 => 110,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'action', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'action', $var, $rootNamespace );
}

unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2 );
unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_21 );
unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 );
if (! isset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 ) ) $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 = NULL;
while ( is_object( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 ) and method_exists( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22, 'templateValue' ) )
    $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 = $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22->templateValue();
$elseif_cond_e4bc61626809036aa7802dd94c6574f5_22Data = array( 'value' => $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 );
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
      1 => 'ManualAddingOfItems',
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
                       $rootNamespace, $currentNamespace, $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22Data, false, false );
$elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 = $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22Data['value'];
unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22Data );
if (! isset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 ) ) $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 = NULL;
while ( is_object( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 ) and method_exists( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22, 'templateValue' ) )
    $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 = $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22->templateValue();
$elseif_cond_e4bc61626809036aa7802dd94c6574f5_21 = ( ( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 ) == ( 'disabled' ) );
unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 );
if (! isset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_21 ) ) $elseif_cond_e4bc61626809036aa7802dd94c6574f5_21 = NULL;
while ( is_object( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_21 ) and method_exists( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_21, 'templateValue' ) )
    $elseif_cond_e4bc61626809036aa7802dd94c6574f5_21 = $elseif_cond_e4bc61626809036aa7802dd94c6574f5_21->templateValue();
unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 );
unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 );
if (! isset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 ) ) $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 = NULL;
while ( is_object( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 ) and method_exists( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23, 'templateValue' ) )
    $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 = $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23->templateValue();
$elseif_cond_e4bc61626809036aa7802dd94c6574f5_23Data = array( 'value' => $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 );
$tpl->processOperator( 'ezini_hasvariable',
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
      1 => 'FetchClass',
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
                       $rootNamespace, $currentNamespace, $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23Data, false, false );
$elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 = $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23Data['value'];
unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23Data );
if (! isset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 ) ) $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 = NULL;
while ( is_object( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 ) and method_exists( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23, 'templateValue' ) )
    $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 = $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23->templateValue();
$elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 = !( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 );
unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_23 );
if (! isset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 ) ) $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 = NULL;
while ( is_object( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 ) and method_exists( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22, 'templateValue' ) )
    $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 = $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22->templateValue();
if ( !$elseif_cond_e4bc61626809036aa7802dd94c6574f5_21 )
    $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2 = false;
else if ( !$elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 )
    $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2 = false;
else
    $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2 = $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22;
unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_21, $elseif_cond_e4bc61626809036aa7802dd94c6574f5_22 );
if (! isset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2 ) ) $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2 = NULL;
while ( is_object( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2 ) and method_exists( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2, 'templateValue' ) )
    $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2 = $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
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
      1 => 'ManualAddingOfItems',
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
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 'disabled' ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'ezini_hasvariable',
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
      1 => 'FetchClass',
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
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
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
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'is_dynamic', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['is_dynamic'] = true;
}
}
elseif ( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2 )
{
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'is_custom', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['is_custom'] = true;
}
}
unset( $if_cond );
// if ends

unset( $elseif_cond_e4bc61626809036aa7802dd94c6574f5_2 );

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'fetch_params' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'unserialize',
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
          1 => 'fetch_params',
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'fetch_params', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['fetch_params'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

$text .= '
<div id="id_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="block-container">

<div class="block-header float-break">
    <div class="button-left">
        <em id="block-expand-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="trigger ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['action'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'add' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'collapse';
}
else
{
$text .= 'expand';
}
unset( $if_cond );
// if ends

$text .= '"></em> ';
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

$text .= ' ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'name' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= '- ';
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

}
unset( $if_cond );
// if ends

$text .= '    </div>
    <div class="button-right">
        <input id="block-up-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="block-control" type="image" src="/ezpublish/extension/ezflow/design/admin/images/ezpage/block_up.gif" name="CustomActionButton[';
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

$text .= '_move_block_up-';
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" alt="Move up" title="Move up" /> <input id="block-down-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="block-control" type="image" src="/ezpublish/extension/ezflow/design/admin/images/ezpage/block_down.gif" name="CustomActionButton[';
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

$text .= '_move_block_down-';
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" alt="Move down" title="Move down" /> <input id="block-remove-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="block-control" type="image" src="/ezpublish/extension/ezflow/design/admin/images/ezpage/block_del.gif" name="CustomActionButton[';
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

$text .= '_remove_block-';
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" title="Remove" alt="Remove" value="Remove" onclick="return confirmDiscard( \'Are you sure you want to remove this block?\' );" />
    </div>
</div>
<div class="block-content ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['action'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'add' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'expanded';
}
else
{
$text .= 'collapsed';
}
unset( $if_cond );
// if ends

$text .= '">

<div class="block-controls float-break">
    <div class="left blockname">
    <label>Name:</label>
    <input id="block-name-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="textfield block-control" type="text" name="ContentObjectAttribute_ezpage_block_name_array_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
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

$text .= '" size="35" />
    </div>
    <div class="right">
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_custom', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_custom'] : null;
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
$text .= '        <select id="block-overflow-control-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="list block-control" name="ContentObjectAttribute_ezpage_block_overflow_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']">
            <option value="">Set overflow</option>
            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_3 ) ) $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_3 = array();
$fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_3[] = compact( 'fe_array_e4bc61626809036aa7802dd94c6574f5_3', 'fe_array_keys_e4bc61626809036aa7802dd94c6574f5_3', 'fe_n_items_e4bc61626809036aa7802dd94c6574f5_3', 'fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_3', 'fe_i_e4bc61626809036aa7802dd94c6574f5_3', 'fe_key_e4bc61626809036aa7802dd94c6574f5_3', 'fe_val_e4bc61626809036aa7802dd94c6574f5_3', 'fe_offset_e4bc61626809036aa7802dd94c6574f5_3', 'fe_max_e4bc61626809036aa7802dd94c6574f5_3', 'fe_reverse_e4bc61626809036aa7802dd94c6574f5_3', 'fe_first_val_e4bc61626809036aa7802dd94c6574f5_3', 'fe_last_val_e4bc61626809036aa7802dd94c6574f5_3' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_3 );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_3 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone'] : null;
$fe_array_e4bc61626809036aa7802dd94c6574f5_31 = compiledFetchAttribute( $fe_array_e4bc61626809036aa7802dd94c6574f5_3, 'blocks' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_3 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_3 = $fe_array_e4bc61626809036aa7802dd94c6574f5_31;
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_3 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_3 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_3 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_3, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_3 = $fe_array_e4bc61626809036aa7802dd94c6574f5_3->templateValue();

$fe_array_keys_e4bc61626809036aa7802dd94c6574f5_3 = is_array( $fe_array_e4bc61626809036aa7802dd94c6574f5_3 ) ? array_keys( $fe_array_e4bc61626809036aa7802dd94c6574f5_3 ) : array();
$fe_n_items_e4bc61626809036aa7802dd94c6574f5_3 = count( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_3 );
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_3 = 0;
$fe_offset_e4bc61626809036aa7802dd94c6574f5_3 = 0;
$fe_max_e4bc61626809036aa7802dd94c6574f5_3 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_3 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_3;
$fe_reverse_e4bc61626809036aa7802dd94c6574f5_3 = false;
if ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_3 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_3 >= $fe_n_items_e4bc61626809036aa7802dd94c6574f5_3 )
{
    $fe_offset_e4bc61626809036aa7802dd94c6574f5_3 = ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_3 < 0 ) ? 0 : $fe_n_items_e4bc61626809036aa7802dd94c6574f5_3;
    if ( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_3 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e4bc61626809036aa7802dd94c6574f5_3'. Array count: $fe_n_items_e4bc61626809036aa7802dd94c6574f5_3");   
}
}
if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_3 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_3 + $fe_max_e4bc61626809036aa7802dd94c6574f5_3 > $fe_n_items_e4bc61626809036aa7802dd94c6574f5_3 )
{
    if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e4bc61626809036aa7802dd94c6574f5_3");
    $fe_max_e4bc61626809036aa7802dd94c6574f5_3 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_3 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_3;
}
if ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_3 )
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_3 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_3 - 1 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_3;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_3  = 0;
}
else
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_3 = $fe_offset_e4bc61626809036aa7802dd94c6574f5_3;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_3  = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_3 - 1;
}
// foreach
for ( $fe_i_e4bc61626809036aa7802dd94c6574f5_3 = $fe_first_val_e4bc61626809036aa7802dd94c6574f5_3; $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_3 < $fe_max_e4bc61626809036aa7802dd94c6574f5_3 && ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_3 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_3 >= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_3 : $fe_i_e4bc61626809036aa7802dd94c6574f5_3 <= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_3 ); $fe_reverse_e4bc61626809036aa7802dd94c6574f5_3 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_3-- : $fe_i_e4bc61626809036aa7802dd94c6574f5_3++ )
{
$fe_key_e4bc61626809036aa7802dd94c6574f5_3 = $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_3[$fe_i_e4bc61626809036aa7802dd94c6574f5_3];
$fe_val_e4bc61626809036aa7802dd94c6574f5_3 = $fe_array_e4bc61626809036aa7802dd94c6574f5_3[$fe_key_e4bc61626809036aa7802dd94c6574f5_3];
$vars[$rootNamespace]['overflow_block'] = $fe_val_e4bc61626809036aa7802dd94c6574f5_3;
$vars[$rootNamespace]['index'] = $fe_key_e4bc61626809036aa7802dd94c6574f5_3;
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'overflow_block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['overflow_block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '                    ';
$skipDelimiter = true;
continue;

$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'overflow_block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['overflow_block'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
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
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'overflow_block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['overflow_block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'overflow_id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
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

$text .= '. ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'overflow_block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['overflow_block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'name' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'overflow_block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['overflow_block'] : null;
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

}
else
{
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
        2 => 'overflow_block',
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

}
unset( $if_cond );
// if ends

$text .= '</option>
            ';
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_3 ) ) extract( array_pop( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_3 ) );

else
{

unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_i_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_key_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_val_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_offset_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_max_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_first_val_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_last_val_e4bc61626809036aa7802dd94c6574f5_3 );

unset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_3 );

}

// foreach ends
$text .= '        </select>
     ';
}
unset( $if_cond );
// if ends

$text .= '        <select id="block-view-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="list block-control" name="ContentObjectAttribute_ezpage_block_view_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']">
        ';
// def $view_name
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
      1 => 'ViewName',
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
if ( $tpl->hasVariable( 'view_name', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'view_name' is already defined.", array (
  0 => 
  array (
    0 => 48,
    1 => 8,
    2 => 3552,
  ),
  1 => 
  array (
    0 => 48,
    1 => 70,
    2 => 3614,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'view_name', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'view_name', $var, $rootNamespace );
}

$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_4 ) ) $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_4 = array();
$fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_4[] = compact( 'fe_array_e4bc61626809036aa7802dd94c6574f5_4', 'fe_array_keys_e4bc61626809036aa7802dd94c6574f5_4', 'fe_n_items_e4bc61626809036aa7802dd94c6574f5_4', 'fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_4', 'fe_i_e4bc61626809036aa7802dd94c6574f5_4', 'fe_key_e4bc61626809036aa7802dd94c6574f5_4', 'fe_val_e4bc61626809036aa7802dd94c6574f5_4', 'fe_offset_e4bc61626809036aa7802dd94c6574f5_4', 'fe_max_e4bc61626809036aa7802dd94c6574f5_4', 'fe_reverse_e4bc61626809036aa7802dd94c6574f5_4', 'fe_first_val_e4bc61626809036aa7802dd94c6574f5_4', 'fe_last_val_e4bc61626809036aa7802dd94c6574f5_4' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_4 );
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_4 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_4 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_4 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_4, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_4 = $fe_array_e4bc61626809036aa7802dd94c6574f5_4->templateValue();
$fe_array_e4bc61626809036aa7802dd94c6574f5_4Data = array( 'value' => $fe_array_e4bc61626809036aa7802dd94c6574f5_4 );
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
      1 => 'ViewList',
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
                       $rootNamespace, $currentNamespace, $fe_array_e4bc61626809036aa7802dd94c6574f5_4Data, false, false );
$fe_array_e4bc61626809036aa7802dd94c6574f5_4 = $fe_array_e4bc61626809036aa7802dd94c6574f5_4Data['value'];
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_4Data );
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_4 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_4 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_4 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_4, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_4 = $fe_array_e4bc61626809036aa7802dd94c6574f5_4->templateValue();

$fe_array_keys_e4bc61626809036aa7802dd94c6574f5_4 = is_array( $fe_array_e4bc61626809036aa7802dd94c6574f5_4 ) ? array_keys( $fe_array_e4bc61626809036aa7802dd94c6574f5_4 ) : array();
$fe_n_items_e4bc61626809036aa7802dd94c6574f5_4 = count( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_4 );
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_4 = 0;
$fe_offset_e4bc61626809036aa7802dd94c6574f5_4 = 0;
$fe_max_e4bc61626809036aa7802dd94c6574f5_4 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_4 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_4;
$fe_reverse_e4bc61626809036aa7802dd94c6574f5_4 = false;
if ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_4 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_4 >= $fe_n_items_e4bc61626809036aa7802dd94c6574f5_4 )
{
    $fe_offset_e4bc61626809036aa7802dd94c6574f5_4 = ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_4 < 0 ) ? 0 : $fe_n_items_e4bc61626809036aa7802dd94c6574f5_4;
    if ( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_4 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e4bc61626809036aa7802dd94c6574f5_4'. Array count: $fe_n_items_e4bc61626809036aa7802dd94c6574f5_4");   
}
}
if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_4 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_4 + $fe_max_e4bc61626809036aa7802dd94c6574f5_4 > $fe_n_items_e4bc61626809036aa7802dd94c6574f5_4 )
{
    if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e4bc61626809036aa7802dd94c6574f5_4");
    $fe_max_e4bc61626809036aa7802dd94c6574f5_4 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_4 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_4;
}
if ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_4 )
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_4 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_4 - 1 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_4;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_4  = 0;
}
else
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_4 = $fe_offset_e4bc61626809036aa7802dd94c6574f5_4;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_4  = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_4 - 1;
}
// foreach
for ( $fe_i_e4bc61626809036aa7802dd94c6574f5_4 = $fe_first_val_e4bc61626809036aa7802dd94c6574f5_4; $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_4 < $fe_max_e4bc61626809036aa7802dd94c6574f5_4 && ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_4 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_4 >= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_4 : $fe_i_e4bc61626809036aa7802dd94c6574f5_4 <= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_4 ); $fe_reverse_e4bc61626809036aa7802dd94c6574f5_4 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_4-- : $fe_i_e4bc61626809036aa7802dd94c6574f5_4++ )
{
$fe_key_e4bc61626809036aa7802dd94c6574f5_4 = $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_4[$fe_i_e4bc61626809036aa7802dd94c6574f5_4];
$fe_val_e4bc61626809036aa7802dd94c6574f5_4 = $fe_array_e4bc61626809036aa7802dd94c6574f5_4[$fe_key_e4bc61626809036aa7802dd94c6574f5_4];
$vars[$rootNamespace]['view'] = $fe_val_e4bc61626809036aa7802dd94c6574f5_4;
$text .= '            <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view'] : null;
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
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'view' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view'] : null;
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
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_name'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view'] : null;
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

$text .= '</option>
        ';
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_4 ) ) extract( array_pop( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_4 ) );

else
{

unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_i_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_key_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_val_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_offset_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_max_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_first_val_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_last_val_e4bc61626809036aa7802dd94c6574f5_4 );

unset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_4 );

}

// foreach ends
$text .= '        </select>
    </div>
</div>

<div class="block-parameters float-break">
    <div>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_dynamic', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_dynamic'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_6 ) ) $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_6 = array();
$fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_6[] = compact( 'fe_array_e4bc61626809036aa7802dd94c6574f5_6', 'fe_array_keys_e4bc61626809036aa7802dd94c6574f5_6', 'fe_n_items_e4bc61626809036aa7802dd94c6574f5_6', 'fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_6', 'fe_i_e4bc61626809036aa7802dd94c6574f5_6', 'fe_key_e4bc61626809036aa7802dd94c6574f5_6', 'fe_val_e4bc61626809036aa7802dd94c6574f5_6', 'fe_offset_e4bc61626809036aa7802dd94c6574f5_6', 'fe_max_e4bc61626809036aa7802dd94c6574f5_6', 'fe_reverse_e4bc61626809036aa7802dd94c6574f5_6', 'fe_first_val_e4bc61626809036aa7802dd94c6574f5_6', 'fe_last_val_e4bc61626809036aa7802dd94c6574f5_6' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_6 );
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_6 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_6 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_6 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_6, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_6 = $fe_array_e4bc61626809036aa7802dd94c6574f5_6->templateValue();
$fe_array_e4bc61626809036aa7802dd94c6574f5_6Data = array( 'value' => $fe_array_e4bc61626809036aa7802dd94c6574f5_6 );
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
      1 => 'FetchParameters',
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
                       $rootNamespace, $currentNamespace, $fe_array_e4bc61626809036aa7802dd94c6574f5_6Data, false, false );
$fe_array_e4bc61626809036aa7802dd94c6574f5_6 = $fe_array_e4bc61626809036aa7802dd94c6574f5_6Data['value'];
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_6Data );
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_6 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_6 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_6 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_6, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_6 = $fe_array_e4bc61626809036aa7802dd94c6574f5_6->templateValue();

$fe_array_keys_e4bc61626809036aa7802dd94c6574f5_6 = is_array( $fe_array_e4bc61626809036aa7802dd94c6574f5_6 ) ? array_keys( $fe_array_e4bc61626809036aa7802dd94c6574f5_6 ) : array();
$fe_n_items_e4bc61626809036aa7802dd94c6574f5_6 = count( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_6 );
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_6 = 0;
$fe_offset_e4bc61626809036aa7802dd94c6574f5_6 = 0;
$fe_max_e4bc61626809036aa7802dd94c6574f5_6 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_6 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_6;
$fe_reverse_e4bc61626809036aa7802dd94c6574f5_6 = false;
if ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_6 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_6 >= $fe_n_items_e4bc61626809036aa7802dd94c6574f5_6 )
{
    $fe_offset_e4bc61626809036aa7802dd94c6574f5_6 = ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_6 < 0 ) ? 0 : $fe_n_items_e4bc61626809036aa7802dd94c6574f5_6;
    if ( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_6 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_6 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e4bc61626809036aa7802dd94c6574f5_6'. Array count: $fe_n_items_e4bc61626809036aa7802dd94c6574f5_6");   
}
}
if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_6 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_6 + $fe_max_e4bc61626809036aa7802dd94c6574f5_6 > $fe_n_items_e4bc61626809036aa7802dd94c6574f5_6 )
{
    if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_6 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e4bc61626809036aa7802dd94c6574f5_6");
    $fe_max_e4bc61626809036aa7802dd94c6574f5_6 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_6 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_6;
}
if ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_6 )
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_6 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_6 - 1 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_6;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_6  = 0;
}
else
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_6 = $fe_offset_e4bc61626809036aa7802dd94c6574f5_6;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_6  = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_6 - 1;
}
// foreach
for ( $fe_i_e4bc61626809036aa7802dd94c6574f5_6 = $fe_first_val_e4bc61626809036aa7802dd94c6574f5_6; $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_6 < $fe_max_e4bc61626809036aa7802dd94c6574f5_6 && ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_6 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_6 >= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_6 : $fe_i_e4bc61626809036aa7802dd94c6574f5_6 <= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_6 ); $fe_reverse_e4bc61626809036aa7802dd94c6574f5_6 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_6-- : $fe_i_e4bc61626809036aa7802dd94c6574f5_6++ )
{
$fe_key_e4bc61626809036aa7802dd94c6574f5_6 = $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_6[$fe_i_e4bc61626809036aa7802dd94c6574f5_6];
$fe_val_e4bc61626809036aa7802dd94c6574f5_6 = $fe_array_e4bc61626809036aa7802dd94c6574f5_6[$fe_key_e4bc61626809036aa7802dd94c6574f5_6];
$vars[$rootNamespace]['value'] = $fe_val_e4bc61626809036aa7802dd94c6574f5_6;
$vars[$rootNamespace]['fetch_parameter'] = $fe_key_e4bc61626809036aa7802dd94c6574f5_6;
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'fetch_parameter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['fetch_parameter'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'Source' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <input id="block-fetch-parameter-choose-source-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="button block-control" name="CustomActionButton[';
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

$text .= '_new_source_browse-';
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" type="submit" value="Choose source" />
            <div class="source">
            Current source:
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'fetch_params', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['fetch_params'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'Source' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'fetch_params', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['fetch_params'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'Source' );
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
$text .= '                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_5 ) ) $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_5 = array();
$fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_5[] = compact( 'fe_array_e4bc61626809036aa7802dd94c6574f5_5', 'fe_array_keys_e4bc61626809036aa7802dd94c6574f5_5', 'fe_n_items_e4bc61626809036aa7802dd94c6574f5_5', 'fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_5', 'fe_i_e4bc61626809036aa7802dd94c6574f5_5', 'fe_key_e4bc61626809036aa7802dd94c6574f5_5', 'fe_val_e4bc61626809036aa7802dd94c6574f5_5', 'fe_offset_e4bc61626809036aa7802dd94c6574f5_5', 'fe_max_e4bc61626809036aa7802dd94c6574f5_5', 'fe_reverse_e4bc61626809036aa7802dd94c6574f5_5', 'fe_first_val_e4bc61626809036aa7802dd94c6574f5_5', 'fe_last_val_e4bc61626809036aa7802dd94c6574f5_5' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_5 );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_5 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'fetch_params', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['fetch_params'] : null;
$fe_array_e4bc61626809036aa7802dd94c6574f5_51 = compiledFetchAttribute( $fe_array_e4bc61626809036aa7802dd94c6574f5_5, 'Source' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_5 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_5 = $fe_array_e4bc61626809036aa7802dd94c6574f5_51;
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_5 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_5 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_5 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_5, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_5 = $fe_array_e4bc61626809036aa7802dd94c6574f5_5->templateValue();

$fe_array_keys_e4bc61626809036aa7802dd94c6574f5_5 = is_array( $fe_array_e4bc61626809036aa7802dd94c6574f5_5 ) ? array_keys( $fe_array_e4bc61626809036aa7802dd94c6574f5_5 ) : array();
$fe_n_items_e4bc61626809036aa7802dd94c6574f5_5 = count( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_5 );
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_5 = 0;
$fe_offset_e4bc61626809036aa7802dd94c6574f5_5 = 0;
$fe_max_e4bc61626809036aa7802dd94c6574f5_5 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_5 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_5;
$fe_reverse_e4bc61626809036aa7802dd94c6574f5_5 = false;
if ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_5 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_5 >= $fe_n_items_e4bc61626809036aa7802dd94c6574f5_5 )
{
    $fe_offset_e4bc61626809036aa7802dd94c6574f5_5 = ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_5 < 0 ) ? 0 : $fe_n_items_e4bc61626809036aa7802dd94c6574f5_5;
    if ( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_5 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e4bc61626809036aa7802dd94c6574f5_5'. Array count: $fe_n_items_e4bc61626809036aa7802dd94c6574f5_5");   
}
}
if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_5 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_5 + $fe_max_e4bc61626809036aa7802dd94c6574f5_5 > $fe_n_items_e4bc61626809036aa7802dd94c6574f5_5 )
{
    if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e4bc61626809036aa7802dd94c6574f5_5");
    $fe_max_e4bc61626809036aa7802dd94c6574f5_5 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_5 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_5;
}
if ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_5 )
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_5 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_5 - 1 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_5;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_5  = 0;
}
else
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_5 = $fe_offset_e4bc61626809036aa7802dd94c6574f5_5;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_5  = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_5 - 1;
}
// foreach
for ( $fe_i_e4bc61626809036aa7802dd94c6574f5_5 = $fe_first_val_e4bc61626809036aa7802dd94c6574f5_5; $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_5 < $fe_max_e4bc61626809036aa7802dd94c6574f5_5 && ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_5 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_5 >= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_5 : $fe_i_e4bc61626809036aa7802dd94c6574f5_5 <= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_5 ); $fe_reverse_e4bc61626809036aa7802dd94c6574f5_5 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_5-- : $fe_i_e4bc61626809036aa7802dd94c6574f5_5++ )
{
$fe_key_e4bc61626809036aa7802dd94c6574f5_5 = $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_5[$fe_i_e4bc61626809036aa7802dd94c6574f5_5];
$fe_val_e4bc61626809036aa7802dd94c6574f5_5 = $fe_array_e4bc61626809036aa7802dd94c6574f5_5[$fe_key_e4bc61626809036aa7802dd94c6574f5_5];
$vars[$rootNamespace]['source'] = $fe_val_e4bc61626809036aa7802dd94c6574f5_5;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ', ';
} // delimiter ends

$text .= '                        ';
// def $source_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'source_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'source_node' is already defined.", array (
  0 => 
  array (
    0 => 67,
    1 => 24,
    2 => 4650,
  ),
  1 => 
  array (
    0 => 67,
    1 => 97,
    2 => 4723,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'source_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'source_node', $var, $rootNamespace );
}

$text .= '                        <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
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

$text .= ' target="_blank" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
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

$text .= ' [';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
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

$text .= ']">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
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

$text .= '</a>                        ';
// undef $source_node
$tpl->unsetLocalVariable( 'source_node', $rootNamespace );

$text .= '                    ';
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_5 ) ) extract( array_pop( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_5 ) );

else
{

unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_i_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_key_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_val_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_offset_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_max_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_first_val_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_last_val_e4bc61626809036aa7802dd94c6574f5_5 );

unset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_5 );

}

// foreach ends
$text .= '                ';
}
else
{
$text .= '                    ';
// def $source_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'fetch_params', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['fetch_params'] : null;
$var2 = compiledFetchAttribute( $var1, 'Source' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'source_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'source_node' is already defined.", array (
  0 => 
  array (
    0 => 72,
    1 => 20,
    2 => 5065,
  ),
  1 => 
  array (
    0 => 72,
    1 => 109,
    2 => 5154,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'source_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'source_node', $var, $rootNamespace );
}

$text .= '                    <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
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

$text .= ' target="_blank" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
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

$text .= ' [';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
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

$text .= ']">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
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
// undef $source_node
$tpl->unsetLocalVariable( 'source_node', $rootNamespace );

$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            </div>
            <div class="break"></div>
        ';
}
else
{
$text .= '        <label>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'fetch_parameter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['fetch_parameter'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ':</label> <input id="block-fetch-parameter-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'fetch_parameter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['fetch_parameter'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="textfield block-control" type="text" name="ContentObjectAttribute_ezpage_block_fetch_param_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'fetch_parameter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['fetch_parameter'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'fetch_params', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['fetch_params'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'fetch_parameter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['fetch_parameter'] : null;
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
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_6++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_6 ) ) extract( array_pop( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_6 ) );

else
{

unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_i_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_key_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_val_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_offset_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_max_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_first_val_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_last_val_e4bc61626809036aa7802dd94c6574f5_6 );

unset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_6 );

}

// foreach ends
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezini_hasvariable',
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
      1 => 'CustomAttributes',
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
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $custom_attributes
if ( $tpl->hasVariable( 'custom_attributes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'custom_attributes' is already defined.", array (
  0 => 
  array (
    0 => 85,
    1 => 8,
    2 => 5940,
  ),
  1 => 
  array (
    0 => 89,
    1 => 28,
    2 => 6147,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'custom_attributes', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'custom_attributes', array (
), $rootNamespace );
}

// def $custom_attribute_types
if ( $tpl->hasVariable( 'custom_attribute_types', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'custom_attribute_types' is already defined.", array (
  0 => 
  array (
    0 => 85,
    1 => 8,
    2 => 5940,
  ),
  1 => 
  array (
    0 => 89,
    1 => 28,
    2 => 6147,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'custom_attribute_types', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'custom_attribute_types', array (
), $rootNamespace );
}

// def $custom_attribute_names
if ( $tpl->hasVariable( 'custom_attribute_names', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'custom_attribute_names' is already defined.", array (
  0 => 
  array (
    0 => 85,
    1 => 8,
    2 => 5940,
  ),
  1 => 
  array (
    0 => 89,
    1 => 28,
    2 => 6147,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'custom_attribute_names', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'custom_attribute_names', array (
), $rootNamespace );
}

// def $custom_attribute_selections
if ( $tpl->hasVariable( 'custom_attribute_selections', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'custom_attribute_selections' is already defined.", array (
  0 => 
  array (
    0 => 85,
    1 => 8,
    2 => 5940,
  ),
  1 => 
  array (
    0 => 89,
    1 => 28,
    2 => 6147,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'custom_attribute_selections', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'custom_attribute_selections', array (
), $rootNamespace );
}

// def $loop_count
if ( $tpl->hasVariable( 'loop_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'loop_count' is already defined.", array (
  0 => 
  array (
    0 => 85,
    1 => 8,
    2 => 5940,
  ),
  1 => 
  array (
    0 => 89,
    1 => 28,
    2 => 6147,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'loop_count', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'loop_count', 0, $rootNamespace );
}

$text .= '        ';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezini_hasvariable',
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
      1 => 'CustomAttributes',
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
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
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
      1 => 'CustomAttributes',
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'custom_attributes', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['custom_attributes'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezini_hasvariable',
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
      1 => 'CustomAttributeTypes',
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
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
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
      1 => 'CustomAttributeTypes',
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'custom_attribute_types', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['custom_attribute_types'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezini_hasvariable',
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
      1 => 'CustomAttributeNames',
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
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
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
      1 => 'CustomAttributeNames',
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'custom_attribute_names', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['custom_attribute_names'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_8 ) ) $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_8 = array();
$fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_8[] = compact( 'fe_array_e4bc61626809036aa7802dd94c6574f5_8', 'fe_array_keys_e4bc61626809036aa7802dd94c6574f5_8', 'fe_n_items_e4bc61626809036aa7802dd94c6574f5_8', 'fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_8', 'fe_i_e4bc61626809036aa7802dd94c6574f5_8', 'fe_key_e4bc61626809036aa7802dd94c6574f5_8', 'fe_val_e4bc61626809036aa7802dd94c6574f5_8', 'fe_offset_e4bc61626809036aa7802dd94c6574f5_8', 'fe_max_e4bc61626809036aa7802dd94c6574f5_8', 'fe_reverse_e4bc61626809036aa7802dd94c6574f5_8', 'fe_first_val_e4bc61626809036aa7802dd94c6574f5_8', 'fe_last_val_e4bc61626809036aa7802dd94c6574f5_8' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_8 );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_8 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attributes'] : null;
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_8 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_8 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_8 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_8, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_8 = $fe_array_e4bc61626809036aa7802dd94c6574f5_8->templateValue();

$fe_array_keys_e4bc61626809036aa7802dd94c6574f5_8 = is_array( $fe_array_e4bc61626809036aa7802dd94c6574f5_8 ) ? array_keys( $fe_array_e4bc61626809036aa7802dd94c6574f5_8 ) : array();
$fe_n_items_e4bc61626809036aa7802dd94c6574f5_8 = count( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_8 );
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_8 = 0;
$fe_offset_e4bc61626809036aa7802dd94c6574f5_8 = 0;
$fe_max_e4bc61626809036aa7802dd94c6574f5_8 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_8 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_8;
$fe_reverse_e4bc61626809036aa7802dd94c6574f5_8 = false;
if ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_8 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_8 >= $fe_n_items_e4bc61626809036aa7802dd94c6574f5_8 )
{
    $fe_offset_e4bc61626809036aa7802dd94c6574f5_8 = ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_8 < 0 ) ? 0 : $fe_n_items_e4bc61626809036aa7802dd94c6574f5_8;
    if ( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_8 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_8 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e4bc61626809036aa7802dd94c6574f5_8'. Array count: $fe_n_items_e4bc61626809036aa7802dd94c6574f5_8");   
}
}
if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_8 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_8 + $fe_max_e4bc61626809036aa7802dd94c6574f5_8 > $fe_n_items_e4bc61626809036aa7802dd94c6574f5_8 )
{
    if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_8 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e4bc61626809036aa7802dd94c6574f5_8");
    $fe_max_e4bc61626809036aa7802dd94c6574f5_8 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_8 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_8;
}
if ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_8 )
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_8 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_8 - 1 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_8;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_8  = 0;
}
else
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_8 = $fe_offset_e4bc61626809036aa7802dd94c6574f5_8;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_8  = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_8 - 1;
}
// foreach
for ( $fe_i_e4bc61626809036aa7802dd94c6574f5_8 = $fe_first_val_e4bc61626809036aa7802dd94c6574f5_8; $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_8 < $fe_max_e4bc61626809036aa7802dd94c6574f5_8 && ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_8 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_8 >= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_8 : $fe_i_e4bc61626809036aa7802dd94c6574f5_8 <= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_8 ); $fe_reverse_e4bc61626809036aa7802dd94c6574f5_8 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_8-- : $fe_i_e4bc61626809036aa7802dd94c6574f5_8++ )
{
$fe_key_e4bc61626809036aa7802dd94c6574f5_8 = $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_8[$fe_i_e4bc61626809036aa7802dd94c6574f5_8];
$fe_val_e4bc61626809036aa7802dd94c6574f5_8 = $fe_array_e4bc61626809036aa7802dd94c6574f5_8[$fe_key_e4bc61626809036aa7802dd94c6574f5_8];
$vars[$rootNamespace]['custom_attrib'] = $fe_val_e4bc61626809036aa7802dd94c6574f5_8;
$text .= '            ';
// def $use_browse_mode
if ( $tpl->hasVariable( 'use_browse_mode', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'use_browse_mode' is already defined.", array (
  0 => 
  array (
    0 => 100,
    1 => 12,
    2 => 6801,
  ),
  1 => 
  array (
    0 => 100,
    1 => 42,
    2 => 6831,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'use_browse_mode', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'use_browse_mode', array (
), $rootNamespace );
}

$text .= '            ';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezini_hasvariable',
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
      1 => 'UseBrowseMode',
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
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
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
      1 => 'UseBrowseMode',
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'use_browse_mode', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['use_browse_mode'] = $var;
    unset( $var );
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'use_browse_mode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['use_browse_mode'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'true' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attribute_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attribute_names'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<label>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attribute_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attribute_names'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
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

$text .= ':</label>';
}
unset( $if_cond );
// if ends

$text .= '                <input id="block-choose-source-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="button block-control" name="CustomActionButton[';
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

$text .= '_custom_attribute_browse-';
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" type="submit" value="Choose source" />
                <div class="source">
                    Current source:
                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'custom_attributes' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        ';
// def $source_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var2 = compiledFetchAttribute( $var1, 'custom_attributes' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'source_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'source_node' is already defined.", array (
  0 => 
  array (
    0 => 110,
    1 => 24,
    2 => 7709,
  ),
  1 => 
  array (
    0 => 110,
    1 => 130,
    2 => 7815,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'source_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'source_node', $var, $rootNamespace );
}

$text .= '                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                            <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'source_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['source_node'] : null;
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
unset( $if_cond );
// if ends

$text .= '                        ';
// undef $source_node
$tpl->unsetLocalVariable( 'source_node', $rootNamespace );

$text .= '                    ';
}
unset( $if_cond );
// if ends

$text .= '                </div>
            ';
}
else
{
$text .= '                <label>';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attribute_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attribute_names'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attribute_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attribute_names'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
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

}
else
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

}
unset( $if_cond );
// if ends

$text .= ':</label> 
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attribute_types', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attribute_types'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attribute_types', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attribute_types'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attribute_types', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attribute_types'] : null;
unset( $match2 );
unset( $match2 );
$match2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $match2 ) ) $match2 = NULL;
while ( is_object( $match2 ) and method_exists( $match2, 'templateValue' ) )
    $match2 = $match2->templateValue();
$match1 = compiledFetchAttribute( $match, $match2 );
unset( $match );
$match = $match1;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "text":
    {
$text .= '                        <textarea id="block-custom_attribute-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="textbox block-control" name="ContentObjectAttribute_ezpage_block_custom_attribute_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" rows="7">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var2 = compiledFetchAttribute( $var1, 'custom_attributes' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '</textarea>
                        ';
    } break;
    case "checkbox":
    {
$text .= '                        <input id="block-custom_attribute-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-a" class="block-control" type="hidden" name="ContentObjectAttribute_ezpage_block_custom_attribute_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="0" />
                        <input id="block-custom_attribute-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-b" class="block-control" type="checkbox" name="ContentObjectAttribute_ezpage_block_custom_attribute_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'custom_attributes' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '1' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' value="1" />
                        ';
    } break;
    case "string":
    {
$text .= '                        <input id="block-custom_attribute-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="textfield block-control" type="text" name="ContentObjectAttribute_ezpage_block_custom_attribute_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var2 = compiledFetchAttribute( $var1, 'custom_attributes' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '" />
                        ';
    } break;
    case "select":
    {
$text .= '                            ';
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
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'CustomAttributeSelection_',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'custom_attrib',
            ),
            2 => false,
          ),
        ),
      ),
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'custom_attribute_selections', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['custom_attribute_selections'] = $var;
    unset( $var );
}
$text .= '                            <select id="block-custom_attribute-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="block-control" name="ContentObjectAttribute_ezpage_block_custom_attribute_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']">
                                ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_7 ) ) $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_7 = array();
$fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_7[] = compact( 'fe_array_e4bc61626809036aa7802dd94c6574f5_7', 'fe_array_keys_e4bc61626809036aa7802dd94c6574f5_7', 'fe_n_items_e4bc61626809036aa7802dd94c6574f5_7', 'fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_7', 'fe_i_e4bc61626809036aa7802dd94c6574f5_7', 'fe_key_e4bc61626809036aa7802dd94c6574f5_7', 'fe_val_e4bc61626809036aa7802dd94c6574f5_7', 'fe_offset_e4bc61626809036aa7802dd94c6574f5_7', 'fe_max_e4bc61626809036aa7802dd94c6574f5_7', 'fe_reverse_e4bc61626809036aa7802dd94c6574f5_7', 'fe_first_val_e4bc61626809036aa7802dd94c6574f5_7', 'fe_last_val_e4bc61626809036aa7802dd94c6574f5_7' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_7 );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_7 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attribute_selections', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attribute_selections'] : null;
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_7 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_7 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_7 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_7, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_7 = $fe_array_e4bc61626809036aa7802dd94c6574f5_7->templateValue();

$fe_array_keys_e4bc61626809036aa7802dd94c6574f5_7 = is_array( $fe_array_e4bc61626809036aa7802dd94c6574f5_7 ) ? array_keys( $fe_array_e4bc61626809036aa7802dd94c6574f5_7 ) : array();
$fe_n_items_e4bc61626809036aa7802dd94c6574f5_7 = count( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_7 );
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_7 = 0;
$fe_offset_e4bc61626809036aa7802dd94c6574f5_7 = 0;
$fe_max_e4bc61626809036aa7802dd94c6574f5_7 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_7 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_7;
$fe_reverse_e4bc61626809036aa7802dd94c6574f5_7 = false;
if ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_7 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_7 >= $fe_n_items_e4bc61626809036aa7802dd94c6574f5_7 )
{
    $fe_offset_e4bc61626809036aa7802dd94c6574f5_7 = ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_7 < 0 ) ? 0 : $fe_n_items_e4bc61626809036aa7802dd94c6574f5_7;
    if ( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_7 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_7 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e4bc61626809036aa7802dd94c6574f5_7'. Array count: $fe_n_items_e4bc61626809036aa7802dd94c6574f5_7");   
}
}
if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_7 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_7 + $fe_max_e4bc61626809036aa7802dd94c6574f5_7 > $fe_n_items_e4bc61626809036aa7802dd94c6574f5_7 )
{
    if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_7 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e4bc61626809036aa7802dd94c6574f5_7");
    $fe_max_e4bc61626809036aa7802dd94c6574f5_7 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_7 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_7;
}
if ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_7 )
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_7 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_7 - 1 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_7;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_7  = 0;
}
else
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_7 = $fe_offset_e4bc61626809036aa7802dd94c6574f5_7;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_7  = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_7 - 1;
}
// foreach
for ( $fe_i_e4bc61626809036aa7802dd94c6574f5_7 = $fe_first_val_e4bc61626809036aa7802dd94c6574f5_7; $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_7 < $fe_max_e4bc61626809036aa7802dd94c6574f5_7 && ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_7 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_7 >= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_7 : $fe_i_e4bc61626809036aa7802dd94c6574f5_7 <= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_7 ); $fe_reverse_e4bc61626809036aa7802dd94c6574f5_7 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_7-- : $fe_i_e4bc61626809036aa7802dd94c6574f5_7++ )
{
$fe_key_e4bc61626809036aa7802dd94c6574f5_7 = $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_7[$fe_i_e4bc61626809036aa7802dd94c6574f5_7];
$fe_val_e4bc61626809036aa7802dd94c6574f5_7 = $fe_array_e4bc61626809036aa7802dd94c6574f5_7[$fe_key_e4bc61626809036aa7802dd94c6574f5_7];
$vars[$rootNamespace]['selection_name'] = $fe_val_e4bc61626809036aa7802dd94c6574f5_7;
$vars[$rootNamespace]['selection_value'] = $fe_key_e4bc61626809036aa7802dd94c6574f5_7;
$text .= '                                    <option value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'selection_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['selection_value'] : null;
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

$text .= '"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'custom_attributes' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'selection_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['selection_value'] : null;
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
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= ' />';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'selection_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['selection_name'] : null;
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

$text .= '</option>
                                ';
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_7++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_7 ) ) extract( array_pop( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_7 ) );

else
{

unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_i_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_key_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_val_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_offset_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_max_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_first_val_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_last_val_e4bc61626809036aa7802dd94c6574f5_7 );

unset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_7 );

}

// foreach ends
$text .= '                            </select>
                        ';
    } break;
    default:
    {
$text .= '                        <input id="block-custom_attribute-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="textfield block-control" type="text" name="ContentObjectAttribute_ezpage_block_custom_attribute_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var2 = compiledFetchAttribute( $var1, 'custom_attributes' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '" />
                        ';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '                ';
}
else
{
$text .= '                <input id="block-custom_attribute-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="textfield block-control" type="text" name="ContentObjectAttribute_ezpage_block_custom_attribute_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var2 = compiledFetchAttribute( $var1, 'custom_attributes' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_attrib', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_attrib'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '" />
                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            ';
// undef $use_browse_mode
$tpl->unsetLocalVariable( 'use_browse_mode', $rootNamespace );

$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_count'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'loop_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['loop_count'] = $var;
    unset( $var );
}
$text .= '        ';
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_8++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_8 ) ) extract( array_pop( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_8 ) );

else
{

unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_i_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_key_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_val_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_offset_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_max_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_first_val_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_last_val_e4bc61626809036aa7802dd94c6574f5_8 );

unset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_8 );

}

// foreach ends
$text .= '        ';
// undef $loop_count
$tpl->unsetLocalVariable( 'loop_count', $rootNamespace );

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_dynamic', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_dynamic'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = !( $if_cond2 );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_custom', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_custom'] : null;
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
$text .= '        <div>
            <input id="block-add-item-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="button block-control" name="CustomActionButton[';
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

$text .= '_new_item_browse-';
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" type="submit" value="Add item" />
        </div>
    ';
}
unset( $if_cond );
// if ends

$text .= '    </div>
</div>
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_custom', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_custom'] : null;
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
$text .= '<table border="0" cellspacing="1" class="items queue" id="z:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_b:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_q">
    <tbody>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'waiting' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_9 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_9 = current( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_9 );

if ( !isset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_9 ) ) $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_9 = array();
$fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_9[] = compact( 'fe_array_e4bc61626809036aa7802dd94c6574f5_9', 'fe_array_keys_e4bc61626809036aa7802dd94c6574f5_9', 'fe_n_items_e4bc61626809036aa7802dd94c6574f5_9', 'fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_9', 'fe_i_e4bc61626809036aa7802dd94c6574f5_9', 'fe_key_e4bc61626809036aa7802dd94c6574f5_9', 'fe_val_e4bc61626809036aa7802dd94c6574f5_9', 'fe_offset_e4bc61626809036aa7802dd94c6574f5_9', 'fe_max_e4bc61626809036aa7802dd94c6574f5_9', 'fe_reverse_e4bc61626809036aa7802dd94c6574f5_9', 'fe_first_val_e4bc61626809036aa7802dd94c6574f5_9', 'fe_last_val_e4bc61626809036aa7802dd94c6574f5_9' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_9 );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_9 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$fe_array_e4bc61626809036aa7802dd94c6574f5_91 = compiledFetchAttribute( $fe_array_e4bc61626809036aa7802dd94c6574f5_9, 'waiting' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_9 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_9 = $fe_array_e4bc61626809036aa7802dd94c6574f5_91;
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_9 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_9 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_9 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_9, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_9 = $fe_array_e4bc61626809036aa7802dd94c6574f5_9->templateValue();

$fe_array_keys_e4bc61626809036aa7802dd94c6574f5_9 = is_array( $fe_array_e4bc61626809036aa7802dd94c6574f5_9 ) ? array_keys( $fe_array_e4bc61626809036aa7802dd94c6574f5_9 ) : array();
$fe_n_items_e4bc61626809036aa7802dd94c6574f5_9 = count( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_9 );
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_9 = 0;
$fe_offset_e4bc61626809036aa7802dd94c6574f5_9 = 0;
$fe_max_e4bc61626809036aa7802dd94c6574f5_9 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_9 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_9;
$fe_reverse_e4bc61626809036aa7802dd94c6574f5_9 = false;
if ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_9 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_9 >= $fe_n_items_e4bc61626809036aa7802dd94c6574f5_9 )
{
    $fe_offset_e4bc61626809036aa7802dd94c6574f5_9 = ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_9 < 0 ) ? 0 : $fe_n_items_e4bc61626809036aa7802dd94c6574f5_9;
    if ( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_9 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_9 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e4bc61626809036aa7802dd94c6574f5_9'. Array count: $fe_n_items_e4bc61626809036aa7802dd94c6574f5_9");   
}
}
if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_9 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_9 + $fe_max_e4bc61626809036aa7802dd94c6574f5_9 > $fe_n_items_e4bc61626809036aa7802dd94c6574f5_9 )
{
    if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_9 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e4bc61626809036aa7802dd94c6574f5_9");
    $fe_max_e4bc61626809036aa7802dd94c6574f5_9 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_9 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_9;
}
if ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_9 )
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_9 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_9 - 1 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_9;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_9  = 0;
}
else
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_9 = $fe_offset_e4bc61626809036aa7802dd94c6574f5_9;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_9  = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_9 - 1;
}
// foreach
for ( $fe_i_e4bc61626809036aa7802dd94c6574f5_9 = $fe_first_val_e4bc61626809036aa7802dd94c6574f5_9; $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_9 < $fe_max_e4bc61626809036aa7802dd94c6574f5_9 && ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_9 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_9 >= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_9 : $fe_i_e4bc61626809036aa7802dd94c6574f5_9 <= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_9 ); $fe_reverse_e4bc61626809036aa7802dd94c6574f5_9 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_9-- : $fe_i_e4bc61626809036aa7802dd94c6574f5_9++ )
{
$fe_key_e4bc61626809036aa7802dd94c6574f5_9 = $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_9[$fe_i_e4bc61626809036aa7802dd94c6574f5_9];
$fe_val_e4bc61626809036aa7802dd94c6574f5_9 = $fe_array_e4bc61626809036aa7802dd94c6574f5_9[$fe_key_e4bc61626809036aa7802dd94c6574f5_9];
$vars[$rootNamespace]['item'] = $fe_val_e4bc61626809036aa7802dd94c6574f5_9;
$vars[$rootNamespace]['index'] = $fe_key_e4bc61626809036aa7802dd94c6574f5_9;
// setting current sequence value
$vars[$rootNamespace]['style'] = $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_9;
$text .= '    ';
// def $item_object
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'object_id' );
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
if ( $tpl->hasVariable( 'item_object', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'item_object' is already defined.", array (
  0 => 
  array (
    0 => 165,
    1 => 4,
    2 => 12228,
  ),
  1 => 
  array (
    0 => 165,
    1 => 89,
    2 => 12313,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'item_object', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'item_object', $var, $rootNamespace );
}

$text .= '    <tr id="z:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_b:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_i:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'object_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'ts_publication' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_time', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_time'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) < ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'tbp';
}
unset( $if_cond );
// if ends

$text .= '">
        <td class="tight"><input type="checkbox" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'object_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="DeleteItemIDArray[]" /></td>
        <td id="z:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_b:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_i:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'object_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_h" class="handler">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item_object'] : null;
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

$text .= '</td>
            <td class="time">
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'rotation' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'interval' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                      <span>Rotating item.</span>
                      ';
// def $number_of_valid_setting
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
      1 => 'NumberOfValidItems',
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
if ( $tpl->hasVariable( 'number_of_valid_setting', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'number_of_valid_setting' is already defined.", array (
  0 => 
  array (
    0 => 172,
    1 => 22,
    2 => 12850,
  ),
  1 => 
  array (
    0 => 178,
    1 => 22,
    2 => 13445,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'number_of_valid_setting', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'number_of_valid_setting', $var, $rootNamespace );
}

// def $last_valid_time
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'last_valid_item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'ts_visible' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'last_valid_time', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'last_valid_time' is already defined.", array (
  0 => 
  array (
    0 => 172,
    1 => 22,
    2 => 12850,
  ),
  1 => 
  array (
    0 => 178,
    1 => 22,
    2 => 13445,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'last_valid_time', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'last_valid_time', $var, $rootNamespace );
}

// def $interval_time
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'rotation' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'interval' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'interval_time', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'interval_time' is already defined.", array (
  0 => 
  array (
    0 => 172,
    1 => 22,
    2 => 12850,
  ),
  1 => 
  array (
    0 => 178,
    1 => 22,
    2 => 13445,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'interval_time', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'interval_time', $var, $rootNamespace );
}

// def $time_left_latest
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'last_valid_time', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['last_valid_time'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_time', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_time'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = $var2 - $var3;
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'interval_time', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['interval_time'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = $var1 + $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'time_left_latest', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'time_left_latest' is already defined.", array (
  0 => 
  array (
    0 => 172,
    1 => 22,
    2 => 12850,
  ),
  1 => 
  array (
    0 => 178,
    1 => 22,
    2 => 13445,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'time_left_latest', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'time_left_latest', $var, $rootNamespace );
}

// def $position_left
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var3 = compiledFetchAttribute( $var2, 'waiting' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var2Data = array( 'value' => $var2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var2Data, false, false );
$var2 = $var2Data['value'];
unset( $var2Data );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = $var2 - $var3;
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 - 1.000000;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'position_left', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'position_left' is already defined.", array (
  0 => 
  array (
    0 => 172,
    1 => 22,
    2 => 12850,
  ),
  1 => 
  array (
    0 => 178,
    1 => 22,
    2 => 13445,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'position_left', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'position_left', $var, $rootNamespace );
}

// def $time_left
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'position_left', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['position_left'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'number_of_valid_setting', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['number_of_valid_setting'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
@$var3 = $var4 / $var5;
unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = floor( $var3 );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'interval_time', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['interval_time'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = $var2 * $var3;
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'time_left_latest', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['time_left_latest'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = $var1 + $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'time_left', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'time_left' is already defined.", array (
  0 => 
  array (
    0 => 172,
    1 => 22,
    2 => 12850,
  ),
  1 => 
  array (
    0 => 178,
    1 => 22,
    2 => 13445,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'time_left', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'time_left', $var, $rootNamespace );
}

$text .= '                      ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'time_left', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['time_left'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( '0' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                       <span class="rotation-time-left">
                             ';
// def $days
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'time_left', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['time_left'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
@$var1 = $var2 / 86400.000000;
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = floor( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'days', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'days' is already defined.", array (
  0 => 
  array (
    0 => 181,
    1 => 29,
    2 => 13582,
  ),
  1 => 
  array (
    0 => 185,
    1 => 29,
    2 => 13958,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'days', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'days', $var, $rootNamespace );
}

// def $hours
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'time_left', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['time_left'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = $var3 % '86400';
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
@$var1 = $var2 / 3600.000000;
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = floor( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'hours', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hours' is already defined.", array (
  0 => 
  array (
    0 => 181,
    1 => 29,
    2 => 13582,
  ),
  1 => 
  array (
    0 => 185,
    1 => 29,
    2 => 13958,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'hours', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hours', $var, $rootNamespace );
}

// def $minutes
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'time_left', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['time_left'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = $var4 % '86400';
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = $var3 % '3600';
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
@$var1 = $var2 / 60.000000;
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = floor( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'minutes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'minutes' is already defined.", array (
  0 => 
  array (
    0 => 181,
    1 => 29,
    2 => 13582,
  ),
  1 => 
  array (
    0 => 185,
    1 => 29,
    2 => 13958,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'minutes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'minutes', $var, $rootNamespace );
}

// def $seconds
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'time_left', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['time_left'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = $var4 % '86400';
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = $var3 % '3600';
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = $var2 % '60';
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = round( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'seconds', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'seconds' is already defined.", array (
  0 => 
  array (
    0 => 181,
    1 => 29,
    2 => 13582,
  ),
  1 => 
  array (
    0 => 185,
    1 => 29,
    2 => 13958,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'seconds', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'seconds', $var, $rootNamespace );
}

$text .= '                             
                             ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( '0' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                 ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' d
                             ';
}
unset( $if_cond );
// if ends

$text .= '                                 
                             ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hours', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hours'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( '0' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                 ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hours', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hours'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' h
                             ';
}
unset( $if_cond );
// if ends

$text .= '                                 
                             ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'minutes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['minutes'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( '0' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                 ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'minutes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['minutes'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' m
                             ';
}
unset( $if_cond );
// if ends

$text .= '                                 
                             ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'seconds', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['seconds'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( '0' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                 ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'seconds', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['seconds'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' s left
                             ';
}
unset( $if_cond );
// if ends

$text .= '                       </span>
                      ';
}
unset( $if_cond );
// if ends

$text .= '                      ';
// undef $time_left
$tpl->unsetLocalVariable( 'time_left', $rootNamespace );

$text .= '                ';
}
else
{
$text .= '                    <span class="ts-publication">';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'ts_publication' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'ts_publication' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_time', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_time'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond1 = ( ( $if_cond2 ) < ( $if_cond3 ) );
unset( $if_cond2, $if_cond3 );
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
$text .= '                            (
                            ';
// def $time_diff
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'ts_publication' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_time', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_time'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = $var1 - $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'time_diff', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'time_diff' is already defined.", array (
  0 => 
  array (
    0 => 209,
    1 => 28,
    2 => 15189,
  ),
  1 => 
  array (
    0 => 213,
    1 => 103,
    2 => 15620,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'time_diff', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'time_diff', $var, $rootNamespace );
}

// def $days
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'time_diff', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['time_diff'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
@$var1 = $var2 / 86400.000000;
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = floor( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'days', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'days' is already defined.", array (
  0 => 
  array (
    0 => 209,
    1 => 28,
    2 => 15189,
  ),
  1 => 
  array (
    0 => 213,
    1 => 103,
    2 => 15620,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'days', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'days', $var, $rootNamespace );
}

// def $hours
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'time_diff', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['time_diff'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = $var3 % '86400';
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
@$var1 = $var2 / 3600.000000;
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = floor( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'hours', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hours' is already defined.", array (
  0 => 
  array (
    0 => 209,
    1 => 28,
    2 => 15189,
  ),
  1 => 
  array (
    0 => 213,
    1 => 103,
    2 => 15620,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'hours', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hours', $var, $rootNamespace );
}

// def $minutes
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'time_diff', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['time_diff'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = $var4 % '86400';
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = $var3 % '3600';
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
@$var1 = $var2 / 60.000000;
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = floor( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'minutes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'minutes' is already defined.", array (
  0 => 
  array (
    0 => 209,
    1 => 28,
    2 => 15189,
  ),
  1 => 
  array (
    0 => 213,
    1 => 103,
    2 => 15620,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'minutes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'minutes', $var, $rootNamespace );
}

// def $seconds
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'time_diff', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['time_diff'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = $var4 % '86400';
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = $var3 % '3600';
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = $var2 % '60';
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = round( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'seconds', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'seconds' is already defined.", array (
  0 => 
  array (
    0 => 209,
    1 => 28,
    2 => 15189,
  ),
  1 => 
  array (
    0 => 213,
    1 => 103,
    2 => 15620,
  ),
  2 => 'extension/ezflow/design/standard/templates/block/edit/edit.tpl',
) );
    $tpl->setVariable( 'seconds', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'seconds', $var, $rootNamespace );
}

$text .= '                                 
                             ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( '0' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                 ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' d
                             ';
}
unset( $if_cond );
// if ends

$text .= '                                 
                             ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hours', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hours'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( '0' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                 ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hours', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hours'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' h
                             ';
}
unset( $if_cond );
// if ends

$text .= '                                 
                             ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'minutes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['minutes'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( '0' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                 ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'minutes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['minutes'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' m
                             ';
}
unset( $if_cond );
// if ends

$text .= '                                 
                             ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'seconds', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['seconds'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( '0' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                 ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'seconds', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['seconds'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' s left
                             ';
}
unset( $if_cond );
// if ends

$text .= '                            )
                          ';
}
unset( $if_cond );
// if ends

$text .= '                    <input class="block-control" type="hidden" name="ContentObjectAttribute_ezpage_item_ts_published_value_';
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

$text .= '[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '][';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'object_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'ts_publication' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
                    <img class="schedule-handler" src="/ezpublish/extension/ezflow/design/admin/images/ezpage/clock_ico.gif" alt="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item_object'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = htmlspecialchars( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'Publishing schedule for: ' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 2 > 1 )
                                                                  {
                                                                      $length = '50';
                                                                  }
                                                                  if ( 2 > 2 )
                                                                  {
                                                                      $seq = $staticValues[2];
                                                                  }
                                                                  if ( 2 > 3 )
                                                                  {
                                                                      $trimType = $staticValues[3];
                                                                  }
                                                                  if ( $trimType === "middle" )
                                                                  {
                                                                      $appendedStrLen = $strlenFunc( $seq );
                                                                      if ( $length > $appendedStrLen && ( $strlenFunc( $var1 ) > $length ) )
                                                                      {
                                                                          $operatorValueLength = $strlenFunc( $var1 );
                                                                          $chop = $length - $appendedStrLen;
                                                                          $middlePos = (int)($chop / 2);
                                                                          $leftPartLength = $middlePos;
                                                                          $rightPartLength = $chop - $middlePos;
                                                                          $var = trim( $substrFunc( $var1, 0, $leftPartLength ) . $seq . $substrFunc( $var1, $operatorValueLength - $rightPartLength, $rightPartLength ) );
                                                                      }
                                                                      else
                                                                      {
                                                                          $var = $var1;
                                                                      }
                                                                  }
                                                                  else // default: trim_type === "right"
                                                                  {
                                                                      $maxLength = $length - $strlenFunc( $seq );
                                                                      if ( ( $strlenFunc( $var1 ) > $length ) && $strlenFunc( $var1 ) > $maxLength )
                                                                      {
                                                                          $var = trim( $substrFunc( $var1, 0, $maxLength) ) . $seq;
                                                                      }
                                                                      else
                                                                      {
                                                                          $var = $var1;
                                                                      }
                                                                  }
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item_object'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = htmlspecialchars( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'Publishing schedule for: ' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 2 > 1 )
                                                                  {
                                                                      $length = '50';
                                                                  }
                                                                  if ( 2 > 2 )
                                                                  {
                                                                      $seq = $staticValues[2];
                                                                  }
                                                                  if ( 2 > 3 )
                                                                  {
                                                                      $trimType = $staticValues[3];
                                                                  }
                                                                  if ( $trimType === "middle" )
                                                                  {
                                                                      $appendedStrLen = $strlenFunc( $seq );
                                                                      if ( $length > $appendedStrLen && ( $strlenFunc( $var1 ) > $length ) )
                                                                      {
                                                                          $operatorValueLength = $strlenFunc( $var1 );
                                                                          $chop = $length - $appendedStrLen;
                                                                          $middlePos = (int)($chop / 2);
                                                                          $leftPartLength = $middlePos;
                                                                          $rightPartLength = $chop - $middlePos;
                                                                          $var = trim( $substrFunc( $var1, 0, $leftPartLength ) . $seq . $substrFunc( $var1, $operatorValueLength - $rightPartLength, $rightPartLength ) );
                                                                      }
                                                                      else
                                                                      {
                                                                          $var = $var1;
                                                                      }
                                                                  }
                                                                  else // default: trim_type === "right"
                                                                  {
                                                                      $maxLength = $length - $strlenFunc( $seq );
                                                                      if ( ( $strlenFunc( $var1 ) > $length ) && $strlenFunc( $var1 ) > $maxLength )
                                                                      {
                                                                          $var = trim( $substrFunc( $var1, 0, $maxLength) ) . $seq;
                                                                      }
                                                                      else
                                                                      {
                                                                          $var = $var1;
                                                                      }
                                                                  }
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
                ';
}
unset( $if_cond );
// if ends

$text .= '            </td>
    </tr>
    ';
// undef $item_object
$tpl->unsetLocalVariable( 'item_object', $rootNamespace );

$text .= '    ';
// sequence iteration
if ( ( $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_9 = next( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_9 ) ) === false )
{
   reset( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_9 );
   $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_9 = current( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_9 );
}

$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_9++;
} // foreach
unset( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $vars[$rootNamespace]['style'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_9 ) ) extract( array_pop( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_9 ) );

else
{

unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_i_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_key_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_val_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_offset_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_max_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_first_val_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_last_val_e4bc61626809036aa7802dd94c6574f5_9 );

unset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_9 );

}

// foreach ends
$text .= '    ';
}
else
{
$text .= '     <tr class="empty">
         <td colspan="3">Queue: no items.</td>
     </tr>
     ';
}
unset( $if_cond );
// if ends

$text .= '     </tbody>
</table>
<table border="0" cellspacing="1" class="items online" id="z:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_b:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_o">
    <tbody>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'valid' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_10 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_10 = current( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_10 );

if ( !isset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_10 ) ) $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_10 = array();
$fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_10[] = compact( 'fe_array_e4bc61626809036aa7802dd94c6574f5_10', 'fe_array_keys_e4bc61626809036aa7802dd94c6574f5_10', 'fe_n_items_e4bc61626809036aa7802dd94c6574f5_10', 'fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_10', 'fe_i_e4bc61626809036aa7802dd94c6574f5_10', 'fe_key_e4bc61626809036aa7802dd94c6574f5_10', 'fe_val_e4bc61626809036aa7802dd94c6574f5_10', 'fe_offset_e4bc61626809036aa7802dd94c6574f5_10', 'fe_max_e4bc61626809036aa7802dd94c6574f5_10', 'fe_reverse_e4bc61626809036aa7802dd94c6574f5_10', 'fe_first_val_e4bc61626809036aa7802dd94c6574f5_10', 'fe_last_val_e4bc61626809036aa7802dd94c6574f5_10' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_10 );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_10 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$fe_array_e4bc61626809036aa7802dd94c6574f5_101 = compiledFetchAttribute( $fe_array_e4bc61626809036aa7802dd94c6574f5_10, 'valid' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_10 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_10 = $fe_array_e4bc61626809036aa7802dd94c6574f5_101;
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_10 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_10 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_10 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_10, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_10 = $fe_array_e4bc61626809036aa7802dd94c6574f5_10->templateValue();

$fe_array_keys_e4bc61626809036aa7802dd94c6574f5_10 = is_array( $fe_array_e4bc61626809036aa7802dd94c6574f5_10 ) ? array_keys( $fe_array_e4bc61626809036aa7802dd94c6574f5_10 ) : array();
$fe_n_items_e4bc61626809036aa7802dd94c6574f5_10 = count( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_10 );
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_10 = 0;
$fe_offset_e4bc61626809036aa7802dd94c6574f5_10 = 0;
$fe_max_e4bc61626809036aa7802dd94c6574f5_10 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_10 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_10;
$fe_reverse_e4bc61626809036aa7802dd94c6574f5_10 = false;
if ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_10 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_10 >= $fe_n_items_e4bc61626809036aa7802dd94c6574f5_10 )
{
    $fe_offset_e4bc61626809036aa7802dd94c6574f5_10 = ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_10 < 0 ) ? 0 : $fe_n_items_e4bc61626809036aa7802dd94c6574f5_10;
    if ( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_10 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_10 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e4bc61626809036aa7802dd94c6574f5_10'. Array count: $fe_n_items_e4bc61626809036aa7802dd94c6574f5_10");   
}
}
if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_10 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_10 + $fe_max_e4bc61626809036aa7802dd94c6574f5_10 > $fe_n_items_e4bc61626809036aa7802dd94c6574f5_10 )
{
    if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_10 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e4bc61626809036aa7802dd94c6574f5_10");
    $fe_max_e4bc61626809036aa7802dd94c6574f5_10 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_10 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_10;
}
if ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_10 )
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_10 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_10 - 1 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_10;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_10  = 0;
}
else
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_10 = $fe_offset_e4bc61626809036aa7802dd94c6574f5_10;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_10  = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_10 - 1;
}
// foreach
for ( $fe_i_e4bc61626809036aa7802dd94c6574f5_10 = $fe_first_val_e4bc61626809036aa7802dd94c6574f5_10; $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_10 < $fe_max_e4bc61626809036aa7802dd94c6574f5_10 && ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_10 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_10 >= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_10 : $fe_i_e4bc61626809036aa7802dd94c6574f5_10 <= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_10 ); $fe_reverse_e4bc61626809036aa7802dd94c6574f5_10 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_10-- : $fe_i_e4bc61626809036aa7802dd94c6574f5_10++ )
{
$fe_key_e4bc61626809036aa7802dd94c6574f5_10 = $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_10[$fe_i_e4bc61626809036aa7802dd94c6574f5_10];
$fe_val_e4bc61626809036aa7802dd94c6574f5_10 = $fe_array_e4bc61626809036aa7802dd94c6574f5_10[$fe_key_e4bc61626809036aa7802dd94c6574f5_10];
$vars[$rootNamespace]['item'] = $fe_val_e4bc61626809036aa7802dd94c6574f5_10;
// setting current sequence value
$vars[$rootNamespace]['style'] = $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_10;
$text .= '    <tr id="z:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_b:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_i:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'object_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        <td class="tight"><input type="checkbox" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'object_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="DeleteItemIDArray[]" /></td>
        <td id="z:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_b:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_i:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'object_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_h" colspan="2" class="handler">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var3 = compiledFetchAttribute( $var2, 'object_id' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentObject' ),
  array(     'object_id' => $var2,
    'remote_id' => false ) );
$var1 = isset( $var1['result'] ) ? $var1['result'] : null;
unset( $var2 );
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

$text .= '</td>
    </tr>
    ';
// sequence iteration
if ( ( $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_10 = next( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_10 ) ) === false )
{
   reset( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_10 );
   $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_10 = current( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_10 );
}

$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_10++;
} // foreach
unset( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $vars[$rootNamespace]['style'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_10 ) ) extract( array_pop( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_10 ) );

else
{

unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_i_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_key_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_val_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_offset_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_max_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_first_val_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_last_val_e4bc61626809036aa7802dd94c6574f5_10 );

unset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_10 );

}

// foreach ends
$text .= '    ';
}
else
{
$text .= '    <tr class="empty">
        <td colspan="3">Online: no items.</td>
    </tr>
    ';
}
unset( $if_cond );
// if ends

$text .= '    <tr class="rotation">
        <td colspan="3">Rotation: <input id="block-rotation-value-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="textfield block-control" type="text" name="RotationValue_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'rotation' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'value' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" size="5" />
            <select id="block-rotation-unit-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="list block-control" name="RotationUnit_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
                <option value="2" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'rotation' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'unit' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 2 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>min</option>
                <option value="3" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'rotation' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'unit' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 3 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>hour</option>
                <option value="4" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'rotation' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'unit' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 4 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>day</option>
            </select>

        Shuffle <input id="block-rotation-shuffle-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="block-control" type="checkbox" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'rotation' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'type' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 2 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' name="RotationShuffle_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" /> <input id="block-set-rotation-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="button block-control" type="submit" name="CustomActionButton[';
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

$text .= '_set_rotation-';
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="Set" /></td>
    </tr>
</table>
<table border="0" cellspacing="1" class="items history" id="z:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_b:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_h">
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'archived' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_12 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_12 = current( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_12 );

if ( !isset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_12 ) ) $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_12 = array();
$fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_12[] = compact( 'fe_array_e4bc61626809036aa7802dd94c6574f5_12', 'fe_array_keys_e4bc61626809036aa7802dd94c6574f5_12', 'fe_n_items_e4bc61626809036aa7802dd94c6574f5_12', 'fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_12', 'fe_i_e4bc61626809036aa7802dd94c6574f5_12', 'fe_key_e4bc61626809036aa7802dd94c6574f5_12', 'fe_val_e4bc61626809036aa7802dd94c6574f5_12', 'fe_offset_e4bc61626809036aa7802dd94c6574f5_12', 'fe_max_e4bc61626809036aa7802dd94c6574f5_12', 'fe_reverse_e4bc61626809036aa7802dd94c6574f5_12', 'fe_first_val_e4bc61626809036aa7802dd94c6574f5_12', 'fe_last_val_e4bc61626809036aa7802dd94c6574f5_12' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_12 );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_12 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$fe_array_e4bc61626809036aa7802dd94c6574f5_121 = compiledFetchAttribute( $fe_array_e4bc61626809036aa7802dd94c6574f5_12, 'archived' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_12 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_12 = $fe_array_e4bc61626809036aa7802dd94c6574f5_121;
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_12 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_12 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_12 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_12, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_12 = $fe_array_e4bc61626809036aa7802dd94c6574f5_12->templateValue();

$fe_array_keys_e4bc61626809036aa7802dd94c6574f5_12 = is_array( $fe_array_e4bc61626809036aa7802dd94c6574f5_12 ) ? array_keys( $fe_array_e4bc61626809036aa7802dd94c6574f5_12 ) : array();
$fe_n_items_e4bc61626809036aa7802dd94c6574f5_12 = count( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_12 );
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_12 = 0;
$fe_offset_e4bc61626809036aa7802dd94c6574f5_12 = 0;
$fe_max_e4bc61626809036aa7802dd94c6574f5_12 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_12 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_12;
$fe_reverse_e4bc61626809036aa7802dd94c6574f5_12 = false;
if ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_12 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_12 >= $fe_n_items_e4bc61626809036aa7802dd94c6574f5_12 )
{
    $fe_offset_e4bc61626809036aa7802dd94c6574f5_12 = ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_12 < 0 ) ? 0 : $fe_n_items_e4bc61626809036aa7802dd94c6574f5_12;
    if ( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_12 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_12 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e4bc61626809036aa7802dd94c6574f5_12'. Array count: $fe_n_items_e4bc61626809036aa7802dd94c6574f5_12");   
}
}
if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_12 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_12 + $fe_max_e4bc61626809036aa7802dd94c6574f5_12 > $fe_n_items_e4bc61626809036aa7802dd94c6574f5_12 )
{
    if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_12 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e4bc61626809036aa7802dd94c6574f5_12");
    $fe_max_e4bc61626809036aa7802dd94c6574f5_12 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_12 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_12;
}
if ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_12 )
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_12 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_12 - 1 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_12;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_12  = 0;
}
else
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_12 = $fe_offset_e4bc61626809036aa7802dd94c6574f5_12;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_12  = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_12 - 1;
}
// foreach
for ( $fe_i_e4bc61626809036aa7802dd94c6574f5_12 = $fe_first_val_e4bc61626809036aa7802dd94c6574f5_12; $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_12 < $fe_max_e4bc61626809036aa7802dd94c6574f5_12 && ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_12 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_12 >= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_12 : $fe_i_e4bc61626809036aa7802dd94c6574f5_12 <= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_12 ); $fe_reverse_e4bc61626809036aa7802dd94c6574f5_12 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_12-- : $fe_i_e4bc61626809036aa7802dd94c6574f5_12++ )
{
$fe_key_e4bc61626809036aa7802dd94c6574f5_12 = $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_12[$fe_i_e4bc61626809036aa7802dd94c6574f5_12];
$fe_val_e4bc61626809036aa7802dd94c6574f5_12 = $fe_array_e4bc61626809036aa7802dd94c6574f5_12[$fe_key_e4bc61626809036aa7802dd94c6574f5_12];
$vars[$rootNamespace]['item'] = $fe_val_e4bc61626809036aa7802dd94c6574f5_12;
// setting current sequence value
$vars[$rootNamespace]['style'] = $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_12;
$text .= '    <tr>
        <td class="tight"><input type="checkbox" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'object_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="DeleteItemIDArray[]" /></td>
        <td>';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var3 = compiledFetchAttribute( $var2, 'object_id' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentObject' ),
  array(     'object_id' => $var2,
    'remote_id' => false ) );
$var1 = isset( $var1['result'] ) ? $var1['result'] : null;
unset( $var2 );
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

$text .= '</td>
        <td class="status">
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'moved_to' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= '                Moved to:

                ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_11 ) ) $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_11 = array();
$fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_11[] = compact( 'fe_array_e4bc61626809036aa7802dd94c6574f5_11', 'fe_array_keys_e4bc61626809036aa7802dd94c6574f5_11', 'fe_n_items_e4bc61626809036aa7802dd94c6574f5_11', 'fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_11', 'fe_i_e4bc61626809036aa7802dd94c6574f5_11', 'fe_key_e4bc61626809036aa7802dd94c6574f5_11', 'fe_val_e4bc61626809036aa7802dd94c6574f5_11', 'fe_offset_e4bc61626809036aa7802dd94c6574f5_11', 'fe_max_e4bc61626809036aa7802dd94c6574f5_11', 'fe_reverse_e4bc61626809036aa7802dd94c6574f5_11', 'fe_first_val_e4bc61626809036aa7802dd94c6574f5_11', 'fe_last_val_e4bc61626809036aa7802dd94c6574f5_11' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_11 );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_11 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone'] : null;
$fe_array_e4bc61626809036aa7802dd94c6574f5_111 = compiledFetchAttribute( $fe_array_e4bc61626809036aa7802dd94c6574f5_11, 'blocks' );
unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_11 );
$fe_array_e4bc61626809036aa7802dd94c6574f5_11 = $fe_array_e4bc61626809036aa7802dd94c6574f5_111;
if (! isset( $fe_array_e4bc61626809036aa7802dd94c6574f5_11 ) ) $fe_array_e4bc61626809036aa7802dd94c6574f5_11 = NULL;
while ( is_object( $fe_array_e4bc61626809036aa7802dd94c6574f5_11 ) and method_exists( $fe_array_e4bc61626809036aa7802dd94c6574f5_11, 'templateValue' ) )
    $fe_array_e4bc61626809036aa7802dd94c6574f5_11 = $fe_array_e4bc61626809036aa7802dd94c6574f5_11->templateValue();

$fe_array_keys_e4bc61626809036aa7802dd94c6574f5_11 = is_array( $fe_array_e4bc61626809036aa7802dd94c6574f5_11 ) ? array_keys( $fe_array_e4bc61626809036aa7802dd94c6574f5_11 ) : array();
$fe_n_items_e4bc61626809036aa7802dd94c6574f5_11 = count( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_11 );
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_11 = 0;
$fe_offset_e4bc61626809036aa7802dd94c6574f5_11 = 0;
$fe_max_e4bc61626809036aa7802dd94c6574f5_11 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_11 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_11;
$fe_reverse_e4bc61626809036aa7802dd94c6574f5_11 = false;
if ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_11 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_11 >= $fe_n_items_e4bc61626809036aa7802dd94c6574f5_11 )
{
    $fe_offset_e4bc61626809036aa7802dd94c6574f5_11 = ( $fe_offset_e4bc61626809036aa7802dd94c6574f5_11 < 0 ) ? 0 : $fe_n_items_e4bc61626809036aa7802dd94c6574f5_11;
    if ( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_11 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_11 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e4bc61626809036aa7802dd94c6574f5_11'. Array count: $fe_n_items_e4bc61626809036aa7802dd94c6574f5_11");   
}
}
if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_11 < 0 || $fe_offset_e4bc61626809036aa7802dd94c6574f5_11 + $fe_max_e4bc61626809036aa7802dd94c6574f5_11 > $fe_n_items_e4bc61626809036aa7802dd94c6574f5_11 )
{
    if ( $fe_max_e4bc61626809036aa7802dd94c6574f5_11 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e4bc61626809036aa7802dd94c6574f5_11");
    $fe_max_e4bc61626809036aa7802dd94c6574f5_11 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_11 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_11;
}
if ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_11 )
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_11 = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_11 - 1 - $fe_offset_e4bc61626809036aa7802dd94c6574f5_11;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_11  = 0;
}
else
{
    $fe_first_val_e4bc61626809036aa7802dd94c6574f5_11 = $fe_offset_e4bc61626809036aa7802dd94c6574f5_11;
    $fe_last_val_e4bc61626809036aa7802dd94c6574f5_11  = $fe_n_items_e4bc61626809036aa7802dd94c6574f5_11 - 1;
}
// foreach
for ( $fe_i_e4bc61626809036aa7802dd94c6574f5_11 = $fe_first_val_e4bc61626809036aa7802dd94c6574f5_11; $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_11 < $fe_max_e4bc61626809036aa7802dd94c6574f5_11 && ( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_11 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_11 >= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_11 : $fe_i_e4bc61626809036aa7802dd94c6574f5_11 <= $fe_last_val_e4bc61626809036aa7802dd94c6574f5_11 ); $fe_reverse_e4bc61626809036aa7802dd94c6574f5_11 ? $fe_i_e4bc61626809036aa7802dd94c6574f5_11-- : $fe_i_e4bc61626809036aa7802dd94c6574f5_11++ )
{
$fe_key_e4bc61626809036aa7802dd94c6574f5_11 = $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_11[$fe_i_e4bc61626809036aa7802dd94c6574f5_11];
$fe_val_e4bc61626809036aa7802dd94c6574f5_11 = $fe_array_e4bc61626809036aa7802dd94c6574f5_11[$fe_key_e4bc61626809036aa7802dd94c6574f5_11];
$vars[$rootNamespace]['dest_block'] = $fe_val_e4bc61626809036aa7802dd94c6574f5_11;
$vars[$rootNamespace]['index'] = $fe_key_e4bc61626809036aa7802dd94c6574f5_11;
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'dest_block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['dest_block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'moved_to' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'dest_block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['dest_block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'name' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= '                        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'dest_block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['dest_block'] : null;
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
else
{
$text .= '                        ';
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
        2 => 'dest_block',
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

$text .= '
                    ';
}
unset( $if_cond );
// if ends

$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '                ';
$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_11++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_11 ) ) extract( array_pop( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_11 ) );

else
{

unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_i_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_key_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_val_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_offset_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_max_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_first_val_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_last_val_e4bc61626809036aa7802dd94c6574f5_11 );

unset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_11 );

}

// foreach ends
$text .= '            ';
}
else
{
$text .= '                Not visible
            ';
}
unset( $if_cond );
// if ends

$text .= '        </td>
    </tr>
    ';
// sequence iteration
if ( ( $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_12 = next( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_12 ) ) === false )
{
   reset( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_12 );
   $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_12 = current( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_12 );
}

$fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_12++;
} // foreach
unset( $foreach_sequence_array_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $foreach_sequence_var_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $vars[$rootNamespace]['style'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_12 ) ) extract( array_pop( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_12 ) );

else
{

unset( $fe_array_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_array_keys_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_n_items_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_n_items_processed_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_i_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_key_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_val_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_offset_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_max_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_reverse_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_first_val_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_last_val_e4bc61626809036aa7802dd94c6574f5_12 );

unset( $fe_variable_stack_e4bc61626809036aa7802dd94c6574f5_12 );

}

// foreach ends
$text .= '    ';
}
else
{
$text .= '    <tr class="empty">
        <td colspan="3">History: no items.</td>
    </tr>
    ';
}
unset( $if_cond );
// if ends

$text .= '    </tbody>
</table>

<div class="block-controls float-break">
    <div class="left">
        <input id="block-remove-selected-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" class="button block-control" type="submit" name="CustomActionButton[';
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

$text .= '_remove_item-';
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="Remove selected" />
    </div>
    <div class="right legend">
        <div class="queue">&nbsp;</div> Queue: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'waiting' );
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

$text .= ' <div class="online">&nbsp;</div> Online: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'valid' );
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

$text .= ' <div class="history">&nbsp;</div> History: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'archived' );
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

$text .= '
    </div>
</div>';
}
unset( $if_cond );
// if ends

$text .= '</div>
</div>
';

$setArray = $oldSetArray_7eff49d213727d1d7d489e575aecf33e;
$tpl->Level--;
?>
