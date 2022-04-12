<?php
namespace MaldoPay\SDK\Services;

class ParazulaDeposit extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2150;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 311;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}