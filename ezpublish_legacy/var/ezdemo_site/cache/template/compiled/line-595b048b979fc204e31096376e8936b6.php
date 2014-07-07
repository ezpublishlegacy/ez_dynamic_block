<?php
// URI:       design:content/datatype/view/ezxmltags/line.tpl
// Filename:  design/standard/templates/content/datatype/view/ezxmltags/line.tpl
// Timestamp: 1397808122 (Fri Apr 18 1:02:02 PDT 2014)
$oldSetArray_75463b2ba1a7b424da6752e0f0e51547 = isset( $setArray ) ? $setArray : array();
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
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '<br />';

$setArray = $oldSetArray_75463b2ba1a7b424da6752e0f0e51547;
$tpl->Level--;
?>
