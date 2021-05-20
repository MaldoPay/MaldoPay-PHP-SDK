<?php
namespace MaldoPay\SDK\Services;

class PayFixWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2079;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 200;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}