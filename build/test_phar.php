<?php
require __DIR__ . '/artifacts/dts-bulk-data-exchange.phar';

$service = new \DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService(array(
    'apiVersion' => '123'
));

echo 'Version=' . \DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService::VERSION;
