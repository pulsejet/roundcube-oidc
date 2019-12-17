# Roundcube OIDC

This plugin allows you to authenticate users to roundcube using an OpenID Connect 1.0 provider. There are two modes to run the plugin in:
1. **Cleartext Password**: In this mode, the OIDC provider must supply the user's password in cleartext, which is then used to login to the IMAP server
2. **Master Password**: In this mode (also falls back to this), a master password is used to login to the IMAP server with the username obtained from OIDC

Check the `config.inc.php` for more details on configuration.

## Installation
To install, get the plugin with composer in your roundcube directory
```
composer require radialapps/roundcube-oidc
```

## License
Permissively licensed under the MIT license

