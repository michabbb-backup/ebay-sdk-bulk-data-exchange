<?php

use DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService;

class BulkDataExchangeBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BulkDataExchangeBaseService();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService', $this->obj);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->obj);
    }
}
