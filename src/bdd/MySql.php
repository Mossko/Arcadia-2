<?php

class MySql
{

    private string $dbname;
    private string $dbuser;
    private string $dbPassword;
    private string $dbPort;
    private string $dbhost;

    private static $_instance = null;

    private function __construct()
    {
        $dbconf = parse_ini_file(APP_ROOT . "/" . APP_ENV);
        var_dump($dbconf);
    }

    public static function getInstance(): self
    {
        if (is_null(self::$_instance)) {
            var_dump("Nvl instance");
            self::$_instance = new mySQL();
        }

        return self::$_instance;
    }
}
