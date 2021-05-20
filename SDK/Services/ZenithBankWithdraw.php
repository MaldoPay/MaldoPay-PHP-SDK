<?php
namespace MaldoPay\SDK\Services;

class ZenithBankWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2113;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 214;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}