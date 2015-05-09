<?php

/**
 * Site configuration options
 *
 * General:
 *  - Name: Site name
 *  - Tagline: Site tagline displayed in URL bar an in SEO
 *  - Currency: Full currency name (Bitcoin)
 *  - Ticker: Abbreviated currency (BTC)
 * Url:
 *  - Protocol: Site protocol (http:// or https://)
 *  - Domain: Site domain without ending slash (casino.example.com)
 * Database:
 *  - Host: Database host (localhost)
 *  - Port: Database port (3306)
 *  - Database: Database
 *  - User: Database username
 *  - Pass: Database password
 * Wallet:
 *  - Host: Wallet host (localhost)
 *  - Port: Wallet rpc port (8332)
 *  - User: Wallet rpc username
 *  - Pass: Wallet rpc password
 */
$config = array(
    'general' => array(
        'name' => '',
        'tagline' => '',
        'currency' => '',
        'ticker' => ''
    ),
    'url' => array(
        'protocol' => '',
        'domain' => ''
    ),
    'db' => array(
        'host' => '',
        'port' => '',
        'database' => '',
        'user' => '',
        'pass' => ''
    ),
    'wallet' => array(
        'host' => '',
        'port' => '',
        'user' => '',
        'pass' => ''
    )
);