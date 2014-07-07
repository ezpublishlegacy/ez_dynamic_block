<?php
// URI:       design:content/edit.tpl
// Filename:  design/admin/templates/content/edit.tpl
// Timestamp: 1397808120 (Fri Apr 18 1:02:00 PDT 2014)
$oldSetArray_5722c59c8cbb87c0ba4f5f4ce35c0a23 = isset( $setArray ) ? $setArray : array();
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

$text .= '<form name="editform" id="editform" enctype="multipart/form-data" method="post" action=';
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
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_version'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var8 );
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var8 = !( $var9 );
unset( $var9 );
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
unset( $var9 );
unset( $var10 );
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
$var9 = ( $var10 . '/' );
unset( $var10 );
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var7 = $var8 ? '/' : $var9;
unset( $var8, $var9 );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var8 );
unset( $var9 );
unset( $var10 );
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
$var9 = !( $var10 );
unset( $var10 );
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
unset( $var10 );
unset( $var11 );
unset( $var11 );
$var11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
if (! isset( $var11 ) ) $var11 = NULL;
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
$var10 = ( $var11 . '/' );
unset( $var11 );
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
$var8 = $var9 ? '' : $var10;
unset( $var9, $var10 );
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var1 = ( '/content/edit/' . $var3 . '/' . $var5 . '/' . $var7 . $var8 );
unset( $var3, $var5, $var7, $var8 );
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

$text .= '>


<input class="defaultbutton hide" type="submit" id="ezedit-default-button" name="PublishButton" value="Send for publishing" />

';
// def $content_language
if ( $tpl->hasVariable( 'content_language', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_language' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 0,
    2 => 689,
  ),
  1 => 
  array (
    0 => 8,
    1 => 85,
    2 => 836,
  ),
  2 => 'design/admin/templates/content/edit.tpl',
) );
    $tpl->setVariable( 'content_language', 'eng-GB', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_language', 'eng-GB', $rootNamespace );
}

// def $edit_menu_collapsed
unset( $var );
unset( $var1 );
$var1 = eZPreferences::value( "admin_edit_menu_collapsed" );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = 1;
}
else
{
    
    $var = 0;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'edit_menu_collapsed', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'edit_menu_collapsed' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 0,
    2 => 689,
  ),
  1 => 
  array (
    0 => 8,
    1 => 85,
    2 => 836,
  ),
  2 => 'design/admin/templates/content/edit.tpl',
) );
    $tpl->setVariable( 'edit_menu_collapsed', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'edit_menu_collapsed', $var, $rootNamespace );
}

$text .= '
<div id="leftmenu"';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_menu_collapsed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_menu_collapsed'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' style="margin-left:-13.5em;"';
}
unset( $if_cond );
// if ends

$text .= '>
<a id="objectinfo-showhide" class="show-hide-control" title="Show / Hide leftmenu" href="#"></a>
<div id="leftmenu-design">
';
$oldRestoreIncludeArray_970cd436e1660af8a22fd9cc492a3907 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/edit_menu-f0bb21d7ab6152dc3b4756541e842bbd.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/content/edit_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/edit_menu-f0bb21d7ab6152dc3b4756541e842bbd.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/content/edit_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_970cd436e1660af8a22fd9cc492a3907;

$text .= '
</div>
</div>
<script type="text/javascript">


