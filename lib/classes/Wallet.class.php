<?php

class Wallet extends Bitcoin {

    /**
     * @var Wallet Current wallet connection
     */
    private static $instance;

    /**
     * Connect to the wallet
     */
    function __construct() {
        global $config;

        parent::__construct($config['wallet']['user'], $config['wallet']['pass'], $config['wallet']['host'], $config['wallet']['port']);
    }

    /**
     * Create a new wallet connection if no connection exists and then return the current connection
     *
     * @return Wallet Current wallet connection
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Wallet();
        }

        return self::$instance;
    }
}