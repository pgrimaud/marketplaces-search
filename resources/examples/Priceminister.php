<?php

require_once __DIR__.'/../../vendor/autoload.php';

$search = 'go pro hero 4';

$credentials = [
    'login' => 'XXXX',
    'password' => 'YYYY'
];

$result = new PGrimaud\MarketplacesSearch\Marketplaces\PriceministerMarketplace($search, $credentials);