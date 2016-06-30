MediaWiki-OAuth2-Dataporten
==========================

MediaWiki OAuth2 Dataporten Extension

MediaWiki implementation of the [OAuth2 Client library](https://github.com/kasperrt/OAuth2-Client).

Required settings in global $wgOAuth2Dataporten

    $wgOAuth2Dataporten['client']['id']             = '';
    $wgOAuth2Dataporten['client']['secret']         = '';
    $wgOAuth2Dataporten['config']['auth_endpoint']  = 'https://auth.dataporten.no/oauth/authorization'; 
    $wgOAuth2Dataporten['config']['token_endpoint'] = 'https://auth.dataporten.no/oauth/token';
    $wgOAuth2Dataporten['config']['info_endpoint']  = 'https://auth.dataporten.no/userinfo';
    $wgOAuth2Dataporten['config']['auth_type']      = 'Bearer';

All settings should be changed.

The callback url back to your wiki would be:

    http://your.wiki.domain/path/to/wiki/Special:OAuth2Dataporten/callback

License
-------
MIT

