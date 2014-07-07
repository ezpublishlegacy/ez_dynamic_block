<?php
// URI:       design:content/parts/add_to_block.tpl
// Filename:  extension/ezflow/design/admin2/templates/content/parts/add_to_block.tpl
// Timestamp: 1404662622 (Sun Jul 6 9:03:42 PDT 2014)
$oldSetArray_876aca411a3a5a34878d6c628903a9f3 = isset( $setArray ) ? $setArray : array();
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
';

$setArray = $oldSetArray_876aca411a3a5a34878d6c628903a9f3;
$tpl->Level--;
?>
