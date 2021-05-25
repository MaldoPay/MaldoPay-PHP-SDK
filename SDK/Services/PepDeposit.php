<?php
namespace MaldoPay\SDK\Services;

class PepDeposit extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2102;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 300;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}