<?php
namespace MaldoPay\SDK\Services;

class HemenOdeCC extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2073;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 220730;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}