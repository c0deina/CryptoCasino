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
        'name' => 'Omnichain Casino',
        'tagline' => 'Win OMC NOW!',
        'currency' => 'Omnicoin',
        'ticker' => 'OMC'
    ),
    'url' => array(
        'protocol' => 'http://',
        'domain' => 'localhost:81'
    ),
    'db' => array(
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'casino',
        'user' => 'root',
        'pass' => ''
    ),
    'wallet' => array(
        'host' => 'localhost',
        'port' => '43555',
        'user' => 'casino',
        'pass' => 'casino'
    )
);