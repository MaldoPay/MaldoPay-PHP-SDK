<?php
namespace MaldoPay\SDK\Services;

class CryptoCurrencyFX extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2047;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 228;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}