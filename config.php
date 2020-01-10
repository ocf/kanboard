<?php

define('DB_DRIVER', 'mysql');
define('DB_USERNAME', 'ocfkanboard');
# DB_PASSWORD is defined in the config.php that is in the data volume
define('DB_HOSTNAME', 'mysql.ocf.berkeley.edu');
define('DB_NAME', 'ocfkanboard');

define('OAUTH_GROUP_ADMIN', 'ocfroot');
define('HIDE_LOGIN_FORM', true);

define('MAIL_TRANSPORT', 'smtp');
define('MAIL_SMTP_HOSTNAME', 'smtp.ocf.berkeley.edu');
define('MAIL_SMTP_PORT', 25);
define('MAIL_SMTP_ENCRYPTION', 'tls');
define('MAIL_FROM', 'ocfkanboard@ocf.berkeley.edu');

# PLUGINS ARE A POTENTIAL SECURITY RISK, ocfroot please be careful
define('PLUGIN_INSTALLER', true);
