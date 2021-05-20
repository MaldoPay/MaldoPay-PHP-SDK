<?php
namespace MaldoPay\SDK\Services;

class PayKwikWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2067;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 2206700;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}