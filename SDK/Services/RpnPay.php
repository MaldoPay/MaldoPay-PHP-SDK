<?php
namespace MaldoPay\SDK\Services;

class RpnPay extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2080;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 2208000;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}