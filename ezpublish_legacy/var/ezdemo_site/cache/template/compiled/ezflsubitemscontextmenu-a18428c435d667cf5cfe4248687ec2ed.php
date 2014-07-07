<?php
// URI:       design:node/ezflsubitemscontextmenu.tpl
// Filename:  extension/ezflow/design/standard/templates/node/ezflsubitemscontextmenu.tpl
// Timestamp: 1404662622 (Sun Jul 6 9:03:42 PDT 2014)
$oldSetArray_1f12007fad10d04f170e7ee59d9cbb92 = isset( $setArray ) ? $setArray : array();
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

$text .= '<script type="text/javascript">
menuArray[\'eZFlow\'] = new Array();
menuArray[\'eZFlow\'][\'depth\'] = 1; // this is a first level submenu of ContextMenu
menuArray[\'eZFlow\'][\'elements\'] = new Array();
menuArray[\'eZFlow\'][\'elements\'][\'push-to-block\'] = new Array();
menuArray[\'eZFlow\'][\'elements\'][\'push-to-block\'][\'url\'] = "/ezpublish/index.php/admin_site/ezflow/push/%nodeID%";
</script>

<hr />

<a id="child-menu-ezflow" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'eZFlow\', \'child-menu-ezflow\' ); return false;">eZ Flow</a>';

$setArray = $oldSetArray_1f12007fad10d04f170e7ee59d9cbb92;
$tpl->Level--;
?>
