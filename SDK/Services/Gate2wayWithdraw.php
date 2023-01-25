<?php
namespace MaldoPay\SDK\Services;

class Gate2wayWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2174;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 311;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}
