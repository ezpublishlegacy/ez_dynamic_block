<?php
// URI:       design/admin/templates/page_head_style_inline.tpl
// Filename:  design/admin/templates/page_head_style_inline.tpl
// Timestamp: 1397808121 (Fri Apr 18 1:02:01 PDT 2014)
$oldSetArray_89b56293e9d8a1ac6679dca9cfdea6ef = isset( $setArray ) ? $setArray : array();
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

$text .= '

<!--[if lt IE 8]>
<style>
/* Terminate floating elements flow in IE < 8 */
.float-break
{
  height: 1%;
}
</style>
<![endif]-->
<!--[if lte IE 8]>
<style>
#controlbar-top .box-bc
{
  filter:progid:DXImageTransform.Microsoft.Shadow(color=\'gray\', Direction=180, Strength=8);
  zoom: 1;
}
</style>
<![endif]-->
<!--[if lte IE 7]>
<style>
#controlbar-top .box-bc
{
padding-bottom:8px;
}
</style>
<![endif]-->
<!--[if IE 6]>
<style>
.yui3-js-enabled .scroll-to-top {display: none;}
input.box, textarea.box {width: 99%}
</style>
<![endif]-->

';

$setArray = $oldSetArray_89b56293e9d8a1ac6679dca9cfdea6ef;
$tpl->Level--;
?>
