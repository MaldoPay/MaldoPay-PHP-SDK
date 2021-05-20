<?php
namespace MaldoPay\SDK\Services;

class BankDeposit extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2006;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 200;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}