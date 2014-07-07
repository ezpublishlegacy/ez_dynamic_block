<?php
// URI:       design:content/edit/autosave.tpl
// Filename:  extension/ezautosave/design/admin/templates/content/edit/autosave.tpl
// Timestamp: 1396700264 (Sat Apr 5 5:17:44 PDT 2014)
$oldSetArray_ad14e2d1b0b18943a27879a402f4f2d0 = isset( $setArray ) ? $setArray : array();
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
<!--[if IE 6]>
<style>
.controlbar-fixed #preview-link, .controlbar-fixed #preview-spacer
{
display:none;
}
</style>
<![endif]-->

';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::yui3',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezautosubmit.js',
            2 => false,
          ),
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
<script type="text/javascript">

YUI(YUI3_config).use(\'ezautosubmit\', \'ezcontentpreview\', \'node-base\', \'node-style\', function (Y) {
    var as = new Y.eZ.AutoSubmit({
            form: \'#editform\',
            ignoreClass: \'no-autosave\',
            action: ';
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
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var1 = ( 'ezjscore/call/ezautosave::savedraftpreview::' . $var3 . '::' . $var5 . '::' . $var7 . '?ContentType=javascript' );
unset( $var3, $var5, $var7 );
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

$text .= ',
            interval: 180,
            trackUserInput: ';
unset( $var );
if ( true )
{
    $var = "true";
}
else
{
    
    $var = 'false';
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
        }),
        messages = {
            error: "';
unset( $var );
$var = 'An error occurred while autosaving the draft' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
            saving: "';
unset( $var );
$var = 'The draft is being saved' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
        },
        preview = new Y.eZ.ContentPreview({
            texts: {
                loading: "';
unset( $var );
$var = 'Loading...' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                error: "';
unset( $var );
$var = 'An error occurred.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                preview: "';
unset( $var );
$var = 'Preview' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
            },
            topPosition: Y.one(\'#controlbar-top .box-bc\').getStyle(\'height\')
        }),
        timer = false, place;

    

    as.on(\'abort\', function() {
        place.removeClass(\'as-saving\')
             .removeClass(\'as-error\')
             .removeClass(\'as-success\')
             .setContent(\'\');
    });

    as.on(\'error\', function (e) {
        if ( timer ) {
            timer.cancel();
        }
        place.removeClass(\'as-saving\')
             .removeClass(\'as-success\')
             .addClass(\'as-error\')
             .setContent(\'<span>\' + messages.error + \'</span>\');
        if ( e.json && e.json.error_text ) {
            place.setAttribute(\'title\', e.json.error_text);
            preview.error(e.json.error_text);
        } else {
            preview.error();
        }
    });

    as.on(\'init\', function () {
        var that = this;
        Y.one(\'#controlbar-top .button-right\').prepend(
            \'<em id="ez-as-place"></em>\'
        );
        place = Y.one(\'#ez-as-place\');
        preview.init();

        ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= 'Y.all(this.conf.form + \' input[name=StoreButton]\').each(function () { this.hide() });';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
$if_cond = false;
if ( $if_cond )
{
$text .= 'Y.all(this.conf.form + \' #preview-link\').each(function () { this.hide() });';
}
unset( $if_cond );
// if ends

$text .= '
        Y.on(\'beforeunload\', function (e) {
            setTimeout(function () {
                that.submit("StoreExitButton=1");
            }, 0);
        });
    });

    as.on(\'beforesave\', function () {
        place.addClass(\'as-saving\')
             .removeClass(\'as-error\')
             .removeClass(\'as-success\')
             .setContent(messages.saving)
             .setAttribute(\'title\', \'\');
        preview.loading();
    });

    as.on(\'success\', function (e) {
        var counter = 0,
            msgAgo = e.json.content.message_ago,
            updateMsg = function () {
                var n = msgAgo.replace(counter, counter + 1);
                place.setContent(place.getContent().replace(msgAgo, n));
                msgAgo = n;
                counter++;
            };

        place.removeClass(\'as-error\')
             .removeClass(\'as-saving\')
             .addClass(\'as-success\')
             .setContent(e.json.content.message_success + \' \' + msgAgo)
             .setAttribute(\'title\', \'\');
        preview.setContent(e.json.content.preview);
        if ( timer ) {
            timer.cancel();
        }
        timer = Y.later(60000, this, updateMsg, [], true);
    });

    as.start();
    
});

</script>
';

$setArray = $oldSetArray_ad14e2d1b0b18943a27879a402f4f2d0;
$tpl->Level--;
?>
