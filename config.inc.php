<?php

$config = array();

// ----------------- IMAP --------------------
// Master password to fallback to in case the OIDC provider
// does not supply a cleartext password
$config['oidc_imap_master_password'] = '';

// --------------- Provider ------------------
// URL for OIDC
$config['oidc_url'] = 'https://testsso.iitb.ac.in';

// Client ID already registered on the provider
$config['oidc_client'] = 'gkroundcube';

// Client secret corresponding to the given client ID
$config['oidc_secret'] = 'round_secret';

// -------------- User Fields -----------------
// Field for login UID. This may be an email ID
$config['oidc_field_uid'] = 'uid';

// Field for cleartext password
$config['oidc_field_password'] = 'password';

// Field for IMAP server
$config['oidc_field_server'] = 'imap_server';

