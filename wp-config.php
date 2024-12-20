// Disable file editing in WordPress admin
define('DISALLOW_FILE_EDIT', true);

// Force SSL for admin
define('FORCE_SSL_ADMIN', true);

// Disable XML-RPC (if you don't use it)
define('XMLRPC_ENABLED', false);

// Disable WordPress auto-update
define('AUTOMATIC_UPDATER_DISABLED', true);

// Limit post revisions
define('WP_POST_REVISIONS', 5);

// Set authentication keys (get from https://api.wordpress.org/secret-key/1.1/salt/)
define('AUTH_KEY',         'your-unique-key');
define('SECURE_AUTH_KEY',  'your-unique-key');
define('LOGGED_IN_KEY',    'your-unique-key');
define('NONCE_KEY',        'your-unique-key');
define('AUTH_SALT',        'your-unique-key');
define('SECURE_AUTH_SALT', 'your-unique-key');
define('LOGGED_IN_SALT',   'your-unique-key');
define('NONCE_SALT',       'your-unique-key'); 