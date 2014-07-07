<?php
// URI:       design:node/ezflcontextsubmenu.tpl
// Filename:  extension/ezflow/design/standard/templates/node/ezflcontextsubmenu.tpl
// Timestamp: 1404662622 (Sun Jul 6 9:03:42 PDT 2014)
$oldSetArray_765cbe0628cdfa8e7a8562168c6521dd = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="popupmenu" id="eZFlow">
    <a id="push-to-block" href="#" onmouseover="ezpopmenu_mouseOver( \'eZFlow\' )">Add to block in frontpage</a>
</div>
';

$setArray = $oldSetArray_765cbe0628cdfa8e7a8562168c6521dd;
$tpl->Level--;
?>
