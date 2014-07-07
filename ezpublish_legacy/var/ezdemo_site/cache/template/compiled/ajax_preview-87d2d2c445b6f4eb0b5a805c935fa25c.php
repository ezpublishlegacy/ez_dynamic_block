<?php
// URI:       design:content/ajax_preview.tpl
// Filename:  extension/ezautosave/design/admin/templates/content/ajax_preview.tpl
// Timestamp: 1396700264 (Sat Apr 5 5:17:44 PDT 2014)
$oldSetArray_bf99244988f38ee030e191c45882f011 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="preview-header">
    <h1 class="context-title">
        <a href="#" class="close">&laquo;&nbsp;Back to the edit form</a>
        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'content_class' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'normal',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'object',
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
          1 => 'class_name',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
        ';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['version'] : null;
$var4 = compiledFetchAttribute( $var3, 'name' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%name' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Preview of &lt;%name&gt; in siteaccess', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
        <select class="no-autosave">
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_81fc696751acb77f8ef48e613a7cb72f_1 ) ) $fe_variable_stack_81fc696751acb77f8ef48e613a7cb72f_1 = array();
$fe_variable_stack_81fc696751acb77f8ef48e613a7cb72f_1[] = compact( 'fe_array_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_array_keys_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_n_items_processed_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_i_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_key_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_val_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_offset_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_max_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_reverse_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_first_val_81fc696751acb77f8ef48e613a7cb72f_1', 'fe_last_val_81fc696751acb77f8ef48e613a7cb72f_1' );
unset( $fe_array_81fc696751acb77f8ef48e613a7cb72f_1 );
unset( $fe_array_81fc696751acb77f8ef48e613a7cb72f_1 );
$fe_array_81fc696751acb77f8ef48e613a7cb72f_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteaccess_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteaccess_list'] : null;
if (! isset( $fe_array_81fc696751acb77f8ef48e613a7cb72f_1 ) ) $fe_array_81fc696751acb77f8ef48e613a7cb72f_1 = NULL;
while ( is_object( $fe_array_81fc696751acb77f8ef48e613a7cb72f_1 ) and method_exists( $fe_array_81fc696751acb77f8ef48e613a7cb72f_1, 'templateValue' ) )
    $fe_array_81fc696751acb77f8ef48e613a7cb72f_1 = $fe_array_81fc696751acb77f8ef48e613a7cb72f_1->templateValue();

