<?php
// URI:       design:node/ezfindcontextsubmenu.tpl
// Filename:  extension/ezfind/design/standard/templates/node/ezfindcontextsubmenu.tpl
// Timestamp: 1396864970 (Mon Apr 7 3:02:50 PDT 2014)
$oldSetArray_b0bd88e15c4c0082770a11d880c571b6 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="popupmenu" id="eZFind">
    <a id="ezfind-menu-elevate" href="#" onmouseover="ezpopmenu_mouseOver( \'eZFind\' )"
       onclick="ezpopmenu_submitForm( \'ezfind-menu-form-elevate\' ); return false;">Elevate</a>
    <a id="ezfind-menu-elevationdetail" href="#" onmouseover="ezpopmenu_mouseOver( \'eZFind\' )"
       onclick="ezpopmenu_submitForm( \'ezfind-menu-form-elevation-detail\' ); return false;">Elevation detail</a>
</div>';

$setArray = $oldSetArray_b0bd88e15c4c0082770a11d880c571b6;
$tpl->Level--;
?>