YUI(YUI3_config).use(\'ezcollapsiblemenu\', \'event\', \'io-ez\', function (Y) {

    Y.on(\'domready\', function () {
        var leftmenu = new Y.eZ.CollapsibleMenu({
            link: \'#objectinfo-showhide\',
            content: false,

            collapsed: "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_menu_collapsed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_menu_collapsed'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '",

            elements:[{
                selector: \'#leftmenu\',
                duration: 0.4,
                fullStyle: {marginLeft: \'0\'},
                collapsedStyle: {marginLeft: \'-13.5em\'}
            },{
                selector: \'#left-panels-separator\',
                duration: 0.4,
                fullStyle: {left: (Y.one(\'#leftmenu\').get(\'clientWidth\') - parseInt(Y.one(\'#leftmenu-design\').getStyle(\'marginRight\'))) + \'px\'},
                collapsedStyle: {left: 0}
            },{
                selector: \'#maincontent\',
                duration: 0.4,
                // workaround to http://yuilibrary.com/projects/yui3/ticket/2531641
                // for IE, margin has to be set in px
                fullStyle: {marginLeft: (Y.one(\'#leftmenu\').get(\'offsetWidth\') + 10) + \'px\'},
                collapsedStyle: {marginLeft: \'30px\'}
            }],
            callback: function () {
                Y.io.ez.setPreference(\'admin_edit_menu_collapsed\', this.conf.collapsed);
            }
        });
    });

});


</script>


<div id="maincontent"';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_menu_collapsed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_menu_collapsed'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' style="margin-left:20px"';
}
unset( $if_cond );
// if ends

$text .= '>
<div id="maincontent-design" class="float-break"><div id="fix">


<div id="controlbar-top" class="controlbar controlbar-fixed">
<div class="box-bc"><div class="box-ml">
<div class="button-left">
    <input class="defaultbutton" type="submit" name="PublishButton" value="Send for publishing" title="Publish the contents of the draft that is being edited. The draft will become the published version of the object." />
    <input class="button" type="submit" name="StoreButton" value="Store draft" title="Store the contents of the draft that is being edited and continue editing. Use this button to periodically save your work while editing." />
    <input class="button" type="submit" name="StoreExitButton" value="Store draft and exit" title="Store the draft that is being edited and exit from edit mode. Use when you need to exit your work and return later to continue." />
    <input class="button" type="submit" name="DiscardButton" value="Discard draft" onclick="return confirmDiscard( \'';
unset( $var );
$var = 'Are you sure you want to discard the draft?' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\' );" title="Discard the draft that is being edited. This will also remove the translations that belong to the draft (if any)." />
</div>
<div class="button-right"></div>
<div class="float-break"></div>
</div></div>
</div>

<!-- Maincontent START -->
';
$oldRestoreIncludeArray_ce5473b6a8093ae83c0f7645745f701d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/edit_validation-ceabc5bb2180c21495f90a5ed07f1d5c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/content/edit_validation.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/edit_validation-ceabc5bb2180c21495f90a5ed07f1d5c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/content/edit_validation.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_ce5473b6a8093ae83c0f7645745f701d;

$text .= '
<div class="content-edit">

<div class="context-block">



<div class="box-header">

<h1 class="context-title">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'class_identifier' );
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
      0 => 3,
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

$text .= '&nbsp;';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "class", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["class"] : null;
$var7 = compiledFetchAttribute( $var6, "nameList" );
unset( $var6 );
$var6 = $var7;
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var7 = compiledFetchAttribute( $var6, $var8 );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();

if ( isset( $var6 ) )
{
    $var5 = $var6;
}
else
{
    unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "class", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["class"] : null;
$var8 = compiledFetchAttribute( $var7, "name" );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();

    if ( isset( $var7 ) )
    {
        $var5 = $var7;
    }
}
unset( $var6, $var7 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = array( '%object_name' => $var4, '%class_name' => $var5 );unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( 'Edit <%object_name> (%class_name)', $var4 );
unset( $var3, $var4, $var5, $var6 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h1>

<div class="header-mainline"></div>

</div>

<div class="box-content">

<div class="context-information">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'content_class' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<p class="left class-description">
    ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "class", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["class"] : null;
$var3 = compiledFetchAttribute( $var2, "descriptionList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "class", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["class"] : null;
$var4 = compiledFetchAttribute( $var3, "description" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
</p>';
}
unset( $if_cond );
// if ends

$text .= '<p class="right translation">';
$vars[$currentNamespace]['language_index'] = 0;
$vars[$currentNamespace]['from_language_index'] = 0;
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var1 = compiledFetchAttribute( $var, 'translation_list' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['translation_list'] = $var;
unset( $var );
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'language_code' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'index', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['index'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'language_index', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['language_index'] = $var;
    unset( $var );
}
$text .= '  ';
}
unset( $if_cond );
// if ends

list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'languages' );
unset( $var );
$var = $var1;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['from_language_object'] = $var;
unset( $var );
$text .= '
    ';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language_object'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language_object'] : null;
$var7 = compiledFetchAttribute( $var6, 'locale' );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var6Data = array( 'value' => $var6 );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $var6Data, false, false );
$var6 = $var6Data['value'];
unset( $var6Data );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language_object'] : null;
$var9 = compiledFetchAttribute( $var8, 'locale' );
unset( $var8 );
$var8 = $var9;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var3 = ( $var4 . '&nbsp;<img src="' . $var6 . '" width="18" height="12" style="vertical-align: middle;" alt="' . $var8 . '" />' );
unset( $var4, $var6, $var8 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var6 = compiledFetchAttribute( $var5, $var7 );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'locale' );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'intl_language_name' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var8 = compiledFetchAttribute( $var7, $var9 );
unset( $var7 );
$var7 = $var8;
$var8 = compiledFetchAttribute( $var7, 'language_code' );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var7Data = array( 'value' => $var7 );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $var7Data, false, false );
$var7 = $var7Data['value'];
unset( $var7Data );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var11 );
unset( $var11 );
$var11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var11 ) ) $var11 = NULL;
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
$var10 = compiledFetchAttribute( $var9, $var11 );
unset( $var9 );
$var9 = $var10;
$var10 = compiledFetchAttribute( $var9, 'language_code' );
unset( $var9 );
$var9 = $var10;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var4 = ( $var5 . '&nbsp;<img src="' . $var7 . '" width="18" height="12" style="vertical-align: middle;" alt="' . $var9 . '" />' );
unset( $var5, $var7, $var9 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = array( '%from_lang' => $var3, '%to_lang' => $var4 );unset( $var3, $var4 );
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
$var = strtr( 'Translating content from %from_lang to %to_lang', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '

    ';
unset( $vars[$currentNamespace]['from_language_object'] );
}
else
{
$text .= '
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'locale' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'intl_language_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '&nbsp;<img src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'language_code' );
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'language_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
';
}
unset( $if_cond );
// if ends

unset( $vars[$currentNamespace]['language_index'] );
unset( $vars[$currentNamespace]['from_language_index'] );
unset( $vars[$currentNamespace]['translation_list'] );
$text .= '</p>
<div class="break"></div>
</div>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="content-translation">';
}
unset( $if_cond );
// if ends

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8bb2f094dc272600c15511711a305bca_1 ) ) $fe_variable_stack_8bb2f094dc272600c15511711a305bca_1 = array();
$fe_variable_stack_8bb2f094dc272600c15511711a305bca_1[] = compact( 'fe_array_8bb2f094dc272600c15511711a305bca_1', 'fe_array_keys_8bb2f094dc272600c15511711a305bca_1', 'fe_n_items_8bb2f094dc272600c15511711a305bca_1', 'fe_n_items_processed_8bb2f094dc272600c15511711a305bca_1', 'fe_i_8bb2f094dc272600c15511711a305bca_1', 'fe_key_8bb2f094dc272600c15511711a305bca_1', 'fe_val_8bb2f094dc272600c15511711a305bca_1', 'fe_offset_8bb2f094dc272600c15511711a305bca_1', 'fe_max_8bb2f094dc272600c15511711a305bca_1', 'fe_reverse_8bb2f094dc272600c15511711a305bca_1', 'fe_first_val_8bb2f094dc272600c15511711a305bca_1', 'fe_last_val_8bb2f094dc272600c15511711a305bca_1' );
$fe_array_8bb2f094dc272600c15511711a305bca_1 = array (
  0 => 'content/edit/autosave.tpl',
);
$fe_array_keys_8bb2f094dc272600c15511711a305bca_1 = is_array( $fe_array_8bb2f094dc272600c15511711a305bca_1 ) ? array_keys( $fe_array_8bb2f094dc272600c15511711a305bca_1 ) : array();
$fe_n_items_8bb2f094dc272600c15511711a305bca_1 = count( $fe_array_keys_8bb2f094dc272600c15511711a305bca_1 );
$fe_n_items_processed_8bb2f094dc272600c15511711a305bca_1 = 0;
$fe_offset_8bb2f094dc272600c15511711a305bca_1 = 0;
$fe_max_8bb2f094dc272600c15511711a305bca_1 = $fe_n_items_8bb2f094dc272600c15511711a305bca_1 - $fe_offset_8bb2f094dc272600c15511711a305bca_1;
$fe_reverse_8bb2f094dc272600c15511711a305bca_1 = false;
if ( $fe_offset_8bb2f094dc272600c15511711a305bca_1 < 0 || $fe_offset_8bb2f094dc272600c15511711a305bca_1 >= $fe_n_items_8bb2f094dc272600c15511711a305bca_1 )
{
    $fe_offset_8bb2f094dc272600c15511711a305bca_1 = ( $fe_offset_8bb2f094dc272600c15511711a305bca_1 < 0 ) ? 0 : $fe_n_items_8bb2f094dc272600c15511711a305bca_1;
    if ( $fe_n_items_8bb2f094dc272600c15511711a305bca_1 || $fe_offset_8bb2f094dc272600c15511711a305bca_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8bb2f094dc272600c15511711a305bca_1'. Array count: $fe_n_items_8bb2f094dc272600c15511711a305bca_1");   
}
}
if ( $fe_max_8bb2f094dc272600c15511711a305bca_1 < 0 || $fe_offset_8bb2f094dc272600c15511711a305bca_1 + $fe_max_8bb2f094dc272600c15511711a305bca_1 > $fe_n_items_8bb2f094dc272600c15511711a305bca_1 )
{
    if ( $fe_max_8bb2f094dc272600c15511711a305bca_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8bb2f094dc272600c15511711a305bca_1");
    $fe_max_8bb2f094dc272600c15511711a305bca_1 = $fe_n_items_8bb2f094dc272600c15511711a305bca_1 - $fe_offset_8bb2f094dc272600c15511711a305bca_1;
}
if ( $fe_reverse_8bb2f094dc272600c15511711a305bca_1 )
{
    $fe_first_val_8bb2f094dc272600c15511711a305bca_1 = $fe_n_items_8bb2f094dc272600c15511711a305bca_1 - 1 - $fe_offset_8bb2f094dc272600c15511711a305bca_1;
    $fe_last_val_8bb2f094dc272600c15511711a305bca_1  = 0;
}
else
{
    $fe_first_val_8bb2f094dc272600c15511711a305bca_1 = $fe_offset_8bb2f094dc272600c15511711a305bca_1;
    $fe_last_val_8bb2f094dc272600c15511711a305bca_1  = $fe_n_items_8bb2f094dc272600c15511711a305bca_1 - 1;
}
// foreach
for ( $fe_i_8bb2f094dc272600c15511711a305bca_1 = $fe_first_val_8bb2f094dc272600c15511711a305bca_1; $fe_n_items_processed_8bb2f094dc272600c15511711a305bca_1 < $fe_max_8bb2f094dc272600c15511711a305bca_1 && ( $fe_reverse_8bb2f094dc272600c15511711a305bca_1 ? $fe_i_8bb2f094dc272600c15511711a305bca_1 >= $fe_last_val_8bb2f094dc272600c15511711a305bca_1 : $fe_i_8bb2f094dc272600c15511711a305bca_1 <= $fe_last_val_8bb2f094dc272600c15511711a305bca_1 ); $fe_reverse_8bb2f094dc272600c15511711a305bca_1 ? $fe_i_8bb2f094dc272600c15511711a305bca_1-- : $fe_i_8bb2f094dc272600c15511711a305bca_1++ )
{
$fe_key_8bb2f094dc272600c15511711a305bca_1 = $fe_array_keys_8bb2f094dc272600c15511711a305bca_1[$fe_i_8bb2f094dc272600c15511711a305bca_1];
$fe_val_8bb2f094dc272600c15511711a305bca_1 = $fe_array_8bb2f094dc272600c15511711a305bca_1[$fe_key_8bb2f094dc272600c15511711a305bca_1];
$vars[$rootNamespace]['additional_tpl'] = $fe_val_8bb2f094dc272600c15511711a305bca_1;
$text .= '    ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'additional_tpl',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 140,
    1 => 4,
    2 => 6658,
  ),
  1 => 
  array (
    0 => 140,
    1 => 52,
    2 => 6706,
  ),
  2 => 'design/admin/templates/content/edit.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$fe_n_items_processed_8bb2f094dc272600c15511711a305bca_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8bb2f094dc272600c15511711a305bca_1 ) ) extract( array_pop( $fe_variable_stack_8bb2f094dc272600c15511711a305bca_1 ) );

else
{

unset( $fe_array_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_array_keys_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_n_items_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_n_items_processed_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_i_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_key_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_val_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_offset_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_max_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_reverse_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_first_val_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_last_val_8bb2f094dc272600c15511711a305bca_1 );

unset( $fe_variable_stack_8bb2f094dc272600c15511711a305bca_1 );

}

// foreach ends
$text .= '
<div class="context-attributes">
    ';
$oldRestoreIncludeArray_ef457c05e51c71417cd22a706bff4c2d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['view_parameters'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'view_parameters', $vars[$currentNamespace]['view_parameters'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['view_parameters'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'view_parameters', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['view_parameters'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/edit_attribute-50123880802f331a0344521cbd814a00.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/content/edit_attribute.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/edit_attribute-50123880802f331a0344521cbd814a00.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/content/edit_attribute.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_ef457c05e51c71417cd22a706bff4c2d;

$text .= '</div>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '</div>';
}
unset( $if_cond );
// if ends

$text .= '
</div>
<div class="controlbar">

<div class="block">
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_edit_show_re_edit" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <input type="checkbox" name="BackToEdit" />Back to edit
    ';
}
unset( $if_cond );
// if ends

$text .= '    <input class="defaultbutton" type="submit" name="PublishButton" value="Send for publishing" title="Publish the contents of the draft that is being edited. The draft will become the published version of the object." />
    <input class="button" type="submit" name="StoreButton" value="Store draft" title="Store the contents of the draft that is being edited and continue editing. Use this button to periodically save your work while editing." />
    <input class="button" type="submit" name="StoreExitButton" value="Store draft and exit" title="Store the draft that is being edited and exit from edit mode. Use when you need to exit your work and return later to continue." />
    <input class="button" type="submit" name="DiscardButton" value="Discard draft" onclick="return confirmDiscard( \'';
unset( $var );
$var = 'Are you sure you want to discard the draft?' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\' );" title="Discard the draft that is being edited. This will also remove the translations that belong to the draft (if any)." />
    <input type="hidden" name="DiscardConfirm" value="1" />
</div>

</div>

</div>
<a href="#columns" class="scroll-to-top">&uarr;&nbsp;Go to the top</a>

';
$oldRestoreIncludeArray_7f033f368863c930273aac0fc0a02fb9 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/edit_relations-683ec6f71cf21a7170303a75c03a6728.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/content/edit_relations.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/edit_relations-683ec6f71cf21a7170303a75c03a6728.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/content/edit_relations.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_7f033f368863c930273aac0fc0a02fb9;

$text .= '


';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$if_cond1 = eZPreferences::value( "admin_edit_show_locations" );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond3Data = array( 'value' => $if_cond3 );
$tpl->processOperator( 'count',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'invalid_node_assignment_list',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond3Data, false, false );
$if_cond3 = $if_cond3Data['value'];
unset( $if_cond3Data );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) > ( 0 ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    
    ';
$oldRestoreIncludeArray_18d4ce00f339abc518f0198682f86307 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/edit_locations-28a48f4c10dc30982f3243c5020b3c46.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/content/edit_locations.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/edit_locations-28a48f4c10dc30982f3243c5020b3c46.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/content/edit_locations.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_18d4ce00f339abc518f0198682f86307;

}
else
{
$text .= '    
    <input type="hidden" name="UseNodeAssigments" value="0" />';
}
unset( $if_cond );
// if ends

$text .= '
</div>

<!-- Maincontent END -->
</div>
<div class="break"></div>
</div></div>

</form>





<script type="text/javascript">
function confirmDiscard( question )
{
    // Disable/bypass the reload-based (plain HTML) confirmation interface.
    document.editform.DiscardConfirm.value = "0";

    // Ask user if she really wants do it, return this to the handler.
    return confirm( question );
}
</script>

';

$setArray = $oldSetArray_5722c59c8cbb87c0ba4f5f4ce35c0a23;
$tpl->Level--;
?>
