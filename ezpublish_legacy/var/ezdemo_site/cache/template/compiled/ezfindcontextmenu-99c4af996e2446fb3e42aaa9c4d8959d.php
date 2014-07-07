<?php
// URI:       design:node/ezfindcontextmenu.tpl
// Filename:  extension/ezfind/design/standard/templates/node/ezfindcontextmenu.tpl
// Timestamp: 1396864970 (Mon Apr 7 3:02:50 PDT 2014)
$oldSetArray_a0829383afddea42cda9483c5cd72c1a = isset( $setArray ) ? $setArray : array();
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
    <a id="menu-ezfind" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'eZFind\', \'menu-ezfind\' ); return false;">eZ Find</a>


<form id="ezfind-menu-form-elevate" method="post" action="/ezpublish/index.php/admin_site/ezfind/elevate">
  <input type="hidden" name="ObjectIDFromMenu" value="%objectID%" />
</form>


<form id="ezfind-menu-form-elevation-detail" method="post" action="/ezpublish/index.php/admin_site/ezfind/elevation_detail">
  <input type="hidden" name="ObjectID" value="%objectID%" />
</form>';

$setArray = $oldSetArray_a0829383afddea42cda9483c5cd72c1a;
$tpl->Level--;
?>
