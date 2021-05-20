<?php
namespace MaldoPay\SDK\Services;

class RpnPayWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2081;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 2208100;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}