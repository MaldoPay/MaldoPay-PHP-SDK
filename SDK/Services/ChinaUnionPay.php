<?php
namespace MaldoPay\SDK\Services;

class ChinaUnionPay extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2083;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 2208300;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}