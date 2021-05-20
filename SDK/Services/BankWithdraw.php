<?php
namespace MaldoPay\SDK\Services;

class BankWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2012;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 205;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}