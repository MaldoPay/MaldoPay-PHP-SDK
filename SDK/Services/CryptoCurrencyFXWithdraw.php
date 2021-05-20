<?php
namespace MaldoPay\SDK\Services;

class CryptoCurrencyFXWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2057;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 2205700;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}