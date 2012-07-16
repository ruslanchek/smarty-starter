<?php
    error_reporting(E_ALL | E_STRICT);

    Class Config{
        public $db_vars = array(
            'host'  => 'mysql_server_hostname_or_ip_address',
            'db'    => 'mysql_db_name',
            'user'  => 'mysql_username',
            'pass'  => 'mysql_password'
        );
    };
?>