$fe_array_keys_81fc696751acb77f8ef48e613a7cb72f_1 = is_array( $fe_array_81fc696751acb77f8ef48e613a7cb72f_1 ) ? array_keys( $fe_array_81fc696751acb77f8ef48e613a7cb72f_1 ) : array();
$fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1 = count( $fe_array_keys_81fc696751acb77f8ef48e613a7cb72f_1 );
$fe_n_items_processed_81fc696751acb77f8ef48e613a7cb72f_1 = 0;
$fe_offset_81fc696751acb77f8ef48e613a7cb72f_1 = 0;
$fe_max_81fc696751acb77f8ef48e613a7cb72f_1 = $fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1 - $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1;
$fe_reverse_81fc696751acb77f8ef48e613a7cb72f_1 = false;
if ( $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1 < 0 || $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1 >= $fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1 )
{
    $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1 = ( $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1 < 0 ) ? 0 : $fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1;
    if ( $fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1 || $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_81fc696751acb77f8ef48e613a7cb72f_1'. Array count: $fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1");   
}
}
if ( $fe_max_81fc696751acb77f8ef48e613a7cb72f_1 < 0 || $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1 + $fe_max_81fc696751acb77f8ef48e613a7cb72f_1 > $fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1 )
{
    if ( $fe_max_81fc696751acb77f8ef48e613a7cb72f_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_81fc696751acb77f8ef48e613a7cb72f_1");
    $fe_max_81fc696751acb77f8ef48e613a7cb72f_1 = $fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1 - $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1;
}
if ( $fe_reverse_81fc696751acb77f8ef48e613a7cb72f_1 )
{
    $fe_first_val_81fc696751acb77f8ef48e613a7cb72f_1 = $fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1 - 1 - $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1;
    $fe_last_val_81fc696751acb77f8ef48e613a7cb72f_1  = 0;
}
else
{
    $fe_first_val_81fc696751acb77f8ef48e613a7cb72f_1 = $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1;
    $fe_last_val_81fc696751acb77f8ef48e613a7cb72f_1  = $fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1 - 1;
}
// foreach
for ( $fe_i_81fc696751acb77f8ef48e613a7cb72f_1 = $fe_first_val_81fc696751acb77f8ef48e613a7cb72f_1; $fe_n_items_processed_81fc696751acb77f8ef48e613a7cb72f_1 < $fe_max_81fc696751acb77f8ef48e613a7cb72f_1 && ( $fe_reverse_81fc696751acb77f8ef48e613a7cb72f_1 ? $fe_i_81fc696751acb77f8ef48e613a7cb72f_1 >= $fe_last_val_81fc696751acb77f8ef48e613a7cb72f_1 : $fe_i_81fc696751acb77f8ef48e613a7cb72f_1 <= $fe_last_val_81fc696751acb77f8ef48e613a7cb72f_1 ); $fe_reverse_81fc696751acb77f8ef48e613a7cb72f_1 ? $fe_i_81fc696751acb77f8ef48e613a7cb72f_1-- : $fe_i_81fc696751acb77f8ef48e613a7cb72f_1++ )
{
$fe_key_81fc696751acb77f8ef48e613a7cb72f_1 = $fe_array_keys_81fc696751acb77f8ef48e613a7cb72f_1[$fe_i_81fc696751acb77f8ef48e613a7cb72f_1];
$fe_val_81fc696751acb77f8ef48e613a7cb72f_1 = $fe_array_81fc696751acb77f8ef48e613a7cb72f_1[$fe_key_81fc696751acb77f8ef48e613a7cb72f_1];
$vars[$rootNamespace]['sa'] = $fe_val_81fc696751acb77f8ef48e613a7cb72f_1;
$text .= '            <option value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sa', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sa'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sa', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sa'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_siteaccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_siteaccess'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( ( $var2 ) == ( $var3 ) );
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = " selected=\"selected\"";
}
else
{
    
    $var = '';
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sa', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sa'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</option>
        ';
$fe_n_items_processed_81fc696751acb77f8ef48e613a7cb72f_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_81fc696751acb77f8ef48e613a7cb72f_1 ) ) extract( array_pop( $fe_variable_stack_81fc696751acb77f8ef48e613a7cb72f_1 ) );

else
{

unset( $fe_array_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_array_keys_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_n_items_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_n_items_processed_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_i_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_key_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_val_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_offset_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_max_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_reverse_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_first_val_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_last_val_81fc696751acb77f8ef48e613a7cb72f_1 );

unset( $fe_variable_stack_81fc696751acb77f8ef48e613a7cb72f_1 );

}

// foreach ends
$text .= '        </select>
        <img src="/ezpublish/extension/ezautosave/design/standard/images/as-loader.gif" alt="Loading..." style="display:none" id="iframe-loader" />
    </h1>
    <div class="context-information">
        <p class="left preview-warning">
            <strong>Warning:</strong> <em>following links from the preview will take you to the live version of the website</em>
        </p>
        <p class="right translation">
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var2 = compiledFetchAttribute( $var1, 'intl_language_name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '&nbsp;<img src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var1 = compiledFetchAttribute( $var, 'locale_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" width="18" height="12" style="vertical-align: middle;" alt="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var1 = compiledFetchAttribute( $var, 'locale_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        </p>
        <div class="break"></div>
    </div>
</div>
<iframe src=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['version'] : null;
$var6 = compiledFetchAttribute( $var5, 'version' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var8 = compiledFetchAttribute( $var7, 'locale_code' );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_siteaccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_siteaccess'] : null;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var1 = ( 'content/versionview/' . $var3 . '/' . $var5 . '/' . $var7 . '/site_access/' . $var9 );
unset( $var3, $var5, $var7, $var9 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '></iframe>
';

$setArray = $oldSetArray_bf99244988f38ee030e191c45882f011;
$tpl->Level--;
?>
