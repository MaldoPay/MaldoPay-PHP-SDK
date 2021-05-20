<?php
namespace MaldoPay\SDK\Services;

class AliPayWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2088;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 2208800;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}