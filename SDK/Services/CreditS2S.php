<?php
namespace MaldoPay\SDK\Services;

class CreditS2S extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2116;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 200;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}