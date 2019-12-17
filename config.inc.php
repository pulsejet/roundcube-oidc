<?php

$config = array();

// Master password to fallback to in case the OIDC provider
// does not supply a cleartext password
$config['oidc_imap_master_password'] = '';

// URL of the OIDC provider
$config['oidc_url'] = 'https://testsso.iitb.ac.in';

// Client ID already registered on the provider
$config['oidc_client'] = 'gkroundcube';

// Client secret corresponding to the given client ID
$config['oidc_secret'] = 'round_secret';

