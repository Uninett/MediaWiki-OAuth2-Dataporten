MediaWiki-OAuth2-Github
==========================

MediaWiki OAuth2 Github Extension

OAuth2 extension for MediaWiki to integrate Github as an identity provider.

MediaWiki implementation of the [OAuth2 Client library](https://github.com/kasperrt/OAuth2-Client).

Required settings in global $wgOAuth2Github (in your `LocalSettings.php`) 

    $wgOAuth2Github['client']['id']             = '';
    $wgOAuth2Github['client']['secret']         = '';

Optional settings in global $wgOAuth2Github (in your `LocalSettings.php`) 

    $wgOAuth2Github['config']['required_org']   = 'LosFuzzys';
    $wgOAuth2Github['config']['auth_endpoint']  = 'https://github.com/login/oauth/authorize'; 
    $wgOAuth2Github['config']['token_endpoint'] = 'https://github.com/login/oauth/access_token';
    $wgOAuth2Github['config']['info_endpoint']  = 'https://api.github.com/user';
    $wgOAuth2Github['config']['auth_type']      = 'token';


The callback url back to your wiki would be:

    http://your.wiki.domain/path/to/wiki/Special:OAuth2Github/callback


License
-------
MIT

