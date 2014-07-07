<?php
// URI:       design:node/ezfindsubitemscontextmenu.tpl
// Filename:  extension/ezfind/design/standard/templates/node/ezfindsubitemscontextmenu.tpl
// Timestamp: 1396864970 (Mon Apr 7 3:02:50 PDT 2014)
$oldSetArray_7864503709997cccbfd9e359cc40f5c4 = isset( $setArray ) ? $setArray : array();
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

$text .= '<script language="JavaScript1.2" type="text/javascript">
menuArray[\'eZFind\'] = new Array();
menuArray[\'eZFind\'][\'depth\'] = 1; // this is a first level submenu of ContextMenu
menuArray[\'eZFind\'][\'elements\'] = new Array();
</script>

 <hr/>
    <a id="child-menu-ezfind" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'eZFind\', \'child-menu-ezfind\' ); return false;">eZ Find</a>';

$setArray = $oldSetArray_7864503709997cccbfd9e359cc40f5c4;
$tpl->Level--;
?>
