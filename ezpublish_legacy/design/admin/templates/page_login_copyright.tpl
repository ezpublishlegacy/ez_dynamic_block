{* DO NOT EDIT THIS FILE! Use an override template instead. *}
<p>
{' <a href="%ezpublish_link">eZ Publish</a> Copyright &copy; 1999-2014 <a href="%ez_link">eZ Systems AS</a> and others.'|i18n( 'design/admin/page_copyright',, hash( '%evaluate_link', 'http://ez.no', '%share_link', 'http://share.ez.no', '%ezpublish_link', 'http://ez.no/ezpublish', '%ez_link', 'http://ez.no' ) )}{' For more information see <a href=%about_link>ezinfo/about</a>.'|i18n( 'design/admin/page_copyright',, hash( '%edition', fetch( 'setup', 'edition' ), '%about_link', "/ezinfo/about"|ezurl ) )}
</p>