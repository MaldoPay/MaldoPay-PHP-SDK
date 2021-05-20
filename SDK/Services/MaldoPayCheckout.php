<?php
namespace MaldoPay\SDK\Services;

class MaldoPayCheckout extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2031;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 214;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}