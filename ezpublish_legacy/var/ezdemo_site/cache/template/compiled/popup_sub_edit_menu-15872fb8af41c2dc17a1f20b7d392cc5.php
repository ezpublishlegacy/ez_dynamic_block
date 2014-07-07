<?php
// URI:       design/admin/templates/popupmenu/popup_sub_edit_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_sub_edit_menu.tpl
// Timestamp: 1397808121 (Fri Apr 18 1:02:01 PDT 2014)
$oldSetArray_4b96b94bc76cb1387c65fc4d8293bb00 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Edit menu -->
<script type="text/javascript">
menuArray[\'EditSubmenu\'] = { \'depth\': 1 };
menuArray[\'EditSubmenu\'][\'elements\'] = {};
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'] = { \'variable\': \'%languages%\' };
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'][\'content\'] = \'<a href="/ezpublish/index.php/admin_site/content/edit/%objectID%/f/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages-another\'] = { \'url\': "/ezpublish/index.php/admin_site/content/edit/%objectID%/a" };
</script>

<div class="popupmenu" id="EditSubmenu">
    <div id="edit-languages"></div>
    <hr />
    <a id="edit-languages-another" href="#" onmouseover="ezpopmenu_mouseOver( \'EditSubmenu\' )">New translation</a>
</div>';

$setArray = $oldSetArray_4b96b94bc76cb1387c65fc4d8293bb00;
$tpl->Level--;
?>
