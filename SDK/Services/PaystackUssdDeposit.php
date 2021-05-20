<?php
namespace MaldoPay\SDK\Services;

class PaystackUssdDeposit extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2108;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 200;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}