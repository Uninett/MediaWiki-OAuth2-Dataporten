<?php
class OAuth2DataportenHooks {

	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {

	    $script = '<link rel="stylesheet" type="text/css" href="extensions/OAuth2Dataporten/modules/OAuth2Dataporten.css">';

	    $out->addHeadItem("jsonTree script", $script);

	    return true;

	}
	public static function onUserLoginForm( &$tpl ) {
		global $wgRequest;
	   	$header = $tpl->get( 'header' );
	   	$header .= '<a class="mw-ui-button dataporten-button" href="' . Skin::makeSpecialUrlSubpage( 'OAuth2Dataporten', 'redirect', 'returnto='.$wgRequest->getVal('returnto') ) . '">Login with Github</a>';
	   	$tpl->set( 'header', $header );
	}

	public static function onUserLogout( &$user ) {
		return true;
	}

	public static function getOAuth2VendorClassPath() {
		return dirname(__FILE__) . DIRECTORY_SEPARATOR . 'vendors' . DIRECTORY_SEPARATOR . 'oauth_2';
	}

	public static function onLoadExtensionSchemaUpdates( DatabaseUpdater $updater ) {
		$updater->addExtensionTable( 'github_states',
			__DIR__ . '/sql/state.sql' );
		$updater->addExtensionTable( 'github_users',
			__DIR__ . '/sql/users.sql' );
		$updater->doUpdates();
		return true;
	}
}
