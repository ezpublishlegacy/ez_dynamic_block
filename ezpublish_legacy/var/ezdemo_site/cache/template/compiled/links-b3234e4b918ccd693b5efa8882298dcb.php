<?php
// URI:       extension/ezdemo/design/ezdemo/templates/footer/links.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/footer/links.tpl
// Timestamp: 1404662620 (Sun Jul 6 9:03:40 PDT 2014)
$oldSetArray_90648ee888b0aeff07c7c9dc86df78f2 = isset( $setArray ) ? $setArray : array();
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

$text .= '<h3>eZ Links</h3>';
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
        2 => 'node',
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
          1 => 'body',
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
    0 => 2,
    1 => 0,
    2 => 58,
  ),
  1 => 
  array (
    0 => 2,
    1 => 48,
    2 => 106,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/footer/links.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );


$setArray = $oldSetArray_90648ee888b0aeff07c7c9dc86df78f2;
$tpl->Level--;
?>
