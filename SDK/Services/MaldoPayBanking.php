<?php
namespace MaldoPay\SDK\Services;

class MaldoPayBanking extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2036;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 218;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}