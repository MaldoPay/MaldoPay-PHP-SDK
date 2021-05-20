<?php
namespace MaldoPay\SDK\Services;

class PayGateWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2084;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 2208400;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}