# Roundcube OIDC

This plugin allows you to authenticate users to roundcube using an OpenID Connect 1.0 provider. There are three modes to run the plugin in:
1. **Cleartext Password**: The OIDC provider must supply the user's password in cleartext, which is then used to login to the IMAP server
2. **Master Password**: In this mode (also falls back to this), a master password is used to login to the IMAP server with the username obtained from OIDC
3. **Master User**: IMAP authentication is done using a master user ([https://doc.dovecot.org/configuration_manual/authentication/master_users/](Dovecot)) with a provided separator

Check the `config.inc.php` for more details on configuration.

## SMTP
Note that unless cleartext passwords are provided, SMTP must necessarily be configured use a master password

## Installation
To install, get the plugin with composer in your roundcube directory
```
composer require radialapps/roundcube-oidc
```

## License
Permissively licensed under the MIT license

