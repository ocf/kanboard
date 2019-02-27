<?php

define('DB_DRIVER', 'mysql');
define('DB_USERNAME', 'ocfkanboard');
# DB_PASSWORD is defined in the config.php that is in the data volume
define('DB_HOSTNAME', 'mysql.ocf.berkeley.edu');
define('DB_NAME', 'ocfkanboard');

define('LDAP_AUTH', true);
define('LDAP_SERVER', 'ldaps://ldap.ocf.berkeley.edu');
define('LDAP_USER_FILTER', 'uid=%s');

define('LDAP_GROUP_PROVIDER', true);
define('LDAP_GROUP_BASE_DN', 'ou=Group,dc=OCF,dc=Berkeley,dc=EDU');
define('LDAP_GROUP_FILTER', '(&(objectClass=posixGroup)(cn=%s*))');
define('LDAP_GROUP_USER_FILTER', '(&(objectClass=posixGroup)(memberUid=%s))');
define('LDAP_GROUP_ADMIN_DN', 'cn=ocfroot,ou=Group,dc=OCF,dc=Berkeley,dc=EDU');
