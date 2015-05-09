<?php

class DB extends PDO {

    /**
     * @var DB Current database connection
     */
    private static $instance;

    /**
     * Connect to the database
     */
    function __construct() {
        global $config;

        $dsn = "mysql:host=" . $config['database']['host'] . ";dbname=" . $config['database']['database'];
        parent::__construct($dsn, $config['database']['username'], $config['database']['password']);
    }

    /**
     * Create a new database connection if no connection exists and then return the current connection
     *
     * @return DB Current database connection
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new DB();
        }

        return self::$instance;
    }
}